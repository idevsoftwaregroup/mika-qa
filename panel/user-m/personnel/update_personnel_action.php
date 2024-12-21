<?php
require_once('../../infrastructure/settings/dbcon/db_connection.php');

// Check if the expected POST fields are set
if (!isset($_POST['id'], $_POST['name'], $_POST['job_title'], $_POST['shift'], $_POST['role'])) {
    die("Required fields are missing.");
}

// Retrieve and sanitize form inputs
$id = intval($_POST['id']);
$userID = intval($_POST['name']); // The userID is retrieved from the 'name' field in the form
$job_title = $_POST['job_title'];
$shift = $_POST['shift'];
echo $role = $_POST['role']; // Proper conversion based on input
$projectIDs = isset($_POST['projectID']) ? $_POST['projectID'] : [];

// Convert project IDs array to a comma-separated string
$projectIDsStr = implode(',', array_map('intval', $projectIDs));

// Fetch the full name of the user based on userID
$query = "SELECT `fullname` FROM `users` WHERE `id` = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $userID);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Check if the user exists
if (!$user) {
    die("User not found.");
}

$fullname = $user['fullname'];

// Prepare the SQL query to update projectPersonnel
$query = "UPDATE projectPersonnel 
          SET `name` = ?, userID = ?, job_title = ?, shift = ?, role = ?, projectID = ? 
          WHERE id = ?";

$stmt = $conn->prepare($query);
$stmt->bind_param('sissssi', $fullname, $userID, $job_title, $shift, $role, $projectIDsStr, $id);

// Execute the query
if ($stmt->execute()) {
    header("Location: manage_personnels.php?message=اطلاعات کاربر {$fullname} با موفقیت آپدیت شد.");
    exit();
} else {
    header("Location: display_personnel.php?id=$id&error=خطا در به‌روزرسانی اطلاعات کاربر {$fullname}.");
    exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
