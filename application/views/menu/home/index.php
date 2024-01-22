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
	<base href="../">
	<title>Malitra</title>
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="<?= base_url() ?>assets/fav/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url() ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!-- <link rel="stylesheet" href="assets/bwa_assets/css/styles.css" /> -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bwa_assets/css/component/card-product.css" />
	<!--end::Global Stylesheets Bundle-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<!-- swiper.css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<style>
		.modal {
			background-color: transparent !important;
		}

		body {
			font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
			font-size: 14px;
			color: #000;
			margin: 0;
			padding: 0;
		}

		.swiper {
			width: 100%;
			height: 500px;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: fill;
		}

		@media only screen and (max-width: 600px) {

			.ukuran {
				position: absolute;
				left: 0;
				right: 0;
				/* width: ; */
			}

			.play_sub {
				display: flex;
				align-items: center;
				justify-content: center;
				margin-left: 20px;
			}

			.gambar {
				position: relative;
				width: 200px;
				height: 40px;
				top: 20px;
			}

			.judul {
				position: relative;
				top: 20px;
				font-size: 13px;
				font-weight: bold;
				padding-top: 5px;
				padding-left: 0;
				z-index: 1;
			}

			.sub-judul {
				position: relative;
				top: 10px;
				font-size: 7px;
				padding-top: 5px;
				font-weight: bold;
				z-index: 1;
			}

			.logo-bottom {
				margin-top: 20px;
			}

			.get-in-touch {
				margin-top: 50px;
			}
		}

		@media only screen and (min-width: 600px) {

			.ukuran {
				width: 400px;
				margin-bottom: 18px;
			}
		}
	</style>
</head>

