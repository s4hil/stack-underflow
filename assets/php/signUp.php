<?php
function alert($msg)
{
	?>
	<script>
		alert("<?php echo $msg; ?>");
		window.location = "../../index.php";
	</script>
	<?php
}
	if (isset($_POST['signUp'])) {

		include 'config.php';
		include 'coreFuns.php';

		$rollNumber = $_POST['rollNumber'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$rollNumber = mysqli_real_escape_string($conn, clean($rollNumber));
		$name = mysqli_real_escape_string($conn, clean($name));
		$email = mysqli_real_escape_string($conn, clean($email));
		$password = md5(mysqli_real_escape_string($conn, clean($password)));

		$img_name = rand(10,99).$_FILES['file']['name'];
		$img_size = $_FILES['file']['size'];
		$img_tmp_name = $_FILES['file']['tmp_name'];

		$max_size = 512000;
		$target = "../uploads/userImgs/".$img_name;
		$imgNameArr = explode('.', $img_name);
		$ext = strtolower(end($imgNameArr));

		if ($ext == "jpg" || $ext == "png" || $ext = "jpeg") {
			if ($img_size < $max_size) {
				if (move_uploaded_file($img_tmp_name, $target)) {
					$sql = "INSERT INTO `_users` (`roll_no`,`full_name`,`email`,`password`, `user_img`) VALUES (
						'$rollNumber',
						'$name',
						'$email',
						'$password',
						'$img_name'
						)";
					$res = mysqli_query($conn, $sql);
					if ($res) {
						alert("Account Created!");
					}
					else {
						alert("Failed To Add Account!");
					}
				}
				else {
					alert("Error uploading file!");
				}
			}
			else{
				alert("Max size should be 500KB!");
			}
		}
		else {
			alert("Invalid Image!");
		}

	}
?>