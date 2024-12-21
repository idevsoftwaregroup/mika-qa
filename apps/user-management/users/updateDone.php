<?php
error_reporting(E_ALL);
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Function to establish database connection
function connectToDatabase($host, $username, $password, $database) {
    $conn = new mysqli($host, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// Establish database connection
$conn = connectToDatabase($host, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted for updating user
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Update user information
    echo $user_id = $_POST['id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $job_title = $_POST['job_title'];
    $job_position = $_POST['job_position'];
    $company = $_POST['company'];
    $description = $_POST['description'];

    $sql = "UPDATE users SET 
        username=?, 
        fullname=?, 
        password=?, 
        phone_number=?, 
        job_title=?, 
        job_position=?, 
        company=?, 
        description=? 
        WHERE id=?";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssi", $username, $fullname, $password, $phone, $job_title, $job_position, $company, $description, $user_id);

    if ($stmt->execute()) {
        // Redirect to the list page after successful update
        // echo "success";
        header('Location: list.php');
        exit;
    } else {
        echo "<script>alert('Error updating user information: " . $stmt->error . "')</script>";
    }
    $stmt->close();
// }

// Close database connection
$conn->close();
?>