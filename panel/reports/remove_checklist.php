<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// بررسی اینکه آیا پارامتر 'checklist_id' تنظیم شده است
if (!isset($_POST['checklist_id'])) {
    die("درخواست نامعتبر است.");
}

// دریافت و به‌سازی شناسه چک‌لیست
$checklist_id = intval($_POST['checklist_id']);

// شروع تراکنش برای اطمینان از اجرای اتمیک عملیات
$conn->begin_transaction();

try {
    // دریافت `permit_id` و `checklistID` از جدول `checklist`
    $query0 = "SELECT `permit_id`, `checklistID` FROM `checklist` WHERE `checklist_id` = ?";
    $stmt0 = $conn->prepare($query0);
    if ($stmt0 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای دریافت permit_id و checklistID.");
    }
    $stmt0->bind_param('i', $checklist_id);
    $stmt0->execute();
    $stmt0->bind_result($permit_id, $checklistID); // دریافت هر دو مقدار
    $stmt0->fetch();

    // بررسی اینکه آیا مقدار permit_id و checklistID موجود است
    if ($permit_id === null || $checklistID === null) {
        throw new Exception("چک‌لیست یا پرمیت مرتبط یافت نشد.");
    }

    $stmt0->close();

    // حذف از جدول `checklist`
    $query1 = "DELETE FROM `checklist` WHERE `checklist_id` = ?";
    $stmt1 = $conn->prepare($query1);
    if ($stmt1 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای حذف checklist.");
    }
    $stmt1->bind_param('i', $checklist_id);
    $stmt1->execute();
    $stmt1->close();

    // حذف از جدول `checklistItemsActions`
    $query2 = "DELETE FROM `checklistItemsActions` WHERE `permit_id` = ?";
    $stmt2 = $conn->prepare($query2);
    if ($stmt2 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای checklistItemsActions.");
    }
    $stmt2->bind_param('s', $permit_id);
    $stmt2->execute();
    $stmt2->close();

    // حذف از جدول `status`
    $query3 = "DELETE FROM `status` WHERE `proccessID` = ?";
    $stmt3 = $conn->prepare($query3);
    if ($stmt3 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای status.");
    }
    $stmt3->bind_param('s', $checklistID); // استفاده از checklistID برای حذف
    $stmt3->execute();
    $stmt3->close();

    // حذف از جدول `seen_log` برای پرمیت
    $query7 = "DELETE FROM `seen_log` WHERE `item_id` = ? AND `item_type` = 'Checklist'";
    $stmt7 = $conn->prepare($query7);
    if ($stmt7 === false) {
        throw new Exception("خطا در آماده‌سازی کوئری برای seen_log.");
    }
    $stmt7->bind_param('s', $permit_id);
    $stmt7->execute();
    $stmt7->close();

    // تأیید تراکنش
    $conn->commit();

    // هدایت به صفحه گزارش با پیام موفقیت‌آمیز
    header("Location: report_Checklists.php?delete=" . urlencode("چک‌لیست و موارد مرتبط با موفقیت حذف شد."));
} catch (Exception $e) {
    // در صورت بروز خطا، تراکنش را برگشت می‌زنیم
    $conn->rollback();
    // هدایت به صفحه گزارش با پیام خطا
    header("Location: report_Checklists.php?errordelete=" . urlencode("خطا در حذف چک‌لیست: " . $e->getMessage()));
}

// بستن اتصال
$conn->close();
