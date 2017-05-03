<?php

$servername="localhost";
$username = "root";
$password="";
$database="details";

$ipname = $_POST["name"];
$ipage = $_POST["age"];
$ipemail = $_POST["email"];
$ipcontact = $_POST["contact"];

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$sql = "INSERT INTO userinfo ( name, email, age, contact) VALUES ('$ipname', '$ipemail', '$ipage', '$ipcontact')";
$result=$conn->query($sql);
if($result){
	echo "success";
	header("Location: datbase.php");
}
else{
	echo "failure";
}

$conn->close();
?>