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
	<title>Custom Bootstrap Quick Search Component by Keenthemes</title>
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
								<a class="menu-link py-2" href="../../documentation/general/scrolltop.php">
									<span class="menu-title">Scrolltop
										<span class="badge badge-exclusive badge-light-success fw-bold fs-9 px-2 py-1 ms-1">Exclusive</span></span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link active py-2" href="../../documentation/general/search.php">
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
											<li class="breadcrumb-item text-dark">Quick Search
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
									<div class="py-5">Quick Search is an exclusive advanced component of Metronic that provides a flexible and powerful UI component to manage and handle layouts related to search. Quick Search also comes with multiple custom hook points to allow advanced users to bind custom JS or search logic to control and manipulate our Quick Search component.</div>
									<!--end::Block-->
									<!--begin::Notice-->
									<div class="py-5">
										<!--begin::Information-->
										<div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-3x svg-icon-warning me-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Description-->
											<div class="text-gray-700 fw-bold fs-6">The Quick Search component is a frontend only solution that manages element display orders and event triggers to show/hide certain layers. However, the search logic backend functionality is not included.</div>
											<!--end::Description-->
										</div>
										<!--end::Information-->
									</div>
									<!--end::Notice-->
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
									<div class="py-5">
										<b>Quick Search</b>&#160; hooks are globally included in our scripts bundle, however, initialization is manually controlled and is required to be included.
									</div>
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
											<li class="py-2">The Quick Search component is a highly robust and flexible frontend solution that comes with number of HTML elements to provide a rapid search layout. Quick Search starts with a simple
												<code>div</code>element that houses a number of HTML attributes to control and configure the Quick Search component.
												<a href="#options" data-kt-scroll-toggle="">See below for more info</a>.
											</li>
											<li class="py-2">Quick Search structure comes in a few layers.
												<ul class="pt-3">
													<li class="py-2">Main Wrapper</li>
													<li class="py-2">Toggle Button</li>
													<li class="py-2">Main Content Element</li>
													<li class="py-2">Main Content Inner Wrapper</li>
													<li class="py-2">Input Form</li>
													<li class="py-2">Search Suggestion</li>
													<li class="py-2">Search Preference</li>
													<li class="py-2">Search Advanced Options</li>
													<li class="py-2">Search Results</li>
													<li class="py-2">Empty Search</li>
												</ul>
											</li>
											<li class="py-2">Each search UI HTML element within the main wrapper can be identified by the
												<code>data-kt-search-element</code>HTML attribute with a specific value. For example,
												<code>data-kt-search-element="toggle"</code>indicates that the current HTML element is a Toggle Button.
												<a href="#options" data-kt-scroll-toggle="">See below for more info</a>.
											</li>
											<li class="py-2">Quick Search uses our extended Bootstrap's utility classes for styling.</li>
											<li class="py-2">Quick Search instances can also be controlled programmatically.
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
										<a href="#basic" data-kt-scroll-toggle=""></a>Basic Layout Example
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">Here's a basic example of our Quick Search.</div>
									<!--end::Block-->
									<!--begin::Notice-->
									<div class="py-5">
										<!--begin::Information-->
										<div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-3x svg-icon-warning me-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Description-->
											<div class="text-gray-700 fw-bold fs-6">In this demo, we're simulating the search results by randomly showing and hiding the search results layer on keypress within the input field.</div>
											<!--end::Description-->
										</div>
										<!--end::Information-->
									</div>
									<!--end::Notice-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="rounded border p-5 p-lg-15">
											<!--begin::Search-->
											<div id="kt_docs_search_handler_basic" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="inline">
												<!--begin::Form-->
												<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
													<!--begin::Hidden input(Added to disable form autocomplete)-->
													<input type="hidden" />
													<!--end::Hidden input-->
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
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
												<!--begin::Wrapper-->
												<div class="py-5">
													<!--begin::Suggestions-->
													<div data-kt-search-element="suggestions">
														<!--begin::Illustration-->
														<div class="text-center px-4 pt-10">
															<img class="mw-100 mh-200px" alt="" src="assets/media/illustrations/presentation.png" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Suggestions-->
													<!--begin::Results-->
													<div data-kt-search-element="results" class="d-none">
														<!--begin::Users-->
														<div class="mh-300px scroll-y me-n5 pe-5">
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/150-1.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
																	<span class="badge badge-light">Art Director</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
																	<span class="badge badge-light">Marketing Analytic</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/blank.png" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Max Smith</span>
																	<span class="badge badge-light">Software Enginer</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/150-4.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
																	<span class="badge badge-light">Web Developer</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
																	<span class="badge badge-light">UI/UX Designer</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
																	<span class="badge badge-light">Head Of Marketing</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/150-8.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
																	<span class="badge badge-light">Software Arcitect</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
																	<span class="badge badge-light">System Admin</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Neil Owen</span>
																	<span class="badge badge-light">Account Manager</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
															<!--begin::User-->
															<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																<!--begin::Avatar-->
																<div class="symbol symbol-35px symbol-circle me-5">
																	<img alt="Pic" src="assets/media/avatars/150-6.jpg" />
																</div>
																<!--end::Avatar-->
																<!--begin::Info-->
																<div class="fw-bold">
																	<span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
																	<span class="badge badge-light">Web Desinger</span>
																</div>
																<!--end::Info-->
															</div>
															<!--end::User-->
														</div>
														<!--end::Users-->
													</div>
													<!--end::Results-->
													<!--begin::Empty-->
													<div data-kt-search-element="empty" class="text-center d-none">
														<!--begin::Message-->
														<div class="fw-bold py-0 mb-10">
															<div class="text-gray-600 fs-3 mb-2">No users found</div>
															<div class="text-gray-400 fs-6">Try to search by username, full name or email...</div>
														</div>
														<!--end::Message-->
														<!--begin::Illustration-->
														<div class="text-center px-4">
															<img class="mw-100 mh-200px" alt="" src="assets/media/illustrations/alert.png" />
														</div>
														<!--end::Illustration-->
													</div>
													<!--end::Empty-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Search-->
										</div>
									</div>
									<!--end::Block-->
									<!--begin::Code-->
									<div class="py-5">
										<!--begin::Highlight-->
										<div class="highlight">
											<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
											<ul class="nav nav-pills" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#kt_highlight_6148575c67ea4" role="tab">JAVASCRIPT</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_6148575c67ea8" role="tab">HTML</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="kt_highlight_6148575c67ea4" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-javascript" style="height:400px">
