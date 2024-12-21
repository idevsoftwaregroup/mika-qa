<?php
// session_start();
// error_reporting(E_ALL);

// // Database connection parameters
// $host = "localhost";
// $username = "root";
// $password = "0010";
// $database = "qualityassurance";

// // Create connection
// $conn = new mysqli($host, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection Failed: " . $conn->connect_error);
// }

// // Get the current time
// $currentDateTime = date('Y-m-d H:i:s');
// $date = date('Y-m-d');

// // Handle file upload
// $permit_id = $_POST['permit_id'];
// $dir = "../../uploads/{$permit_id}_{$date}/";

// if (!file_exists($dir)) {
//     if (mkdir($dir, 0777, true)) {
//         echo "Directory created successfully.";
//     } else {
//         die("Failed to create directory.");
//     }
// }

// $file_upload = $_FILES['file_upload'];
// $file_name = $file_upload['name'];
// $file_size = $file_upload['size'];
// $file_tmp = $file_upload['tmp_name'];
// $file_error = $file_upload['error'];

// if ($file_error == 0) {
//     $file_destination = $dir . $file_name;

//     if (move_uploaded_file($file_tmp, $file_destination)) {
//         echo "File uploaded successfully.";
//     } else {
//         die("Error moving uploaded file to $file_destination.");
//     }
// } else {
//     die("Error uploading file: $file_error");
// }

// // Set parameter values (assuming other form fields are also submitted)
// $projectName = $_POST['project_name'];
// $contractor_name = $_POST['contractor_name'];
// $contract_number = $_POST['contract_number'];
// $discipline = $_POST['discipline'];
// $crew = $_POST['crew'];
// $axis = $_POST['axis'];
// $floor = $_POST['floor'];
// $block = $_POST['block'];
// $zone = $_POST['zone'];
// $operation_description = $_POST['operation_description'];
// $time_to_action = $_POST['time_to_action_value'] . ' ' . $_POST['time_to_action_unit'];
// $permit_credit = $_POST['permit_credit_value'] . ' ' . $_POST['permit_credit_unit'];
// $discipline_group = $_POST['discipline_group'];

// $_SESSION['permit_id'] = $permit_id;
// $_SESSION['discipline'] = $discipline;

// // Fetch project name from database based on project ID
// $getProject = "SELECT id FROM project WHERE project_name = ?";
// $stmt = $conn->prepare($getProject);
// $stmt->bind_param("s", $projectName);
// $stmt->execute();
// $result = $stmt->get_result();
// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     $projectID = $row['id'];
//     echo "Project ID: " . $projectID . "<br>";
// } else {
//     die("Project not found.");
// }

// // Prepare SQL statement to insert into the permits table
// $stmt = $conn->prepare(
//     "INSERT INTO `permits` 
//     (`project_name`, `contractor_name`, `contract_number`, `discipline`, `crew`, `axis`, `floor`, `block`, `zone`, `operation_description`, `time_to_action`, `permit_id`, `status`, `type`, `dateTimeCreated`, `file_name`, `file_size`, `file_data`, `discipline_group`, `dir`)
//     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
// );
// $status = "issued"; // Set initial status to "issued"
// $type = "Permit";

// $stmt->bind_param(
//     "ssssssssssssssssssss",
//     $projectName,
//     $contractor_name,
//     $contract_number,
//     $discipline,
//     $crew,
//     $axis,
//     $floor,
//     $block,
//     $zone,
//     $operation_description,
//     $time_to_action,
//     $permit_id,
//     $status,
//     $type,
//     $currentDateTime,
//     $file_name,
//     $file_size,
//     $file_destination,
//     $discipline_group,
//     $dir
// );

// // Prepare SQL statement to insert into the status table
// $stmtStatus = $conn->prepare(
//     "INSERT INTO `status` 
//     (`type`, `status`, `date_created`, `proccessID`) 
//     VALUES (?, ?, ?, ?)"
// );
// $stmtStatus->bind_param("ssss", $type, $status, $currentDateTime, $permit_id);

// // Execute the statements and handle errors
// if ($stmtStatus->execute()) {
//     echo "Data inserted into status table successfully.";
// } else {
//     die("Error executing query: " . $stmtStatus->error);
// }

// if ($stmt->execute()) {
//     $_SESSION['PermitIDSelectionCreated'] = $permit_id;
//     header("Location: ./permitCheck.php");
//     exit(); // Make sure to exit after header redirect
// } else {
//     die("Error executing query: " . $stmt->error);
// }

// // Close statements and connection
// $stmt->close();
// $stmtStatus->close();
// $conn->close();


session_start();
// error_reporting(E_ALL);

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Get the current time
$currentDateTime = date('Y-m-d H:i:s');
$date = date('Y-m-d');

// Handle file upload
$permit_id = $_POST['permit_id'];
$dir = "../../uploads/{$permit_id}_{$date}/";

