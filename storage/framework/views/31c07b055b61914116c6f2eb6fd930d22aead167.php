<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo e(asset('public/assets/images/favicon.ico')); ?>">
<title>Tamaiti</title>
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous">
<!-- Bootstrap core CSS -->
<link href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/carousel.css')); ?>">
<!-- CSS Plugin for this -->
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('public/assets/css/responsive.css')); ?>">
</head>
<body>

	<header>
		<section class="top_header">
			<?php echo $__env->make('frontend.partials.top_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</section>
	</header>

	<main role="main"> <!-- Wrap the rest of the page in another container to center all the content. -->
	

	<?php echo $__env->yieldContent('content'); ?>

	<!-- /.container --> <footer>
		<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-4">
						<div class="footer_pack">
							<h2>Your Account</h2>
							<div class="footer_ul">
								<ul>
									<li><a href="#">Sign up</a></li>

									<li><a href="#">Log in</a></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="col-6 col-md-4">
						<div class="footer_pack">
							<h2>Useful links</h2>
							<div class="footer_ul">
								<ul>
									<li><a href="#">Contact us</a></li>

									<li><a href="#">About us</a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer_pack">
							<h2>Follow us</h2>

							<ul class="social_box">
								<li><a href="#"> <i class="fab fa-facebook-f"></i>
								</a></li>

								<li><a href="#"> <i class="fab fa-twitter"></i>
								</a></li>

								<li><a href="#"> <i class="fab fa-linkedin-in"></i>
								</a></li>
							</ul>

							<div class="input-group">
								<input class="form-control" type="search" aria-label="Search"
									placeholder="Email">
								<div class="input-group-append">
									<button class="btn btn-outline-secondary" type="submit">Submit</button>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copy_right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>
							Copyright &copy; 2019 Design by <a href="#">MAPSS Digital</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer> </main>
	<!-- Bootstrap core JavaScript -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	
	<script src="<?php echo e(asset('public/assets/js/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="<?php echo e(asset('public/assets/js/holder.min.js')); ?>"></script>
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
	<script>

	function googleTranslateElementInit() {
	    new google.translate.TranslateElement({  
	      pageLanguage: 'en', 
	      includedLanguages: 'en,mi,sm', 
	      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
	    }, 'google_translate_element');
	  }

	$(document).ready(function(){
	    $('#google_translate_element').bind('DOMNodeInserted', function(event) {
	      $('.goog-te-menu-value span:first').html('Translate');
// 	      $('.goog-te-menu-frame.skiptranslate').load(function(){
// 	        setTimeout(function(){
// 	          $('.goog-te-menu-frame.skiptranslate').contents().find('.goog-te-menu2-item-selected .text').html('Translate');    
// 	        }, 100);
// 	      });

	      $("#google_translate_element img").eq(0).remove();
	    });

	    
	  });


	  
	</script>
	
	
	
	<?php echo $__env->yieldPushContent('script'); ?>
</body>
</html>