<code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 6);

        // Hide recently viewed
        suggestionsElement.classList.add("d-none");

        if (number === 3) {
            // Hide results
            resultsElement.classList.add("d-none");
            // Show empty message
            emptyElement.classList.remove("d-none");
        } else {
            // Show results
            resultsElement.classList.remove("d-none");
            // Hide empty message
            emptyElement.classList.add("d-none");
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    suggestionsElement.classList.remove("d-none");
    // Hide results
    resultsElement.classList.add("d-none");
    // Hide empty message
    emptyElement.classList.add("d-none");
}

// Input handler
const handleInput = () =&gt; {
    // Select input field
    const inputField = element.querySelector("[data-kt-search-element="input"]");

    // Handle keyboard press event
    inputField.addEventListener("keydown", e =&gt; {
        // Only apply action to Enter key press
        if(e.key === "Enter"){
            e.preventDefault(); // Stop form from submitting
        }
    });
}

// Elements
element = document.querySelector('#kt_docs_search_handler_basic');

if (!element) {
    return;
}

wrapperElement = element.querySelector("[data-kt-search-element="wrapper"]");
suggestionsElement = element.querySelector("[data-kt-search-element="suggestions"]");
resultsElement = element.querySelector("[data-kt-search-element="results"]");
emptyElement = element.querySelector("[data-kt-search-element="empty"]");

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on("kt.search.process", processs);

// Clear handler
searchObject.on("kt.search.clear", clear);

// Handle select
KTUtil.on(element, "[data-kt-search-element="customer"]", "click", function() {
    //modal.hide();
});

// Handle input enter keypress
handleInput();</code>
</pre>
													</div>
												</div>
												<div class="tab-pane fade" id="kt_highlight_6148575c67ea8" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div
    id="kt_docs_search_handler_basic"

    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="true"
    data-kt-search-layout="inline"&gt;

    &lt;!--begin::Input Form--&gt;
    &lt;form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off"&gt;
        &lt;!--begin::Hidden input(Added to disable form autocomplete)--&gt;
        &lt;input type="hidden"/&gt;
        &lt;!--end::Hidden input--&gt;

        &lt;!--begin::Icon--&gt;
            &lt;!--begin::Svg Icon | path: icons/duotune/general/gen021.svg--&gt;
        &lt;!--end::Icon--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type="text" class="form-control form-control-lg form-control-solid px-15"
            name="search"
            value=""
            placeholder="Search by username, full name or email..."
            data-kt-search-element="input"/&gt;
        &lt;!--end::Input--&gt;

        &lt;!--begin::Spinner--&gt;
        &lt;span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner"&gt;
            &lt;span class="spinner-border h-15px w-15px align-middle text-gray-400"&gt;&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end::Spinner--&gt;

        &lt;!--begin::Reset--&gt;
        &lt;span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
            data-kt-search-element="clear"&gt;

            &lt;!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg--&gt;
        &lt;/span&gt;
        &lt;!--end::Reset--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;

    &lt;!--begin::Wrapper--&gt;
    &lt;div class="py-5"&gt;
        &lt;!--being::Search suggestion--&gt;
        &lt;div data-kt-search-element="suggestions"&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Suggestion wrapper--&gt;

        &lt;!--begin::Search results--&gt;
        &lt;div data-kt-search-element="results" class="d-none"&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search results--&gt;

        &lt;!--begin::Empty search--&gt;
        &lt;div data-kt-search-element="empty" class="text-center d-none"&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Empty search--&gt;
    &lt;/div&gt;
    &lt;!--end::Wrapper--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code>
