<?php
session_start();

// Database configuration
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = "0010"; // Replace with your database password
$database = "qualityassurance"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("عملیات اتصال با خطا مواجه می ابشد . اطلاعات بیشتر : " . $conn->connect_error);
}

// Get the entered PIN from the form
$enteredPin = isset($_POST['pin']) ? trim($_POST['pin']) : '';

// Prepare and execute the query to get the hashed PIN from the database
$sql = "SELECT * FROM `admin` WHERE `pin` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $enteredPin);
$stmt->execute();
$result = $stmt->get_result();

// Check if a result is returned
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $storedHashedPin = $row['pin'];
    $username = $row['username']; // Corrected to $row['username']
    $_SESSION['usern@me'] = $row['username'];

    // Verify the entered PIN against the stored hash
    if ($enteredPin == $storedHashedPin) {
        // Set session variable to indicate user is logged in
        $_SESSION['logged_in'] = true;

        // Regenerate session ID to prevent session fixation attacks
        session_regenerate_id(true);

        // Redirect to the welcome page
        header('Location: index.php');
        exit();
    }
}

// Redirect back to login page with an error
header('Location: login.php?error=true');
exit();
