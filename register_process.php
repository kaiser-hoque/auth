<?php
// Database connection
$conn = mysqli_connect("localhost", "username", "password", "auth");

// inputs add validation)
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert user data 
$query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
mysqli_query($conn, $query);

// Close  database  connection
mysqli_close($conn);

// Redirect to the login page
header('Location: login.php');
?>