</pre>
													</div>
												</div>
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
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="menu">
										<a href="#menu" data-kt-scroll-toggle=""></a>Menu Layout Example
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">This demo combines the Quick Search component with our menu component for unique interactive dropdown search UI component.</div>
									<!--end::Block-->
									<!--begin::Notice-->
									<div class="py-5">
										<!--begin::Information-->
										<div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-3x svg-icon-warning me-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Description-->
											<div class="text-gray-700 fw-bold fs-6">In this demo, we're simulating the search results by randomly showing and hiding the search results layer on keypress within the input field.</div>
											<!--end::Description-->
										</div>
										<!--end::Information-->
									</div>
									<!--end::Notice-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="rounded border p-5 p-lg-15">
											<!--begin::Search-->
											<div id="kt_docs_search_handler_menu" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="true" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true">
												<!--begin::Search toggle-->
												<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
													<div class="btn btn-primary">Toggle Quick Search</div>
												</div>
												<!--end::Search toggle-->
												<!--begin::Menu-->
												<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
													<!--begin::Wrapper-->
													<div data-kt-search-element="wrapper">
														<!--begin::Form-->
														<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
															<!--end::Input-->
															<!--begin::Spinner-->
															<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>
															<!--end::Spinner-->
															<!--begin::Reset-->
															<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
															<!--end::Reset-->
															<!--begin::Toolbar-->
															<div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
																<!--begin::Preferences toggle-->
																<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
																	<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																			<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Preferences toggle-->
																<!--begin::Advanced search toggle-->
																<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Advanced search toggle-->
															</div>
															<!--end::Toolbar-->
														</form>
														<!--end::Form-->
														<!--begin::Separator-->
														<div class="separator border-gray-200 mb-6"></div>
														<!--end::Separator-->
														<!--begin::Recently viewed-->
														<div data-kt-search-element="results" class="d-none">
															<!--begin::Items-->
															<div class="scroll-y mh-200px mh-lg-325px">
																<!--begin::Category title-->
																<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<img src="assets/media/avatars/150-1.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Karina Clark</span>
																		<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<img src="assets/media/avatars/150-3.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Olivia Bold</span>
																		<span class="fs-7 fw-bold text-muted">Software Engineer</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<img src="assets/media/avatars/150-8.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Ana Clark</span>
																		<span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Nick Pitola</span>
																		<span class="fs-7 fw-bold text-muted">Art Director</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<img src="assets/media/avatars/150-12.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Edward Kulnic</span>
																		<span class="fs-7 fw-bold text-muted">System Administrator</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Category title-->
																<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Company Rbranding</span>
																		<span class="fs-7 fw-bold text-muted">UI Design</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Company Re-branding</span>
																		<span class="fs-7 fw-bold text-muted">Web Development</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Business Analytics App</span>
																		<span class="fs-7 fw-bold text-muted">Administration</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
																		<span class="fs-7 fw-bold text-muted">Marketing</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column justify-content-start fw-bold">
																		<span class="fs-6 fw-bold">Tower Group Website</span>
																		<span class="fs-7 fw-bold text-muted">Google Adwords</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Category title-->
																<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
																					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
																		<span class="fs-7 fw-bold text-muted">#45670</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																					<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																					<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																					<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
																		<span class="fs-7 fw-bold text-muted">#45690</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																					<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																					<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
																		<span class="fs-7 fw-bold text-muted">#21090</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																					<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
																		<span class="fs-7 fw-bold text-muted">#34560</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Recently viewed-->
														<!--begin::Recently viewed-->
														<div class="mb-4" data-kt-search-element="main">
															<!--begin::Heading-->
															<div class="d-flex flex-stack fw-bold mb-4">
																<!--begin::Label-->
																<span class="text-muted fs-6 me-2">Recently Searched:</span>
																<!--end::Label-->
															</div>
															<!--end::Heading-->
															<!--begin::Items-->
															<div class="scroll-y mh-200px mh-lg-325px">
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
																					<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
																					<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
																		<span class="fs-7 text-muted fw-bold">#45789</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
																					<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
																		<span class="fs-7 text-muted fw-bold">#84050</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
																					<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
																		<span class="fs-7 text-muted fw-bold">#84250</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																					<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
																		<span class="fs-7 text-muted fw-bold">#67945</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																					<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
																		<span class="fs-7 text-muted fw-bold">#84250</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
																					<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
																		<span class="fs-7 text-muted fw-bold">#45690</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-40px me-4">
																		<span class="symbol-label bg-light">
																			<!--SVG file not found: icons/duotune/graphs/gra002.svg
-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="d-flex flex-column">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
																		<span class="fs-7 text-muted fw-bold">#24005</span>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Item-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Recently viewed-->
														<!--begin::Empty-->
														<div data-kt-search-element="empty" class="text-center d-none">
															<!--begin::Icon-->
															<div class="pt-10 pb-10">
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
													<!--begin::Preferences-->
													<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
														<!--begin::Heading-->
														<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<!--begin::Radio group-->
															<div class="nav-group nav-group-fluid">
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="users" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="orders" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="type" value="projects" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Radio group-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<!--begin::Radio group-->
															<div class="nav-group nav-group-fluid">
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
																</label>
																<!--end::Option-->
																<!--begin::Option-->
																<label>
																	<input type="radio" class="btn-check" name="attachment" value="any" />
																	<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
																</label>
																<!--end::Option-->
															</div>
															<!--end::Radio group-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-5">
															<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
																<option value="next">Within the next</option>
																<option value="last">Within the last</option>
																<option value="between">Between</option>
																<option value="on">On</option>
															</select>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-8">
															<!--begin::Col-->
															<div class="col-6">
																<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-6">
																<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
																	<option value="days">Days</option>
																	<option value="weeks">Weeks</option>
																	<option value="months">Months</option>
																	<option value="years">Years</option>
																</select>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-white fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
															<a href="../../pages/search/horizontal.php" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Preferences-->
													<!--begin::Preferences-->
													<form data-kt-search-element="preferences" class="pt-1 d-none">
														<!--begin::Heading-->
														<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="pb-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
																<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end pt-7">
															<button type="reset" class="btn btn-sm btn-white fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
															<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Preferences-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::Search-->
										</div>
									</div>
									<!--end::Block-->
									<!--begin::Code-->
									<div class="py-5">
										<!--begin::Highlight-->
										<div class="highlight">
											<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
											<ul class="nav nav-pills" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#kt_highlight_6148575c69f6f" role="tab">JAVASCRIPT</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_6148575c69f74" role="tab">HTML</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="kt_highlight_6148575c69f6f" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-javascript" style="height:400px">
