<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// بررسی اینکه آیا پارامتر 'id' تنظیم شده و عددی است
if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
    die("درخواست نامعتبر است.");
}

// دریافت و به‌سازی شناسه پرمیت
$id = intval($_POST['id']);

// شروع تراکنش برای اطمینان از اجرای اتمیک عملیات
$conn->begin_transaction();

try {
    // دریافت permit_id از جدول permits
    $queryPermitId = "SELECT permit_id FROM `permits` WHERE `id` = ?";
    $stmtPermitId = $conn->prepare($queryPermitId);
    if ($stmtPermitId === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای permits.");
    }
    $stmtPermitId->bind_param('i', $id);
    $stmtPermitId->execute();
    $stmtPermitId->bind_result($permit_id);
    $stmtPermitId->fetch();
    $stmtPermitId->close();

    // بررسی اینکه permit_id پیدا شده یا خیر
    if (!$permit_id) {
        throw new Exception("پرمیت پیدا نشد.");
    }

    // حذف از جدول `permitItemsSelectionDone` برای پرمیت مشخص
    $query1 = "DELETE FROM `permitItemsSelectionDone` WHERE `permit_id` = ?";
    $stmt1 = $conn->prepare($query1);
    if ($stmt1 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای permitItemsSelectionDone.");
    }
    $stmt1->bind_param('s', $permit_id);
    $stmt1->execute();
    $stmt1->close();

    // حذف از جدول `permitItems` برای پرمیت مشخص
    $query2 = "DELETE FROM `permitItems` WHERE `permit_id` = ?";
    $stmt2 = $conn->prepare($query2);
    if ($stmt2 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای permitItems.");
    }
    $stmt2->bind_param('s', $permit_id);
    $stmt2->execute();
    $stmt2->close();

    // حذف از جدول `status` برای پرمیت مشخص
    $query3 = "DELETE FROM `status` WHERE `proccessID` = ?";
    $stmt3 = $conn->prepare($query3);
    if ($stmt3 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای status.");
    }
    $stmt3->bind_param('s', $permit_id);
    $stmt3->execute();
    $stmt3->close();

    // حذف از جدول `permit_status` برای پرمیت مشخص
    $query4 = "DELETE FROM `permit_status` WHERE `permit_id` = ?";
    $stmt4 = $conn->prepare($query4);
    if ($stmt4 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای permit_status.");
    }
    $stmt4->bind_param('s', $permit_id);
    $stmt4->execute();
    $stmt4->close();

    // حذف از جدول `seen_log` برای پرمیت مشخص
    $query5 = "DELETE FROM `seen_log` WHERE `item_id` = ? AND `item_type` = 'permit'";
    $stmt5 = $conn->prepare($query5);
    if ($stmt5 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای seen_log.");
    }
    $stmt5->bind_param('s', $permit_id);
    $stmt5->execute();
    $stmt5->close();

    // حذف از جدول `permits`
    $query6 = "DELETE FROM `permits` WHERE `id` = ?";
    $stmt6 = $conn->prepare($query6);
    if ($stmt6 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای permits.");
    }
    $stmt6->bind_param('i', $id);
    $stmt6->execute();

    // بررسی اینکه آیا ردیفی تحت تأثیر قرار گرفت
    if ($stmt6->affected_rows > 0) {
        // تأیید تراکنش
        $conn->commit();
        // هدایت به صفحه گزارش با پیام موفقیت‌آمیز
        header("Location: report_Permits.php?delete=" . urlencode("پرمیت با موفقیت حذف شد."));
    } else {
        throw new Exception("پرمیت پیدا نشد یا قبلاً حذف شده است.");
    }

    $stmt6->close();
} catch (Exception $e) {
    // در صورت بروز خطا، تراکنش را برگشت می‌زنیم
    $conn->rollback();
    // هدایت به صفحه گزارش با پیام خطا
    header("Location: report_Permits.php?errordelete=" . urlencode("خطا در حذف پرمیت: " . $e->getMessage()));
}

// بستن اتصال
$conn->close();
