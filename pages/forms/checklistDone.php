<?php
// Include database connection or initialize database connection
// Error Handling
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

// Getting current date time
$currentDateTime = date("Y-m-d H:i:s");

// Get the current time
$date = date('Y-m-d');
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

// Concatenate all file paths into a single string with a semicolon separator
$file_paths_str = implode(';', $file_paths);

// Check if form data is set
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $projectname = $_POST['projectname'] ?? '';
    $contractor_name = $_POST['contractor_name'] ?? '';
    $contract_number = $_POST['contract_number'] ?? '';
    $discipline = $_POST['discipline'] ?? '';
    $permit_id = $_POST['permit_id'] ?? ''; // Permit ID from form
    $crew = $_POST['crew'] ?? '';
    $axis = $_POST['axis'] ?? '';
    $floor = $_POST['floor'] ?? '';
    $block = $_POST['block'] ?? '';
    $zone = $_POST['zone'] ?? '';
    $time_to_action = $_POST['time_to_action'] ?? '';
    $permit_credit = $_POST['permit_credit'] ?? '';
    $operation_description = $_POST['operation_description'] ?? '';
    $discipline_group = $_POST['discipline_group'] ?? '';
    $statusOfChecklist = 'issued';

    // Generate checklist ID from permit ID
    $checklist_id = str_replace('P-', 'C-', $permit_id);

    if ($projectname && $contractor_name && $contract_number) {
        // Prepare and bind parameters for checklist table including file details
        $stmt = $conn->prepare("
            INSERT INTO `checklist` (
                `projectname`, `contractor_name`, `contract_number`, 
                `discipline`, `permit_id`, `checklistID`, `crew`, 
                `axis`, `floor`, `block`, `zone`, `time_to_action`, 
                `permit_credit`, `operation_description`, `discipline_group`, 
                `status`, `file_name`, `file_size`, `file_data`, `dir`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Since multiple files are uploaded, let's concatenate the file names and sizes with semicolons as well
        $file_names_str = implode(';', $file_uploads['name']);
        $file_sizes_str = implode(';', $file_uploads['size']);

        $stmt->bind_param(
            "ssssssssssssssssssss",
            $projectname,
            $contractor_name,
            $contract_number,
            $discipline,
            $permit_id,
            $checklist_id,
            $crew,
            $axis,
            $floor,
            $block,
            $zone,
            $time_to_action,
            $permit_credit,
            $operation_description,
            $discipline_group,
            $statusOfChecklist,
            $file_names_str,  // Multiple file names concatenated
            $file_sizes_str,  // Multiple file sizes concatenated
            $file_paths_str,  // File paths as semicolon-separated string
            $dir
        );

        // Execute the statement
        if ($stmt->execute()) {
            // Insert into status table
            $stmt_status = $conn->prepare("INSERT INTO `status` (`proccessID`, `type`, `date_created`, `status`) VALUES (?, ?, ?, ?)");
            if ($stmt_status === false) {
                die("Prepare failed: " . $conn->error);
            }
            $type = 'Checklist';
            $stmt_status->bind_param("ssss", $checklist_id, $type, $currentDateTime, $statusOfChecklist);

            if ($stmt_status->execute()) {
                echo "Status inserted successfully.<br>";
            } else {
                echo "Error inserting status: " . $stmt_status->error . "<br>";
            }

            echo "Checklist and file(s) uploaded successfully.<br>";
            header("Location: checklistCheck.php?prmQWERTY=" . urlencode($checklist_id));
            exit();
        } else {
            echo "Error inserting checklist: " . $stmt->error . "<br>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Required form data missing.<br>";
    }
}

// Close connection
$conn->close();
