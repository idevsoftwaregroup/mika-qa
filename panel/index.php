<!DOCTYPE html>
<html lang="en">
<!-- Begin :: Header -->
<?php require_once('../panel/infrastructure/settings/header/header.php'); ?>
<!-- End :: Header -->

<body dir="rtl">
    <!-- Begin :: Nav -->
    <?php require_once('../panel/infrastructure/settings/navs/nav.php'); ?>
    <!-- End :: Nav -->
    <!-- Begin :: Container -->
    <div class="container-fluid mx-auto mt-10 mb-10 flex flex-wrap gap-5 justify-between pr-5 pl-5">
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
    <?php require_once('../panel/infrastructure/settings/trail/footer.php'); ?>
    <!-- End :: Trail -->

</body>

</html>