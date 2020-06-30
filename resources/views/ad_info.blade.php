@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								<div class="text-center text-white ">
									<h1 ><span class="font-weight-bold">16,25,365</span> Ads Available In Hyderabad</h1>
								</div>
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
											<a href="#" class="btn btn-lg btn-block btn-primary br-bl-0 br-tl-0">Search</a>
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
					<h4 class="page-title">Classifieds</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Categories</a></li>
						<li class="breadcrumb-item active" aria-current="page">Classifieds</li>
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
							<div class="ribbon ribbon-top-right text-danger"><span class="bg-danger">featured</span></div>
							<div class="card-body">
								<div class="item-det mb-4">
									<a href="#" class="text-dark"><h3 >Maruti Suzuki Alto</h3></a>
									<div class=" d-flex">
										<ul class="d-flex mb-0">
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-briefcase text-muted mr-1"></i> Cars</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i> USA</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-calendar text-muted mr-1"></i> 5 hours ago</a></li>
											<li class="mr-5"><a href="#" class="icons"><i class="icon icon-eye text-muted mr-1"></i> 765</a></li>
										</ul>
										<div class="rating-stars d-flex mr-5">
											<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" id="rating-stars-value" value="4">
											<div class="rating-stars-container mr-2">
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
											</div> 4.0
										</div>
										<div class="rating-stars d-flex">
											<div class="rating-stars-container mr-2">
												<div class="rating-star sm">
													<i class="fa fa-heart"></i>
												</div>
											</div> 135
										</div>
									</div>
								</div>
								<div class="product-slider">
									<div id="carousel" class="carousel slide" data-ride="carousel">
										<div class="arrow-ribbon2 bg-primary">$539</div>
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
								<h3 class="card-title">Description</h3>
							</div>
							<div class="card-body">
								<div class="mb-4">
									<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble thena bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
								</div>
								<h4 class="mb-4">Specifications</h4>
								<div class="row">
									<div class="col-xl-12 col-md-12">
										<div class="table-responsive">
											<table class="table row table-borderless w-100 m-0 text-nowrap ">
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><span class="font-weight-bold">Fuel Type :</span> Diesel</td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Breaks :</span> Front , Rear</td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Seating :</span> 5 members</td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Colors :</span> Red , pink, Gray</td>
													</tr>
												</tbody>
												<tbody class="col-lg-12 col-xl-6 p-0">
													<tr>
														<td><span class="font-weight-bold">Air Bags :</span> Available</td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Colors :</span> Red , pink, Gray</td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Engine :</span> F8D </td>
													</tr>
													<tr>
														<td><span class="font-weight-bold">Power Windows :</span> Available </td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="pt-4 pb-4 pl-5 pr-5 border-top border-top">
								<div class="list-id">
									<div class="row">
										<div class="col">
											<a class="mb-0">Classified ID : #8256358</a>
										</div>
										<div class="col col-auto">
											Posted By <a class="mb-0 font-weight-bold">Individual</a> / 21st Dec 2018
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="icons">
									<a href="#" class="btn btn-info icons"><i class="icon icon-share mr-1"></i> Share Ad</a>
									<a href="#" class="btn btn-primary icons"><i class="icon icon-heart  mr-1"></i> 678</a>
									<a href="#" class="btn btn-secondary icons"><i class="icon icon-printer  mr-1"></i> Print</a>
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
									<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Negotiable</span></div>
									<div class="item-card7-imgs">
										<a href="blog_details"></a>
										<img src="../../assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="blog_details" class="text-white"> Education</a>
										<h4  class="font-weight-semibold mb-0">$389</h4>
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
							<div class="item">
								<div class="card">
									<div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">featured</span></div>
									<div class="item-card7-imgs">
										<a href="blog_details"></a>
										<img src="../../assets/images/products/products/v1.jpg" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="blog_details" class="text-white"> Cars</a>
										<h4  class=" mb-0">$854</h4>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Geep Automobiles</h4></a>
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
							<div class="item">
								<div class="card">
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/j1.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white">Furniture</a>
											<h4  class="font-weight-semibold mb-0">$786</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Marketing Executive</h4></a>
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
							<div class="item">
								<div class="card">
									<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">Collection</span></div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/f4.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white"> Restaurant</a>
											<h4  class="font-weight-semibold mb-0">$539</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="rblog_details" class="text-dark"><h4 class="font-weight-semibold">Houge Restaurant</h4></a>
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
							<div class="item">
								<div class="card">
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/pe1.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white"> Pets & Animals</a>
											<h4  class="font-weight-semibold mb-0">$925</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Care Brohzm</h4></a>
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
							<div class="item">
								<div class="card">
									<div class="ribbon ribbon-top-left text-success"><span class="bg-success">Free Shipping</span></div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/h5.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white"> Homes</a>
											<h4  class="font-weight-semibold mb-0">$925</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold"> Single Flat House</h4></a>
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
							<div class="item">
								<div class="card">
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white"> Education</a>
											<h4  class="font-weight-semibold mb-0">$378</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Digital Marketing Training </h4></a>
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
							<div class="item">
								<div class="card">
									<div class="ribbon ribbon-top-left text-primary"><span class="bg-primary">featured</span></div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="blog_details"></a>
											<img src="../../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="blog_details" class="text-white">Spa</a>
											<h4  class="font-weight-semibold mb-0">$836</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">Designers</h4></a>
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
							<div class="card-footer">
								<div class="text-left">
									<a href="#" class="btn  btn-info"><i class="fa fa-envelope"></i> Chat</a>
									<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#contact"><i class="fa fa-user"></i> Contact Me</a>
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
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Map location</h3>
							</div>
							<div class="card-body">
								<div class="map-header">
									<div class="map-header-layer" id="map2"></div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Search Ads</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<input type="text" class="form-control" id="search-text" placeholder="What are you looking for?">
								</div>
								<div class="form-group">
									<select name="country" id="select-countries" class="form-control custom-select select2-show-search">
										<option value="1" selected>All Categories</option>
										<option value="2">RealEstate</option>
										<option value="3">Restaurant</option>
										<option value="4">Beauty</option>
										<option value="5">Jobs</option>
										<option value="6">Services</option>
										<option value="7">Vehicle</option>
										<option value="8">Education</option>
										<option value="9">Electronics</option>
										<option value="10">Pets & Animals</option>
										<option value="11">Computer</option>
										<option value="12">Mobile</option>
										<option value="13">Events</option>
										<option value="14">Travel</option>
										<option value="15">Clothing</option>
									</select>
								</div>
								<div >
									<a href="#" class="btn  btn-primary">Search</a>
								</div>
							</div>
						</div>
						

						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Latest Seller Ads</h3>
							</div>
							<div class="card-body">
								<div class="rated-products">
									<ul class="vertical-scroll">
										<li class="item">
											<div class="media m-0 mt-0 p-5">
												<img class="mr-4" src="../../assets/images/products/toys.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Kids Toys</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$17 - $29</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class="mr-4" src="../../assets/images/products/1.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Leather Watch</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$22 - $45</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" mr-4" src="../../assets/images/products/4.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Digital Watch</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$35 - $72</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media p-5 mt-0">
												<img class=" mr-4" src="../../assets/images/products/6.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Sports Shoe</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-half-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$12 - $21</div>
												</div>
											</div>
										</li>
										<li class="item">
											<div class="media  mb-0 p-5 mt-0">
												<img class=" mr-4" src="../../assets/images/products/8.png" alt="img">
												<div class="media-body">
													<h4 class="mt-2 mb-1">Ladies shoes</h4>
													<span class="rated-products-ratings">
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
														<i class="fa fa-star-o text-warning"> </i>
													</span>
													<div class="h5 mb-0 font-weight-semibold mt-1">$89 - $97</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!--/Right Side Content-->
				</div>
			</div>
		</section>

		<!-- Newsletter-->
		<section class="sptb bg-white border-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-6 col-md-12">
						<div class="sub-newsletter">
							<h3 class="mb-2"><i class="fa fa-paper-plane-o mr-2"></i> Subscribe To Our Newsletter</h3>
							<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-lg-5 col-xl-6 col-md-12">
						<div class="input-group sub-input mt-1">
							<input type="text" class="form-control input-lg " placeholder="Enter your Email">
							<div class="input-group-append ">
								<button type="button" class="btn btn-primary btn-lg br-tr-3  br-br-3">
									Subscribe
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Newsletter-->

	@endsection