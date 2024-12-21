<?php
session_start();

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
} else {
    echo "connected !";
}

// Sample values
$discipline_id = $_SESSION['selectedDiscID']; // Replace with actual discipline ID
$dateTimeCreated = date("Y-m-d H:i:s"); // Current date and time
$permit_id = $_SESSION['permit_id']; // Replace with the actual permit ID

// SQL query to insert data into the permitItemsSelectionDone table
$sql = "INSERT INTO `permitItemsSelectionDone` (`discipline_id`, `dateTimeCreated`, `permit_id`) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind parameters and execute the statement
    $stmt->bind_param("sss", $discipline_id, $dateTimeCreated, $permit_id);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "Data inserted successfully.";
        // header("Location: ../../contractor.php");
        // Update the isIssued column in the permits table
        $updateSql = "UPDATE `permits` SET `isIssued` = 'Yes' , `last_activity` = ? WHERE `permit_id` = ? ";
        $updateStmt = $conn->prepare($updateSql);
        $updateStmt->bind_param("ss", $_POST['lastActivity'], $permit_id);
        $updateStmt->execute();

        // Check if the update was successful
        if ($updateStmt->affected_rows > 0) {
            echo "isIssued column updated successfully.";
            header("Location: permitPreview.php");
        } else {
            echo "Failed to update isIssued column.";
        }

        // Close the update statement
        $updateStmt->close();
    } else {
        echo "Failed to insert data.";
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

header("Location: permitPreview.php");
// Close connection
$conn->close();
