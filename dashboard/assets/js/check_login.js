//TODO: Comment on this Page
$.ajax({
	url: `assets/php/check_login.php`,
	type: 'get',
	success: function(pre_result) {
		if (pre_result == 'intruder') {
			location.href = 'login.html';
		}
	}
});
