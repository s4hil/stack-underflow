<?php
	include 'loginCheck.php';
	if (isset($_SESSION['loginStatus']) && $_SESSION['loginStatus'] != true) {
		die("You seem lost buddy!");
}
if (isset($_GET['logout'])) {
	session_destroy();
	header('location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  	<head>
	    <title>Home - StackUnderflow</title>

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
		<link rel="stylesheet" href="assets/css/home.css">


		<!-- Icon -->
		<link rel="icon" href="assets/imgs/favicon.png">
  	</head>
  	<body>
		<main class="wrapper">
	    	<?php include 'assets/components/navbar.php'; ?>
	    	<section class="forum-container container mt-5">
	    		<div class="forum-content">
	    			<div class="menu-btn">
	    				<i class="fas fa-bars" id="menu-icon"></i> Menu
	    			</div>
	    			<div class="top-bar">
	    				<fieldset>
	    					<input type="text" id="search-forum" class="form-control" placeholder="Search Forum">
	    				</fieldset>
	    				<fieldset>
	    					<button class="ml-auto btn btn-primary" id="addDiscussion" data-bs-toggle="modal" data-bs-target="#addDiscussionModal">
	    					<i class="fas fa-plus"></i> Add Discussion
	    				</button>
	    				</fieldset>
	    			</div>
	    			<div id="loader">
	    				<img src="assets/imgs/loading.png">
	    			</div>
	    			<div class="discussions-container container" id="discussions">

		    			<!-- Begin Row-->
		    			
		    			<!-- End Row-->
	    			</div>
	    			<nav class="d-flex justify-content-center mt-4">
					  	<ul class="pagination">
						    <li class="page-item">
						      <span class="page-link bg-primary text-white disabled">Navigation</span>
						    </li>
						    <div id="pagination" class="d-flex"></div>
					  	</ul>
					</nav>
	    		</div>
	    	</section>
	    	<?php include 'assets/components/footer.php'; ?>
		</main>

		<!-- BEGIN MODAL -->
		<!-- Modal -->
		<div class="modal fade" id="addDiscussionModal" tabindex="-1" aria-labelledby="addDiscussionModal" aria-hidden="true">
		  	<div class="modal-dialog modal-lg">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<h5 class="modal-title" id="exampleModalLabel">Add Discussion</h5>
			      	</div>
			      	<form class="form" action="assets/php/api/addDiscussion.php" method="POST" enctype="multipart/form-data">
			      		<div class="modal-body">
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-quote-right"></i> Topic</label>
			        			<input type="text" name="topic" class="form-control">
			        		</fieldset>
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-clipboard"></i> Details</label>
			        			<textarea type="text" name="details" class="form-control" rows="3"></textarea>
			        		</fieldset>
			        		<fieldset class="form-group">
			        			<label><i class="fas fa-image"></i> Images</label>
			        			<input class="form-control" type="file" name="img" accept="image/*">
			        		</fieldset>
			      		</div>
				      	<div class="modal-footer">
				        	<div class="btn btn-secondary" data-bs-dismiss="modal">Close</div>
				        	<button type="submit" class="btn btn-success" name="post">Post</button>
				      	</div>
			      	</form>
			    </div>
		  	</div>
		</div>
		<!-- END MODAL -->

	    <!-- JS -->
		<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/home.js"></script>

  	</body>
</html>
