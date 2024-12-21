<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-stone-200">

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

        // Function to confirm deletion
        function confirmRestore(form) {
            var confirmed = confirm("آیا مطمئن هستید که می‌خواهید این آیتم را بازگردانی کنید؟");
            return confirmed;
        }

        // Function to reset the search form
        function resetSearch() {
            window.location.href = window.location.pathname; // Clear the search by reloading without query params
        }

        // Function to validate search input
        function validateSearch() {
            var searchInput = document.getElementById('search_filter').value.trim();
            if (searchInput === '') {
                alert('لطفا یک عبارت جستجو وارد کنید.');
                return false;
            }
            return true;
        }

        // Function to export table data to CSV
        function exportToCSV() {
            var csv = [];
            var rows = document.querySelectorAll("table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [];
                var cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++) {
                    row.push(cols[j].innerText);
                }

                csv.push(row.join(","));
            }

            var csvFile;
            var downloadLink;

            csvFile = new Blob([csv.join("\n")], {
                type: "text/csv"
            });

            downloadLink = document.createElement("a");
            downloadLink.download = "permits_data.csv";
            downloadLink.href = window.URL.createObjectURL(csvFile);
            downloadLink.style.display = "none";

            document.body.appendChild(downloadLink);
            downloadLink.click();
        }

        // Function to print the table
        function printTable() {
            var printWindow = window.open('', '', 'height=600,width=800');
            var tableHtml = document.querySelector('table').outerHTML;

            printWindow.document.write('<html><head><title>چاپ گزارش</title>');
            printWindow.document.write('<style>');
            printWindow.document.write(
                'body, table { font-family: "mika", Arial, sans-serif; direction: rtl; }'); // Set custom font family
            printWindow.document.write('table { width: 100%; border-collapse: collapse; text-align: right; }');
            printWindow.document.write('th, td { border: 1px solid black; padding: 8px; text-align: right; }');
            printWindow.document.write('th { background-color: #f2f2f2; }');
            printWindow.document.write('</style></head><body>');
            printWindow.document.write('<h1 dir="rtl" class="text-right">گزارش پرمیت ها</h1>');
            printWindow.document.write(tableHtml);
            printWindow.document.write('</body></html>');

            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
        }
    </script>

    <div class="container-fluid pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">گزارش پرمیت‌ها</h1>
        <?php
        // Display error 1 to delete messages if any
        if (isset($_GET['errordelete'])) {
            $error = htmlspecialchars($_GET['errordelete']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display error 2 delete messages if any
        if (isset($_GET['errordeletenonexist'])) {
            $error = htmlspecialchars($_GET['errordeletenonexist']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Dispay activate status of the current Permit :
        if (isset($_GET['activate'])) {
            $activate = htmlspecialchars($_GET['activate']);
            echo "<div class='bg-green-200 text-green-800 p-4 rounded mb-4'>{$activate}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display error 2 delete messages if any
        if (isset($_GET['erroractivatenonexist'])) {
            $error = htmlspecialchars($_GET['erroractivatenonexist']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display success delete messages if any
        if (isset($_GET['delete'])) {
            echo "<div class='flex items-center gap-3 bg-gray-100 text-red-800 p-4 rounded mb-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5' />
                    </svg>
                    <span>{$_GET['delete']}</span>
                </div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }
        ?>
        <!-- Begin :: Search Filter -->
        <form method="get" class="mb-4 p-5 border border-2 border-dashed border-stone-700 rounded-2xl" id="search_form"
            onsubmit="return validateSearch();">
            <label for="search_filter" class="block mb-2 text-sm font-medium text-gray-700">جستجو بر اساس نام
                پروژه</label>
            <input type="text" id="search_filter" name="search_filter" class="border rounded-xl p-2 w-full"
                placeholder="نام پروژه  را وارد کنید">
            <div class="mt-2 flex space-x-2 gap-5">
                <button type="submit" class="flex px-10 py-2 bg-indigo-500 text-white rounded-2xl gap-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    جستجو
                </button>
                <button type="button" onclick="resetSearch()"
                    class="px-10 py-2 bg-red-500 text-gray-100 rounded-2xl flex gap-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    ریست فیلتر جستجو
                </button>
                <button type="button" onclick="exportToCSV()"
                    class="px-10 py-2 bg-green-500 text-white rounded-2xl flex gap-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    دانلود CSV
                </button>
                <button type="button" onclick="printTable()"
                    class="px-10 py-2 bg-yellow-500 text-white rounded-2xl flex gap-2 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                    </svg>
                    چاپ جدول
                </button>
            </div>
        </form>
        <!-- End :: Search Filter -->

        <!-- Begin :: Permits Table -->
        <div class="overflow-x-auto">
            <table
                class="min-w-full divide-y divide-gray-200 text-right rounded-2xl border border-2 border-dashed border-gray-800">
                <thead class="text-right">
                    <tr>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">نام
                            پروژه</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">نام
                            پیمانکار</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            شماره قرارداد</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            شماره پرمیت</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider underline decoration-gray-500 decoration-dashed underline-offset-8">
                            وضعیت</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            دیسیپلین</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">تیم
                            پیمانکار</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">محور
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">طبقه
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">بلوک
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">زون
                        </th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">پیش
                            بینی مدت زمان اجرا</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">مدت
                            زمان اعتبار پرمیت</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            حفاظت</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            وضعیت فرآیند</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            تاریخ ایجاد</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            تاریخ تکمیل</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            عملیات</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    // Include the database connection file
                    require_once('../infrastructure/settings/dbcon/db_connection.php');
                    // Date time Convertor :
                    require_once('../infrastructure/datetime/jdf.php');

                    function formatTimeToAction($seconds)
                    {
                        $days = floor($seconds / 86400); // 86400 seconds in a day
                        $hours = floor(($seconds % 86400) / 3600); // 3600 seconds in an hour

                        $result = '';
                        if ($days > 0) {
                            $result .= $days . ' روز ';
                        }
                        if ($hours > 0) {
                            $result .= $hours . ' ساعت';
                        }

                        return $result;
                    }

                    try {
                        // Prepare the query with search filter
                        $search_filter = isset($_GET['search_filter']) ? $_GET['search_filter'] : '';
                        $search_filter = $conn->real_escape_string($search_filter); // Escape the search filter to prevent SQL injection
                        $sql = "SELECT * FROM permits WHERE project_name LIKE '%$search_filter%' OR permit_id LIKE '%$search_filter%' order by datetimeCreated desc";
                        $result = $conn->query($sql);

                        // Fetch and display data
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['project_name']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['contractor_name']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['contract_number']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['permit_id']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap flex flex-initial text-center"><strong class="text-center p-3 ' . ($row['isDeleted'] == true ? 'px-10 bg-rose-400 text-gray-100' : 'px-10 bg-green-400 text-gray-100') . ' rounded-xl w-full text-nowrap">' . htmlspecialchars($row['isDeleted'] == true ? 'حذف شده' : 'فعال') . '</strong>' . ($row['isDeleted'] == true ? '<form action="activate_permit.php" method="post" class="inline text-center" onsubmit="return confirmRestore(this);"><input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                                            <button type="submit" class="text-baseline text-md text-gray-100 hover:text-gray-100 bg-blue-700 rounded-lg w-[95%] p-3 pl-5 pr-5 ml-1 mr-1 align-baseline">
                                                فعال کردن
                                            </button></form>' : '') . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['discipline']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['crew']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['axis']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['floor']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['block']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . htmlspecialchars($row['zone']) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . str_replace(['days', 'hours'], ['روز', 'ساعت'], htmlspecialchars($row['time_to_action'])) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . str_replace(['days', 'hours'], ['روز', 'ساعت'], htmlspecialchars($row['permit_credit'])) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . (htmlspecialchars($row['protection']) === "Yes" ? "دارد" : "ندارد") . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . (htmlspecialchars($row['status']) === "in progress" ? "در حال بررسی" : (htmlspecialchars($row['status']) === "Accept" ? "تایید شده" : (htmlspecialchars($row['status']) == "Reject" ? "تایید نشده" : (htmlspecialchars($row['status']) === "N/A" ? "تایید شده" : (htmlspecialchars($row['status']) === "issued" ? "ایجاد شده" : "هیچ وضعیتی ندارد"))))) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . jdate('h:i:s - Y/m/d', strtotime(htmlspecialchars($row['dateTimeCreated']))) . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap">' . (htmlspecialchars($row['dateTimeDone']) !== '' ? jdate('h:i:s - Y/m/d', strtotime(htmlspecialchars($row['dateTimeDone']))) : "فعلا تاریخی ثبت نشده است") . '</td>';
                                echo '<td class="px-6 py-4 whitespace-nowrap flex gap-2">
                                        <a href="view_permit.php?id=' . htmlspecialchars($row['id']) . '" class="text-blue-600 hover:text-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </a>
                                        <a href="edit_permit.php?id=' . htmlspecialchars($row['id']) . '" class="text-green-600 hover:text-green-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                            </svg>
                                        </a>
                                        <form action="remove_permit.php" method="post" class="inline" onsubmit="return confirmDeletion(this);">
                                            <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                        <form action="delete_permit.php" method="post" class="inline" onsubmit="return confirmDeletion(this);">
                                            <input type="hidden" name="id" value="' . htmlspecialchars($row['id']) . '">
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="15" class="text-center py-4">هیچ رکوردی یافت نشد</td></tr>';
                        }
                    } catch (Exception $e) {
                        echo 'Database error: ' . $e->getMessage();
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End :: Permits Table -->
    </div>
</body>

</html>