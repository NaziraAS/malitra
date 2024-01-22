<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url() ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Custom Javascript(used by this page)-->
<!-- <script src="<?= base_url() ?>assets/js/custom/authentication/sign-in/general.js"></script>
<script src="<?= base_url() ?>assets/js/custom/authentication/sign-up/general.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script> -->
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url() ?>assets/js/custom/widgets.js"></script>
<!-- <script src="<?= base_url() ?>assets/js/custom/apps/chat/chat.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/custom/modals/create-app.js"></script> -->
<!-- <script src="<?= base_url() ?>assets/js/custom/modals/upgrade-plan.js"></script> -->
<script src="<?= base_url() ?>assets/demo5/src/js/vendors/plugins/dropzone.init.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/super-build/ckeditor.js"></script>
<?php $this->load->view($script) ?>

<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<script>
	$(document).ready(function() {
		let pathname = window.location.pathname
		let replace = pathname.split('/')
		if (replace[3]) {
			if (replace[3] == 'dashboard') {
				console.log(replace[3])
				$('.home > .menu-link').addClass('active')
			} else if (replace[3] == 'gallery') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(1) > .menu-link").addClass('active')
				$('.page-title').text(replace[3].toUpperCase())
			} else if (replace[3] == 'jumbotron') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(2) > .menu-link").addClass('active')
				$('.page-title').text('Jumbotron'.toUpperCase())
			} else if (replace[3] == 'principal') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(3) > .menu-link").addClass('active')
				$('.page-title').text(replace[3].toUpperCase())
			} else if (replace[3] == 'product') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(4) > .menu-link").addClass('active')
				$('.page-title').text(replace[3].toUpperCase())
			} else if (replace[3] == 'partner') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(5) > .menu-link").addClass('active')
				$('.page-title').text(replace[3].toUpperCase())
			} else if (replace[3] == 'information') {
				$('.menu-accordion').addClass('show')
				$(".menu-sub-accordion > .menu-item:nth-child(6) > .menu-link").addClass('active')
				$('.page-title').text('Product Information'.toUpperCase())
			} else {
				$('.menu-accordion').remove('show')
			}
		}

		$(document).ready(function() {
			$('#readMore').click(function() {
				$("#dots,#readMore").css("display", "none");
				$("#moreText,#readLess").css("display", "inline");
			});
			$('#readLess').click(function() {
				$("#dots,#readMore").css("display", "inline");
				$("#moreText,#readLess").css("display", "none");
			});
		});



	})
</script>