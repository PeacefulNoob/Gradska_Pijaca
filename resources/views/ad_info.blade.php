@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12 d-block mx-auto">
								
															@include('components.search')

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
					<h4 class="page-title">{{ $ad->title }}</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Početna</a></li>
						<li class="breadcrumb-item"><a href="/ad">Svi Oglasi</a></li>

						<li class="breadcrumb-item active" aria-current="page">{{ $ad->title }}</li>
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
										<div class="carousel-item active"> <img src="/assets/images/ad_images/{{$ad->image}}" alt="img"> </div>

											@foreach ($images as $image)
											<div class="carousel-item "> <img src="/assets/images/ad_images/{{$image->title}}" alt="img"> </div>

													@endforeach
									
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
													@foreach ($images as $image)
													<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="/assets/images/ad_images/{{$image->title}}" alt="img"></div>

													@endforeach

												</div>
											
											</div>
										
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

						<h3 class="mb-5 mt-4">Proizvodi </h3>

						<!--Related Posts-->
						<div id="myCarousel5" class="owl-carousel owl-carousel-icons3">
							<!-- Wrapper for carousel items -->
@foreach ($cat_ads as $ads)
	

							<div class="item">
								<div class="card">
									<div class="item-card7-imgs">
										<a href="blog_details"></a>
										<img src="/assets/images/ad_images/{{$ads->image}}" alt="img" class="cover-image">
									</div>
									<div class="item-card7-overlaytext">
										<a href="blog_details" class="text-white"> </a>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
										<a href="blog_details" class="text-dark"><h4 class="font-weight-semibold">{{$ads->title}}</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li ><a href="/showLocation/{{$ad->location}}" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  {{$ads->location}}</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i>  {{$ads->created_at}}</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i>{{$user->name}}</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> {{$user->phoneNo}}</a></li>
											</ul>
											<p class="mb-0">@php
												
												echo substr($ads->description, 0, 20);
											@endphp </p>
										</div>
									</div>
								</div>
							</div>
							
							@endforeach
						
						</div>
						<!--/Related Posts-->

					
					<!--Right Side Content-->
					</div>
					<div class="col-xl-4 col-lg-4 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Oglas objavio  </h3>
							</div>
								
						
							<div class="card-body  item-user">
								<div class="profile-pic mb-0">
									<img src="/assets/images/user_images/{{$user->id}}" class="brround avatar-xxl" alt="user">
									<div >
									<a href="/site/{{$user->id}}" class="text-dark"><h4 class="mt-3 mb-1 font-weight-semibold">{{$user->name}} {{$user->last_name}}</h4></a>
										<span class="text-muted">Učlanio se  {{$user->created_at}}</span>
								</div>

								</div>
							</div>
							<div class="card-body item-user">
								<h4 class="mb-4">Kontakt informacije</h4>
								<div>
									<h6><span class="font-weight-semibold"><i class="fa fa-envelope mr-3 mb-2"></i></span><a href="#" class="text-body"> {{$user->email}}</a></h6>
									<h6><span class="font-weight-semibold"><i class="fa fa-phone mr-3  mb-2"></i></span><a href="#" class="text-primary"> {{$user->phoneNo}}</a></h6>
								</div>
								
							</div>
						
						</div>

						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Tagovi</h3>
							</div>
							<div class="card-body product-filter-desc">
								<div class="product-tags clearfix">
									<ul class="list-unstyled mb-0">
										@foreach ($ad->tags as $tag)
										<li><a href="/tag/{{$tag->id}}">{{$tag->name}}</a></li>
										@endforeach
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
									<a href="https://www.facebook.com/gradska.pijaca" class="facebook-bg" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://www.instagram.com/gradska.pijaca/" class="pinterest-bg" target="_blank" ><i class="fa fa-instagram"></i></a>

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