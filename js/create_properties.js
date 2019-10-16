$(document).ready(function(e) {
	//On Document Ready
	$('#create_house').on('submit', function(e) {
		//On Submit Run Function
		e.preventDefault();
		$.ajax({
			//Run AJAX to create_house.php and post the form data
			url: `php/create_house.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				console.log(pre_result);
			},
			error: function(e) {}
		});
	});
});
