//When the document is ready this will run
$(document).ready(function(e) {
	load_properties();
});

function house_delete(id) {
	let answer = prompt('would you like to continue, type yes if you do');
	if (answer == 'yes') {
		$.ajax({
			url: `assets/php/house_delete.php?id=${id}`, //This is the api we are calling
			method: `get`,
			before: function(e) {},
			success: function(pre_result) {
				load_properties();
			},
			error: function(e) {}
		});
	}
}

function load_properties() {
	$('#orders_table').empty();
	//This is running an AJAX Request to get the properties for sale
	$.ajax({
		url: `assets/php/properties_load.php`, //This is the api we are calling
		method: `get`, //This is the method we are using
		before: function(e) {
			//This runes before the page is loaded
			console.log('search_start');
		},
		//Once a result is returned the success is run
		success: function(pre_result) {
			//This is parsing the data as JSON
			let result = $.parseJSON(pre_result);
			//This is doing a for loop through the returned data
			for (let i = 0; i < result.length; i++) {
				//This is appending the propertie data into the page as html
				$('#orders_table').append(`<tr>
							<td class="text-center">${i + 1}</td>
							<td>${result[i].Addr}</td>
							<td>${result[i].Status}</td>
							<td>${result[i].SaleType}</td>
							<td class="text-right">${result[i].Listing_Date}</td>
							<td class="td-actions text-right">
				<a href="house_edit.php?house_id=${result[i].House_ID}">
				<button type="button" rel="tooltip" class="btn btn-success">
									<i class="material-icons">edit</i>
								</button></a>
								<button type="button" rel="tooltip" class="btn btn-danger" onclick="house_delete(${
									result[i].House_ID
								})">
									<i class="material-icons">close</i>
								</button>
							</td>
						</tr>`);
			}
		},
		//If there is an error this will run
		error: function(e) {
			alert(e);
		}
	});
}
