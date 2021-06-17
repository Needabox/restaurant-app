<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login PloyResto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('images/mylogo1.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('csslogin/css/main.css')}}">
<!--===============================================================================================-->

<style>
	body{
		background-image: url('images/login-admin.jpg');
    	background-position: center;
    	background-attachment: fixed;
    	background-size: cover;
	}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

                <form class="login100-form validate-form flex-sb flex-w" action="{{ route('postlogin') }}" method="POST">
                    {{ csrf_field() }}
					<span class="login100-form-title p-b-51">
						PloyResto
                    </span>
                    
                    @if(session()->has('message'))
                    <div class=" container alert alert-danger text-center">
                        <strong>{{ session()->get('message') }}</strong>
                        <button class="close" type="button" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                    </div>
                    @endif

					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="container mt-2">
						<div class="card card-body alert alert-info">
						<a class="btn btn-primary container" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
							Account
						  </a>
						  <div class="collapse" id="collapseExample">
							<div class="card card-body alert alert-primary">
								! Untuk Admin
								<ul>
									<li>Email : rafli@copasdev.com</li>
								</ul>
								<br/>
								! Untuk Waiter
								<ul>
									<li>Email : fliboxs@copasdev.com</li>
								</ul>
								<br/>
								! Untuk Kasir
								<ul>
									<li>Email : raploy@copasdev.com</li>
								</ul>
								<br/>
								! Untuk Owner
								<ul>
									<li>Email : rafliceo@copasdev.com</li>
								</ul>
								<br/>
								<span>Password : raploy123</span>
							</div>
						  </div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('csslogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('csslogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('csslogin/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('csslogin/js/main.js')}}"></script>

</body>
</html>