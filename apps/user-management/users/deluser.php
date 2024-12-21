<?php
// Check if the ID parameter is set
if(isset($_GET['id'])) {
    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "0010";
    $database = "qualityassurance";

    // Establish database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize the ID input to prevent SQL injection
    $id = $conn->real_escape_string($_GET['id']);

    // SQL query to delete the user with the specified ID
    $sql = "DELETE FROM users WHERE id = '$id'";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page where users are listed
        echo '<script>alert("User #'.$id.' is deleted ...")</script>';
        header("Location: list.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    // If ID parameter is not set, redirect to an error page or display an error message
    echo "User ID not provided.";
}
?>
