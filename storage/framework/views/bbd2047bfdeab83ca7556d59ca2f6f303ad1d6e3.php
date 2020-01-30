<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo e(url('/')); ?>/public/images/favicon.ico">
<title>Tamaiti</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- Bootstrap core CSS -->
<link href="<?php echo e(url('/')); ?>/public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/css/carousel.css">
<!-- CSS Plugin for this -->
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/css/style.css">
<link rel="stylesheet" href="<?php echo e(url('/')); ?>/public/css/responsive.css">
</head>
<body>
    <header>
		<section class="top_header">
		  <div class="container-fluid">
			<div class="container">
			  	<div class="row">
					<div class="col-md-2">
						<a href="#">
							<img src="<?php echo e(url('/')); ?>/public/images/logo_main.png" alt="Logo">
						</a>
					</div>
					
					<div class="col-md-6">
						<div class="form_search">
							<form class="form-inline">
								<select id="inputState" class="form-control select_ed">
								<option selected>Category</option>
									<option value="book">Book 1</option>
									<option value="book">Book 2</option>
									<option value="book">Book 3</option>
									<option value="book">Book 4</option>
									<option value="book">Book 5</option>
								  </select>
								<input class="form-control" type="search" aria-label="Search" placeholder="Search Tamaito Catalog ">
								<button class="btn seachbtn" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</form>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="row justify-content-end">
							<div class="col-6 col-md-6 col-lg-5">
							<div class="user_pack">
							<div class="dropdown">
							  <button class="btn user_drop dropdown-toggle" type="button" id="user_drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="far fa-user"></i>
								  User
							  </button>
							  <div class="dropdown-menu" aria-labelledby="user_drop">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</div>
						</div>
							</div>
							
							<div class="col-6 col-md-6 col-lg-5">
								<div class="user_pack">
							<div class="dropdown">
							  <button class="btn translateto dropdown-toggle" type="button" id="translate_drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  Translate to
							  </button>
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
		</section>
    </header>

    <main role="main">
      <!-- Wrap the rest of the page in another container to center all the content. -->
		<div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item">
            <img class="first-slide" src="<?php echo e(url('/')); ?>/public/images/banner-1.png" alt="Image">
			  <div class="container">
				<div class="banner_txt">
					<h1 class="wlcome_txt">Welcome to<br> Tamaiti</h1>
				</div>
			 </div>
          </div>
        </div>
      </div>
		
		<section class="book_one">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Book Title</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Article Title</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Page 27 - 35</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Medium</h2>
					</div>
				</div>
				
				<div class="author_main">
				<div class="row">
					<div class="col-md-4">
						<div class="author_box">
							<img src="<?php echo e(url('/')); ?>/public/images/author_img.png" alt="">
						</div>
					</div>
					
					<div class="col-md-8">
						<div class="cont_txt">
						<h3 class="name_author">Author Name</h3>
						
						<h4 class="autom_under">Lorem ipsum dolor sit amet, consectetur .</h4>
						
						<p class="lorem_txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolorsit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor amet, consectetur adipiscing elit, sed do eiusmod tempor ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor. 
						</p>
							
							<a class="btn readbtn" href="#">Read More</a>
							
							<h3 class="name_author">Curriculum level : topic Text type</h3>
						</div>
					</div>
				</div>
			</div></div>
		</section>
		
		<section class="book_one">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Book Title</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Article Title</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Page 27 - 35</h2>
					</div>
					
					<div class="col-6 col-md-3">
						<h2 class="title_txt">Medium</h2>
					</div>
				</div>
				
				<div class="author_main">
				<div class="row">
					<div class="col-md-4">
						<div class="author_box">
							<img src="<?php echo e(url('/')); ?>/public/images/author_img.png" alt="">
						</div>
					</div>
					
					<div class="col-md-8">
						<div class="cont_txt">
						<h3 class="name_author">Author Name</h3>
						
						<h4 class="autom_under">Lorem ipsum dolor sit amet, consectetur .</h4>
						
						<p class="lorem_txt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.Lorem ipsum dolorsit amet, consectetur adipiscing elit, sed do eiusmod tempor ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor amet, consectetur adipiscing elit, sed do eiusmod tempor ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor. 
						</p>
							
							<a class="btn readbtn" href="#">Read More</a>
							
							<h3 class="name_author">Curriculum level : topic Text type</h3>
						</div>
					</div>
				</div>
			</div></div>
		</section>
		
		
		<div class="view_more">
			<a class="btn more_view" href="#">View More</a>
		</div>
		
      <!-- /.container -->

		<footer>
			<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-6 col-md-4">
						<div class="footer_pack">
							<h2>Your Account</h2>
							<div class="footer_ul">
								<ul>
									<li>
										<a href="#">Sign up</a>
									</li>

									<li>
										<a href="#">Log in</a>
									</li>
								</ul>
							</div>
						</div>
					
					</div>
					
					<div class="col-6 col-md-4">
						<div class="footer_pack">
							<h2>Useful links</h2>
							<div class="footer_ul">
								<ul>
									<li>
										<a href="#">Contact us</a>
									</li>

									<li>
										<a href="#">About us</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="footer_pack">
							<h2>Follow us</h2>
							
							<ul class="social_box">
								<li>
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="#">
										<i class="fab fa-linkedin-in"></i>
									</a>
								</li>
							</ul>
							
							<div class="input-group">
								<input class="form-control" type="search" aria-label="Search" placeholder="Email">
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
							<p>Copyright &copy; 2019 Design by <a href="#">CTD world</a> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>

      
    </main>
<!--<script>
	$("#verification").hide();
	$( document ).ready(function() {
		$( "#sendotp" ).click(function() {
			$("#verification").fadeIn(1000);
		});
		
		$( "#forgotpassword" ).click(function() {
			$("#verification").fadeIn(1000);
		});				
	});

</script>-->
<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script>window.jQuery || document.write('<script src="<?php echo e(url('/')); ?>/js/jquery-slim.min.js"><\/script>')</script>
<script src="<?php echo e(url('/')); ?>/public/js/popper.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="<?php echo e(url('/')); ?>/public/js/holder.min.js"></script>
</body>
</html>
