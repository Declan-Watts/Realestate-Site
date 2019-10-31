//TODO: Comment on this Page
//TODO: Fix Comments on this Page

var wishlist;
var wishlist_loaded = 0;

$(document).ready(function(e) {
	update_wishlist();
});

function update_wishlist() {
	$.ajax({
		url: `php/wishlist_get.php`, //URL to the page
		type: 'get', //method
		// This is run once a response from the server has been received.
		success: function(pre_result) {
			console.log(pre_result);
			let result = $.parseJSON(pre_result);
			if (result[0] != 'empty') {
				wishlist = result;
			} else {
				wishlist = 'empty';
			}
		}
	});
}

function load_wishlist() {
	if (wishlist != 'empty') {
		$.ajax({
			url: `php/get_wishlist_items.php`,
			type: 'get',
			before: function() {},
			success: function(pre_result) {
				let result = $.parseJSON(pre_result);
				$('#wishlist-items').empty();
				for (let i = 0; i < result.length; i++) {
					$('#wishlist-items')
						.append(`<div class="col-12" style="padding-bottom: 10px;>
		<div class="wishlist-item">
		<div class="row">
			<div class="col-3"><img style="width: 100%;" 
			src="dashboard/assets/img/property_thumb/${result[i].Thumbnail}"
		/></div>
			<div class="col-7"><h1>${result[i].Name}</h1></div>
			<div class="col-2">
				<a
					href="javascript:void(0)"
					class="model-content-close"
					onclick="wishlist_remove_house(${result[i].House_ID})"
				>
					<p style="color: #f55e5e;">Remove</p>
				</a>
			</div>
		</div>
		</div>
	</div>`);
				}

				$('.bg-model').fadeIn(500);
			}
		});
	} else {
	}
}

function add_to_wishlist(id) {
	$.ajax({
		url: `php/wishlist_add.php?id=${id}`, //URL to the page
		type: 'get', //method
		// This is run once a response from the server has been received.
		success: function(pre_result) {
			console.log(pre_result);
			update_wishlist();
		}
	});
}

function wishlist_remove_house(House_ID) {
	$.ajax({
		url: `php/wishlist` //TODO: Finish Remove House JS
	});
}
