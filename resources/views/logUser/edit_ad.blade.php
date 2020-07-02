
@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Oglas</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Azuriraj Oglas</li>
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
					<div class="col-lg-8 col-md-12 col-md-12">
						<div class="card ">
							<div class="card-header ">
								<h3 class="card-title">Azuriraj Oglas</h3>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label class="form-label text-dark">{{-- {{$ad->title}} --}}</label>
									<input type="text" class="form-control" placeholder="">
								</div>
								<div class="form-group">
									<label class="form-label text-dark">Kategorija</label>
									<select class="form-control custom-select">
										<option value="0">Izaberite</option>
										<option value="1">RealEstate</option>
										<option value="2">Restaurant</option>
										<option value="3">Health & Fitness</option>
										<option value="4">Travel</option>
										<option value="5">Computer</option>
										<option value="6">Electronics</option>
										<option value="7">Jobs</option>
										<option value="8">Beauty & Spa</option>
										<option value="9">Clothing</option>
										<option value="10">Home & Furinture</option>
										<option value="11">Vechicles</option>
										<option value="12">Education</option>
										<option value="13">Services</option>
										<option value="14">Events</option>
									</select>
								</div>
							
						
								<div class="form-group">
									<label class="form-label text-dark">Opis</label>
									<textarea class="form-control" name="about" rows="6" placeholder="Unesite opis ovde.."></textarea>
								</div>
								<div class="form-group">
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="example-file-input-custom">
										<label class="custom-file-label">Izaberite sliku</label>
									</div>
								</div>
							
								<div class="p-2 border mb-4">
									<div class="upload-images d-flex">
										<div>
											<img src="../../assets/images/products/h5.jpg" alt="img" class="w73 h73 border p-0">
										</div>
										<div class="ml-3 mt-2">
											<h6 class="mb-0 mt-3 font-weight-bold">h5.jpg</h6>
											<small>4.5kb</small>
										</div>
										<div class="float-right ml-auto">
											<a href="#" class="float-right btn btn-icon btn-danger btn-sm mt-5" ><i class="fa fa-trash-o "></i></a>
										</div>
									</div>
								</div>
							
							
							</div>
							<div class="card-footer ">
								<a href="#" class="btn btn-success">Submit Now</a>
							</div>
						</div>
					</div>
				

				
				</div>
			</div>
		</section>
		<!--/Add posts-section-->




		@endsection