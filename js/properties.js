//When the document is ready this will run
$(document).ready(function(e) {
	load_properties();
});

function load_properties() {
	//This is running an AJAX Request to get the properties for sale
	$.ajax({
		url: `php/properties.php`, //This is the api we are calling
		method: `get`, //This is the method we are using
		before: function(e) {
			//This runes before the page is loaded
			console.log('search_start');
		},
		//Once a result is returned the success is run
		success: function(pre_result) {
			$('#housing-grid').empty();
			//This is parsing the data as JSON
			let result = $.parseJSON(pre_result);
			//This is doing a for loop through the returned data
			for (let i = 0; i < result.length; i++) {
				//This is appending the propertie data into the page as html
				$('#housing-grid').append(`<div class="col-sm-6 col-lg-4">
					<a href="property.php?house_id=${result[i].ID}">
			<!-- php echo and go here --><img
				src="dashboard/assets/img/property_thumb/${result[i].Thumbnail}"
				class="home-img-width"
			/>
			<!-- house-display-content -->
			<div class="bottom-left">
				<i class="fas fa-bed"></i>${result[i].Bedrooms}
				<i class="fas fa-bath"></i>${result[i].Bathrooms}
				<i class="fas fa-couch"></i>${result[i].Lounge}
				<i class="fas fa-utensils"></i>${result[i].Dinning} 
				<i class="fas fa-car"></i>${result[i].Garage}
			</div>
			</a>
		</div>`);
			}
		},
		//If there is an error this will run
		error: function(e) {
			alert(e);
		}
	});
}
