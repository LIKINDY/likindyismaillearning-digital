<?php
// Database connection details
$servername = "localhost"; 
$username= "root"; 
$password = ""; 
$dbname = "contact";

//$data=mysqli_connect($host,$user,$password,$dbname);



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$username = $_POST["name"];
$email = $_POST["email"];
$Message = $_POST["Message"];

// Prepare and execute an SQL statement to insert data (example)
$sql = "INSERT INTO admin (name, email, Message) 
        VALUES ('$name', '$email', '$Message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
// Redirect to login page after successful signup
header("Location: contact.html");
exit();

?>