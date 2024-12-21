<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch personnel names from the users table
$sql = "SELECT fullname FROM `users` ";
$result = $conn->query($sql);

$personnelNames = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $personnelNames[] = $row;
    }
}

// Close database connection
$conn->close();

// Return personnel names as JSON
header('Content-Type: application/json');
echo json_encode($personnelNames);
?>