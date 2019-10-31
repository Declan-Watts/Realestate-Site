//TODO: Comment on this Page
$(document).ready(function(e) {
	$('#register_form').on('submit', function(e) {
		e.preventDefault();
		if ($('#password1') == '' || $('#username')) {
			document.getElementsById('Next').click();
		} else {
			$.ajax({
				url: 'assets/php/register.php',
				type: 'POST',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function() {
					$('#finishbutton').html(
						'Finish  <i class="fa fa-spinner fa-spin"></i>'
					);
					document.getElementById('finishbutton').disabled = true;
				},
				success: function(pre_result) {
					$('#finishbutton').html('Finish');
					document.getElementById('finishbutton').disabled = false;
					if (pre_result == 'Email Taken') {
						swal({
							title: 'Email Currently In Use',
							text: 'Try Logging in with that email, or Contacting support',
							type: 'error',
							showCancelButton: false,
							confirmButtonClass: 'btn btn-success',
							confirmButtonText: 'Ok, Thanks',
							buttonsStyling: false
						}).catch(swal.noop);
					} else {
						swal({
							title: 'Account Created!',
							text: 'An Email Verification Link has been Sent Via Email',
							buttonsStyling: false,
							confirmButtonClass: 'btn btn-success',
							type: 'success'
						}).then(result => {
							if (result.value) {
								window.location = 'login.html';
							}
						});
					}
				},
				error: function(e) {
					alert('Something just didnt want to work');
					console.log(e);
				}
			});
		}
	});
});
