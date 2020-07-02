@extends('layouts.main')

@section('content')
<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="text-center text-white">
                <h1 class="">Moji Oglasi</h1>
                <ol class="breadcrumb text-center">
                    <li class="breadcrumb-item"><a href="#">Početna</a></li>
                    <li class="breadcrumb-item"><a href="#">Korisnički panel </a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Moji Oglasi</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--/Breadcrumb-->

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
                                <span class="bg-success dots" data-toggle="tooltip" data-placement="top"
                                    title="online"></span>
                                <img src="../../assets/images/faces/male/25.jpg" class="brround" alt="user">
                            </div>
                            <a href="userprofile.html" class="text-dark">
                                <h4 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
                            </a>
                        </div>
                    </div>
                    <div class="item1-links  mb-0">
                        <a href="/user" class="d-flex border-bottom">
                            <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Uredi profil
                        </a>
                        <a href="/user/{{ Auth::user()->id}}" class="active  d-flex  border-bottom">
                            <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Moji Oglasi
                        </a>
                        <a href="/ad/create " class=" d-flex  border-bottom">
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
                        <h3 class="card-title">Moji Oglasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="ads-tabs">
                         
                            <div class="tab-content">
                                <div class="tab-pane active table-responsive border-top userprof-tab" id="tab1">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Oglas</th>
                                                <th>Kategorija</th>
                                                <th>Status</th>
                                                <th>Opcija</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ads as $ad)
                                                
                                         
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="checkbox" value="checkbox">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="media mt-0 mb-0">
                                                        <div class="card-aside-img">
                                                            <a href="#"></a>
                                                            <img src="../../assets/images/products/h1.png" alt="img">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="card-item-desc ml-4 p-0 mt-2">
                                                                <a href="#" class="text-dark">
                                                                    <h4 class="font-weight-semibold">{{$ad->title}}</h4>
                                                                </a>
                                                                <a href="#"><i class="fa fa-clock-o mr-1"></i>
                                                                    {{$ad->created_at}}</a><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{-- {{$ad->$category->title}} --}}</td>
                                                <td>
                                                    <a href="#" class="badge badge-warning">Published</a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success btn-sm text-white" href="ad/{{$ad->id}}/edit " data-toggle="tooltip"
                                                        data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                    <a class="btn btn-danger btn-sm text-white" data-toggle="tooltip"
                                                        data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                                                   
                                                    <a class="btn btn-primary btn-sm text-white" data-toggle="tooltip"
                                                        data-original-title="View"><i class="fa fa-eye"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                           
                          
                   
                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--User Dashboard-->
@endsection