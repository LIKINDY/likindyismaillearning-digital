<?php
$servername = "localhost"; // Replace with your actual server name if different
$username = "root"; // Replace with your database username
$password = "password"; // Replace with your database password
$dbname = "regisration"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Close connection (optional)
// $conn->close();
?>