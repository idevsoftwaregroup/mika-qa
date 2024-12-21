<?php
error_reporting(1);
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Establish database connection
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection Successful.";
}

// Function to create a new discipline and return the inserted discipline ID
function createDiscipline($conn, $name, $group, $code)
{
    $sql = "INSERT INTO `permitDisciplines` (`name`, `group_name`, `code`) 
            VALUES ('$name', '$group', '$code')";
    if ($conn->query($sql) === TRUE) {
        // Return the inserted discipline ID
        return $conn->insert_id;
    } else {
        return false;
    }
}

// Function to insert checklist items associated with a discipline
function insertChecklistItems($conn, $disciplineId, $items)
{
    foreach ($items as $item) {
        $lastActivity = $item['lastActivity'];
        $documentations = $item['documentations'];
        $workingMaterials = $item['workingMaterials'];
        $tools = $item['tools'];
        $env = $item['env'];
        $hse = $item['hse'];

        $sql = "INSERT INTO permitItemsSelection (`discipline_id`, `lastActivity`, `documentations`, `workingMaterials`, `tools`, `env`, `hse`) 
                VALUES ('$disciplineId', '$lastActivity', '$documentations', '$workingMaterials', '$tools', '$env', '$hse')";

        if ($conn->query($sql) !== TRUE) {
            echo "خطا در پردازش درج لیست آیتم های پرمیت: " . $conn->error;
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
// Count the number of checklist items received from the form
if ($disciplineId !== false) {
    // echo "Discipline item created successfully. ID: " . $disciplineId;
    // Assuming the form fields for checklist items are submitted as arrays
    $checklistItems = array();
    // echo $_COOKIE['dynamicItemId'] - 1;
    // echo $numChecklistItems = count($checklistItems);
    for ($b = 1; $b <= $_COOKIE['dynamicItemId'] - 1; $b++) {
        $item = array(
            'lastActivity' => $_POST['lastActivity_' . $b],
            'documentations' => $_POST['documentations_' . $b],
            'workingMaterials' => $_POST['workingMaterials_' . $b],
            'tools' => $_POST['tools_' . $b],
            'env' => $_POST['env_' . $b],
            'hse' => $_POST['hse_' . $b]
        );
        // var_dump($item);
        $checklistItems[] = $item;
    }
    insertChecklistItems($conn, $disciplineId, $checklistItems);
} else {
    echo "Error creating discipline item: " . $conn->error;
}
header('Location: newPermitDiscipline.php');
// Close database connection
$conn->close();
