//TODO: Comment on this Page
//TODO: Fix Commens on this Page

function fill_form(house_id) {
	$.ajax({
		type: 'POST',
		url: `assets/php/house_edit.php?house_id=${house_id}`,
		data: { data: 'check' },
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			console.log(result);
			console.log(pre_result);
			$('#Bedrooms').val(result[0].Bedrooms);
			$('#house_id').val(house_id);
			$('#LArea').val(result[0].Landarea);
			$('#Bathrooms').val(result[0].Bathrooms);
			$('#Garage').val(result[0].Garage);
			$('#CarPark').val(result[0].Carparks);
			$('#Dinning').val(result[0].Dinning);
			$('#Lounge').val(result[0].Lounge);
			$('#SaleType').val(result[0].SaleType);
			$('#CloseDate').val(result[0].Closing_date);
			$('#Address').val(result[0].Addr);
			$('#Suburb').val(result[0].Suburb);
			$('#City').val(result[0].City);
			$('#Postcode').val(result[0].Post);
			$('#Region').val(result[0].Region);
			$('#description').val(result[0].Description);

			// alert(data);//This will alert Success which is sent as the response to the ajax from the server
		}
	});
}

$(document).ready(function(e) {
	$('#add_property_form').on('submit', function(e) {
		// On Submit Run Function
		e.preventDefault();
		$.ajax({
			//Run AJAX to contact.php and post the form data
			url: `assets/php/properties_edit_add.php`,
			type: 'POST',
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			before: function(e) {},
			success: function(pre_result) {
				console.log(pre_result);
				alert('Update Successful');
			},
			error: function(e) {}
		});
	});
});
