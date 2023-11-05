<?php

$file = fopen("data.txt","a");
$fnamestr = document.getElementById('fname').value;
$lnamestr = document.getElementById('lname').value;
echo fwrite($file,$fnamestr);
echo fwrite($file,$lnamestr);
fclose($file);

?> 