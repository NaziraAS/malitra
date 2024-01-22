<?php $this->load->view('templates/header') ?>
<!--begin::Body-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		<!-- begin::sidebar -->
		<?php $this->load->view('templates/sidebar') ?>
		<!-- end::sidebar -->
		<!--begin::Wrapper-->
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			<!--begin::Header-->
			<div id="kt_header" style="" class="header align-items-stretch">
				<!--begin::Container-->
				<div class="container-fluid d-flex align-items-stretch justify-content-between">
					<!--begin::Aside mobile toggle-->
					<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
						<div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
							<i class="bi bi-list fs-1"></i>
						</div>
					</div>
					<!--end::Aside mobile toggle-->
					<!--begin::Mobile logo-->
					<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
						<a href="../../demo5/dist/index.html" class="d-lg-none">
							<img alt="Logo" src="<?= base_url() ?>assets/media/logos/logo-compact.svg" class="h-15px" />
						</a>
					</div>
					<!--end::Mobile logo-->
					<!-- begin::navbar -->
					<?php
					$this->load->view('templates/navbar')
					?>
					<!-- end::navbar -->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Header-->
			<?php $this->load->view($content) ?>
			<!--begin::Footer-->
			<?php $this->load->view('templates/footer-above') ?>
			<!--end::Footer-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Root-->
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
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<!-- <script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script> -->
<!--end::Global Javascript Bundle-->
<?php $this->load->view('templates/footer') ?>
<!--end::Javascript-->
</body>
<!--end::Body-->

</html>
