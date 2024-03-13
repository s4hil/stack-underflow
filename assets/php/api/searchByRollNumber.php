<?php
	include '../config.php';
	include '../coreFuns.php';
	$data = json_decode(file_get_contents("php://input"), true);

	$rollNumber = $data['rollNumber'];
	
	$response = array();

	if (validateRollNumber($rollNumber) == true) {
		if (checkDuplicateUser($rollNumber) == true) {
			if (getNameByRollNumber($rollNumber) != false) {
				$name = getNameByRollNumber($rollNumber);
				$response['status'] = true;
				$response['name'] = $name;
			}
			else {
				$response['status'] = false;
				$response['msg'] = "Roll Number Not Found!";
			}
		}
		else {
			$response['status'] = false;
			$response['msg'] = "User Already Exists!";
		}
	}
	else {
		$response['status'] = false;
		$response['msg'] = "Invalid Roll Number!";
	}
	echo json_encode($response);

?>