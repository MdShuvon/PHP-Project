<?php
// Copy this file to db.php and fill in your database credentials
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "discuss";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
