<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if the 'id' parameter is set and is numeric
if (!isset($_POST['checklist_id']) || !is_numeric($_POST['checklist_id'])) {
    die("درخواست شما اشتباه است.");
}

// Retrieve and sanitize checklist ID
$id = intval($_POST['checklist_id']);

// Prepare the SQL query to update the isDeleted flag for the checklist with the given ID
$query = "UPDATE `checklist` SET `isDeleted` = 0 WHERE `checklist_id` = ?";
$stmt = $conn->prepare($query);

if ($stmt === false) {
    die("Database query preparation failed: " . $conn->error);
}

// Bind the parameter (checklist ID)
$stmt->bind_param('i', $id);

// Execute the query
if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        // Redirect with success message
        header("Location: report_Checklists.php?activate=" . urlencode("چک لیست با موفقیت فعال شد."));
    } else {
        // Redirect with error message if no rows were affected
        header("Location: report_Checklists.php?erroractivatenonexist=" . urlencode("چک لیست یافت نشد یا قبلاً فعال شده است."));
    }
} else {
    // Redirect with error message
    header("Location: report_Checklists.php?erroractivate=" . urlencode("خطا در فعال کردن چک لیست."));
}

// Close the statement and connection
$stmt->close();
$conn->close();
