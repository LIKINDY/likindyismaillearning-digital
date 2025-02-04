<?php
// Database credentials
$servername = "localhost"; // Change if your database is on a different server
$username = "root"; // Replace with your actual username
$password = ""; // Replace with your actual password
$dbname = "member"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$subject_id = $_POST["subject_id"];
$subject_name = $_POST["subject_name"];
$instructor = $_POST["instructor"];
$user_id = $_POST["user_id"];

// Get user ID (assuming you have a user login system)
// $user_id = $_SESSION['user_id']; // Replace with your session handling

// Insert data into the database
$sql = "INSERT INTO users (subject_id, subject_name, instructor, user_id) 
        VALUES ('$subject_id', '$subject_name', '$instructor', '$user_id')"; 

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // Redirect to a success page
    header("Location: course.html"); // Replace with your success page
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>