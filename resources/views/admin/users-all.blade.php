
@extends('layouts.app')

@section('content')
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar doc-sidebar">
					<div class="app-sidebar__user clearfix">
						<div class="dropdown user-pro-body">
							<div>
								<img src="../../assets/images/faces/male/25.jpg" alt="user-img" class="avatar avatar-lg brround">
									<span class="fa fa-pencil" aria-hidden="true"></span>
								</a>
							</div>
							<div class="user-info">
								<h2>Rubin Carmody</h2>
								<span>Web Designer</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  href="/admin/"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Dashboard</span></a>
							
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Admin settings</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="/admin/ads">Ads List</a></li>
								<li><a class="slide-item" href="/admin/users_all">All Users</a></li>
							</ul>
						</li>
					
                    </ul>
				</aside>
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h1 class="page-title">Users</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Settings</a></li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
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
																<th class="w-1">Id</th>
																<th class="w-1">Image</th>
																<th>Email</th>
																<th>City</th>
																<th>Zip</th>
																<th>Approved</th>
															
															</tr>
															@foreach ($users as $user)
																
															<tr>
															
																<td>{{$user->id}}</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar-md  d-block brround cover-image mr-3" data-image-src="../../assets/images/faces/{{$user->image}}"></span>
																		<span class="mt-2">{{$user->name}}</span>
																	</div>
																</td>
																<td>{{$user->email}}</td>
																<td>{{$user->city}}</td>
																<td>{{$user->zip}}</td>
																<td>{{$user->approved}}</td>
															
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