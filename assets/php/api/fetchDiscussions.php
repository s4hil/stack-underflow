<?php
	include '../config.php';
	include '../coreFuns.php';
	include '../../../loginCheck.php';

	if (!isset($_SESSION['loginStatus'])) {
		die("Oops unauthorized, sorry!");
	}
	$data = json_decode(file_get_contents("php://input"), true);

	$response = array();

	$sql = "SELECT `d_id` FROM `_discussions`";
	$res = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($res) > 0) {
		$total = mysqli_num_rows($res);
		$start = $data['pageNumber']; 
		$start--;
		$perPage = 5;
		$pages = ceil($total/$perPage);

		$start = $start * $perPage;

		$sql = "SELECT 
					`d_id`,
					`topic`,
					`details`,
					`user_id`,
					`code_img`,
					`timestamp`
				FROM `_discussions` LIMIT $start,$perPage";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			while ($row = mysqli_fetch_array($res)) {

				$row['details'] = limitText($row['details'], 40);
				$row['date'] = getDateFromStamp($row['timestamp']);
				$row['likes'] = getLikeCount($row['d_id']);
				$full_name = explode(' ', getUserName($row['user_id']));
				$row['username'] = $full_name[0];
				$row['comments'] = getCommentCount($row['d_id']);
				$row['dp'] = getUserImg($row['user_id']);
				$response[] = $row;
			}
		}
	}
	else {
		$response['status'] = false;
		$response['msg'] = "No Data Found!";
	}
	echo json_encode($response);

?>