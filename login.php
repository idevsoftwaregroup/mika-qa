<?php
// نمایش خطاهای PHP برای اشکال‌زدایی
error_reporting(E_ALL);
ini_set('display_errors', 1);

// اطلاعات اتصال به دیتابیس
$host = "localhost";
$db_username = "root"; // Changed variable name to avoid confusion
$db_password = "0010";
$database = "qualityassurance";

try {
    // اتصال به دیتابیس با استفاده از PDO
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $db_username, $db_password);
    // تنظیم حالت خطا به Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // بررسی نام کاربری و رمز عبور
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $user['id'];

        // جستجوی پروژه‌ها برای کاربر
        $projects = [];
        $usergrouprole = '';
        $project_id = '';

        $stmt_projects = $conn->prepare("
            SELECT p.id, p.project_name, pp.role
            FROM projectPersonnel pp 
            JOIN project p ON pp.projectID = p.id 
            WHERE pp.userID = :user_id
        ");
        $stmt_projects->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt_projects->execute();

        // برای جلوگیری از überschreibung متغیرها، ابتدا مقداردهی اولیه انجام می‌دهیم.
        while ($row = $stmt_projects->fetch(PDO::FETCH_ASSOC)) {
            $projects[] = ['id' => $row['id'], 'name' => $row['project_name']];
            $usergrouprole = $row['role']; // Assuming the role is the same for all projects
            $project_id = $row['id']; // Assuming storing the ID of the first project
        }
        $_SESSION['uaername'] = $username;
        $_SESSION['project_id'] = $project_id;
        $_SESSION['usergrouprole'] = $usergrouprole;
        // ارسال اطلاعات به کلاینت
        echo json_encode([
            'success' => true,
            'projects' => $projects,
            'usergrouprole' => $usergrouprole,
            'project_id' => $project_id,
            'username' => $username
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'نام کاربری یا رمز عبور اشتباه است.']);
    }
}
