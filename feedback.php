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
	    <title>Feedback - StackUnderflow</title>

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

	    	<section class="container mt-5 about-content d-flex justify-content-center">
	    		<div class="col-4">
	    			<h3 class="alert alert-info">
	    				Post
	    			</h3>
	    			<form class="form" method="POST" action="?">
	    				<fieldset class="form-group">
	    					<label>Content</label>
	    					<textarea name="feedback" class="form-control" rows="3"></textarea>
	    				</fieldset>
	    				<button class="btn btn-secondary" name="addFeedback">POST</button>
	    			</form>
	    			<?php
	    			include 'assets/php/config.php';
	    				if (isset($_POST['addFeedback'])) {
	    					$userID = $_SESSION['userID'];
	    					$username = $_SESSION['userName'];
	    					$content = $_POST['feedback'];

	    					$sql = "INSERT INTO `_students` (`user_id`, `content`,`username`) VALUES('$userID', '$content','$username')";
	    					$res = mysqli_query($conn, $sql);
	    					if ($res) {
	    						// header('location:feedback.php');
	    					}
	    					else{
	    						echo "Something went wrong!";
	    					}
	    				}
	    			?>
	    		</div>
	    		<div class="col-8">
	    			<h3 class="alert alert-info">
	    				Board
	    			</h3>
	    			<div>
	    				<?php
	    					$sql = "SELECT * FROM `_students`";
	    					$res = mysqli_query($conn, $sql);
	    					while ($row = mysqli_fetch_array($res)) {
	    						?>
	    							<div class="mt-3">
	    								<h6><?php echo $row['username'] ?></h6>
	    								<p class="text-secondary">
	    									<?php echo $row['content']; ?>
	    								</p>
	    							</div>
	    							<hr>
	    						<?php
	    					}
	    				?>
	    			</div>
	    		</div>
	    	</section>
	    	<?php include 'assets/components/footer.php'; ?>
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