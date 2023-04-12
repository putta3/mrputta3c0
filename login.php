<?php
// Collect the username and password entered by the user
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the database and query the user's password
$servername = "localhost";
$dbname = "krishna";
$username_db = "root";
$password_db = "";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (empty($username)) {
    header("Location: index.php?error=username is required");
    exit();
}elseif (empty($password)) {
    header("Location: index.php?error=password is required");
    exit();
}else{
$stmt = $conn->prepare("SELECT password FROM putta_db WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$stored_password = $result->fetch_assoc()['password'];

// Compare the retrieved password with the password entered by the user
if ($stored_password && $password == $stored_password) {
    header("Location: page.html");
    // TODO: Add code to redirect to the next page
} else {
    header("Location: index.html?error=incorrect username or password");
}
}

$stmt->close();
$conn->close();
?>
