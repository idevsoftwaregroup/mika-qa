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
        <h1 class="text-2xl font-bold mb-4">درج آیتم های دیسیپلین چک لیست</h1>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="./create_GroupDiscipline_checklist.php"
                class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">درج گروه دیسیپلین ها چک لیست</span>
                </div>
            </a>
            <a href="./manage_checklistItems.php"
                class="flex bg-lime-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-nowrap">مدیریت آیتم های دیسیپلین چک لیست</span>
                </div>
            </a>
        </div>
        <?php
        require_once '../infrastructure/settings/dbcon/db_connection.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_item'])) {
            $discipline_id = $_POST['discipline_id'];
            $operation_description = $_POST['operation_description'];
            $review_criteria = $_POST['review_criteria'];
            $control_method_tool = $_POST['control_method_tool'];
            $minimum_check_value = $_POST['minimum_check_value'];
            $considerations = $_POST['considerations'];
            $allowable_tolerance = $_POST['allowable_tolerance'];

            $totalItems = count($operation_description); // Assumes all arrays are of equal length

            for ($index = 0; $index < $totalItems; $index++) {
                $sql = "INSERT INTO checklist_items (discipline_id, createdDateTime, operation_description, review_criteria, control_method_tool, minimum_check_value, considerations, allowable_tolerance) 
                VALUES (?, NOW(), ?, ?, ?, ?, ?, ?)";

                $stmt = $conn->prepare($sql);
                $stmt->bind_param("issssss", $discipline_id, $operation_description[$index], $review_criteria[$index], $control_method_tool[$index], $minimum_check_value[$index], $considerations[$index], $allowable_tolerance[$index]);

                if ($stmt->execute()) {
                    echo "<div class='bg-green-200 text-green-800 p-4 rounded mb-4'>آیتم جدید با موفقیت ایجاد شد.</div>";
                    echo "<script>handleRedirect();</script>";
                } else {
                    echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>خطا: " . $stmt->error . "</div>";
                    echo "<script>handleRedirect();</script>"; // Call the redirect function
                }
            }

            $stmt->close();
            $conn->close();
        }

        ?>

        <!-- Begin :: Form -->
        <!-- Add these lines in your <head> section -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <div class="flex flex-col md:flex-row bg-gray-100 text-gray-500 rounded-md mb-1 min-w-full">
            <form method="post" class="bg-white p-6 rounded-lg shadow-md w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="discipline_id">
                        انتخاب گروه دیسیپلین
                    </label>
                    <select id="discipline_id" name="discipline_id" required
                        class="shadow appearance-none border rounded w-full py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="">یک دیسیپلین را انتخاب کنید</option>
                        <?php
                        $sql = "SELECT id, name FROM disciplines";
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
                    <div class="flex flex-nowrap item-row bg-gray-100 p-4 rounded border border-gray-300 min-w-[400px]">
                        <div class="container-fluid pl-2 pr-2 p-2 mt-0 flex flex-nowrap w-[100%]">
                            <input type="text" name="operation_description[]" placeholder="عملیات"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="review_criteria[]" placeholder="معیارهای بررسی"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="allowable_tolerance[]" placeholder="رواداری مجاز"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="control_method_tool[]" placeholder="ابزار / روش کنترل"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="minimum_check_value[]" placeholder="حداقل میزان بررسی"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
                            <input type="text" name="considerations[]" placeholder="ملاحظات"
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
                <div class="flex justify-between mb-4">
                    <button type="button" id="add-item"
                        class="flex gap-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                        </svg>
                        افزودن آیتم جدید
                    </button>

                    <button type="submit" name="create_item"
                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline rounded-2xl">
                        ذخیره آیتم های دیسیپلین چک لیست
                    </button>
                </div>

            </form>
        </div>
        <!-- End :: Form -->

    </div>

    <script>
        document.getElementById('add-item').addEventListener('click', function() {
            var itemContainer = document.getElementById('item-container');
            var newItem = document.createElement('div');
            newItem.classList.add('flex', 'flex-nowrap', 'item-row', 'bg-gray-100', 'p-6', 'rounded', 'border',
                'border-gray-300', 'min-w-[400px]');
            newItem.innerHTML = `
            <input type="text" name="operation_description[]" placeholder="عملیات" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <input type="text" name="review_criteria[]" placeholder="معیارهای بررسی" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <input type="text" name="allowable_tolerance[]" placeholder="رواداری مجاز" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <input type="text" name="control_method_tool[]" placeholder="ابزار / روش کنترل" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <input type="text" name="minimum_check_value[]" placeholder="حداقل میزان بررسی" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <input type="text" name="considerations[]" placeholder="ملاحظات" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mt-2 mb-2">
            <button type="button" class="remove-item bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-2 mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
            </button>
        `;
            itemContainer.appendChild(newItem);
        });

        document.getElementById('item-container').addEventListener('click', function(event) {
            // Ensure we're targeting the button, not just the SVG or its path
            if (event.target.closest('.remove-item')) {
                event.target.closest('.item-row').remove();
            }
        });
    </script>


</body>

</html>