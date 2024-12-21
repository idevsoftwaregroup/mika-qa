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
    <div class="container-fluid pl-5 pr-5 mx-auto p-4">

        <div class="flex-none">
            <h1 class="text-2xl font-bold mb-4">مدیریت پرسنل پروژه‌ها</h1>
        </div>
        <div class="overflow-x-auto">
            <?php
            // Display error messages if any
            if (isset($_GET['error'])) {
                $error = htmlspecialchars($_GET['error']);
                echo "<div class='bg-red-200 text-red-800 p-4 rounded mb-4'>{$error}</div>";
                echo "<script>handleRedirect();</script>"; // Call the redirect function
            }

            // Display success messages if any
            if (isset($_GET['message'])) {
                $message = htmlspecialchars($_GET['message']); // Sanitize the message
                echo "<div class='flex items-center gap-3 bg-green-200 text-green-800 p-4 rounded mb-4'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'>
                            <path stroke-linecap='round' stroke-linejoin='round' d='M4.5 12.75l6 6 9-13.5' />
                        </svg>
                        <span>{$message}</span>
                    </div>";
                echo "<script>handleRedirect();</script>"; // Call the redirect function
            }
            ?>

            <a href="/panel/user-m/personnel/create_personnel.php"
                class="container flex bg-gray-100 text-gray-500 rounded-t-lg mb-0 min-w-full gap-3 p-4 hover:bg-blue-200">
                <div class="">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-nowrap">ایجاد کاربر</span>
                    </div>
                </div>
            </a>

            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="text-right">
                    <tr>
                        <th class="py-2 px-4 border-b">نام کاربری</th>
                        <th class="py-2 px-4 border-b">نام پروژه</th>
                        <th class="py-2 px-4 border-b">پیمانکار پروژه</th>
                        <th class="py-2 px-4 border-b">نام کامل</th>
                        <th class="py-2 px-4 border-b">عنوان شغلی</th>
                        <th class="py-2 px-4 border-b">شیفت</th>
                        <th class="py-2 px-4 border-b">نقش</th>
                        <th class="py-2 px-4 border-b">عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    require_once('../../infrastructure/settings/dbcon/db_connection.php');

                    // Updated query to join with the project table to get project_name
                    $query = "SELECT pp.*, u.username, pr.project_name , pr.contractor_name
                              FROM projectPersonnel pp 
                              JOIN users u ON pp.userID = u.id
                              JOIN project pr ON pp.projectID = pr.id";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['username']); ?></td>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['project_name']); ?></td>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['contractor_name']); ?></td>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['name']); ?></td>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['job_title']); ?></td>
                            <td class="py-2 px-4 border-b"><?php echo htmlspecialchars($row['shift']); ?></td>
                            <td class="py-2 px-4 border-b">
                                <?php echo htmlspecialchars($row['role'] == "owner" ? "کارفرما" : "پیمانکار"); ?></td>
                            <td class="py-2 px-4 border-b">
                                <div class="flex items-center gap-5">
                                    <a href="display_personnel.php?id=<?php echo $row['id']; ?>" class="text-blue-500"
                                        title="نمایش و ویرایش اطلاعات <?php echo $row['name']; ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="25px"
                                            height="25px" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                    </a>
                                    <a href="delete_personnel.php?id=<?php echo $row['id']; ?>" class="text-red-500"
                                        title="حذف کاربر <?php echo $row['name']; ?>"
                                        onclick="return confirmDelete('<?php echo htmlspecialchars($row['name']); ?>');">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="25px"
                                            height="25px" strokeWidth="1.5" stroke="currentColor">
                                            <path strokeLinecap="round" strokeLinejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    <!-- End :: Infrastructure -->

    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

    <script>
        function confirmDelete(name) {
            return confirm("آیا از حذف پرسنل " + name + " اطمینان دارید؟");
        }
    </script>

</body>

</html>