<?php
session_start();
error_reporting(0);
// echo $_SESSION['username'];

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

$stmt4 = $conn->prepare("SELECT job_position FROM users WHERE username = ?");
$stmt4->bind_param("s", $_SESSION['username']);
$stmt4->execute();
$stmt4->bind_result($job_position);
$stmt4->fetch();
$stmt4->close();
// echo $job_position;

if ($job_position == 3) {
    echo "is manager";
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve permit ID and current date time
        $permit_id = $_POST['prmQWERTY'];

        // Prepare the SQL query
        $getSql = "SELECT checklist.permit_id
                            FROM checklist
                            WHERE checklist.checklistID = ?";
        // Prepare the statement
        $stmtGetchecklistId = $conn->prepare($getSql);
        // Bind parameters (assuming checklistID is a string)
        $stmtGetchecklistId->bind_param("s", $permit_id);
        // Execute the statement
        $stmtGetchecklistId->execute();
        // Get the result
        $getResultstmt = $stmtGetchecklistId->get_result();
        // Fetch the data
        if ($row = $getResultstmt->fetch_assoc()) {
            $getChecklistIDPermitID = $row['permit_id'];
            // echo "Permit ID: " . htmlspecialchars($getChecklistIDPermitID);
        } else {
            echo "No results found.";
        }

        $currentDateTime = date('Y-m-d H:i:s');

        // Retrieve project name from permits table
        $stmt3 = $conn->prepare("SELECT project_name FROM permits WHERE permit_id = ?");
        $stmt3->bind_param("s", $getChecklistIDPermitID);
        $stmt3->execute();
        $stmt3->bind_result($project_name);
        $stmt3->fetch();
        $stmt3->close();

        // Get project ID based on project name
        $stmt1 = $conn->prepare("SELECT id FROM project WHERE project_name = ?");
        $stmt1->bind_param("s", $project_name);
        $stmt1->execute();
        $stmt1->bind_result($project_id);
        $stmt1->fetch();
        $stmt1->close();

        // Fetch data from the checklist_items table
        $sql = "SELECT * FROM checklist_items";
        $result = $conn->query($sql);

        // Check if there are any records
        if ($result->num_rows > 0) {
            // Store fetched data in an array
            $checklist_items = array();
            while ($row = $result->fetch_assoc()) {
                $checklist_items[] = $row;
            }
        } else {
            echo "No checklist items found.";
        }

        // Iterate through checklist items
        for ($i = 0; $i < count($checklist_items); $i++) {
            // Check if actionRadio for current index exists in $_POST
            if (isset($_POST['actionRadio' . $i])) {
                // Get the full string from POST data
                $actionRadio = $_POST['actionRadio' . $i];

                // Split the string into parts using explode
                $parts = explode('-', $actionRadio);

                // Assign each part to a specific variable, with null checks to avoid undefined errors
                $actionStatus = $parts[0] ?? null; // بخش اول
                $item = $parts[1] ?? null; // بخش دوم
                $discipline = $parts[2] ?? null; // بخش سوم

                // Now validate if the discipline is valid or skip the entry
                if ($discipline === null || $discipline === '') {
                    // Handle the case where discipline is invalid, skip or set a default value
                    $discipline = 'ندارد.'; // Assign a fallback value if discipline is empty
                }

                // description of current form
                $desc = $_POST['description'];

                // Check if an entry already exists for the given item and permit_id
                $checkExistSql = "SELECT COUNT(*) as count FROM checklistItemsActions WHERE permit_id = ? AND item = ?";
                $stmtCheckExist = $conn->prepare($checkExistSql);
                $stmtCheckExist->bind_param("ss", $getChecklistIDPermitID, $item);
                $stmtCheckExist->execute();
                $stmtCheckExist->bind_result($count);
                $stmtCheckExist->fetch();
                $stmtCheckExist->close();

                if ($count > 0) {
                    // Update existing record
                    $updateSql = "UPDATE `checklistItemsActions` SET `actionStatus` = ?, `discipline` = ?, `description` = ?, `submitted_at` = ? WHERE `permit_id` = ? AND `item` = ?";
                    $stmtUpdate = $conn->prepare($updateSql);
                    $stmtUpdate->bind_param("ssssss", $actionStatus, $discipline, $desc, $currentDateTime, $getChecklistIDPermitID, $item);

                    if ($stmtUpdate->execute()) {
                        echo "Data updated successfully for item $item with actionStatus: $actionStatus.<br>";
                    } else {
                        echo "Error updating data for item $item: " . $stmtUpdate->error . "<br>";
                    }
                    $stmtUpdate->close();
                } else {
                    // Insert new record if not exists
                    $insertSql = "INSERT INTO `checklistItemsActions` (`item`, `discipline`, `actionStatus`, `permit_id`, `project_id`, `user_name`, `submitted_at`, `description`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmtInsert = $conn->prepare($insertSql);
                    $stmtInsert->bind_param("ssssssss", $item, $discipline, $actionStatus, $getChecklistIDPermitID, $project_id, $_SESSION['username'], $currentDateTime, $desc);

                    if ($stmtInsert->execute()) {
                        echo "Data inserted successfully into checklistItemsAction for item $item with actionStatus: $actionStatus.<br>";
                    } else {
                        echo "Error inserting data into checklistItemsAction for item $item: " . $stmtInsert->error . "<br>";
                    }
                    $stmtInsert->close();
                }

                // Update the status in the checklist table
                $statusUpdate = "UPDATE `checklist` SET `status` = ? WHERE `permit_id` = ?";
                $stmtStatusUpdate = $conn->prepare($statusUpdate);
                if ($stmtStatusUpdate) {
                    $stmtStatusUpdate->bind_param("ss", $actionStatus, $getChecklistIDPermitID);
                    if ($stmtStatusUpdate->execute()) {
                        echo "Status updated successfully!";
                    } else {
                        echo "Error updating status: " . $stmtStatusUpdate->error;
                    }
                    $stmtStatusUpdate->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }

                // update the main status of the checklist in the table of ststua by owner of the cvhecklist in owner supervisior manager ogf hte owner :
                // echo $_GET['prmQWERTY'];
                // echo $getChecklistIDPermitID;
                if (isset($_POST['statusChecklist'])) {
                    echo $checklistMainID = str_replace('-P-', '-C-', $getChecklistIDPermitID);
                    echo $_POST['statusChecklist'];
                    $updateStatusChecklist = "UPDATE `status` SET `status` = ? WHERE `proccessID` = ?";
                    $stmtUpdateStatusChecklist = $conn->prepare(query: $updateStatusChecklist);
                    $stmtUpdateStatusChecklist->bind_param("ss", $_POST['statusChecklist'], $checklistMainID);
                    if ($stmtUpdateStatusChecklist->execute()) {
                        echo "Main Status of the Table Status is updated in this condition !";
                    } else {
                        echo "Error updateing the mian status of the Checklist by admin : " . $stmtStatusUpdateChecklist->error;
                    }
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            }
        }

        // Close connection
        $conn->close();
    }
    // header('Location: ../../checklistOwner.php');
    echo "<script>window.location.replace('../../checklistOwner.php')</script>";
    exit;
} else {
    echo "is not manager";
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve permit ID and current date time
        $permit_id = $_POST['prmQWERTY'];


        // Prepare the SQL query
        $getSql = "SELECT checklist.permit_id
                            FROM checklist
                            WHERE checklist.checklistID = ?";
        // Prepare the statement
        $stmtGetchecklistId = $conn->prepare($getSql);
        // Bind parameters (assuming checklistID is a string)
        $stmtGetchecklistId->bind_param("s", $permit_id);
        // Execute the statement
        $stmtGetchecklistId->execute();
        // Get the result
        $getResultstmt = $stmtGetchecklistId->get_result();
        // Fetch the data
        if ($row = $getResultstmt->fetch_assoc()) {
            $getChecklistIDPermitID = $row['permit_id'];
            // echo "Permit ID: " . htmlspecialchars($getChecklistIDPermitID);
        } else {
            echo "No results found.";
        }





        $currentDateTime = date('Y-m-d H:i:s');

        // Retrieve project name from permits table
        $stmt3 = $conn->prepare("SELECT project_name FROM permits WHERE permit_id = ?");
        $stmt3->bind_param("s", $getChecklistIDPermitID);
        $stmt3->execute();
        $stmt3->bind_result($project_name);
        $stmt3->fetch();
        $stmt3->close();

        // Get project ID based on project name
        $stmt1 = $conn->prepare("SELECT id FROM project WHERE project_name = ?");
        $stmt1->bind_param("s", $project_name);
        $stmt1->execute();
        $stmt1->bind_result($project_id);
        $stmt1->fetch();
        $stmt1->close();



        // Fetch data from the checklist_items table
        $sql = "SELECT * FROM checklist_items";
        $result = $conn->query($sql);

        // Check if there are any records
        if ($result->num_rows > 0) {
            // Store fetched data in an array
            $checklist_items = array();
            while ($row = $result->fetch_assoc()) {
                $checklist_items[] = $row;
            }

            // // Print the contents of $checklist_items for debugging
            // echo "Checklist Items:";
            // print_r($checklist_items);
        } else {
            echo "No checklist items found.";
        }


        // Iterate through checklist items
        for ($i = 0; $i < count($checklist_items); $i++) {
            // Check if actionRadio for current index exists in $_POST
            if (isset($_POST['actionRadio' . $i])) {

                $actionRadio = $_POST['actionRadio' . $i];

                // status of checklist
                $statusUpdate = "UPDATE `checklist` SET `status` = ? WHERE `permit_id` = ? ";
                // Prepare and execute the SQL statement
                $stmtStatusUpdate = $conn->prepare($statusUpdate);
                if ($stmtStatusUpdate) {
                    // echo "here";
                    // Bind parameters
                    $permit_status = ($actionRadio == 'Accept' || $actionRadio == 'Reject') ? 'in progress' : 'issued';
                    $permit_id = $_POST['prmQWERTY']; // Assuming this is the permit_id parameter from the URL
                    $stmtStatusUpdate->bind_param("ss", $permit_status, $getChecklistIDPermitID);
                    // Execute the statement
                    if ($stmtStatusUpdate->execute()) {
                        echo "Status updated successfully!";
                    } else {
                        echo "Error updating status: " . $stmtStatusUpdate->error;
                    }
                    // Close statement
                    $stmtStatusUpdate->close();
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }




                // description of current form;
                $desc = $_POST['description'];
                // Prepare and bind parameters for inserting into checklistItemsAction table
                $stmt = $conn->prepare("INSERT INTO `checklistItemsActions` (`item`, `actionStatus`, `permit_id`, `project_id`, `user_name`, `submitted_at`, `description`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("issssss", $i, $actionRadio, $getChecklistIDPermitID, $project_id, $_SESSION['username'], $currentDateTime, $desc);

                // Execute statement for checklistItemsAction table
                if ($stmt->execute()) {
                    echo "Data inserted successfully into checklistItemsAction for index $i with actionStatus: $actionRadio.<br>";
                } else {
                    echo "Error inserting data into checklistItemsAction for index $i: " . $stmt->error . "<br>";
                }

                $stmt->close();
            }
        }



        // for ($b = 0; $b < count($checklist_items); $b++) {

        $conn->close();
    }
    // header('Location: ../../owner.php');
    // exit;
}
