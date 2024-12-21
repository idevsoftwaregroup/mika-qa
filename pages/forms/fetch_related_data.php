<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    $response = array(
        'success' => false,
        'message' => 'Failed to connect to the database: ' . $conn->connect_error
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Terminate script execution
}

// Receive the discipline item from the request
$disciplineItem = $_GET['disciplineItem'];

// Query the permitItemsDisciplines table to fetch related data based on $disciplineItem
$sql = "SELECT * FROM permitItemsSelection WHERE discipline_id = (
            SELECT id FROM permitDisciplines WHERE name = ?
        )";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $disciplineItem);
$stmt->execute();
$result = $stmt->get_result();

// Check if query was successful
if ($result->num_rows > 0) {
    // Fetch related data
    $relatedData = $result->fetch_assoc();

    // Construct the response
    $response = array(
        'success' => true,
        'data' => $relatedData
    );
} else {
    // If no related data found
    $response = array(
        'success' => false,
        'message' => "No related data found for discipline item: $disciplineItem"
    );
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

// Close database connection
$stmt->close();
$conn->close();
