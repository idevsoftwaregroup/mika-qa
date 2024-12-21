<?php
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

// Optional: Set the character set to UTF-8
$conn->set_charset("utf8");

// Connection successful
$varMessage = "وضعیت کانکشن : موفقیت آمیز می باشد.";
