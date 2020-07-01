@extends('layouts.main')

@section('content')

	

		


		<!-- Video -->
		<div id="main">
			<section class="section-first bg-background-6" >
				<div class="header-text text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Pronađite oglas</h1>
						</div>
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="item-search-tabs">
									<div class="item-search-menu">
										<ul class="nav">
											<li class=""><a href="#index1" class="active" data-toggle="tab">Oglasi</a></li>
										</ul>
									</div>
									<div class="tab-content index-search-select">
										<div class="tab-pane active" id="index1">
											<div class=" search-background">
												<div class="form row no-gutters">
													<div class="form-group col-xl-6 col-lg-5 col-md-12 mb-0">
														<select class="form-control border-bottom-0 w-100" id="job" data-placeholder="Select">
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
													<div class="form-group col-xl-6 col-lg-7  col-md-12 mb-0 location">
														<div class="row no-gutters bg-white br-2">
															<div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0">
																<input type="text" class="form-control border" id="job-text" placeholder="Naziv oglasa">
															</div>
															<div class="col-xl-4 col-lg-5 col-md-12 mb-0">
																<a href="#" class="btn btn-block btn-primary fs-14"><i class="fa fa-search"></i> Potraži</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="index2">
											<div class=" search-background">
												<div class="form row no-gutters">
													<div class="form-group col-xl-6 col-lg-5 col-md-12 mb-0">
														<select class="form-control border-bottom-0"  id="employe" data-placeholder="Select">
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
													<div class="form-group col-xl-6 col-lg-7  col-md-12 mb-0 location">
														<div class="row no-gutters bg-white br-2">
															<div class="form-group  col-xl-8 col-lg-7 col-md-12 mb-0">
																<input type="text" class="form-control border" id="employe-text" placeholder="Location">
															</div>
															<div class="col-xl-4 col-lg-5 col-md-12 mb-0">
																<a href="#" class="btn btn-block btn-primary fs-14"><i class="fa fa-search"></i> Pretraga</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /header-text -->
			</section>
		</div>
		<!-- End of Video -->

		<!--Categories-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Kategorije</h2>
					<p>Pregled naših najgledanijijh kategorija</p>
				</div>
				<div id="small-categories" class="owl-carousel owl-carousel-icons2">
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/dress.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Clothing</h5>
										<small class="badge badge-pill badge-primary mr-2">32</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/store.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Restaurant</h5>
										<small class="badge badge-pill badge-primary mr-2">19</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img text-shadow1">
										<img src="/assets//images/products/categories/delivery-truck.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Vehicle</h5>
										<small class="badge badge-pill badge-primary mr-2">25</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/call-center.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Services</h5>
										<small class="badge badge-pill badge-primary mr-2">23</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/makeover.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Beauty</h5>
										<small class="badge badge-pill badge-primary mr-2">52</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/graduation.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Education </h5>
										<small class="badge badge-pill badge-primary mr-2">46</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/workspace.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Computer</h5>
										<small class="badge badge-pill badge-primary mr-2">22</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/sketch.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Construction</h5>
										<small class="badge badge-pill badge-primary mr-2">31</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/furniture.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Furnitures</h5>
										<small class="badge badge-pill badge-primary mr-2">12</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/electronics.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Electronics</h5>
										<small class="badge badge-pill badge-primary mr-2">21</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a href="classifieds-list.html"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/heart.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">Health</h5>
										<small class="badge badge-pill badge-primary mr-2">24</small><span class="text-muted">ads are posted</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Categories-->

		<!--Latest Ads-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Novi oglasi</h2>
					<p>Pregledajte naše nove oglase</p>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="ad_info"></a>
								<img src="/assets//images/products/products/f1.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								<a href="ad_info" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="ad_info" class="text-dark"><h4 class="mb-0">Somik Restaurant</h4></a>
										</div>
										<div class="d-flex">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, USA</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
										</div>
										<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer">
									<div class="item-card2-footer-u">
									    <div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="ad_info"></a>
								<img src="/assets//images/products/products/h4.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="ad_info" class="text-dark"><h4 class="mb-0">GilkonStar Hotel</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
										</div>
										<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer ">
									<div class="item-card2-footer-u">
										<div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="item-card2-img">
								<a href="ad_info"></a>
								<img src="/assets//images/products/products/b1.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-paint-brush"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="ad_info" class="text-dark"><h4 class="mb-0">Sear Beauty & Spa</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
										</div>
										<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer">
									<div class="item-card2-footer-u">
										<div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Urgent</span></div>
							<div class="item-card2-img">
								<a href="ad_info"></a>
								<img src="/assets//images/products/products/v1.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-car"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="ad_info" class="text-dark"><h4 class="mb-0">Seep Automobiles</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
										</div>
										<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer">
									<div class="item-card2-footer-u">
										<div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="item">
							<div class="card overflow-hidden">
								<div class="item-card2-img">
									<a href="ad_info"></a>
									<img src="/assets//images/products/products/j3.jpg" alt="img" class="cover-image">
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
									<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
								</div>
								<div class="card-body pb-0">
									<div class="item-card2">
										<div class="item-card2-desc">
											<div class="item-card2-text">
												<a href="ad_info" class="text-dark"><h4 class="mb-0">Food & Bar Restaurant</h4></a>
											</div>
											<div class="d-flex pb-0 pt-0">
												<a href="">
													<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
												</a>
												<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
											</div>
											<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="item-card2-footer">
										<div class="item-card2-footer-u">
											<div class="row d-flex">
												<span class="review_score mr-2 badge badge-primary">4.0/5</span>
												<div class="rating-stars d-inline-flex">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													<div class="rating-stars-container">
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
													</div> (5 Reviews)
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i class="fa fa-bolt"></i></span></div>
							<div class="item-card2-img">
								<a href="ad_info"></a>
								<img src="/assets//images/products/products/f3.jpg" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-cutlery"></i></a>
								<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
											<a href="ad_info" class="text-dark"><h4 class="mb-0">Somik Restaurant</h4></a>
										</div>
										<div class="d-flex pb-0 pt-0">
											<a href="">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
											</a>
											<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
										</div>
										<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer">
									<div class="item-card2-footer-u">
										<div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">4.0/5</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm is--active">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div> (5 Reviews)
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="item">
							<div class="card overflow-hidden">
								<div class="item-card2-img">
									<a href="ad_info"></a>
									<img src="/assets//images/products/products/f2.jpg" alt="img" class="cover-image">
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
									<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
								</div>
								<div class="card-body pb-0">
									<div class="item-card2">
										<div class="item-card2-desc">
											<div class="item-card2-text">
												<a href="ad_info" class="text-dark"><h4 class="mb-0">GilkonStar Hotel</h4></a>
											</div>
											<div class="d-flex pb-0 pt-0">
												<a href="">
													<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
												</a>
												<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
											</div>
											<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="item-card2-footer">
										<div class="item-card2-footer-u">
											<div class="row d-flex">
												<span class="review_score mr-2 badge badge-primary">4.0/5</span>
												<div class="rating-stars d-inline-flex">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													<div class="rating-stars-container">
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
													</div> (5 Reviews)
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="item">
							<div class="card overflow-hidden">
								<div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">Collections</span></div>
								<div class="item-card2-img">
									<a href="ad_info"></a>
									<img src="/assets//images/products/products/h2.jpg" alt="img" class="cover-image">
								</div>
								<div class="item-card2-icons">
									<a href="#" class="item-card2-icons-l bg-primary"> <i class="fa fa-home"></i></a>
									<a href="#" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
								</div>
								<div class="card-body pb-0">
									<div class="item-card2">
										<div class="item-card2-desc">
											<div class="item-card2-text">
												<a href="ad_info" class="text-dark"><h4 class="mb-0">GilkonStar Hotel</h4></a>
											</div>
											<div class="d-flex pb-0 pt-0">
												<a href="">
													<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i>Florida, Uk</p>
												</a>
												<span class="ml-3 pb-0 pt-0 mb-2 mt-2">$200.00</span>
											</div>
											<p class="">Ut enim ad minima veniam, quis int nostrum exercitationem </p>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="item-card2-footer">
										<div class="item-card2-footer-u">
											<div class="row d-flex">
												<span class="review_score mr-2 badge badge-primary">4.0/5</span>
												<div class="rating-stars d-inline-flex">
													<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
													<div class="rating-stars-container">
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm is--active">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
														<div class="rating-star sm">
															<i class="fa fa-star"></i>
														</div>
													</div> (5 Reviews)
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Latest Ads-->


		<!--Features-->
		<section class="sptb bg-white">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Features</h2>
					<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
				</div>
				<div class="item-all-cat center-block text-center">
					<div class="row">
						<div class="col-lg-4 col-md-12">
							<div class="status-border mb-4 mb-lg-0">
								<div class="p-4">
									<div class="status-info text-center">
										<div class="status-img mb-5">
											<i class="fa fa-thumbs-o-up fa-4x"></i>
										</div>
										<h3 class="mt-2 mb-2">Quality Products</h3>
										<p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="status-border mb-4 mb-lg-0">
								<div class="p-4">
									<div class="status-info text-center">
										<div class="status-img mb-5">
											<i class="fa fa-shield fa-4x"></i>
										</div>
										<h3 class="mt-2 mb-2">Best Security</h3>
										<p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="status-border">
								<div class="p-4">
									<div class="status-info text-center">
										<div class="status-img mb-5">
											<i class="fa fa-headphones fa-4x"></i>
										</div>
										<h3 class="mt-2 mb-2">24/7 Customer Support</h3>
										<p class="text-muted mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Features-->

		<!--Blogs-->
		<section class="sptb">
			<div class="container">
				<div class="section-title center-block text-center">
					<h2>Blog</h2>
					<p>Naše najnovije objave</p>
				</div>
				<div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Excepteur occaecat cupidatat</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Joanne Nash</a>
										<small class="d-block text-muted">1 day ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/j2.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">Sed ut perspiciatis unde iste</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/male/7.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Tanner Mallari</a>
										<small class="d-block text-muted">2 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="fs-20">At vero eos et accusamus et iusto</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/female/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Aracely Bashore</a>
										<small class="d-block text-muted">5 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/ed3.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Excepteur occaecat cupidatat</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/male/15.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Royal Hamblin</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/j3.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/female/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Rosita Chatmon</a>
										<small class="d-block text-muted">10 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="#"></a>
								<img src="/assets/images/products/products/ed4.jpg" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
									<div class="ml-auto">
										<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
									</div>
								</div>
								<a href="blog-details.html" class="text-dark"><h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4></a>
								<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum exercitationem </p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/male/6.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="profile.html" class="text-default">Loyd Nolf</a>
										<small class="d-block text-muted">15 days ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fe fe-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Blogs-->

@endsection