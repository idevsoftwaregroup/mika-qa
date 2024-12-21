<!-- Disciplines' Page -->
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
        <!-- Begin :: Infrastructure (section: Disciplines) -->
        <div class="text-green-900 border border-2 border-green-800 border-dashed hover:bg-green-200 p-5 container-fluid w-screen rounded-xl ">
            <!-- Title Section -->
            <div class="text-right px-0 mb-6 w-full md:w-auto container">
                <p class="text-lg font-semibold">مدیریت دیسیپلین ها</p>
            </div>
            <!-- Begin: Flex Card -->
            <div class="flex flex-col md:flex-row gap-5 justify-start w-full container-fluid">
                <div class="border border-2 border-dashed border-gray-900 rounded-2xl hover:bg-green-200 p-3 w-full">
                    <div class="mb-0 p-1">
                        <p class="gap-3 py-1 mb-0">دیسیپلین های پرمیت</p>
                    </div>
                    <div class="p-1s mb-0 flex flex-col w-full gap-5">
                        <div class="flex flex-col gap-5 p-3 rounded-2xl border border-2 border-dashed border-gray-900 w-full">
                            <!-- Card 1 -->
                            <a href="/panel/disciplines/create_GroupDiscipline.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">ایجاد گروه دیسیپلین پرمیت</p>
                                </div>
                            </a>
                            <!-- Card 3-1 -->
                            <a href="/panel/disciplines/manage_permitDisciplines.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 0 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">مدیریت گروه دیسیپلین های پرمیت</p>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-wrap gap-5 p-3 rounded-2xl border border-2 border-dashed border-gray-900 w-full">
                            <!-- Card 1-2 -->
                            <a href="/panel/disciplines/create_discipline.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">ایجاد آیتم های دیسیپلین پرمیت</p>
                                </div>
                            </a>
                            <!-- Card 3 -->
                            <a href="/panel/disciplines/manage_permitItems.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">مدیریت دیسیپلین های پرمیت</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border border-2 border-dashed border-gray-900 rounded-2xl hover:bg-green-200 p-3 container-fluid w-full">
                    <div class="mb-0 p-1">
                        <p>دیسیپلین های چک لیست</p>
                    </div>
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-5 p-3 rounded-2xl border border-2 border-dashed border-gray-900 w-full">
                            <!-- Card 2 -->
                            <a href="/panel/disciplines/create_GroupDiscipline_checklist.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">ایجاد گروه دیسیپلین چک لیست</p>
                                </div>
                            </a>
                            <!-- Card 4-1 -->
                            <a href="/panel/disciplines/manage_checklistDisciplines.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 0 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">مدیریت دیسیپلین های چک لیست</p>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-col gap-5 p-3 rounded-2xl border border-2 border-dashed border-gray-900 w-full">
                            <!-- Card 2-2 -->
                            <a href="/panel/disciplines/create_discipline_checklist.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">ایجاد آیتم های دیسیپلین چک لیست</p>
                                </div>
                            </a>
                            <!-- Card 4 -->
                            <a href="/panel/disciplines/manage_checklistItems.php" class="flex flex-col items-center p-3 bg-gray-100 rounded-xl hover:bg-red-400 transition duration-300 w-full">
                                <div class="flex flex-col items-center mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="indigo" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75"></path>
                                    </svg>
                                    <p class="mt-1 text-sm">مدیریت آیتم های چک لیست</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End :: Infrastructure -->
    </div>
    <!-- End :: Container -->



    <!-- Begin :: Trail -->
    <?php require_once('../infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>