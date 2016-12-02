<?php
function createTables($filename, $db, $con){
	mysqli_select_db($con, $db);

	$file = $filename;

	if($fp = file_get_contents($file)) {
	  $var_array = explode(';',$fp);
	  foreach($var_array as $value) {
	    mysqli_query($con, $value.';');
	  }
	}
}

function createAdmin($con, $user, $pass){
	$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);
	mysqli_query($con, "INSERT INTO `admin` (`id`, `username`, `password`) VALUES ('".strtoupper($user)."', '".$user."', '".$hashedPassword."');");
}

function passConfirmed($pass, $cpass){
	return ($pass == $cpass);
}

$admin_user = $_POST['username_admin'];
$pass = $_POST['password_admin'];
$conpass = $_POST['confirm_password_admin'];
$server = $_POST['hostname_database'];
$user = $_POST['username_database'];
$password = $_POST['password_database'];
$database = $_POST['nama_database'];
$con = mysqli_connect($server,$user,$password);

if(!file_exists("../dbc_ppmjogja.php") && $con && passConfirmed($pass, $conpass)){
	if(mysqli_query($con, "CREATE DATABASE ".$database)){
		file_put_contents('../dbc_ppmjogja.php', 
			"<?php

			\$con = mysqli_connect('".$server."', '".$user."', '".$password."','".$database."');

			if (!\$con) {
				die('Connection failed: '.mysqli_connect_error()); 
		}");

		$filename = "ppmjogja.sql";

		createTables($filename, $database, $con);
		createAdmin($con, $admin_user, $pass);
	} else {
		echo 'database creation failed';
		sleep(2);
		header("Location: install2.html");  
	}
} else {
	echo 'database settings failed';
	sleep(2);
	header("Location: install2.html");  
}

header("Location: install3.html");  
?>