
@extends('layouts.main')

@section('content')

		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Oglas "{{$ad->title}}"</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Ažuriraj Oglas</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Add posts-section-->
		<section class="sptb">
			<div class="container">
				<div class="row ">
					@include('logUser.side_meni')

					<div class="col-lg-8 col-md-12 col-md-12">
						<div class="item7-card-img maxh50">
							<a href="#"></a>
							<img src="/assets/images/ad_images/{{ $ad->image }}" alt="img" class="cover-image">
						</div>
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Ažuriraj Oglas "{{$ad->title}}"</h3>
									<form action="/ad/{{$ad->id}}"  method="POST" enctype="multipart/form-data">
										@method('PATCH')
										@csrf
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Naziv </label>
									<input type="text" name="title" class="form-control" value="{{$ad->title}}">
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Lokacija </label>
									<input type="text" name="location" class="form-control" value="{{$ad->location}}">
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Kategorija</label>
									<select name ="cat_id" class="form-control custom-select">
										<option value="{{$ad->cat_id}}">{{$ad->cat_id}}</option>
								@foreach ($categories as $category)
								<option value="{{$category->id}}">{{$category->title}}</option>
								@endforeach
									</select>
								</div>
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis</label>
									<textarea class="form-control" name="description" rows="6" >{{$ad->description}}</textarea>
								</div>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="image">
										<label class="custom-file-label">Izaberite sliku</label>
									</div>
								</div>
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" id="uploadB">Dodaj</button>
							</div>
						</form>
						</div>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add posts-section-->




		@endsection