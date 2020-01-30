@extends('frontend.layout.master') @section('content')

<!-- Wrap the rest of the page in another container to center all the content. -->
<section class="form_spac">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6">
				<!-- forget password Verification -->
				<div class="form_forget mt-4">
					<?php if(Session::has('error')) : ?>
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
					<?php elseif(Session::has('success')) : ?>
					<div class="alert alert-success">{{ Session::get('success') }}</div>
					<?php endif; ?>
					
					<h2 class="password_hding">Verification</h2>

					<h3 class="registred">Enter the verification code we just sent you
						on your email address</h3>

					<form class="verification_otp" method="post" action="{{ route('site.verify.token.update', [$token]) }}">
						{{ csrf_field() }}
						<div class="form-group">
							<div class="row">
								<div class="col">
									<input type="text" class="form-control" name="t1" maxlength="1" required>
								</div>
								<div class="col">
									<input type="text" class="form-control"  name="t2"  maxlength="1" required>
								</div>
								<div class="col">
									<input type="text" class="form-control"  name="t3" maxlength="1" required>
								</div>
								<div class="col">
									<input type="text" class="form-control"  name="t4" maxlength="1" required>
								</div>
							</div>
						</div>
						
						<h3 class="registred">
							If you didn't have receive a code! <a class="resend" href="#">Resend</a>
						</h3>
						
						<button type="submit" class="btn login" href="#">Send</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.container -->


@endsection
