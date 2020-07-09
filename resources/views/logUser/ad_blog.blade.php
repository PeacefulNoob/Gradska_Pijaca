
@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Blog Objava</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Dodaj blog objavu</li>
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
						<form action="{{ route('post.store')}}"  method="POST" enctype="multipart/form-data"  id="commentForm"  class="form-horizontal mb-0">
							@csrf
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Blog Objava</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">Naziv Blog Objave</label>
									<input type="text" name="title" class="form-control" placeholder="" required>
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Kategorija</label>
									<select name="cat_id" class="form-control custom-select" required>
										<option value="0">Izaberite</option>
										@foreach ($categories as $category)
										<option value="{{$category->id}}">{{$category->title}}</option>

										@endforeach
									</select>
								</div>
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis</label>
									<textarea class="form-control" name="body" rows="6" placeholder="Unesite opis ovde.." required></textarea>
								</div>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="cover_image" required>
										<label class="custom-file-label">Izaberite sliku</label>
									</div>
								</div>
							
							
							
							
							</div>
							<div class="card-footer ">
								<button type="submit" class="btn btn-primary btn-xs" id="uploadB">DODAJ</button>
							</div>
						</div>
					</form>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add posts-section-->




		@endsection