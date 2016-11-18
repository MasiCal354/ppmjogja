<?php
session_start();
include '../../dbc_ppmjogja.php';

$username = mysqli_escape_string($con, $_POST['username']);
$password = mysqli_escape_string($con, $_POST['password']);

$check_user = $con->query("SELECT * FROM admin WHERE BINARY username ='$username'");
$row_user = $check_user->fetch_assoc();

if(!$row_user){
	echo '<script type="text/javascript">alert("Incorect Username or Password")</script>';
	header("refresh: 0.1; url = ../login");
} else {
	$hash_password = $row_user['password'];
	$hash = password_verify($password, $hash_password);
	if (!$hash) {
		echo '<script type="text/javascript">alert("Incorect Password")</script>';
		header("refresh: 0.1; url = ../login");
	} else {
		$_SESSION['admin']['id'] = $row_user['id'];
		$_SESSION['admin']['username'] = $row_user['username'];
		header("Location: ../");
	}
}