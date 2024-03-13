<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("Oops unauthorized, sorry!");
	}
	$data = json_decode(file_get_contents("php://input"), true);
	$userID = $_SESSION['userID'];
	$dID = clean($data['dID']);

	$response = array();

	$sql = "INSERT INTO `_likes` (`d_id`, `user_id`) VALUES (
			'$dID',
			'$userID'
			)";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$response['staus'] = true;
		$response['msg'] = "Liked!";
	}
	else {
		$response['staus'] = false;
		$response['msg'] = "Failed To Like!";
	}
	echo json_encode($response);
?>