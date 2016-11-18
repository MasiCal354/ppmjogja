<?php
session_start();
include '../dbc_ppmjogja.php';

$title = 'Tambah Hapalan';

if (!isset($_SESSION['admin']['id'])) {
	echo '<script>alert("Access Denied")</script>';
	header("refresh: 0.1, url = /ppmjogja");
} else {
	$select = $con->query("SELECT * FROM surat");
	$surat1 = $con->query("SELECT * FROM surat");
	$santri = $con->query("SELECT * FROM data_santri");
	$skor = $con->query("SELECT * FROM skor_hapalan");
	include 'template/admin_header.php';

	include 'template/add_hapalan.php';

	include 'template/admin_footer.php';
}