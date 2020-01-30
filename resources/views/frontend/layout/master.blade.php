<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('public/assets/images/favicon.ico') }}">
<title>Tamaiti</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- CSS Plugin for this -->
<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">
</head>
<body>

    <header>
		<section class="top_header">
		  <div class="container">
			  <div class="logo_center">
				<img src="{{ asset('public/assets/images/logo_main.png') }}" alt="Logo"></div>
		 </div>
		</section>
    </header>

    <main role="main">
      <!-- Wrap the rest of the page in another container to center all the content. -->
		@yield('content')
      <!-- /.container -->


      
    </main>

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('public/assets/js/jquery-slim.min.js') }}"><\/script>')</script>
<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ asset('public/assets/js/holder.min.js') }}"></script>

<script>

$('a.readbtn').on('click', function(){
	$(this).siblings('.divReadmore').show();
});
</script>

</body>
</html>
