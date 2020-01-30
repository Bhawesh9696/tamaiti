@extends('admin.layout.master')
    @section('title','Excel Sheet List')
        @section('content')	         
		   <div class="main-content">
					<div class="container-fluid">
						<div class="breadcrumb-wrapper row">
							<div class="col-12 col-lg-3 col-md-6">
							<!--	<h4 class="page-title">Dashboard</h4> -->
							  <button type="button" class="btn btn-info"><a href="{{url('/admin/add-popular-number')}}" style="color:#fff;">Add Excel Sheet</a></button>

							</div>
							<div class="col-12 col-lg-9 col-md-6">
								<ol class="breadcrumb float-right">
									<li><a href="{{url('/admin/dashboard')}}">Dashboard</a>
									</li>
									<li class="active">/ View Excel Sheet</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid">					
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom">
										<h4 class="card-title" style="color:#e22a6f;">Excel Sheet Listing</h4>
										<center>@if(Session::has('success'))
                                              <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                              </div></center>
                                            @endif
									</div>
									<div class="card-body">
										<!--<p class="text-muted m-b-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
										<div class="table-responsive">
											<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
													<tr>	
														<th>S.No</th>
														<th>Language</th>
														<th>Book Title</th>
														<th>Link</th>
														<th>Author</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=0; ?>
	                                                @foreach($getPopularNumber as $numbers) 
	                                                <?php $i++ ;?>
													<tr>
														<td>{{$i}}</td>
														<td>{{$numbers->language}}</td>
														<td>{{$numbers->book_title}}</td>
														<td>{{$numbers->story_title_link}}</td>
														<td>{{$numbers->authors}}</td>
            <td><a href="popularNumberEdit/{{$numbers->id}}" class="btn btn-info" onClick="return confirm('Are you sure?');"><i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			    <a href="popularNumberDelete/{{$numbers->id}}" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i>Delete</a>&nbsp;&nbsp;
				<!--<a href="{{url('view-services')}}"><i class="fa fa-eye"></i>View</a></td>-->
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
			@endsection