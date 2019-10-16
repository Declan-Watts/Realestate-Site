$(document).ready(function(e) {
	$.ajax({
		url: `php/test.php`,
		method: `get`,
		before: function(e) {},
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			console.log(result[0] + result[1]);
		},
		error: function(e) {
			alert(e);
		}
	});
});
