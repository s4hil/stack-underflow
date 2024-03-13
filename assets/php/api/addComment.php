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
	$comment = clean($data['comment']);

	$response = array();

	$sql = "INSERT INTO `_comments` (`comment`, `d_id`, `user_id`) VALUES (
			'$comment',
			'$dID',
			'$userID'
			)";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$response['staus'] = true;
		$response['msg'] = "Comment Posted!";
	}
	else {
		$response['staus'] = false;
		$response['msg'] = "Failed To Post Comment!";
	}
	echo json_encode($response);
?>