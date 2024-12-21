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
        <div class="flex-none mb-4">
            <h1 class="text-2xl font-bold">جزئیات پروژه</h1>
        </div>
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
        <?php
        // Display error messages if any
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
        }

        // Display success messages if any
        if (isset($_GET['message'])) {
            $message = htmlspecialchars($_GET['message']);
            echo "<div class='flex items-center gap-3 bg-green-200 text-green-800 p-4 rounded mb-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5' />
                    </svg>
                    <span>{$message}</span>
                </div>";
        }

        // Get JDF ( Date Time Converter in PHP )
        require_once('../infrastructure/datetime/jdf.php');

        // Include database connection
        require_once('../infrastructure/settings/dbcon/db_connection.php');

        // Get the project ID from the query string
        $project_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        if ($project_id > 0) {
            // Fetch the project details from the database
            $query = "SELECT * FROM `project` WHERE `id` = {$project_id}";
            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) {
                $project = $result->fetch_assoc();

                // Convert the date to Persian after fetching project details
                $persianDate = jdate('Y/m/d', strtotime($project['date']));


        ?>
                <div class="bg-white p-5 rounded-lg shadow-md text-right">
                    <table class="w-full border-1 rounded-xl">
                        <tr>
                            <th class="py-2 px-4">نام پروژه</th>
                            <td class="py-2 px-4"><?php echo htmlspecialchars($project['project_name']); ?></td>
                        </tr>
                        <tr>
                            <th class="py-2 px-4">شماره قرارداد</th>
                            <td class="py-2 px-4"><?php echo htmlspecialchars($project['contract_number']); ?></td>
                        </tr>
                        <tr>
                            <th class="py-2 px-4">نام پیمانکار</th>
                            <td class="py-2 px-4"><?php echo htmlspecialchars($project['contractor_name']); ?></td>
                        </tr>
                        <tr>
                            <th class="py-2 px-4">تاریخ عقد قرارداد</th>
                            <td class="py-2 px-4"><?php echo htmlspecialchars($persianDate); ?></td>
                        </tr>
                        <tr>
                            <th class="py-2 px-4">دیسیپلین های قرارداد</th>
                            <td class="py-2 px-4">
                                <?php
                                // دریافت دیسیپلین‌ها:
                                $dataArray = json_decode($project['disciplineGroupName']);

                                // ایجاد متغیر برای ذخیره‌سازی رشته نهایی
                                $output = '';

                                // حلقه برای هر آیتم در آرایه
                                foreach ($dataArray as $key => $value) {
                                    $output .= ($value == "softhard" ? "سفت کاری و نازک کاری" : ($value == "elevator" ? "آسانسور و پله برقی و رمپ برقی" : ($value == "climer" ? "نما و کلایمر" : ($value == "electrical" ? "تاسیسات الکتریکال" : ($value == "mechanical" ? "تاسیسات مکانیکال" : ($value == "structure" ? "گود و سازه" : "بدون دیسیپلین")))))) . ' - ';
                                }

                                // حذف خط تیره اضافی در انتها
                                $output = rtrim($output, ' - ');

                                // نمایش خروجی
                                echo $output;
                                ?>
                            </td>
                        </tr>
                    </table>

                    <div class="mt-4 flex gap-5 text-center">
                        <a href='edit_project.php?id=<?php echo $project['id']; ?>'
                            class='flex text-gray-100 bg-blue-300 w-auto rounded-2xl p-2 px-7 text-center'
                            title='ویرایش اطلاعات پروژه <?php echo $project['project_name']; ?>'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                stroke='currentColor' class='w-6 h-6'>
                                <path stroke-linecap='round' stroke-linejoin='round'
                                    d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                            </svg>
                            ویرایش پروژه
                        </a>
                        <a href="delete_project_action.php?id=<?php echo $project['id']; ?>"
                            class="flex text-gray-100 w-auto rounded-2xl p-2 px-7 px-8 text-center bg-red-300"
                            onclick="return confirm('آیا مطمئن هستید که می‌خواهید این پروژه را حذف کنید؟');">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                            حذف پروژه
                        </a>
                    </div>

                </div>
        <?php
            } else {
                echo "<p class='text-red-500'>پروژه‌ای با این شناسه پیدا نشد.</p>";
            }

            $conn->close();
        } else {
            echo "<p class='text-red-500'>شناسه پروژه معتبر نمی‌باشد.</p>";
        }
        ?>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Footer -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Footer -->

</body>

</html>