<?php
session_start();
include '../dbc_ppmjogja.php';

$title = 'Presensi';

if (!isset($_SESSION['admin']['id'])) {
	header('Location: login');
} else if(!isset($_GET['kelas'])) {
	include 'template/admin_header.php';

	include 'template/presensi.php';

	include 'template/admin_footer.php';
} else{
	include 'template/presensi_kelas.php';
}