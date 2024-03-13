<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("Oops unauthorized, sorry!");
	}

	$response = array();

	$sql = "SELECT * FROM `_discussions`";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		$total = mysqli_num_rows($res);
		$perPage = 5;
		$pages = ceil($total/$perPage);
		$response['status'] = true;
		$response['pages'] = $pages;
	}
	else {
		$response['status'] = false;
		$response['msg'] = "Pagination Request Err";
	}
	
	echo json_encode($response);

?>