<?php

$host = "localhost";
$user = "root";
$pass = "";
$name = "tutto";

$connection_string = "mysql:dbname=$name;host=$host";

$connection = null;
try{
    $connection = new PDO($connection_string, $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $connection = false;
    echo "Failed to connect to database.";
}
