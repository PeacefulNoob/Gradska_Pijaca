@extends('layouts.main')

@section('content')

		<!--Sliders Section-->
		<div>
			<div class="cover-image sptb-1 bg-background" data-image-src="../../assets/images/banners/banner1.jpg">
				<div class="header-text1 mb-0">
					<div class="container">
						<div class="row">
							<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
								
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
													@foreach ($categories as $categ)
													<option>Izaberi</option>
													<option value="{{$categ->id}}">{{$categ->name}}</option>
								@endforeach
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
					<h4 class="page-title"></h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Početna</a></li>
						<li class="breadcrumb-item active" aria-current="page">Svi Oglasi</li>
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
                                                            <a href="/ad/{{$ad->id}}">{{$ad->categories->title}}</a>
																<a href="/ad/{{$ad->id}}" class="text-dark mt-2"><h4 class="font-weight-semibold mt-1">{{$ad->title}} </h4></a>
																<p>{{$ad->description}}</p>
																<div class="item-card9-desc">
																	<a href="#" class="mr-4"><span class=""><i class="fa fa-map-marker text-muted mr-1"></i> {{$ad->location}}</span></a>
																	<a href="#" class=""><span class=""><i class="fa fa-calendar-o text-muted mr-1"></i> {{$ad->created_at}}</span></a>
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