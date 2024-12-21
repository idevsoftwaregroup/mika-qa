<?php
// اتصال به دیتابیس
session_start(); // شروع سشن
$servername = "localhost";
$username = "root";
$password = "0010";
$dbname = "qualityassurance";

// ساخت اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// دریافت نام گروه دیسیپلین از درخواست AJAX
$disciplineGroupName = isset($_GET['discipline_group_name']) ? $conn->real_escape_string($_GET['discipline_group_name']) : '';

// دریافت شناسه پروژه از سشن
$projectID = isset($_SESSION['project_id']) ? $_SESSION['project_id'] : '';

if (empty($disciplineGroupName) || empty($projectID)) {
    echo json_encode(["error" => "نام گروه دیسیپلین یا شناسه پروژه معتبر نیست."]);
    exit;
}

// تبدیل نام گروه دیسیپلین به بازه‌ای که شماره پرمیت باید در آن باشد
$rangeStart = 0;
$rangeEnd = 0;

switch ($disciplineGroupName) {
    case "گود و سازه":
        $rangeStart = 0;
        $rangeEnd = 999;
        break;
    case "سفت کاری و نازک کاری":
        $rangeStart = 1000;
        $rangeEnd = 3999;
        break;
    case "تاسیسات الکتریکال":
        $rangeStart = 4000;
        $rangeEnd = 4999;
        break;
    case "تاسیسات مکانیکال":
        $rangeStart = 5000;
        $rangeEnd = 5999;
        break;
    case "نما و کلایمر":
        $rangeStart = 6000;
        $rangeEnd = 6999;
        break;
    case "آسانسور و پله برقی و رمپ برقی":
        $rangeStart = 7000;
        $rangeEnd = 7999;
        break;
    default:
        echo json_encode(["error" => "نام گروه دیسیپلین نامعتبر است."]);
        exit;
}

// دریافت آخرین شماره پرمیت در بازه مشخص شده و برای پروژه خاص
$sql = "SELECT permit_id FROM permits WHERE contract_number = (SELECT project.contract_number FROM project WHERE project.id = '$projectID') AND CAST(SUBSTRING_INDEX(permit_id, '-', -1) AS UNSIGNED) BETWEEN $rangeStart AND $rangeEnd ORDER BY permit_id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["lastPermitID" => $row['permit_id']]);
} else {
    // اگر هیچ شماره پرمیتی یافت نشد
    echo json_encode(["lastPermitID" => null]);
}

$conn->close();

// اتصال به دیتابیس
// $servername = "localhost";
// $username = "root";
// $password = "0010";
// $dbname = "qualityassurance";

// // ساخت اتصال
// $conn = new mysqli($servername, $username, $password, $dbname);

// // بررسی اتصال
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // دریافت نام گروه دیسیپلین از درخواست AJAX
// $disciplineGroupName = $_GET['discipline_group_name'];

// // تبدیل نام گروه دیسیپلین به بازه‌ای که شماره پرمیت باید در آن باشد
// $rangeStart = 0;
// $rangeEnd = 0;

// switch ($disciplineGroupName) {
//     case "گود و سازه":
//         $rangeStart = 0;
//         $rangeEnd = 999;
//         break;
//     case "سفت کاری و نازک کاری":
//         $rangeStart = 1000;
//         $rangeEnd = 3999;
//         break;
//     case "تاسیسات الکتریکال":
//         $rangeStart = 4000;
//         $rangeEnd = 4999;
//         break;
//     case "تاسیسات مکانیکال":
//         $rangeStart = 5000;
//         $rangeEnd = 5999;
//         break;
//     case "نما و کلایمر":
//         $rangeStart = 6000;
//         $rangeEnd = 6999;
//         break;
//     case "آسانسور و پله برقی و رمپ برقی":
//         $rangeStart = 7000;
//         $rangeEnd = 7999;
//         break;
//     default:
//         // اگر نام گروه دیسیپلین معتبر نبود
//         echo json_encode(["error" => "نام گروه دیسیپلین نامعتبر است."]);
//         exit;
// }

// // دریافت آخرین شماره پرمیت در بازه مشخص شده
// $sql = "SELECT permit_id FROM permits WHERE CAST(SUBSTRING_INDEX(permit_id, '-', -1) AS UNSIGNED) BETWEEN $rangeStart AND $rangeEnd ORDER BY permit_id DESC LIMIT 1";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $row = $result->fetch_assoc();
//     echo json_encode(["lastPermitID" => $row['permit_id']]);
// } else {
//     // اگر هیچ شماره پرمیتی یافت نشد
//     echo json_encode(["lastPermitID" => null]);
// }

// $conn->close();
