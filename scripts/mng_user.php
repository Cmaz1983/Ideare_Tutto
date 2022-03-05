<?php
	include_once("helpers.php");

	$action = $_GET['action']; // See what action

	//◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥
    // Logout 
	if($action === 'logout'){
		if($_SERVER['REQUEST_METHOD'] !== "POST"){
			exit; // Check if the request method is post
		};
		@session_start(); // Start session
		if(session_destroy()){ // Delete all session data
			echo json_success(); // Return JSON happy
		}else{
			echo json_error(false); // Return json sad
		};
		exit; // Stop executing code.

	//◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥
    // Login
	}else if($action === 'login'){
		if($_SERVER['REQUEST_METHOD'] !== "POST"){
			exit; // Check if the request method is post
		};
		include_once("inc_database.php"); // include our database connection script
		if(!$connection){
			exit; // Check connection is open
		}

		// get user inputs
		$username = getPOST("username");
		$password = getPOST("password");
		
		// Setup SQL string
		$sql = "SELECT user_id, user_username, user_password, user_activated FROM user WHERE user_username='$username' OR user_email='$username'";
		// Create query object
		$query = $connection->prepare($sql);
		if($query->execute()){
			// Loop over returned rows
			while($row = $query->fetch(PDO::FETCH_ASSOC)){
				// Check if password matches database
				if(password_verify($password, $row['user_password'])){
					if($row['user_activated'] == "1"){ // Check if user is activated
						@session_start();
						$_SESSION['uid'] = $row['user_id']; // Set user id to session
						echo json_success(); // :)
					}else{
						echo json_error("Account not activated");
					}
					exit;
				}
			}
			echo json_error(false); // false if no message to return
			exit;
		}else{
			echo "Failed to execute query"; // Something wrong with SQL
			exit;
		}
	
	//◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥
    // Register
	}else if($action === "register"){
		if($_SERVER['REQUEST_METHOD'] !== "POST"){
			exit; // Check if the request method is post
		};
		include_once("inc_database.php"); // include our database connection script
		if(!$connection){
			exit; // Check connection is open
		}

		// Check and get user inputs
		$username = getPOST("username");
		$email = getPOST("email");
		$password = getPOST("password");
		$conf_password = getPOST("conf_password");

		// Make sure the password matches confirm password
		if($password !== $conf_password){
			echo json_error("Passwords do not match"); // :(
			exit;
		}

		if(!$username || !$password || !$conf_password || !$email){
			echo json_error("Invalid inputs");
			exit;
		}

		$sql = "SELECT user_id FROM user WHERE user_username='$username' OR user_email='$email'";
		$query = $connection->prepare($sql);
		if($query->execute()){
			$count = $query->rowCount();
			if($count > 0){
				echo json_error("username or email taken");
				exit;
			}
		}else{
			echo json_error("Failed to execute user check");
			exit;
		}

		// Hash the password
		$enc_password = password_hash($password, PASSWORD_BCRYPT, ["cost"=>12]);
		$verification_code = uniqid();

		ini_set('SMTP','localhost');
		ini_set('smtp_port',25);
		$headers  = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
		$headers  .= "From: NO-REPLY<no-reply@mydomain.com>" . "\r\n";

		$sql = "INSERT INTO user (`user_username`, `user_password`, `user_email`, `user_verification`) VALUES (?,?,?,?)";
		$query = $connection->prepare($sql);
		if($query->execute([$username, $enc_password, $email, $verification_code])){
			$html = "<a href='http://localhost/scripts/mng_user.php?action=verify&code=".$verification_code."&email=".$email."'>Verify your email!</a>";
			if(!mail($email, "Verify your account", $html, $headers)){
				echo json_error("Account created, could not send email, verification code is ".$verification_code);
				exit;
			};
			echo json_success();
			exit;
		}else{
			echo json_error(":(");
			exit;
		};

	//◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥◤◢◣◥◤ ◢◣◆◢◣◥◤◢◣◥
    // verify
	}else if($action === "verify"){
		if($_SERVER['REQUEST_METHOD'] !== "GET"){
			exit; // Check if the request method is post
		};
		include_once("inc_database.php"); // include our database connection script
		if(!$connection){
			exit; // Check connection is open
		}

		$code = getGET("code");
		$email = getGET("email");

		$sql = "UPDATE user SET user_activated=1, user_verification='' WHERE user_email='$email' AND user_verification='$code'";
		$query = $connection->prepare($sql);
		if($query->execute()){
			$count = $query->rowCount();
			if($count > 0){
				header('Location: /');
			}else{
				echo json_error(false);
			}
			exit;
		}
	}
?> 
