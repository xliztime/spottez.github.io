<?php
$servername = "localhost:3306"; // Usually localhost
$username = "xliztime"; // Your database username
$password = "bubly2005"; // Your database password
$dbname = "your_database_name"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
