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


$data = json_decode(file_get_contents("php://input"));
$firstname = $data->firstname;
$lastname = $data->lastname;
$password = $data->password;
$email = $data->email;
$usergroup = $data->usergroup;
$userid = $data->user_id;

$query="UPDATE Users SET firstname = \"$firstname\", last_name = \"$lastname\", password = \"$password\", email = \"$email\", usergroup = \"$usergroup\" WHERE user_id = userid";

echo "finished updating user";

$db_conn->close();