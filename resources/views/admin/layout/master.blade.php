<!DOCTYPE html>
<html>
<head>
@include('admin.include.script')
<body>
	<div class="app header-default side-nav-dark">
		<div class="layout">
			@include('admin.include.header')
			<div class="side-nav expand-lg">
			@include('admin.include.side_nav')
			</div>
			<div class="page-container">
				@yield('content') 			
				@include('admin.include.footer')
			</div>
		</div>
	</div>
	<!--<div id="preloader">
		<div class="loader" id="loader-1"></div>
	</div>	-->
	@include('admin.include.foot')	
</body>
</html>