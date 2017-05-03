<?php

$servername="localhost";
$username = "root";
$password="";
$database="details";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}

$sql = "SELECT * FROM userinfo";
$result=$conn->query($sql);
//$row=array();
if($result->num_rows>0){
	
							
							echo "<table width=\"100%\" border=\"1\" cellspacing=\"10\" align=\"center\" >";
							echo "<th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Contact</th>";
							//echo "</table>";
							while($row= $result->fetch_assoc()){
								echo "<tr>";
								echo "<td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["age"]."</td><td>".$row["contact"]."</td>"; 
						        echo "</tr>";

						        }
							echo "</table>";
							 
}
else{
	echo "0 results";
}


$conn->close();
?>
