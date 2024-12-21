<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	<base href="../../">
	<title>Custom Bootstrap Scrolltop Component by Keenthemes</title>
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
	<link rel="shortcut icon" href="assets/media/logo.webp" />
	<!--begin::Fonts-->
		<link rel="stylesheet" href="assets/fonts/MIKA/mika.css">
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body>
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="docs-page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<div id="kt_docs_aside" class="docs-aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_docs_aside_toggle">
				<!--begin::Logo-->
				<div class="docs-aside-logo flex-column-auto h-75px" id="kt_docs_aside_logo">
					<!--begin::Link-->
					<a href="#">
						<img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-25px" />
					</a>
					<!--end::Link-->
				</div>
				<!--end::Logo-->
				<!--begin::Menu-->
				<div class="docs-aside-menu flex-column-fluid">
					<!--begin::Aside Menu-->
					<div class="hover-scroll-overlay-y mt-5 mb-5 mt-lg-0 mb-lg-5 pe-lg-n2 me-lg-2" id="kt_docs_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_docs_aside_logo" data-kt-scroll-wrappers="#kt_docs_aside_menu" data-kt-scroll-offset="10px">
						<!--begin::Menu-->
						<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_docs_aside_menu" data-kt-menu="true">
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Getting Started</h4>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../logout.php">
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Build</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/getting-started/build/gulp.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Gulp</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/getting-started/build/webpack.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Webpack</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/multi-demo.php">
									<span class="menu-title">Multi-demo</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/file-structure.php">
									<span class="menu-title">File Structure</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Customization</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/getting-started/customization/sass.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">SASS</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/getting-started/customization/javascript.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Javascript</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/video-tutorials.php">
									<span class="menu-title">Video Tutorials</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/illustrations.php">
									<span class="menu-title">Illustrations</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/dark-mode.php">
									<span class="menu-title">Dark Mode</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/rtl.php">
									<span class="menu-title">RTL Version</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="https://preview.keenthemes.com/metronic8/demo7/layout-builder.php" target="blank">
									<span class="menu-title">Layout Builder</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Server Side Integration</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/getting-started/integration/blazor.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blazor</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/updates.php">
									<span class="menu-title">Updates</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/references.php">
									<span class="menu-title">References</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/getting-started/changelog.php">
									<span class="menu-title">Changelog
										<span class="badge badge-changelog badge-light-danger bg-hover-danger text-hover-white fw-bold fs-9 px-2 ms-2">v8.0.25</span></span>
								</a>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Base</h4>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/utilities.php">
									<span class="menu-title">Utilities</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Helpers</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/base/helpers/flex-layouts.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Flex Layouts
												<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/base/helpers/text.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Text</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/base/helpers/background.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Background</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/base/helpers/borders.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Borders</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/base/helpers/opacity.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Opacity</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/forms.php">
									<span class="menu-title">Forms</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/buttons.php">
									<span class="menu-title">Buttons</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/accordion.php">
									<span class="menu-title">Accordion</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/alerts.php">
									<span class="menu-title">Alerts</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/badges.php">
									<span class="menu-title">Badges</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/breadcrumb.php">
									<span class="menu-title">Breadcrumb</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/bullets.php">
									<span class="menu-title">Bullets
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/cards.php">
									<span class="menu-title">Cards</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/carousel.php">
									<span class="menu-title">Carousel</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/indicator.php">
									<span class="menu-title">Indicator
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/modal.php">
									<span class="menu-title">Modal</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/overlay.php">
									<span class="menu-title">Overlay
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/pagination.php">
									<span class="menu-title">Pagination</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/popovers.php">
									<span class="menu-title">Popovers</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/tooltips.php">
									<span class="menu-title">Tooltips</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/pulse.php">
									<span class="menu-title">Pulse
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/rating.php">
									<span class="menu-title">Rating
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/ribbon.php">
									<span class="menu-title">Ribbon
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/rotate.php">
									<span class="menu-title">Rotate
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/separator.php">
									<span class="menu-title">Separator
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/symbol.php">
									<span class="menu-title">Symbol
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/tables.php">
									<span class="menu-title">Tables</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/base/tabs.php">
									<span class="menu-title">Tabs</span>
								</a>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Forms</h4>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/autosize.php">
									<span class="menu-title">Autosize</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/clipboard.php">
									<span class="menu-title">Clipboard</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/daterangepicker.php">
									<span class="menu-title">Date Range Picker</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/dialer.php">
									<span class="menu-title">Dialer
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/dropzonejs.php">
									<span class="menu-title">DropzoneJS</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/flatpickr.php">
									<span class="menu-title">Flatpickr</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">FormValidation</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/forms/formvalidation/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/forms/formvalidation/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/forms/formvalidation/advanced.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Advanced</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/image-input.php">
									<span class="menu-title">Image Input
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/inputmask.php">
									<span class="menu-title">Inputmask</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/bootstrap-maxlength.php">
									<span class="menu-title">Bootstrap Maxlength</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/bootstrap-multiselectsplitter.php">
									<span class="menu-title">Multiselectsplitter</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/nouislider.php">
									<span class="menu-title">noUiSlider</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/password-meter.php">
									<span class="menu-title">Password Meter
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/google-recaptcha.php">
									<span class="menu-title">reCAPTCHA</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/select2.php">
									<span class="menu-title">Select2</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/forms/tagify.php">
									<span class="menu-title">Tagify</span>
								</a>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Editors</h4>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">TinyMCE</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/tinymce/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/tinymce/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/tinymce/plugins.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Plugin Addons</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/tinymce/hidden.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Hidden Menubar</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">CKEditor</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/classic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Classic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/inline.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Inline</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/balloon.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Balloon</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/balloon-block.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Balloon Block</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/ckeditor/document.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Document</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Quill</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/quill/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/quill/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/editors/quill/autosave.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Autosave</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Charts</h4>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">AmCharts</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/amcharts/charts.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">AmChart Charts</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/amcharts/maps.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">AmChart Maps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/amcharts/stock-charts.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">AmChart Stock Charts</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/charts/apexcharts.php">
									<span class="menu-title">ApexCharts</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/charts/chartjs.php">
									<span class="menu-title">ChartJS</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Flotcharts</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic Chart</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/axis.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Axis Labels</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/tracking.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tracking Curves</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/dynamic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Dynamic Chart</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/stack.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Stack Chart Controls</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/bar.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Bar Chart</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/flotcharts/pie.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pie Chart</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Google Charts</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/google-charts/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/google-charts/column.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Column Chart</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/google-charts/pie.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pie Chart</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/charts/google-charts/line.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Line Chart</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">General</h4>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">DataTables</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/datatables/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/datatables/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/datatables/advanced.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Advanced</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/datatables/server-side.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Ajax Server Side</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/datatables/api.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">API</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/menu.php">
									<span class="menu-title">Menu
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/blockui.php">
									<span class="menu-title">BlockUI
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/cookie.php">
									<span class="menu-title">Cookie
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/countup.php">
									<span class="menu-title">CountUp</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/cropper.php">
									<span class="menu-title">Cropper</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Draggable</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/draggable/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/draggable/cards.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Draggable</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/draggable/multiple-containers.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Multiple Containers</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/draggable/swappable.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Swappable</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/draggable/restricted.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Restricted</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/drawer.php">
									<span class="menu-title">Drawer
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Fullcalendar</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/drag-n-drop.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Drag-n-Drop</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/selectable.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Selectable Dates</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/background-events.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Background Events</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/locales.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Localization</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/fullcalendar/timezone.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Timezone</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/fslightbox.php">
									<span class="menu-title">Fullscreen Lightbox</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">jKanban Board</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jkanban/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jkanban/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jkanban/color.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Colored</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jkanban/restricted.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Restricted</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jkanban/rich.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Rich Content</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">jsTree</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic Tree</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/contextual.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Contextual Menu</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/customicons.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Custom Icons</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/dragdrop.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Drag &amp; Drop</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/checkable.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Checkable Tree</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/jstree/ajax.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Ajax Data</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/scroll.php">
									<span class="menu-title">Scroll
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link active py-2" href="../../documentation/general/scrolltop.php">
									<span class="menu-title">Scrolltop
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/search.php">
									<span class="menu-title">Quick Search
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/smooth-scroll.php">
									<span class="menu-title">Smooth Scroll</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/stepper.php">
									<span class="menu-title">Stepper
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/sticky.php">
									<span class="menu-title">Sticky
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/swapper.php">
									<span class="menu-title">Swapper
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Tiny Slider</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/tiny-slider/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/tiny-slider/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/tiny-slider/advanced.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Advanced</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/toastr.php">
									<span class="menu-title">Toastr</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/toggle.php">
									<span class="menu-title">Toggle
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/general/typedjs.php">
									<span class="menu-title">Typed.js</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link py-2">
									<span class="menu-title">Vis-Timeline</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/overview.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/basic.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Basic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/style.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Custom Styling</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/group.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Groups</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/interaction.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Interactions</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link py-2" href="../../documentation/general/vis-timeline/template.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Templates</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<div class="h-30px"></div>
							</div>
							<div class="menu-item">
								<h4 class="menu-content text-muted mb-0 fs-7 text-uppercase">Icons</h4>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/icons/duotune.php">
									<span class="menu-title">Duotune
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/icons/bootstrap-icons.php">
									<span class="menu-title">Bootstrap Icons</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/icons/font-awesome.php">
									<span class="menu-title">Font Awesome</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link py-2" href="../../documentation/icons/line-awesome.php">
									<span class="menu-title">Line Awesome</span>
								</a>
							</div>
						</div>
						<!--end::Menu-->
					</div>
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="docs-wrapper d-flex flex-column flex-row-fluid" id="kt_docs_wrapper">
				<!--begin::Header-->
				<div id="kt_docs_header" class="docs-header align-items-stretch mb-2 mb-lg-10">
					<!--begin::Container-->
					<div class="container">
						<div class="d-flex align-items-stretch justify-content-between py-3 h-75px">
							<!--begin::Aside toggle-->
							<div class="d-flex align-items-center d-lg-none me-3" title="Show aside menu">
								<div class="btn btn-icon btn-flex btn-active-color-primary" id="kt_docs_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-2tx mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Aside toggle-->
							<!--begin::Logo-->
							<div class="d-flex d-lg-none align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
								<a href="#">
									<img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-25px" />
								</a>
							</div>
							<!--end::Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between flex-lg-grow-1">
								<!--begin::Header title-->
								<div class="d-flex align-items-center" id="kt_docs_header_title">
									<!--begin::Page title-->
									<div class="docs-page-title d-flex flex-column flex-lg-row align-items-lg-center py-5 mb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_docs_content_container', 'lg': '#kt_docs_header_title'}">
										<!--begin::Title-->
										<h1 class="d-flex align-items-center text-dark my-1 fs-4">Documentation
											<a href="../../documentation/getting-started/changelog.php" class="badge fw-bold fs-9 px-2 ms-2 badge-white text-hover-primary shadow-sm">v8.0.25</a>
										</h1>
										<!--end::Title-->
										<!--begin::Separator-->
										<span class="d-none d-lg-block bullet h-20px w-1px bg-secondary mx-4"></span>
										<!--end::Separator-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-6 my-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-gray-600">General</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-dark">Scrolltop
												<span class="badge badge-success fw-bold fs-9 px-2 ms-2 cursor-default ms-2" data-bs-toggle="tooltip" title="Developed in-house for Metronic">Exclusive</span>
											</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								</div>
								<!--end::Header title-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--begin::Search-->
									<div id="kt_docs_search" class="d-flex align-items-center w-125px w-md-175px w-lg-250px me-5" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
										<!--begin::Form-->
										<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
											<!--begin::Hidden input(Added to disable form autocomplete)-->
											<input type="hidden" />
											<!--end::Hidden input-->
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid h-40px bg-body ps-13 fs-7" name="search" value="" placeholder="Search documentation ..." data-kt-search-element="input" />
											<!--end::Input-->
											<!--begin::Spinner-->
											<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
												<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
											</span>
											<!--end::Spinner-->
											<!--begin::Reset-->
											<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<!--end::Reset-->
										</form>
										<!--end::Form-->
										<!--begin::Menu-->
										<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 ps-7 pe-5 overflow-hidden">
											<!--begin::Wrapper-->
											<div data-kt-search-element="wrapper">
												<!--begin::Search results-->
												<div data-kt-search-element="results" class="d-none">
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-350px">
														<!--begin::Item-->
														<a href="../../documentation/getting-started/#" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Overview</span>
															<span class="fw-bold fs-base text-muted">Introduction &amp; Getting Started</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/build/gulp.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Gulp</span>
															<span class="fw-bold fs-base text-muted">Automate &amp; enhance your build workflow</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/build/webpack.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Webpack</span>
															<span class="fw-bold fs-base text-muted">Module bundler for build process automation</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/multi-demo.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Multi-demo</span>
															<span class="fw-bold fs-base text-muted">Multi-demo concept &amp; usage</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/file-structure.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">File Structure</span>
															<span class="fw-bold fs-base text-muted">Theme File Structure Organization</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/customization/sass.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">SASS</span>
															<span class="fw-bold fs-base text-muted">SASS Structure &amp; Customization</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/customization/javascript.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Javacript</span>
															<span class="fw-bold fs-base text-muted">Javacript Structure &amp; Customization</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/dark-mode.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Dark Mode</span>
															<span class="fw-bold fs-base text-muted">Dark Mode Setup for Layout &amp; Components</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/illustrations.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Illustrations</span>
															<span class="fw-bold fs-base text-muted">Vector Illustrations</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/video-tutorials.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Illustrations</span>
															<span class="fw-bold fs-base text-muted">Youtube video tutorials</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/rtl.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">RTL Version</span>
															<span class="fw-bold fs-base text-muted">Theme &amp; Bootstrap RTL Version Setup</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/integration/blazor.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Blazor</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Blazor Server Side Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/integration/laravel.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Laravel</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Laravel Server Side Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/changelog.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Changelog</span>
															<span class="fw-bold fs-base text-muted">Versions &amp; Updates Information</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/updates.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Updates</span>
															<span class="fw-bold fs-base text-muted">General Update Guidelines</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/getting-started/references.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">References</span>
															<span class="fw-bold fs-base text-muted">3rd-party Libraries &amp; Resources</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/utilities.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Utilities</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Utilities</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/helpers/flex-layouts.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Flex Layouts</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Flex Layouts</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/helpers/text.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Text</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Text Utilities</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/helpers/background.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Background</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Background Utilities</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/helpers/borders.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Borders</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Border Utilities</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/helpers/opacity.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Opacity</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Opacity Utilities</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/forms.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Forms</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Form Controls</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/buttons.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Buttons</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Buttons</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/indicator.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Indicator</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Indicator Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/rotate.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Rotate</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Rotate Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/tables.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tables</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Tables and DataTable</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/cards.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Cards</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Cards</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/symbol.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Symbol</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Symbol Component For Avatars and Images</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/badges.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Badges</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Badge Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/pulse.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Pulse</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Pulse Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/bullets.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bullets</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Bullet Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/accordion.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Accordion</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Accordion</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/carousel.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Carousel</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Carousel</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/overlay.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bootstrap Overlay</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Overlay Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/separator.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Separator</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Separator Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/tabs.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tabs</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Tabs</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/breadcrumb.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Breadcrumb</span>
															<span class="fw-bold fs-base text-muted">Customized Bootstrap Breadcrumb</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/modal.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Modal</span>
															<span class="fw-bold fs-base text-muted">Customized Bootstrap Modals</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/tooltips.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tooltips</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Tooltips</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/popovers.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Popovers</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Popovers</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/pagination.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Pagination</span>
															<span class="fw-bold fs-base text-muted">Extended Bootstrap Pagination</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/rating.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Rating</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Rating Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/ribbon.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Ribbon</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Ribbon Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/base/alerts.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Alerts</span>
															<span class="fw-bold fs-base text-muted">Customized Bootstrap Alerts</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/autosize.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Autosize Textarea</span>
															<span class="fw-bold fs-base text-muted">Autosize Textarea Javascript Plugin</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/select2.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Select2</span>
															<span class="fw-bold fs-base text-muted">Select2 and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/clipboard.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Clipboard</span>
															<span class="fw-bold fs-base text-muted">Clipboard.js and Bootstrap integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/flatpickr.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Flatpickr</span>
															<span class="fw-bold fs-base text-muted">Flatpickr and Bootstrap Integration for Bootstrap Datepicker and Timepicker</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/formvalidation/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">FormValidation Overview</span>
															<span class="fw-bold fs-base text-muted">FormValidation and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/formvalidation/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic Example</span>
															<span class="fw-bold fs-base text-muted">FormValidation Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/formvalidation/advanced.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Advanced Example</span>
															<span class="fw-bold fs-base text-muted">FormValidation Advanced Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/daterangepicker.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Date Range Picker</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Datepicker &amp; Timepicker Implementation with Daterangepicker</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/tagify.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tagify</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Tags Implementation with Tagify</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/dialer.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Dialer</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Dialer and Input Spinner Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/nouislider.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">noUiSlider</span>
															<span class="fw-bold fs-base text-muted">noUiSlider and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/password-meter.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Password Meter</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Password Meter &amp; Strength Checker Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/inputmask.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Inputmask</span>
															<span class="fw-bold fs-base text-muted">Inputmask Plugin &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/bootstrap-multiselectsplitter.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bootstrap Multiselectsplitter</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Multiselectsplitter Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/google-recaptcha.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Google reCAPTCHA</span>
															<span class="fw-bold fs-base text-muted">Google reCAPTCHA &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/dropzonejs.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DropzoneJS</span>
															<span class="fw-bold fs-base text-muted">DropzoneJS &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/image-input.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Image Input</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Image Input with Preview Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/bootstrap-maxlength.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bootstrap Maxlength</span>
															<span class="fw-bold fs-base text-muted">A visual feedback indicator for the maxlength attribute.</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/amcharts/charts.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">AmCharts</span>
															<span class="fw-bold fs-base text-muted">AmCharts &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/amcharts/maps.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">AmCharts</span>
															<span class="fw-bold fs-base text-muted">AmCharts Maps &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/amcharts/stock-charts.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">AmCharts</span>
															<span class="fw-bold fs-base text-muted">AmCharts Stock &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/apexcharts.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">ApexCharts</span>
															<span class="fw-bold fs-base text-muted">ApexCharts &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/chartjs.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Chartjs</span>
															<span class="fw-bold fs-base text-muted">Chartjs &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Overview</span>
															<span class="fw-bold fs-base text-muted">Attractive JavaScript plotting for jQuery</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic Chart</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/axis.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Axis Labels</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Axis Labels Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/tracking.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tracking Curves</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Tracking Curves Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/dynamic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Dynamic Chart</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Dynamic Chart Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/stack.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Stack Chart Controls</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Stack Chart Controls Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/bar.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bar Chart</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Bar Chart Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/flotcharts/pie.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Pie Chart</span>
															<span class="fw-bold fs-base text-muted">Flotcharts Pie Chart Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/google-charts/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Overview</span>
															<span class="fw-bold fs-base text-muted">Google Charts Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/google-charts/column.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Column Chart</span>
															<span class="fw-bold fs-base text-muted">Google Column Charts Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/google-charts/pie.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Pie Chart</span>
															<span class="fw-bold fs-base text-muted">Google Pie Charts Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/charts/google-charts/line.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Line Chart</span>
															<span class="fw-bold fs-base text-muted">Google Line Charts Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/tinymce/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tinymce Overview</span>
															<span class="fw-bold fs-base text-muted">Tinymce Editor and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/tinymce/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic TinyMCE</span>
															<span class="fw-bold fs-base text-muted">Tinymce Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/tinymce/plugins.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">TinyMCE Plugins</span>
															<span class="fw-bold fs-base text-muted">Tinymce Editor Plugins Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/tinymce/hidden.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">TinyMCE Menubar</span>
															<span class="fw-bold fs-base text-muted">TinyMCE with Hidden Menubar Example</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Overview</span>
															<span class="fw-bold fs-base text-muted">CKEditor &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/classic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CKEditor Classic</span>
															<span class="fw-bold fs-base text-muted">CKEditor Classic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/inline.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CKEditor Inline</span>
															<span class="fw-bold fs-base text-muted">CKEditor Inline Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/balloon.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CKEditor Ballon</span>
															<span class="fw-bold fs-base text-muted">CKEditor Ballon Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/balloon-block.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CKEditor Balloon Block</span>
															<span class="fw-bold fs-base text-muted">CKEditor Balloon Block Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/ckeditor/document.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CKEditor Document</span>
															<span class="fw-bold fs-base text-muted">CKEditor Document Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/quill/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Quill Overview</span>
															<span class="fw-bold fs-base text-muted">Quill &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/quill/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Quill Basic</span>
															<span class="fw-bold fs-base text-muted">Quill Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/editors/quill/autosave.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Quill Autosave</span>
															<span class="fw-bold fs-base text-muted">Quill Autosave Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DataTables Overview</span>
															<span class="fw-bold fs-base text-muted">DataTables &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DataTables</span>
															<span class="fw-bold fs-base text-muted">DataTables Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/advanced.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DataTables</span>
															<span class="fw-bold fs-base text-muted">DataTables Advanced Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/server-side.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DataTables</span>
															<span class="fw-bold fs-base text-muted">DataTables Ajax Server Side Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/api.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">API</span>
															<span class="fw-bold fs-base text-muted">DataTables API Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/draggable/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Draggable Overview</span>
															<span class="fw-bold fs-base text-muted">Draggable and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/draggable/cards.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Simple List</span>
															<span class="fw-bold fs-base text-muted">Draggable Simple List Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/draggable/multiple-containers.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Multiple Containers</span>
															<span class="fw-bold fs-base text-muted">Draggable Multiple Containers Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/draggable/swappable.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Swappable</span>
															<span class="fw-bold fs-base text-muted">Draggable Swappable Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/draggable/restricted.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Restricted</span>
															<span class="fw-bold fs-base text-muted">Draggable Restricted Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fslightbox.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Fullscreen Lightbox</span>
															<span class="fw-bold fs-base text-muted">Fullscreen Lightbox &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Fullcalendar Overview</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/drag-n-drop.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Drag-n-Drop</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Drag &amp; Drop Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/selectable.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Selectable Dates</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Selectable Dates Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/background-events.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Background Events</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Background Events Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/locales.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Localization</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Localization Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/timezone.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Timezone</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar Timezone Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jkanban/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">jKanban Overview</span>
															<span class="fw-bold fs-base text-muted">jKanban &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jkanban/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic</span>
															<span class="fw-bold fs-base text-muted">jKanban Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jkanban/color.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Colored</span>
															<span class="fw-bold fs-base text-muted">jKanban Colored Items Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jkanban/restricted.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Restricted</span>
															<span class="fw-bold fs-base text-muted">jKanban Restricted Items Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jkanban/rich.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Rich Content</span>
															<span class="fw-bold fs-base text-muted">jKanban Rich Content Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/menu.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Menu</span>
															<span class="fw-bold fs-base text-muted">Customm Bootstrap Menu component with Nested Dropdown &amp; Accordion Submenu</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/typedjs.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Typed.js</span>
															<span class="fw-bold fs-base text-muted">Typed.js &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/stepper.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Stepper</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Stepper &amp; Wizard Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/scroll.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Scroll</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Scrollbar Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/cookie.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Cookie</span>
															<span class="fw-bold fs-base text-muted">Custom Cookie Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/cropper.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Cropper</span>
															<span class="fw-bold fs-base text-muted">Cropper.js &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/drawer.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Scroll</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Offcanvas &amp; Drawer Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/toastr.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Toastr</span>
															<span class="fw-bold fs-base text-muted">Toastr &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/blockui.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">BlockUI</span>
															<span class="fw-bold fs-base text-muted">BlockUI &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/scrolltop.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Scrolltop</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Scrolltop Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/search.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Search</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Quick Search Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/smooth-scroll.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Smooth Scroll</span>
															<span class="fw-bold fs-base text-muted">Smooth Scroll and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/sticky.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Sticky</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Sticky Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/swapper.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Swapper</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Swapper Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/toggle.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Scroll</span>
															<span class="fw-bold fs-base text-muted">Custom Bootstrap Toggle Component</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Overview</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/style.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Custom Styling</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline Custom Styling Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/group.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Group</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline Group Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/interaction.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Interaction</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline Interaction Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/vis-timeline/template.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Templates</span>
															<span class="fw-bold fs-base text-muted">Vis-timeline Templates Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">jsTree Overview</span>
															<span class="fw-bold fs-base text-muted">jsTree &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic</span>
															<span class="fw-bold fs-base text-muted">jsTree Basic Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/contextual.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Contextual Menu</span>
															<span class="fw-bold fs-base text-muted">jsTree Contextual Menu Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/customicons.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Custom Icons</span>
															<span class="fw-bold fs-base text-muted">jsTree Custom Icons Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/dragdrop.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Drag &amp; Drop</span>
															<span class="fw-bold fs-base text-muted">jsTree Drag &amp; Drop Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/checkable.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Checkable Tree</span>
															<span class="fw-bold fs-base text-muted">jsTree Checkable Tree Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/jstree/ajax.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Ajax Data</span>
															<span class="fw-bold fs-base text-muted">jsTree Ajax Data Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/tiny-slider/overview.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Tiny Slider Overview</span>
															<span class="fw-bold fs-base text-muted">Tiny slider for all purposes</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/tiny-slider/basic.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Basic</span>
															<span class="fw-bold fs-base text-muted">Tiny Slider Basic Example</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/tiny-slider/advanced.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Custom Navs</span>
															<span class="fw-bold fs-base text-muted">Tiny Slider Custom Navigation Example</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/countup.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">CountUp</span>
															<span class="fw-bold fs-base text-muted">Lightweight JavaScript class that can be used to quickly create animations that display numerical data in a more interesting way.</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/icons/duotune.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Duotune</span>
															<span class="fw-bold fs-base text-muted">In-house Designed Duotune SVG Icon Set</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/icons/bootstrap-icons.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Bootstrap Icons</span>
															<span class="fw-bold fs-base text-muted">Bootstrap Icons and Flaticon Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/icons/font-awesome.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Fontawesome</span>
															<span class="fw-bold fs-base text-muted">Fontawesome Icons and Flaticon Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/icons/line-awesome.php" data-kt-searchable="true" class="d-none d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Line Awesome</span>
															<span class="fw-bold fs-base text-muted">Line Awesome Icons and Flaticon Integration</span>
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Search results-->
												<!--begin::Recently viewed-->
												<div class="mb-0" data-kt-search-element="main">
													<!--begin::Heading-->
													<div class="d-flex flex-stack fw-bold mb-2">
														<!--begin::Label-->
														<span class="text-muted fs-base me-2">Suggestions:</span>
														<!--end::Label-->
													</div>
													<!--end::Heading-->
													<!--begin::Items-->
													<div class="scroll-y mh-200px mh-lg-325px">
														<!--begin::Item-->
														<a href="../../documentation/getting-started/dark-mode.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Dark Mode</span>
															<span class="fw-bold fs-base text-muted">Dark Mode Setup for Layout &amp; Components</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/select2.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Select2</span>
															<span class="fw-bold fs-base text-muted">Select2 and Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/forms/flatpickr.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Flatpickr</span>
															<span class="fw-bold fs-base text-muted">Flatpickr and Bootstrap Integration for Bootstrap Datepicker and Timepicker</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/datatables/server-side.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">DataTables</span>
															<span class="fw-bold fs-base text-muted">DataTables Ajax Server Side Examples</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/general/fullcalendar/overview.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Fullcalendar Overview</span>
															<span class="fw-bold fs-base text-muted">Fullcalendar &amp; Bootstrap Integration</span>
														</a>
														<!--end::Item-->
														<!--begin::Item-->
														<a href="../../documentation/icons/duotune.php" class="d-flex flex-column text-dark text-hover-primary py-2">
															<span class="fw-bolder fs-5 mb-0">Duotune</span>
															<span class="fw-bold fs-base text-muted">In-house Designed Duotune SVG Icon Set</span>
														</a>
														<!--end::Item-->
													</div>
													<!--end::Items-->
												</div>
												<!--end::Recently viewed-->
												<!--begin::Empty-->
												<div data-kt-search-element="empty" class="text-center d-none">
													<!--begin::Icon-->
													<div class="pt-10 pb-5">
														<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
														<span class="svg-icon svg-icon-4x opacity-50">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
																<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
																<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
																<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Icon-->
													<!--begin::Message-->
													<div class="pb-15 fw-bold">
														<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
														<div class="text-muted fs-7">Please try again with a different query</div>
													</div>
													<!--end::Message-->
												</div>
												<!--end::Empty-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Search-->
									<a class="btn btn-flex btn-bg-white btn-color-gray-700 btn-active-primary h-40px border-0 fw-bolder me-4" href="https://preview.keenthemes.com/metronic8" target="_blank">Preview</a>
									<a class="btn btn-primary btn-flex h-40px border-0 fw-bolder" href="https://1.envato.market/EA4JP" target="_blank">Purchase</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<div class="border-gray-300 border-bottom border-bottom-dashed"></div>
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
					<!--begin::Container-->
					<div class="container" id="kt_docs_content_container">
						<!--begin::Card-->
						<div class="card card-docs mb-2">
							<!--begin::Card Body-->
							<div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
								<!--begin::Section-->
								<div class="pb-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="overview">
										<a href="#overview" data-kt-scroll-toggle=""></a>Overview
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">ScrollTop is an exclusive component of Metronic that provides a simple build-in solution for a scroll to top button implementation. All CSS and JS requirements are bundled globally by default.</div>
									<!--end::Block-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="py-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="usage">
										<a href="#usage" data-kt-scroll-toggle=""></a>Usage
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">ScrollTop's script bundles are globally included in all pages.</div>
									<!--end::Block-->
									<!--begin::Code-->
									<div class="py-5">
										<!--begin::Highlight-->
										<div class="highlight">
											<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
											<div class="highlight-code">
												<pre class="language-html">
