<?php
// Database connection details
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "information";

//$data=mysqli_connect($host,$user,$password,$dbname);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST["username"];
$password = $_POST["password"]; 
$email = $_POST["email"];
$phone = $_POST["phone"];

// Prepare and execute an SQL statement to insert data (example)
$sql = "INSERT INTO users (username, password, email, phone) 
        VALUES ('$username', '$password', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// Redirect to login page after successful signup
header("Location: login.php");
exit();

?>