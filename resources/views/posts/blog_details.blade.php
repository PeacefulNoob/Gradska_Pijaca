@extends('layouts.main')

@section('content')
<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">{{ $post->title }}</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Početna</a></li>
                        <li class="breadcrumb-item"><a href="/post">Blog</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{ $post->title }}</li>
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
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="item7-card-img">
                            <img src="/assets/images/post_images/{{ $post->cover_image }}" alt="img" class="w-100">
                            <div class="item7-card-text">
                                <span class="badge badge-info">{{ $post->categories_post->title }}</span>
                            </div>
                        </div>
                        <div class="item7-card-desc d-flex mb-2 mt-3">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>{{ $post->user->created_at }}</a>
                            <a href="/site/{{$post->user->id}}"><i class="fa fa-user text-muted mr-2"></i> {{ $post->user->name }}</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                            </div>
                        </div>
                        <a href="#" class="text-dark">
                            <h2 class="font-weight-semibold">{{ $post->title }}</h2>
                        </a>
                        <p>{{ $post->body }}
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Komentari</h3>
                    </div>


                    @if($post->comments->count())

                        <div class="card-body p-0">
                            @foreach($post->comments as $comment)

                                <div class="media mt-0 p-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"><img class="media-object brround" alt="64x64"
                                                src="/assets/images/user_images/{{ $comment->user->image }}"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold"> {{ $comment->name }}
                                            <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="verified"><i
                                                    class="fa fa-check-circle-o text-success"></i></span>

                                        </h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i>
                                            {{ $comment->created_at->toFormattedDateString() }}
                                        </small>
                                        <p class="font-13  mb-2 mt-2">
                                            {{ $comment->body }}
                                        </p>


                                    </div>
                                </div>

                        </div>
                    @endforeach


            @else
                <div class="post-comments">
                    <div class="card-body p-0">
                        <div class="media mt-0 p-5">
                            <div class="media-body">

                                <p>Nema Komentara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
                <div class="card mb-lg-0">
                        <div class="card-header">
                            <h3 class="card-title">Napišite svoj komentar</h3>
                        </div>
                        <form class="post-reply" method="POST" action="/posts/{{ $post->id }}/comments">
                            {{ csrf_field() }}
                            <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name1" name="name" placeholder="Vaše ime"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email adresa" required>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="body" rows="6" placeholder="Vaš komentar"
                                            required></textarea>
                                    </div>
                                <button class="btn btn-primary btn-md commB ">Pošalji</button>
                            </div>
                        </form>
                </div>
            </div>
                <!--Rightside Content-->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="input-group">
                                <div class="form-group  col-xl-12 col-lg-12 col-md-12 select2-lg mb-0 bg-white ">
                                    <select class="form-control select2-show-search  border-bottom-0" data-placeholder="Izaberi Oglas"  id="selectbox"  onchange="javascript:location.href = this.value;">
                                        <option value="#">Izaberi Oglas</option>
                                        @foreach ($posts as $post)
                                        <option value="/post/{{$post->id}}">{{$post->title}}</option>
                                        @endforeach
                                </select>
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
                                        @foreach($categories as $category)

                                            <li class="list-group-item">
                                                <a href="/categories_post/{{ $category->id }}" class="text-dark">
                                                    <i class="fa fa-building bg-primary text-primary"></i>
                                                    {{ $category->title }}
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
                <!--/Rightside Content-->
            </div>
        </div>
</section>
<!--/Add listing-->

@include('components.newsletter')


@endsection