<code class="language-html">&lt;link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/&gt;
&lt;script src="assets/js/scripts.bundle.js"&gt;&lt;/script&gt;</code>
</pre>
											</div>
										</div>
										<!--end::Highlight-->
									</div>
									<!--end::Code-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="py-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="initialization">
										<a href="#initialization" data-kt-scroll-toggle=""></a>Initialization
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">
										<ul class="py-0">
											<li class="py-2">ScrollTop's CSS and Javascript files are globally initialized and added into our script bundle.</li>
											<li class="py-2">Add
												<code>.scrolltop</code>css class and
												<code>data-kt-scrolltop="true"</code>to a HTML element to enable it.
											</li>
											<li class="py-2">ScrollTop instances can also be controlled programmatically.
												<a href="#methods" data-kt-scroll-toggle="">See below for more info</a>.
											</li>
										</ul>
									</div>
									<!--end::Block-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="py-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="basic">
										<a href="#basic" data-kt-scroll-toggle=""></a>Basic Example
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="mb-3">Add
											<code>.scrolltop</code>css class
											<code>data-kt-scrolltop="true"</code>to any element element to enable it. However, it's best to be used with an icon as the child element.
										</div>
										<div class="mb-3">The
											<code>.scrolltop</code>css class adds all necessary styling to the scrolltop element. Adding additional Bootstrap classes to scrolltop will also work accordingly to override the default css styling.
										</div>
										<div class="mb-3">The ScrollTop component demo can be found at the lower right corner of the browser or click the button below to scroll to the top.</div>
										<a href="#options" class="me-1" data-kt-scroll-toggle="">Click here</a>for more info on the options.
									</div>
									<!--end::Block-->
									<!--begin::Notice-->
									<div class="py-5">
										<!--begin::Information-->
										<div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-3x svg-icon-primary me-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Description-->
											<div class="text-gray-700 fw-bold fs-6">Tip: To add scroll top functionality to a stand-alone button or any other HTML element, add
												<code>data-kt-scrolltop="true"</code>only.
											</div>
											<!--end::Description-->
										</div>
										<!--end::Information-->
									</div>
									<!--end::Notice-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="rounded border p-10 p-lg-20">
											<div id="kt_docs_example_basic" class="btn btn-primary" data-kt-scrolltop="true">Scroll to top</div>
										</div>
									</div>
									<!--end::Block-->
									<!--begin::Code-->
									<div class="py-5">
										<!--begin::Highlight-->
										<div class="highlight">
											<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
											<div class="highlight-code">
												<pre class="language-html">
