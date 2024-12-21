<?php
// Include the database connection
require_once('../../infrastructure/settings/dbcon/db_connection.php');

// Check if a valid database connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "کانکشن با موفیت برقرار می باشد.";
}

// Retrieve and sanitize the user ID
$userId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($userId > 0) {
    // Prepare the SQL DELETE query
    $query = "DELETE FROM `users` WHERE `id` = ?";

    // Use a prepared statement to prevent SQL injection
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Bind the parameter (integer)
        mysqli_stmt_bind_param($stmt, "i", $userId);

        // Execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect with a success message
            $message = "کاربر با موفقیت حذف شد.";
            header("Location: manage_users.php?messageDelete=" . urlencode($message));
        } else {
            // Output the SQL error
            echo "Error deleting user: " . mysqli_stmt_error($stmt);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing the statement: " . mysqli_error($conn);
    }
} else {
    echo "Invalid user ID.";
}

// Close the database connection
mysqli_close($conn);
