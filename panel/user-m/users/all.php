<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl">

    <!-- Begin :: Nav -->
    <?php require_once('../../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <!-- Begin :: Container -->
    <div class="container-fluid pl-5 pr-5 mx-auto mt-10 mb-10 flex flex-wrap gap-5 justify-between">
        <!-- Begin :: Infrastructure (section: Users) -->
        <div
            class="text-amber-900 border border-2 border-amber-800 border-dashed hover:bg-amber-200 p-5 rounded-xl flex-1 min-w-[400px]">
            <!-- Title Section -->
            <div class="text-right px-0 mb-6">
                <p class="text-lg font-semibold">مدیریت کاربران</p>
            </div>
            <!-- Begin: Flex Card -->
            <div class="flex flex-nowrap gap-5 justify-start">
                <!-- Card 1 -->
                <a href="/panel/user-m/users/create_user.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="green" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="mt-1 text-sm">ایجاد کاربر</p>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="/panel/user-m/users/manage_users.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="teal" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <p class="mt-1 text-sm">مدیریت کاربران</p>
                    </div>
                </a>
            </div>
            <!-- End: Flex Card -->
        </div>
        <!-- End :: Infrastructure -->
        <!-- Begin :: Infrastructure (section: Personnel) -->
        <div
            class="text-fuchsia-900 border border-2 border-fuchsia-800 border-dashed hover:bg-fuchsia-200 p-5 rounded-xl flex-1 min-w-[400px]">
            <!-- Title Section -->
            <div class="text-right px-0 mb-6">
                <p class="text-lg font-semibold text-fuchsia-900">مدیریت پرسنل پروژه/ها</p>
            </div>
            <!-- Begin: Flex Card -->
            <div class="flex flex-nowrap gap-5 justify-start">
                <!-- Card 1 -->
                <a href="/panel/user-m/personnel/create_personnel.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="green" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="mt-1 text-sm">ایجاد پرسنل</p>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="/panel/user-m/personnel/manage_personnels.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="teal" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>
                        <p class="mt-1 text-sm">مدیریت پرسنل پروژه</p>
                    </div>
                </a>
            </div>
            <!-- End: Flex Card -->
        </div>
        <!-- End :: Infrastructure -->
    </div>
    <!-- End :: Container -->



    <!-- Begin :: Trail -->
    <?php require_once('../../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>