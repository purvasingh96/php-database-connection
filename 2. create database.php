<?php
$servername="localhost";
$username="root";
$password="";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
	}

	$sql = "CREATE DATABASE purva";
	if($conn->query($sql) === TRUE){
		echo "database created successfully";
	}
	else{
		echo "error creating database ".$conn->error;
	}
	$conn->close();


?>