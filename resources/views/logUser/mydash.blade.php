@extends('layouts.main')

@section('content')

		<!--Breadcrumb-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Korisnički panel</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Korisnički panel</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Breadcrumb-->

		<!--User Dashboard-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-12 col-md-12">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Korisnički panel</h3>
							</div>
							<div class="card-body text-center item-user border-bottom">
								<div class="profile-pic">
									<div class="profile-pic-img">
										<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
										<img src="../../assets/images/faces/male/25.jpg" class="brround" alt="user">
									</div>
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4></a>
								</div>
							</div>
							<div class="item1-links  mb-0">
								<a href="/user" class="active d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Uredi profil
								</a>
								<a href="/user/{{ Auth::user()->id}}" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Moji Oglasi
								</a>
								<a href="/ad/create" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Dodaj oglas
								</a>
								<a href="#" class="d-flex">
									<span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
								</a>
							</div>
						</div>
					
						
					</div>
				
					<div class="col-xl-9 col-lg-12 col-md-12">
						<form action="{{ route('user.update',  Auth::user()->id) }}"  method="POST" enctype="multipart/form-data">
							@method('PUT')
							@csrf
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Uredi Korisnički Profil</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Ime</label>
											<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Prezime</label>
											<input type="text"  name="last_name" class="form-control" value="{{ Auth::user()->last_name }}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Email adresa</label>
											<input type="email" name="email"  class="form-control" value="{{ Auth::user()->email }}">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Telefonski broj</label>
											<input type="number"  name="phoneNo" class="form-control" value="{{ Auth::user()->phoneNo }}">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Grad</label>
											<input type="text"  name="city" class="form-control" value="{{ Auth::user()->city }}">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label class="form-label">Poštanski broj</label>
											<input type="number" name="zip"  class="form-control" value="{{ Auth::user()->zip }}">
										</div>
									</div>
									
						{{-- 			<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Facebook</label>
											<input type="text" class="form-control" value="https://www.facebook.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Google</label>
											<input type="text" class="form-control" value="https://www.google.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Twitter</label>
											<input type="text" class="form-control" value="https://twitter.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Pinterest</label>
											<input type="text" class="form-control" value="https://in.pinterest.com/">
										</div>
									</div> --}}
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">O meni</label>
											<textarea rows="5" name="about"  class="form-control" value="{{ Auth::user()->about }}"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-0">
											<label class="form-label">Slika</label>
											<div class="custom-file">
												<input type="file"  name="image" class="custom-file-input" >
												<label class="custom-file-label">Izaberite sliku</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Potvrda</button>
							</div>
						</div>
					</div>
				</div>
				</form>
				
			</div>
		</section>
		<!--/User Dashboard-->


@endsection