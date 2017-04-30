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

$sql = "SELECT id, Name, Email, Register_date FROM courses ";
$result = $conn->query($sql);
if($result->num_rows>0){
	while($row = $result->fetch_assoc()){
		 echo "id: ".$row["id"]."name: ".$row["Name"]."email: ".$row["Email"];
	}
}
else{
	echo "0 results";
}

mysqli_close($conn);
?>