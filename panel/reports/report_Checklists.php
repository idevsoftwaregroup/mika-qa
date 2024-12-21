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

        // Function to confirm restoration
        function confirmRestore(form) {
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
            downloadLink.download = "checklist_data.csv";
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
            printWindow.document.write('<h1 dir="rtl" class="text-right">گزارش چک لیست</h1>');
            printWindow.document.write(tableHtml);
            printWindow.document.write('</body></html>');

            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
        }

        // Function to show record details in a modal
        function showModal(id, projectname, contractor_name, contract_number, discipline, permit_id, checklistID, crew,
            axis, floor, block, zone, time_to_action, permit_credit, operation_description, date_created, file_name,
            file_size, file_data, discipline_group, status) {
            document.getElementById('modal_id').innerText = id;
            document.getElementById('modal_projectname').innerText = projectname;
            document.getElementById('modal_contractor_name').innerText = contractor_name;
            document.getElementById('modal_contract_number').innerText = contract_number;
            document.getElementById('modal_discipline').innerText = discipline;
            document.getElementById('modal_permit_id').innerText = permit_id;
            document.getElementById('modal_checklistID').innerText = checklistID;
            document.getElementById('modal_crew').innerText = crew;
            document.getElementById('modal_axis').innerText = axis;
            document.getElementById('modal_floor').innerText = floor;
            document.getElementById('modal_block').innerText = block;
            document.getElementById('modal_zone').innerText = zone;
            document.getElementById('modal_time_to_action').innerText = time_to_action;
            document.getElementById('modal_permit_credit').innerText = permit_credit;
            document.getElementById('modal_operation_description').innerText = operation_description;
            document.getElementById('modal_date_created').innerText = date_created;
            document.getElementById('modal_file_name').innerText = file_name;
            document.getElementById('modal_file_size').innerText = file_size;
            document.getElementById('modal_file_data').innerText = file_data;
            document.getElementById('modal_discipline_group').innerText = discipline_group;
            document.getElementById('modal_status').innerText = status;
            document.getElementById('modal').classList.remove('hidden');
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>

    <div class="container-fluid pl-5 pr-5 mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">گزارش چک لیست</h1>
        <?php
        // Display error messages if any
        if (isset($_GET['errordelete'])) {
            $error = htmlspecialchars($_GET['errordelete']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        if (isset($_GET['errordeletenonexist'])) {
            $error = htmlspecialchars($_GET['errordeletenonexist']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        if (isset($_GET['delete'])) {
            echo "<div class='flex items-center gap-3 bg-gray-100 text-red-800 p-4 rounded mb-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5' />
                    </svg>
                    <span>{$_GET['delete']}</span>
                </div>";
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
        ?>
        <!-- Begin :: Search Filter -->
        <form method="get" class="mb-4 p-5 border border-2 border-dashed border-stone-700 rounded-2xl" id="search_form"
            onsubmit="return validateSearch();">
            <label for="search_filter" class="block mb-2 text-sm font-medium text-gray-700">جستجو بر اساس نام
                پروژه</label>
            <input type="text" id="search_filter" name="search_filter" class="border rounded-xl p-2 w-full"
                placeholder="نام پروژه را وارد کنید">
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
                            d="M3 13.5V6.75A2.25 2.25 0 0 1 5.25 4.5h13.5A2.25 2.25 0 0 1 21 6.75v6.75m-3.75 4.5h-13.5a2.25 2.25 0 0 1-2.25-2.25v-3a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v3a2.25 2.25 0 0 1-2.25 2.25Z" />
                    </svg>
                    چاپ
                </button>
            </div>
        </form>
        <div class="overflow-x-auto">
            <!-- Begin :: Table Display -->
            <table
                class="w-full bg-white border border-gray-300 rounded-2xl border border-2 border-dashed border-gray-800 shadow-sm">
                <thead>
                    <tr class="bg-gray-200 text-right text-xs">
                        <th class="p-2">نام پروژه</th>
                        <th class="p-2">نام پیمانکار</th>
                        <th class="p-2">شماره قرارداد</th>
                        <th class="p-2">رشته</th>
                        <th class="p-2">شناسه پرمیت</th>
                        <th class="p-2">شناسه چک لیست</th>
                        <th class="p-2 underline underline-offset-8 decoration-dashed underline-gray-500">وضعیت</th>
                        <th class="p-2">تیم</th>
                        <th class="p-2">محور</th>
                        <th class="p-2">طبقه</th>
                        <th class="p-2">بلوک</th>
                        <th class="p-2">زون</th>
                        <th class="p-2">زمان اقدام</th>
                        <th class="p-2">اعتبار پرمیت</th>
                        <th class="p-2">توضیحات عملیات</th>
                        <th class="p-2">تاریخ ایجاد</th>
                        <th class="p-2">گروه دیسیپلین</th>
                        <th class="p-2">وضعیت</th>
                        <th class="p-2">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require('../infrastructure/settings/dbcon/db_connection.php');
                    require('../infrastructure/datetime/jdf.php');

                    // Sanitize input to prevent SQL injection
                    $search_filter = isset($_GET['search_filter']) ? trim($_GET['search_filter']) : '';

                    // Prepare and execute the SQL query
                    $stmt = $conn->prepare("
    SELECT * FROM checklist
    WHERE projectname LIKE ? OR permit_id LIKE ? order by date_created desc
");
                    $search_param = "%$search_filter%";
                    $stmt->bind_param('ss', $search_param, $search_param);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    // Fetch and display data
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='p-2'>{$row['projectname']}</td>";
                        echo "<td class='p-2'>{$row['contractor_name']}</td>";
                        echo "<td class='p-2'>{$row['contract_number']}</td>";
                        echo "<td class='p-2'>{$row['discipline']}</td>";
                        echo "<td class='p-2'>{$row['permit_id']}</td>";
                        echo "<td class='p-2'>{$row['checklistID']}</td>";
                        echo '<td class="px-6 py-4 whitespace-nowrap flex flex-initial text-center"><strong class="text-center p-3 ' . ($row['isDeleted'] == true ? 'px-10 bg-rose-400 text-gray-100' : 'px-10 bg-green-400 text-gray-100') . ' rounded-xl w-full text-nowrap">' . htmlspecialchars($row['isDeleted'] == true ? 'حذف شده' : 'فعال') . '</strong>' . ($row['isDeleted'] == true ? '<form action="activate_checklist.php" method="post" class="inline text-center" onsubmit="return confirmRestore(this);"><input type="hidden" name="checklist_id" value="' . htmlspecialchars($row['checklist_id']) . '">
                                            <button type="submit" class="text-baseline text-md text-gray-100 hover:text-gray-100 bg-blue-700 rounded-lg w-[95%] p-3 pl-5 pr-5 ml-1 mr-1 align-baseline">
                                                فعال کردن
                                            </button></form>' : '') . '</td>';
                        echo "<td class='p-2'>{$row['crew']}</td>";
                        echo "<td class='p-2'>{$row['axis']}</td>";
                        echo "<td class='p-2'>{$row['floor']}</td>";
                        echo "<td class='p-2'>{$row['block']}</td>";
                        echo "<td class='p-2'>{$row['zone']}</td>";
                        echo "<td class='p-2'>" . str_replace(['days', 'hours'], ['روز', 'ساعت'], $row['time_to_action']) . "</td>";
                        echo "<td class='p-2'>" . str_replace(['days', 'hours'], ['روز', 'ساعت'], $row['permit_credit']) . "</td>";
                        echo "<td class='p-2'>{$row['operation_description']}</td>";
                        echo "<td class='p-2'>" . (htmlspecialchars($row['date_created']) !== '' ? jdate('h:i:s - Y/m/d', strtotime(htmlspecialchars($row['date_created']))) : "فعلا تاریخی ثبت نشده است") . "</td>";
                        echo "<td class='p-2'>{$row['discipline_group']}</td>";
                        echo "<td class='p-2'>" .
                            ($row['status'] === "Accept" ? "تایید شده" : ($row['status'] === "Reject" ? "تایید نشده" : ($row['status'] === "issued" ? "ایجاد شده" : ($row['status'] === "in progress" ? "در حال بررسی" : ($row['status'] === "N/A" ? "ندارد" : "بدون وضعیت"))))) .
                            "</td>";

                        // Actions (Edit, View, Delete)
                        echo "<td class='p-2 flex flex-nowrap content-center gap-2'>";


                        // View button with `showModal` function
                        echo "<button type='button' onclick='showModal(
                            {$row['checklist_id']}, 
                            \"{$row['projectname']}\", 
                            \"{$row['contractor_name']}\", 
                            \"{$row['contract_number']}\", 
                            \"{$row['discipline']}\", 
                            \"{$row['permit_id']}\", 
                            \"{$row['checklistID']}\", 
                            \"{$row['crew']}\", 
                            \"{$row['axis']}\", 
                            \"{$row['floor']}\", 
                            \"{$row['block']}\", 
                            \"{$row['zone']}\", 
                            \"{$row['time_to_action']}\", 
                            \"{$row['permit_credit']}\", 
                            \"{$row['operation_description']}\", 
                            \"{$row['date_created']}\", 
                            \"{$row['discipline']}\", 
                            \"{$row['status']}\")' class='text-green-500 contents'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z'/>
                        </svg>
                    </button>";


                        // Edit form
                        echo "<form action='edit_checklist.php' method='get' class=''>
                                <input type='hidden' name='checklist_id' value='{$row['checklist_id']}'>
                                <button type='submit' class='text-blue-500'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10'/>
                                    </svg>
                                </button>
                            </form>";

                        // Delete form
                        echo "<form action='remove_checklist.php' method='post' onsubmit='return confirmDeletion(this);'>
                                <input type='hidden' name='checklist_id' value='{$row['checklist_id']}'>
                                <button type='submit' class='text-red-500'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0'/>
                                    </svg>
                                </button>
                            </form>";

                        // deactivate checklist :
                        echo "<form action='delete_checklist.php' method='post' onsubmit='return confirmDeletion(this);'>
                                <input type='hidden' name='checklist_id' value='{$row['checklist_id']}'>
                                <button type='submit' class='text-red-500'>
                                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                        <path stroke-linecap='round' stroke-linejoin='round' d='M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z'/>
                                    </svg>
                                </button>
                            </form>";

                        echo "</td>";
                        echo "</tr>";
                    }


                    $stmt->close();
                    $conn->close();
                    ?>


                </tbody>
            </table>
            <!-- End :: Table -->
        </div>
    </div>

    <!-- Begin :: Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden ">
        <div class="bg-white p-10 rounded-2xl shadow-lg w-full md:w-1 lg:w-1/2">
            <h2 class="text-xl font-bold mb-4">جزئیات چک لیست</h2>
            <div id="modal-content">
                <!-- Modal content will be populated by JavaScript -->
            </div>
            <button onclick="closeModal()" class="mt-4 px-4 py-2 bg-red-500 text-white rounded">بستن</button>
        </div>
    </div>

    <script>
        function showModal(checklist_id, projectname, contractor_name, contract_number, discipline, permit_id, checklistID,
            crew, axis, floor, block, zone, time_to_action, permit_credit, operation_description, date_created, file_name,
            file_size, file_data, discipline_group, status) {
            // Map status to its Persian equivalent
            const statusMap = {
                "in progress": "در حال بررسی",
                "issued": "ایجاد شده",
                "Accept": "تایید شده",
                "Reject": "تایید نشده",
                "N/A": "تایید شده"
            };

            // Default status if not found in the map
            const statusText = statusMap[status] || "دارای هیچ وضعیتی نمی باشد";

            // Create modal content
            var modalContent = `
            <p><strong>نام پروژه:</strong> ${projectname}</p>
            <p><strong>نام پیمانکار:</strong> ${contractor_name}</p>
            <p><strong>شماره قرارداد:</strong> ${contract_number}</p>
            <p><strong>دیسیپلین:</strong> ${discipline}</p>
            <p><strong>شناسه پرمیت:</strong> ${permit_id}</p>
            <p><strong>شناسه چک لیست:</strong> ${checklistID}</p>
            <p><strong>تیم:</strong> ${crew}</p>
            <p><strong>محور:</strong> ${axis}</p>
            <p><strong>طبقه:</strong> ${floor}</p>
            <p><strong>بلوک:</strong> ${block}</p>
            <p><strong>زون:</strong> ${zone}</p>
            <p><strong>زمان اقدام:</strong> ${time_to_action}</p>
            <p><strong>اعتبار پرمیت:</strong> ${permit_credit}</p>
            <p><strong>توضیحات عملیات:</strong> ${operation_description}</p>
            <p><strong>تاریخ ایجاد:</strong> ${date_created}</p>
            <p><strong>وضعیت:</strong> ${statusText}</p>
        `;

            // Update modal content and show the modal
            document.getElementById('modal-content').innerHTML = modalContent;
            document.getElementById('modal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('modal').classList.add('hidden');
        }
    </script>


    <!-- Begin :: Footer -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Footer -->

</body>

</html>