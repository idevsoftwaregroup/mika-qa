<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set project_id from GET request
$_SESSION['project_id'] = $_POST['project_id'];

// Prepare the query to get the project details
$query = "SELECT * FROM `project` WHERE `id` = ?";
$stmt = $conn->prepare($query);

if (!$stmt) {
    die("خطا در دریافت اطلاعات :" . $conn->error);
}

// Bind the project_id from the session to the query
$stmt->bind_param("i", $_POST['project_id']);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the project name
if ($row = $result->fetch_assoc()) {
    $projectName = $row['project_name'];
    $_SESSION['project_name'] = $projectName;
    echo $_SESSION['project_name'];
} else {
    die("پروژه ای یافت نشد.");
}

// Close statement and connection
$stmt->close();
$conn->close();

// exit();
// Redirect to contractor.php with project_id
header('Location: ../../contractor.php');
