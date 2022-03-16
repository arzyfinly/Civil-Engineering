@extends('../layouts.layout-register')
@section('content')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form"> 
					@csrf
					<span class="login100-form-title p-b-33">
						Account Register
					</span>
                    {{-- <div class="wrap-input100 validate-input">
                        <input id="name" type="text" class="form-control login100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@civil.net">
                        <input id="email" type="text" class="form-control login100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ex@civil.net">
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                        <input id="password" type="password" class="form-control login100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
                        <input id="password-confirm" type="password" class="form-control login100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    </div> --}}
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="name" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="text" name="email" placeholder="ex@civil.net">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@gmail.com">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                    <div class="container-login100-form-btn m-t-20">
                        <div class="col-md-12 offset-md-12">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>

					<div class="text-center">
						<span class="txt1">
							Have an account?
						</span>

						<a href="{{ route('login') }}" class="txt2 hov1">
							Sign in
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    @endsection