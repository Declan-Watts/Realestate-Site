function load_property(house_id) {
	// This is running an AJAX Request to get the property content
	$.ajax({
		url: `php/property.php?id=${house_id}`, // This is the api we are calling
		method: `get`, // This is the method we are using
		before: function(e) {
			// This runs before the page is loaded
			console.log('search_start');
		},
		//Once a result is returned the success is run
		success: function(pre_result) {
			let result = $.parseJSON(pre_result);
			console.log(result);
			$('#bedrooms').html(`${result[0].Bedrooms}`);
			$('#bathrooms').html(`${result[0].Bathrooms}`);
			$('#lounge').html(`${result[0].Lounge}`);
			$('#dinning').html(`${result[0].Dinning}`);
			$('#garage').html(`${result[0].Garage}`);
			$('#carparks').html(`${result[0].Carparks}`);
			$('#property-house').attr(
				'src',
				`dashboard/assets/img/property_thumb/${result[0].Thumbnail}`
			); // End Property
			$('#addr').html(`${result[0].Addr},`);
			$('#addr').append(` ${result[0].Suburb},`);
			$('#addr').append(` ${result[0].City},`);
			$('#addr').append(` ${result[0].Post}.`);
			$('#description').html(`${result[0].Description}`);
			$('#sale-type').html(`${result[0].SaleType}`);

			// Agent Data
			$('#agent-thumbnail').attr(
				'src',
				`dashboard/assets/img/agent_thumb/${result[1].Agent_Thumbnail}`
			);
			$('#agent-name').html(`${result[1].Agent_Name}`);
			$('#agent-mobile').append(`${result[1].Agent_Mobile}`);
			$('#agent-work').append(`${result[1].Agent_Work}`);

			// Company Data
			$('#company-name').append(`${result[2].Company_Name}`);
			$('#company-thumbnail').attr(
				'src',
				`dashboard/assets/img/company_thumb/${result[2].Company_Thumbnail}`
			);

			// Specifications
			$('#land-area').prepend(`${result[0].Landarea}`);
			$('#suburb').html(`${result[0].Suburb}`);
			$('#city').html(`${result[0].City}`);
			$('#region').html(`${result[0].Region}`);

			//wishlist button
			$('.wishlist_add_button')
				.append(`<div class="col-12" style="text-align:center">
            <button class="btn btn-primary" onclick="add_to_wishlist(${house_id})">Add To Wishlist</button>
            </div>
            `);
		}
	});
}
