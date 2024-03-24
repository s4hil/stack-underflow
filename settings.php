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
	    <title>About - StackUnderflow</title>

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

	    	<section class="container mt-5">
	    		<table class="table table-striped">
	    			<thead class="table-dark text-white">
	    				<tr>
	    					<th>Title</th>
	    					<th>Action</th>
	    				</tr>
	    			</thead>
	    			<tbody class="bg-white" id="discussions-table">
	    				
	    			</tbody>
	    		</table>
	    	</section>
	    		
	    	<?php include 'assets/components/footer.php'; ?>
	    </main>
	    <!-- JS -->
		<script src="https://kit.fontawesome.com/de41999cf3.js"></script>
		<script src="assets/js/jquery.min.js"></script>
	    <script src="assets/js/bootstrap.bundle.min.js"></script>
	    <script>
	    	$(document).ready(()=>{
	    		let output = "";
	    		$.ajax({
					url: "assets/php/api/fetchCurrentUserDiscussions.php",
					method: "GET",
					dataType: "json",
					success: function (data) {
						console.log(data);
						x = data.data;
						for(let i = 0; i < x.length; i++){
							output += `
								<tr>
									<td>${x[i].topic}</td>
									<td>
										<button d-id=${x[i].d_id} class="del-btn btn btn-danger">Delete</button>
									</td>
								</tr>
							`;
						}
						$("#discussions-table").html(output);
					},
					error: function () {
						console.log("err with fetch discussions req!");
					}
				});

				$("#discussions-table").on('click', '.del-btn', function () {
					let id = $(this).attr('d-id');
					$.ajax({
						url: "assets/php/api/deleteDiscussion.php",
						method: "POST",
						data: JSON.stringify({d_id:id}),
						dataType: "json",
						success: function (data) {
							console.log(data);
							if (data.status == true) {
								window.location.reload();
							}
						},
						error: function () {
							console.log("err with del discussions req!");
						}
					});
				});
	    	});
	    </script>

  	</body>
</html>

<?php
		}
	}
	else {
		echo "<h1>You seem lost!</h1>";
	}
?>