<code class="language-html">&lt;!--begin::Scrolltop button--&gt;
&lt;div id="kt_docs_example_basic" class="btn btn-primary" data-kt-scrolltop="true"&gt;
    Scroll to top
&lt;/div&gt;
&lt;!--end::Scrolltop button--&gt;</code>
</pre>
											</div>
										</div>
										<!--end::Highlight-->
									</div>
									<!--end::Code-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="py-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="options">
										<a href="#options" data-kt-scroll-toggle=""></a>Markup Reference
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">Scrolltop uses HTML attributes to define the scrolltop configuration. Here are the references for each below</div>
									<!--end::Block-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="fw-bolder fs-2">HTML Attribute references</div>
									</div>
									<!--end::Block-->
									<!--begin::Table-->
									<div class="py-5">
										<div class="table-responsive border rounded">
											<table class="table table-striped align-top mb-0 g-5">
												<thead>
													<tr class="fs-4 fw-bolder text-dark p-6">
														<th class="min-w-250px">Name</th>
														<th class="min-w-100px">Type</th>
														<th class="min-w-500px">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<code>data-kt-scrolltop</code>
														</td>
														<td>
															<code class="ms-0">mandatory</code>
														</td>
														<td>Enables the element as a scrolltop. Accepts
															<code>true</code>or
															<code>false</code>values.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-scrolltop-offset</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Defines the offset value in
															<code>px</code>before the ScrollTop components comes into effect when scrolling from the top of the page. The
															<code>px</code>string is not required for this value. For example:
															<code>data-kt-scrolltop-offset="300"</code>.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-scrolltop-speed</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Defines the scrolling speed when scrolltop is clicked. Accepts a number value in
															<code>ms</code>. For example:
															<code>data-kt-scrolltop-speed="600"</code>will define that it will take about 0.6 seconds to scroll to the top of the page when clicked.
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Section-->
								<!--begin::Section-->
								<div class="pt-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="methods">
										<a href="#methods" data-kt-scroll-toggle=""></a>Methods
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">All Scrolltop components are initialized automatically, however the following are ScrollTop's functionality methods for more control.</div>
									<!--end::Block-->
									<!--begin::Table-->
									<div class="pt-2">
										<!--begin::Table wrapper-->
										<div class="table-responsive border rounded">
											<!--begin::Table-->
											<table class="table table-striped mb-0 g-6">
												<!--begin::Head-->
												<thead>
													<tr class="fs-4 fw-bolder p-6">
														<th class="min-w-400px">Name</th>
														<th class="min-w-500px">Description</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Head-->
												<thead>
													<tr class="fs-4 fw-bolder p-6">
														<th colspan="2">Static Methods</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Body-->
												<tbody>
													<tr>
														<td>
															<code>createInstances(DOMString selector)</code>
														</td>
														<td>Initializes ScrollTop instances by selector. Default value of
															<code>selector</code>is
															<code>[data-kt-scrolltop="true"]</code>. This method can be used to initialize dynamicly populated ScrollTop instances(e.g: after Ajax request).
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">KTScrolltop.createInstances();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getInstance(DOMElement element)</code>
														</td>
														<td>Get the Toggle instance created
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var scrollTopElement = document.querySelector("#kt_scrolltop_control");
var scrollTop = KTScrolltop.getInstance(scrollTopElement);</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
												</tbody>
												<!--end::Body-->
												<!--begin::Head-->
												<thead>
													<tr class="fs-4 fw-bolder p-6">
														<th colspan="2">Public Methods</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Body-->
												<tbody>
													<tr>
														<td>
															<code>KTScrolltop(DOMElement element, Object options)</code>
														</td>
														<td>Constructs a new instance of
															<code>KTScrolltop</code>class and initializes a Drawer control:
															<div class="pt-3 mb-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var scrollElement = document.querySelector("#kt_scrolltop_control");
