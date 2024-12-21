<?php
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
    } else {
        echo "Database connection successful";
        return $conn;
    }
}

// Establish database connection
$conn = connectToDatabase($host, $username, $password, $database);

// Retrieve data from form submission
$username = $_POST['user_name'] ?? '';
$fullname = $_POST['fullname'] ?? '';
$password = $_POST['password'] ?? '';
$phone = $_POST['phone'] ?? '';
$jobtitle = $_POST['jobtitle'] ?? '';
$company = $_POST['company'] ?? '';
$description = $_POST['desc'] ?? '';
$position = $_POST['position'] ?? '';
$currentDateTime = date("Y-m-d H:i:s");

// Prepare SQL statement to insert data into users table
$sql = "INSERT INTO users (`username`, `fullname`, `password`, `phone_number`, `job_title`, `company`, `description`, `job_position`, `date_created`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssss", $username, $fullname, $password, $phone, $jobtitle, $company, $description, $position, $currentDateTime);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to the list page after successful record creation
    header("Location: list.php");
    exit; // Ensure that script execution stops after redirection
} else {
    // Display an error message if the record creation fails
    echo "<script>alert('Error creating record: " . $stmt->error . "');</script>";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>