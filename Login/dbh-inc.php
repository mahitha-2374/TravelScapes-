<?php

$serverName = "localhost:3306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "travelscapes";

// Connect to MySQL database
$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    // If connection fails, output the error message
    die("Connection failed: " . mysqli_connect_error());
} else {
    // If connection succeeds, display success message
    echo "Connected successfully";
}
?>
