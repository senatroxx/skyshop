<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{ asset('assets/images/bg-01.jpg') }});">
					<span class="login100-form-title-1">
						SKYSHOP
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    @error('email')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
					<div class="wrap-input100 validate-input m-b-18" data-validate="Name is required">
						<input class="input100 @error('email') is-invalid @enderror" type="text" name="name" placeholder="Enter Your Name" required  value="{{ old('name') }}">
                        <span class="focus-input100"></span>
                    </div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="E-Mail is required">
						<input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter E-Mail" required  value="{{ old('email') }}">
                        <span class="focus-input100"></span>
                    </div>
                    
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Enter password" required>
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<input class="input100" type="password" name="password-confirmation" placeholder="Confirm password" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-20">
                        <div>
							<a href="{{ route('index') }}" class="txt1">
                            &larr; Back to home.
                            </a>
						</div>

                        <div>
                            <a href="{{ route('login') }}" class="txt1">
                                Already has an Account?
                            </a>
                        </div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
                        </button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>