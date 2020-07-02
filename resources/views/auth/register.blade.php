@extends('layouts.app')

@section('content')
<div class="container">



	<!--Breadcrumb-->
    <section>
        <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
            <div class="header-text mb-0">
                <div class="container">
                    <div class="text-center text-white">
                        <h1 class="">Register</h1>
                        <ol class="breadcrumb text-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Register</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/Breadcrumb-->

    <!--Register-section-->
    <section class="sptb">
        <div class="container customerpage">
            <div class="row">
                <div class="single-page" >
                    <div class="col-lg-5 col-xl-4 col-md-6 d-block mx-auto">
                        <div class="wrapper wrapper2">
                       <form method="POST" action="{{ route('register') }}" id="Register" class="card-body" tabindex="500">
                                @csrf
                                <h3>Register</h3>
                                <div class="name">
                                    <label>Name</label>

                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="name">
                                    <label>Last name</label>

                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
        
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="mail">
                                   
                                    <label>Mail or Username</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                </div>
                                <div class="passwd">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="passwd">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                <p class="text-dark mb-0">Already have an account?<a href="/login" class="text-primary ml-1">Sign In</a></p>
                            </form>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Register-section-->

</div>

@endsection
