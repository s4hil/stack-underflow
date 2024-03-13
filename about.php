<?php
	include 'loginCheck.php';
	if (isset($_SESSION['loginStatus'])) {
		if ($_SESSION['loginStatus'] == true) {

			if (isset($_GET['logout'])) {
				session_destroy();
				header('location: index.php');
			}
?>


<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>About - ICSC - StackOverflow</title>

		<!-- Basic Metas -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- G Fonts-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
		
		<!-- CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/common.css">
		<link rel="stylesheet" href="assets/css/about.css">


		<!-- Icon -->
		<link rel="icon" href="assets/imgs/favicon.png">
  	</head>
  	<body>
		<main class="wrapper">
	    	<?php include 'assets/components/navbar.php'; ?>

	    	<section class="container mt-5 about-content">
	    		<p>
	    			<!-- <h4>About Project</h4>
	    			Hey there, glad you made it till here, I built this website to push my full-stack skills. This website allows students of ICSC college to post code related problems and get answerd by other registered users. Only the students who already exist in the college DB can signup.
	    			<p>
	    				<br>
	    				Multiple Features include:
	    				<ul>
	    					<li>Login System</li>
	    					<li>Exclusive Registration</li>
	    					<li>Real Time Push Notifications</li>
	    					<li>Email Notifications</li>
	    					<li>Beautiful UI/UX</li>
	    					<li>API Based</li>
	    					<li>Likes & Comments Counter</li>
	    					<li>TimeStamp On Posts</li>
	    					<li>Image Attachment On discussion</li>
	    				</ul>
	    			</p>
	    		</p>
	    		<p>
	    			<h4>About Developer</h4>
	    			<p>
	    				My name is Sahil Parray and I'm a full-stack web-developer. I mostly make projects on things that intrigue me, It took me over two weeks to build this project using LAMP stack, old school, I know 😉. Technologies used in this project are listed below, also the project is open source so feel free to reuse the code make changes as you want. Feel free to connect, my contact info is mentioned below.
	    				<ul>
	    					<li>HTML5 & CSS3</li>
	    					<li>Bootstrap</li>
	    					<li>JavaScript</li>
	    					<li>jQuery</li>
	    					<li>PHP</li>
	    					<li>mySQL</li>
	    					<li>OneSignal</li>
	    					<li>Telegram API</li>
	    					<li>Apache Server</li>
	    				</ul>
	    			</p>
	    		</p>
	    		<footer class="contact-info"> 
	    			<a href="https://fb.com/shl.pry">
	    				<i class="fab fa-facebook"></i>
	    			</a>
	    			<a href="https://instagram.com/sahil_parray">
	    				<i class="fab fa-instagram"></i>
	    			</a>
	    			<a href="https://github.com/s4hil">
	    				<i class="fab fa-github"></i>
	    			</a>
	    			<a href="mailto:s4hilp4rr4y@gmail.com">
	    				<i class="fas fa-envelope"></i>
	    			</a>
	    		</footer>
	    	</section>
 -->
	    	<?php //include 'assets/components/footer.php'; ?>
	    </main>
	    <!-- JS -->
		<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.bundle.min.js"></script>

  	</body>
</html>

<?php
		}
	}
	else {
		echo "<h1>You seem lost!</h1>";
	}
?>