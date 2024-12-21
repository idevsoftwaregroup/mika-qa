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

// Get the project ID from the AJAX request
$projectId = $_GET['projectId'];

// Prepare and execute SQL query to fetch contractor name and contract number based on project ID
$stmt = $conn->prepare("SELECT `contractor_name`, `contract_number` FROM `project` WHERE `id` = ?");
$stmt->bind_param("i", $projectId);
$stmt->execute();
$result = $stmt->get_result();

// Check if query was successful
if ($result->num_rows > 0) {
    // Fetch contractor name and contract number
    $row = $result->fetch_assoc();
    $contractorName = $row['contractor_name'];
    $contractNumber = $row['contract_number'];

    // Prepare response array
    $response = array(
        'success' => true,
        'contractorName' => $contractorName,
        'contractNumber' => $contractNumber
    );

    // Send JSON response
    echo json_encode($response);
} else {
    // If no project found with the given ID
    $response = array(
        'success' => false,
        'message' => 'Project not found'
    );
    echo json_encode($response);
}

// Close connections
$stmt->close();
$conn->close();
