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

// Handle form submission
if (isset($_POST['submit'])) {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Insert user data into the database
    $sql = "INSERT INTO putta_db (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
        // Redirect the user to the login page or display a success message
    } else {
        echo "Registration failed";
        // Display an error message or redirect the user to the signup page
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		form {
			background-color: white;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px #ccc;
			margin: 100px auto;
			max-width: 400px;
			width: 90%;
        }
		input[type=text], input[type=email] {
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type=text], input[type=password] {
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-sizing: border-box;
			font-size: 16px;
		}
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type=submit]:hover {
			background-color: #3e8e41;
		}
		
	</style>
</head>
<body>
<form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="Enter your username" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Signup">

        <button><a href="index.php">login</a></button>
    </form>
</body>
</html>

