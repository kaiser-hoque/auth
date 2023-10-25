<?php
session_start();
// Database connection
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Sanitize and validate user inputs (add validation)
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = $_POST['password'];

// Retrieve user data based on email
$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
  // Verify password
  if (password_verify($password, $row['password'])) {
    // Set a session variable to indicate the user is logged in
    $_SESSION['user_id'] = $row['id'];
    header('Location: dashboard.php');
  } else {
    echo "Invalid password";
  }
} else {
  echo "User not found";
}

// Close the database connection
mysqli_close($conn);
?>
