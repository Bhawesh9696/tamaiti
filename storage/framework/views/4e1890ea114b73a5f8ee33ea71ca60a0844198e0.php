    <?php $__env->startSection('title','User List'); ?>
        <?php $__env->startSection('content'); ?>	         
		   <div class="main-content">
					<div class="container-fluid">
						<div class="breadcrumb-wrapper row">
							<div class="col-12 col-lg-3 col-md-6">
							<!--	<h4 class="page-title">Dashboard</h4> -->
							  <button type="button" class="btn btn-info"><a href="#" style="color:#fff;">Add Users</a></button>

							</div>
							<div class="col-12 col-lg-9 col-md-6">
								<ol class="breadcrumb float-right">
									<li><a href="<?php echo e(url('/admin/dashboard')); ?>">Dashboard</a>
									</li>
									<li class="active">/ View Users</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid">					
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header border-bottom">
										<h4 class="card-title" style="color:#e22a6f;">Users Listing</h4>
										<center><?php if(Session::has('success')): ?>
                                              <div class="alert alert-success">
                                                <?php echo e(Session::get('success')); ?>

                                              </div></center>
                                            <?php endif; ?>
									</div>
									<div class="card-body">
										<!--<p class="text-muted m-b-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
										<div class="table-responsive">
											<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
												<thead>
													<tr>	
														<th>S.No</th>
														<th>Name</th>
														<th>Email</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
												    <?php $i=0; ?>
	                                                <?php $__currentLoopData = $getPopularNumber; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $numbers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	                                                <?php $i++ ;?>
													<tr>
														<td><?php echo e($i); ?></td>
														<td><?php echo e($numbers->name); ?></td>
														<td><?php echo e($numbers->email); ?></td>
                                                        <td><a href="" class="btn btn-info"><i class="fa fa-edit"></i>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
														    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i>Delete</a>&nbsp;&nbsp;
															<!--<a href="<?php echo e(url('view-services')); ?>"><i class="fa fa-eye"></i>View</a></td>-->
														</td>
													</tr>
												    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>