<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-amber-200">

    <!-- Begin :: Nav -->
    <?php require_once('../../infrastructure/settings/navs/nav.php'); ?>
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
        <h1 class="text-2xl font-bold mb-4">ایجاد کاربر</h1>
        <?php
        // Display error messages if any
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display success messages if any
        if (isset($_GET['success'])) {
            echo "<div class='bg-green-200 text-green-800 p-4 rounded mb-4'>کاربر {$_GET['success']} با موفقیت ایجاد شد.</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }
        ?>
        <div class="flex flex-col md:flex-row bg-gray-100 text-gray-500 rounded-md mb-1 min-w-full">
            <!-- Button Section -->
            <a href="/panel/user-m/users/manage_users.php"
                class="flex items-center bg-gray-100 text-gray-500 rounded-r-md p-4 hover:bg-blue-200 space-x-2 mb-0 md:mr-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
                <span class="text-nowrap">مدیریت کاربران</span>
            </a>

            <!-- Form Section -->
            <form id="createUserForm" action="create_user_action.php" method="POST"
                class="bg-white flex-1 p-6 rounded-lg shadow-xl">
                <div class="mb-4">
                    <label for="username" class="block text-gray-700">نام کاربری</label>
                    <input type="text" id="username" name="username" class="form-input mt-1 block w-full"
                        data-error="نام کاربری را وارد کنید."
                        oninvalid="this.setCustomValidity('لطفا نام کاربری را وارد نمایید')"
                        oninput="setCustomValidity('')" required>
                </div>
                <div class="mb-4">
                    <label for="fullname" class="block text-gray-700">نام و نام خانوادگی</label>
                    <input type="text" id="fullname" name="fullname" class="form-input mt-1 block w-full"
                        data-error="نام / نام خانوادگی را وارد کنید."
                        oninvalid="this.setCustomValidity('لطفا نام و نام خانوادگی را وارد نمایید')"
                        oninput="setCustomValidity('')" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">رمز ورود کاربر</label>
                    <input type="password" id="password" name="password" class="form-input mt-1 block w-full"
                        data-error="رمز ورود کاربر را وارد کنید."
                        oninvalid="this.setCustomValidity('لطفا رمز ورود کاربر را وارد نمایید')"
                        oninput="setCustomValidity('')" required>
                </div>
                <div class="mb-4">
                    <label for="job_position" class="block text-gray-700">موقعیت شغلی</label>
                    <select id="job_position" name="job_position" class="form-select mt-1 block w-full" required>
                        <option value="">انتخاب کنید...</option>
                        <option value="3">مدیر / سرپرست کارگاه</option>
                        <option value="2">کارشناس / سرپرست</option>
                        <option value="1">ادمین سیستم</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-gray-700">شماره تماس</label>
                    <input type="text" id="phone_number" name="phone_number" class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="job_title" class="block text-gray-700">عنوان شغلی</label>
                    <input type="text" id="job_title" name="job_title" class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="company" class="block text-gray-700">شرکت ( محل خدمت )</label>
                    <input type="text" id="company" name="company" class="form-input mt-1 block w-full">
                </div>
                <div class="mb-4">
                    <label for="desc" class="block text-gray-700">توضیحات</label>
                    <textarea id="desc" name="desc" class="form-input mt-1 block w-full"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">کاربر جدید را ایجاد کن !</button>
            </form>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

    <!-- Begin :: JavaScript Validation -->
    <script>
    document.getElementById('createUserForm').addEventListener('submit', function(event) {
        const form = event.target;
        let isValid = true;
        const messages = [];

        // Check each required field
        form.querySelectorAll('[data-error]').forEach(function(input) {
            if (input.hasAttribute('required') && !input.value.trim()) {
                messages.push(input.getAttribute('data-error'));
                isValid = false;
            }
        });

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
            alert(messages.join('\n')); // Display the error messages
        }
    });
    </script>
    <!-- End :: JavaScript Validation -->

</body>

</html>