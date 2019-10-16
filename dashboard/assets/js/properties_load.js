//When the document is ready this will run
$(document).ready(function(e) {
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
                  <button type="button" rel="tooltip" class="btn btn-info">
                    <i class="material-icons">person</i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-success">
                    <i class="material-icons">edit</i>
                  </button>
                  <button type="button" rel="tooltip" class="btn btn-danger" onclick="house_remove(${
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
});
