<!DOCTYPE html>
<html>
<head>
	<title>Login - ICSC - StackOverflow</title>

	<!-- Basic Metas -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- G Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	
	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/particles.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/common.css">
	<link rel="stylesheet" href="assets/css/index.css">


	<!-- Icon -->
	<link rel="icon" href="assets/imgs/favicon.png">
</head>
<body>
	<div id="particles-js" class="particles"></div>
	<div class="wrapper">
		<div class="col-container">
			<div class="forms-col">
				<div class="login-box">
					<header class="form-header">
						Login
					</header>
					<?php
						include 'loginCheck.php';
						if (isset($_SESSION['msg'])) {
							?>
								<div class="alert alert-danger">
									<i class="fas fa-info-circle"></i>
									<?php
										echo $_SESSION['msg'];
										unset($_SESSION['msg']);
									?>
								</div>
							<?php
						}
					?>
					<form class="form login-form" method="POST" action="loginCheck.php" autocomplete="off">
						<fieldset class="form-group">
							<i class="fas fa-user"></i>
							<input required type="text" name="rollNumber" class="form-input" placeholder="Enter Roll Number" value="USN">
						</fieldset>
						<fieldset class="form-group">
							<i class="fas fa-lock"></i>
							<input required type="password" name="password" class="form-input" placeholder="Enter Password" value="Password">
						</fieldset>
						<fieldset>
							<input type="submit" value="Login" name="login" class="form-control btn btn-success">
						</fieldset>
					</form>
					<p class="text-center mt-2">
						<a href="" id="signUpBtn">Create Account</a>
					</p>
				</div>
				<div class="sign-up-box">
					<header class="form-header">
						Sign Up
					</header>
					<form class="form sign-up-form" method="POST" action="assets/php/signUp.php" enctype="multipart/form-data">
						<fieldset class="form-group">
							<label>Roll Number</label>
							<input type="text" id="rollNumber" class="form-input" placeholder="Enter Roll Number" name="rollNumber">
						</fieldset>
						<div class="validation-msg"></div>
						<div class="step-1-btns" id="step-1-btns">
							<button class="btn btn-secondary form-control mr-1" id="back-btn">Back</button>
							<button class="btn btn-primary form-control ml-1" id="searchByRoll">Next</button>
						</div>
						<div id="msg" class="mt-2"></div>
						<div id="step-2">
							<fieldset class="form-group dp-box">
								<img id="dpPreview">
								<label for="dp" class="btn btn-primary">Choose Photo</label>
								<input id="dp" type="file" name="file" style="visibility: hidden;">
							</fieldset>
							<fieldset class="form-group">
								<label>Full Name</label>
								<input type="text" id="fullname" class="form-input" name="name">
							</fieldset>
							<fieldset class="form-group">
								<label>Email</label>
								<input type="email" id="email" class="form-input" placeholder="Enter Email" name="email">
							</fieldset>
							<fieldset class="form-group">
								<label>Password</label>
								<input type="password" id="password" class="form-input" placeholder="Enter Password" name="password">
							</fieldset>
							<fieldset>
								<input type="submit" name="signUp" value="Sign Up" class="form-control btn btn-success">
							</fieldset>
						</div>
					</form>
				</div>
			</div>
			<div class="logo-col">
				<div class="logo-container">
					<img src="assets/imgs/011-code.png">					
				</div>
			</div>
		</div>
	</div>
	<!-- JS -->
	<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/app.js"></script>
	<script src="assets/js/index.js"></script>
</body>
</html>