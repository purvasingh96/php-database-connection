<?php
$target_dir= "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadok=1;
$imagefiletype= pathinfo($target_file, PATHINFO_EXTENSION);
if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check!== false){
		echo "file is an image".$check["mime"].".";
		$uploadok=1;
	}
	if(file_exists($target_file)){
		echo "file already exisits";
		$uploadok=0;
	}
	if($_FILES["fileToUpload"]["size"]>5000000){
		echo "file limit crossed";
		$uploadok=0;
	}
	if($imagefiletype!="jpg" && $imagefiletype!="jpeg" && $imagefiletype!="png"){
		echo "only image files allowed";
		$uploadok=0;
	}
	
}

?>