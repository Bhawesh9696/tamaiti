<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-2 mr-auto">
				<a href="<?php echo e(url('/')); ?>"> <img src="<?php echo e(asset('public/assets/images/logo_main.png')); ?>"
					alt="Logo">
				</a>
			</div>
			
			
			
			<div class="col-md-4">
				<div class="row justify-content-end">
					<div class="col-6 col-md-6 col-lg-5">
						<div class="user_pack">
							<div class="dropdown">
								<button class="btn user_drop dropdown-toggle" type="button"
									id="user_drop" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<i class="far fa-user"></i> <?php echo e(Auth::user()->name); ?>

								</button>
								<div class="dropdown-menu" aria-labelledby="user_drop">
									<a class="dropdown-item" href="<?php echo e(route('site.logout')); ?>">Logout</a> 
									
								</div>
							</div>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-5">
						<div class="user_pack">
							<div class="dropdown">
								
									
								<div id="google_translate_element"></div> 
								<!--<div class="dropdown-menu" aria-labelledby="translate_drop">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							  </div>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

 