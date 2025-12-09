<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grand_coastline";


$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db($dbname);

// Create rooms table
$sql = "CREATE TABLE IF NOT EXISTS rooms (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    beds INT(11) NOT NULL,
    capacity INT(11) NOT NULL,
    image VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Rooms table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
