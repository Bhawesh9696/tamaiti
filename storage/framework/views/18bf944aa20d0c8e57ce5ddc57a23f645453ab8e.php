    <?php $__env->startSection('title','Change Password'); ?>
        <?php $__env->startSection('content'); ?>	                
                <div class="main-content">
					<div class="container-fluid">
						<div class="breadcrumb-wrapper row">
							<div class="col-12 col-lg-3 col-md-6">
								<!--<h4 class="page-title">Dashboard</h4> -->
							</div>
							<div class="col-12 col-lg-9 col-md-6">
								<ol class="breadcrumb float-right">
									<li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
									<li class="active">/ Change Password</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">				
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom">
										<h4 class="card-title" style="color:#e22a6f;">Change Password</h4> 
											<center><?php if(Session::has('success')): ?>
                                               <div class="alert alert-success">
                                                   <?php echo e(Session::get('success')); ?>

                                                </div>
											</center>
                                            <?php endif; ?>
									</div>
									<div class="card-body">										
									    <form id="ChangePasswordId" class="form-horizontal" role="form" method="POST" action="<?php echo e(url('changePasswordSuccessfully')); ?>">
										    <?php echo e(csrf_field()); ?>

											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Current Password:</label>
												<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Enter Your Current Passsword">
											</div>
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">New Password:</label>
												<input type="password" class="form-control" name="password" id="password" placeholder="Enter Your New Password">
											</div>
											<div class="form-group" style="color:#e22a6f;">
												<label for="exampleInputName1">Confirm Password:</label>
												<input type="password" class="form-control" name="repassword" id="repassword" placeholder="Enter Your Confirm Password">
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
			<script src="<?php echo e(URL::asset('public/backend/js/jquery.validate.min.js')); ?>"></script>
			<script>
				var ee = $.noConflict();
					ee(document).ready(function() { 
						ee("#ChangePasswordId").validate({
						    rules: {
							"cpassword": {
							    required: true,
							},
							"password": {
								required: true,
								minlength:6
							},
						   "repassword": {
								required: true, 
								equalTo:"#password"        
							},
						},
						messages: {
							"cpassword": {
								required: "Old Password should not be blank.",
							},
							"password": {
								required: "New Password should not be blank.",
							},
							"repassword": {
								required: "Please Confirm New Password.",
								equalTo : ee.format("Both password must match.")
							},
						},
					});
				});
			</script> 
				<style>
					.error{color: #f95029 !important;}
				</style>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>