<code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 3);

        // Hide recently viewed
        mainElement.classList.add("d-none");

        if (number === 3) {
            // Hide results
            resultsElement.classList.add("d-none");
            // Show empty message
            emptyElement.classList.remove("d-none");
        } else {
            // Show results
            resultsElement.classList.remove("d-none");
            // Hide empty message
            emptyElement.classList.add("d-none");
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    mainElement.classList.remove("d-none");
    // Hide results
    resultsElement.classList.add("d-none");
    // Hide empty message
    emptyElement.classList.add("d-none");
}

var handlePreferences = function() {
    // Preference show handler
    preferencesShowElement.addEventListener("click", function() {
        wrapperElement.classList.add("d-none");
        preferencesElement.classList.remove("d-none");
    });

    // Preference dismiss handler
    preferencesDismissElement.addEventListener("click", function() {
        wrapperElement.classList.remove("d-none");
        preferencesElement.classList.add("d-none");
    });
}

var handleAdvancedOptionsForm = function() {
    // Show
    advancedOptionsFormShowElement.addEventListener("click", function() {
        wrapperElement.classList.add("d-none");
        advancedOptionsFormElement.classList.remove("d-none");
    });

    // Cancel
    advancedOptionsFormCancelElement.addEventListener("click", function() {
        wrapperElement.classList.remove("d-none");
        advancedOptionsFormElement.classList.add("d-none");
    });

    // Search
    advancedOptionsFormSearchElement.addEventListener("click", function() {

    });
}

// Elements
element = document.querySelector("#kt_docs_search_handler_menu");

if (!element) {
    return;
}

wrapperElement = element.querySelector("[data-kt-search-element="wrapper"]");
formElement = element.querySelector("[data-kt-search-element="form"]");
mainElement = element.querySelector("[data-kt-search-element="main"]");
resultsElement = element.querySelector("[data-kt-search-element="results"]");
emptyElement = element.querySelector("[data-kt-search-element="empty"]");

preferencesElement = element.querySelector("[data-kt-search-element="preferences"]");
preferencesShowElement = element.querySelector("[data-kt-search-element="preferences-show"]");
preferencesDismissElement = element.querySelector("[data-kt-search-element="preferences-dismiss"]");

advancedOptionsFormElement = element.querySelector("[data-kt-search-element="advanced-options-form"]");
advancedOptionsFormShowElement = element.querySelector("[data-kt-search-element="advanced-options-form-show"]");
advancedOptionsFormCancelElement = element.querySelector("[data-kt-search-element="advanced-options-form-cancel"]");
advancedOptionsFormSearchElement = element.querySelector("[data-kt-search-element="advanced-options-form-search"]");

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on("kt.search.process", processs);

// Clear handler
searchObject.on("kt.search.clear", clear);

// Custom handlers
handlePreferences();
handleAdvancedOptionsForm();</code>
</pre>
													</div>
												</div>
												<div class="tab-pane fade" id="kt_highlight_6148575c69f74" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div id="kt_docs_search_handler_menu"
    class="d-flex align-items-stretch"

    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="true"
    data-kt-search-layout="menu"

    data-kt-menu-trigger="auto"
    data-kt-menu-overflow="false"
    data-kt-menu-permanent="true"
    data-kt-menu-placement="bottom-start"&gt;

    &lt;!--begin::Search toggle--&gt;
    &lt;div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle"&gt;
        &lt;div class="btn btn-primary"&gt;
            Toggle Quick Search
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Search toggle--&gt;

    &lt;!--begin::Menu--&gt;
    &lt;div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px"&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div data-kt-search-element="wrapper"&gt;
        &lt;!--begin::Form--&gt;
            &lt;form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off"&gt;
                &lt;!--begin::Icon--&gt;
                    &lt;!--begin::Svg Icon | path: icons/duotune/general/gen021.svg--&gt;
                &lt;!--end::Icon--&gt;

                &lt;!--begin::Input--&gt;
                &lt;input type="text"
                    class="form-control form-control-flush ps-10"
                    name="search"
                    value=""
                    placeholder="Search..."
                    data-kt-search-element="input"/&gt;
                &lt;!--end::Input--&gt;

                &lt;!--begin::Spinner--&gt;
                &lt;span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                    data-kt-search-element="spinner"&gt;
                    &lt;span class="spinner-border h-15px w-15px align-middle text-gray-400"&gt;&lt;/span&gt;
                &lt;/span&gt;
                &lt;!--end::Spinner--&gt;

                &lt;!--begin::Reset--&gt;
                &lt;span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                    data-kt-search-element="clear"&gt;
                    &lt;!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg--&gt;
                &lt;/span&gt;
                &lt;!--end::Reset--&gt;

                &lt;!--begin::Toolbar--&gt;
                &lt;div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar"&gt;
                    &lt;!--begin::Preferences toggle--&gt;
                    &lt;div data-kt-search-element="preferences-show"
                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
                        data-bs-toggle="tooltip"
                        title="Show search preferences"&gt;
                        &lt;!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Preferences toggle--&gt;

                    &lt;!--begin::Advanced search toggle--&gt;
                    &lt;div data-kt-search-element="advanced-options-form-show"
                        class="btn btn-icon w-20px btn-sm btn-active-color-primary"
                        data-bs-toggle="tooltip"
                        title="Show more search options"&gt;
                        &lt;!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg--&gt;
                    &lt;/div&gt;
                    &lt;!--end::Advanced search toggle--&gt;
                &lt;/div&gt;
                &lt;!--end::Toolbar--&gt;
            &lt;/form&gt;
            &lt;!--end::Form--&gt;

            &lt;!--begin::Search results--&gt;
            &lt;div data-kt-search-element="results" class="d-none"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Search results--&gt;

            &lt;!--begin::Main content element--&gt;
            &lt;div data-kt-search-element="main"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Main content element--&gt;

            &lt;!--begin::Empty search--&gt;
            &lt;div data-kt-search-element="empty" class="text-center d-none"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Empty search--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Search Advanced Options--&gt;
        &lt;div data-kt-search-element="advanced-options-form"&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search Advanced Options--&gt;

        &lt;!--begin::Search Preference--&gt;
        &lt;div data-kt-search-element="preferences"&gt;
            ...
        &lt;/div&gt;
        &lt;!--end::Search Preference--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code>