<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Header Section-->
		<div class="" id="home" style="z-index:9999;">
			<!--begin::Wrapper-->
			<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom" style="background-color: #67baeb;">
				<!--begin::Header-->
				<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex align-items-center justify-content-between">
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-equal">
								<!--begin::Mobile menu toggle-->
								<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2hx">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mobile menu toggle-->
								<!--begin::Logo image-->
								<a href="../../demo5/dist/landing.html">
									<img alt="Logo" src="<?= base_url() ?>assets/mailtra.webp" class="logo-default h-25px h-lg-30px" />
									<img alt="Logo" src="<?= base_url() ?>assets/mailtra.webp" class="logo-sticky h-20px h-lg-25px" />
								</a>
								<!--end::Logo image-->
							</div>
							<!--end::Logo-->
							<!--begin::Menu wrapper-->
							<div class="d-lg-block" id="kt_header_nav_wrapper">
								<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
									<!--begin::Menu-->
									<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link active py-3 px-4 px-xxl-6 text-dark text-hover-gray-100 fw-bolder" href="<?= base_url('main') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_product') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Products</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_news') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">News</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_gallery') ?>">Gallery</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_testimonial') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Testimonial</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_about') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item">
											<!--begin::Menu link-->
											<a class="menu-link nav-link py-3 px-4 px-xxl-6 text-dark  text-hover-gray-100 fw-bolder" href="<?= base_url('main/menu_contactus') ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Contact US</a>
											<!--end::Menu link-->
										</div>
										<!--end::Menu item-->

									</div>
									<!--end::Menu-->
								</div>
							</div>
							<div class="d-flex align-items-stretch">
								<!--begin::Search-->
								<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
									<!--begin::Search toggle-->
									<div class="d-flex align-items-stretch" data-kt-search-element="toggle" id="kt_header_search_toggle">
										<div class="topbar-item px-3 px-lg-5">
											<i class="bi bi-search fs-3 text-dark text-hover-gray-100"></i>
										</div>
									</div>
									<!--end::Search toggle-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Form-->
											<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
														</g>
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
													<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
																<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
																<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
															</g>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Reset-->

											</form>
											<!--end::Form-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
							</div>
							<!--end::Search-->
							<!--begin::Toolbar-->
							<div class="flex-equal text-end ms-1">
								<!-- <a href="../../demo5/dist/authentication/flows/basic/sign-in.html" class="btn btn-success">Sign In</a> -->
								<img alt="Logo" src="<?= base_url() ?>assets/anniversary.jpeg" class="h-40px h-lg-50px" />
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->

			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Header Section-->


		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid" id="kt_wrapper">

				<!--begin::Content-->
				<div class="d-flex flex-column flex-column-fluid" id="kt_content">
					<!-- Slider main container -->
					<div class="swiper">
						<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
							<!-- Slides -->
							<?php foreach ($jumbotron as $jumbo) : ?>
								<div class="swiper-slide">
									<div class="container position-absolute w-lg-300px h-lg-75px ps-lg-0 ps-sm-0 start-0 bottom-25" style="z-index: 1;">
										<div class="container position-absolute w-lg-300px h-lg-50px w-sm-100px h-sm-50px ps-lg-10 pt-lg-4">
											<h3 class="text-white text-start fs-sm-2 ps-lg-10 judul"><?= $jumbo->title ?></h3>
											<p class="text-white text-start fs-sm-5 ps-lg-10 sub-judul"><?= $jumbo->description ?></p>
										</div>
										<img class="w-lg-500px w-sm-100px gambar" src="<?= base_url() ?>assets/test.png" alt="">
									</div>
									<img class="img-fluid" src="<?= base_url() ?>assets/images/jumbotron/<?= $jumbo->image ?>" alt="">
								</div>
							<?php endforeach; ?>
							<!-- <div class="swiper-slide">
								<div class="container position-absolute w-lg-500px h-lg-75px ps-lg-0 ps-sm-0 start-0 bottom-25" style="z-index: 1;">
									<div class="container position-absolute w-lg-400px h-lg-50px w-sm-100px h-sm-50px ps-lg-10 pt-lg-4">
										<h3 class="text-white text-start fs-sm-2 ps-lg-10 judul">Testing</h3>
										<p class="text-white text-start fs-sm-5 ps-lg-10 sub-judul">Lorem ipsum, dolor sit amet consectetur</p>
									</div>
									<img class="w-lg-500px w-sm-100px gambar" src="<?= base_url() ?>assets/test.png" alt="">
								</div>
								<img class="img-fluid" src="<?= base_url() ?>assets/_171020212758_bendpak slider web_ori.webp" alt="">
							</div>
							<div class="swiper-slide">
								<div class="container position-absolute w-lg-500px h-lg-75px ps-lg-0 ps-sm-0 start-0 bottom-25" style="z-index: 1;">
									<div class="container position-absolute w-lg-400px h-lg-50px w-sm-100px h-sm-50px ps-lg-10 pt-lg-4">
										<h3 class="text-white text-start fs-sm-2 ps-lg-10 judul">Testing</h3>
										<p class="text-white text-start fs-sm-5 ps-lg-10 sub-judul">Lorem ipsum, dolor sit amet</p>
									</div>
									<img class="w-lg-500px w-sm-100px gambar" src="<?= base_url() ?>assets/test.png" alt="">
								</div>
								<img class="img-fluid" src="<?= base_url() ?>assets/_171020213008_procut logo web_ori.webp" alt="">
							</div> -->
						</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>

						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>

						<!-- If we need scrollbar -->
						<div class="swiper-scrollbar"></div>
					</div>

					<!-- Begin::Intro -->
					<!-- begin::Logo Principal -->
					<!--begin::Team Section-->
					<div class="py-2 py-lg-2">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 2}}">
									<!--begin::Item-->
									<?php foreach ($principals as $principal) : ?>
										<div class="text-center">
											<!--begin::Photo-->
											<div class="mx-auto mb-5 d-flex w-200px h-100px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('<?= base_url() ?>assets/images/principal/<?= $principal->image ?>')">
											</div>
											<!--end::Photo-->
										</div>
									<?php endforeach; ?>
									<!--end::Item-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<div class="">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" dat data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_product_slider_prev" data-tns-next-button="#kt_product_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
									<!--begin::Item-->
									<?php foreach ($products_information as $p) : ?>
										<div class="text-center">
											<!-- begin::Photo-->
											<div class="mx-auto img-fluid mb-5 d-flex w-400px h-400px bgi-no-repeat bgi-size-contain bgi-position-center position-relative" id="thumbnail" data-video="<?= $p->link ?>" style="background-image:url('<?= base_url() ?>assets/images/product_information/<?= $p->video ?>')" data-bs-toggle="modal" data-bs-target="#kt_modal_2" data-backdrop="false">
												<div class="ukuran pb-10" style="position:absolute;bottom:0">
													<div class="container h-100px" style="background-color: rgba(13, 9, 9, 0.2);border-radius: 30px 30px 5px 5px;">
														<div class="row d-flex">
															<div class="d-flex flex-row justify-align-content-between align-items-center play_sub">
																<div class="col-md-6">
																	<h3 data-link="<?= ($p->link == null) ? '' : $p->link ?>"><?= $p->title ?></h3>
																</div>
																<div class="col-md-6 col-sm-1 ps-20">
																	<img src="<?= base_url() ?>assets/play_video_1.png" width="130" height="100" alt="">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end::Photo-->
										</div>
									<?php endforeach; ?>
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_slider_prev">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_slider_next">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<!-- PRODUK BAGIAN ATAS -->
					<div class="">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" dat data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_product_second_slider_prev" data-tns-next-button="#kt_product_second_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 2}}">
									<!--begin::Item-->
									<?php foreach ($products as $product) :
										if ($product->position == 1) :
									?>
											<div class="text-center">
												<a href="<?= base_url('main/detail/' . $product->slug) ?>">
													<img src="<?= base_url() ?>assets/images/product/<?= $product->image ?>" alt="" class="w-300px h-200px">
												</a>
												<p class="mt-2"><?= $product->title ?></p>
												<p class="px-10"><?= $product->shortdescription ?><a href=""><span id="dots" class="">... Read More&raquo;</a></p>
											</div>
									<?php endif;
									endforeach; ?>
									<!--end::Item-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_second_slider_prev">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_second_slider_next">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Team Section-->
					<div class="">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" dat data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_product_fourth_slider_prev" data-tns-next-button="#kt_product_fourth_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 2}}">
									<!--begin::Item-->
									<?php foreach ($products as $product) :
										if ($product->position == 2) :
									?>
											<div class="text-center">
												<a href="<?= base_url('main/detail/' . $product->slug) ?>">
													<img src="<?= base_url() ?>assets/images/product/<?= $product->image ?>" alt="" class="w-300px h-200px">
												</a>
												<p class="mt-2"><?= $product->title ?></p>
												<p class="px-10"><?= $product->shortdescription ?><a href="<?= base_url('main/detail/') . $product->slug ?>"><span id="dots" class="">... Read More&raquo;</a></p>
											</div>
									<?php endif;
									endforeach; ?>
									<!--end::Item-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_third_slider_prev">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_third_slider_next">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Team Section-->
					<!--end::Team Section-->
					<div class="">
						<!--begin::Container-->
						<div class="container-fluid">
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="false" data-tns-swipe-angle="false" dat data-tns-speed="2000" data-tns-autoplay="false" data-tns-autoplay-timeout="5000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_product_third_slider_prev" data-tns-next-button="#kt_product_third_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 2}}">
									<!--begin::Item-->
									<?php foreach ($galleries as $gallery) : ?>
										<div class="text-center">
											<img src="<?= base_url() ?>assets/images/gallery/<?= $gallery->image ?>" alt="" class="w-300px h-200px">
										</div>
									<?php endforeach; ?>
									<!--end::Item-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_fourth_slider_prev">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-left.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
								<!--begin::Button-->
								<button class="btn btn-icon btn-active-color-primary" id="kt_product_fourth_slider_next">
									<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-right.svg-->
									<span class="svg-icon svg-icon-3x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Button-->
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Team Section-->
					<!--begin::Team Section-->
					<div class="py-10 py-lg-20">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Heading-->
							<div class="text-center mb-12">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">
									Our Valuable Partners</h3>
								<!--end::Title-->
								<!--begin::Sub-title-->
								<!-- <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer
									to complete, additional costs to
									<br />integrate and test each extra feature creeps up and haunts most of us.
								</div> -->
								<!--end::Sub-title=-->
							</div>
							<!--end::Heading-->
							<!--begin::Slider-->
							<div class="tns tns-default">
								<!--begin::Wrapper-->
								<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="true" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="10000" data-tns-controls="false" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 4}, 992: {items: 3}}">
									<!--begin::Item-->
									<?php foreach ($partners as $partner) : ?>
										<div class="text-center">
											<!--begin::Photo-->
											<div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('<?= base_url() ?>assets/images/partner/<?= $partner->image ?>')"></div>
											<!--end::Photo-->
											<!--begin::Person-->
											<div class="mb-0">
												<!--begin::Name-->
												<a href="#" class="text-dark fw-bolder text-hover-primary fs-3"><?= $partner->title ?></a>
												<!--end::Name-->
												<!--begin::Position-->
												<!-- <div class="text-muted fs-6 fw-bold mt-1">Development Lead</div> -->
												<!--begin::Position-->
											</div>
											<!--end::Person-->
										</div>
									<?php endforeach; ?>
									<!--end::Item-->
								</div>
							</div>
							<!--end::Slider-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Team Section-->
				</div>
				<!--begin::Footer Section-->
				<div class="mb-0">
					<!--begin::Curve top-->
					<!-- <div class="landing-curve landing-dark-color">
						<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
						</svg>
					</div> -->
					<!--end::Curve top-->
					<!--begin::Wrapper-->
					<div class="landing-white-bg pt-20">
						<!--begin::Container-->
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-md-6 ">
									<div class="card shadow-sm" style="border: 2px solid black;">
										<div class="card-body h-lg-550px">
											<p class="position-absolute" style="margin-top: -60px; font-size:40px; background-color:white; padding:0px 10px;">Testimonials</p>
											<form>
												<textarea id="w3review" name="w3review" class=""></textarea>
											</form>
										</div>

									</div>
								</div>
								<div class="col-md-6 get-in-touch">
									<div class="card shadow-sm" style="border: 2px solid black;">
										<div class="card-body">
											<p class="position-absolute" style="margin-top: -60px; font-size:40px; background-color:white; padding:0px 10px;">Get In Touch</p>
											<form>
												<div class="mb-3">
													<label for="company" class="form-label">Nama
														Perusahaan</label>
													<input type="text" class="form-control" id="company" aria-describedby="company" placeholder="Nama perusahaan">
												</div>
												<div class="mb-3">
													<label for="fullname" class="form-label">Nama
														Lengkap</label>
													<input type="text" class="form-control" id="fullname" aria-describedby="fullname" placeholder="Nama lengkap">
												</div>
												<div class="mb-3">
													<label for="nohp" class="form-label">Nomor Ponsel</label>
													<input type="text" class="form-control" id="nohp" aria-describedby="fullname" placeholder="Nomor ponsel">
												</div>
												<div class="mb-3">
													<label for="email" class="form-label">Email</label>
													<input type="text" class="form-control" id="email" aria-describedby="email" placeholder="Email">
												</div>
												<select class="form-select form-select-solid" aria-label="Select example">
													<option>Pilih</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
												<div class="mb-3">
													<label for="message" class="form-label">Pesan</label>
													<textarea class="form-control" id="message" rows="3"></textarea>
												</div>
												<button type="submit" class="btn btn-primary">Kirim<span class="far fa-paper-plane ps-3"></span></button>
											</form>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!--end::Container-->
						<!--begin::Separator-->
						<!-- <div class="landing-dark-separator"></div> -->
						<!--end::Separator-->
						<!--begin::Container-->
						<div class="container-fluid mt-5">
							<div class="row" style="background-color: #67baeb;">
								<div class="col-lg-4 col-sm-12 p-lg-14 p-md-10 p-sm-10 logo-bottom">
									<div class="d-flex justify-content-center">
										<img src="<?= base_url() ?>assets/mailtra.webp" alt="" class="w-300px">
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 mt-3 p-lg-10">
									<div class="row d-flex">
										<div class="d-flex flex-row justify-content-around">
											<div class="col-lg-6 col-md-6 col-sm-12">
												<!--begin::Navs-->
												<div class="d-flex">
													<!--begin::Links-->
													<div class="d-flex fw-bold flex-column">
														<!--begin::Subtitle-->
														<h4 class="fw-bolder mb-6">Company
														</h4>
														<!--end::Subtitle-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">About
															Us</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Contact
															Us</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Blog</a>
														<!--end::Link-->
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12">
												<!--begin::Navs-->
												<div class="d-flex">
													<!--begin::Links-->
													<div class="d-flex fw-bold flex-column">
														<!--begin::Subtitle-->
														<h4 class="fw-bolder text-dark mb-6">Brands
														</h4>
														<!--end::Subtitle-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Baissbarth</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Bendpak</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Procut</a>
														<!--end::Link-->
													</div>
													<!--end::Links-->
												</div>
											</div>

										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 mt-3">
									<div class="row d-flex">
										<div class="d-flex flex-row justify-content-around">
											<div class="col-lg-6 col-md-6 col-sm-12 p-lg-10">
												<!--begin::Navs-->
												<div class="d-flex">
													<!--begin::Links-->
													<div class="d-flex fw-bold flex-column">
														<!--begin::Subtitle-->
														<h4 class="fw-bolder text-dark mb-6">SITE MAP
														</h4>
														<!--end::Subtitle-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Product</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Testimonials</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="text-dark text-hover-primary fs-5 mb-6">Gallery</a>
														<!--end::Link-->
													</div>
													<!--end::Links-->
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 p-lg-10">
												<!--begin::Navs-->
												<div class="d-flex">
													<!--begin::Links-->
													<div class="d-flex fw-bold flex-column ">
														<!--begin::Subtitle-->
														<h4 class="fw-bolder text-dark mb-6">Social Media</h4>
														<!--end::Subtitle-->
														<a href="#" class="mb-6">
															<img src="<?= base_url() ?>assets/media/svg/brand-logos/facebook-4.svg" class="h-20px" alt="" />
															<span class="text-dark text-hover-primary fs-5 mb-6">Facebook</span>
														</a>
														<!--begin::Link-->
														<a href="#" class="mb-6">
															<img src="<?= base_url() ?>assets/media/svg/brand-logos/twitter.svg" class="h-20px" alt="" />
															<span class="text-dark text-hover-primary fs-5 mb-6">Twitter</span>
														</a>
														<!--end::Link-->
														<!--begin::Link-->
														<a href="#" class="mb-6">
															<img src="<?= base_url() ?>assets/media/svg/brand-logos/youtube-play.svg" class="h-20px" alt="" />
															<span class="text-dark text-hover-primary fs-5 mb-6">Youtube</span>
														</a>
														<!--end::Link-->
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Row-->

						<!--end::Copyright-->
						<!--begin::Menu-->
						<!-- <ul
									class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank"
											class="menu-link px-2">About</a>
									</li>
									<li class="menu-item mx-5">
										<a href="https://keenthemes.com/support" target="_blank"
											class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul> -->
						<!--end::Menu-->
						<!-- </div> -->
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--end::Content-->
			<!--begin::Footer-->
			<!--end::Footer-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->



	</div>
	<!--end::Modal - Upgrade plan-->
	<!--end::Modals-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--end::Main-->

	<!-- End::Modal -->
	<div class="modal bg-white fade" tabindex="-1" id="kt_modal_2">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class=" modal-content shadow-none">
				<div class="modal-header">
					<h5 class="modal-title"></h5>
					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" id="close" data-bs-dismiss="modal" aria-label="Close">
						<span><i class="far fa-times-circle"></i> </span>
					</div>
				</div>

				<div class="modal-body">
					<div class="table-responsive">
						<table id="tablesearch" class="table table-bordered table-striped" style="width:100%">
							<thead>
								<tr>
									<iframe id="iframe" width="765px" height="400" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End::Modal -->
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?= base_url() ?>assets/js/custom/landing.js"></script>
	<!-- <script src="<?= base_url() ?>assets/js/custom/pages/company/pricing.js"></script> -->
	<script src="<?= base_url() ?>assets/js/custom/widgets.js"></script>
	<script src="<?= base_url() ?>assets/js/custom/apps/chat/chat.js"></script>
	<script src="<?= base_url() ?>assets/js/custom/modals/create-app.js"></script>
	<script src="<?= base_url() ?>assets/js/custom/modals/upgrade-plan.js"></script>
	<!--end::Page Custom Javascript-->
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/EaselPlugin.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/CustomEase.min.js"></script>
	<!-- swiper.js -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<!--end::Javascript-->
	<script>
		const swiper = new Swiper('.swiper', {
			spaceBetween: 100,
			centeredSlides: true,
			loop: true,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			effect: "fade",
			fadeEffect: {
				crossFade: true
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			edgeSwipeDetection: true,
		});

		$(document).on('click', '#thumbnail', function() {
			let video = $(this).data('video')
			let table = $('#iframe').attr('src', video)
			console.log(table)

		})

		$(document).on('click', '#close', () => {
			$('#iframe').attr('src', null);
		})

		autoPlayYouTubeModal();

		//FUNCTION TO GET AND AUTO PLAY YOUTUBE VIDEO FROM DATATAG
		function autoPlayYouTubeModal() {
			var trigger = $("body").find('[data-toggle="modal"]');
			trigger.click(function() {
				var theModal = $(this).data("target"),
					videoSRC = $(this).attr("data-theVideo"),
					videoSRCauto = videoSRC + "?autoplay=1";
				$(theModal + ' iframe').attr('src', videoSRCauto);
				$(theModal + ' button.close').click(function() {
					$(theModal + ' iframe').attr('src', videoSRC);
				});
			});
		}

		// (function() {
		// 	tl = TweenMax.fromTo(".swiper-slide", {
		// 		scale: 1
		// 	}, {
		// 		scale: 5,
		// 		duration: 1700,
		// 		ease: "expoScale(1, 100)"
		// 	});

		// 	tl.restart()
		// })()
	</script>
</body>
<!--end::Body-->

</html>