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
    <div class="container-fluid pl-5 pr-5 mx-auto p-4">
        <?php
        require_once('../infrastructure/settings/dbcon/db_connection.php');

        // Retrieve project ID from the query string
        $id = intval($_GET['id']);

        // Fetch project details
        $query = "SELECT * FROM `project` WHERE `id` = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $project = $result->fetch_assoc();

        if (!$project) {
            echo "<p class='text-red-500'>پروژه مورد نظر یافت نشد.</p>";
            exit;
        }
        ?>

        <h1 class="text-2xl font-bold mb-4">ویرایش پروژه</h1>
        <div class="flex flex-col sm:flex-row gap-3 mb-3">
            <a href="/panel/projects/add_project.php"
                class="flex bg-amber-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="text-nowrap">ایجاد پروژه</span>
                </div>
            </a>
            <a href="/panel/projects/manage_projects.php"
                class="flex bg-lime-100 text-gray-500 rounded-md w-full sm:w-1/2 p-3 hover:bg-blue-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                    </svg>
                    <span class="text-nowrap">مدیریت پروژه ها</span>
                </div>
            </a>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-md">
            <form id="editProjectForm" method="post" action="update_project_action.php">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($project['id']); ?>">

                <!-- Project Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام پروژه</label>
                    <input type="text" name="project_name"
                        value="<?php echo htmlspecialchars($project['project_name']); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                </div>

                <!-- Contract Number -->
                <div class="mb-4">
                    <label class="block text-gray-700">شماره قرارداد</label>
                    <input type="text" name="contract_number"
                        value="<?php echo htmlspecialchars($project['contract_number']); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Contractor Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">نام پیمانکار</label>
                    <input type="text" name="contractor_name"
                        value="<?php echo htmlspecialchars($project['contractor_name']); ?>"
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                </div>

                <!-- Date -->
                <div class="mb-4">
                    <label class="block text-gray-700">تاریخ</label>
                    <input id="datePicker" type="text" name="date"
                        value="<?php echo htmlspecialchars($project['date']); ?>"
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
                    <select name="disciplineGroupName[]" multiple
                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <?php
                        // دریافت دیسیپلین‌ها:
                        $dataArray = json_decode($project['disciplineGroupName']);

                        // آرایه برای نگاشت کد به نام‌های دیسیپلین
                        $disciplineMap = [
                            "softhard" => "سفت کاری و نازک کاری",
                            "elevator" => "آسانسور و پله برقی و رمپ برقی",
                            "climer" => "نما و کلایمر",
                            "electrical" => "تاسیسات الکتریکال",
                            "mechanical" => "تاسیسات مکانیکال",
                            "structure" => "گود و سازه",
                            "none" => "بدون دیسیپلین"
                        ];

                        // حلقه برای هر آیتم در آرایه دیسیپلین و ایجاد گزینه‌های جعبه انتخاب
                        foreach ($disciplineMap as $key => $label) {
                            // بررسی اینکه آیا دیسیپلین فعلی در آرایه داده‌ها وجود دارد
                            $selected = in_array($key, $dataArray) ? 'selected' : '';
                            echo "<option value='{$key}' {$selected}>{$label}</option>";
                        }
                        ?>
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex gap-4 mt-4">
                    <button type="submit" class="bg-blue-500 text-white p-2 rounded">ذخیره تغییرات</button>
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