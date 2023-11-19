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

$search = $_GET['search'];

$query="SELECT Books.Title, Books.SellingPrice, Authors.Name, Images.ImagePath, Books.ISBN FROM Books INNER JOIN Images ON Books.ISBN = Images.ISBN INNER JOIN Authors ON Books.AuthorId
= Authors.AuthorId WHERE Books.Title LIKE %$search%";

$result = $db_conn->query($query);

$response = array();
while ($row = $result->fetch_assoc()) $response[] = $row;   

$jsondata = json_encode($response);

echo $jsondata;

$result->free();


$db_conn->close();
