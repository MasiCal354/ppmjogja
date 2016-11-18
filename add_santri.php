<?php
session_start();
include '../dbc_ppmjogja.php';

$title = "Pendataan Santri";

if (!isset($_SESSION['admin']['id'])) {
	echo '<script>alert("Access Denied")</script>';
	header("refresh: 0.1, url = /ppmjogja");
} else {
	$select = $con->query("SELECT * FROM kampus");
	include 'template/admin_header.php';

	include 'template/add_santri.php';

	include 'template/admin_footer.php';
}