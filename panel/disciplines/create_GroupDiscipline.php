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
        <h1 class="text-2xl font-bold mb-4">درج گروه دیسیپلین پرمیت جدید</h1>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="./create_discipline.php"
                class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">درج آیتم های دیسیپلین پرمیت</span>
                </div>
            </a>
            <a href="./manage_permitDisciplines.php"
                class="flex bg-lime-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-nowrap">مدیریت گروه های دیسیپلین پرمیت</span>
                </div>
            </a>
        </div>
        <?php
        require_once '../infrastructure/settings/dbcon/db_connection.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create_discipline'])) {
            $name = $_POST['name'];
            $group_name = $_POST['group_name'];
            $code = uniqid(); // تولید کد یکتا رندوم

            $sql = "INSERT INTO permitDisciplines (name, group_name, code) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die("خطا در آماده‌سازی استعلام: " . $conn->error);
            }

            $stmt->bind_param("sss", $name, $group_name, $code);

            if ($stmt->execute()) {
                $message = "<div class='bg-gray-100 text-green-800 p-4 rounded mb-4' id='success-message'>گروه دیسیپلین '$name' با موفقیت ایجاد شد. کد: $code</div>";
                echo
                "<script>handleRedirect();</script>";
            } else {
                $message = "<div class='bg-gray-100 text-red-800 p-4 rounded mb-4' id='error-message'>خطا: " . $stmt->error . "</div>";
                echo "<script>handleRedirect();</script>";
            }

            $stmt->close();
            $conn->close();
        }
        ?>

        <!-- Begin :: Form -->
        <div class="flex flex-col md:flex-row bg-gray-100 text-gray-500 rounded-md mb-1 min-w-full">
            <form method="post" class="bg-white p-6 rounded-lg shadow-md w-full">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        نام گروه دیسیپلین
                    </label>
                    <input type="text" name="name" id="name" placeholder="نام گروه دیسیپلین" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="group_name">
                        انتخاب گروه
                    </label>
                    <select name="group_name" id="group_name" required
                        class="shadow appearance-none border rounded w-full py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option value="سفت کاری و نازک کاری">سفت کاری و نازک کاری</option>
                        <option value="تاسیسات الکتریکال">تاسیسات الکتریکال</option>
                        <option value="تاسیسات مکانیکال">تاسیسات مکانیکال</option>
                        <option value="گود و سازه">گود و سازه</option>
                        <option value="آسانسور و پله برقی و رمپ برقی">آسانسور و پله برقی و رمپ برقی</option>
                        <option value="نما و کلایمر">نما و کلایمر</option>
                    </select>
                </div>

                <div class="flex items-center justify-between mb-4 mt-4">
                    <button type="submit" name="create_discipline"
                        class="flex bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        ذخیره گروه دیسیپلین
                    </button>
                </div>
            </form>
        </div>
        <!-- End :: Form -->

        <!-- Display message -->
        <?php if (isset($message)) echo $message; ?>

    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

    <!-- Begin :: JavaScript -->
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        // Function to hide messages after 5 seconds
        function hideMessageAfterDelay(messageId) {
            const messageElement = document.getElementById(messageId);
            if (messageElement) {
                setTimeout(() => {
                    messageElement.style.display = 'none';
                }, 5000); // 5000 milliseconds = 5 seconds
            }
        }

        hideMessageAfterDelay('success-message');
        hideMessageAfterDelay('error-message');
    });
    </script>
    <!-- End :: JavaScript -->

</body>

</html>