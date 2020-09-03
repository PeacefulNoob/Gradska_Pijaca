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
					
					
					
                    </ul>
				</aside>
           
				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
					
							<h2 class="page-title">{{ __('Dashboard') }}</h2>
						
						</div>
						<div class="page-header">

						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
					@endif
					
					{{ __('You are logged in!') }}
				</div>
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
								<div class="card overflow-hidden">
									<div class="card-header">
										<h3 class="card-title">Price</h3>
										<div class="card-options"> <a class="btn btn-sm btn-primary" href="#">View</a> </div>
									</div>
									<div class="card-body ">
										<h5 class="">Total Price</h5>
										<h2 class="text-dark  mt-0 ">4,657</h2>
										<div class="progress progress-sm mt-0 mb-2">
											<div class="progress-bar bg-primary w-75" role="progressbar"></div>
										</div>
										<div class=""><i class="fa fa-caret-up text-green"></i>10% increases</div>
									</div>
								</div>
							</div>
							
					
					
						</div>


						<div class="row">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Last Year Overview</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="sales-status" class="chart-dropshadow h-280"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Activity</h3>
									</div>
									<div class="card-body">
										<div class="activity">
											<img src="../../assets/images/faces/male/24.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/female/10.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
													<small class="text-muted ">1 days ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/male/4.jpg" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
													<small class="text-muted ">3 days ago</small>
												</div>
											</div>
											<img src="../../assets/images/faces/female/8.jpg" alt="" class="img-activity">
											<div class="time-activity mb-0">
												<div class="item-activity mb-0">
													<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
													<small class="text-muted ">5 days ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
						    <div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Customer Satisfaction</h3>
									</div>
									<div class="card-body">
										<div class="chats-wrap">
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Good</span>
													<span class="float-right p-1">78%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-35" ></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Satisfied</span>
													<span class="float-right p-1">82%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Excellent</span>
													<span class="float-right p-1">89%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-65"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Average</span>
													<span class="float-right p-1">40%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-80"></div>
												</div>
											</div>
											<div class="chat-details p-2">
												<h6 class="mb-0">
													<span class="font-weight-normal">Unsatisfied</span>
													<span class="float-right p-1">20%</span>
												</h6>
												<div class="progress progress-sm mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-80"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Developing Team</div>
									</div>
									<div class="card-body">
										<div class="ibox teams mb-30 bg-boxshadow">
											<!-- Ibox Content -->
											<div class="ibox-content teams">
												<!-- Members -->
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/12.jpg" ></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/21.jpg" ></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/29.jpg"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/female/2.jpg"></span>
													<span class="avatar brround cover-image cover-image" data-image-src="../../assets/images/faces/male/34.jpg"></span>
													<span class="avatar brround cover-image cover-image">+8</span>
												</div>
												<!-- Team Board Details -->
												<div class="teams-board-details mt-3">
													<h4 class="font-weight-semibold">About Developing Team</h4>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam veniam excepturi. Contrary to popular belief, Lorem Ipsum is not simply random text classical Latin </p>
												</div>
												<!-- Progress Details -->
												<span class="font-weight-semibold">Status of current project:</span>
												<div class="progress-details-teams mt-2 mb-4">
													<div class="stat-percent mb-2">58%</div>
													<div class="progress progress-sm ">
														<div class="progress-bar bg-primary w-50" role="progressbar"></div>
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-4">
														<div class="teams-rank text-muted">PROJECTS</div>
														<span>24</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">RANKING</div>
														<span>3rd</span>
													</div>
													<div class="col-4">
														<div class="teams-rank text-muted">BUDGET</div>
														<span>$36,25,854</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Todo List</h3>
										<div class="card-options">
											<a class="btn btn-sm btn-primary " href="#"><i class="fa fa-plus"></i> Add Task</a>
										</div>
									</div>
									<div class="card-body">
										<div class="custom-controls-stacked checklist-task">
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
												<span class="custom-control-label">vero eos et accusamus et iusto odio dignissimos ducimus</span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 2h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
												<span class="custom-control-label"> et iusto odio dignissimos ducimus</span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 8h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox mb-3 checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" checked="">
												<span class="custom-control-label"> eos  accusamus  iusto odio dignissimos </span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 4h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
											<label class="custom-control custom-checkbox checklist-desc">
												<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4">
												<span class="custom-control-label">vet accusamus et iusto odio dignissimos </span>
												<div class="check-data d-flex mt-1">
													<span class="text-muted">Completed 5h ago</span>
													<div class="check-icon ml-auto">
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil-square-o "></i> </span>
														<span class="text-muted" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></span>
													</div>
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="arrow-ribbon bg-danger">sale</div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="realestate.html"></a>
											<img src="../../assets/images/products/products/h1.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="realestate.html" class="text-white"> Real Estate</a>
											<h4  class="font-weight-semibold mb-0">$389</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="realestate.html" class="text-dark"><h4 class="font-weight-semibold">Apartments</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  Los Angles</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-phone text-muted mr-1"></i> 567 9876 087</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-12">
								<div class="card">
									<div class="ribbon ribbon-top-left text-danger"><span class="bg-danger">featured</span></div>
									<div class="item-card7-img">
										<div class="item-card7-imgs">
											<a href="jobs.html"></a>
											<img src="../../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
										</div>
										<div class="item-card7-overlaytext">
											<a href="jobs.html" class="text-white"> Jobs</a>
											<h4  class="font-weight-semibold mb-0">$854</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="item-card7-desc">
											<a href="jobs.html" class="text-dark"><h4 class="font-weight-semibold">Hair dresser-Beauticia</h4></a>
										</div>
										<div class="item-card7-text">
											<ul class="icon-card mb-0">
												<li class=""><a href="#" class="icons"><i class="icon icon-location-pin text-muted mr-1"></i>  Los Angles</a></li>
												<li><a href="#" class="icons"><i class="icon icon-event text-muted mr-1"></i> 5 hours ago</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-user text-muted mr-1"></i> Sally Peake</a></li>
												<li class="mb-0"><a href="#" class="icons"><i class="icon icon-briefcase text-muted mr-1"></i>Beauty Span</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    

@endsection
