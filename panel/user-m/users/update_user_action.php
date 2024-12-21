<?php
require_once('../../infrastructure/settings/dbcon/db_connection.php');

// Retrieve POST data
$id = intval($_POST['id']);
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = isset($_POST['password']) ? $_POST['password'] : null;
$phone_number = $_POST['phone_number'];
$job_title = $_POST['job_title'];
$company = $_POST['company'];
$job_position = intval($_POST['job_position']); // New field

// Initialize an array to hold the SET clauses for the SQL query
$setClauses = [];

// Add fields to the SET clause array
$setClauses[] = "username = ?";
$setClauses[] = "fullname = ?";
$setClauses[] = "phone_number = ?";
$setClauses[] = "job_title = ?";
$setClauses[] = "company = ?";
$setClauses[] = "job_position = ?";

// Only add the password field if a new password is provided
if ($password) {
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $hashedPassword = $password;
    $setClauses[] = "password = ?";
}

// Combine the SET clauses into a single string
$setClause = implode(", ", $setClauses);

// Prepare the SQL statement
$query = "UPDATE users SET $setClause WHERE id = ?";
$stmt = $conn->prepare($query);

// Bind parameters to the SQL statement
$types = "sssssi" . ($password ? "s" : ""); // Determine parameter types based on provided data
$params = [$username, $fullname, $phone_number, $job_title, $company, $job_position];
if ($password) {
    $params[] = $hashedPassword;
}
$params[] = $id;

$types .= "i"; // The ID is always an integer
$bindParams = array_merge([$types], $params);
call_user_func_array([$stmt, 'bind_param'], $bindParams);

// Execute the statement
if ($stmt->execute()) {
    header("Location: manage_users.php?message=User updated successfully");
} else {
    echo "Error updating user: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
