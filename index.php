<?php
$myfile = fopen("index.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.txt"));
fclose($myfile);
?>
