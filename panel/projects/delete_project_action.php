<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if the 'id' parameter is set
if (!isset($_GET['id'])) {
    die("Invalid request.");
}

// Retrieve and sanitize project ID
$id = intval($_GET['id']);

// Prepare the SQL query to delete the project
$query = "DELETE FROM `project` WHERE `id` = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $id);

// Execute the query
if ($stmt->execute()) {
    header("Location: manage_projects.php?message=پروژه با موفقیت حذف شد.");
} else {
    header("Location: manage_projects.php?error=خطا در حذف پروژه.");
}

// Close the statement and connection
$stmt->close();
$conn->close();
