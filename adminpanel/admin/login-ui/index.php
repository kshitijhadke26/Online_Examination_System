<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="login-ui/image/png" href="logo-inverse.png"/>
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login-ui/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-ui/css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="position: relative; overflow: hidden;">
					<div style="
        background: url('/Hostel_Management/adminpanel/admin/assets/images/admin-bg-2.jpg') no-repeat center center;
        background-size: cover;
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        opacity: 0.1;
        z-index: 1;
   	 "></div><div style="
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background-color: rgba(40, 40, 90, 0.33); /* dark overlay */
        z-index: 2;
    "></div>
	
					<span  style="color: white; z-index: 3; font-size: 34px; font-weight: bold; padding: 0px;">
						Admin Log In
					</span>
				</div>

				<form method="post" id="adminLoginFrm" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100" >Username:</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Password is required">
						<span class="label-input100" >Password:</span>
						<input class="input100" type="password" name="pass" placeholder="Enter your password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn" align="center">
						<button type="submit" class="login100-form-btn" style="color:white; font-size:24px;  padding: 5px; font-weight: 500;">
							LOGIN
						</button>
						<button type="submit" class="login100-form-btn">
						   <a href="../../index.php" style="color:white; font-size:20px;  padding: 5px; font-weight: 400;">Examinee Login</a>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="login-ui/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="login-ui/vendor/animsition/js/animsition.min.js"></script>
	<script src="login-ui/vendor/bootstrap/js/popper.js"></script>
	<script src="login-ui/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="login-ui/vendor/select2/select2.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-ui/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="login-ui/vendor/countdowntime/countdowntime.js"></script>
	<script src="login-ui/js/main.js"></script>

</body>
</html>