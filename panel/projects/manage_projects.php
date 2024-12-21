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
        <div class="flex-none mb-4">
            <h1 class="text-2xl font-bold">مدیریت پروژه‌ها</h1>
        </div>

        <?php
        // Display error messages if any
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
            echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }

        // Display success messages if any
        if (isset($_GET['message'])) {
            echo "<div class='flex items-center gap-3 bg-green-200 text-green-800 p-4 rounded mb-4'>
                    <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                        <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5' />
                    </svg>
                    <span>{$_GET['message']}</span>
                </div>";
            echo "<script>handleRedirect();</script>"; // Call the redirect function
        }
        ?>

        <a href="/panel/projects/add_project.php"
            class="flex items-center bg-gray-100 text-gray-500 rounded-t-lg mb-0 p-4 hover:bg-red-200 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <span>ایجاد پروژه</span>
        </a>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class=" text-right">
                    <tr>
                        <th class="py-2 px-4 border-b">نام پروژه</th>
                        <th class="py-2 px-4 border-b">شماره قرارداد</th>
                        <th class="py-2 px-4 border-b">نام پیمانکار</th>
                        <th class="py-2 px-4 border-b">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('../infrastructure/settings/dbcon/db_connection.php');

                    // Fetch all projects
                    $query = "SELECT * FROM `project`";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($project = $result->fetch_assoc()) {
                            echo "<tr class='border-b'>";
                            echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($project['project_name']) . "</td>";
                            echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($project['contract_number']) . "</td>";
                            echo "<td class='py-2 px-4 border-b'>" . htmlspecialchars($project['contractor_name']) . "</td>";
                            echo "<td class='py-2 px-4 border-b'>
                                    <div class='flex items-center gap-4'>
                                    <a href='edit_project.php?id={$project['id']}' class='text-blue-500' title='ویرایش اطلاعات پروژه {$project['project_name']}'>
                                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10' />
                                        </svg>
                                    </a>
                                    <a href='delete_project_action.php?id={$project['id']}' class='text-red-500' title='حذف اطلاعات پروژه {$project['project_name']}' onclick='return confirm(\"آیا مطمئن هستید؟\");'>
                                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0' />
                                        </svg>
                                    </a>
                                    <a href='display_project.php?id={$project['id']}' class='text-black-500' title='نمایش اطلاعات پروژه {$project['project_name']}' >
                                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                                            <path stroke-linecap='round' stroke-linejoin='round' d='M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z' />
                                        </svg>
                                    </a>
                                    </div>
                                </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4' class='py-2 px-4 border-b text-red-500'>هیچ پروژه‌ای پیدا نشد.</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>