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
									<a href="userprofile.html" class="text-dark"><h4 class="mt-3 mb-0 font-weight-semibold">Robert McLean</h4></a>
								</div>
							</div>
							<div class="item1-links  mb-0">
								<a href="/mydash" class="active d-flex border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-user"></i></span> Uredi profil
								</a>
								<a href="/myads" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Moji Oglasi
								</a>
								<a href="/ad_post2" class=" d-flex  border-bottom">
									<span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Dodaj oglas
								</a>
								<a href="#" class="d-flex">
									<span class="icon1 mr-3"><i class="icon icon-power"></i></span> Logout
								</a>
							</div>
						</div>
					
						
					</div>
					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<div class="card-header">
								<h3 class="card-title">Uredi Korisnički Profil</h3>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Ime</label>
											<input type="text" class="form-control" placeholder="Ime">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Prezime</label>
											<input type="text" class="form-control" placeholder="Prezime">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Email adresa</label>
											<input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Telefonski broj</label>
											<input type="number" class="form-control" placeholder="Broj">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">Adresa</label>
											<input type="text" class="form-control" placeholder="Adresa">
										</div>
									</div>
									<div class="col-sm-6 col-md-4">
										<div class="form-group">
											<label class="form-label">Grad</label>
											<input type="text" class="form-control" placeholder="Grad">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label class="form-label">Poštanski broj</label>
											<input type="number" class="form-control" placeholder="ZIP kod">
										</div>
									</div>
									
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Facebook</label>
											<input type="text" class="form-control" placeholder="https://www.facebook.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Google</label>
											<input type="text" class="form-control" placeholder="https://www.google.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Twitter</label>
											<input type="text" class="form-control" placeholder="https://twitter.com/">
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<label class="form-label">Pinterest</label>
											<input type="text" class="form-control" placeholder="https://in.pinterest.com/">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label class="form-label">O meni</label>
											<textarea rows="5" class="form-control" placeholder="Unesi opis "></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group mb-0">
											<label class="form-label">Slika</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="example-file-input-custom">
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
			</div>
		</section>
		<!--/User Dashboard-->


@endsection