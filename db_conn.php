<?php

// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$database = "krishna";

// Create a database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to authenticate the user
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM venkat_db WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    // Authentication successful
    // Redirect the user to the appropriate page or display a success message
} else {
    // Authentication failed
    // Display an error message or redirect the user to the login page
}

// Close the database connection
mysqli_close($conn);

?>
