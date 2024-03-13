<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("You seem lost!");
	}

	if (isset($_POST['post'])) {
		$response = array();
		$topic = $_POST['topic'];
		$details = $_POST['details'];

		// Image stuff
		$img_name = clean($_FILES['img']['name']);
		$tmp_name = $_FILES['img']['tmp_name'];
        $img_size = $_FILES['img']['size'];
		$res = uploadImg($img_name, $img_size, $tmp_name);
		if ($res['status'] == true) {
			$u_id = $_SESSION['userID'];
			$sql2 = "INSERT INTO `_discussions` (
				`topic`, 
				`details`, 
				`code_img`, 
				`user_id`) VALUES (
				'$topic',
				'$details',
				'$img_name',
				'$u_id')";
			$res2 = mysqli_query($conn, $sql2);
			print_r($res); 
			print_r($sql); 
			if ($res2) {
				?>
					<script>
						window.location = "../../../home.php";
						alert("Discussion Posted!");
					</script>
				<?php
			}
			else {
				?>
					<script>
						window.location = "../../../home.php";
						alert("Something went wrong!");
					</script>
				<?php
			}
		}
		else {
			echo "error uploading img";
		}
	}
?>