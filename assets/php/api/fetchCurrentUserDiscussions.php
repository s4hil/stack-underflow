<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("Oops unauthorized, sorry!");
	}

	$response = array();
	$dicsussions = array();

	$userID = $_SESSION['userID'];

	$sql = "SELECT * FROM `_discussions` WHERE `user_id`='$userID'";
	$res = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_array($res)) {
			array_push($dicsussions, $row);
		}
		$response['data'] = $dicsussions;
		$response['status'] = true;

	}
	else {
		$response['status'] = false;
	}
	echo json_encode($response);

?>