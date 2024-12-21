<?php
// Start session
session_start();

// Check if the user is already logged in, redirect to dashboard if logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

$title = "Quality Assurance | Sign in";
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <base href="./">
    <title><?= htmlspecialchars($title); ?></title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://mikapartners.co/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logo.webp" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="assets/fonts/MIKA/mika.css">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!-- RTL CSS Style -->
    <link rel="stylesheet" href="assets/css/rtl.css">
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
            color: red;
            /* Style for validation error messages */
        }

        .btn-outline-white {
            border-color: white;
            color: white;
        }

        .btn-outline-white:hover {
            background-color: white;
            color: black;
        }

        .form-select:invalid {
            color: gray;
        }
    </style>
</head>

<body id="kt_body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid py-10 col-12 h-100">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="form-container">
                        <form class="form w-100" method="post" action="./pages/forms/projectSet.php" name="qa" id="qa-form">
                            <div class="text-center mb-10">
                                <h1 class="text-white mb-3" style="font-size: 35px;">سامانه تضمین کیفیت</h1>
                            </div>

                            <!-- Begin PHP Code -->
                            <?php
                            // Database connection parameters
                            $host = "localhost";
                            $username = "root";
                            $password = "0010";
                            $database = "qualityassurance";

                            // Create connection
                            $conn = new mysqli($host, $username, $password, $database);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Check if the user is a contractor or owner
                            $user_type = $_SESSION['usertype']; // Assuming 'contractor' or 'owner'
                            $username = $_SESSION['username']; // Assuming 'username' is stored in session

                            if ($user_type === 'contractor' || $user_type === 'owner') {
                                // Query to fetch projects for the contractor
                                $query = "
            SELECT `id`, `project_name`, `contractor_name` 
            FROM project 
            WHERE id IN (
                SELECT projectID 
                FROM projectPersonnel 
                WHERE userID = (
                    SELECT id 
                    FROM users 
                    WHERE username = ?
                ) 
                AND role = ?
            )
        ";

                                $stmt = $conn->prepare($query);

                                if ($stmt === false) {
                                    // Handle error preparing the statement
                                    echo "Error preparing the statement: " . $conn->error;
                                    exit;
                                }

                                // Bind parameters
                                $stmt->bind_param("ss", $username, $user_type);

                                // Execute the query
                                if (!$stmt->execute()) {
                                    // Handle error executing the query
                                    echo "Error executing the query: " . $stmt->error;
                                    header("Location: ../authentication/signinerror.php");
                                    exit;
                                }

                                // Get the result
                                $result = $stmt->get_result();

                                if ($result->num_rows === 0) {
                                    // No projects found for the user
                                    echo "No projects available for this user.";
                                    header("location: ../authentication/signinerror.php");
                                    exit;
                                }
                            } else {
                                echo "Invalid user type.";
                                exit;
                            }
                            ?>
                            <!-- End PHP Code -->

                            <div class="fv-row mb-10">
                                <div class="d-flex flex-stack mb-2">
                                    <!-- <label class="form-label fw-bolder text-white fs-6 mb-0">پروژه</label> -->
                                </div>
                                <select class="form-select form-select-lg form-select-solid text-center" name="project_id" id="project_id" required aria-describedby="project_id_feedback">
                                    <option value="">انتخاب پروژه</option>
                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <option value="<?php echo htmlspecialchars($row['id']); ?>">
                                            <?php echo htmlspecialchars($row['project_name']) . " ( " . htmlspecialchars($row['contractor_name']) . " ) "; ?>
                                        </option>
                                        <?php $_SESSION['project_id'] = htmlspecialchars($row['id']); ?>
                                    <?php } ?>
                                </select>
                                <div id="project_id_feedback" class="invalid-feedback">
                                    لطفاً یک پروژه انتخاب کنید.
                                </div>
                            </div>

                            <script>
                                document.getElementById('project_id').addEventListener('invalid', function(event) {
                                    event.preventDefault(); // Prevent default invalid behavior
                                    this.classList.add('is-invalid'); // Add invalid class
                                    document.getElementById('project_id_feedback').style.display = 'block'; // Show feedback
                                });

                                document.getElementById('project_id').addEventListener('change', function(event) {
                                    if (this.value !== '') {
                                        this.classList.remove('is-invalid'); // Remove invalid class
                                        document.getElementById('project_id_feedback').style.display = 'none'; // Hide feedback
                                    }
                                });
                            </script>

                            <?php
                            // Close connection
                            $conn->close();
                            ?>

                            <div class="text-center">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-outline-white w-100 mb-5" style="border: 1px solid white;">
                                    <span class="indicator-label" style="font-size: 20px;">ورود </span>
                                    <span class="indicator-progress">... لطفا صبر کنید
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/js/custom/authentication/sign-in/general.js"></script>
</body>

</html>