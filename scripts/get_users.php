<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_host="cs4413webtech.mysql.database.azure.com";        //Change this
$db_user="dalbasini1";        //Change this
$db_pass="Weakling2";        //Change this
$db_name="Bookstore";     //Do not change

$db_conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno())
{
    echo 'Connection to database failed:'.mysqli_connect_error();
    exit();
}

$query="SELECT Users.user_id, Users.first_name, Users.last_name, Users.password, Users.email, Users.usergroup FROM Users";

$result = $db_conn->query($query);

$response = array();
while ($row = $result->fetch_assoc()) $response[] = $row;   

$jsondata = json_encode($response);

echo $jsondata;

$result->free();


$db_conn->close();
