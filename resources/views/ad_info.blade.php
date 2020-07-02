@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								
								<div class=" search-background">
									<div class="form row no-gutters">
										<div class="form-group  col-xl-6 col-lg-5 col-md-12 mb-0">
											<input type="text" class="form-control input-lg border-right-0" id="text" placeholder="Search Products">
										</div>
										<div class="form-group col-xl-4 col-lg-4 select2-lg  col-md-12 mb-0">
											<select class="form-control select2-show-search border-bottom-0 w-100" data-placeholder="Select">
												<optgroup label="Categories">
													<option>Select</option>
													<option value="1">Vehicle</option>
													<option value="2">Real Estate</option>
													<option value="3">Computer</option>
													<option value="4">Clothing</option>
													<option value="5">Job</option>
													<option value="6">Services</option>
													<option value="7">Electronics</option>
													<option value="8">Mobile</option>
													<option value="9">Events</option>
													<option value="10">Constructions</option>
												</optgroup>
											</select>
										</div>
										<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
											<a href="#" class="btn btn-lg btn-block btn-primary br-bl-0 br-tl-0">Pretraga</a>
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

		<!--BreadCrumb-->
		<div class="bg-white border-bottom">
			<div class="container">
				<div class="page-header">
					<h4 class="page-title">Oglas</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Početna</a></li>
						<li class="breadcrumb-item active" aria-current="page">Oglas</li>
					</ol>
				</div>
			</div>
		</div>
		<!--/BreadCrumb-->

		<!--Add listing-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12">

						<!--Classified Description-->
						<div class="card overflow-hidden">
							<div class="card-body">
								<div class="item-det mb-4">
								<a href="#" class="text-dark"><h3> {{ $ad->title }}</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> {{ $ad->location }}</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> {{ $ad->created_at }}</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-eye text-muted mr-1"></i> {{ $ad->views }}</a></li>
										</ul>
									
										<div class="rating-stars d-flex">
											<div class="rating-stars-container mr-2">
												<div class="rating-star sm">
													<i class="fa fa-heart"></i>
												</div>{{ $ad->likes }}
											</div> 
										</div>
									</div>
								</div>
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active"> <img src="../../assets/images/products/products/v1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v4.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v1.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v2.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v3.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v4.jpg" alt="img"> </div>
											<div class="carousel-item"> <img src="../../assets/images/products/products/v1.jpg" alt="img"> </div>
										</div>
										<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
											<i class="fa fa-angle-left" aria-hidden="true"></i>
										</a>
										<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
											<i class="fa fa-angle-right" aria-hidden="true"></i>
										</a>
									</div>
									<div class="clearfix">
										<div id="thumbcarousel" class="carousel slide" data-interval="false">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../../assets/images/products/v1.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../../assets/images/products/v2.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../../assets/images/products/v3.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../../assets/images/products/v4.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../../assets/images/products/v1.png" alt="img"></div>

												</div>
												<div class="carousel-item ">
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="../../assets/images/products/v1.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="../../assets/images/products/v2.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="../../assets/images/products/v3.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="../../assets/images/products/v4.png" alt="img"></div>
													<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="../../assets/images/products/v1.png" alt="img"></div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
											<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Opis</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									{{ $ad->description }}
								</div>
							
							</div>
							<div class="pt-4 pb-4 pl-5 pr-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Product ID : #{{ $ad->id}}</a>
										</div>
									
									</div>
								</div>
							</div>
						
						</div>
						<!--/Classified Description-->

						<h3 class="mb-5 mt-4">Related Posts</h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->

							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="blog_details"></a>
										<img src="../../assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="blog_details" class="text-white"> Education</a>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Record Writing</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  Los Angles</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 5-67987608</a></li>
											</ul>
											<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem....</p>
										</div>
									</div>
								</div>
							</div>
							
						
						
						</div>
						<!--/Related Posts-->

					
					<!--Right Side Content-->
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Posted By</h3>
							</div>
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="../../assets/images/faces/male/25.jpg" class="brround avatar-xxl" alt="user">
									<div >
										<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">Robert McLean</h4></a>
										<span class="text-muted">Member Since November 2008</span>
										<h6 class="mt-2 mb-0"><a href="#" class="btn btn-primary btn-sm">See All Ads</a></h6>
									</div>

								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Contact Info</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> robert123@gmail.com</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-primary"> 0-235-657-24587</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-link mr-3 "></i></span><a href="#" class="text-primary">http://spruko.com/</a></h6>
								</div>
								<div class=" item-user-icons mt-4">
									<a href="#" class="facebook-bg mt-0"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
								</div>
							</div>
						
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Keywords</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										<li><a href="#">Vehicle</a></li>
										<li><a href="#">Model Cars</a></li>
										<li><a href="#">Best Car</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Shares</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-filter-icons text-center">
									<a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
									<a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
									<a href="#" class="google-bg"><i class="fa fa-google"></i></a>
									<a href="#" class="dribbble-bg"><i class="fa fa-dribbble"></i></a>
									<a href="#" class="pinterest-bg"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					
					

					
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>

		@include('components.newsletter')


	@endsection