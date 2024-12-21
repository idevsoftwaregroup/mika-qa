<?php // Owner
session_start();
$current_page = $_SERVER['PHP_SELF'];
if ($_SESSION['usergrouprole'] !== "owner" && $_SESSION['usergrouprole'] === "contractor") {
    header("Location: contractor.php");
    die();
} else {
    // Error Handling
    error_reporting(E_ALL);
    // Database connection parameters
    $host = "localhost";
    $username = "root";
    $password = "0010";
    $database = "qualityassurance";
    // Check if the user is already logged in, redirect to dashboard if logged in
    if (!isset($_SESSION['username']) && (!isset($_SESSION['usergrouprole']))) {
        header("Location: ../signin.php");
        exit;
    } else if ($_SESSION['usergrouprole'] === "owner") {
        // Establish database connection
        $conn = new mysqli($host, $username, $password, $database);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // Retrieve the username from the session
        $username = $_SESSION['username'];
        // Prepare SQL statement to check if the username exists in the projectPersonnel table
        $sql = "SELECT u.username, 
               CASE WHEN p.userID IS NOT NULL THEN 'Yes' ELSE 'No' END AS `in_personnel_project`
        FROM users u
        LEFT JOIN `projectPersonnel` p ON u.id = p.userID
        WHERE u.username = ?";
        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        // Execute the query
        $stmt->execute();
        // Get the result
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        // Check if the username exists in the projectPersonnel table
        if ($row['in_personnel_project'] == 'Yes') {
            // Username exists in the projectPersonnel table
            // Continue with the current operation

            // Redirect to another page if needed
            // header("Location: another_page.php");
            // exit();
        } else {
            echo "User {$username} with Role {$_SESSION['usergrouprole']} has not been assigned to any Project/s.";
            // Username does not exist in the projectPersonnel table
            // Redirect back to the ../# page
            if ($_SESSION['username'] === "idevsoftwaregroup" || $_SESSION['username'] === "admin") {
                // 
            } else {
                header("Location ../signin.php");
                exit;
            }
        }
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        header("Location signin.php");
    }
}
