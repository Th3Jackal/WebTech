<?php

$file = fopen("data.txt","a+");
$fnamestr = $_GET['fname'];
$lnamestr = $_GET['lname'];
echo fwrite($file,$fnamestr);
echo fwrite($file,$_GET['fname']);
echo fwrite($file,$lnamestr);
echo fwrite($file,$_GET['lname']);
fclose($file);

?> 