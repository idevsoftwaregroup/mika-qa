<?php
error_reporting(E_ALL);

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to create a new discipline and return the inserted discipline ID
function createDiscipline($conn, $name, $group, $code)
{
    $sql = "INSERT INTO disciplines (`name`, `group`, `code`) 
            VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $group, $code);
    if ($stmt->execute()) {
        // Return the inserted discipline ID
        return $conn->insert_id;
    } else {
        return false;
    }
}

// Function to insert checklist items associated with a discipline
function insertChecklistItems($conn, $disciplineId, $items)
{
    $currentDateTime = date('Y-m-d H:i:s');
    foreach ($items as $item) {
        $operation_description = $item['operation_description'];
        $review_criteria = $item['review_criteria'];
        $control_method_tool = $item['control_method_tool'];
        $minimum_check_value = $item['minimum_check_value'];
        $consideration = $item['consideration'];
        $allowable_tolerance = $item['allowable_tolerance'];

        $sql = "INSERT INTO checklist_items (`createdDateTime`, `discipline_id`, `operation_description`, `review_criteria`, `control_method_tool`, `minimum_check_value`, `considerations`, `allowable_tolerance`) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sissssss", $currentDateTime, $disciplineId, $operation_description, $review_criteria, $control_method_tool, $minimum_check_value, $consideration, $allowable_tolerance);
        if (!$stmt->execute()) {
            echo "Error inserting checklist item: " . $stmt->error;
            exit;
        }
    }
}

// Call the createDiscipline function to create a new discipline
$name = $_POST['discipline_name'];
$group = $_POST['discipline_group'];
$code = $_POST['discipline_code'];
$disciplineId = createDiscipline($conn, $name, $group, $code);

// Check if the discipline was successfully created and get its ID
if ($disciplineId !== false) {
    echo "Discipline item created successfully. ID: " . $disciplineId;
    // Assuming the form fields for checklist items are submitted as arrays
    $checklistItems = array();
    for ($b = 1; $b <= $_COOKIE['dynamicItemId'] - 1; $b++) {
        $item = array(
            'operation_description' => $_POST['operation_description_' . $b],
            'review_criteria' => $_POST['review_criteria_' . $b],
            'control_method_tool' => $_POST['control_method_' . $b],
            'minimum_check_value' => $_POST['minimum_check_value_' . $b],
            'consideration' => $_POST['considerations_' . $b],
            'allowable_tolerance' => $_POST['allowable_tolerance_' . $b]
        );
        $checklistItems[] = $item;
    }
    insertChecklistItems($conn, $disciplineId, $checklistItems);
} else {
    echo "Error creating discipline item: " . $conn->error;
}

// Close database connection
$conn->close();

// Redirect after completion
header('Location: newDiscipline.php');
