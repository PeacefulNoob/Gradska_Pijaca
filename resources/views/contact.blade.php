@extends('layouts.main')

@section('content')
		<!--Breadcrumb-->
		<div>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white ">
							<h1 class="">Kontakt</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Kontakt</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Breadcrumb-->

		<!--Contact-->
		<div class="sptb bg-white mb-0 pb-0">
			<div class="container">
				<div class="row">
				    <div class="col-lg-5 col-xl-4  col-md-12  d-block mb-7">
					    <div class="section-title center-block text-center">
							<h2>Kontakt informacije</h2>
						</div>
						<div class="row text-white">
							<div class="col-12 mb-5">
								<div class="support-service bg-primary br-2 mb-4 mb-xl-0">
									<i class="fa fa-phone"></i>
									<h6>+382 69 96 48 34</h6>
									<P>Kontakt!</P>
								</div>
							</div>
							<div class="col-12 mb-5">
								<div class="support-service bg-secondary br-2 mb-4 mb-xl-0">
									<i class="fa fa-clock-o"></i>
									<h6>24/7</h6>
									<p>Radni sati!</p>
								</div>
							</div>
							<div class="col-12">
								<div class="support-service bg-warning br-2">
									<i class="fa fa-envelope-o"></i>
									<h6>yourdomain@gmail.com</h6>
									<p>E-mail!</p>
								</div>
							</div>
						</div>
					</div>
				    <div class="col-lg-7 col-xl-8 col-md-12 d-block ">
						<div class="single-page" >
							<div class="col-lg-12  col-md-12 mx-auto d-block">
							    <div class="section-title center-block text-center">
									<h2>Kontakt forma</h2>
								</div>
								<div class="wrapper wrapper2">
									<div class="card mb-0">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Vaše ime">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email adresa">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Message"></textarea>
											</div>
											<a href="#" class="btn btn-primary">Pošaljite poruku</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Contact-->

		<!--Statistics-->
		<section class="sptb bg-white">
			<div class="container">


			</div>
		</section>
		<!--/Statistics-->
@endsection