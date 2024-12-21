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
            }, 5000);
        }

        // Function to confirm deletion
        function confirmDeletion(form) {
            var confirmed = confirm("آیا مطمئن هستید که می‌خواهید این آیتم را حذف کنید؟");
            return confirmed;
        }

        // Function to reset the search form
        function resetSearch() {
            document.getElementById('discipline_filter').value = '';
            document.getElementById('search_form').submit();
        }
    </script>

    <div class="container-fluid pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">مدیریت آیتم‌های چک لیست</h1>

        <!-- Begin :: Search Filter -->
        <form method="get" class="mb-4" id="search_form">
            <label for="discipline_filter" class="block mb-2 text-sm font-medium text-gray-700">جستجوی دیسیپلین</label>
            <input type="text" id="discipline_filter" name="discipline_filter" class="border rounded p-2 w-full"
                placeholder="نام دیسیپلین را وارد کنید">
            <div class="mt-2 flex space-x-2 gap-5">
                <button type="submit" class="flex px-10 py-2 bg-indigo-500 text-white rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    جستجو
                </button>
                <button type="button" onclick="resetSearch()" class="px-10 py-2 bg-red-500 text-gray-100 rounded-2xl">
                    ریست فیلتر جستجو
                </button>
            </div>
        </form>
        <!-- End :: Search Filter -->

        <?php
        require_once '../infrastructure/settings/dbcon/db_connection.php';

        // Message for success or error
        $message = '';

        // Delete item
        if (isset($_POST['delete_item'])) {
            $id = $_POST['item_del_id'];
            $discipline_id = $_POST['item_del_discipline_name'];
            // Check if the item has hierarchical children in another table
            $check_sql = "SELECT
                                COUNT(checklistItemsActions.discipline) AS Discipline
                                    FROM
                                        checklistItemsActions
                                    WHERE
                                        checklistItemsActions.discipline = (
                                            SELECT
                                                disciplines.name COLLATE utf8mb4_unicode_ci
                                            FROM
                                                disciplines
                                            WHERE
                                                disciplines.id = ?
                                        )
                                    ";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("i", $discipline_id);
            $check_stmt->execute();
            $check_stmt->bind_result($child_count);
            $check_stmt->fetch();
            $check_stmt->close();

            if ($child_count > 0) {
                $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>این آیتم دارای زیرمجموعه‌های وابسته است و نمی‌توان آن را حذف کرد.</div>";
            } else {
                // Proceed with the deletion
                $sql = "DELETE FROM `checklist_items` WHERE `id`=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    $message = "<div id='message' class='bg-gray-100 text-red-800 p-4 rounded mb-4'>آیتم با موفقیت حذف شد.</div>";
                } else {
                    $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>خطا در حذف آیتم: " . $stmt->error . "</div>";
                }
                $stmt->close();
                echo "<script>handleRedirect();</script>";
            }
        }
        // Edit item
        if (isset($_POST['edit_item'])) {
            $id = $_POST['item_id'];
            $operation_description = $_POST['operation_description'];
            $review_criteria = $_POST['review_criteria'];
            $control_method_tool = $_POST['control_method_tool'];
            $minimum_check_value = $_POST['minimum_check_value'];
            $considerations = $_POST['considerations'];
            $allowable_tolerance = $_POST['allowable_tolerance'];

            $sql = "UPDATE `checklist_items` SET `operation_description`=?, `review_criteria`=?, `control_method_tool`=?, `minimum_check_value`=?, `considerations`=?, `allowable_tolerance`=? WHERE `id`=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssi", $operation_description, $review_criteria, $control_method_tool, $minimum_check_value, $considerations, $allowable_tolerance, $id);

            if ($stmt->execute()) {
                $message = "<div id='message' class='bg-gray-100 text-green-800 p-4 rounded mb-4'>آیتم با موفقیت ویرایش شد.</div>";
            } else {
                $message = "<div id='message' class='bg-gray-100 text-red-800 p-4 rounded mb-4'>خطا در ویرایش آیتم: " . $stmt->error . "</div>";
            }
            $stmt->close();
            echo "<script>handleRedirect();</script>";
        }

        // Display messages
        echo $message;

        // Handling Discipline Filter
        $filter_query = "";
        if (isset($_GET['discipline_filter']) && !empty($_GET['discipline_filter'])) {
            $filter_value = '%' . $_GET['discipline_filter'] . '%';
            $filter_query = "AND `checklist_items`.`discipline_id` IN (SELECT `id` FROM `disciplines` WHERE `name` LIKE ?)";
        }

        // Retrieve checklist items from the database and group by discipline_id
        $sql = "SELECT `checklist_items`.*, `disciplines`.`name` AS `discipline_name`
                FROM `checklist_items`
                JOIN `disciplines` ON `checklist_items`.`discipline_id` = `disciplines`.`id`
                WHERE 1=1 $filter_query
                ORDER BY `checklist_items`.`discipline_id` ASC, `checklist_items`.`id` ASC";
        $stmt = $conn->prepare($sql);

        if ($filter_query) {
            $stmt->bind_param("s", $filter_value);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        // Grouping items by discipline_id
        $current_discipline_id = null;
        ?>

        <!-- Responsive table wrapper -->
        <div class="overflow-x-auto">
            <div class="flex flex-col sm:flex-row gap-3 mb-3">
                <a href="./create_discipline_checklist.php"
                    class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/1 p-3 hover:bg-blue-200">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-nowrap">درج آیتم های چک لیست</span>
                    </div>
                </a>
            </div>
            <table class="min-w-full bg-white text-right border-collapse border border-gray-300">
                <!-- <thead class="sticky top-0 bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-200">توضیحات عملیات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">معیارهای بازبینی</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">روش/ابزار کنترل</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">حداقل مقدار بررسی</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">ملاحظات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">تفاوت مجاز</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">عملیات</th>
                    </tr>
                </thead> -->
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        // Check if we are in a new discipline group
                        if ($current_discipline_id !== $row['discipline_id']) {
                            // Close previous discipline group if it exists
                            if ($current_discipline_id !== null) {
                                echo "</tbody></table><div class='py-3'></div>";
                            }
                            // Open a new discipline group
                            echo "<h2 class='text-xl font-semibold mb-2'>{$row['discipline_name']}</h2>";
                            echo "<table class='min-w-full bg-white text-right border-collapse border border-gray-300'>";
                            echo "<thead class='bg-gray-100'>
                                    <tr>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>توضیحات عملیات</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>معیارهای بازبینی</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>روش/ابزار کنترل</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>حداقل مقدار بررسی</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>ملاحظات</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>تفاوت مجاز</th>
                                        <th class='py-2 px-4 border-b-2 border-gray-200'>عملیات</th>
                                    </tr>
                                  </thead>
                                  <tbody>";
                            $current_discipline_id = $row['discipline_id'];
                        }
                        echo "<tr>
        <td class='py-2 px-4 border-b'>{$row['operation_description']}</td>
        <td class='py-2 px-4 border-b'>{$row['review_criteria']}</td>
        <td class='py-2 px-4 border-b'>{$row['control_method_tool']}</td>
        <td class='py-2 px-4 border-b'>{$row['minimum_check_value']}</td>
        <td class='py-2 px-4 border-b'>{$row['considerations']}</td>
        <td class='py-2 px-4 border-b'>{$row['allowable_tolerance']}</td>
        <td class='py-2 px-4 border-b flex flex-nowrap'>
            <form action='edit_checklist_item.php' method='get'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit' class='text-blue-600 hover:text-blue-800'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                    </svg>
                </button>
            </form>
            <form action='' method='post' onsubmit='return confirmDeletion();'>
                <input type='hidden' name='item_del_id' value='{$row['id']}'>
                <input type='hidden' name='item_del_discipline_name' value='{$row['discipline_id']}'>
                <button type='submit' name='delete_item' class='text-red-600 hover:text-red-800'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                    </svg>
                </button>
            </form>
        </td>
    </tr>";
                    }
                    if ($current_discipline_id !== null) {
                        echo "</tbody></table>";
                    }
                    ?>
                    <script>
                        function confirmDeletion() {
                            return confirm('آیا از حذف این آیتم اطمینان دارید ؟');
                        }
                    </script>
                </tbody>
            </table>
        </div>

        <?php
        // Close the database connection
        $conn->close();
        ?>

    </div>
</body>

<!-- Begin :: Footer -->
<?php require_once('../infrastructure/settings/trail/footer.php'); ?>
<!-- End :: Footer -->

</html>