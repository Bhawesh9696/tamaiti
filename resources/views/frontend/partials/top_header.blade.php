<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-2 mr-auto">
				<a href="{{ url('/') }}"> <img src="{{ asset('public/assets/images/logo_main.png') }}"
					alt="Logo">
				</a>
			</div>
			
			{{--
			<div class="col-md-6">
				<div class="form_search">
					<form class="form-inline" method="get">
						<select name="category" id="inputState" class="form-control select_ed">
							<option selected>Category</option>
							@if($columns)
								@foreach($columns as $c)
									@php $selected=''; @endphp 
									@if($category == $c) @php $selected="selected='selected'" @endphp @endif
									<option value="{{ $c }}" >{{ ucwords(strtolower(str_replace('_', ' ', $c))) }}</option>	
								@endforeach
							@endif
							
						</select> <input name="search" class="form-control" type="search"
							aria-label="Search" placeholder="Search Tamaito Catalog ">
						
						@auth()	
						<button class="btn seachbtn" type="submit">
							<i class="fas fa-search"></i>
						</button>
						@else
						<a href="{{ route('site.login') }}" class="btn seachbtn"><i class="fas fa-search"></i></a>
						@endauth
					</form>
				</div>
			</div>
			--}}
			
			<div class="col-md-4">
				<div class="row justify-content-end">
					<div class="col-6 col-md-6 col-lg-5">
						<div class="user_pack">
							<div class="dropdown">
								<button class="btn user_drop dropdown-toggle" type="button"
									id="user_drop" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<i class="far fa-user"></i> {{ Auth::user()->name }}
								</button>
								<div class="dropdown-menu" aria-labelledby="user_drop">
									<a class="dropdown-item" href="{{ route('site.logout') }}">Logout</a> 
									{{--<a class="dropdown-item" href="#">Another action</a> 
									<a class="dropdown-item" href="#">Something else here</a>--}}
								</div>
							</div>
						</div>
					</div>

					<div class="col-6 col-md-6 col-lg-5">
						<div class="user_pack">
							<div class="dropdown">
								{{--
								<button class="btn translateto dropdown-toggle" type="button"
									id="translate_drop" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Translate to</button>
								--}}
									
								<div id="google_translate_element"></div> 
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

 