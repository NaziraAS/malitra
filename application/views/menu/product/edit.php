<div class="container">
	<h3 class="mb-3">Edit product</h3>
	<div class="fv-row">
		<!--begin::Form-->
		<form class="form" action="<?= base_url('master_data/product/update') ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" value="<?= $product->id ?>" name="id">
			<input type="hidden" value="<?= $product->image ?>" name="gambarLama">
			<div class="row">
				<div class="col-md-6">
					<div class="mb-10">
						<label for="exampleFormControlInput1" class="required form-label">Title</label>
						<input type="text" class="form-control form-control-solid" id="titleEdit" value="<?= $product->title ?>" name="titleEdit" placeholder="Title" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-10">
						<label for="exampleFormControlInput1" class="required form-label">Position</label>
						<select class="form-select form-select-solid" aria-label="Select example" name="positionEdit" id="positionEdit">
							<?php if ($product->position == 2) : ?>
								<option value="1" selected>Atas</option>
								<option value="2">Bawah</option>
							<?php else : ?>
								<option value="1">Atas</option>
								<option value="2" selected>Bawah</option>
							<?php endif; ?>
						</select>
					</div>
				</div>
			</div>
			<input id="fileEdit" type="file" name="fileEdit" class="mb-10" /></br>
			<img width="250" class="mb-5" src="<?= base_url('assets/images/product/' . $product->image) ?>" alt="">

			<div class="mb-10 mt-5">
				<label for="shortdescription" class="required form-label">Short Description</label>
				<input type="text" class="form-control form-control-solid" value="<?= $product->shortdescription ?>" id="shortdescriptionEdit" name="shortdescriptionEdit" placeholder="shortdescription" />
			</div>
			<div class="mb-10">
				<label for="descriptionEdit" class="required form-label" rows="10">Description</label>
				<textarea id="descriptionEdit" class="descriptionEdit" name="descriptionEdit"><?= $product->description ?></textarea>
			</div>
			<!--begin::Actions-->
			<div class="text-end">
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
</div>