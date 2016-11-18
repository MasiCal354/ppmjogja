<?php
session_start();
include '../../dbc_ppmjogja.php';

$vc = mysqli_escape_string($con, $_POST['vc']);
$id = mysqli_escape_string($con, $_POST['id']);
$username = mysqli_escape_string($con, $_POST['username']);
$password = mysqli_escape_string($con, $_POST['password']);

if (!($vc == "jogja354Istimewa" || $vc == "admin354Baru")) {
	echo '<script type="text/javascript">alert("Invalid Verification Code")</script>';
	header("refresh: 0.1; url = ../login");
} elseif ($vc == "admin354Baru"){
	$check_id = $con->query("SELECT * FROM admin WHERE id = '$id'");
	if ($row = $check_id->fetch_assoc()) {
		echo '<script type="text/javascript">alert("Id Already Exist")</script>';
		header("refresh: 0.1; url = ../login");
	} else {
		$check_username = $con->query("SELECT * FROM admin WHERE username = '$username'");
		if ($row = $check_username->fetch_assoc()) {
			echo '<script type="text/javascript">alert("Username Already Exist")</script>';
			header("refresh: 0.1; url = ../login");
		} else {
			$hash_password = password_hash($password, PASSWORD_DEFAULT);
			$con->query("INSERT INTO admin VALUES ('$id', '$username', '$hash_password')");
			echo '<script type="text/javascript">alert("Success")</script>';
			header("refresh: 0.1, url = ../login");
		}
	}
} else {
	$check_id1 = $con->query("SELECT * FROM data_santri WHERE nis = '$id'");
	if (!$row = $check_id1->fetch_assoc()) {
		echo '<script type="text/javascript">alert("Nomor Induk Santri not available")</script>';
		header("refresh: 0.1; url = ../login");
	} else {
		$check_id2 = $con->query("SELECT * FROM users WHERE id = '$id'");
		if ($row = $check_id2->fetch_assoc()) {
			echo '<script type="text/javascript">alert("Nomor Induk Santri Already Used")</script>';
			header("refresh: 0.1; url = ../login");
		} else {
			$check_username = $con->query("SELECT * FROM users WHERE username = '$username'");
			if ($row = $check_username->fetch_assoc()) {
				echo '<script type="text/javascript">alert("Username Already Exist")</script>';
				header("refresh: 0.1; url = ../login");
			} else {
				$hash_password = password_hash($password, PASSWORD_DEFAULT);
				$con->query("INSERT INTO users VALUES ('$id', '$username', '$hash_password')");
				echo '<script type="text/javascript">alert("Success")</script>';
				header("refresh: 0.1, url = ../login");
			}
		}
	}
}