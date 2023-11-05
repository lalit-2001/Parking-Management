<?php
$host = "localhost";
$database = "parking";
$user = "root"; // Change this to the correct MySQL username
$password = ""; // Change this to the correct password

// Attempt to connect to the MySQL database
$con = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully";
}
?>
