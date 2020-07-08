@extends('layouts.main')

@section('content')

		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								
								@include('components.search')

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
					<h4 class="page-title"></h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Početna</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{$category->title}}</li>
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
					@include('components.side_categories')

					<!--/Left Side Content-->

					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Add Lists-->
						<div class=" mb-0">
							<div class="">
								<div class="item2-gl ">
									
									<div class="tab-content">
									
										<div class="tab-pane active" id="tab-12">
											<div class="row">
												@foreach ($ads as $ad)
													
											
												<div class="col-lg-6 col-md-12 col-xl-4">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="/ad/{{$ad->id}}"></a>
																<img src="/assets/images/ad_images/{{$ad->image}}" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="#" class="item-card9-icons1 wishlist"> <i class="fa fa fa-heart-o"></i></a>
															</div>
														</div>
														<div class="card-body">
															<div class="item-card9">
																<a href="/ad/{{$ad->id}}">{{$category->title}}</a>
																<a href="/ad/{{$ad->id}}" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">{{$ad->title}} </h4></a>
																<p>{{$ad->description}}</p>
																<div class="item-card9-desc">
																	<a href="/showLocation/{{$ad->location}}" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> {{$ad->location}}</span></a>
																	<span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> {{$ad->created_at}}</span>
																</div>
															</div>
														</div>
														<div class="card-footer">
															<div class="item-card9-footer d-flex">
													
																<div class="ml-auto">
															
																	{{$ad->likes}}
																</div>
															</div>
														</div>
													</div>
												</div>
												@endforeach
											
											</div>
										</div>
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