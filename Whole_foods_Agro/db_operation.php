<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "logins"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullName = $_POST['fullName'];
$phoneNumber = $_POST['phoneNumber']; 
$birthday = $_POST['birthday'];
$accoupation = $_POST['accoupation'];
$email = $_POST['email'];
$password = $_POST['password'];
$streetAddress = $_POST['streetAddress'];
$district = $_POST['district'];
$city = $_POST['city'];


$sql = "INSERT INTO registration (fullName, number, birthday, accoupation, email, password, streetAddress, distric, city)
        VALUES ('$fullName', '$phoneNumber', '$birthday', '$accoupation', '$email', '$password', '$streetAddress', '$district', '$city')";

if ($conn->query($sql) === TRUE) {
   
    header("Location: productpage.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
