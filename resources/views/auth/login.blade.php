@extends('layouts.auth')

@section('form')
	<!-- title -->
	<h1>
		<span>C</span>lassic
		<span>S</span>ign
		<span>I</span>n
		<span>F</span>orm</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form method="POST" action="{{ route('login') }}">
            @csrf
			<div class="form-style-agile">
				<label>
					Email
					<i class="fas fa-user"></i>
				</label>
				<input id="email" placeholder="Username" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
				<input placeholder="Password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<!-- switch -->
						<div class="checkout-w3l">
							<div class="demo5">
								<div class="switch demo3">
									<input type="checkbox">
									<label>
										<i></i>
									</label>
								</div>
							</div>
							<a href="#">Stay Signed In</a>
						</div>
						<!-- //checkout -->
					</li>
					<li>
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
			</div>
			<!-- //switch -->
			<input type="submit" value="Log In">
		</form>
	</div>
	<!-- //content -->
@endsection
