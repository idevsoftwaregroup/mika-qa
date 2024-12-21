<?php
require_once('../infrastructure/settings/dbcon/db_connection.php');

// Initialize variables
$permit = [
    'checklist_id' => '',
    'projectname' => '',
    'contractor_name' => '',
    'contract_number' => '',
    'discipline' => '',
    'permit_id' => '',
    'checklistID' => '',
    'crew' => '',
    'axis' => '',
    'floor' => '',
    'block' => '',
    'zone' => '',
    'time_to_action' => '',
    'permit_credit' => '',
    'operation_description' => '',
    'date_created' => '',
    'discipline_group' => '',
    'status' => ''
];

$action = 'update'; // Set action to update

// Check if checklist_id is provided for update
if (isset($_GET['checklist_id'])) {
    $checklist_id = intval($_GET['checklist_id']);
    $sql = "SELECT * FROM checklist WHERE checklist_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $checklist_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $permit = $result->fetch_assoc();
    } else {
        die("Checklist not found.");
    }
    $stmt->close();
} else {
    die("Invalid ID.");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect POST data
    $permit_data = [
        'projectname' => $_POST['projectname'],
        'contractor_name' => $_POST['contractor_name'],
        'contract_number' => $_POST['contract_number'],
        'discipline' => $_POST['discipline'],
        'permit_id' => $_POST['permit_id'],
        'checklistID' => $_POST['checklistID'],
        'crew' => $_POST['crew'],
        'axis' => $_POST['axis'],
        'floor' => $_POST['floor'],
        'block' => $_POST['block'],
        'zone' => $_POST['zone'],
        'time_to_action' => $_POST['time_to_action'],
        'permit_credit' => $_POST['permit_credit'],
        'operation_description' => $_POST['operation_description'],
        'discipline_group' => $_POST['discipline_group'],
        'status' => $_POST['status']
    ];
    $sql = "UPDATE checklist SET projectname = ?, contractor_name = ?, contract_number = ?, discipline = ?, permit_id = ?, checklistID = ?, crew = ?, axis = ?, floor = ?, block = ?, zone = ?, time_to_action = ?, permit_credit = ?, operation_description = ?, discipline_group = ?, status = ? WHERE checklist_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssssssi",
        $permit_data['projectname'],
        $permit_data['contractor_name'],
        $permit_data['contract_number'],
        $permit_data['discipline'],
        $permit_data['permit_id'],
        $permit_data['checklistID'],
        $permit_data['crew'],
        $permit_data['axis'],
        $permit_data['floor'],
        $permit_data['block'],
        $permit_data['zone'],
        str_replace(['روز', 'ساعت'], ['days', 'hours'], $permit_data['time_to_action']),
        str_replace(['روز', 'ساعت'], ['days', 'hours'], $permit_data['permit_credit']),
        $permit_data['operation_description'],
        $permit_data['discipline_group'],
        $permit_data['status'],
        $checklist_id
    );

    if ($stmt->execute()) {
        $message = "ویرایش چک‌لیست جاری با موفقیت انجام شد";
        echo "<script>
            function handleRedirect() {
                setTimeout(function() {
                    window.location.href = './report_Checklists.php'; // Redirect to report page
                }, 5000); // 5000 milliseconds = 5 seconds
            }
            handleRedirect();
        </script>";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش چک لیست</title>
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
        <h1 class="text-3xl font-bold mb-6 text-gray-800">ویرایش چک‌لیست</h1>

        <?php if (isset($message)): ?>
            <div class="bg-green-200 text-green-800 p-4 rounded-lg mb-4">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <div class="bg-white shadow-lg rounded-lg p-6">
            <form method="post" action="">
                <input type="hidden" name="checklist_id"
                    value="<?php echo htmlspecialchars($permit['checklist_id']); ?>">

                <div class="grid grid-cols-1 gap-4">
                    <!-- Project Name -->
                    <div>
                        <label for="projectname" class="block text-gray-700 font-semibold mb-2">پروژه</label>
                        <input type="text" id="projectname" name="projectname"
                            value="<?php echo htmlspecialchars($permit['projectname']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Contractor Name -->
                    <div>
                        <label for="contractor_name" class="block text-gray-700 font-semibold mb-2">نام پیمانکار</label>
                        <input type="text" id="contractor_name" name="contractor_name"
                            value="<?php echo htmlspecialchars($permit['contractor_name']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Contract Number -->
                    <div>
                        <label for="contract_number" class="block text-gray-700 font-semibold mb-2">شماره
                            قرارداد</label>
                        <input type="text" id="contract_number" name="contract_number"
                            value="<?php echo htmlspecialchars($permit['contract_number']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Discipline -->
                    <div>
                        <label for="discipline" class="block text-gray-700 font-semibold mb-2">دیسیپلین</label>
                        <input type="text" id="discipline" name="discipline"
                            value="<?php echo htmlspecialchars($permit['discipline']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Permit ID -->
                    <div>
                        <label for="permit_id" class="block text-gray-700 font-semibold mb-2">شناسه یکتا پرمیت</label>
                        <input type="text" id="permit_id" name="permit_id"
                            value="<?php echo htmlspecialchars($permit['permit_id']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Checklist ID -->
                    <div>
                        <label for="checklistID" class="block text-gray-700 font-semibold mb-2">شناسه یکتا
                            چک‌لیست</label>
                        <input type="text" id="checklistID" name="checklistID"
                            value="<?php echo htmlspecialchars($permit['checklistID']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                    </div>

                    <!-- Crew -->
                    <div>
                        <label for="crew" class="block text-gray-700 font-semibold mb-2">گروه</label>
                        <input type="text" id="crew" name="crew"
                            value="<?php echo htmlspecialchars($permit['crew']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Axis -->
                    <div>
                        <label for="axis" class="block text-gray-700 font-semibold mb-2">محور</label>
                        <input type="text" id="axis" name="axis"
                            value="<?php echo htmlspecialchars($permit['axis']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Floor -->
                    <div>
                        <label for="floor" class="block text-gray-700 font-semibold mb-2">طبقه</label>
                        <input type="text" id="floor" name="floor"
                            value="<?php echo htmlspecialchars($permit['floor']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Block -->
                    <div>
                        <label for="block" class="block text-gray-700 font-semibold mb-2">بلوک</label>
                        <input type="text" id="block" name="block"
                            value="<?php echo htmlspecialchars($permit['block']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Zone -->
                    <div>
                        <label for="zone" class="block text-gray-700 font-semibold mb-2">منطقه</label>
                        <input type="text" id="zone" name="zone"
                            value="<?php echo htmlspecialchars($permit['zone']); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Time to Action -->
                    <div>
                        <label for="time_to_action" class="block text-gray-700 font-semibold mb-2">زمان تا اقدام</label>
                        <input type="text" id="time_to_action" name="time_to_action"
                            value="<?php echo str_replace(['days', 'hours'], ['روز', 'ساعت'], htmlspecialchars($permit['time_to_action'])); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Permit Credit -->
                    <div>
                        <label for="permit_credit" class="block text-gray-700 font-semibold mb-2">اعتبار پرمیت</label>
                        <input type="text" id="permit_credit" name="permit_credit"
                            value="<?php echo str_replace(['days', 'hours'], ['روز', 'ساعت'], htmlspecialchars($permit['permit_credit'])); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <!-- Operation Description -->
                    <div>
                        <label for="operation_description" class="block text-gray-700 font-semibold mb-2">توضیحات
                            عملیات</label>
                        <textarea id="operation_description" name="operation_description"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"><?php echo htmlspecialchars($permit['operation_description']); ?></textarea>
                    </div>



                    <!-- Discipline Group -->
                    <div>
                        <label for="discipline_group" class="block text-gray-700 font-semibold mb-2">گروه
                            دیسیپلین</label>
                        <textarea id="discipline_group" name="discipline_group"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"><?php echo htmlspecialchars($permit['discipline_group']); ?></textarea>
                    </div>

                    <!-- Status -->
                    <div>
                        <label for="status" class="block text-gray-700 font-semibold mb-2">وضعیت</label>
                        <select id="status" name="status"
                            class="w-full px-10 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                            required>
                            <option value="Accept" <?php echo ($permit['status'] === 'Accept') ? 'selected' : ''; ?>>
                                تایید شده</option>
                            <option value="Reject" <?php echo ($permit['status'] === 'Reject') ? 'selected' : ''; ?>>
                                تایید نشده</option>
                            <option value="issued" <?php echo ($permit['status'] === 'issued') ? 'selected' : ''; ?>>
                                ایجاد شده</option>
                            <option value="in progress"
                                <?php echo ($permit['status'] === 'in progress') ? 'selected' : ''; ?>>در حال بررسی
                            </option>
                            <option value="N/A" <?php echo ($permit['status'] === 'N/A') ? 'selected' : ''; ?>>پذیرفته
                                شده</option>
                        </select>
                    </div>
                </div>

                <div class="mt-6 flex justify-between">
                    <!-- Submit Button -->
                    <button type="submit"
                        class="flex bg-green-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 w-auto">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        ذخیره تغییرات
                    </button>

                    <!-- Cancel or Another Action Link -->
                    <a href="./report_Checklists.php"
                        class="flex bg-red-600 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 w-auto text-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l7-7-7-7">
                            </path>
                        </svg>
                        انصراف
                    </a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>