var scrollTop = new KTScrolltop(scrollElement, {offset: 300, speed: 600});</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
															<!--begin::Information-->
															<div class="d-flex align-items-center rounded py-5 px-5 bg-light-info">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																<span class="svg-icon svg-icon-3x svg-icon-info me-5">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																		<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																		<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Description-->
																<div class="text-gray-700 fw-bold fs-6">Remove
																	<code>data-kt-scrolltop="true"</code>attribute to avoid lazy initialization. Options
																	<code>offset</code>and
																	<code>speed</code>replicate
																	<code>data-kt-scrolltop-offset</code>and
																	<code>data-kt-scrolltop-speed</code>options functionaliy as described above.
																</div>
																<!--end::Description-->
															</div>
															<!--end::Information-->
														</td>
													</tr>
													<tr>
														<td>
															<code>go</code>
														</td>
														<td>Triggers the ScrollTop function. If there is room to scroll to top, this will trigger scrolltop to start scrolling to the top of the page.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">scrollTop.go();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getElement</code>
														</td>
														<td>Returns the scrollTop element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">scrollTop.getElement();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
												</tbody>
												<!--end::Body-->
											</table>
										</div>
									</div>
									<!--end::Table-->
								</div>
								<!--end::Section-->
							</div>
							<!--end::Card Body-->
						</div>
						<!--end::Card-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="py-4 d-flex flex-lg-column py-6" id="kt_footer">
					<!--begin::Container-->
					<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted fw-bold me-1">2021©</span>
							<a href="https://mikapartners.co" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
						</div>
						<!--end::Copyright-->
						<!--begin::Menu-->
						<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1 align-items-center mb-3 mb-md-0">
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://www.youtube.com/c/KeenThemesTuts/videos" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Youtube" src="assets/media/svg/social-logos/youtube.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://github.com/KeenthemesHub" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Github" src="assets/media/svg/social-logos/github.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://twitter.com/keenthemes" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Twitter" src="assets/media/svg/social-logos/twitter.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://www.instagram.com/keenthemes" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Instagram" src="assets/media/svg/social-logos/instagram.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://www.facebook.com/keenthemes" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Facebook" src="assets/media/svg/social-logos/facebook.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
							<!--begin::Menu item-->
							<li class="menu-item">
								<!--begin::Menu link-->
								<a href="https://dribbble.com/keenthemes" target="_blank" class="menu-link px-3">
									<img alt="Keenthemes Dribbble" src="assets/media/svg/social-logos/dribbble.svg" class="h-20px" />
								</a>
								<!--end::Menu link-->
							</li>
							<!--end::Menu link-->
						</ul>
						<!--end::Menu-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->
	<!--begin::Exolore drawer toggle-->
	<button id="kt_explore_toggle" class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0" title="Explore Metronic" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover">
		<span id="kt_explore_toggle_label">Explore</span>
	</button>
	<!--end::Exolore drawer toggle-->
	<!--begin::Exolore drawer-->
	<div id="kt_explore" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">
		<!--begin::Card-->
		<div class="card shadow-none rounded-0 w-100">
			<!--begin::Header-->
			<div class="card-header" id="kt_explore_header">
				<h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
				<div class="card-toolbar">
					<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_explore_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
				</div>
			</div>
			<!--end::Header-->
			<!--begin::Body-->
			<div class="card-body" id="kt_explore_body">
				<!--begin::Content-->
				<div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body" data-kt-scroll-dependencies="#kt_explore_header" data-kt-scroll-offset="5px">
					<!--begin::Wrapper-->
					<div class="mb-0">
						<!--begin::Header-->
						<div class="mb-7">
							<div class="d-flex flex-stack">
								<h3 class="mb-0">Metronic Licenses</h3>
								<a href="https://themeforest.net/licenses/standard" class="fw-bold" target="_blank">License FAQs</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for."></i>
									</div>
									<div class="fs-7 text-muted">For single end product used by you or one client</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-bold me-n1">$</span>
									<span class="text-dark fs-1 fw-bolder">39</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
										<i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
									</div>
									<div class="fs-7 text-muted">For single end product with paying users.</div>
								</div>
								<div class="text-nowrap">
									<span class="text-muted fs-7 fw-bold me-n1">$</span>
									<span class="text-dark fs-1 fw-bolder">939</span>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::License-->
						<div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
							<div class="d-flex flex-stack">
								<div class="d-flex flex-column">
									<div class="d-flex align-items-center mb-1">
										<div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
									</div>
									<div class="fs-7 text-muted">Reach us for custom license offers.</div>
								</div>
								<div class="text-nowrap">
									<a href="https://mikapartners.co/contact/" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
								</div>
							</div>
						</div>
						<!--end::License-->
						<!--begin::Purchase-->
						<a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
						<!--end::Purchase-->
						<!--begin::Demos-->
						<div class="mb-0">
							<h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
							<!--begin::Row-->
							<div class="row g-5">
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo10.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo12.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo14.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo15.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo16.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo17.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo18.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo19.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Demo-->
									<div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
										<div class="overlay-wrapper">
											<img src="assets/media/demos/demo20.png" alt="demo" class="w-100 opacity-25" />
										</div>
										<div class="overlay-layer bg-dark bg-opacity-10">
											<div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
										</div>
									</div>
									<!--end::Demo-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Demos-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Card-->
	</div>
	<!--end::Exolore drawer-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<script>
		var hostUrl = "assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/documentation/documentation.js"></script>
	<script src="assets/js/custom/documentation/search.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>