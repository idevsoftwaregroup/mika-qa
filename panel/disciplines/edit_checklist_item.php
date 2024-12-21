<?php
require_once '../infrastructure/settings/dbcon/db_connection.php';

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("آیتم مورد نظر پیدا نشد.");
}

$id = $_GET['id'];
$error_message = '';
$success_message = '';

// Fetch the checklist item details from the database
$sql = "SELECT * FROM `checklist_items` WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("آیتم مورد نظر پیدا نشد.");
}

$item = $result->fetch_assoc();

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $operation_description = $_POST['operation_description'];
    $review_criteria = $_POST['review_criteria'];
    $control_method_tool = $_POST['control_method_tool'];
    $minimum_check_value = $_POST['minimum_check_value'];
    $considerations = $_POST['considerations'];
    $allowable_tolerance = $_POST['allowable_tolerance'];

    // Validate input
    if (empty($operation_description) || empty($review_criteria) || empty($control_method_tool) || empty($minimum_check_value) || empty($considerations) || empty($allowable_tolerance)) {
        $error_message = "لطفاً همه فیلدها را پر کنید.";
    } else {
        // Update the checklist item
        $sql = "UPDATE `checklist_items` SET 
                    `operation_description` = ?, 
                    `review_criteria` = ?, 
                    `control_method_tool` = ?, 
                    `minimum_check_value` = ?, 
                    `considerations` = ?, 
                    `allowable_tolerance` = ? 
                WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $operation_description, $review_criteria, $control_method_tool, $minimum_check_value, $considerations, $allowable_tolerance, $id);

        if ($stmt->execute()) {
            $success_message = "آیتم با موفقیت ویرایش شد.";
        } else {
            $error_message = "خطا در ویرایش آیتم: " . $stmt->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-green-200">

    <!-- Begin :: Nav -->
    <?php require_once('../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <div class="container-fluid pl-5 pr-5 mx-auto p-5 bg-white m-5 rounded">
        <h1 class="text-2xl font-bold mb-4">ویرایش آیتم چک لیست</h1>

        <!-- Display messages -->
        <?php if ($error_message): ?>
        <div class="bg-red-200 text-red-800 p-4 rounded mb-4"><?= htmlspecialchars($error_message) ?></div>
        <?php endif; ?>
        <?php if ($success_message): ?>
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4"><?= htmlspecialchars($success_message) ?></div>
        <?php endif; ?>

        <!-- Edit Form -->
        <form action="" method="post" class="space-y-4">
            <div>
                <label for="operation_description" class="block text-sm font-medium text-gray-700">توضیحات
                    عملیات</label>
                <input type="text" id="operation_description" name="operation_description"
                    value="<?= htmlspecialchars($item['operation_description']) ?>" class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="review_criteria" class="block text-sm font-medium text-gray-700">معیارهای بازبینی</label>
                <input type="text" id="review_criteria" name="review_criteria"
                    value="<?= htmlspecialchars($item['review_criteria']) ?>" class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="control_method_tool" class="block text-sm font-medium text-gray-700">روش/ابزار کنترل</label>
                <input type="text" id="control_method_tool" name="control_method_tool"
                    value="<?= htmlspecialchars($item['control_method_tool']) ?>" class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="minimum_check_value" class="block text-sm font-medium text-gray-700">حداقل مقدار
                    بررسی</label>
                <input type="text" id="minimum_check_value" name="minimum_check_value"
                    value="<?= htmlspecialchars($item['minimum_check_value']) ?>" class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="considerations" class="block text-sm font-medium text-gray-700">ملاحظات</label>
                <input type="text" id="considerations" name="considerations"
                    value="<?= htmlspecialchars($item['considerations']) ?>" class="border rounded p-2 w-full">
            </div>
            <div>
                <label for="allowable_tolerance" class="block text-sm font-medium text-gray-700">تفاوت مجاز</label>
                <input type="text" id="allowable_tolerance" name="allowable_tolerance"
                    value="<?= htmlspecialchars($item['allowable_tolerance']) ?>" class="border rounded p-2 w-full">
            </div>
            <div class="flex justify-between">
                <!-- Submit Button -->
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded flex gap-2 rounded-2xl">
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>
                    ذخیره تغییرات
                </button>

                <!-- Back to List Link -->
                <a href="./manage_checklistItems.php"
                    class="inline-block px-4 py-2 bg-gray-500 text-white rounded-2xl flex gap-3 items-center">
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                        stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round'
                            d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg>
                    بازگشت به لیست آیتم‌ها
                </a>
            </div>

        </form>

    </div>

    <!-- Begin :: Footer -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Footer -->

</body>

</html>