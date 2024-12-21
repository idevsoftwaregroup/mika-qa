<?php
// Start session
session_start();
// Check if the user is already logged in, redirect to dashboard if logged in
if (isset($_SESSION['username'])) {
	// header("Location: #");
	// exit;
}
$title = "Quality Assurance | Sign in";
?>
<!DOCTYPE html>
<html lang="fa">
<!--begin::Head-->

<head>
	<base href="./">
	<title>
		<?= $title; ?>
	</title>
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://mikapartners.co/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="../../assets/media/logo.webp" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="../../assets/fonts/MIKA/mika.css">
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="../../assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<!-- RTL CSS Style -->
	<link rel="stylesheet" href="../../assets/css/rtl.css">

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body" style="background-image: url(../../assets/media/lines.webp);">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<!--begin::Aside-->

			<!--end::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-column flex-lg-row-fluid py-10 col-12 h-100" style="background-color: black;background-image: url(./assets/media/lines.webp);">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<!--begin::Wrapper-->
					<div class="w-lg-500px p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<h2 class="h-1 text-center text-white ">خطا</h2>
						<p class="h-3 text-white text-center" dir="RTL">لطفا مجددا اطلاعات ورود خود را وارد نمایید ... اطلاعاتی که وارد کردید اشتباه است.</p>
						<hr class="w-100 bg-white">
						<a href="../signin.php" class="btn btn-lg w-100 bg-white">بازگشت به صفحه لاگین</a>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->

				<!--end::Footer-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Main-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>