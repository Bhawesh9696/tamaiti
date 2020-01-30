<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{url('/')}}/public/images/favicon.ico">
<title>Tamaiti</title>
<!-- Bootstrap core CSS -->
<link href="{{url('/')}}/public/css/bootstrap.min.css" rel="stylesheet">
<!-- CSS Plugin for this -->
<link rel="stylesheet" href="{{url('/')}}/public/css/style.css">
<link rel="stylesheet" href="{{url('/')}}/public/css/responsive.css">
</head>
<body>
    <header>
		<section class="top_header">
		  <div class="container">
			  <div class="logo_center">
				<img src="{{url('/')}}/public/images/logo_main.png" alt="Logo"></div>
		 </div>
		</section>
    </header>

    <main role="main">
      <!-- Wrap the rest of the page in another container to center all the content. -->
		<section class="form_spac">
			<div class="container">
				<div class="form_pack">
					<div class="row">
						<div class="col-lg-5">
							<div class="form_tab">
								<ul class="nav nav-pills" id="pills-tab" role="tablist">
								  <li class="nav-item">
									<a class="nav-link active" id="sign_up-tab" data-toggle="pill" href="#sign_up" role="tab" aria-controls="sign_up" aria-selected="true">Sign Up</a>
								  </li>
									
								  <li class="nav-item">
									<a class="nav-link" id="login_up-tab" data-toggle="pill" href="#login_up" role="tab" aria-controls="login_up" aria-selected="false">Log In</a>
								  </li>
								</ul>
								 
					         <center>@if(Session::has('success'))
		                
					          <div class="alert alert-success">
			                  {{ Session::get('success') }}
		                      </div></center>
		                       @endif
							   
								<div class="tab-content" id="pills-tabContent">
								  <div class="tab-pane fade show active" id="sign_up" role="tabpanel" aria-labelledby="sign_up-tab">
									<form id="popularID" role="form" action="{{ route('saveUserRegistration') }}" method="POST" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Name">
									  </div>
										
									  <div class="form-row">
										<div class="form-group col-md-6">
										  <input type="text" class="form-control" name="Organization" placeholder="Organization">
										</div>
										  
										<div class="form-group col-md-6">
										  <input type="text" class="form-control" name="Organization_type" placeholder="Organization Type">
										</div>
									  </div>
									  
									  <div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Enter Email">
									  </div>
										
										<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Password">
									  </div>
										
									  <button href="#" class="btn login" type="submit">Submit</button>
										
										<a class="btn an_account" href="#">Already have an account? log in</a>
									</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
		<script src="{{URL::asset('public/backend/js/jquery.validate.min.js')}}"></script>
			<script>
				var ee =$.noConflict();
					ee(document).ready(function() { 
						ee("#popularID").validate({
						    rules: {
							"name": {
							    required: true,
							},
							"Organization": {
							    required: true,
							},
							"Organization_type": {
							    required: true,
							},
							"email": {
							    required: true,
							},
							    "password": {
							    required: true,
							},
						},
						messages: {
							"name": {
								required: "Name should not be blank.",
							},
							"Organization": {
								required: "Organization should not be blank.",
							},
							"Organization_type": {
								required: "Organization_type should not be blank.",
							},
							"email": {
								required: "email should not be blank.",
							},
								"password": {
								required: "password should not be blank.",
							},
						},
					});
				});
			</script> 

								</div>
									
								  <div class="tab-pane fade" id="login_up" role="tabpanel" aria-labelledby="login_up-tab">
									<form class="signup" id="login" role="form" action="{{ route('UserLogin') }}" method="POST" enctype="multipart/form-data">
										{{ csrf_field() }}
										<div class="form-group">
										<input type="email" class="form-control" name="email" placeholder="Enter Email">
									  </div>
										
									  	<div class="form-group">
										<input type="password" class="form-control" name="password" placeholder="Password">
									  </div>
											<a class="btn forgetbtn" href="#">Forgot Password</a>
										
									  <button class="btn login" type="submit">Submit</button>
										
										<a class="btn an_account" href="#">Already have an account? Sign Up</a>
									</form>
				
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
		<script src="{{URL::asset('public/backend/js/jquery.validate.min.js')}}"></script>
				<script>
				var ee =$.noConflict();
					ee(document).ready(function() { 
						ee(".signup").validate({
						    rules: {
							"email": {
							    required: true,
							},
							"password": {
							    required: true,
							},
						},
						messages: {
							"email": {
								required: "email should not be blank.",
							},
							"password": {
								required: "password should not be blank.",
							},
						},
					});
				});
			</script>
		 
		 <style>
			.error{color: #f95029 !important;}
		</style>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-7">
							<figure>
								<img src="{{url('/')}}/public/images/right_form.png" alt="">
							</figure>
						</div>
					</div>
			</div>
			</div>
		</section>
      <!-- /.container -->      
    </main>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="{{url('/')}}/public/js/jquery-slim.min.js"><\/script>')</script>
<script src="{{url('/')}}/public/js/popper.min.js"></script>
<script src="{{url('/')}}/public/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{url('/')}}/public/js/holder.min.js"></script>
</body>
</html>
