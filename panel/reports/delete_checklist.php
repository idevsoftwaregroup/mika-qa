<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if the 'checklist_id' parameter is set and is numeric
if (!isset($_POST['checklist_id'])) {
    die("Invalid request.");
}

// Retrieve and sanitize checklist ID
$id = intval($_POST['checklist_id']);

// // Prepare the SQL query to delete the checklist
// $query = "DELETE FROM `checklist` WHERE `checklist_id` = ?";
// $stmt = $conn->prepare($query);

// if ($stmt === false) {
//     die("Database query preparation failed.");
// }
// Prepare the SQL query to update the isDeleted flag for the permit with the given ID
$query = "UPDATE `checklist` SET `isDeleted` = TRUE WHERE `checklist_id` = ?";
$stmt = $conn->prepare($query);

if ($stmt === false) {
    die("Database query preparation failed: " . $conn->error);
}

$stmt->bind_param('i', $id); // 'i' for integer

// Execute the query
if ($stmt->execute()) {
    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        // Redirect with success message
        header("Location: report_Checklists.php?delete=" . urlencode("چک لیست با موفقیت غیر فعال شد."));
    } else {
        // Redirect with error message if no rows were affected
        header("Location: report_Checklists.php?errordeletenonexist=" . urlencode("چک لیست یافت نشد یا قبلاً غیرفعال شده است."));
    }
} else {
    // Redirect with error message
    header("Location: report_Checklists.php?errordelete=" . urlencode("خطا در غیرفعال کردن چک لیست."));
}

// Close the statement and connection
$stmt->close();
$conn->close();
