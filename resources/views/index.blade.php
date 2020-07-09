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
									@include('components.search')

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
				
				@if(session()->has("success"))
				<div class="alert alert-success">  {{session()->get("success")}}</div>
				@endif
		

				<div class="section-title center-block text-center">
					<h2>Kategorije</h2>
					<p>Pregled naših najgledanijijh kategorija</p>
				</div>
				<div id="small-categories" class="owl-carousel owl-carousel-icons2">
					@foreach ($categories as $category)
					<div class="item">
						<div class="card mb-0">
							<div class="card-body">
								<div class="cat-item text-center">
									<a  href="/categories/{{$category->id}}"></a>
									<div class="cat-img">
										<img src="/assets//images/products/categories/dress.png" alt="img">
									</div>
									<div class="cat-desc">
										<h5 class="mb-1">{{$category->title}}</h5>
{{-- 										<small class="badge badge-pill badge-primary mr-2">32</small><span class="text-muted">ads are posted</span>
 --}}									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				
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
					@if(count($ads) > 0)
					@foreach ($ads as $ad)
						
				
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
						<div class="card overflow-hidden">
							<div class="power-ribbon power-ribbon-top-left text-warning"></div>
							<div class="item-card2-img">
								<a href=" ad/{{$ad->id}}  "></a>
								<img src="/assets/images/ad_images/{{$ad->image}}" alt="img" class="cover-image">
							</div>
							<div class="item-card2-icons">
								@php
								$check = \App\Like::where([
									['user_id', Auth::id()],
									['ad_id' , $ad->id]
									])->first()	;
								
								@endphp
								@if($check)
								<div  class="item-card2-icons-r bg-liked"><i class="fa fa fa-heart-o"></i></div>

								@else
								<a href="like/{{$ad->id}}" class="item-card2-icons-r bg-secondary"><i class="fa fa fa-heart-o"></i></a>
								@endif
							</div>
							<div class="card-body pb-0">
								<div class="item-card2">
									<div class="item-card2-desc">
										<div class="item-card2-text">
										<a href="ad/{{$ad->id}} " class="text-dark"><h4 class="mb-0"> {{$ad->title}} </h4></a>
										</div>
										<div class="d-flex">
											<a href="/showLocation/{{$ad->location}}">
												<p class="pb-0 pt-0 mb-2 mt-2"><i class="fa fa-map-marker text-danger mr-2"></i> {{$ad->location}} </p>
											</a>
										</div>
										<p class="">@php
												
											echo substr($ad->description, 0, 30);
										@endphp </p>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<div class="item-card2-footer">
									<div class="item-card2-footer-u">
									    <div class="row d-flex">
											<span class="review_score mr-2 badge badge-primary">Likes : {{$ad->likes}}</span>
                                            <div class="rating-stars d-inline-flex">
												<input type="number" readonly="readonly" class="rating-value star" name="rating-stars-value" value="3">
											Views :	({{$ad->views}})
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				@endforeach
						@else
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
							<h2>Nema Oglasa</h2>
						</div>
						@endif
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
					@if(count($posts) > 0)

					@foreach ($posts as $post)
						
					<div class="item">
						<div class="card mb-0">
							<div class="item7-card-img">
								<a href="/post/{{$post->id}}"></a>
								<img src="/assets/images/post_images/{{ $post->cover_image }}" alt="img" class="cover-image">
							</div>
							<div class="card-body p-4">
								<div class="item7-card-desc d-flex mb-2">
									<i class="fa fa-calendar-o text-muted mr-2"></i>{{$post->created_at}}
									<div class="ml-auto">
										<i class="fa fa-comment-o text-muted mr-2"></i>{{$post->comments->count()}} Komentara
									</div>
								</div>
								<a href="/post/{{$post->id}}" class="text-dark"><h4 class="fs-20">{{$post->title}}</h4></a>
								<p>{{$post->body}}</p>
								<div class="d-flex align-items-center pt-2 mt-auto">
									<img src="/assets/images/faces/male/5.jpg" class="avatar brround avatar-md mr-3" alt="avatar-img">
									<div>
										<a href="#" class="text-default">{{$post->user->name}} {{$post->user->last_name}}</a>
										<small class="d-block text-muted">{{$post->created_at}}</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-thumbs-o-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					@endforeach
@else 
<div class="item">
<h2>Nema Blog Objave</h2>
</div>
@endif
				</div>
			</div>
		</section>
		<!--Blogs-->

@endsection