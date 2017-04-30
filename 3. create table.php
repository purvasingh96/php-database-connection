<?php
$servername="localhost";
$username="root";
$password="";
$database="purva";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
else{
	echo "connected successfully";
}
$sql = "CREATE TABLE courses( id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL, Register_date TIMESTAMP)";

if ($conn->query($sql) === TRUE){
	echo "Courses table created successfully";	
}
else{
	echo "problem creating table ".$conn->error;
}
$conn->close();
?>