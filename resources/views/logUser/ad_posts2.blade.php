
@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Novi Oglas</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/user">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Novi Oglas</li>
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
					<div class="col-xl-8">
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Novi Oglas</h3>
							</div>
							<div class="card-body">
								<form action="{{ route('ad.store')}}"  method="POST" enctype="multipart/form-data"  id="commentForm"  class="form-horizontal mb-0">
									@csrf>
									<div id="rootwizard" class="border pt-0">
										<ul class="nav nav-tabs nav-justified">
											<li class="nav-item"><a href="#first" data-toggle="tab" class="nav-link font-bold">Osnovno</a></li>
											<li class="nav-item"><a href="#second" data-toggle="tab" class="nav-link font-bold">Detaljnije</a></li>
										
										</ul>
										<div class="tab-content card-body mt-3 mb-0 b-0">
											<div class="tab-pane fade" id="first">
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Naziv oglasa</label>
														<input type="text" name="title" class="form-control required Title" placeholder="">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Lokacija</label>
														<input type="text" name="location"  class="form-control required location" placeholder="">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Kategorija</label>
														<select name = "cat_id" class="form-control custom-select required category">
															<option value="0">Izaberite</option>
															@foreach ($categories as $category)
																
														
															<option value="{{$category->id}}">{{$category->title}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="second">
											
											
												<div class="control-group form-group">
													<label class="form-label text-dark">Opis</label>
													<textarea class="form-control required" name="about" rows="6" placeholder="Unesite opis oglasa.."></textarea>
												</div>
												<div class="control-group form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input required" name="image">
														<label class="custom-file-label">Unesite slike</label>
													</div>
												</div>
										
											</div>
									
											<button type="submit" id="uploadB">DODAJ</button>
										
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- end row -->
					<div class="row">
					<div class="col-xl-12 my-5">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec vertical-scroll mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
								</ul>
							</div>
						</div>
					
					</div>
				</div>
			
			</div>
		</section>
		<!--/Add posts-section-->
		@endsection