if (!file_exists($dir)) {
    if (mkdir($dir, 0777, true)) {
        echo "Directory created successfully.";
    } else {
        die("Failed to create directory.");
    }
}

// Initialize an array to store file paths
$file_paths = [];

// Iterate over each file and process it
$file_uploads = $_FILES['file_upload'];
$total_files = count($file_uploads['name']);

for ($i = 0; $i < $total_files; $i++) {
    $file_name = $file_uploads['name'][$i];
    $file_size = $file_uploads['size'][$i];
    $file_tmp = $file_uploads['tmp_name'][$i];
    $file_error = $file_uploads['error'][$i];

    if ($file_error == 0) {
        $file_destination = $dir . $file_name;

        if (move_uploaded_file($file_tmp, $file_destination)) {
            echo "File $file_name uploaded successfully.<br>";
            $file_paths[] = $file_destination; // Add the file path to the array
        } else {
            die("Error moving uploaded file to $file_destination.");
        }
    } else {
        die("Error uploading file: $file_error");
    }
}

// Concatenate all file paths into a single string
$file_paths_str = implode(';', $file_paths);

// Set parameter values (assuming other form fields are also submitted)
$projectName = $_POST['project_name'];
$contractor_name = $_POST['contractor_name'];
$contract_number = $_POST['contract_number'];
$discipline = $_POST['discipline'];
$crew = $_POST['crew'];
$axis = $_POST['axis'];
$floor = $_POST['floor'];
$block = $_POST['block'];
$zone = $_POST['zone'];
$operation_description = $_POST['operation_description'];
$time_to_action = $_POST['time_to_action_value'] . ' ' . $_POST['time_to_action_unit'];
$permit_credit = $_POST['permit_credit_value'] . ' ' . $_POST['permit_credit_unit'];
$discipline_group = $_POST['discipline_group'];

$_SESSION['permit_id'] = $permit_id;
$_SESSION['discipline'] = $discipline;

// Fetch project name from database based on project ID
$getProject = "SELECT id FROM project WHERE project_name = ?";
$stmt = $conn->prepare($getProject);
$stmt->bind_param("s", $projectName);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $projectID = $row['id'];
    echo "Project ID: " . $projectID . "<br>";
} else {
    die("Project not found.");
}


$disciplineCheck = "select id from `permitDisciplines` where `name` = ? ";
$stmtDisciplineCheck = $conn->prepare($disciplineCheck);
$stmtDisciplineCheck->bind_param('s', $_POST['discipline']);
$stmtDisciplineCheck->execute();
$resultDisciplineCheck = $stmtDisciplineCheck->get_result();
if ($resultDisciplineCheck->num_rows > 0) {
    // Prepare SQL statement to insert into the permits table
    $stmt = $conn->prepare(
        "INSERT INTO `permits` 
        (`project_name`, `contractor_name`, `contract_number`, `discipline`, `crew`, `axis`, `floor`, `block`, `zone`, `operation_description`, `time_to_action`, `permit_id`,`isDeleted`, `status`, `type`, `dateTimeCreated`, `file_name`, `file_size`, `file_data`, `discipline_group`, `dir`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );

    $status = "issued"; // Set initial status to "issued"
    $type = "Permit";
    $isDeleted = 0; // `isDeleted` is a boolean, represented as `0` (false)

    $stmt->bind_param(
        "ssssssssssssissssssss",
        $projectName,
        $contractor_name,
        $contract_number,
        $discipline,
        $crew,
        $axis,
        $floor,
        $block,
        $zone,
        $operation_description,
        $time_to_action,
        $permit_id,
        $isDeleted,  // Bind as integer
        $status,
        $type,
        $currentDateTime,
        $file_paths_str, // Save the concatenated file paths
        $file_size,
        $file_paths_str, // Save the concatenated file paths
        $discipline_group,
        $dir
    );

    // Prepare SQL statement to insert into the status table
    $stmtStatus = $conn->prepare(
        "INSERT INTO `status` 
    (`type`, `status`, `date_created`, `proccessID`) 
    VALUES (?, ?, ?, ?)"
    );
    $stmtStatus->bind_param("ssss", $type, $status, $currentDateTime, $permit_id);

    // Execute the statements and handle errors
    if ($stmtStatus->execute()) {
        echo "Data inserted into status table successfully.";
    } else {
        die("Error executing query: " . $stmtStatus->error);
    }

    if ($stmt->execute()) {
        $_SESSION['PermitIDSelectionCreated'] = $permit_id;
        header("Location: ./permitCheck.php");
        exit(); // Make sure to exit after header redirect
    } else {
        die("Error executing query: " . $stmt->error);
    }

    // // Close statements and connection
    // $stmt->close();
    // $stmtStatus->close();
    // $conn->close();
} else {
    // no permits has been found !
    header("location: ./permitCheckError.php");
    exit();
}
