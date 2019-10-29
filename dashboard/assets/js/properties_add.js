$(document).ready(function(e) {
	//On Document Ready
	$('#add_company_form').on('submit', function(e) {
		// On Submit Run Function
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `assets/php/company_add.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				console.log(pre_result);
				if (pre_result == 'New record created successfully') {
					window.location.replace(
						'http://school.ddtuitions.com/dashboard/properties_admin.html'
					);
				}
			},
			error: function(e) {}
		});
	});
	$('#add_agent_form').on('submit', function(e) {
		// On Submit Run Function
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `assets/php/agent_add.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				console.log(pre_result);
				if (pre_result == 'New record created successfully') {
					window.location.replace(
						'http://school.ddtuitions.com/dashboard/properties_admin.html'
					);
				}
			},
			error: function(e) {}
		});
	});
	$('#add_property_form').on('submit', function(e) {
		// On Submit Run Function
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `assets/php/property_add.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				if (pre_result == 'New Entry Success') {
					window.location.replace(
						'http://school.ddtuitions.com/dashboard/properties_admin.html'
					);
				}
			},
			error: function(e) {}
		});
	});
});

//This function loads the categorys in the select drop down.
// This means if a new category is made oneday then it will still be
// displayed dynamically. This is done through AJAX
function agent_cat_load() {
	$.ajax({
		url: `assets/php/company_load.php`, //URL to the page
		type: 'get', //method
		//This is run if there is a response from the server
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			//This appends options to the categories select dropdown.
			$('#company_sel').append(
				`<option value="${result[0].id}" selected>${result[0].name}</option>`
			);
			for (let i = 1; i < result.length; i++) {
				$('#company_sel').append(
					`<option value="${result[i].id}">${result[i].name}</option>`
				);
			}
			$('#company_sel').selectpicker('refresh');
		}
	});
}

//This function loads the categorys in the select drop down.
// This means if a new category is made oneday then it will still be
// displayed dynamically. This is done through AJAX
function property_cat_load() {
	$.ajax({
		url: `assets/php/agent_load.php`, //URL to the page
		type: 'get', //method
		//This is run if there is a response from the server
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			//This appends options to the categories select dropdown.
			$('#agent_sel').append(
				`<option value="${result[0].id}" selected>${result[0].name}</option>`
			);
			for (let i = 1; i < result.length; i++) {
				$('#agent_sel').append(
					`<option value="${result[i].id}">${result[i].name}</option>`
				);
			}
			$('#agent_sel').selectpicker('refresh');
		}
	});
}

agent_cat_load();
property_cat_load();
