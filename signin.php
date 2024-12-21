<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quality Assurance | Sign in</title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <link rel="stylesheet" href="assets/fonts/MIKA/mika.css">
    <link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/rtl.css">
    <link rel="shortcut icon" href="assets/media/logo.webp" />
    <style>
        body {
            background-color: black;
            background-image: url('./assets/media/lines.webp');
            background-size: cover;
            background-repeat: no-repeat;
            color: white;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            /* Slightly transparent black for form container */
            border-radius: 8px;
        }

        .invalid-feedback {
            display: block;
            font-size: 0.875em;
        }

        .btn-outline-white {
            border-color: white;
            color: white;
        }

        .btn-outline-white:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body id="kt_body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid py-10 col-12 h-100">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="form-container">
                        <form class="form w-100 needs-validation" method="post" action="../authentication/signine.php" novalidate>
                            <div class="text-center mb-10">
                                <h1 class="text-white mb-3" style="font-size: 38px;">سامانه تضمین کیفیت</h1>
                            </div>

                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid text-center" style="font-size: 21px;" type="text" name="username" placeholder="نام کاربری" required>
                                <div class="invalid-feedback">
                                    لطفا نام کاربری خود را وارد کنید.
                                </div>
                            </div>

                            <div class="fv-row mb-10">
                                <input class="form-control form-control-lg form-control-solid text-center" style="font-size: 21px;" type="password" name="password" autocomplete="on" placeholder="رمز ورود" required>
                                <div class="invalid-feedback">
                                    لطفا رمز ورود خود را وارد کنید.
                                </div>
                            </div>

                            <div class="fv-row mb-10">
                                <select class="form-select form-select-lg form-select-solid text-center" name="user_type" required>
                                    <option value="">انتخاب نوع کاربری</option>
                                    <option value="contractor">پیمانکار</option>
                                    <option value="owner">کارفرما</option>
                                </select>
                                <div class="invalid-feedback">
                                    لطفا نوع کاربری خود را انتخاب کنید.
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-outline-white w-100 mb-5" style="border: 1px solid white;">
                                    <span class="indicator-label" style="font-size: 20px;">انتخاب پروژه</span>
                                    <span class="indicator-progress">... لطفا صبر کنید
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for form validation
        document.addEventListener('DOMContentLoaded', function() {
            var forms = document.querySelectorAll('.needs-validation');

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                            form.classList.add('was-validated');
                        }
                    }, false);
                });
        });
    </script>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
</body>

</html>