<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$db = "college";

// Create connection
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $db
);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

if ($conn) {
    // echo 'alert("Connection Successful")';
} else {
    // echo '<script>alert("Not Connection Successful")</script>';
}
?>