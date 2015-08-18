<?php
$servername = "polititroll.cqre5u0pvjqm.us-east-1.rds.amazonaws.com";
$username = "polititroll";
$password = "rohanisgay";
$dbName = "polititroll";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
