<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "purva";

$conn = new mysqli($servername, $username, $password, $database);
if($conn->connect_error){
	die("connection failed". $conn->connect_error);
}
else{
	echo "connected succesfully";
}

$sql = "INSERT INTO courses (Name, Email) VALUES ('Purva', 'singhpurva2906@gmail.com') ";
if ($conn->query($sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>