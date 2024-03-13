<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("You seem lost!");
	}

	$response = array();

	$data = json_decode(file_get_contents("php://input"), true);
	$id = $data['d_id'];

	$sql = "DELETE FROM `_discussions` WHERE `d_id`=$id";
	if ($res = mysqli_query($conn, $sql)) {
		$response['status'] = true;
		$response['msg'] = "Deleted";
	}
	else{
		$response['status'] = true;
		$response['msg'] = "not Deleted";
	}
	echo json_encode($response);

?>