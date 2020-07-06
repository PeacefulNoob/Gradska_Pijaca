
@extends('layouts.app')

@section('content')
		<div class="page">
			<div class="page-main">
			
				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="/assets/images/user_images/{{ Auth::user()->image }}" alt="user-img" class="avatar avatar-lg brround">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2> {{ Auth::user()->name }}</h2>
								<span> {{ Auth::user()->city }}</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="/admin/"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Početna Admin</span></a>
							
						</li>
						
						<li>
							<a class="side-menu__item" href="/admin/1"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Lista Oglasa</span></a></li>
							<li>
								<a class="side-menu__item" href="/admin/users_all"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Lista Korisnika</span></a></li>
				
					
                    </ul>
				</aside>

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Oglasi</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Podešavanja</a></li>
								<li class="breadcrumb-item active" aria-current="page">Oglasi</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-primary">
								
								</div>

								<div class="card">
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane active " id="tab1">
											
												<div class="table-responsive border-top">
													<table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
														<tbody>
															<tr>
														
																<th class="w-1">Naziv</th>
																<th class="w-1">Autor</th>
																<th class="w-1">Kategorija</th>
																<th>Opis</th>
																<th>Broj Lajkova</th>
																<th>Broj Pregleda</th>
																<th>Lokacija</th>
																<th>Datum</th>
																<th>Slika</th>
															</tr>
															@foreach ($ads as $ad)
																
														
															<tr>
															
																<td><a href="/ad/{{$ad->id}}" class="btn-link">{{$ad->title}}</a>
																</td>
																<td><span>{{$ad->user->name}} {{$ad->user->last_name}}</span></td>
														
																<td><span>{{$ad->categories->title}}</span></td>
																<td>{{$ad->description}}</td>
																<td>{{$ad->likes}}</td>
																<td>{{$ad->views}}</td>
																<td>{{$ad->location}}</td>
																<td>{{$ad->created_at}}</td>
																<td><img src="/assets/images/ad_images/{{$ad->image}}" class="w-7 h-7" alt="image"> </td>
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
				</div>
			</div>

@endsection