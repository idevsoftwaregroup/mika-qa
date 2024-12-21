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

        // AJAX Search Function
        function searchDisciplines() {
            var searchQuery = document.getElementById("search").value;

            // Create an AJAX request
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "search_disciplines_checklist.php?query=" + encodeURIComponent(searchQuery), true);

            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Update the table body with the search result
                    document.getElementById("disciplineTableBody").innerHTML = xhr.responseText;
                } else {
                    console.error("Failed to fetch search results. Status:", xhr.status);
                }
            };

            xhr.onerror = function() {
                console.error("Network error occurred while searching.");
            };

            xhr.send();
        }

        // Listen for changes in the search field
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("search").addEventListener("keyup", searchDisciplines);
        });
    </script>

    <div class="container-fluid pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4"> مدیریت گروه دیسیپلین‌ها چک لیست</h1>
        <!-- Begin :: Search -->
        <!-- Search Bar -->
        <div
            class="flex flex-col sm:flex-row gap-3 mb-3 p-5 border border-2 border-dashed border-slate-700 rounded-2xl">
            <div class="flex flex-nowrap">
                <p class="p-3 gap-3 space-x-3 text-nowrap">جستجو در بین آیتم ها :</p>
            </div>
            <input type="text" id="search" placeholder="جستجو در آیتم‌ها ..."
                class="p-2 rounded border w-[100%] h-[10%] pl-5">
        </div>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="./create_GroupDiscipline_checklist.php"
                class="flex bg-amber-100 text-gray-500 rounded-md w-full p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">درج گروه دیسیپلین ها چک لیست</span>
                </div>
            </a>
        </div>

        <?php
        require_once '../infrastructure/settings/dbcon/db_connection.php';

        // پیام برای نمایش موفقیت یا خطا
        $message = '';

        // حذف آیتم
        if (isset($_POST['delete_item'])) {
            $id = $_POST['discipline_del_id'];

            // Check if the item has hierarchical children in another table
            $check_sql = "SELECT COUNT(*) AS count FROM `checklist_items` WHERE `discipline_id`=?";
            $check_stmt = $conn->prepare($check_sql);
            $check_stmt->bind_param("i", $id);
            $check_stmt->execute();
            $check_stmt->bind_result($child_count);
            $check_stmt->fetch();
            $check_stmt->close();

            if ($child_count > 0) {
                $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>این آیتم دارای زیرمجموعه‌های وابسته است و نمی‌توان آن را حذف کرد.</div>";
            } else {
                // Proceed with the deletion if no children exist
                $sql = "DELETE FROM `disciplines` WHERE `id`=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
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
            $id = $_POST['discipline_id'];
            $new_name = $_POST['new_name'];
            $new_group = $_POST['new_group'];
            $new_code = $_POST['new_code'];

            $sql = "UPDATE disciplines SET name=?, `group`=?, code=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $new_name, $new_group, $new_code, $id);

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

        // // دریافت لیست آیتم‌ها از دیتابیس
        // $sql = "SELECT * FROM disciplines";
        // $result = $conn->query($sql);
        // Define the number of items per page
        $itemsPerPage = 100;

        // Get the current page number from query parameters or default to 1
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($page - 1) * $itemsPerPage;

        // Get the total number of items
        $totalResult = $conn->query("SELECT COUNT(*) AS total FROM disciplines");
        $totalItems = $totalResult->fetch_assoc()['total'];
        $totalPages = ceil($totalItems / $itemsPerPage);

        // Fetch the items for the current page
        $sql = "SELECT * FROM disciplines LIMIT ? OFFSET ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $itemsPerPage, $offset);
        $stmt->execute();
        $result = $stmt->get_result();
        ?>

        <!-- جدول نمایش آیتم‌ها -->
        <table class="min-w-full bg-white text-right">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100">ردیف</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100">نام آیتم دیسیپلین‌</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100">نام گروه</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100">کد شناسه یکتا آیتم</th>
                    <th class="py-2 px-4 border-b-2 border-gray-200 bg-gray-100">عملیات</th>
                </tr>
            </thead>
            <tbody id="disciplineTableBody">
                <?php
                $counter = (int) 0;
                while ($row = $result->fetch_assoc()) {
                    $counter++;
                    echo "<tr>";
                    echo "<td class='py-2 px-4'>
                    <p class='rounded p-1 text-md'>" . $counter . "</p>
              </td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200 w-[50%]'>
                                <form method='post' class='inline-block w-full'>
                                    <input type='hidden' name='discipline_id' value='" . htmlspecialchars($row['id']) . "'>
                                    <input type='text' name='new_name' value='" . htmlspecialchars($row['name']) . "' class='border rounded p-1 w-[100%] text-wrap text-md'>
                            </td>";
                    // echo "<td class='py-2 px-4 border-b border-gray-200'>
                    //             <input type='text' name='new_group' value='" . htmlspecialchars($row['group']) . "' class='border rounded p-1'>
                    //       </td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>
                                <select name='new_group' class='border rounded p-1'>
                                    <option value=''>انتخاب کنید</option>";
                    // Assuming $groups is an array of group options
                    $groups = [
                        'سفت کاری و نازک کاری',
                        'گود و سازه',
                        'نما و کلایمر',
                        'آسانسور و پله برقی و رمپ برقی',
                        'تاسیسات مکانیکال',
                        'تاسیسات الکتریکال'
                    ];
                    foreach ($groups as $group) {
                        $selected = ($group == htmlspecialchars($row['group'])) ? 'selected' : '';
                        echo "<option value='" . htmlspecialchars($group) . "' $selected>" . htmlspecialchars($group) . "</option>";
                    }
                    echo "  </select>
                            </td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>
                                <input type='text' name='new_code' value='" . htmlspecialchars($row['code']) . "' class='border rounded p-1'>
                          </td>";
                    echo "<td class='py-2 px-4 border-b border-gray-200'>
                                <button type='submit' name='edit_item' class='text-blue-400 px-2 py-1 rounded' title='ویرایش آیتم " . htmlspecialchars($row['name']) . "'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                                    </svg>
                                </button>
                                </form>
                                <form method='post' class='inline-block ml-2' onsubmit='return confirmDeletion(this);'>
                                    <input type='hidden' name='discipline_del_id' value='" . htmlspecialchars($row['id']) . "'>
                                    <button type='submit' name='delete_item' class='text-red-400 px-2 py-1 rounded' title='حذف آیتم " . htmlspecialchars($row['name']) . "'>
                                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z' />
                                        </svg>
                                    </button>
                                </form>
                            </td>";
                    echo "</tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <!-- Pagination Controls -->
        <div class="mt-4">
            <nav>
                <ul class="flex flex-nowrap justify-center gap-3 rounded-xl">
                    <?php if ($page > 1): ?>
                        <li>
                            <a href="?page=<?php echo $page - 1; ?>"
                                class=" py-2 bg-gray-200 border border-gray-300 rounded-xl px-3">قبلی</a>
                        </li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li>
                            <a href="?page=<?php echo $i; ?>"
                                class="px-4 py-2 <?php echo $i == $page ? 'bg-blue-500 text-white' : 'bg-gray-200'; ?> border border-gray-300 px-3 rounded-2xl">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                    <?php if ($page < $totalPages): ?>
                        <li>
                            <a href="?page=<?php echo $page + 1; ?>"
                                class=" py-2 bg-gray-200 border border-gray-300 rounded-2xl px-3">بعدی</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>