<?php
// Database Connection (Replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin-signup";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    $stmt = $pdo->prepare("INSERT INTO admin (username, password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Redirect to login page after successful signup
    header("Location: sign_up.php");
    exit();

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$pdo = null; // Close the connection
?>