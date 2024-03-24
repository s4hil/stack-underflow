<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("Oops unauthorized, sorry!");
	}
	
	$search = clean($_GET['q']);	

	$response = array();

	$sql = "SELECT * FROM `_discussions` WHERE `topic` LIKE '%$search%'";
	$res = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_array($res)) {
			$row['details'] = limitText($row['details'], 40);
			$full_name = explode(' ', getUserName($row['user_id']));
			$topic = $row['topic'];
			$response[] = $row;
		}
	}
	else {
		$response['status'] = false;
		$response['msg'] = "No Data Found!";
	}
	echo json_encode($response);

?>