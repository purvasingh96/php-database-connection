<?php
$myfile = fopen("hello.txt", "w") or die("unable to open file");
//echo 
//fread($myfile, filesize("hello.txt"));
//echo "<br>";
//echo fgets($myfile);
//fclose($myfile);

//while(!feof($myfile)){
//	echo(fgets($myfile))."<br>";
//}
$txt = "Purva Singh\n";
fwrite($myfile, $txt);
while(!feof($myfile)){
echo(fgets($myfile))."<br>";
}
fclose($myfile);
?>
