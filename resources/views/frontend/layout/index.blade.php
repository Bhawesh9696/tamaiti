<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}">
<title>Tamaiti</title>
<link rel="stylesheet"
	href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
	integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
	crossorigin="anonymous">
<!-- Bootstrap core CSS -->
<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('public/assets/css/carousel.css') }}">
<!-- CSS Plugin for this -->
<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>

	<header>
		<section class="top_header">
			@include('frontend.partials.top_header')
		</section>
	</header>

	<main role="main"> <!-- Wrap the rest of the page in another container to center all the content. -->
	{{-- @include('frontend.partials.carousel') --}}

	@yield('content')

	<!-- /.container --> <footer>
<!-- 		<div class="footer_main">
			<div class="container">
				<div class="row text-center">
					<div class="col-6 col-md-6">
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

					
				</div>
			</div>
		</div> -->

		<div class="copy_right">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-12 col-md-12 text-center">
							<div class="footer_pack">
								<div class="footer_ul">
									<div class="row">
										<div class="col-md-3">
											<a href="#">About us</a>
										</div>
										<div class="col-md-3">
											<a href="#">Contact us</a>
										</div>
										<div class="col-md-6">
											<p>
												Copyright &copy; 2019 Design by <a href="#">MAPSS Digital</a>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>						
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
	
	<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="{{ asset('public/assets/js/holder.min.js') }}"></script>
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
	
	
	
	@stack('script')
</body>
</html>
