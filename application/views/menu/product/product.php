<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1 page-title"></h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->

			</div>
			<!--end::Page title-->

		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container">
			<!--begin::Card-->
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body p-0">
					<!--begin::Heading-->
					<div class="card-px text-center">
						<!--begin::Tables Widget 11-->
						<div class="card mb-5 mb-xl-8">
							<!--begin::Header-->
							<div class="card-header border-0 pt-5">
								<h3 class="card-title align-items-start flex-column">
									<!-- <span class="card-label fw-bolder fs-3 mb-1">Gallery</span> -->
									<!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 new products</span> -->
								</h3>
								<div class="card-toolbar">
									<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card" id="kt_toolbar_primary_button">
										<!--begin::Svg Icon | path: icons/duotone/Communication/Add-user.svg-->
										<!--end::Svg Icon-->Create
									</a>
								</div>
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body py-3">
								<!--begin::Table container-->
								<div class="table-responsive">
									<!--begin::Table-->
									<table class="table align-middle gs-0 gy-4">
										<!--begin::Table head-->
										<thead>
											<tr class="fw-bolder text-muted bg-light">
												<th class="min-w-225px rounded-start">Title</th>
												<th class="min-w-225px rounded-start">Image</th>
												<th class="min-w-225px rounded-start">Position</th>
												<th class="min-w-200px text-center rounded-end">Actions</th>
											</tr>
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody id="table-product">

										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table container-->
							</div>
							<!--begin::Body-->
						</div>
						<!--end::Tables Widget 11-->
					</div>
					<!--end::Heading-->
					<!--begin::Illustration-->
					<div class="text-center px-5">
						<!-- <img src="<?= base_url() ?>/assets/demo5/dist/assets/media/illustrations/banking.png" alt="" class="mw-100 mh-300px" /> -->
					</div>
					<!--end::Illustration-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
			<!--begin::Modal - New Card-->
			<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Add New Product</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
											<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<!-- <form id="kt_modal_new_card_product" class="form" action="#"> -->
							<!--begin::Input group-->
							<div class="fv-row">
								<!--begin::Form-->
								<form class="form" action="<?= base_url('master_data/product/save') ?>" method="post" enctype="multipart/form-data">
									<div class="mb-10">
										<label for="exampleFormControlInput1" class="required form-label">Title</label>
										<input type="text" class="form-control form-control-solid" id="title" name="title" placeholder="Title" />
									</div>
									<input id="file" type="file" name="file" class="mb-10" />
									<div class="mb-10">
										<label for="exampleFormControlInput1" class="required form-label">Position</label>
										<select class="form-select form-select-solid" aria-label="Select example" name="position">
											<option>Pilih</option>
											<option value="1">Atas</option>
											<option value="2">Bawah</option>
										</select>
									</div>
									<div class="mb-10">
										<label for="shortdescription" class="required form-label">Short Description</label>
										<input type="text" class="form-control form-control-solid" id="shortdescription" name="shortdescription" placeholder="shortdescription" />
									</div>
									<div class="mb-10">
										<label for="editor" class="required form-label">Description</label>
										<textarea id="editor" name="description">
        								</textarea>
									</div>
									<!--begin::Actions-->
									<div class="text-center pt-15">
										<button type="reset" id="kt_modal_new_card_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
										<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
											<span class="indicator-label">Submit</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Input group-->
							<!-- </form> -->
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - New Card-->


			<!--begin::Modal - EDIT PRODUCT-->
			<div class="modal fade" id="kt_modal_edit_product" tabindex="-1" aria-hidden="true">
				<!--begin::Modal dialog-->
				<div class="modal-dialog modal-dialog-centered mw-650px">
					<!--begin::Modal content-->
					<div class="modal-content">
						<!--begin::Modal header-->
						<div class="modal-header">
							<!--begin::Modal title-->
							<h2>Edit Product</h2>
							<!--end::Modal title-->
							<!--begin::Close-->
							<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
											<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
											<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Close-->
						</div>
						<!--end::Modal header-->
						<!--begin::Modal body-->
						<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
							<!--begin::Form-->
							<!-- <form id="kt_modal_new_card_product" class="form" action="#"> -->
							<!--begin::Input group-->
							<div class="fv-row">
								<!--begin::Form-->
								<form class="form" action="<?= base_url('master_data/product/save') ?>" method="post" enctype="multipart/form-data">
									<div class="mb-10">
										<label for="exampleFormControlInput1" class="required form-label">Title</label>
										<input type="text" class="form-control form-control-solid" id="titleEdit" name="titleEdit" placeholder="Title" />
									</div>
									<input id="fileEdit" type="file" name="file" class="mb-10" />
									<div class="mb-10">
										<label for="exampleFormControlInput1" class="required form-label">Position</label>
										<select class="form-select form-select-solid" aria-label="Select example" name="positionEdit" id="positionEdit">
											<option>Pilih</option>
											<option value="1">Atas</option>
											<option value="2">Bawah</option>
										</select>
									</div>
									<div class="mb-10">
										<label for="shortdescription" class="required form-label">Short Description</label>
										<input type="text" class="form-control form-control-solid" id="shortdescriptionEdit" name="shortdescriptionEdit" placeholder="shortdescription" />
									</div>
									<div class="mb-10">
										<label for="descriptionEdit" class="required form-label">Description</label>
										<textarea id="descriptionEdit" class="descriptionEdit" name="descriptionEdit">
											<span id="innerttext"></span>
										</textarea>
									</div>
									<!--begin::Actions-->
									<div class="text-center pt-15">
										<button type="reset" id="kt_modal_new_card_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
										<button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
											<span class="indicator-label">Submit</span>
											<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Input group-->
							<!-- </form> -->
							<!--end::Form-->
						</div>
						<!--end::Modal body-->
					</div>
					<!--end::Modal content-->
				</div>
				<!--end::Modal dialog-->
			</div>
			<!--end::Modal - New Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->