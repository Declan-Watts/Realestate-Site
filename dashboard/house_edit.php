<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link
			rel="apple-touch-icon"
			sizes="76x76"
			href="assets/img/apple-icon.png"
		/>
		<link rel="icon" type="image/png" href="assets/img/favicon.png" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>
			PP | Admin
		</title>
		<meta
			content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
			name="viewport"
		/>
		<!--     Fonts and icons     -->
		<link
			rel="stylesheet"
			type="text/css"
			href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
		/>
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
		/>
		<!-- CSS Files -->
		<link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<script src="assets/js/core/jquery.min.js"></script>
		<script src="assets/js/check_login.js"></script>
	</head>

	<body class="">
		<!-- Main Wrapper -->
		<div class="wrapper ">
			<!-- Side Bar -->
			<div
				class="sidebar"
				data-color="rose"
				data-background-color="black"
				data-image="assets/img/sidebar-2.jpg"
			>
				<!--
					Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

					Tip 2: you can also add an image using data-image tag
			-->
				<div class="logo">
					<a href="index.html" class="simple-text logo-mini">
						PP
					</a>
					<a href="index.html" class="simple-text logo-normal">
						Pristine
					</a>
				</div>
				<div class="sidebar-wrapper">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="index.html">
								<i class="material-icons">dashboard</i>
								<p>Dashboard</p>
							</a>
						</li>
					</ul>
					<ul class="nav">
						<li class="nav-item active">
							<a class="nav-link" href="properties_admin.html">
								<i class="material-icons">library_books</i>
								<p>Properties</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Side Bar -->
			<!-- Main Content -->
			<div class="main-panel">
				<!-- Navbar -->
				<nav
					class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top "
				>
					<div class="container-fluid">
						<!-- Minimize Button and Page Title -->
						<div class="navbar-wrapper">
							<div class="navbar-minimize">
								<button
									id="minimizeSidebar"
									class="btn btn-just-icon btn-white btn-fab btn-round"
								>
									<i
										class="material-icons text_align-center visible-on-sidebar-regular"
										>more_vert</i
									>
									<i
										class="material-icons design_bullet-list-67 visible-on-sidebar-mini"
										>view_list</i
									>
								</button>
							</div>
							<a class="navbar-brand" href="#pablo">Dashboard</a>
						</div>
						<button
							class="navbar-toggler"
							type="button"
							data-toggle="collapse"
							aria-controls="navigation-index"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<span class="sr-only">Toggle navigation</span>
							<span class="navbar-toggler-icon icon-bar"></span>
							<span class="navbar-toggler-icon icon-bar"></span>
							<span class="navbar-toggler-icon icon-bar"></span>
						</button>
						<!-- End Minimize Button and Page Title -->
						<!-- Navbar Items -->
						<div class="collapse navbar-collapse justify-content-end">
							<!-- Navbar icons/nav -->
							<ul class="navbar-nav">
								<!-- Dashboard Icon -->
								<li class="nav-item">
									<a class="nav-link" href="index.html">
										<i class="material-icons">dashboard</i>
										<p class="d-lg-none d-md-block">
											Stats
										</p>
									</a>
								</li>
								<!-- Notifications Drop Down -->
								<li class="nav-item dropdown">
									<a
										class="nav-link"
										href="#pablo"
										id="navbarDropdownProfile"
										data-toggle="dropdown"
										aria-haspopup="true"
										aria-expanded="false"
									>
										<i class="material-icons">person</i>
										<p class="d-lg-none d-md-block">
											Account
										</p>
									</a>
									<div
										class="dropdown-menu dropdown-menu-right"
										aria-labelledby="navbarDropdownProfile"
									>
										<a class="dropdown-item" href="#">Profile</a>
										<a class="dropdown-item" href="#">Settings</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="assets/php/logout.php"
											>Log out</a
										>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- End Navbar -->
				<!-- Main Page Content -->
				<div class="content">
					<div class="content">
						<div class="container-fluid">
							<!-- Add Properties & Company & Agent -->
							<div class="row">
								<!-- House Edit -->
								<div class="col-md-12">
									<div class="card ">
										<div class="card-header card-header-info card-header-text">
											<div class="card-text">
												<i class="material-icons">add_circle_outline</i>
											</div>
										</div>
										<div class="card-body ">
											<form
												class="form"
												id="add_property_form"
												method="post"
												enctype="multipart/form-data"
												onsubmit="return false;"
											>
												<div class="row">
													<label class="col-sm-2 col-md-1 col-form-label"
														>Bedrooms</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Bedrooms"
																id="Bedrooms"
																data-id="0"
																class="form-control"
																value=""
															/>
															<input
																type="hidden"
																name="house_id"
																id="house_id"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Land Area</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="LArea"
																id="LArea"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Bathrooms</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Bathrooms"
																id="Bathrooms"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Garage</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Garage"
																id="Garage"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Car Parks</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="CarPark"
																id="CarPark"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Dinning</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Dinning"
																id="Dinning"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Lounge</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Lounge"
																id="Lounge"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3 col-sm-6">
														<select
															class="selectpicker"
															data-style="btn btn-warning btn-round"
															title="Agent"
															name="agent_sel"
															id="agent_sel"
														>
														</select>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Price/Sale Type</label
													>
													<div class="col-sm-6 col-md-3">
														<div class="form-group">
															<input
																type="text"
																name="SaleType"
																id="SaleType"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-3 col-md-2 col-form-label"
														>Close (YYYY-MM-DD)</label
													>
													<div class="col-sm-3 col-md-3">
														<div class="form-group">
															<input
																type="text"
																name="CloseDate"
																id="CloseDate"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
												</div>
												<div class="row">
													<label class="col-sm-2 col-md-1 col-form-label"
														>Address</label
													>
													<div class="col-sm-10 col-md-6">
														<div class="form-group">
															<input
																type="text"
																name="Address"
																id="Address"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
												</div>
												<div class="row">
													<label class="col-sm-2 col-md-1 col-form-label"
														>Suburb</label
													>
													<div class="col-sm-3 col-md-2">
														<div class="form-group">
															<input
																type="text"
																name="Suburb"
																id="Suburb"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>City</label
													>
													<div class="col-sm-3 col-md-2">
														<div class="form-group">
															<input
																type="text"
																name="City"
																id="City"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Post</label
													>
													<div class="col-sm-2 col-md-1">
														<div class="form-group">
															<input
																type="text"
																name="Postcode"
																id="Postcode"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
													<label class="col-sm-2 col-md-1 col-form-label"
														>Region</label
													>
													<div class="col-sm-3 col-md-2">
														<div class="form-group">
															<input
																type="text"
																name="Region"
																id="Region"
																data-id="0"
																class="form-control"
																value=""
															/>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-8">
														<div class="form-group">
															<label>Description</label>
															<div class="form-group">
																<textarea
																	name="description"
																	id="description"
																	class="form-control"
																	rows="15"
																	value=""
																></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 col-sm-6">
													<button type="submit" class="btn btn-fill btn-info">
														Add Books
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End of Main Page Content -->
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<nav class="float-left">
							<ul>
								<li>
									<a href="#">
										Admin
									</a>
								</li>
								<li>
									<a href="http://school.ddtuitions.com">
										Main Site
									</a>
								</li>
							</ul>
						</nav>
						<!-- Copy Right -->
						<div class="copyright float-right">
							&copy;
							<script>
								document.write(new Date().getFullYear());
							</script>
							Made By Declan Watts & Jack Kelly.
						</div>
					</div>
				</footer>
				<!-- End of Footer -->
			</div>
		</div>
		<!-- Settings Gear Wheel -->
		<div class="fixed-plugin">
			<div class="dropdown show-dropdown">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x"> </i>
				</a>
				<ul class="dropdown-menu">
					<!-- Sidebar Filters -->
					<li class="header-title">Sidebar Filters</li>
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger active-color">
							<div class="badge-colors ml-auto mr-auto">
								<span
									class="badge filter badge-purple"
									data-color="purple"
								></span>
								<span
									class="badge filter badge-azure"
									data-color="azure"
								></span>
								<span
									class="badge filter badge-green"
									data-color="green"
								></span>
								<span
									class="badge filter badge-warning"
									data-color="orange"
								></span>
								<span
									class="badge filter badge-danger"
									data-color="danger"
								></span>
								<span
									class="badge filter badge-rose active"
									data-color="rose"
								></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
					<!-- Background Colours -->
					<li class="header-title">Sidebar Background</li>
					<li class="adjustments-line">
						<a
							href="javascript:void(0)"
							class="switch-trigger background-color"
						>
							<div class="ml-auto mr-auto">
								<span
									class="badge filter badge-black active"
									data-background-color="black"
								></span>
								<span
									class="badge filter badge-white"
									data-background-color="white"
								></span>
								<span
									class="badge filter badge-red"
									data-background-color="red"
								></span>
							</div>
							<div class="clearfix"></div>
						</a>
					</li>
					<!-- Sidebar Mini toggle -->
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<p>Sidebar Mini</p>
							<label class="ml-auto">
								<div class="togglebutton switch-sidebar-mini">
									<label>
										<input type="checkbox" />
										<span class="toggle"></span>
									</label>
								</div>
							</label>
							<div class="clearfix"></div>
						</a>
					</li>
					<!-- Sidebar Images toggle -->
					<li class="adjustments-line">
						<a href="javascript:void(0)" class="switch-trigger">
							<p>Sidebar Images</p>
							<label class="switch-mini ml-auto">
								<div class="togglebutton switch-sidebar-image">
									<label>
										<input type="checkbox" checked="" />
										<span class="toggle"></span>
									</label>
								</div>
							</label>
							<div class="clearfix"></div>
						</a>
					</li>
					<!-- Sidebar Images -->
					<li class="header-title">Images</li>
					<li class="active">
						<a class="img-holder switch-trigger" href="javascript:void(0)">
							<img src="assets/img/sidebar-1.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="img-holder switch-trigger" href="javascript:void(0)">
							<img src="assets/img/sidebar-2.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="img-holder switch-trigger" href="javascript:void(0)">
							<img src="assets/img/sidebar-3.jpg" alt="" />
						</a>
					</li>
					<li>
						<a class="img-holder switch-trigger" href="javascript:void(0)">
							<img src="assets/img/sidebar-4.jpg" alt="" />
						</a>
					</li>
				</ul>
			</div>
		</div>

		<!--   Core JS Files   -->
		<script src="assets/js/core/popper.min.js"></script>
		<script src="assets/js/core/bootstrap-material-design.min.js"></script>
		<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
		<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
		<script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
		<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
		<script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
		<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
		<!-- Library for adding dinamically elements -->
		<script src="assets/js/plugins/arrive.min.js"></script>
		<!--  Notifications Plugin    -->
		<script src="assets/js/plugins/bootstrap-notify.js"></script>
		<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
		<script
			src="assets/js/material-dashboard.js?v=2.1.0"
			type="text/javascript"
		></script>
		<script src="assets/js/properties_edit.js"></script>
		<!-- prettier-ignore -->
		<script>
			<?php $house_id = $_GET['house_id'];?>
			fill_form(<?php echo $house_id; ?>);
		</script>
		<script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }

          }

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
		<!-- prettier-ignore -->
		<script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

        md.initVectorMap();

      });
	</script>
	</body>
</html>
