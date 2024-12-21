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
        downloadLink.download = "project_personnel_data.csv";
        downloadLink.href = window.URL.createObjectURL(csvFile);
        downloadLink.style.display = "none";

        document.body.appendChild(downloadLink);
        downloadLink.click();
    }

    // Function to print the table
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
        printWindow.document.write('<h1 dir="rtl" class="text-right">گزارش پرسنل پروژه ها</h1>');
        printWindow.document.write(tableHtml);
        printWindow.document.write('</body></html>');

        printWindow.document.close();
        printWindow.focus();
        printWindow.print();
    }
    </script>

    <div class="container-fluid -pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">گزارش پرسنل پروژه / ها</h1>

        <!-- Begin :: Search Filter -->
        <form method="get" class="mb-4 p-5 border border-2 border-dashed border-stone-700 rounded-2xl" id="search_form"
            onsubmit="return validateSearch();">
            <label for="search_filter" class="block mb-2 text-sm font-medium text-gray-700">جستجو بر اساس نام</label>
            <input type="text" id="search_filter" name="search_filter" class="border rounded-xl p-2 w-full"
                placeholder="نام یا شناسه را وارد کنید">
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
                            d="M15 13.5H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
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
                            d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                    </svg>
                    چاپ
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
            $table = $_POST['table'];

            // Proceed with the deletion
            $sql = "DELETE FROM `$table` WHERE `id`=?";
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

        // Edit item
        if (isset($_POST['edit_item'])) {
            $id = $_POST['item_id'];
            $job_title = $_POST['job_title'];
            $shift = $_POST['shift'];
            $name = $_POST['name'];
            $role = $_POST['role'];
            $projectID = $_POST['projectID'];
            $userID = $_POST['userID'];
            $table = $_POST['table'];

            $sql = "UPDATE `$table` SET `job_title`=?, `shift`=?, `name`=?, `role`=?, `projectID`=?, `userID`=? WHERE `id`=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssiii", $job_title, $shift, $name, $role, $projectID, $userID, $id);
            if ($stmt->execute()) {
                $message = "<div id='message' class='bg-gray-100 text-green-800 p-4 rounded mb-4'>آیتم با موفقیت ویرایش شد.</div>";
            } else {
                $message = "<div id='message' class='bg-red-200 text-red-800 p-4 rounded mb-4'>خطا در ویرایش آیتم: " . $stmt->error . "</div>";
            }
            $stmt->close();
            echo "<script>handleRedirect();</script>";
        }

        // Handling Search Filter
        $filter_query = "";
        $filter_value = "";

        if (isset($_GET['search_filter']) && !empty(trim($_GET['search_filter']))) {
            $filter_value = '%' . $_GET['search_filter'] . '%';
            $filter_query = "WHERE u.fullname LIKE ?";
        }

        // Prepare the SQL query
        $sql = "SELECT pp.*, u.username, u.fullname, pr.project_name 
        FROM projectPersonnel pp
        JOIN users u ON pp.userID = u.id
        JOIN project pr ON pp.projectID = pr.id
        $filter_query
        ORDER BY pp.projectID ASC, pp.id ASC";

        $stmt = $conn->prepare($sql);

        // Bind parameters if there is a filter
        if ($filter_query) {
            $stmt->bind_param("s", $filter_value);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if (isset($message) && !empty($message)) {
            echo $message;
        }
        ?>


        <!-- Begin :: Data Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-800 border-2 border-dashed text-right" dir="RTL">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            ردیف</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            نام</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            نقش کاربری</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            نام پروژه</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            عنوان شغلی</th>
                        <th
                            class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase">
                            شیفت</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $index = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . $index . "</td>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . $row['fullname'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . ($row['role'] === "contractor" ? "پیمانکار" : "کارفرما") . "</td>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . $row['project_name'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . $row['job_title'] . "</td>";
                        echo "<td class='px-6 py-4 whitespace-no-wrap border-b border-gray-200'>" . $row['shift'] . "</td>";
                        echo "</tr>";
                        $index++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- End :: Data Table -->

    </div>
</body>

</html>