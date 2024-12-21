<?php
// Begin :: Database Connection
require_once('../infrastructure/settings/dbcon/db_connection.php'); // Adjust the path as needed

// Fetch the permit ID from the query string
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid permit ID.");
}

$permit_id = intval($_GET['id']);

// Query to fetch permit details
$sql = "SELECT * FROM permits WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $permit_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Permit not found.");
}

$permit = $result->fetch_assoc();
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات پرمیت</title>
    <link rel="stylesheet" href="../styles/tailwind.css"> <!-- Adjust the path as needed -->
    <!-- Heroicons for Tailwind -->
    <script src="https://unpkg.com/@heroicons/vue@1.0.6"></script>
</head>

<body dir="rtl" class="bg-stone-200">

    <!-- Begin :: Header -->
    <?php require_once('../infrastructure/settings/header/header.php'); ?>
    <!-- End :: Header -->

    <!-- Begin :: Nav -->
    <?php require_once('../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <div class="container-fluid pl-5 pr-5 mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">جزئیات پرمیت</h1>

        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="mb-6">
                <h2 class="text-2xl font-semibold text-gray-900">پروژه:
                    <?php echo htmlspecialchars($permit['project_name']); ?></h2>
                <div class="mt-4 text-gray-700 p-3 space-y-3">
                    <p><strong>نام پیمانکار:</strong> <?php echo htmlspecialchars($permit['contractor_name']); ?></p>
                    <p><strong>شماره قرارداد:</strong> <?php echo htmlspecialchars($permit['contract_number']); ?></p>
                    <p><strong>شماره پرمیت:</strong> <?php echo htmlspecialchars($permit['permit_id']); ?></p>
                    <p><strong>دیسیپلین:</strong> <?php echo htmlspecialchars($permit['discipline']); ?></p>
                    <p><strong>تیم پیمانکار:</strong> <?php echo htmlspecialchars($permit['contractor_team']); ?></p>
                    <p><strong>محور:</strong> <?php echo htmlspecialchars($permit['axis']); ?></p>
                    <p><strong>طبقه:</strong> <?php echo htmlspecialchars($permit['floor']); ?></p>
                    <p><strong>بلوک:</strong> <?php echo htmlspecialchars($permit['block']); ?></p>
                    <p><strong>زون:</strong> <?php echo htmlspecialchars($permit['zone']); ?></p>
                    <p><strong>پیش بینی مدت زمان اجرا:</strong>
                        <?php echo htmlspecialchars($permit['estimated_duration']); ?></p>
                    <p><strong>وضعیت:</strong>
                        <?php echo (htmlspecialchars($permit['status']) === "Accept" ? "<span class='text-green-700'>تایید شده</span>" : (htmlspecialchars($permit['status']) === "Reject" ? "<span class='text-red-700'>تایید نشده</span>" : (htmlspecialchars($permit['status']) === "issued" ? "<span class='text-amber-700'>ایجاد شده</span>" : (htmlspecialchars($permit['status']) === "in progress" ? "<span class='text-indigo-700'>در حال بررسی</span>" : (htmlspecialchars($permit['status']) === "N/A" ? "<span class='text-green-700'>پذیرفته شده</span>" : "هیچ وضعیتی ندارد"))))); ?>
                    </p>
                </div>
            </div>

            <div class="flex space-x-4 mt-6 gap-3 justify-between">
                <div class="flex gap-3">
                    <a href="edit_permit.php?id=<?php echo urlencode($permit['id']); ?>"
                        class="flex items-center px-4 py-2 bg-indigo-600 text-white rounded-2xl shadow hover:bg-indigo-700 transition duration-200 gap-2">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                            </path>
                        </svg>
                        ویرایش
                    </a>
                    <form method="post" action="delete_permit.php"
                        onsubmit="return confirm('آیا مطمئن هستید که می‌خواهید این آیتم را حذف کنید؟');"
                        class="flex items-center">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($permit['id']); ?>">
                        <button type="submit"
                            class="flex items-center px-4 py-2 bg-red-600 text-white rounded-2xl shadow hover:bg-red-700 transition duration-200 gap-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            حذف
                        </button>
                    </form>
                </div>
                <a href="report_Permits.php"
                    class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-2xl shadow hover:bg-gray-700 transition duration-200 gap-2">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l7-7-7-7"></path>
                    </svg>
                    بازگشت به لیست
                </a>
            </div>
        </div>
    </div>

    <!-- Begin :: Footer -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Footer -->

</body>

</html>