</pre>
													</div>
												</div>
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
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="responsive">
										<a href="#responsive" data-kt-scroll-toggle=""></a>Responsive Layout Example
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">This demo showcases Search UI's responsive solution. It displays as a full inline input field on large screens, and converts into an icon toggle button on smaller screens.</div>
									<!--end::Block-->
									<!--begin::Notice-->
									<div class="py-5">
										<!--begin::Information-->
										<div class="d-flex align-items-center rounded py-5 px-5 bg-light-warning">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
											<span class="svg-icon svg-icon-3x svg-icon-warning me-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Description-->
											<div class="text-gray-700 fw-bold fs-6">In this demo, we're simulating the search results by randomly showing and hiding the search results layer on keypress within the input field.</div>
											<!--end::Description-->
										</div>
										<!--end::Information-->
									</div>
									<!--end::Notice-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="rounded border p-5 p-lg-15">
											<!--begin::Search-->
											<div id="kt_docs_search_handler_responsive" class="d-flex align-items-center w-lg-400px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
												<!--begin::Tablet and mobile search toggle-->
												<div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
													<div class="btn btn-icon btn-active-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
												</div>
												<!--end::Tablet and mobile search toggle-->
												<!--begin::Form-->
												<form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
													<!--begin::Hidden input(Added to disable form autocomplete)-->
													<input type="hidden" />
													<!--end::Hidden input-->
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid ps-14" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
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
												<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
													<!--begin::Wrapper-->
													<div data-kt-search-element="wrapper">
														<!--begin::Categories-->
														<div data-kt-search-element="categories" class="d-flex overflow-auto position-relative" data-kt-buttons="true">
															<!--begin::Category items-->
															<a class="btn btn-light-primary active rounded-pill me-1 py-2 px-4" data-kt-search-category="all">All</a>
															<a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="targets">Targets</a>
															<a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="projects">Projects</a>
															<a class="btn btn-light-primary rounded-pill me-1 py-2 px-4" data-kt-search-category="users">Users</a>
															<!--end::Category items-->
															<!--begin::Preferences toggle-->
															<div data-kt-search-element="preferences-show" class="btn btn-icon btn-sm btn-active-color-primary ms-auto">
																<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
																<span class="svg-icon svg-icon-2x">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
																		<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																		<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																		<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</div>
															<!--end::Preferences toggle-->
														</div>
														<!--end::Categories-->
														<!--begin::Separator-->
														<div class="separator border-gray-200 my-6"></div>
														<!--end::Separator-->
														<!--begin::Recently viewed-->
														<div data-kt-search-element="results" class="d-none">
															<!--begin::Items-->
															<div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
																<!--begin::Category title-->
																<h3 class="fs-4 fw-bold m-0 pb-5" data-kt-search-element="category-title">Targets</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
																		<span class="badge badge-light">UI Design</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Company Re-branding</span>
																		<span class="badge badge-light">Web Development</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Business Analytics App</span>
																		<span class="badge badge-light">Administration</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/atica.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
																		<span class="badge badge-light">Database Design</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/rgb.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
																		<span class="badge badge-light">Server Setup</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
																		<span class="badge badge-light">Marketing</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="targets">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light">
																			<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Tower Group Website</span>
																		<span class="badge badge-light">Google Adwords</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Category title-->
																<h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Projects</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
																					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
																		<span class="fs-7 text-muted">#45670</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
																					<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
																					<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
																		<span class="fs-7 text-muted">#84250</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																					<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																					<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
																		<span class="fs-7 text-muted">#67945</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
																					<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
																		<span class="fs-7 text-muted">#24005</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																					<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																					<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																					<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
																		<span class="fs-7 text-muted">#45690</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																					<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																					<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
																		<span class="fs-7 text-muted">#21090</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="projects">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																					<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
																		<span class="fs-7 text-muted">#34560</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Category title-->
																<h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Users</h3>
																<!--end::Category title-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-1.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Karina Clark</span>
																		<span class="badge badge-light">Marketing Manager</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-3.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
																		<span class="badge badge-light">Software Engineer</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-4.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Sean Wild</span>
																		<span class="badge badge-light">Web Developer</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-6.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Karina Clark</span>
																		<span class="badge badge-light">Google Expert</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-8.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Ana Clark</span>
																		<span class="badge badge-light">UI/UX Designer</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-11.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
																		<span class="badge badge-light">Art Director</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1" data-kt-search-category="users">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<img src="assets/media/avatars/150-12.jpg" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
																		<span class="badge badge-light">System Administrator</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Recently viewed-->
														<!--begin::Recently viewed-->
														<div data-kt-search-element="recently-viewed">
															<!--begin::Heading-->
															<div class="d-flex flex-stack fw-bold">
																<span class="text-muted fs-5 me-2">Recently Viewed:</span>
																<!--begin::Clear-->
																<div data-kt-search-element="recently-viewed-clear" class="btn btn-link fw-6">Clear</div>
																<!--end::Clear-->
															</div>
															<!--end::Heading-->
															<!--begin::Items-->
															<div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
																					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
																		<span class="fs-7 text-muted">#45670</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="black" />
																					<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="black" />
																					<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
																		<span class="fs-7 text-muted">#84250</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																					<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																					<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
																		<span class="fs-7 text-muted">#67945</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
																					<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
																		<span class="fs-7 text-muted">#24005</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																					<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																					<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																					<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
																		<span class="fs-7 text-muted">#45690</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																					<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																					<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
																		<span class="fs-7 text-muted">#21090</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
																<!--begin::Item-->
																<a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																					<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="fw-bold">
																		<span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
																		<span class="fs-7 text-muted">#34560</span>
																	</div>
																	<!--end::Title-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Recently viewed-->
														<!--begin::Empty-->
														<div data-kt-search-element="empty" class="text-center d-none">
															<!--begin::Message-->
															<div class="text-muted fw-bold fs-5 py-10">No result found</div>
															<!--end::Message-->
															<!--begin::Illustration-->
															<div class="text-center px-4">
																<img src="assets/media/illustrations/alert-2.png" alt="" class="mw-100 mh-200px" />
															</div>
															<!--end::Illustration-->
														</div>
														<!--end::Empty-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Preferences-->
													<div data-kt-search-element="preferences" class="d-none">
														<!--begin::Heading-->
														<h3 class="fw-bold text-dark pb-10 m-0">Search Preferences</h3>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="pb-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
																<span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Projects</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
																<span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Targets</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
																<span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Affiliate Programs</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
																<span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Referrals</span>
																<input class="form-check-input" type="checkbox" value="1" checked="checked" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="py-4 border-bottom">
															<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
																<span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Users</span>
																<input class="form-check-input" type="checkbox" value="1" />
															</label>
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end pt-10">
															<button type="reset" class="btn btn-white btn-active-light-primary me-2 px-6" data-kt-search-element="preferences-dismiss">Cancel</button>
															<button type="submit" class="btn btn-primary px-6">Save Changes</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Preferences-->
												</div>
												<!--end::Menu-->
											</div>
											<!--end::Search-->
										</div>
									</div>
									<!--end::Block-->
									<!--begin::Code-->
									<div class="py-5">
										<!--begin::Highlight-->
										<div class="highlight">
											<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
											<ul class="nav nav-pills" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#kt_highlight_6148575c6bf3e" role="tab">JAVASCRIPT</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#kt_highlight_6148575c6bf41" role="tab">HTML</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade show active" id="kt_highlight_6148575c6bf3e" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-javascript" style="height:400px">
