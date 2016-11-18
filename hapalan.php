<?php
session_start();
include '../dbc_ppmjogja.php';

function getAge($dob){
	$dob = explode("-", $dob);
	$curDay = date("j");
	$curMonth = date("m");
	$curYear = date("Y");
	$age = $curYear - $dob[0];
	if($curMonth<$dob[1] || ($curMonth==$dob[1] && $curDay<$dob[2])){
		$age--;
	}
	return $age;
}

function getStatus($skor){
	switch ($skor) {
		case 0:
			return "Rasib";
			break;
		case 1:
			return "Maqbul";
			break;
		case 2;
			return "Jayyid";
			break;
		case 3:
			return "Jayyid Jiddan";
			break;		
		default:
			return "Mumtaz";
			break;
	}
}

$title = "Database Hapalan";

if (!isset($_SESSION['admin']['id'])) {
	echo '<script>alert("Access Denied")</script>';
	header("refresh: 0.1, url = /ppmjogja");
} else if(!isset($_GET['nis'])) {
	include 'template/admin_header.php';

	include 'template/hapalan_overview.php';

	include 'template/admin_footer.php';
}  else if(!!isset($_GET['nis']) && !isset($_GET['suratid'])){
	$nis = $_GET['nis'];
	include 'template/admin_header.php';

	include 'template/hapalan_santri.php';

	include 'template/admin_footer.php';
} else if(isset($_GET['nis']) && isset($_GET['suratid'])){
	$nis = $_GET['nis'];
	$suratid = $_GET['suratid'];
	
	include 'template/admin_header.php';

	include 'template/hapalan_surat.php';

	include 'template/admin_footer.php';

} else{
	echo '<script>alert("Something Wrong")</script>';
	header("refresh: 0.1, url = /ppmjogja");	
}