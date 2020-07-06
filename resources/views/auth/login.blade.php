@extends('layouts.app')

@section('content')
<div class="container">
    <!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1 class="">Login</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Login</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!--/Sliders Section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="single-page" >
						<div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                            
							<div class="wrapper wrapper2">
						
                                    <form  id="login" class="card-body" method="POST" action="{{ route('login') }}">
                                        @csrf
									<h3>Login</h3>
									<div class="mail">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label>E-mail adresa</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
									<div class="passwd">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        <label>Pasvord</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
									</div>
									<div class="submit">
										<button type="submit" class="btn btn-primary">
											{{ __('Login') }}
										</button>
                                    </div>
                              
									<p class="text-dark mb-0">Nemate korisnički nalog?<a href="/register" class="text-primary ml-1">Registrujte se</a></p>
                                </form>
                      
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Login-Section-->
   </div>
@endsection
