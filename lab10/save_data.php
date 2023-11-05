<?php

$file = fopen("data.txt","a+");
$fnamestr = $_POST['fname'].PHP_EOL;
$lnamestr = $_POST['lname'].PHP_EOL;
echo fwrite($file,$fnamestr);
echo fwrite($file,$lnamestr);
fclose($file);

?> 