<code class="language-javascript">var processs = function(search) {
    var timeout = setTimeout(function() {
        var number = KTUtil.getRandomInt(1, 3);

        // Hide recently viewed
        recentlyViewedElement.classList.add("d-none");

        if (number === 3) {
            // Hide results
            resultsElement.classList.add("d-none");
            // Show empty message
            emptyElement.classList.remove("d-none");
        } else {
            // Show results
            resultsElement.classList.remove("d-none");
            // Hide empty message
            emptyElement.classList.add("d-none");
        }

        // Complete search
        search.complete();
    }, 1500);
}

var clear = function(search) {
    // Show recently viewed
    recentlyViewedElement.classList.remove("d-none");
    // Hide results
    resultsElement.classList.add("d-none");
    // Hide empty message
    emptyElement.classList.add("d-none");
}

// Elements
element = document.querySelector("#kt_docs_search_handler_responsive");

if (!element) {
    return;
}

wrapperElement = element.querySelector("[data-kt-search-element="wrapper"]");
recentlyViewedElement = element.querySelector("[data-kt-search-element="recently-viewed"]");
resultsElement = element.querySelector("[data-kt-search-element="results"]");
emptyElement = element.querySelector("[data-kt-search-element="empty"]");
preferencesElement = element.querySelector("[data-kt-search-element="preferences"]");
preferencesShowElement = element.querySelector("[data-kt-search-element="preferences-show"]");
preferencesDismissElement = element.querySelector("[data-kt-search-element="preferences-dismiss"]");

// Initialize search handler
searchObject = new KTSearch(element);

// Search handler
searchObject.on("kt.search.process", processs);

// Clear handler
searchObject.on("kt.search.clear", clear);

// Preference show handler
preferencesShowElement.addEventListener("click", function() {
    wrapperElement.classList.add("d-none");
    preferencesElement.classList.remove("d-none");
});

// Preference dismiss handler
preferencesDismissElement.addEventListener("click", function() {
    wrapperElement.classList.remove("d-none");
    preferencesElement.classList.add("d-none");
});
}</code>
</pre>
													</div>
												</div>
												<div class="tab-pane fade" id="kt_highlight_6148575c6bf41" role="tabpanel">
													<div class="highlight-code">
														<pre class="language-html" style="height:400px">
