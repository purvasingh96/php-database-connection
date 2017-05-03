<?php
//fwrite opens up a new file and then writes content to it
$myfile = fopen("fwrites.txt", "w");
$txt = "this is purva";
fwrite($myfile, $txt);

while(!feof($myfile)){
	echo fgets($myfile);
}
fclose($myfile);

?>