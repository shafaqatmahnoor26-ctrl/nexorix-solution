<?php
// config.php - Main Database Connection Configuration

define('DB_HOST', 'localhost');
define('DB_USER', 'root');       // Apne database user se replace karein
define('DB_PASS', '');           // Apne database password se replace karein
define('DB_NAME', 'software_house_db');

// MySQLi Connection Initiate Karein
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Connection Error Check
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Global UTF-8 Encoding Setup
$conn->set_charset("utf8mb4");
?>