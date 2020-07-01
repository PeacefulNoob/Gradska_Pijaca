	
@extends('layouts.main')

@section('content')
	<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="../../assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
								<a href="editprofile.html" class="profile-img">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Rubin Carmody</h2>
								<span>Web Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="index.html">Dashboard 1</a></li>
								<li><a class="slide-item" href="index2.html">Dashboard 2</a></li>
								<li><a class="slide-item" href="index3.html">Dashboard 3</a></li>
								<li><a class="slide-item" href="index4.html">Dashboard 4</a></li>
								<li><a class="slide-item" href="index5.html">Dashboard 5</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="admin-pricing.html">Admin Pricing</a></li>
								<li><a class="slide-item" href="Ads.html">Ads List</a></li>
								<li><a class="slide-item" href="comments.html">Comments</a></li>
								<li><a class="slide-item" href="email-users.html">Email-Users</a></li>
								<li><a class="slide-item" href="media-gallery.html">Media Gallery</a></li>
								<li><a class="slide-item" href="newad.html">New Ad</a></li>
								<li><a class="slide-item" href="newuser.html">New User</a></li>
								<li><a class="slide-item" href="favourite-ads.html">Favourite-Ads</a></li>
								<li><a class="slide-item" href="payment-orders.html">Payment Orders</a></li>
								<li><a class="slide-item" href="payments-adpacks.html">Payment Adpacks</a></li>
								<li><a class="slide-item" href="payment-settings.html">Payment Settings</a></li>
								<li><a class="slide-item" href="payments-membership.html">Payment Membership</a></li>
								<li><a class="slide-item" href="profile-admin.html">Profile Admin</a></li>
								<li><a class="slide-item" href="settings.html">Settings</a></li>
								<li><a class="slide-item" href="users-all.html">All Users</a></li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-rocket"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="cards.html" class="slide-item">Cards design</a>
								</li>
								<li>
									<a href="chat.html" class="slide-item">Default Chat</a>
								</li>
								<li>
									<a href="notify.html" class="slide-item">Notifications</a>
								</li>
								<li>
									<a href="email.html" class="slide-item">Email</a>
								</li>
								<li>
									<a href="emailservices.html" class="slide-item">Email Inbox</a>
								</li>
								<li>
									<a href="sweetalert.html" class="slide-item">Sweet alerts</a>
								</li>
								<li>
									<a href="rangeslider.html" class="slide-item">Range slider</a>
								</li>
								<li>
									<a href="scroll.html" class="slide-item">Content Scroll bar</a>
								</li>
								<li>
									<a href="counters.html" class="slide-item">Counters</a>
								</li>
								<li>
									<a href="loaders.html" class="slide-item">Loaders</a>
								</li>
								<li>
									<a href="time-line.html" class="slide-item">Time Line</a>
								</li>
								<li>
									<a href="rating.html" class="slide-item">Rating </a>
								</li>
								<li>
									<a href="users-list.html" class="slide-item">User List</a>
								</li>
								<li>
									<a href="search.html" class="slide-item">Search page</a>
								</li>
								<li>
									<a href="crypto-currencies.html" class="slide-item">Crypto-currencies</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-window-restore"></i><span class="side-menu__label">Widget</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-calendar"></i><span class="side-menu__label">Calendar</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="calendar.html" class="slide-item">Default calendar</a>
								</li>
								<li>
									<a href="calendar2.html" class="slide-item">Full calendar</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="chart-chartist.html" class="slide-item">Chartjs Charts </a>
								</li>
								<li>
									<a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a>
								</li>
								<li>
									<a href="chart-echart.html" class="slide-item">Echart Charts</a>
								</li>
								<li>
									<a href="chart-flot.html" class="slide-item">Flot Charts</a>
								</li>
								<li>
									<a href="chart-high.html" class="slide-item">High Charts</a>
								</li>
								<li>
									<a href="chart-nvd3.html" class="slide-item">Nvd3 Charts</a>
								</li>
								<li>
									<a href="sparklinechart.html" class="slide-item">Sparkline Chart</a>
								</li>
								<li>
									<a href="chart-morris.html" class="slide-item">Morris Charts</a>
								</li>
								<li>
									<a href="charts.html" class="slide-item">C3 Bar Charts</a>
								</li>
								<li>
									<a href="chart-line.html" class="slide-item">C3 Line Charts</a>
								</li>
								<li>
									<a href="chart-donut.html" class="slide-item">C3 Donut Charts</a>
								</li>
								<li>
									<a href="chart-pie.html" class="slide-item">C3 Pie charts</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cubes"></i><span class="side-menu__label"> Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="alerts.html" class="slide-item">Alerts</a>
								</li>
								<li>
									<a href="buttons.html" class="slide-item">Buttons</a>
								</li>
								<li>
									<a href="colors.html" class="slide-item">Colors</a>
								</li>
								<li>
									<a href="avatars.html" class="slide-item">Avatar-Square</a>
								</li>
								<li>
									<a href="avatar-round.html" class="slide-item">Avatar-Rounded</a>
								</li>
								<li>
									<a href="avatar-radius.html" class="slide-item">Avatar-Radius</a>
								</li>
								<li>
									<a href="dropdown.html" class="slide-item">Drop downs</a>
								</li>
								<li>
									<a href="thumbnails.html" class="slide-item">Thumbnails</a>
								</li>
								<li>
									<a href="mediaobject.html" class="slide-item">Media Object</a>
								</li>
								<li>
									<a href="list.html" class="slide-item">List</a>
								</li>
								<li>
									<a href="tags.html" class="slide-item">Tags</a>
								</li>
								<li>
									<a href="pagination.html" class="slide-item">Pagination</a>
								</li>
								<li>
									<a href="navigation.html" class="slide-item">Navigation</a>
								</li>
								<li>
									<a href="typography.html" class="slide-item">Typography</a>
								</li>
								<li>
									<a href="breadcrumbs.html" class="slide-item">Breadcrumbs</a>
								</li>
								<li>
									<a href="badge.html" class="slide-item">Badges</a>
								</li>
								<li>
									<a href="jumbotron.html" class="slide-item">Jumbotron</a>
								</li>
								<li>
									<a href="panels.html" class="slide-item">Panels</a>
								</li>
								<li>
									<a href="modal.html" class="slide-item">Modal</a>
								</li>
								<li>
									<a href="tooltipandpopover.html" class="slide-item">Tooltip and popover</a>
								</li>
								<li>
									<a href="progress.html" class="slide-item">Progress</a>
								</li>
								<li>
									<a href="carousel.html" class="slide-item">Carousels</a>
								</li>
								<li>
									<a href="Accordion.html" class="slide-item">Accordions</a>
								</li>
								<li>
									<a href="tabs.html" class="slide-item">Tabs</a>
								</li>
								<li>
									<a href="headers.html" class="slide-item">Headers</a>
								</li>
								<li>
									<a href="footers.html" class="slide-item">Footers</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-th-large"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="form-elements.html" class="slide-item">Form Elements</a>
								</li>
								<li>
									<a href="form-wizard.html" class="slide-item">Form-wizard Elements</a>
								</li>
								<li>
									<a href="wysiwyag.html" class="slide-item">Text Editor</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="tables.html" class="slide-item">Default table</a>
								</li>
								<li>
									<a href="datatable.html" class="slide-item">Data Table</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="maps.html"><i class="side-menu__icon fa fa-map-marker"></i><span class="side-menu__label"> Maps</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-codepen"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="icons.html" class="slide-item">Font Awesome</a>
								</li>
								<li>
									<a href="icons2.html" class="slide-item">Material Design Icons</a>
								</li>
								<li>
									<a href="icons3.html" class="slide-item">Simple Line Iocns</a>
								</li>
								<li>
									<a href="icons4.html" class="slide-item">Feather Icons</a>
								</li>
								<li>
									<a href="icons5.html" class="slide-item">Ionic Icons</a>
								</li>
								<li>
									<a href="icons6.html" class="slide-item">Flag Icons</a>
								</li>
								<li>
									<a href="icons7.html" class="slide-item">pe7 Icons</a>
								</li>
								<li>
									<a href="icons8.html" class="slide-item">Themify Icons</a>
								</li>
								<li>
									<a href="icons9.html" class="slide-item">Typicons Icons</a>
								</li>
								<li>
									<a href="icons10.html" class="slide-item">Weather Icons</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-database"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="profile.html" class="slide-item">Profile</a>
								</li>
								<li>
									<a href="editprofile.html" class="slide-item">Edit Profile</a>
								</li>
								<li>
									<a href="gallery.html" class="slide-item">Gallery</a>
								</li>
								<li>
									<a href="about.html" class="slide-item">About Company</a>
								</li>
								<li>
									<a href="company-history.html" class="slide-item">Company History</a>
								</li>
								<li>
									<a href="services.html" class="slide-item">Services</a>
								</li>
								<li>
									<a href="faq.html" class="slide-item">FAQS</a>
								</li>
								<li>
									<a href="terms.html" class="slide-item">Terms and Conditions</a>
								</li>
								<li>
									<a href="empty.html" class="slide-item">Empty Page</a>
								</li>
								<li>
									<a href="construction.html" class="slide-item">Under Construction</a>
								</li>
								<li>
									<a href="blog.html" class="slide-item">Blog</a>
								</li>
								<li>
									<a href="invoice.html" class="slide-item">Invoice</a>
								</li>
								<li>
									<a href="pricing.html" class="slide-item">Pricing Tables</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-shopping-cart"></i><span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="shop.html" class="slide-item">Products</a>
								</li>
								<li>
									<a href="shop-des.html" class="slide-item">Product Details</a>
								</li>
								<li>
									<a href="cart.html" class="slide-item">Shopping Cart</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-chain-broken"></i><span class="side-menu__label">Custom  Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="login.html" class="slide-item">Login</a>
								</li>
								<li>
									<a href="register.html" class="slide-item">Register</a>
								</li>
								<li>
									<a href="forgot-password.html" class="slide-item">Forgot password</a>
								</li>
								<li>
									<a href="lockscreen.html" class="slide-item">Lock screen</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-diamond"></i><span class="side-menu__label">Error pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="400.html" class="slide-item">400 Error</a>
								</li>
								<li>
									<a href="401.html" class="slide-item">401 Error</a>
								</li>
								<li>
									<a href="403.html" class="slide-item">403 Error</a>
								</li>
								<li>
									<a href="404.html" class="slide-item">404 Error</a>
								</li>
								<li>
									<a href="500.html" class="slide-item">500 Error</a>
								</li>
								<li>
									<a href="503.html" class="slide-item">503 Error</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="app-sidebar-footer">
						<a href="emailservices.html">
							<span class="fa fa-envelope" aria-hidden="true"></span>
						</a>
						<a href="profile.html">
							<span class="fa fa-user" aria-hidden="true"></span>
						</a>
						<a href="editprofile.html">
							<span class="fa fa-cog" aria-hidden="true"></span>
						</a>
						<a href="login.html">
							<span class="fa fa-sign-in" aria-hidden="true"></span>
							</a>
						<a href="chat.html">
							<span class="fa fa-comment" aria-hidden="true"></span>
						</a>
					</div>
				</aside>

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Dashboard 01</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
							</ol>
						</div>

						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Price</h3>
										<div class="card-options"> <a class="btn btn-sm btn-primary" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h5 class="">Total Price</h5>
										<h2 class="text-dark  mt-0 ">4,657</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-primary w-75" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-up text-green"></i>10% increases</div>
									</div>
								</div>
							</div>
							<div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Stock</h3>
										<div class="card-options"> <a class="btn btn-sm btn-secondary" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h5 class="">Total Stock</h5>
										<h2 class="text-dark  mt-0 ">2,592</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-secondary w-45" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-down text-danger"></i>12% decrease</div>
									</div>
								</div>
							</div>
							<div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Revenue</h3>
										<div class="card-options"> <a class="btn btn-sm btn-warning" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h5 class="">Total Revenue</h5>
										<h2 class="text-dark  mt-0 ">3,517</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-warning w-50" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-down text-danger"></i>5% decrease</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Investiment</h3>
										<div class="card-options"> <a class="btn btn-sm btn-success" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h5 class="">Total Investiment</h5>
										<h2 class="text-dark  mt-0  ">5,759</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-success w-25" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-up text-success"></i>15% increase</div>
									</div>
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Last Year Overview</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="sales-status" class="chart-dropshadow h-280"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Activity</h3>
									</div>
									<div class="card-body">
										<div class="activity">
											<img src="../../assets/images/faces/male/24.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/female/10.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
													<small class="text-muted ">1 days ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/male/4.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
													<small class="text-muted ">3 days ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/female/8.jpg" alt="" class="img-activity">
											<div class="time-activity mb-0">
												<div class="item-activity mb-0">
													<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
													<small class="text-muted ">5 days ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
						    <div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Customer Satisfaction</h3>
									</div>
									<div class="card-body">
										<div class="chats-wrap">
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Good</span>
													<span class="float-right p-1">78%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-35" ></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Satisfied</span>
													<span class="float-right p-1">82%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Excellent</span>
													<span class="float-right p-1">89%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-65"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Average</span>
													<span class="float-right p-1">40%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-80"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Unsatisfied</span>
													<span class="float-right p-1">20%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Developing Team</div>
									</div>
									<div class="card-body">
										<div class="ibox teams mb-30 bg-boxshadow">
											<!-- Ibox Content -->
											<div class="ibox-content teams">
												<!-- Members -->
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/12.jpg" ></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/21.jpg" ></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/29.jpg"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/2.jpg"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/male/34.jpg"></span>
													<span class="avatar brround cover-image cover-image">+8</span>
												</div>
												<!-- Team Board Details -->
												<div class="teams-board-details mt-3">
													<h4 class="font-weight-semibold">About Developing Team</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi. Contrary to popular belief, Lorem Ipsum is not simply random text classical Latin </p>
												</div>
												<!-- Progress Details -->
												<span class="font-weight-semibold">Status of current project:</span>
												<div class="progress-details-teams mt-2 mb-4">
													<div class="stat-percent mb-2">58%</div>
													<div class="progress progress-sm ">
														<div class="progress-bar bg-primary w-50" role="progressbar"></div>
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-4">
														<div class="teams-rank text-muted">PROJECTS</div>
														<span>24</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">RANKING</div>
														<span>3rd</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">BUDGET</div>
														<span>$36,25,854</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Todo List</h3>
										<div class="card-options">
											<a class="btn btn-sm btn-primary " href="#"><i class="fa fa-plus"></i> Add Task</a>
										</div>
									</div>
									<div class="card-body">
										<div class="custom-controls-stacked checklist-task">
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">vero eos et accusamus et iusto odio dignissimos ducimus</span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 2h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
												<span class="custom-control-label"> et iusto odio dignissimos ducimus</span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 8h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
												<span class="custom-control-label"> eos  accusamus  iusto odio dignissimos </span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 4h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
												<span class="custom-control-label">vet accusamus et iusto odio dignissimos </span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 5h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="arrow-ribbon bg-danger">sale</div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="realestate.html"></a>
											<img src="../../assets/images/products/products/h1.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="realestate.html" class="text-white"> Real Estate</a>
											<h4  class="font-weight-semibold mb-0">$389</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="realestate.html" class="text-dark"><h4 class="font-weight-semibold">Apartments</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  Los Angles</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 567 9876 087</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">featured</span></div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="jobs.html"></a>
											<img src="../../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="jobs.html" class="text-white"> Jobs</a>
											<h4  class="font-weight-semibold mb-0">$854</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Hair dresser-Beauticia</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  Los Angles</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-briefcase text-muted mr-1"></i>Beauty Span</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			@endsection