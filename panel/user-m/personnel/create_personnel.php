<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl" class="bg-fuchsia-200">

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
        <h1 class="text-2xl font-bold mb-4">افزودن پرسنل پروژه</h1>
        <?php
        // Include your database connection script here
        include_once('../../infrastructure/settings/dbcon/db_connection.php');

        // Fetch projects from database
        $projectQuery = "SELECT * FROM project";
        $projectResult = $conn->query($projectQuery);

        // Fetch users from database
        $userQuery = "SELECT * FROM users";
        $userResult = $conn->query($userQuery);

        // Display error messages if any
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display success messages if any
        if (isset($_GET['success'])) {
            echo "<div class='bg-green-200 text-green-800 p-4 rounded mb-4'>پرسنل پروژه با موفقیت اضافه شد.</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }
        ?>

        <div class="flex flex-col md:flex-row bg-gray-100 text-gray-500 rounded-md mb-1 min-w-full">
            <!-- Button Section -->
            <a href="/panel/user-m/personnel/manage_personnels.php"
                class="flex items-center bg-gray-100 text-gray-500 rounded-r-md p-4 hover:bg-blue-200 space-x-2 mb-0 md:mr-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                </svg>
                <span class="text-nowrap">مدیریت کاربران</span>
            </a>

            <!-- Form Section -->
            <form id="addProjectPersonnelForm" action="create_projectpersonnel_action.php" method="POST"
                class="bg-white flex-1 p-6 rounded-lg shadow-xl">
                <div id="personnelSections" class="flex flex-auto gap-4 mb-5">
                    <!-- Initial Personnel Section -->
                    <div
                        class="personnel-section flex flex-col bg-purple-300 p-4 rounded-2xl w-full md:w-1/2 lg:w-1/3 relative">
                        <button type="button"
                            class="remove-section absolute top-2 left-2 bg-red-500 text-white p-1 rounded-full h-7 w-8">×</button>
                        <div class="mb-4">
                            <label for="fullname" class="block text-gray-700">نام و نام خانوادگی</label>
                            <select name="fullname[]" class="form-select mt-1 block w-full" required>
                                <option value="">انتخاب کنید...</option>
                                <?php
                                if ($userResult->num_rows > 0) {
                                    while ($user = $userResult->fetch_assoc()) {
                                        echo "<option value='{$user['username']}'>{$user['fullname']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="job_title" class="block text-gray-700">عنوان شغلی</label>
                            <input type="text" name="job_title[]" class="form-input mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="shift" class="block text-gray-700">شیفت</label>
                            <select name="shift[]" class="form-select mt-1 block w-full" required>
                                <option value="">انتخاب کنید...</option>
                                <option value="روز">روز</option>
                                <option value="شب">شب</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="role" class="block text-gray-700">نقش</label>
                            <select name="role[]" class="form-select mt-1 block w-full" required>
                                <option value="">انتخاب کنید...</option>
                                <option value="contractor">پیمانکار</option>
                                <option value="owner">کارفرما</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="projectID" class="block text-gray-700">نام پروژه</label>
                            <select name="projectID[]" class="form-select mt-1 block w-full" required>
                                <option value="">انتخاب کنید...</option>
                                <?php
                                if ($projectResult->num_rows > 0) {
                                    while ($project = $projectResult->fetch_assoc()) {
                                        echo "<option value='{$project['id']}'>{$project['project_name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" id="addMore" class="bg-red-300 text-white px-4 py-2 rounded mb-4">افزودن پرسنل
                    جدید</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">ذخیره پرسنل پروژه</button>
            </form>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

    <!-- Begin :: JavaScript Validation -->
    <script>
    document.getElementById('addMore').addEventListener('click', function() {
        const container = document.getElementById('personnelSections');
        const newSection = document.querySelector('.personnel-section').cloneNode(true);
        const sections = container.querySelectorAll('.personnel-section').length;

        // Clear values in the cloned section
        newSection.querySelectorAll('input, select').forEach(input => input.value = '');

        // Append the new section
        container.appendChild(newSection);
    });

    document.getElementById('personnelSections').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-section')) {
            event.target.closest('.personnel-section').remove();
        }
    });

    document.getElementById('addProjectPersonnelForm').addEventListener('submit', function(event) {
        const form = event.target;
        let isValid = true;
        const messages = [];

        // Check each required field
        form.querySelectorAll('[required]').forEach(function(input) {
            if (!input.value.trim()) {
                messages.push(input.parentNode.querySelector('label').innerText + ' is required.');
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