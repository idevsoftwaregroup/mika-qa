<?php
// Start session
session_start();

// Check if the user is already logged in, redirect to dashboard if logged in
if (isset($_SESSION['username'])) {
    // header("Location: #");
    // exit;
}

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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];
    $_SESSION['usertype'] = $user_type;
    // Perform user authentication
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($conn->query($sql));

    if ($result->num_rows == 1) {
        // Authentication successful, set session variables
        $_SESSION['username'] = $username;
        echo $userID = $row['id'];
        // Redirect to dashboard
        $fetchProjectPersonnel = "SELECT * FROM `projectPersonnel` WHERE `userID`='$userID' ";
        $rowUser = mysqli_fetch_assoc($conn->query($fetchProjectPersonnel));
        // It handles all or the USer Group Roles => contractor, owner and administrator/s
        if ($row['id'] === $rowUser['userID'] && $rowUser['role'] === "contractor") {
            // it displays contrator cartable access form
            $_SESSION["usergrouprole"] = "contractor";
            header(
                "Location: /signinn.php?username={$username}"
            );
        } else if ($row['id'] === $rowUser['userID'] && $rowUser['role'] === "owner") {
            // it displays owner cartable form access
            $_SESSION['usergrouprole'] = "owner";
            header(
                // "Location: /owner.php" they said it should be change for getting project for any users in the latest session in mordad Mah
                "Location: /signinn.php?username={$username}"
            );
        } else {
            // It display administrator access cartable form
            $_SESSION['usergrouprole'] = "i-dev";
            header(
                "Location: /#"
            );
        }
        exit;
    } else {
        // Authentication failed, show error message
        $error = "Invalid username or password";
        header("location: ./signinerror.php");
    }
}

// Close database connection
$conn->close();