<code class="language-html">&lt;!--begin::Main wrapper--&gt;
&lt;div
    id="kt_docs_search_handler_responsive"
    class="d-flex align-items-center w-lg-400px"

    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"
    data-kt-search-layout="menu"
    data-kt-search-responsive="lg"

    data-kt-menu-trigger="auto"
    data-kt-menu-permanent="true"
    data-kt-menu-placement="bottom-start"&gt;

    &lt;!--begin::Tablet and mobile search toggle--&gt;
    &lt;div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center"&gt;
        &lt;div class="btn btn-icon btn-active-light-primary"&gt;
            &lt;?php echo Theme::getSvgIcon("icons/duotune/general/gen021.svg", "svg-icon-1")?&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!--end::Tablet and mobile search toggle--&gt;

    &lt;!--begin::Form--&gt;
    &lt;form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off"&gt;
        &lt;!--begin::Hidden input(Added to disable form autocomplete)--&gt;
        &lt;input type="hidden"/&gt;
        &lt;!--end::Hidden input--&gt;

        &lt;!--begin::Icon--&gt;
        &lt;?php echo Theme::getSvgIcon("icons/duotune/general/gen021.svg", "svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5")?&gt;
        &lt;!--end::Icon--&gt;

        &lt;!--begin::Input--&gt;
        &lt;input type="text" class="form-control form-control-solid ps-14" name="search" value="" placeholder="Search..." data-kt-search-element="input"/&gt;
        &lt;!--end::Input--&gt;

        &lt;!--begin::Spinner--&gt;
        &lt;span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-6" data-kt-search-element="spinner"&gt;
            &lt;span class="spinner-border h-15px w-15px align-middle text-gray-400"&gt;&lt;/span&gt;
        &lt;/span&gt;
        &lt;!--end::Spinner--&gt;

        &lt;!--begin::Reset--&gt;
        &lt;span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear"&gt;
            &lt;?php echo Theme::getSvgIcon("icons/duotune/arrows/arr061.svg", "svg-icon-2 svg-icon-lg-1 me-0")?&gt;
        &lt;/span&gt;
        &lt;!--end::Reset--&gt;
    &lt;/form&gt;
    &lt;!--end::Form--&gt;

    &lt;!--begin::Menu--&gt;
    &lt;div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden"&gt;
        &lt;!--begin::Wrapper--&gt;
        &lt;div data-kt-search-element="wrapper"&gt;
            &lt;!--begin::Categories--&gt;
            &lt;div data-kt-search-element="categories"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Categories--&gt;

            &lt;!--begin::Search results--&gt;
            &lt;div data-kt-search-element="results" class="d-none"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Search results--&gt;

            &lt;!--begin::Recently viewed--&gt;
            &lt;div data-kt-search-element="recently-viewed"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Recently viewed--&gt;

            &lt;!--begin::Empty search--&gt;
            &lt;div data-kt-search-element="empty" class="text-center d-none"&gt;
                ...
            &lt;/div&gt;
            &lt;!--end::Empty search--&gt;
        &lt;/div&gt;
        &lt;!--end::Wrapper--&gt;

        &lt;!--begin::Preferences--&gt;
        &lt;div data-kt-search-element="preferences"
            ...
        &lt;/div&gt;
        &lt;!--end::Preferences--&gt;
    &lt;/div&gt;
    &lt;!--end::Menu--&gt;
&lt;/div&gt;
&lt;!--end::Main wrapper--&gt;</code>
</pre>
													</div>
												</div>
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
									<div class="py-5">
										<div class="fw-bolder fs-2">Main wrapper HTML Attribute references</div>
									</div>
									<!--end::Block-->
									<!--begin::Block-->
									<div class="py-5">
										<b>Quick Search</b>&#160; uses HTML attributes within the Main Wrapper to configure the frontend logic. Here are the references for each below
									</div>
									<!--end::Block-->
									<!--begin::Table-->
									<div class="py-5">
										<div class="table-responsive border rounded">
											<table class="table table-striped align-top mb-0 g-5">
												<thead>
													<tr class="fs-4 fw-bolder text-dark p-6">
														<th class="min-w-300px">Name</th>
														<th class="min-w-100px">Type</th>
														<th class="min-w-500px">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<code>data-kt-search-keypress</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Enable search on any keyboard keypress. Accepts
															<code>true</code>or
															<code>false</code>values.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-search-enter</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Enable search on any keyboard
															<code>Enter</code>keypress. Accepts
															<code>true</code>or
															<code>false</code>values.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-search-responsive</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>
															<div class="mb-3">Defines the responsive mode for the input field's position. Useful for an inline input field to display itself within a dropdown menu on mobile to save space. Accepts
																<code>sm, md, lg, xl</code>and
																<code>null</code>values.
															</div>For example:
															<code>data-kt-search-responsive="lg"</code>indicates that the Quick Search component input field will be displayed inline with the parent container from
															<code>lg</code>screen sizes and above, and hidden (re-positioned into the dropdown menu) on smaller screens.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-search-min-length</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Defines the number of characters required before the search event is triggered. Accepts
															<code>numeric</code>values.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-search-layout</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Defines Quick Search's layout type. Accepts
															<code>inline</code>and
															<code>menu</code>values.
														</td>
													</tr>
													<tr>
														<td>
															<code>data-kt-search-show-on-focus</code>
														</td>
														<td>
															<code class="ms-0">optional</code>
														</td>
														<td>Enables menu dropdown to show when the input field detects a focus event. Accepts
															<code>true</code>or
															<code>false</code>values.
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!--end::Table-->
									<!--begin::Block-->
									<div class="py-5">
										<div class="fw-bolder fs-2">HTML Attribute Identifiers references</div>
									</div>
									<!--end::Block-->
									<!--begin::Block-->
									<div class="py-5">Quick Search also use HTML attributes to identify the HTML elements that are used within the Main Wrapper. Here are the references for each below</div>
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
															<code>data-kt-search-element</code>
														</td>
														<td>
															<code class="ms-0">mandatory</code>
														</td>
														<td>
															<div class="mb-3">Identifies the HTML element as a specific Quick Search element. All Quick Search elements must be added within the Main Wrapper. The main wrapper does not have a specific attribute to identify it. It's simply a wrapping
																<code>div</code>element that wraps all Quick Search inner elements.
															</div>
															<div class="mb-3">Here are the list of Quick Search elements available:
																<ul class="pt-3">
																	<li class="py-2">
																		<code>form</code>
																	</li>
																	<li class="py-2">
																		<code>input</code>
																	</li>
																	<li class="py-2">
																		<code>spinner</code>
																	</li>
																	<li class="py-2">
																		<code>clear</code>
																	</li>
																	<li class="py-2">
																		<code>toggle</code>
																	</li>
																	<li class="py-2">
																		<code>content</code>
																	</li>
																	<li class="py-2">
																		<code>toolbar</code>
																	</li>
																	<li class="py-2">
																		<code>empty</code>
																	</li>
																	<li class="py-2">
																		<code>results</code>
																	</li>
																	<li class="py-2">
																		<code>suggestions</code>
																	</li>
																</ul>
															</div>
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-html">
<code class="language-html">&lt;div&gt;
    &lt;div data-kt-search-element="form"&gt;
        ...
        &lt;input data-kt-search-element="input" /&gt;
        ...
    &lt;/div&gt;
