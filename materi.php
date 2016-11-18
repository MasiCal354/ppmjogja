<?php
session_start();
include '../dbc_ppmjogja.php';

$title = 'Materi';

if (!isset($_SESSION['user']['id']) && !isset($_SESSION['admin']['id'])) {
	header('Location: login');
} else if(isset($_SESSION['admin']['id'])) {
	include 'template/admin_header.php';

	include 'template/materi.php';

	include 'template/admin_footer.php';
} else {
	include 'template/user_header.php';

	

	include 'template/user_footer.php';
}
