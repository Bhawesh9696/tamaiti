<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Admin-Login</title>

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/backend/css/bootstrap.min.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/backend/fonts/line-icons.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/backend/css/main.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('public/backend/css/responsive.css')); ?>">
</head>
<body>
<div class="wrapper-page">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="card">
<div class="card-header border-bottom text-center">
<h4 class="card-title">Sign In</h4>
 <center><?php if(Session::has('success')): ?>
		  <div class="alert alert-success">
			<?php echo e(Session::get('success')); ?>

		 </div></center>
		<?php endif; ?>
</div>
<div class="card-body">
<form class="form-horizontal m-t-20" action="<?php echo e(URL('DashboardLogin')); ?>" method="post">
<div class="form-group">
 <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>	
<input class="form-control" type="text" required=""  name="email" placeholder="Username" required>
</div>
<div class="form-group">
<input class="form-control" type="password" required="" name="password" placeholder="Password" required>
</div>

<!--<div class="form-group">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember me</label>
</div>
</div>-->

<div class="form-group text-center m-t-20">
<button class="btn btn-common btn-block" type="submit">Log In</button>
</div>
<!--<div class="form-group">
<div class="float-right">
<a href="forgot-password.html" class="text-muted"><i class="lni-lock"></i> Forgot your password?</a>
</div>
<div class="float-left">
<a href="sign-up.html" class="text-muted"><i class="lni-user"></i> Create an account</a>
</div>
</div>-->
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>
<script src="<?php echo e(URL::asset('public/backend/js/jquery-min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/backend/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/backend/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/backend/js/jquery.app.js')); ?>"></script>
<script src="<?php echo e(URL::asset('public/backend/js/main.js')); ?>"></script>
</body>
</html>