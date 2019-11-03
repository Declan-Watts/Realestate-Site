<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<!-- BOOTSTRAP CSS -->
		<link
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css"
		/>
		<link rel="shortcut icon" href="" />

		<!-- CSS SHEET -->
		<link rel="stylesheet" href="Plugins/noUIslider/nouislider.css" />
		<link rel="stylesheet" href="css/style.css" />
		<!-- SITE TITLE -->
		<title>Pristine Properties</title>
	</head>
	<body>
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
			<div class="container">
				<!-- NAVBAR LOGO/BRAND -->
				<a href="index.html" class="navbar-brand">
					<img src="img/navbar-logo.png" alt="navbar-logo" height="64px" />
				</a>
				<!-- NAVBAR TOGGLER BUTTON -->
				<button
					class="navbar-toggler"
					type="button"
					data-toggle="collapse"
					data-target="#navbarToggler"
					aria-controls="navbarToggler"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- NAVBAR MENU -->
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="nav navbar-nav ml-auto" id="nav-links">
						<li class="nav-item active">
							<a href="index.html" class="nav-link    ">Home</a>
						</li>
						<li class="nav-item">
							<a href="about.html" class="nav-link">About</a>
						</li>
						<li class="nav-item">
							<a href="contact.html" class="nav-link">Contact Us</a>
						</li>
						<li class="nav-item">
							<a href="dashboard/login.html" class="nav-link">Login</a>
						</li>
						<li class="nav-item">
							<a onclick="load_wishlist()" class="nav-link"
								><i class="fas fa-heart"></i
							></a>
						</li>
						<li class="nav-item">
							<a href="bread.html" class="nav-link bread">Learn</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- Page Content -->
		<section class="py-5">
			<!-- Property Title/Address -->
			<div class="container">
				<h1 id="addr"></h1>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<!-- Property Image -->
						<img
							src="dashboard/assets/img/property_thumb/property_default.png"
							id="property-house"
							alt="image not found"
							class="property-image"
						/>

						<!-- Property Info -->

						<div class="row">
							<div class="col-2">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<span id="bedrooms"></span>
								<!-- end col-md-1 -->
							</div>

							<div class="col-2">
								<i class="fas fa-bath" aria-hidden="true"></i>
								<span id="bathrooms"></span>
								<!-- end col-md-1 -->
							</div>

							<div class="col-2">
								<i class="fas fa-couch" aria-hidden="true"></i>
								<span id="lounge"></span>
								<!-- end col-md-1 -->
							</div>

							<div class="col-2">
								<i class="fas fa-utensils" aria-hidden="true"></i>
								<span id="dinning"></span>
								<!-- end col-md-1 -->
							</div>

							<div class="col-2">
								<i class="fas fa-car" aria-hidden="true"></i>
								<span id="garage"></span>
								<!-- end col-md-1 -->
							</div>

							<div class="col-2">
								<i class="fas fa-parking" aria-hidden="true"></i>
								<span id="carparks"></span>
								<!-- end col-md-1 -->
							</div>
							<!-- end of row -->
						</div>
						<div class="row">
							<div class="col-12">
								<h6>Description</h6>
								<p id="description"></p>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<div class="row">
							<div class="title-info">
								<p>Listed By</p>
							</div>

							<div class="col-6" style="padding: 0; margin-top: 20px;">
								<!-- Agent Thumbnail -->
								<img
									src="dashboard/assets/img/agent_thumb/agent_default.png"
									id="agent-thumbnail"
									class="agent-thumbnail"
								/>
							</div>

							<div class="col-6" style="margin-top: 20px;">
								<!-- Agent Name -->
								<h3 id="agent-name" style="margin-bottom:10px;">
									Agent Not Found
								</h3>
								<!-- Agent Mobile -->
								<h4 id="agent-mobile" style="margin-bottom:10px;">(M)</h4>
								<!-- Agent Work -->
								<h4 id="agent-work" style="margin-bottom:10px;">(W)</h4>

								<div class="title-info" style="margin-bottom:10px;">
									<p>Company</p>
								</div>
								<!-- Company Name -->
								<h5 id="company-name" style="margin-bottom:10px;"></h5>
								<!-- Company Thumbnail -->
								<img src="" id="company-thumbnail" class="company-thumbnail" />
								<div class="col-md-6" style="text-align:center">
									<h3>Specifications</h3>
								</div>
							</div>
							<div class="col-12">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Land Area</th>
											<th scope="col">Suburb</th>
											<th scope="col">City</th>
											<th scope="col">Region</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row" id="land-area">m<sup>2</sup></th>
											<td id="suburb"></td>
											<td id="city"></td>
											<td id="region"></td>
										</tr>
									</tbody>
								</table>

								<div class="container" style="text-align:center">
									<h4>Sale Type</h4>
									<h5 id="sale-type"></h5>
								</div>

								<!-- honestly I got lazy and wanted to center align 2 divs -->
								<div class="row">
									<div class="wishlist_add_button" style="margin: auto;"></div>
								</div>
								<!-- end of col-md-6 -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- End of Property Info -->
			<!-- End of Container -->
		</section>
		<div class="bg-model">
			<div class="model-content" id="site-seeing-model-content">
				<div class="model-content-inner">
					<a
						href="javascript:void(0)"
						class="model-content-close"
						onclick="$('.bg-model').fadeOut(500);"
					>
						<i class="fas fa-times"></i>
					</a>
					<div class="row">
						<div class="col-12">
							<div class="wishlist-content">
								<h1>Your Wishlist</h1>
							</div>
							<div
								class="row"
								id="wishlist-items"
								style="padding-top: 15px;"
							></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="container-fluid">
				<div class="row" style="margin-top:10px">
					<div class="col-md-4" style="text-align:center">
						<i class="fas fa-map-marker-alt"></i>
						<p>50 Hazeldean Road, Addington, Christchurch.</p>
					</div>

					<div class="col-md-4" style="text-align:center">
						<i class="fas fa-phone"></i>
						<p>0800 83 83 83</p>
					</div>

					<div class="col-md-4" style="text-align:center">
						<i class="fas fa-home"></i>
						<p>© 2019 Pristine Properties, ltd.</p>
					</div>
					<!-- End of row -->
				</div>
				<!-- End of container-fluid -->
			</div>
			<!-- End of Footer -->
		</footer>
	</body>
	<!-- JQUERY -->
	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"
	></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"
	></script>

	<!-- BOOTSTRAP JS -->
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"
	></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script> -->
	<script src="Plugins/wnumb-1.1.0/wNumb.js"></script>
	<script src="https://kit.fontawesome.com/99d10b5ee7.js"></script>
	<script src="Plugins/noUIslider/nouislider.js"></script>
	<script src="js/filter.js"></script>
	<script src="js/property.js"></script>
	<script src="js/wishlist.js"></script>

	<script>
		<?php $house_id = $_GET['house_id'];?>
		load_property(<?php echo $house_id; ?>);
	</script>
</html>
