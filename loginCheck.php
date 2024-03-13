<?php
session_start();
	if (isset($_POST['login'])) {
		include 'assets/php/config.php';
		include 'assets/php/coreFuns.php';
		$rollNumber = $_POST['rollNumber'];
		$password = $_POST['password'];

		$rollNumber = mysqli_real_escape_string($conn, clean($rollNumber));
		$password = md5(mysqli_real_escape_string($conn, clean($password)));

		$sql = "SELECT * FROM `_users` WHERE `roll_no` = '$rollNumber'";
		$res = mysqli_query($conn, $sql);

		if (mysqli_num_rows($res) == 1) {
			$user = mysqli_fetch_array($res);
			if ($user['roll_no'] == $rollNumber && $user['password'] == $password) {
				$_SESSION['loginStatus'] = true;
				$_SESSION['userName'] = $user['full_name'];
				$_SESSION['userID'] = $user['user_id'];
				header('location: home.php');
			}
			else {
				$_SESSION['msg'] = "Invalid Password!";
				header('location: index.php');
			}
		}
		else {
			$_SESSION['msg'] = "User Not Found!";
			header('location: index.php');
		}
	}
?>