@extends('layouts.main')

@section('content')
<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Blog</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="/">Početna</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Breadcrumb-->

<!--Add listing-->
<section class="sptb">
    <div class="container">
        <div class="row">
            <!--Add lists-->
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="row">
                    @foreach ($posts as $post)
                        
              
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="item7-card-img">
                                <a href="/post/{{$post->id}}"></a>
                                <img src="/assets/images/post_images/{{$post->cover_image}}" alt="img" class="cover-image">
                              
                            </div>
                            <div class="card-body">
                                <div class="item7-card-desc d-flex mb-2">
                                    <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ $post->created_at}}</a>
                                    <div class="ml-auto">
                                        <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
                                    </div>
                                </div>
                                <a href="#" class="text-dark">
                                    <h4 class="font-weight-semibold">{{ $post->title}}</h4>
                                </a>
                                <p>{{ $post->body}} </p>
                                <a href="/post/{{$post->id}}" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                 
                    @endforeach
                </div>
         
            </div>
            <!--/Add lists-->

            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control br-tl-3  br-bl-3" placeholder="Pretraga">
                            <div class="input-group-append ">
                                <button type="button" class="btn btn-primary br-tr-3  br-br-3">
                                    Pretraga
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kategorije</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-catergory">
                            <div class="item-list">

                                <ul class="list-group mb-0">
                                    @foreach ($categories as $category)
                                        
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-building bg-primary text-primary"></i> {{$category->title}}
                                            <span
                                                class="badgetext badge badge-pill badge-light mb-0 mt-1 mt-1">14</span>
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
             
          
            </div>
            <!--/Right Side Content-->
        </div>
    </div>
</section>
<!--Add listing-->

@include('components.newsletter')

@endsection