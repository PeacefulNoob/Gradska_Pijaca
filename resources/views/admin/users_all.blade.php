
@extends('layouts.app')

@section('content')
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
							<h1 class="page-title">Korsinci</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Podešavanja</a></li>
								<li class="breadcrumb-item active" aria-current="page">Korsinci</li>
							</ol>
						</div>
						<div class="row ">
							<div class="col-lg-12">
								<div class="panel panel-primary">
									<div class=" ">
								
									</div>
								</div>

								<div class="card">
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane active " id="tab1">
											
												<div class="table-responsive border-top">
													<table class="table card-table table-bordered table-hover table-vcenter mb-0 text-nowrap">
														<tbody>
															<tr>
																<th class="w-1">Korisnički ID</th>
																<th class="w-1">Ime</th>
																<th>Email</th>
																<th>Grad</th>
																<th>Poštanski broj</th>
																<th>Odobren</th>
																<th>Promeni</th>
																<th>Datum </th>

															</tr>
															@foreach ($users as $user)
																
															<tr>
															
																<td>{{$user->id}}</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar-md  d-block brround cover-image mr-3" data-image-src="/assets/images/user_images/{{$user->image}}"></span>
																		<span class="mt-2">{{$user->name}} {{$user->last_name}}</span>
																	</div>
																</td>
																<td>{{$user->email}}</td>
																<td>{{$user->city}}</td>
																<td>{{$user->zip}}</td>
																<td>{{$user->approved}}</td>
																<td>
																	<form action="/admin/{{{$user->id}}} " method="POST" enctype="multipart/form-data">
																		@method('PATCH')
																		@csrf
																		<select name="approved" id="approved" onchange="this.form.submit()">
																			<option value="">Izaberi</option>
																			<option value="0">Odbijen</option>
																			<option value="1">Odobren</option>
																
																			</select>
																		</form>
																	</td>

														
																<td>{{$user->created_at}}</td>

															</tr>
											
											@endforeach
														</tbody>
													</table>
												</div>
											
											</div>
										</div>
									</div>
								</div>
								{{-- <ul class="pagination mb-5">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul> --}}
							</div>
						</div>
					</div>
				</div>
			</div>

			@endsection