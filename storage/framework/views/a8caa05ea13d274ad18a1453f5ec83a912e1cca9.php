            <div class="header navbar">
				<div class="header-container">
					<div class="nav-logo">
						<a href="<?php echo e(url('/dashboard')); ?>" style="color: #E22A6F; font-weight: 800;"> <b><img src="<?php echo e(url('public/backend/img/logo.png')); ?>" alt=""></b>  <span class="logo"> <!-- <img src="assets/img/logo-text.png" alt=""> -->CTD WORLD</span> 
						</a>
					</div>
					<ul class="nav-left">
						<li>
							<a class="sidenav-fold-toggler" href="javascript:void(0);"> <i class="lni-menu"></i> 
							</a>
							<a class="sidenav-expand-toggler" href="javascript:void(0);"> <i class="lni-menu"></i> 
							</a>
						</li>
					</ul>
					<ul class="nav-right">
						<!--<li><a href="login.html">login</a></li>-->
						<li class="user-profile dropdown dropdown-animated scale-left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img class="profile-img img-fluid" src="<?php echo e(url('public/backend/img/avatar/avatar.jpg')); ?>" alt="">
							</a>
							<ul class="dropdown-menu dropdown-md">
								<li>
									<ul class="list-media">
										<li class="list-item avatar-info">
											<div class="media-img">
												<img src="<?php echo e(url('public/backend/img/avatar/avatar.jpg')); ?>" alt="">
											</div>
											<div class="info"> <span class="title text-semibold"><?php echo e(Auth::user()->name); ?></span>
											</div>
										</li>
									</ul>
								</li>
								<li role="separator" class="divider"></li>
							<!-- <li>
									<a href="#"> <i class="lni-cog"></i>  <span>Setting</span> 
									</a>
								</li>-->
								
								 <!--<h5><?php echo e(Auth::user()->name); ?></h5>
                                 <p><?php echo e(Auth::user()->email); ?></p>-->
							<!--	<li>
									<a href="#"> <i class="lni-user"></i>  <span>Profile</span> 
									</a>
								</li>-->
								<!--<li>
									<a href="#"> <i class="lni-envelope"></i>  <span>Inbox</span>  <span class="badge badge-pill badge-primary pull-right">2</span> 
									</a>
								</li>-->
								<li><a href="<?php echo e(URL('auth/logout')); ?>"> <i class="lni-lock"></i><span>Logout</span> </a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</head>