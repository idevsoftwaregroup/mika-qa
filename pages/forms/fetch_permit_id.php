<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the discipline name from the AJAX request
$disciplineName = $_GET['disciplineName'];

// Prepare and execute SQL query to fetch permit ID based on discipline name
$stmt = $conn->prepare("SELECT permit_id FROM `disciplines` WHERE `name` = ?");
$stmt->bind_param("s", $disciplineName);
$stmt->execute();
$result = $stmt->get_result();

// Check if query was successful
if ($result->num_rows > 0) {
    // Fetch permit ID
    $row = $result->fetch_assoc();
    $permitId = $row['permit_id'];

    // Prepare response array
    $response = array(
        'success' => true,
        'permitId' => $permitId
    );

    // Send JSON response
    echo json_encode($response);
} else {
    // If no discipline found with the given name
    $response = array(
        'success' => false,
        'message' => 'Discipline not found'
    );
    echo json_encode($response);
}

// Close connections
$stmt->close();
$conn->close();
