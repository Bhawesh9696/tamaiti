                <div class="side-nav-inner">
					<ul class="side-nav-menu">
						<li class="side-nav-header"> <span>Navigation</span>
						</li>
						<li class="nav-item dropdown open">
							<a href="#" class="dropdown-toggle"> <span class="icon-holder"> <i class="lni-dashboard"></i> </span>  <span class="title"><a href="{{ route('dashboard1') }}" style="margin-left: 50px; margin-top: -45px;">Dashboard</a></span>
							</a>
						</li>
						
						<li class="nav-item dropdown">
							<a class="dropdown-toggle"> <span class="icon-holder"> <i class="lni-files"></i> </span>  <span class="title">Excel Sheet Mgnt</span>  <span class="arrow"> <i class="lni-chevron-right"></i> </span> 
							</a>
							<ul class="dropdown-menu sub-down">
								<li> <a href="{{url('/admin/add-popular-number')}}">Add Excel Sheet</a>
								</li>
								<li> <a href="{{url('/admin/popular-number-list')}}">Manage Excel Sheet</a>
								</li>
							</ul>
						</li>

                        <li class="nav-item dropdown">
							<a class="dropdown-toggle"> <span class="icon-holder"> <i class="lni-layers"></i> </span>  <span class="title">Miscellaneous Mgnt</span>  <span class="arrow"> <i class="lni-chevron-right"></i> </span> 
							</a>
							<ul class="dropdown-menu sub-down">
								<li> <a href="{{url('/admin/changePassword')}}">Change Password</a>
								</li>	
							</ul>
						</li>  

						<li class="nav-item dropdown">
							<a class="dropdown-toggle"> <span class="icon-holder"> <i class="fa fa-user"></i> </span>  <span class="title">Users</span>  <span class="arrow"> <i class="lni-chevron-right"></i> </span> 
							</a>
							<ul class="dropdown-menu sub-down">
								<li> <a href="{{url('/admin/user-list')}}">Show Users</a>
								</li>	
							</ul>
						</li>

					</ul>
				</div>