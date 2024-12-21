<!-- Begin :: Navbar -->
<nav class="container-2xl bg-gray-900 border-gray-200 dark:bg-gray-900 rtl:ml-0 bg-black">
    <div class="container-fluid w-[100%] flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/panel" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../../../panel/assets/images/logo/logo.png" class="h-5" alt="MIKA Corporation Co." />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">
                &nbsp; <p class="text-sm text-gray-100">میکا</p>
            </span>
        </a>
        <div class="flex md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                <!-- <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg> -->
                <!-- <span class="sr-only">search</span> -->
            </button>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-100 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-2" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="mobile-search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-100 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <ul
                class="bg-black flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gray-900 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/panel/user-m/users/all.php"
                        class="block py-2 px-3 text-gray-100 rounded md:p-0 hover:text-amber-300">
                        کاربران، پرسنل پروژه
                    </a>
                </li>
                <li>
                    <a href="../../../panel/projects/all.php"
                        class="block py-2 px-3 text-gray-100 rounded md:p-0 hover:text-sky-300">
                        پروژه ها
                    </a>
                </li>
                <li>
                    <a href="/panel/disciplines/all.php"
                        class="block py-2 px-3 text-gray-100 rounded md:p-0 hover:text-green-300"> دیسیپلین ها</a>
                </li>
                <li>
                    <a href="/panel/reports/all.php"
                        class="block py-2 px-3 text-gray-100 rounded md:p-0 hover:text-stone-300">گزارش ها</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End :: Navbar -->




<!-- Begin :: Log out -->
<div class="fixed bottom-0 left-0 m-4">
    <a href="../../../panel/logout.php"
        class="bg-red-500 text-white px-4 py-2 rounded-2xl shadow hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-blue-500 flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </svg>
        <!-- <span class="text-xs px-0">خروج</span> -->
    </a>
</div>
<!-- End :: Log out -->




<!-- Begin :: Menu JS -->
<script>
    // JavaScript to handle snackbar visibility
    document.getElementById('snackbar-btn').addEventListener('click', function() {
        var snackbar = document.getElementById('snackbar');
        snackbar.classList.remove('hidden');
        setTimeout(function() {
            snackbar.classList.add('hidden');
        }, 3000); // Snackbar will be visible for 3 seconds
    });
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelectorAll('[data-collapse-toggle="navbar-search"]');
        const navbarSearch = document.getElementById('navbar-search');

        toggleButton.forEach(button => {
            button.addEventListener('click', function() {
                navbarSearch.classList.toggle('hidden');
            });
        });
    });
</script>
<!-- End :: Menu JS -->