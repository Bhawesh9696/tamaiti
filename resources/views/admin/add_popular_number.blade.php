@extends('admin.layout.master')
    @section('title','Add Excel Sheet')
        @section('content')	                
                <div class="main-content">
					<div class="container-fluid">
						<div class="breadcrumb-wrapper row">
							<div class="col-12 col-lg-3 col-md-6">
								<!--<h4 class="page-title">Dashboard</h4> -->
							</div>
							<div class="col-12 col-lg-9 col-md-6">
								<ol class="breadcrumb float-right">
									<li><a href="{{url('/admin/dashboard')}}">Dashboard</a>
									</li>
									<li class="active">/ Add Excel Sheet</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">				
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom">
										<h4 class="card-title" style="color:#e22a6f;">Add Excel Sheet</h4> 
											<center>@if(Session::has('success'))
                                              <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                             </div></center>
                                            @endif
									</div>
									<div class="card-body">										
									    <form id="popularID" class="form-horizontal" role="form" action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
										    {{ csrf_field() }}
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Title:</label>
												<input type="file" name="file" class="form-control" accept="xlsx/xls/csv">
											</div>
							
											<button type="submit" class="btn btn-common mr-3">Submit</button>											
										</form>
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
						ee("#popularID").validate({
						    rules: {
							"title": {
							    required: true,
							},
							"file": {
							    required: true,
							    extension: "xlsx||xls||csv",
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
							"file": {
								required: "file should not be blank.",
								extension: "Please upload valid file formats .xlsx, .xls, .csv only.",
							},
							"phone": {
								required: "Phone number should not be blank.",
							},
							"description": {
								required: "Description should not be blank.",
							},
						},
					});
				});
			</script> 
		<style>
			.error{color: #f95029 !important;}
		</style>
		@endsection