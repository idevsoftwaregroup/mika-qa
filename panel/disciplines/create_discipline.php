<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-green-200">

    <!-- Begin :: Nav -->
    <?php require_once('../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <!-- Begin :: Infrastructure -->
    <script>
        // Function to handle delayed redirection
        function handleRedirect() {
            setTimeout(function() {
                window.location.href = window.location.pathname; // Refresh the page
            }, 5000); // 5000 milliseconds = 5 seconds
        }
    </script>
    <div class="container-fluid pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">درج آیتم های دیسیپلین پرمیت</h1>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="./create_GroupDiscipline.php"
                class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">درج گروه دیسیپلین ها پرمیت</span>
                </div>
            </a>
            <a href="./manage_permitItems.php"
                class="flex bg-lime-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-nowrap">مدیریت آیتم های دیسیپلین پرمیت</span>
                </div>
            </a>
        </div>
        <?php
        require_once '../infrastructure/settings/dbcon/db_connection.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_item'])) {
            $discipline_id = $_POST['discipline_id'];
            $lastActivity = $_POST['lastActivity'];
            $documentations = $_POST['documentations'];
            $workingMaterials = $_POST['workingMaterials'];
            $tools = $_POST['tools'];
            $env = $_POST['env'];
            $hse = $_POST['hse'];

            $totalItems = count($lastActivity); // Assumes all arrays are of equal length

            for ($index = 0; $index < $totalItems; $index++) {
                // Check if the item already exists
                $checkSql = "SELECT COUNT(*) FROM permitItemsSelection WHERE discipline_id = ? AND lastActivity = ? AND documentations = ? AND workingMaterials = ? AND tools = ? AND env = ? AND hse = ?";
                $checkStmt = $conn->prepare($checkSql);
                $checkStmt->bind_param("issssss", $discipline_id, $lastActivity[$index], $documentations[$index], $workingMaterials[$index], $tools[$index], $env[$index], $hse[$index]);
                $checkStmt->execute();
                $checkStmt->bind_result($count);
                $checkStmt->fetch();
                $checkStmt->close();

                if ($count > 0) {
                    echo "<div class='bg-yellow-200 text-yellow-800 p-4 rounded mb-4'>این آیتم قبلاً وجود دارد.</div>";
                } else {
                    $sql = "INSERT INTO permitItemsSelection (discipline_id, lastActivity, documentations, workingMaterials, tools, env, hse) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("issssss", $discipline_id, $lastActivity[$index], $documentations[$index], $workingMaterials[$index], $tools[$index], $env[$index], $hse[$index]);

                    if ($stmt->execute()) {
                        echo "<div class='bg-green-200 text-green-800 p-4 rounded mb-4'>آیتم جدید با موفقیت ایجاد شد.</div>";
                        echo "<script>handleRedirect();</script>";
                    } else {
                        echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>خطا: " . $stmt->error . "</div>";
                        echo "<script>handleRedirect();</script>"; // Call the redirect function
                    }

                    $stmt->close();
                }
            }

            $conn->close();
        }
        ?>
        <!-- Begin :: Form -->
        <!-- Add these lines in your <head> section -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <div class="flex flex-nowrap bg-gray-100 text-gray-500 rounded-md mb-1 min-w-full">
            <form method="post" class="bg-white p-6 rounded-lg shadow-md w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="discipline_id">
                        انتخاب گروه دیسیپلین
                    </label>
                    <select id="discipline_id" name="discipline_id" required
                        class="shadow appearance-none border rounded-2xl w-full py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline ">
                        <option value="">یک دیسیپلین را انتخاب کنید</option>
                        <?php
                        $sql = "SELECT id, name FROM permitDisciplines";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Initialize Select2 -->
                <script>
                    $(document).ready(function() {
                        $('#discipline_id').select2({
                            placeholder: "یک دیسیپلین را انتخاب کنید",
                            allowClear: true
                        });
                    });
                </script>



                <div id="item-container" class="flex flex-col gap-4 mb-4">
                    <!-- Initial Item Row -->
                    <div class="item-row bg-gray-100 p-2  mb-0rounded border border-gray-300 min-w-[400px]">
                        <div class="px-5 mt-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2 text-nowrap content-center"
                                for="item_name[]">
                                آیتم های دیسیپلین پرمیت
                            </label>
                        </div>
                        <div class="container-fluid pl-2 pr-2 p-2 mt-0 flex flex-nowrap w-[100%]">
                            <input type="text" name="lastActivity[]" placeholder="آیتم تکمیل فعالیت پیشین"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="documentations[]" placeholder="آیتم مستندات"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="workingMaterials[]" placeholder="آیتم مصالح موردنیاز"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="tools[]" placeholder="آیتم ابزارآلات و تجهیزات"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="env[]" placeholder="آیتم شرایط محیطی"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="hse[]" placeholder="آیتم HSE"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <button type="button"
                                class="remove-item bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2 mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-4 mt-4">
                    <button type="button" onclick="addItem()"
                        class="flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline rounded-2xl gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                        افزودن لیست آیتم ها
                    </button>
                    <button type="submit" name="create_item"
                        class="flex bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline rounded-2xl">
                        ذخیره فرم آیتم های دیسیپلین پرمیت
                    </button>
                </div>
            </form>
        </div>
        <!-- End :: Form -->

    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

    <!-- Begin :: JavaScript -->
    <script>
        function addItem() {
            var container = document.getElementById('item-container');
            var itemDiv = document.createElement('div');
            itemDiv.className = 'flex flex-nowrap item-row bg-gray-100 p-4 rounded border border-gray-300 min-w-[400px]';

            // Define placeholders for each input
            var placeholders = [
                'آیتم تکمیل فعالیت پیشین',
                'آیتم مستندات',
                'آیتم مصالح موردنیاز',
                'آیتم ابزارآلات و تجهیزات',
                'آیتم شرایط محیطی',
                'آیتم HSE'
            ];
            var names = ['lastActivity[]', 'documentations[]', 'workingMaterials[]', 'tools[]', 'env[]', 'hse[]'];

            names.forEach((name, index) => {
                // Create input element
                var input = document.createElement('input');
                input.type = 'text';
                input.name = name;
                input.placeholder = placeholders[index]; // Set unique placeholder
                input.className =
                    'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2';
                // input.required = true;

                // Append input to itemDiv
                itemDiv.appendChild(input);
            });

            // Create remove button
            var removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.className =
                'remove-item bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2';

            // Correctly insert SVG icon into the button
            removeBtn.innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        `;

            removeBtn.onclick = function() {
                container.removeChild(itemDiv);
            };

            itemDiv.appendChild(removeBtn);
            container.appendChild(itemDiv);
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Attach event listeners to existing remove buttons
            document.querySelectorAll('.remove-item').forEach(button => {
                button.onclick = function() {
                    var itemDiv = this.parentElement;
                    itemDiv.parentElement.removeChild(itemDiv);
                };
            });
        });
    </script>
    <!-- End :: JavaScript -->

</body>

</html>