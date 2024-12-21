<?php
// Error Handling
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
} else {
    echo "Connected.";
}

$currentDateTime = date("Y-m-d H:i:s");

// Function to create a new project and return the inserted project ID
function createProject($conn, $project_name, $contract_number, $contractor_name, $date, $dGN)
{
    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO project (`project_name`, `contract_number`, `contractor_name`, `date`, `disciplineGroupName`) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $project_name, $contract_number, $contractor_name, $date, $dGN);
    if ($stmt->execute()) {
        echo "Project Inserted.";
        return $conn->insert_id;
    } else {
        echo "Error creating project: " . $stmt->error;
        return false;
    }
}

// Call the createProject function to create a new project
if (isset($_POST['projectname'], $_POST['contractnumber'], $_POST['contractorname'])) {
    $project_name = $_POST['projectname'];
    $contract_number = $_POST['contractnumber'];
    $contractor_name = $_POST['contractorname'];
    $disciplineGroupName = json_encode($_POST['discipline_group']);
    echo $projectID = createProject($conn, $project_name, $contract_number, $contractor_name, $currentDateTime, $disciplineGroupName);

    // Check if the project was successfully created and get its ID
    // if (isset($projectID)) {
    $personnelCount = isset($_COOKIE['projectPersonelID']) ? intval($_COOKIE['projectPersonelID']) : 0; // Convert to integer
    for ($b = 1; $b <= $personnelCount; $b++) {
        $job_title = isset($_POST['jobtitle_' . $b]) ? $_POST['jobtitle_' . $b] : '';
        $shift = isset($_POST['shift_' . $b]) ? $_POST['shift_' . $b] : '';
        $name = isset($_POST['personnel_fullname_list_' . $b]) ? $_POST['personnel_fullname_list_' . $b] : '';

        // Fetch user ID from the users table based on the selected name
        $stmt = $conn->prepare("SELECT `id` FROM `users` WHERE `fullname` = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo $userID = $row['id'];

            // Define role and order
            $role = isset($_POST['role_' . $b]) ? $_POST['role_' . $b] : ''; // Replace with actual role

            // Insert project personnel into the database with the fetched user ID
            $stmt = $conn->prepare("INSERT INTO `projectPersonnel` (`job_title`, `shift`, `name`, `projectID`, `userID`, `role`) 
                                        VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiis", $job_title, $shift, $name, $projectID, $userID, $role);
            if ($stmt->execute()) {
                echo "Personnel Created !";
            } else {
                echo "Error inserting project personnel: " . $stmt->error;
            }
        } else {
            echo "Error: User not found.";
        }
    }
    // Redirect after insertion
    header("Location: newProject.php");
    exit;
    // } else {
    //     echo "Error creating project or personnel count not set.";
    // }
} else {
    echo "Missing required parameters.";
}

// Close database connection
$conn->close();
