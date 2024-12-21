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
        <h1 class="text-2xl font-bold mb-4">مدیریت آیتم‌های پرمیت</h1>

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

        // پیام برای نمایش موفقیت یا خطا
        $message = '';

        // حذف آیتم
        if (isset($_POST['delete_item'])) {
            $id = $_POST['item_del_id'];
            $discipline_id = $_POST['item_del_discipline_id'];

            // Check if the item has hierarchical children in another table
            $check_sql = "SELECT COUNT(discipline_id) AS count FROM `permitItemsSelectionDone` WHERE `discipline_id`=?";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("i", $discipline_id);
            $check_stmt->execute();
            $check_stmt->bind_result($child_count);
            $check_stmt->fetch();
            $check_stmt->close();

            if ($child_count > 0) {
                $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>این آیتم دارای زیرمجموعه‌های وابسته است و نمی‌توان آن را حذف کرد.</div>";
            } else {
                // Proceed with the deletion if no children exist
                $sql = "DELETE FROM `permitItemsSelection` WHERE `id`=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $id);
                if ($stmt->execute()) {
                    $message = "<div id='message' class='bg-gray-100 text-red-800 p-4 rounded mb-4'>آیتم با موفقیت حذف شد.</div>";
                } else {
                    $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>خطا در حذف آیتم: " . $stmt->error . "</div>";
                }
                $stmt->close();
            }

            echo "<script>handleRedirect();</script>";
        }

        // ویرایش آیتم
        if (isset($_POST['edit_item'])) {
            $id = $_POST['item_id'];
            $lastActivity = $_POST['lastActivity'];
            $documentations = $_POST['documentations'];
            $workingMaterials = $_POST['workingMaterials'];
            $tools = $_POST['tools'];
            $env = $_POST['env'];
            $hse = $_POST['hse'];

            $sql = "UPDATE `permitItemsSelection` SET `lastActivity`=?, `documentations`=?, `workingMaterials`=?, `tools`=?, `env`=?, `hse`=? WHERE `id`=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssi", $lastActivity, $documentations, $workingMaterials, $tools, $env, $hse, $id);

            if ($stmt->execute()) {
                $message = "<div id='message' class='bg-gray-100 text-green-800 p-4 rounded mb-4'>آیتم با موفقیت ویرایش شد.</div>";
            } else {
                $message = "<div id='message' class='bg-gray-100 text-red-800 p-4 rounded mb-4'>خطا در ویرایش آیتم: " . $stmt->error . "</div>";
            }
            $stmt->close();
            echo "<script>handleRedirect();</script>";
        }

        // نمایش پیام‌ها
        echo $message;

        // Handling Discipline Filter
        $filter_query = "";
        if (isset($_GET['discipline_filter']) && !empty($_GET['discipline_filter'])) {
            $filter_value = '%' . $_GET['discipline_filter'] . '%';
            $filter_query = "AND `permitDisciplines`.`name` LIKE ?";
        }

        // دریافت لیست آیتم‌ها از دیتابیس و گروه بندی با discipline_id
        $sql = "SELECT `permitItemsSelection`.*, `permitDisciplines`.`name` AS `discipline_name`
                FROM `permitItemsSelection`
                JOIN `permitDisciplines` ON `permitItemsSelection`.`discipline_id` = `permitDisciplines`.`id`
                WHERE 1=1 $filter_query
                ORDER BY `permitItemsSelection`.`discipline_id` ASC, `permitItemsSelection`.`id` ASC";
        $stmt = $conn->prepare($sql);

        if ($filter_query) {
            $stmt->bind_param("s", $filter_value);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        // گروه‌بندی آیتم‌ها با discipline_id
        $current_discipline_id = null;
        ?>

        <!-- Responsive table wrapper -->
        <div class="overflow-x-auto">
            <div class="flex flex-col sm:flex-row gap-3 mb-3">
                <a href="./create_discipline.php"
                    class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/1 p-3 hover:bg-blue-200">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-nowrap">درج آیتم های دیسیپلین پرمیت</span>
                    </div>
                </a>
            </div>
            <table class="min-w-full bg-white text-right border-collapse border border-gray-300">
                <thead class="sticky top-0 bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-200">تکمیل فعالیت پیشین</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">مستندات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">مصالح موردنیاز</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">ابزارآلات و تجهیزات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">شرایط محیطی</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">HSE</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        // Check if we are in a new discipline group
                        if ($current_discipline_id !== $row['discipline_id']) {
                            // Close previous discipline group if it exists
                            if ($current_discipline_id !== null) {
                                echo "</tbody></table><div class='mb-4'></div><table class='min-w-full bg-white text-right border-collapse border border-gray-300'>";
                                echo '<thead class="sticky top-0 bg-gray-100">
                    <tr>
                        <th class="py-2 px-4 border-b-2 border-gray-200">تکمیل فعالیت پیشین</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">مستندات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">مصالح موردنیاز</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">ابزارآلات و تجهیزات</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">شرایط محیطی</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">HSE</th>
                        <th class="py-2 px-4 border-b-2 border-gray-200">عملیات</th>
                    </tr>
                </thead>
                <tbody>';
                            }

                            // Update current discipline_id and create a new header row
                            $current_discipline_id = $row['discipline_id'];

                            echo "<tr><th colspan='7' class='py-2 px-4 border-b-2 border-gray-200 bg-gray-300'>دیسیپلین : " . htmlspecialchars($row['discipline_name']) . "</th></tr>";
                        }

                        echo "<tr>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                <form method='post' class='inline-block'>
                                    <input type='hidden' name='item_id' value='" . htmlspecialchars($row['id']) . "'>
                                    <input type='text' name='lastActivity' value='" . htmlspecialchars($row['lastActivity']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                    <input type='text' name='documentations' value='" . htmlspecialchars($row['documentations']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                    <input type='text' name='workingMaterials' value='" . htmlspecialchars($row['workingMaterials']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                    <input type='text' name='tools' value='" . htmlspecialchars($row['tools']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                    <input type='text' name='env' value='" . htmlspecialchars($row['env']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='py-2 px-4 border-b border-gray-200'>
                                    <input type='text' name='hse' value='" . htmlspecialchars($row['hse']) . "' class='border rounded p-1 w-full'>
                              </td>";
                        echo "<td class='flex py-2 px-4 border-b border-gray-200'>
                                <button type='submit' name='edit_item' class='text-blue-400 px-2 py-1 rounded' title='ویرایش آیتم " . htmlspecialchars($row['lastActivity']) . "'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                                    </svg>
                                </button>
                            </form>

                            <form method='post' class='flex inline-block' action=''>
                                <input type='hidden' name='item_del_discipline_id' value='" . htmlspecialchars($row['discipline_id']) . "'>
                                <input type='hidden' name='item_del_id' value='" . htmlspecialchars($row['id']) . "'>
                                <button type='submit' name='delete_item' class='text-red-400 px-2 py-1 rounded' onclick='return confirmDeletion(this.form);' title='حذف آیتم " . htmlspecialchars($row['lastActivity']) . "'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M19.5 9.5 18.724 19.197A2.25 2.25 0 0 1 16.481 21H7.519a2.25 2.25 0 0 1-2.243-1.803L4.5 9.5m15 0H4.5m15 0a.75.75 0 0 0-.75-.75h-3.1a.75.75 0 0 1-.75-.75v-.9a2.25 2.25 0 0 0-2.25-2.25H8.35a2.25 2.25 0 0 0-2.25 2.25v.9a.75.75 0 0 1-.75.75H4.5a.75.75 0 0 0-.75.75' />
                                    </svg>
                                </button>
                            </form>
                          </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Begin :: Footer -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Footer -->

</body>

</html>