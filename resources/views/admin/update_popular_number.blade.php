@extends('admin.layout.master')
    @section('title','Update Excel Sheet')
        @section('content')	                
				<div class="main-content">
					<div class="container-fluid">
						<div class="breadcrumb-wrapper row">
							<div class="col-12 col-lg-3 col-md-6">
								<!--<h4 class="page-title">Dashboard</h4> -->
							</div>
							<div class="col-12 col-lg-9 col-md-6">
								<ol class="breadcrumb float-right">
									<li><a href="{{url('/dashboard')}}">Dashboard</a></li>
									<li class="active">/ Update Excel Sheet</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">				
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom">
										<h4 class="card-title" style="color:#e22a6f;">Update Excel Sheet</h4> 
									</div>
									<div class="card-body">
									    @foreach($popularNumberData as $number)
										<form id="popularIDS" class="form-horizontal" role="form" method="POST" action="{{url('popularNumberEdit')}}/{{$number->id}}" enctype="multipart/form-data">
										{{ csrf_field() }}
											
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Name:</label>
												<input type="text" class="form-control" name="name" value="{{$number->name}}" placeholder="Enter Your  Name">
											</div>
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Email:</label>
												<input type="text" class="form-control" name="email" value="{{$number->email}}" placeholder="Enter Your Email ID">
											</div>
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Phone:</label>
												<input type="text" class="form-control" name="phone" value="{{$number->phone}}" placeholder="Enter Your Phone Number">
											</div>	
											<button type="submit" class="btn btn-common mr-3">Submit</button>											
										</form>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
		<script src="{{URL::asset('public/backend/js/jquery.validate.min.js')}}"></script>
			<script>
				var ee =$.noConflict();
					ee(document).ready(function() { 
						ee("#popularIDS").validate({
						    rules: {
							"title": {
							    required: true,
							},
							"sub_title": {
							    required: true,
							},
							"phone": {
							    required: true,
							},
							"description": {
							    required: true,
							},
						},
						messages: {
							"title": {
								required: "Title should not be blank.",
							},
							"sub_title": {
								required: "Sub title should not be blank.",
							},
							"phone": {
								required: "Phone number should not be blank.",
							},
							"description": {
								required: "Description  should not be blank.",
							},
						},
					});
				});
			</script>
			<style>
				.error{color: #f95029 !important;}
			</style>
		@endsection