
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
							<h4 class="page-title">Ads</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Settings</a></li>
								<li class="breadcrumb-item active" aria-current="page">Ads</li>
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
														
																<th class="w-1">Title</th>
																<th class="w-1">Author</th>
																<th class="w-1">Category</th>
																<th>Description</th>
																<th>Likes</th>
																<th>Views</th>
																<th>Location</th>
																<th>Date</th>
																<th>Image</th>
															</tr>
															@foreach ($ads as $ad)
																
														
															<tr>
															
																<td><a href="#" class="btn-link">{{$ad->title}}</a>
																</td>
																<td><span>Jakes Peson</span></td>
																<td><span>Category</span></td>
																<td>{{$ad->description}}</td>
																<td>{{$ad->likes}}</td>
																<td>{{$ad->views}}</td>
																<td>{{$ad->location}}</td>
																<td>{{$ad->created_at}}</td>
																<td><img src="../../assets/images/photos/1.jpg" class="w-7 h-7" alt="image"> </td>
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