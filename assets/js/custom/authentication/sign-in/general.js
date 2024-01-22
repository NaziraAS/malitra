"use strict";
function base_url() {
	let origin = window.location.origin;
	let pathname = window.location.pathname;
	let split_pathname = pathname.split("/");
	let url = origin + "/" + split_pathname[1] + "/";
	return url;
}
console.log(base_url());
var KTSigninGeneral = (function () {
	var t, e, i;
	return {
		init: function () {
			(t = document.querySelector("#kt_sign_in_form")),
				(e = document.querySelector("#kt_sign_in_submit")),
				(i = FormValidation.formValidation(t, {
					fields: {
						email: {
							validators: {
								notEmpty: { message: "Email address is required" },
								emailAddress: {
									message: "The value is not a valid email address",
								},
							},
						},
						password: {
							validators: { notEmpty: { message: "The password is required" } },
						},
					},
					plugins: {
						trigger: new FormValidation.plugins.Trigger(),
						bootstrap: new FormValidation.plugins.Bootstrap5({
							rowSelector: ".fv-row",
						}),
					},
				})),
				e.addEventListener("click", function (n) {
					n.preventDefault(),
						i.validate().then(function (i) {
							if ("Valid" == i) {
								let email = $("#email").val();
								let password = $("#password").val();

								$.ajax({
									url: base_url() + "authentication/auth/login",
									method: "POST",
									dataType: "JSON",
									data: { email, password },
									success: (data) => {
										if (data.status == "success") {
											setTimeout(function () {
												Swal.fire({
													text: "You have successfully logged in!",
													icon: "success",
													buttonsStyling: !1,
													confirmButtonText: "Ok, got it!",
													customClass: { confirmButton: "btn btn-primary" },
												})
													.then(function (e) {
														e.isConfirmed &&
															((t.querySelector('[name="email"]').value = ""),
															(t.querySelector('[name="password"]').value =
																""));
													})
													.then(function () {
														window.location.replace(
															base_url() + "main/dashboard"
														);
													});
											}, 500);
										} else if (data.status == "failed") {
											Swal.fire({
												text: "Maaf, email dan password salah.",
												icon: "error",
												buttonsStyling: !1,
												confirmButtonText: "Ok, got it!",
												customClass: { confirmButton: "btn btn-primary" },
											});
										} else {
											Swal.fire({
												text: "Maaf, email belum terdaftar silahkan register",
												icon: "error",
												buttonsStyling: !1,
												confirmButtonText: "Ok, got it!",
												customClass: { confirmButton: "btn btn-primary" },
											});
										}
									},
								});
							}
							// ? (e.setAttribute("data-kt-indicator", "on"),
							//   (e.disabled = !0),
							//   setTimeout(function () {
							// 		e.removeAttribute("data-kt-indicator"),
							// 			(e.disabled = !1),
							// 			Swal.fire({
							// 				text: "You have successfully logged in!",
							// 				icon: "success",
							// 				buttonsStyling: !1,
							// 				confirmButtonText: "Ok, got it!",
							// 				customClass: { confirmButton: "btn btn-primary" },
							// 			}).then(function (e) {
							// 				e.isConfirmed &&
							// 					((t.querySelector('[name="email"]').value = ""),
							// 					(t.querySelector('[name="password"]').value = ""));
							// 			});
							//   }, 2e3))
							// : Swal.fire({
							// 		text: "Sorry, looks like there are some errors detected, please try again.",
							// 		icon: "error",
							// 		buttonsStyling: !1,
							// 		confirmButtonText: "Ok, got it!",
							// 		customClass: { confirmButton: "btn btn-primary" },
							//   });
						});
				});
		},
	};
})();
KTUtil.onDOMContentLoaded(function () {
	KTSigninGeneral.init();
});
