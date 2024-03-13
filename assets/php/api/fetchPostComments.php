<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("You seem lost!");
	}

	$data = json_decode(file_get_contents("php://input"), true);
	$d_id = mysqli_real_escape_string($conn, clean($data['dID']));
	$response = array();

	$sql = "SELECT * FROM `_comments` WHERE `d_id` = $d_id";
	$res = mysqli_query($conn, $sql);
	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_array($res)) {
			$row['date'] = getDateFromStamp($row['timestamp']);
			$row['user'] = getUserName($row['user_id']);
			$row['img'] = getUserImg($row['user_id']);
			$row['count'] = mysqli_num_rows($res);
			$response[] = $row;
		}
	}
	else {
		$response['status'] = false;
		$response['msg'] = "No comments!";
	}
	echo json_encode($response);
?>