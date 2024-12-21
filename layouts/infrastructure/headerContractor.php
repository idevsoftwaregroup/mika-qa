<?php
// Assuming you have already started the session
session_start();
if ($_SESSION['usergrouprole'] === "owner" && $_SESSION['usergrouprole'] !== "contractor") {
    header("Location: owner.php");
    die();
} else {
    // Assuming you have established a database connection
    $servername = "localhost";
    $username = "root";
    $password = "0010";
    $dbname = "qualityassurance";


    if (!isset($_SESSION['username']) && (!isset($_SESSION['usergrouprole']))) {
        header("Location: ../signin.php");
        exit;
    } else if ($_SESSION['usergrouprole'] === "contractor") {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Query to check if the user exists in projectPersonnel table
        $sql = "SELECT u.username, 
               CASE WHEN pp.userID IS NOT NULL THEN 'Yes' ELSE 'No' END AS in_project_personnel
        FROM users u
        LEFT JOIN projectPersonnel pp ON u.id = pp.userID
        WHERE u.username = '" . $_SESSION['username'] . "' ";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Check if the condition is 'Yes'
                if ($row["in_project_personnel"] == 'Yes') {
                    // echo "The user " . $_SESSION['username'] . " exists in the projectPersonnel table.";
                    // Additional actions if needed
                } else {
                    echo "The user " . $_SESSION['username'] . " does not exist in the projectPersonnel table.";
                    // Additional actions if needed
                }
            }
        } else {
            echo "No results found.";
        }

        $conn->close();
    } else {
        header("Location: singin.php");
    }
}
