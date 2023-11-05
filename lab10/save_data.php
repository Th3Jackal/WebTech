<?php

$file = fopen("data.txt","a");
echo fwrite($file,$_GET['fname']." ".$_GET['lname']);
fclose($file);

?> 