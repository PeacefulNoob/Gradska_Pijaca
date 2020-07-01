@extends('layouts.main')

@section('content')

		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 class=""><span class="font-weight-bold">16,25,365</span> Ads Available In Hyderabad</h1>
								</div>
								<div class="search-background bg-transparent">
									<div class="form row no-gutters ">
										<div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
											<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0" id="text4" placeholder="Job Title or Phrase or Keywords">
										</div>
										<div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
											<input type="text" class="form-control input-lg br-md-0" id="text5" placeholder="Enter Location">
											<span><i class="fa fa-map-marker location-gps mr-1"></i> </span>										</div>
										<div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
											<select class="form-control select2-show-search  border-bottom-0" data-placeholder="Select Category">
												<optgroup label="Categories">
													<option>Select</option>
													<option value="1">Private</option>
													<option value="2">Software</option>
													<option value="3">Banking</option>
													<option value="4">Finaces</option>
													<option value="5">Corporate</option>
													<option value="6">Driver</option>
													<option value="7">Sales</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search Here</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</div>
		</div>
		<!--/Sliders Section-->

		<!--Breadcrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Classifieds list Right</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">Classifieds list Right</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<!--Left Side Content-->
					<div class="col-xl-3 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="input-group">
									<input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Search">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3  br-br-3">
											Search
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Categories</h3>
							</div>
							<div class="card-body">
								<div class="" id="container">
									<div class="filter-product-checkboxs">
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox1" value="option1">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Computer<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox2" value="option2">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Services<span class="label label-secondary float-right">22</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox3" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Jobs<span class="label label-secondary float-right">78</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox4" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">RealEstates<span class="label label-secondary float-right">35</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox5" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Clothing<span class="label label-secondary float-right">23</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox6" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Home & Garden<span class="label label-secondary float-right">14</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Beauty & Spa<span class="label label-secondary float-right">45</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Restaurant<span class="label label-secondary float-right">34</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Travel<span class="label label-secondary float-right">12</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Event<span class="label label-secondary float-right">18</span></a>
											</span>
										</label>
										<label class="custom-control custom-checkbox mb-3">
											<input type="checkbox" class="custom-control-input" name="checkbox7" value="option3">
											<span class="custom-control-label">
												<a href="#" class="text-dark">Health & fitness<span class="label label-secondary float-right">02</span></a>
											</span>
										</label>
									</div>
								</div>
							</div>
						
						
						
						
							
							<div class="card-footer">
								<a href="#" class="btn btn-secondary btn-block">Apply Filter</a>
							</div>
						</div>
					</div>
					<!--/Left Side Content-->

					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Add Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
									<div class=" mb-0">
										<div class="">
											<div class="bg-white p-5 item2-gl-nav d-flex">
												<h6 class="mb-0 mt-2">Showing 1 to 10 of 30 entries</h6>
												<ul class="nav item2-gl-menu ml-auto">
													<li class=""><a href="#tab-11" class="active show" data-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-toggle="tab" class="" title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
											
											</div>
										</div>
									</div>
									<div class="tab-content">
										<div class="tab-pane" id="tab-11">
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="arrow-ribbon bg-primary">Rent</div>
														<div class="item-card9-imgs">
															<a href="blog_details"></a>
															<img src="../../assets/images/products/h4.png" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="blog_details">RealEstate</a>
																<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold mt-1">2BK flat </h4></a>
																<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">featured</span></div>
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="blog_details"></a>
															<img src="../../assets/images/products/j2.png" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="blog_details">Jobs</a>
																<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold mt-1">Horbica Consulting </h4></a>
																<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$745.00</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">featured</span></div>
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="blog_details"></a>
															<img src="../../assets/images/products/pe1.png" alt="img" class="cover-image">
														</div>
														<div class="item-card9-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card mb-0 border-0">
														<div class="card-body ">
															<div class="item-card9">
																<a href="blog_details">Animals</a>
																<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold mt-1">kenco petcenter</h4></a>
																<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-primary">$13</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/b3.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="blog_details">Beauty & Spa</a>
																	<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Goozer Beauty & Spa</h4></a>
																	<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="rating-stars d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div> (145reviews)
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-primary">$42</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/h6.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="#">Restaurant</a>
																	<a href="#" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">GilkonStar Hotel</h4></a>
																	<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="rating-stars d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div> (145reviews)
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card2-img ">
															<div class="arrow-ribbon bg-primary">$50</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/v1.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body ">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="blog_details" class="">Vehicles</a>
																	<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Seep Automobiles</h4></a>
																	<p class="mb-0 leading-tight">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit</p>
																</div>
															</div>
														</div>
														<div class="card-footer pt-4 pb-4">
															<div class="item-card2-footer d-sm-flex">
																<div class="item-card2-rating">
																	<div class="rating-stars d-inline-flex">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div> (46 reviews)
																	</div>
																</div>
																<div class="ml-auto">
																	<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane active" id="tab-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="arrow-ribbon bg-primary">Rent</div>
															<div class="item-card9-imgs">
																<a href="blog_details"></a>
																<img src="../../assets/images/products/h4.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<a href="blog_details">RealEstate</a>
																<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">2BK flat </h4></a>
																<p>Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																<div class="item-card9-desc">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> USA</span></a>
																	<a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> Nov-15-2019</span></a>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$263.99</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">featured</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="blog_details"></a>
																<img src="../../assets/images/products/j2.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
															</div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<a href="blog_details">Jobs</a>
																<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Horbica Consulting</h4></a>
																<p>Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																<div class="item-card9-desc">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a>
																	<a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> Dec-05-2018</span></a>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$745.00</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="2">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">featured</span></div>
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="blog_details"></a>
																<img src="../../assets/images/products/pe1.png" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<a href="blog_details">Animals</a>
																<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">kenco petcenter</h4></a>
																<p>Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																<div class="item-card9-desc">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> UK</span></a>
																	<a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> Nov-25-2018</span></a>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
																<div class="item-card9-cost">
																	<h4 class="text-dark font-weight-semibold mb-0 mt-0">$149.00</h4>
																</div>
																<div class="ml-auto">
																	<div class="rating-stars block">
																		<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																		<div class="rating-stars-container">
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																			<div class="rating-star sm">
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card2-img">
															<div class="arrow-ribbon bg-primary">$185</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/b3.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist active"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="blog_details">Beauty & Spa</a>
																	<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Gozer Beauty & Spa</h4></a>
																	<p class="mb-0">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(145 reviews)
																</div>

															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card2-img">
															<div class="arrow-ribbon bg-primary">$158</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/f4.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="#">Restaurant</a>
																	<a href="#" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">GilkonStar Hotel</h4></a>
																	<p class="mb-0">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> Los Angles</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(145 reviews)
																</div>

															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card2-img">
															<div class="arrow-ribbon bg-primary">$172</div>
															<a href="blog_details"></a>
															<img src="../../assets/images/products/v1.png" alt="img" class="cover-image">
														</div>
														<div class="item-card2-icons">
															<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
														</div>
														<div class="card-body">
															<div class="item-card2">
																<div class="item-card2-desc">
																	<a href="blog_details">Vehicles</a>
																	<a href="blog_details" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">Seep Automobiles</h4></a>
																	<p class="mb-0">Ut enim ad minima veniamq nostrum exerci ullam orisin suscipit laboriosam</p>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card2-footer">
																<a href="#" class="location"><i class="fa fa-map-marker text-muted mr-1"></i> San Francisco</a>
																<div class="rating-stars item-card2-rating d-inline-flex">
																	<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value"  value="3">
																	<div class="rating-stars-container">
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																		<div class="rating-star sm">
																			<i class="fa fa-star"></i>
																		</div>
																	</div>(46 reviews)
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<ul class="pagination mb-3">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="#" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--/Add Lists-->
					</div>
				</div>
			</div>
		</section>
		<!--/Add Listings-->
		@include('components.newsletter')

@endsection