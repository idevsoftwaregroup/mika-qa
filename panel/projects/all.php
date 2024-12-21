<!DOCTYPE html>
<html lang="en">

<!-- Begin :: Header -->
<?php require_once('../infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl">

    <!-- Begin :: Nav -->
    <?php require_once('../infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->

    <!-- Begin :: Container -->
    <div class="container-fluid pl-5 pr-5 mx-auto mt-10 mb-10 flex flex-wrap gap-5 justify-between">
        <!-- Begin :: Infrastructure (section: Projects) -->
        <div
            class="text-sky-900 border border-2 border-sky-800 border-dashed hover:bg-sky-200 p-5 rounded-xl flex-1 min-w-[400px]">
            <!-- Title Section -->
            <div class="text-right px-0 mb-6">
                <p class="text-lg font-semibold">مدیریت پروژه ها</p>
            </div>
            <!-- Begin: Flex Card -->
            <div class="flex flex-nowrap gap-5 justify-start">
                <!-- Card 1 -->
                <a href="/panel/projects/add_project.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl  hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="green" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <p class="mt-1 text-sm">ایجاد پروژه</p>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="/panel/projects/manage_projects.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="blue" class="w-5 h-5">
                            <path strokeLinecap="round" strokeLinejoin="round"
                                d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                        </svg>
                        <p class="mt-1 text-sm">مدیریت پروژه/ها</p>
                    </div>
                </a>
            </div>
            <!-- End: Flex Card -->
        </div>
        <!-- End :: Infrastructure -->
    </div>
    <!-- End :: Container -->



    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>