&lt;/div&gt;</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
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
								<div class="py-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="methods">
										<a href="#methods" data-kt-scroll-toggle=""></a>Methods
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">The following are Search UI's functionality methods for more control.</div>
									<!--end::Block-->
									<!--begin::Table-->
									<div class="py-2">
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
															<code>getInstance(DOMElement element)</code>
														</td>
														<td>Get the Search UI instance that has been created and returns the Search UI DOM element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var searchElement = document.querySelector("#kt_search_example_1");
var search = KTSearch.getInstance(searchElement);</code>
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
															<code>new KTSearch(DOMElement element)</code>
														</td>
														<td>Initialize a new Quick Search control.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var searchElement = document.querySelector("#kt_search_control");
var search = new KTSearch(searchElement);</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>show</code>
														</td>
														<td>Triggers the menu to show. Only applicable when
															<code>data-kt-search-layout</code>is set to
															<code>menu</code>
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.show();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>hide</code>
														</td>
														<td>Triggers the menu to hide. Only applicable when
															<code>data-kt-search-layout</code>is set to
															<code>menu</code>
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.hide();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>update</code>
														</td>
														<td>Updates the menu responsiveness. Only applicable when
															<code>data-kt-search-layout</code>is set to
															<code>menu</code>
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.update();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>search</code>
														</td>
														<td>Triggers the search event to begin searching.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.search();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>complete</code>
														</td>
														<td>Triggers the completed search event.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.complete();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>clear</code>
														</td>
														<td>Clears the search input field and resets the Search UI.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.clear();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>isProcessing</code>
														</td>
														<td>Returns
															<code>true</code>or
															<code>false</code>to indicate if there's a search event still running.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.isProcessing();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getQuery</code>
														</td>
														<td>Returns the Search UI input string.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getQuery();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getMenu</code>
														</td>
														<td>Returns the Search UI menu element. Only applicable when
															<code>data-kt-search-layout</code>is set to
															<code>menu</code>
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getMenu();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getFormElement</code>
														</td>
														<td>Returns the Search UI form element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getFormElement();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getInputElement</code>
														</td>
														<td>Returns the Search UI input field element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getInputElement();</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>getContentElement</code>
														</td>
														<td>Returns the Search UI content element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getContentElement();</code>
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
														<td>Returns the Search UI element.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">search.getElement();</code>
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
								<!--begin::Section-->
								<div class="pt-10">
									<!--begin::Heading-->
									<h1 class="anchor fw-bolder mb-5" data-kt-scroll-offset="85" id="events">
										<a href="#events" data-kt-scroll-toggle=""></a>Events
									</h1>
									<!--end::Heading-->
									<!--begin::Block-->
									<div class="py-5">Below are few events for hooking into Quick Search's functionality.</div>
									<!--end::Block-->
									<!--begin::Table-->
									<div class="pt-2 pb-5">
										<!--begin::Table wrapper-->
										<div class="table-responsive border rounded">
											<!--begin::Table-->
											<table class="table table-striped align-middle mb-0 g-5">
												<!--begin::Head-->
												<thead>
													<tr class="fs-4 fw-bolder text-dark p-6">
														<th class="min-w-300px">Event Type</th>
														<th class="min-w-500px">Description</th>
													</tr>
												</thead>
												<!--end::Head-->
												<!--begin::Body-->
												<tbody>
													<tr>
														<td>
															<code>kt.search.process</code>
														</td>
														<td>This event fires when search begins processing.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var searchElement = document.querySelector("#kt_search_example_1");
var search = KTSearch.getInstance(searchElement);
search.on("kt.search.process", function() {
    // console.log("kt.search.process event is fired");
});</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>kt.search.clear</code>
														</td>
														<td>This event fires when search input field is about to be cleared.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var searchElement = document.querySelector("#kt_search_example_1");
var search = KTSearch.getInstance(searchElement);
search.on("kt.search.clear", function() {
    // console.log("kt.search.clear event is fired");
});</code>
</pre>
																	</div>
																</div>
																<!--end::Highlight-->
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<code>kt.search.cleared</code>
														</td>
														<td>This event fires when search input field has been cleared.
															<div class="pt-3">
																<!--begin::Highlight-->
																<div class="highlight">
																	<button class="highlight-copy btn" data-bs-toggle="tooltip" title="Copy code">copy</button>
																	<div class="highlight-code">
																		<pre class="language-javascript">
<code class="language-javascript">var searchElement = document.querySelector("#kt_search_example_1");
var search = KTSearch.getInstance(searchElement);
search.on("kt.search.cleared", function() {
    // console.log("kt.search.cleared event is fired");
});</code>
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
	<script src="assets/js/custom/documentation/general/search/basic.js"></script>
	<script src="assets/js/custom/documentation/general/search/menu.js"></script>
	<script src="assets/js/custom/documentation/general/search/responsive.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>