<?php
session_start();
include '../../dbc_ppmjogja.php';

$oldpassword = mysqli_escape_string($con, $_POST['oldpassword']);
$newpassword = mysqli_escape_string($con, $_POST['newpassword']);

if (isset($_SESSION['user']['id'])) {
	$id = $_SESSION['user']['id'];

	$check = $con->query("SELECT * FROM users WHERE id = '$id'");

	$row = $check->fetch_assoc();
	$hash_password = $row['password'];
	$hash = password_verify($oldpassword, $hash_password);

	if ($hash == 0) {
		echo '<script type="text/javascript">alert("Invalid Old Password")</script>';
		header("refresh: 0.1; url = ../setting.php");
	} else {
		$encrypted_password = password_hash($newpassword, PASSWORD_DEFAULT);
		$con->query("UPDATE users SET password = '$encrypted_password' WHERE id = '$id'");
		echo '<script type="text/javascript">alert("Password Changed")</script>';
		header("refresh: 0.1; url = ../setting.php");
	}
} else {
	$id = $_SESSION['admin']['id'];

	$check = $con->query("SELECT * FROM admin WHERE id = '$id'");

	$row = $check->fetch_assoc();
	$hash_password = $row['password'];
	$hash = password_verify($oldpassword, $hash_password);

	if ($hash == 0) {
		echo '<script type="text/javascript">alert("Invalid Old Password")</script>';
		header("refresh: 0.1; url = ../setting.php");
	} else {
		$encrypted_password = password_hash($newpassword, PASSWORD_DEFAULT);
		$con->query("UPDATE admin SET password ='$encrypted_password' WHERE id = '$id'");
		echo '<script type="text/javascript">alert("Password Changed")</script>';
		header("refresh: 0.1; url = ../setting.php");
	}
}

