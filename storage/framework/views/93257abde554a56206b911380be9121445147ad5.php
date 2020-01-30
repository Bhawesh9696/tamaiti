 <?php $__env->startSection('content'); ?>

<section class="form_spac">
	<div class="container">
		<div class="form_pack">
			<div class="row">
				<div class="col-lg-5">
					<div class="form_tab">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item"><a class="nav-link active" id="sign_up-tab"
								data-toggle="pill" href="#sign_up" role="tab"
								aria-controls="sign_up" aria-selected="true">Sign Up</a></li>

							<li class="nav-item"><a class="nav-link" id="login_up-tab"
								data-toggle="pill" href="#login_up" role="tab"
								aria-controls="login_up" aria-selected="false">Log In</a></li>
						</ul>

						<div class="tab-content" id="pills-tabContent">
							<?php if(Session::has('error')) : ?>
							<div class="alert alert-danger"><?php echo e(Session::get('error')); ?></div>
							<?php elseif(Session::has('success')) : ?>
							<div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
							<?php endif; ?>
							
							<div class="tab-pane fade show active" id="sign_up"
								role="tabpanel" aria-labelledby="sign_up-tab">
								<form method="post" action="<?php echo e(route('site.register')); ?>">
								<?php echo e(csrf_field()); ?>

									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name"
											name="_name" required>
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<input type="text" class="form-control"
												placeholder="Organization" name="_organisation" required>
										</div>

										<div class="form-group col-md-6">
											<input type="text" class="form-control"
												placeholder="Organization Type" name="_organisation_type"
												required>
										</div>
									</div>

									<div class="form-group">
										<input type="email" class="form-control"
											placeholder="Enter Email" name="_email" required>
									</div>

									<div class="form-group">
										<input type="password" class="form-control"
											placeholder="Password" name="_password" required>
									</div>

									<button type="submit" class="btn login">Log in</button>

									<a class="btn an_account" href="#login_up">Already have an
										account? log in</a>
								</form>
							</div>

							<div class="tab-pane fade" id="login_up" role="tabpanel"
								aria-labelledby="login_up-tab">
								<form class="signup" method="post" action="<?php echo e(route('site.login.attempt')); ?>">
								<?php echo e(csrf_field()); ?>

									<div class="form-group">
										<input type="email" class="form-control"
											placeholder="Enter Email" name="_email" required>
									</div>

									<div class="form-group">
										<input type="password" class="form-control"
											placeholder="Password" name="_password" required>
									</div>
									<input type="checkbox" name="remember_token"> Remember Me ?
									<a class="btn forgetbtn" href="#">Forgot Password</a> 
									
									<button class="btn login" name="btn_sign_in">Sign in</button> 
									
									<a class="btn an_account" href="#">Already have an account? Sign
										Up</a>
								</form>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-7">
					<figure>
						<img src="<?php echo e(asset('public/assets/images/right_form.png')); ?>"
							alt="">
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>