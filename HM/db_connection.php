<?php
// Database configuration
$servername = "localhost"; // Database server (use "localhost" for local development)
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "hms"; // Replace with your actual database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

