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
        <!-- Begin :: Infrastructure (section: Reports) -->
        <div
            class="text-stone-900 border border-2 border-stone-800 border-dashed hover:bg-stone-200 p-5 rounded-xl flex-1 min-w-[250px] md:min-w-[600px]">
            <!-- Title Section -->
            <div class="text-right px-0 mb-6">
                <p class="text-lg font-semibold">مدیریت گزارش ها</p>
            </div>
            <!-- Begin: Flex Card -->
            <div class="flex flex-nowrap gap-5 justify-start">
                <!-- Card 1 -->
                <a href="/panel/reports/report_PersonnelProject.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="orange" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                        </svg>
                        <p class="mt-1 text-sm w-[100%] w-[100%] text-nowrap">گزارش پرسنل پروژه/ها</p>
                    </div>
                </a>
                <!-- Card 2 -->
                <a href="/panel/reports/report_Permits.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="indigo" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                        </svg>
                        <p class="mt-1 text-sm">گزارش پرمیت ها</p>
                    </div>
                </a>
                <!-- Card 3 -->
                <a href="/panel/reports/report_Checklists.php"
                    class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-[100%]">
                    <div class="flex flex-col items-center mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="blue" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                        </svg>
                        <p class="mt-1 text-sm">گزارش چک لیست ها</p>
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