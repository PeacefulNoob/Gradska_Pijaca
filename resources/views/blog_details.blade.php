@extends('layouts.main')

@section('content')
<!--Breadcrumb-->
<section>
    <div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white">
                    <h1 class="">Blog-Details</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Blog-Details</li>
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
                            <img src="../../assets/images/photos/18.jpg" alt="img" class="w-100">
                            <div class="item7-card-text">
                                <span class="badge badge-info">Jobs</span>
                            </div>
                        </div>
                        <div class="item7-card-desc d-flex mb-2 mt-3">
                            <a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
                            <a href="#"><i class="fa fa-user text-muted mr-2"></i>Nissy Sten</a>
                            <div class="ml-auto">
                                <a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
                            </div>
                        </div>
                        <a href="#" class="text-dark">
                            <h2 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h2>
                        </a>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
                            exercitationem
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est
                            laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                        <p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
                            exercitationem
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dol et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia deser mollitian animi, id est
                            laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero temporin cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                            maxime placeat facere possimusomnis voluptas assumenda est, omnis dolor repellendus. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Komentari</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="media mt-0 p-5">
                            <div class="d-flex mr-3">
                                <a href="#"><img class="media-object brround" alt="64x64"
                                        src="../../assets/images/faces/male/1.jpg"> </a>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
                                    <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="verified"><i
                                            class="fa fa-check-circle-o text-success"></i></span>
                                    <span class="fs-14 ml-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
                                </h5>
                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
                                        class=" ml-3 fa fa-clock-o"></i> 13.00 <i class=" ml-3 fa fa-map-marker"></i>
                                    Brezil</small>
                                <p class="font-13  mb-2 mt-2">
                                    Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                    incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.
                                </p>
                                <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
                                <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span
                                        class="">Comment</span></a>
                                <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span
                                        class="">Report</span></a>
                                <div class="media mt-5">
                                    <div class="d-flex mr-3">
                                        <a href="#"> <img class="media-object brround" alt="64x64"
                                                src="../../assets/images/faces/female/2.jpg"> </a>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ml-0"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="verified"><i
                                                    class="fa fa-check-circle-o text-success"></i></span></h5>
                                        <small class="text-muted"><i class="fa fa-calendar"></i> Dec 22st <i
                                                class=" ml-3 fa fa-clock-o"></i> 6.00 <i
                                                class=" ml-3 fa fa-map-marker"></i> Brezil</small>
                                        <p class="font-13  mb-2 mt-2">
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris commodo
                                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                                            suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur consequat.
                                        </p>
                                        <a href="" data-toggle="modal" data-target="#Comment"><span
                                                class="badge badge-default">Comment</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media p-5 border-top mt-0">
                            <div class="d-flex mr-3">
                                <a href="#"> <img class="media-object brround" alt="64x64"
                                        src="../../assets/images/faces/male/3.jpg"> </a>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-weight-semibold">Edward
                                    <span class="fs-14 ml-0" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="verified"><i
                                            class="fa fa-check-circle-o text-success"></i></span>
                                    <span class="fs-14 ml-2"> 4 <i class="fa fa-star text-yellow"></i></span>
                                </h5>
                                <small class="text-muted"><i class="fa fa-calendar"></i> Dec 21st <i
                                        class=" ml-3 fa fa-clock-o"></i> 16.35 <i class=" ml-3 fa fa-map-marker"></i>
                                    UK</small>
                                <p class="font-13  mb-2 mt-2">
                                    Ut enim ad minim veniam, quis Neque porro quisquam est, qui dolorem ipsum quia dolor
                                    sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                    incidunt ut labore et nostrud exercitation ullamco laboris commodo consequat.
                                </p>
                                <a href="#" class="mr-2"><span class="badge badge-primary">Helpful</span></a>
                                <a href="" class="mr-2" data-toggle="modal" data-target="#Comment"><span
                                        class="">Comment</span></a>
                                <a href="" class="mr-2" data-toggle="modal" data-target="#report"><span
                                        class="">Report</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-lg-0">
                    <div class="card-header">
                        <h3 class="card-title">Napišite svoj komentar</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name1" placeholder="Vaše ime">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email adresa">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="example-textarea-input" rows="6"
                                placeholder="Vaš komentar"></textarea>
                        </div>
                        <a href="#" class="btn btn-primary">Pošalji</a>
                    </div>
                </div>
            </div>

            <!--Rightside Content-->
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
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-building bg-primary text-primary"></i> Real Estate
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">14</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-bed bg-success text-success"></i> Hostel & Travels
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">63</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-heartbeat bg-info text-info"></i> Health & Fitness
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">25</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-cutlery bg-warning text-warning"></i> Restaurant
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">74</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-laptop bg-danger text-danger"></i> Computer
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">18</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-mobile bg-blue text-blue"></i> Mobile
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">32</span>
                                        </a>
                                    </li>
                                    <li class="list-group-item border-bottom-0">
                                        <a href="#" class="text-dark">
                                            <i class="fa fa-pencil-square  bg-secondary text-pink"></i> Education
                                            <span class="badgetext badge badge-pill badge-light mb-0 mt-1">08</span>
                                        </a>
                                    </li>
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