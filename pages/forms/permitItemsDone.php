<?php
session_start();

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "0010";
$database = "qualityassurance";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if items were selected
    if (!empty($_POST['items'])) {
        // Prepare the items array as JSON
        $username = $_SESSION['username'];

        // Check if the current user is a manager
        $query = "SELECT * FROM users WHERE username = ? AND job_position = 3";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $is_manager = $result->num_rows > 0;

        // Get current date and time
        $dateTimeCreated = date('Y-m-d H:i:s');

        // Initialize items array
        $items = [];
        if (!empty($_POST['items'])) {
            foreach ($_POST['items'] as $item) {
                $items[] = $item;
            }
        }

        // Check if the user is a manager
        if ($is_manager) {
            $permitCredit = $_POST['permit_credit'] . " " . $_POST['permit_credit_unit'];

            // Update status in permits
            $stmt4 = $conn->prepare("UPDATE `permits` SET `status` = ?, `permit_credit` = ?, `protection` = ?, `dateTimeDone` = ? WHERE permit_id = ? ");
            if ($stmt4) {
                $stmt4->bind_param(
                    "sssss",
                    $_POST['permit_status'],
                    $permitCredit,
                    $_POST['protection'],
                    $dateTimeCreated,
                    $_POST['prmQWERTY']
                );
                if (!$stmt4->execute()) {
                    echo "Error updating status: " . $conn->error;
                }
            } else {
                echo "Error preparing statement: " . $conn->error;
            }

            // Check if record exists in permit_status for the current user and permit_id
            $stmtCheck = $conn->prepare("SELECT * FROM `permit_status` WHERE `user_id` = ? AND `permit_id` = ?");
            $stmtCheck->bind_param("ss", $username, $_POST['prmQWERTY']);
            $stmtCheck->execute();
            $resultCheck = $stmtCheck->get_result();

            if ($resultCheck->num_rows > 0) {
                // If record exists, update it
                $stmt2 = $conn->prepare("UPDATE `permit_status` SET `discipline` = ?, `status` = ?, `items` = ?, `description` = ?, `dateTimeCreated` = ? WHERE `permit_id` = ? AND `user_id` = ?");
                if ($stmt2) {
                    $stmt2->bind_param("sssssss", $_SESSION['permitItemsDiscipline'], $_POST['permit_status'], json_encode($items), $_POST['description'], $dateTimeCreated, $_POST['prmQWERTY'], $username);
                    if (!$stmt2->execute()) {
                        echo "Error updating permit status: " . $stmt2->error;
                    }
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                // If no record exists, insert a new one
                $stmt2 = $conn->prepare("INSERT INTO `permit_status` (`discipline`, `permit_id`, `user_id`, `status`, `items`, `description`, `dateTimeCreated`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                if ($stmt2) {
                    $stmt2->bind_param("sssssss", $_SESSION['permitItemsDiscipline'], $_POST['prmQWERTY'], $username, $_POST['permit_status'], json_encode($items), $_POST['description'], $dateTimeCreated);
                    if (!$stmt2->execute()) {
                        echo "Error inserting permit status: " . $stmt2->error;
                    }
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            }

            // Update status in the status table
            $stmtStatus = $conn->prepare("UPDATE `status` SET `status` = ?, date_created = ? WHERE `proccessID` = ?");
            if ($stmtStatus) {
                $stmtStatus->bind_param("sss", $_POST['permit_status'], $dateTimeCreated, $_POST['prmQWERTY']);
                if (!$stmtStatus->execute()) {
                    echo "Error updating record: " . $stmtStatus->error;
                }
            } else {
                echo "Error preparing statement: " . $conn->error;
            }

            // Redirect to owner.php
            header("Location: ../../owner.php");
            exit(); // Ensure no further code is executed after redirection

        } else {
            // Handle non-manager logic
            $status = ($_POST['permit_status'] == 'Accept' || $_POST['permit_status'] == 'Reject') ? 'in progress' : 'issued';

            // Update status in permits
            $stmt4 = $conn->prepare("UPDATE `permits` SET `status` = ? WHERE permit_id = ? ");
            if ($stmt4) {
                $stmt4->bind_param(
                    "ss",
                    $status,
                    $_POST['prmQWERTY']
                );
                if (!$stmt4->execute()) {
                    echo "Error updating status: " . $conn->error;
                }
            } else {
                echo "Error preparing statement: " . $conn->error;
            }

            // Check if record exists in permit_status for the current user and permit_id
            $stmtCheck = $conn->prepare("SELECT * FROM `permit_status` WHERE `user_id` = ? AND `permit_id` = ?");
            $stmtCheck->bind_param("ss", $username, $_POST['prmQWERTY']);
            $stmtCheck->execute();
            $resultCheck = $stmtCheck->get_result();

            if ($resultCheck->num_rows > 0) {
                // If record exists, update it
                $stmt2 = $conn->prepare("UPDATE `permit_status` SET `discipline` = ?, `status` = ?, `items` = ?, `description` = ?, `dateTimeCreated` = ? WHERE `permit_id` = ? AND `user_id` = ?");
                if ($stmt2) {
                    $stmt2->bind_param("sssssss", $_SESSION['permitItemsDiscipline'], $status, json_encode($items), $_POST['description'], $dateTimeCreated, $_POST['prmQWERTY'], $username);
                    if (!$stmt2->execute()) {
                        echo "Error updating permit status: " . $stmt2->error;
                    }
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            } else {
                // If no record exists, insert a new one
                $stmt2 = $conn->prepare("INSERT INTO `permit_status` (`discipline`, `permit_id`, `user_id`, `status`, `items`, `description`, `dateTimeCreated`) VALUES (?, ?, ?, ?, ?, ?, ?)");
                if ($stmt2) {
                    $stmt2->bind_param("sssssss", $_SESSION['permitItemsDiscipline'], $_POST['prmQWERTY'], $username, $status, json_encode($items), $_POST['description'], $dateTimeCreated);
                    if (!$stmt2->execute()) {
                        echo "Error inserting permit status: " . $stmt2->error;
                    }
                } else {
                    echo "Error preparing statement: " . $conn->error;
                }
            }

            // Update status in the status table
            $stmtStatus = $conn->prepare("UPDATE `status` SET `status` = ?, date_created = ? WHERE `proccessID` = ?");
            if ($stmtStatus) {
                $stmtStatus->bind_param("sss", $status, $dateTimeCreated, $_POST['prmQWERTY']);
                if (!$stmtStatus->execute()) {
                    echo "Error updating record: " . $stmtStatus->error;
                }
            } else {
                echo "Error preparing statement: " . $conn->error;
            }

            // Redirect to owner.php
            header("Location: ../../owner.php");
            exit(); // Ensure no further code is executed after redirection
        }
    } else {
        echo "No items selected.";
        header("Location: ./permitItemsCheck.php");
        exit();
    }
} else {
    echo "No form submitted.";
}

// Close connection
$conn->close();
