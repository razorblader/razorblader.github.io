<?php
// Database configuration
$host = 'localhost'; // Hostname
$username = 'your_username'; // MySQL username
$password = 'your_password'; // MySQL password
$database = 'noventamin'; // Database name

// Create connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if ($connection) {
    echo "Connected successfully"; // This message indicates a successful connection
} else {
    echo "Connection failed: " . mysqli_connect_error();
}
?>