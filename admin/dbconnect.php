<?php

$serverName = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travelscapes";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection falied: ". mysqli_connect_error());
    echo "Connection to the database failed!";
}