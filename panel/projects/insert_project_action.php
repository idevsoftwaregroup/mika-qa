<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Check if required fields are set
if (!isset($_POST['project_name'])) {
    die("Required fields are missing.");
} else {
    echo $_POST['project_name'];
}

// Retrieve and sanitize form inputs
$project_name = $_POST['project_name'];
$contract_number = $_POST['contract_number'];
$contractor_name = $_POST['contractor_name'];
$date = $_POST['date'];
$disciplineGroupName = isset($_POST['disciplineGroupName']) ? $_POST['disciplineGroupName'] : [];

// Convert disciplineGroupName array to JSON string
$disciplineGroupNameJson = json_encode($disciplineGroupName, JSON_UNESCAPED_UNICODE);

// Prepare SQL query to insert project
$query = "INSERT INTO `project` (`project_name`, `contract_number`, `contractor_name`, `date`, `disciplineGroupName`) 
          VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($query);
$stmt->bind_param('sssss', $project_name, $contract_number, $contractor_name, $date, $disciplineGroupNameJson);

// Execute the query
if ($stmt->execute()) {
    header("Location: manage_projects.php?message=پروژه {$project_name} با موفقیت اضافه شد.");
} else {
    header("Location: add_project.php?error=خطا در درج پروژه {$project_name} بوجود آمده است. مجددا تلاش کنید.");
    // echo "خطا در اضافه کردن پروژه: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
