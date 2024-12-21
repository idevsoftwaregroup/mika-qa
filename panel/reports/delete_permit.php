<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if the 'id' parameter is set and is numeric
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    die("Invalid request.");
}

// Retrieve and sanitize permit ID
$id = intval($_POST['id']);

// Prepare the SQL query to update the isDeleted flag for the permit with the given ID
$query = "UPDATE `permits` SET `isDeleted` = TRUE WHERE `id` = ?";
$stmt = $conn->prepare($query);

if ($stmt === false) {
    die("Database query preparation failed: " . $conn->error);
}

// Bind the parameter (permit ID)
$stmt->bind_param('i', $id);

// Execute the query
if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        // Redirect with success message
        header("Location: report_Permits.php?delete=" . urlencode("پرمیت با موفقیت غیر فعال شد."));
    } else {
        // Redirect with error message if no rows were affected
        header("Location: report_Permits.php?errordeletenonexist=" . urlencode("پرمیت یافت نشد یا قبلاً غیر فعال شده است."));
    }
} else {
    // Redirect with error message
    header("Location: report_Permits.php?errordelete=" . urlencode("خطا در غیرفعال کردن پرمیت."));
}

// Close the statement and connection
$stmt->close();
$conn->close();
