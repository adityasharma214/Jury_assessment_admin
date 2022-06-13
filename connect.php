<?php
$servername = "jury.cufga4wez9ub.ap-south-1.rds.amazonaws.com";
$username = "aditya";
$password = "aditya123456";
$db = "jury";

// Create connection
$conn =  mysqli_connect($servername, $username, $password,$db);
/*
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";*/
?>
