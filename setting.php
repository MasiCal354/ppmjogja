<?php
session_start();
include '../dbc_ppmjogja.php';

$title = "Setting";

if (!isset($_SESSION['admin']['id']) && !isset($_SESSION['user']['id'])) {
	echo '<script>alert("Access Denied")</script>';
	header("refresh: 0.1, url = login");
} elseif (isset($_SESSION['admin']['id'])) {
	include 'template/admin_header.php';

	include 'template/ubah_password.php';

	include 'template/admin_footer.php';
} else {
	include 'template/user_header.php';

	include 'template/ubah_password.php';

	include 'template/user_footer.php';
}