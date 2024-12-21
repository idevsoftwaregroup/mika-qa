<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-sky-200">

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
    <div class="container-fluid pl-5 pr-5 mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">اضافه کردن پروژه جدید</h1>
        <a href="/panel/projects/manage_projects.php"
            class="flex items-center bg-gray-100 text-gray-500 rounded-t-lg mb-0 p-4 hover:bg-red-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray"
                class="w-5 h-5">
                <path strokeLinecap="round" strokeLinejoin="round"
                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
            </svg>
            <span>مدیریت پروژه ها</span>
        </a>
        <?php
        // Display error messages if any
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded-sm mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display success messages if any
        if (isset($_GET['message'])) {
            echo "<div class='bg-gray-100 text-green-800 p-4 rounded mb-4'>{$_GET['success']}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }
        ?>
        <div class="bg-white p-5 rounded-lg shadow-md">
            <form id="addProjectForm" method="post" action="insert_project_action.php">
                <!-- Project Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام پروژه</label>
                    <input type="text" name="project_name"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Contract Number -->
                <div class="mb-4">
                    <label class="block text-gray-700">شماره قرارداد</label>
                    <input type="text" name="contract_number"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Contractor Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام پیمانکار</label>
                    <input type="text" name="contractor_name"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Date -->
                <!-- Date -->
                <div class="mb-4">
                    <label class="block text-gray-700">تاریخ</label>
                    <input type="text" name="date" id="datePicker"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Kama Datepicker JS -->
                <script src="https://cdn.jsdelivr.net/npm/kamadatepicker@latest/dist/kamadatepicker.min.js"></script>

                <script>
                // Initialize the date picker
                kamaDatepicker('datePicker', {
                    nextButtonIcon: "fa fa-arrow-circle-right",
                    previousButtonIcon: "fa fa-arrow-circle-left",
                    forceFarsiDigits: true,
                    markToday: true,
                    highlightSelectedDay: true,
                    sync: true
                });
                </script>

                <!-- Discipline Group Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام گروه تخصصی</label>
                    <select name="disciplineGroupName[]"
                        class="form-select mt-1 block w-full border border-gray-300 rounded-md" multiple>
                        <option value="softhard">سفت کاری و نازک کاری</option>
                        <option value="electrical">تاسیسات الکتریکال</option>
                        <option value="mechanical">تاسیسات مکانیکال</option>
                        <option value="structure">گود و سازه</option>
                        <option value="elevator">آسانسور و پله برقی و رمپ برقی</option>
                        <option value="climer">نما و کلایمر</option>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex gap-4 mt-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">اضافه کردن پروژه</button>
                    <a href="manage_projects.php" class="bg-gray-500 text-white p-2 rounded">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>