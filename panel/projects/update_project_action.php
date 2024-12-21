<?php
// Connection:
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if the expected POST fields are set
if (!isset($_POST['id'], $_POST['project_name'], $_POST['contract_number'], $_POST['contractor_name'], $_POST['date'], $_POST['disciplineGroupName'])) {
    die("Required fields are missing.");
}

// Retrieve and sanitize form inputs
$id = intval($_POST['id']);
$project_name = $_POST['project_name'];
$contract_number = $_POST['contract_number'];
$contractor_name = $_POST['contractor_name'];
$date = $_POST['date'];

// Retrieve disciplineGroupName array from POST data and encode it as JSON
$disciplineGroupName = json_encode($_POST['disciplineGroupName'], JSON_UNESCAPED_UNICODE);

// Prepare the SQL query to update the project
$query = "UPDATE `project` 
          SET `project_name` = ?, `contract_number` = ?, `contractor_name` = ?, `date` = ?, `disciplineGroupName` = ?
          WHERE `id` = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('sssssi', $project_name, $contract_number, $contractor_name, $date, $disciplineGroupName, $id);

// Execute the query
if ($stmt->execute()) {
    header("Location: manage_projects.php?message=پروژه {$project_name} با موفقیت آپدیت شد.");
} else {
    header("Location: edit_project.php?id=$id&error=خطا در به‌روزرسانی پروژه {$project_name}.");
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
