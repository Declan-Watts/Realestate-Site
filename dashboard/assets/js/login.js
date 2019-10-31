//TODO: Comment Page
$(document).ready(function(e) {
	$('.form').on('submit', function(e) {
		e.preventDefault();
		$.ajax({
			url: 'assets/php/login.php',
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			beforeSend: function() {},
			success: function(pre_result) {
				console.log(pre_result);
				let result = $.parseJSON(pre_result);
				if (result.Result == 'Success') {
					if (result.Role == 'Admin') {
						window.location = 'index.html';
					} else if (result.Role == 'Pending Verification') {
						swal({
							title: 'Account Pending Verification',
							text: 'Please check Email for Verification Link (May be in Spam)',
							type: 'warning',
							showCancelButton: false,
							confirmButtonClass: 'btn btn-success',
							confirmButtonText: 'Ok, Thanks',
							buttonsStyling: false
						}).catch(swal.noop);
					} else {
						window.location.replace('http://school.ddtuitions.com');
					}
				} else if (
					result.Result == 'Password Incorrect' ||
					result.Result == 'Email Incorrect'
				) {
					swal({
						title: 'Incorrect Email or Password',
						text:
							'Please use your correct Email or Password, or Contact us on the Contact Page',
						type: 'error',
						showCancelButton: false,
						confirmButtonClass: 'btn btn-success',
						confirmButtonText: 'Ok, Thanks',
						buttonsStyling: false
					}).catch(swal.noop);
					$('#form-pass').val('');
				} else {
					swal({
						title: 'Error',
						text: 'Service is Temporarily Down, Please try again later',
						type: 'error',
						showCancelButton: false,
						confirmButtonClass: 'btn btn-success',
						confirmButtonText: 'Ok, Thanks',
						buttonsStyling: false
					}).catch(swal.noop);
					$('#form-pass').val('');
				}
			},
			error: function(e) {
				alert('Something just didnt want to work');
				console.log(e);
			}
		});
	});
});
