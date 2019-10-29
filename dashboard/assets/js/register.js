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
						//TODO: Make it do something if email is taken
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
					// TODO: Get an error page working
					alert('Something just didnt want to work');
					console.log(e);
				}
			});
		}
	});
});
