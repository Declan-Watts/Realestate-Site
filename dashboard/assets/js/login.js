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
			beforeSend: function() {
				// TODO: Do something here
			},
			success: function(pre_result) {
				console.log(pre_result);
				let result = $.parseJSON(pre_result);
				if (result.Result == 'Success') {
					window.location = 'index.html';
				}
			},
			error: function(e) {
				// TODO: Get an error page working
				alert('Something just didnt want to work');
				console.log(e);
			}
		});
	});
});
