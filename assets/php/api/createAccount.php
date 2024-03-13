<?php
	include '../config.php';
	include '../coreFuns.php';
	$data = json_decode(file_get_contents("php://input"), true);

	$name = $data['name'];
	$imgName = $data['imgName'];
	$rollNumber = $data['rollNumber'];
	$email = $data['email'];
	$password = $data['password'];
	
	// Sanitizing
	$name = mysqli_real_escape_string($conn, clean($name));
	$imgName = mysqli_real_escape_string($conn, clean($imgName));
	$rollNumber = mysqli_real_escape_string($conn, clean($rollNumber));
	$email = mysqli_real_escape_string($conn, clean($email));
	$password = md5(mysqli_real_escape_string($conn, strtolower(clean($password))));

	$sql = "INSERT INTO `_users` (`roll_no`, `full_name`, `email`, `password`, `user_img`) VALUES (
			'$rollNumber', '$name', '$email', '$password', '$imgName')";
	$res = mysqli_query($conn, $sql);
	$response = array();
	if ($res) {
		$response['status'] = true;
		$response['msg'] = "Account Created!";
	}
	else {
		$response['status'] = false;
		$response['msg'] = "Failed To Create Account!";
	}
	echo json_encode($response);
?>