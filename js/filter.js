//TODO: Fix Comments on this Page

function update_region() {
	//When the category chosen is changed, this is run to empty the old
	// sub categories
	$('#Region_sel').empty();
	// This runs AJAX to gather all of the subcategories for the chosen
	// Category
	$.ajax({
		url: `php/region_categories.php`, //URL to the page
		type: 'get', //method
		// This is run once a response from the server has been received.
		success: function(pre_result) {
			//This checks to see if the category actually has any subcategory,
			//Because some categories do not. If the category does not
			// have a sub category then we will give it the subcategory of General
			if (pre_result == '"No Result"') {
				$('#Region_sel').append(`<option value="0">No Regions</option>`);
			} else {
				//Otherwise the result will be given in JSON meaning we will
				//have to parse the JSON shown below
				let result = $.parseJSON(pre_result);
				//This forloop runs through each of the subcategories returned and
				//appends it to the subcategory dropdown list.
				for (let i = 0; i < result.length; i++) {
					$('#Region_sel').append(
						`<option value="${result[i].region}">${result[i].region}</option>`
					);
				}
			}
			// This refreshes the selectpicker plugin to make it all look
			// stylish
			update_city();
		}
	});
}

function update_city() {
	//When the category chosen is changed, this is run to empty the old
	// sub categories
	$('#City_sel').empty();
	//This gets the value selected by the categories select dropdown
	let region = $('#Region_sel').val();
	// This runs AJAX to gather all of the subcategories for the chosen
	// Category
	$.ajax({
		url: `php/city_categories.php?category=${region}`, //URL to the page
		type: 'get', //method
		// This is run once a response from the server has been received.
		success: function(pre_result) {
			//This checks to see if the category actually has any subcategory,
			//Because some categories do not. If the category does not
			// have a sub category then we will give it the subcategory of General
			if (pre_result == '"No Result"') {
				$('#City_sel').append(`<option value="0">No Cities</option>`);
			} else {
				//Otherwise the result will be given in JSON meaning we will
				//have to parse the JSON shown below
				let result = $.parseJSON(pre_result);
				//This forloop runs through each of the subcategories returned and
				//appends it to the subcategory dropdown list.
				for (let i = 0; i < result.length; i++) {
					$('#City_sel').append(
						`<option value="${result[i].city}">${result[i].city}</option>`
					);
				}
			}
			// This refreshes the selectpicker plugin to make it all look
			// stylish
			$('#City_sel').selectpicker('refresh');
			$('#Region_sel').selectpicker('refresh');
		}
	});
}

//When the document is ready this will run
$(document).ready(function(e) {
	$('#filter').on('submit', function(e) {
		//This is running an AJAX Request to get the properties for sale
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `php/filter_session.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				// console.log(pre_result);
				window.location = 'properties.html';
			},
			error: function(e) {}
		});
	});
	$('#apply_filter').on('submit', function(e) {
		//This is running an AJAX Request to get the properties for sale
		console.log('here');
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `php/filter_session.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				console.log(pre_result);
				load_properties();
			},
			error: function(e) {}
		});
	});
});

function session_filter_load() {
	// This runs AJAX to gather all of the subcategories for the chosen
	// Category
	$.ajax({
		url: `php/session_filter_load.php`, //URL to the page
		type: 'get', //method
		// This is run once a response from the server has been received.
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			document.getElementById('Region_sel').value = result[0].region;
			document.getElementById('City_sel').value = result[0].city;
			document.getElementById('Bedrooms').value = result[0].bedrooms;
			document.getElementById('Bathrooms').value = result[0].bathrooms;
			$('#City_sel').selectpicker('refresh');
			$('#Region_sel').selectpicker('refresh');
			$('#Bedrooms').selectpicker('refresh');
			$('#Bathrooms').selectpicker('refresh');
		}
	});
}
