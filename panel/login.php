<?php
session_start();

// Redirect to welcome page if already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به سیستم</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/panel/assets/css/styles.css">

    <!-- Font -->
    <link rel="stylesheet" href="/panel/assets/fonts/mika.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Animation for background color transition */
        @keyframes bgTransition {
            0% {
                background-color: black;
            }

            100% {
                background-color: lightgray;
            }
        }

        .transition-bg {
            animation: bgTransition 10s ease-in-out;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen transition-bg" dir="rtl">
    <div class=" text-white p-6 max-w-sm w-full bg-gray-100 rounded-2xl p-10 shadow-lg">
        <h2 class="text-2xl mb-4 text-center text-gray-900">پنل ادمین تضمین کیفیت</h2>
        <form action="process_login.php" method="POST">
            <div class="mb-4">
                <label for="pin" class="block text-lg mb-2 text-gray-900">پین</label>
                <input type="password" id="pin" name="pin" required class="text-center w-full p-2 rounded-md border border-gray-700 bg-gray-100 text-stone-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <button type="submit" class="w-full py-2 bg-stone-500 text-white rounded-md hover:bg-stone-600 focus:outline-none focus:ring-2 focus:ring-stone-500">ورود</button>
        </form>
        <?php if (isset($_GET['error'])): ?>
            <p class="mt-4 text-red-500 text-center">پین نادرست است!</p>
        <?php endif; ?>
    </div>
</body>

</html>