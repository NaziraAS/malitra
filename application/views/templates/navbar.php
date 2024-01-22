<!--begin::Wrapper-->
<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
	<!--begin::Navbar-->
	<div class="d-flex align-items-stretch" id="kt_header_nav">

		<!--end::Menu wrapper-->
	</div>
	<!--end::Navbar-->
	<!--begin::Topbar-->
	<div class="d-flex align-items-stretch flex-shrink-0">
		<!--begin::Toolbar wrapper-->
		<div class="topbar d-flex align-items-stretch flex-shrink-0">
			<!--begin::User-->
			<div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
				<!--begin::Menu wrapper-->
				<div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
					<img src="<?= base_url() ?>assets/media/avatars/150-2.jpg" alt="metronic" />
				</div>
				<!--begin::Menu-->
				<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
					<!--begin::Menu item-->
					<div class="menu-item px-3">
						<div class="menu-content d-flex align-items-center px-3">
							<!--begin::Avatar-->
							<div class="symbol symbol-50px me-5">
								<img alt="Logo" src="<?= base_url() ?>assets/media/avatars/150-26.jpg" />
							</div>
							<!--end::Avatar-->
							<!--begin::Username-->
							<div class="d-flex flex-column">
								<div class="fw-bolder d-flex align-items-center fs-5"><?= $this->session->userdata('current_user') ?>
									<!-- <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span> -->
								</div>
								<!-- <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a> -->
							</div>
							<!--end::Username-->
						</div>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
					<!--begin::Menu item-->
					<!-- <div class="menu-item px-5 my-1">
						<a href="../../demo5/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
					</div> -->
					<!--end::Menu item-->
					<!--begin::Menu item-->
					<div class="menu-item px-5">
						<a href="<?= base_url('authentication/auth/logout') ?>" class="menu-link px-5">Sign Out</a>
					</div>
					<!--end::Menu item-->
					<!--begin::Menu separator-->
					<div class="separator my-2"></div>
					<!--end::Menu separator-->
				</div>
				<!--end::Menu-->
				<!--end::Menu wrapper-->
			</div>
			<!--end::User -->
			<!--begin::Heaeder menu toggle-->
			<div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
				<div class="topbar-item" id="kt_header_menu_mobile_toggle">
					<i class="bi bi-text-left fs-1"></i>
				</div>
			</div>
			<!--end::Heaeder menu toggle-->
		</div>
		<!--end::Toolbar wrapper-->
	</div>
	<!--end::Topbar-->
</div>
<!--end::Wrapper-->