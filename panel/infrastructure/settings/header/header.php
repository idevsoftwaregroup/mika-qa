<!-- Begin :: Auth -->
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>
<!-- End :: Auth -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ادمین پنل | تضمین کیفیت</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/panel/assets/css/styles.css">

    <!-- Font -->
    <link rel="stylesheet" href="/panel/assets/fonts/mika.css">

    <!-- Begin :: DatePicker -->
    <!-- Kama Datepicker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/kamadatepicker@latest/dist/kamadatepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jalali-moment@latest/build/jalali-moment.min.js"></script>

    <!-- End :: DatePicker -->

    <!-- Begin :: JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- End :: JQuery -->

    <!-- Customized Tailwind JS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>

    <!-- TailwindCSS First Party Plugins -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

</head>

<!-- The rest of your page content goes here -->