<?php
// Database configuration settings for connecting to XAMPP
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'rac_interview_system';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>