$('document').ready(function(){

});

function logout(){
	fetch("/scripts/mng_user.php?action=logout", {method:"POST"})
		.then(data=>data.json())
		.then((data)=>{
			if(data.status === "true"){
				console.log("Go home");
			}else{
				console.log("Handle error");
			};
		});
}

function login(username, password){
	let formData = new FormData();
	formData.append("username", username);
	formData.append("password", password);
	fetch("/scripts/mng_user.php?action=login", {method:"POST", body: formData})
		.then(data=>data.json())
		.then((data)=>{
			console.log(data);
		});
}

function register(username, password, confPassword, email){
	let formData = new FormData();
	formData.append("username", username);
	formData.append("password", password);
	formData.append("conf_password", confPassword);
	formData.append("email", email);
	fetch("/scripts/mng_user.php?action=register", {method:"POST", body: formData})
		.then(data=>data.json())
		.then((data)=>{
			console.log(data);
		});
}

