<?php
// Include database connection and other required files
require_once('../../infrastructure/settings/dbcon/db_connection.php');
// <?php
// Database configuration
// $servername = "localhost"; // Replace with your server name
// $username = "root"; // Replace with your database username
// $password = "0010"; // Replace with your database password
// $database = "qualityassurance"; // Replace with your database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("عملیات اتصال با خطا مواجه می ابشد . اطلاعات بیشتر : " . $conn->connect_error);
// }

// // Optional: Set the character set to UTF-8
// $conn->set_charset("utf8");

// // Connection successful
// echo "وضعیت کانکشن : موفقیت آمیز می باشد.";

// Function to sanitize input
function sanitize_input($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form inputs
    $username = sanitize_input($_POST['username']);
    $fullname = sanitize_input($_POST['fullname']);
    $password = sanitize_input($_POST['password']);
    $phone_number = sanitize_input($_POST['phone_number']);
    $job_title = sanitize_input($_POST['job_title']);
    $job_position = isset($_POST['job_position']) ? (int)sanitize_input($_POST['job_position']) : null;
    $company = sanitize_input($_POST['company']);
    $desc = sanitize_input($_POST['desc']);

    // Check if required fields are empty
    if (empty($username) || empty($fullname) || empty($password)) {
        $error = "نام کاربری، نام / نام خانوادگی و رمز ورود کاربر الزامی هستند.";
        header("Location: create_user.php?error=" . urlencode($error));
        exit();
    }

    // Prepare SQL query with placeholders for values
    $sql = "INSERT INTO `users` (
                `username`, 
                `fullname`, 
                `password`, 
                `phone_number`, 
                `job_title`, 
                `job_position`, 
                `company`, 
                `description`, 
                `date_created`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";

    // Prepare and execute the statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the statement
        if ($stmt->bind_param("sssssiss", $username, $fullname, $password, $phone_number, $job_title, $job_position, $company, $desc)) {
            // Execute the statement
            if ($stmt->execute()) {
                // Redirect to a success page or display a success message
                header("Location: create_user.php?success=" . $username);
            } else {
                // Handle SQL errors
                $error = "خطا در ایجاد کاربر. لطفا دوباره تلاش کنید: " . $stmt->error;
                header("Location: create_user.php?error=" . urlencode($error));
            }
        } else {
            // Bind parameter error
            $error = "خطا در تخصیص پارامترها. لطفا دوباره تلاش کنید.";
            header("Location: create_user.php?error=" . urlencode($error));
        }
        // Close the statement
        $stmt->close();
    } else {
        // Handle SQL preparation errors
        $error = "خطا در آماده‌سازی درخواست: " . $mysqli->error;
        header("Location: create_user.php?error=" . urlencode($error));
    }

    // Close the database connection
    $mysqli->close();
} else {
    // Redirect if the form wasn't submitted correctly
    header("Location: create_user.php");
    exit();
}
