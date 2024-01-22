<script>
	$.ajax({
		url: "<?= base_url("master_data/gallery/load") ?>",
		method: "GET",
		dataType: "JSON",
		success: function(data) {
			console.log(data)
			for (d of data) {
				$('#table-gallery').append(
					`<tr>
						<td class="text-center">
							<div>
								<div class="symbol symbol-100px">
								<img src="<?= base_url() ?>assets/images/gallery/${d.image}" class="" alt="""/>
														</div>
													</div>
												</td>
												<td class="text-center">
													<button class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm" onclick="hapus(${d.id})">
														<!--begin::Svg Icon | path: icons/duotone/General/Trash.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
												</td>
											</tr>`
				)
			}
		}
	})

	function hapus(id) {
		if (id) {
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: "<?= base_url("master_data/gallery/hapus") ?>",
						method: "POST",
						dataType: "JSON",
						data: {
							id
						},
						success: function(data) {
							if (data.status == 'ok') {
								Swal.fire(
									'Deleted!',
									data.message,
									'success'
								)
							}
							setTimeout(() => {
								location.reload()
							}, 1500)
						}
					})
				}

			})
		}
	}

	// EDIT JUMBOTRON
	function edit(id) {
		$('#kt_modal_edit_product').modal('show')
		$.ajax({
			url: "<?= base_url("master_data/gallery/edit") ?>",
			method: "POST",
			dataType: "JSON",
			data: {
				id
			},
			success: function(data) {
				$('#titleEdit').val(data.title)
				$('#descriptionEdit').val(data.description)
				$('#shortdescriptionEdit').val(data.shortdescription)

			}
		})
	}
</script>