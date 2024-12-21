        <script>
            // Function to handle delayed redirection
            function handleRedirect() {
                setTimeout(function() {
                    window.location.href = "./report_Permits.php"; // Refresh the page
                }, 5000); // 5000 milliseconds = 5 seconds
            }
        </script>
        <?php
        // Begin :: Database Connection
        require_once('../infrastructure/settings/dbcon/db_connection.php'); // Adjust the path as needed

        // Initialize variables
        $permit = [
            'id' => '',
            'project_name' => '',
            'contractor_name' => '',
            'contract_number' => '',
            'discipline' => '',
            'crew' => '',
            'axis' => '',
            'floor' => '',
            'block' => '',
            'zone' => '',
            'operation_description' => '',
            'time_to_action' => '',
            'permit_credit' => '',
            'permit_id' => '',
            'checklistID' => '',
            'status' => ''
        ];

        $action = 'insert'; // Default to insert action

        // Check if id is provided for update
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $permit_id = intval($_GET['id']);
            $sql = "SELECT * FROM permits WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $permit_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $permit = $result->fetch_assoc();
                $action = 'update'; // Set action to update
            } else {
                die("Permit not found.");
            }
            $stmt->close();
        }

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect POST data
            $permit_data = [
                'project_name' => $_POST['project_name'],
                'contractor_name' => $_POST['contractor_name'],
                'contract_number' => $_POST['contract_number'],
                'discipline' => $_POST['discipline'],
                'crew' => $_POST['crew'],
                'axis' => $_POST['axis'],
                'floor' => $_POST['floor'],
                'block' => $_POST['block'],
                'zone' => $_POST['zone'],
                'operation_description' => $_POST['operation_description'],
                'time_to_action' => $_POST['time_to_action'],
                'permit_credit' => $_POST['permit_credit'],
                'permit_id' => $_POST['permit_id'],
                'checklistID' => $_POST['checklistID'],
                'status' => $_POST['status']
            ];

            if ($action === 'update') {
                $sql = "UPDATE permits SET project_name = ?, contractor_name = ?, contract_number = ?, discipline = ?, crew = ?, axis = ?, floor = ?, block = ?, zone = ?, operation_description = ?, time_to_action = ?, permit_credit = ?, permit_id = ?, checklistID = ?, status = ? WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param(
                    "sssssssssssssssi",
                    $permit_data['project_name'],
                    $permit_data['contractor_name'],
                    $permit_data['contract_number'],
                    $permit_data['discipline'],
                    $permit_data['crew'],
                    $permit_data['axis'],
                    $permit_data['floor'],
                    $permit_data['block'],
                    $permit_data['zone'],
                    $permit_data['operation_description'],
                    $permit_data['time_to_action'],
                    $permit_data['permit_credit'],
                    $permit_data['permit_id'],
                    $permit_data['checklistID'],
                    $permit_data['status'],
                    $permit_id
                );
            } else {
                $sql = "INSERT INTO permits (project_name, contractor_name, contract_number, discipline, crew, axis, floor, block, zone, operation_description, time_to_action, permit_credit, permit_id, checklistID, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param(
                    "sssssssssssssss",
                    $permit_data['project_name'],
                    $permit_data['contractor_name'],
                    $permit_data['contract_number'],
                    $permit_data['discipline'],
                    $permit_data['crew'],
                    $permit_data['axis'],
                    $permit_data['floor'],
                    $permit_data['block'],
                    $permit_data['zone'],
                    $permit_data['operation_description'],
                    $permit_data['time_to_action'],
                    $permit_data['permit_credit'],
                    $permit_data['permit_id'],
                    $permit_data['checklistID'],
                    $permit_data['status']
                );
            }

            if ($stmt->execute()) {
                $message = $action === 'update' ? "ویرایش پرمیت جاری با موفقیت انجام شد" : "درج پرمیت با موفقیت انجام شد";
                echo "<script>handleRedirect();</script>";
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
            <title><?php echo $action === 'update' ? 'ویرایش پرمیت' : 'افزودن پرمیت'; ?></title>
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
                <h1 class="text-3xl font-bold mb-6 text-gray-800">
                    <?php echo $action === 'update' ? 'ویرایش پرمیت' : 'افزودن پرمیت'; ?></h1>

                <?php if (isset($message)): ?>
                    <div class="bg-green-200 text-green-800 p-4 rounded-lg mb-4">
                        <?php echo htmlspecialchars($message); ?>
                    </div>
                <?php endif; ?>

                <div class="bg-white shadow-lg rounded-lg p-6">
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($permit['id']); ?>">

                        <div class="grid grid-cols-1 gap-4">
                            <!-- Project Name -->
                            <div>
                                <label for="project_name" class="block text-gray-700 font-semibold mb-2">پروژه</label>
                                <input type="text" id="project_name" name="project_name"
                                    value="<?php echo htmlspecialchars($permit['project_name']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Contractor Name -->
                            <div>
                                <label for="contractor_name" class="block text-gray-700 font-semibold mb-2">نام
                                    پیمانکار</label>
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

                            <!-- Crew -->
                            <div>
                                <label for="crew" class="block text-gray-700 font-semibold mb-2">تیم پیمانکار</label>
                                <input type="text" id="crew" name="crew"
                                    value="<?php echo htmlspecialchars($permit['crew']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Axis -->
                            <div>
                                <label for="axis" class="block text-gray-700 font-semibold mb-2">محور</label>
                                <input type="text" id="axis" name="axis"
                                    value="<?php echo htmlspecialchars($permit['axis']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Floor -->
                            <div>
                                <label for="floor" class="block text-gray-700 font-semibold mb-2">طبقه</label>
                                <input type="text" id="floor" name="floor"
                                    value="<?php echo htmlspecialchars($permit['floor']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Block -->
                            <div>
                                <label for="block" class="block text-gray-700 font-semibold mb-2">بلوک</label>
                                <input type="text" id="block" name="block"
                                    value="<?php echo htmlspecialchars($permit['block']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Zone -->
                            <div>
                                <label for="zone" class="block text-gray-700 font-semibold mb-2">زون</label>
                                <input type="text" id="zone" name="zone"
                                    value="<?php echo htmlspecialchars($permit['zone']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                            </div>

                            <!-- Operation Description -->
                            <div>
                                <label for="operation_description"
                                    class="block text-gray-700 font-semibold mb-2">توضیحات عملیات</label>
                                <textarea id="operation_description" name="operation_description" rows="3"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"><?php echo htmlspecialchars($permit['operation_description']); ?></textarea>
                            </div>

                            <!-- Time to Action -->
                            <div>
                                <label for="time_to_action" class="block text-gray-700 font-semibold mb-2">زمان
                                    انجام</label>
                                <input type="text" id="time_to_action" name="time_to_action"
                                    value="<?php echo htmlspecialchars($permit['time_to_action']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>

                            <!-- Permit Credit -->
                            <div>
                                <label for="permit_credit" class="block text-gray-700 font-semibold mb-2">اعتبار
                                    پرمیت</label>
                                <input type="text" id="permit_credit" name="permit_credit"
                                    value="<?php echo htmlspecialchars($permit['permit_credit']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>

                            <!-- Permit ID -->
                            <div>
                                <label for="permit_id" class="block text-gray-700 font-semibold mb-2">شماره
                                    پرمیت</label>
                                <input type="text" id="permit_id" name="permit_id"
                                    value="<?php echo htmlspecialchars($permit['permit_id']); ?>"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            </div>

                            <!-- Checklist ID -->
                            <div>
                                <label for="checklistID" class="block text-gray-700 font-semibold mb-2">شماره
                                    چک‌لیست</label>
                                <input id="checklistID" name="checklistID" type="text"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    value="<?php echo htmlspecialchars($permit['checklistID'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>


                            <!-- Status -->
                            <div>
                                <label for="status" class="block text-gray-700 font-semibold mb-2">وضعیت</label>
                                <select id="status" name="status"
                                    class="w-full px-10 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    required>
                                    <option value="Accept"
                                        <?php echo ($permit['status'] === 'Accept') ? 'selected' : ''; ?>>تایید شده
                                    </option>
                                    <option value="Reject"
                                        <?php echo ($permit['status'] === 'Reject') ? 'selected' : ''; ?>>تایید نشده
                                    </option>
                                    <option value="issued"
                                        <?php echo ($permit['status'] === 'issued') ? 'selected' : ''; ?>>ایجاد شده
                                    </option>
                                    <option value="in progress"
                                        <?php echo ($permit['status'] === 'in progress') ? 'selected' : ''; ?>>در حال
                                        بررسی</option>
                                    <option value="N/A" <?php echo ($permit['status'] === 'N/A') ? 'selected' : ''; ?>>
                                        پذیرفته شده</option>
                                </select>
                            </div>

                        </div>

                        <div class="mt-6 flex space-x-4 justify-between">
                            <button type="submit"
                                class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition duration-200 gap-2">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <?php echo $action === 'update' ? 'به‌روزرسانی' : 'افزودن'; ?>
                            </button>
                            <a href="report_Permits.php"
                                class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg shadow hover:bg-gray-700 transition duration-200 gap-2">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 19l7-7-7-7"></path>
                                </svg>
                                بازگشت به لیست
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Begin :: Footer -->
            <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
            <!-- End :: Footer -->

        </body>

        </html>