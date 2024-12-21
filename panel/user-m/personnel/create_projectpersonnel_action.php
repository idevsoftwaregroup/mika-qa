<?php
// Include the database connection
include_once('../../infrastructure/settings/dbcon/db_connection.php');

// Retrieve form data
$fullnames = $_POST['fullname']; // Array of usernames
$jobTitles = $_POST['job_title']; // Array of job titles
$shifts = $_POST['shift']; // Array of shifts
$roles = $_POST['role']; // Array of roles
$projectIDs = $_POST['projectID']; // Array of project IDs

// Validate inputs
$errors = [];
if (empty($fullnames)) {
    $errors[] = "نام و نام خانوادگی را وارد کنید.";
}
if (empty($jobTitles)) {
    $errors[] = "عنوان شغلی را وارد کنید.";
}
if (empty($shifts)) {
    $errors[] = "شیفت را انتخاب کنید.";
}
if (empty($roles)) {
    $errors[] = "نقش را انتخاب کنید.";
}
if (empty($projectIDs)) {
    $errors[] = "شناسه پروژه را انتخاب کنید.";
}

if (!empty($errors)) {
    // Redirect back with error messages
    $errorMessage = implode(', ', $errors);
    header("Location: create_personnel.php?error=" . urlencode($errorMessage));
    exit;
}

// Prepare to insert data
$conn->begin_transaction();

try {
    // Prepare SQL statements for checking existence and inserting data
    $checkSql = "SELECT id FROM projectPersonnel WHERE userID = ? AND projectID = ?";
    $checkStmt = $conn->prepare($checkSql);

    $insertSql = "INSERT INTO projectPersonnel (job_title, shift, name, role, projectID, userID) VALUES (?, ?, ?, ?, ?, ?)";
    $insertStmt = $conn->prepare($insertSql);

    foreach ($fullnames as $index => $fullname) {
        $jobTitle = $jobTitles[$index];
        $shift = $shifts[$index];
        $role = $roles[$index];
        $projectID = $projectIDs[$index];

        // Fetch userID from the username
        $username = $fullname;
        $userQuery = "SELECT id FROM users WHERE username = ?";
        $userStmt = $conn->prepare($userQuery);
        $userStmt->bind_param('s', $username);
        $userStmt->execute();
        $userStmt->bind_result($userID);
        $userStmt->fetch();
        $userStmt->close();

        if (!$userID) {
            throw new Exception("شناسه کاربر برای نام کاربری {$username} پیدا نشد.");
        }

        // Check if the combination already exists
        $checkStmt->bind_param('ii', $userID, $projectID);
        $checkStmt->execute();
        $checkStmt->store_result();
        
        if ($checkStmt->num_rows > 0) {
            // Add a warning message if it already exists
            $errors[] = "کاربر {$fullname} قبلا به پروژه با شناسه {$projectID} نسبت داده شده است.";
            continue; // Skip this entry
        }

        // Bind parameters and execute the insertion
        $insertStmt->bind_param('ssssii', $jobTitle, $shift, $fullname, $role, $projectID, $userID);
        $insertStmt->execute();
    }

    // Commit the transaction if no errors
    if (empty($errors)) {
        $conn->commit();
        // Redirect back with success message
        header("Location: create_personnel.php?success=1");
    } else {
        // Rollback the transaction if there are errors
        $conn->rollback();
        // Redirect back with error messages
        header("Location: create_personnel.php?error=" . urlencode(implode(', ', $errors)));
    }
} catch (Exception $e) {
    // Rollback the transaction in case of an error
    $conn->rollback();
    // Redirect back with failure message
    header("Location: create_personnel.php?error=" . urlencode("Error: " . $e->getMessage()));
} finally {
    // Close the statements and connection
    if (isset($checkStmt)) $checkStmt->close();
    if (isset($insertStmt)) $insertStmt->close();
    $conn->close();
}
?>
