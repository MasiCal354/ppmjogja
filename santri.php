<?php
session_start();
include '../dbc_ppmjogja.php';

$title = "Database Santri";

if (!isset($_SESSION['admin']['id'])) {
	echo '<script>alert("Access Denied")</script>';
	header("refresh: 0.1, url = /ppmjogja");
} else {
	include 'template/admin_header.php';
	
	include 'template/santri.php';

	include 'template/admin_footer.php';
}