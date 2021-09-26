<!doctype html>
<html lang="en">
  <head>
  	<title>Login SPK - SMART</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="custom/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(custom/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login SPK - SMART</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="proses_login.php" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="nik" placeholder="NIK" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" name="password" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	
								</div>
								<div class="w-50 text-md-right">
									<a href="forgot.php" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Register &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="register.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Register</a>
	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="custom/js/jquery.min.js"></script>
  <script src="custom/js/popper.js"></script>
  <script src="custom/js/bootstrap.min.js"></script>
  <script src="custom/js/main.js"></script>

	</body>
</html>

