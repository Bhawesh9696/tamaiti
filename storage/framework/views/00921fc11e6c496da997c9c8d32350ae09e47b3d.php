<!DOCTYPE html>
<html>
<head>
<?php echo $__env->make('admin.include.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
	<div class="app header-default side-nav-dark">
		<div class="layout">
			<?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<div class="side-nav expand-lg">
			<?php echo $__env->make('admin.include.side_nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="page-container">
				<?php echo $__env->yieldContent('content'); ?> 			
				<?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</div>
	</div>
	<!--<div id="preloader">
		<div class="loader" id="loader-1"></div>
	</div>	-->
	<?php echo $__env->make('admin.include.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>	
</body>
</html>