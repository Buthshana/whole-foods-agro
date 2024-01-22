<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "logins";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// SQL query to check if the email and password exist in the database
$sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "success";
} else {
    echo "failure";
}

$conn->close();
?>
