<?php

$file = fopen("data.txt","a+");
$fnamestr = $_GET['fname'];
$lnamestr = $_GET['lname'];
echo fwrite($file,$fnamestr);
echo fwrite($file,$lnamestr);
fclose($file);

?> 