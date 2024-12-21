<!-- <base href="../"> -->
<?php
// Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
// unset($_SESSION['project_name']);
// unset($_SESSION['project_id']);

// Redirect to the login page or any other desired page after sign out
header("Location: signin.php");
exit;
