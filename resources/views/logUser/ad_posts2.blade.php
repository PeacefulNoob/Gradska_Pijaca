
@extends('layouts.main')

@section('content')
		<!--Sliders Section-->
		<section>
			<div class="bannerimg cover-image bg-background3" data-image-src="../../assets/images/banners/banner2.jpg">
				<div class="header-text mb-0">
					<div class="container">
						<div class="text-center text-white">
							<h1>Novi Oglas</h1>
							<ol class="breadcrumb text-center">
								<li class="breadcrumb-item"><a href="/user">Početna</a></li>
								<li class="breadcrumb-item active text-white" aria-current="page">Novi Oglas</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/Sliders Section-->

		<!--Add posts-section-->
		<section class="sptb">
			<div class="container">
				<div class="row">
					@include('logUser.side_meni')

					<div class="col-xl-8">
						<div class="card mb-xl-0">
							<div class="card-header">
								<h3 class="card-title">Novi Oglas</h3>
							</div>
							<div class="card-body">
								<form action="{{ route('ad.store')}}"  method="POST" enctype="multipart/form-data"  id="commentForm"  class="form-horizontal mb-0">
									@csrf
									<div id="rootwizard" class="border pt-0">
										<ul class="nav nav-tabs nav-justified">
											<li class="nav-item"><a href="#first" data-toggle="tab" class="nav-link font-bold">Osnovno</a></li>
											<li class="nav-item"><a href="#second" data-toggle="tab" class="nav-link font-bold">Detaljnije</a></li>
										
										</ul>
										<div class="tab-content card-body mt-3 mb-0 b-0">
											<div class="tab-pane fade" id="first">
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Naziv oglasa</label>
														<input type="text" name="title" class="form-control required Title" placeholder="">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Lokacija</label>
														<input type="text" name="location"  class="form-control required location" placeholder="">
													</div>
												</div>
												<div class="control-group form-group">
													<div class="form-group">
														<label class="form-label text-dark">Kategorija</label>
														<select name = "cat_id" class="form-control custom-select required category">
															<option value="0">Izaberite</option>
															@foreach ($categories as $category)
																
														
															<option value="{{$category->id}}">{{$category->title}}</option>
															@endforeach
														</select>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="second">
											
												<div class="col-12 form-group p-5">
													<label for="tag" name="tag" class="control-label"></label>
												<button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">
														Select all
													</button>
													<button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">
														Deselect all
													</button>
{{-- 													{!! Form::select('tag[]', $tags, old('tag'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-tag' ]) !!}
 --}}
													<select name="tag[]" id="tag" class="form-control select2" id="selectall-tag" multiple >
														@foreach ($tags as $tag)
														<option value="{{$tag->id}}">{{$tag->name}}</option>

														@endforeach
														
													  </select>
													  <br><br>
													<p class="help-block"></p>
													@if($errors->has('tag'))
														<p class="help-block">
															{{ $errors->first('tag') }}
														</p>
													@endif
												</div>
												<div class="control-group form-group">
													<label class="form-label text-dark">Opis</label>
													<textarea class="form-control required" name="description" rows="6" placeholder="Unesite opis oglasa.."></textarea>
												</div>
												<div class="control-group form-group">
													<div class="custom-file">
														<input type="file" class="custom-file-input required" name="image">
														<label class="custom-file-label">Unesite slike</label>
													</div>
												</div>
										
											</div>
									
											<button type="submit" class="btn btn-primary btn-xs" id="uploadB">DODAJ</button>
										
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div> <!-- end row -->
					<div class="row">
					<div class="col-xl-12 my-5">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Terms And Conditions</h3>
							</div>
							<div class="card-body">
								<ul class="list-unstyled widget-spec vertical-scroll mb-0">
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Money Not Refundable
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>You can renew your Premium ad after experted.
									</li>
									<li>
										<i class="fa fa-check text-success" aria-hidden="true"></i>Premium ads are active for depend on package.
									</li>
								</ul>
							</div>
						</div>
					
					</div>
				</div>
			
			</div>
		</section>
		<!--/Add posts-section-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $("#selectbtn-tag").click(function(){
        $("#selectall-tag > option").prop("selected","selected");
        $("#selectall-tag").trigger("change");
    });
    $("#deselectbtn-tag").click(function(){
        $("#selectall-tag > option").prop("selected","");
        $("#selectall-tag").trigger("change");
    });

    $(document).ready(function () {
        $('.select2').select2();
    });
</script>
		@endsection