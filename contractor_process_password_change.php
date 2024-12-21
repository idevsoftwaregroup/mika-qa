<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "0010";
$dbname = "qualityassurance";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming session contains the logged-in user's username
$current_username = $_SESSION['username'];

// Retrieve POST data
$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];
$confirmPassword = $_POST['confirmPassword'];

// Basic validation
if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
    header("Location: password_change_failed.php?error=All fields are required.");
    exit();
}

if ($newPassword !== $confirmPassword) {
    header("Location: password_change_failed.php?error=New passwords do not match.");
    exit();
}

// Retrieve user data from the database
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $current_username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    echo "Password: " . $user['password'];
    // Verify current password
    if ($currentPassword == $user['password']) {
        // Hash the new password
        // $newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
        echo "OK";
        // Update the password in the database
        $updateSql = "UPDATE users SET password = ? WHERE username = ?";
        $updateStmt = $conn->prepare($updateSql);
        echo $updateStmt->bind_param("ss", $newPassword, $_SESSION['username']);

        if ($updateStmt->execute()) {
            header("Location: contractor_password_change_success.php");
            exit();
        } else {
            header("Location: contractor_password_change_failed.php?error=Error updating password.");
            exit();
        }
    } else {
        header("Location: contractor_password_change_failed.php?error=Current password is incorrect.");
        exit();
    }
} else {
    header("Location: contractor_password_change_failed.php?error=User not found.");
    exit();
}

$conn->close();
