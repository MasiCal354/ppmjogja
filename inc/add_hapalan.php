<?php
session_start();
include '../../dbc_ppmjogja.php';

function convertDate($date) {
	$dd = substr($date, 0, 2);
	$mm = substr($date, 3, 2);
	$yy = substr($date, 6, 4);

	$new_date = $yy."-".$mm."-".$dd;

	return $new_date;
}

$nis = mysqli_escape_string($con, $_POST['nis']);
$quranfrom = mysqli_escape_string($con, $_POST['quranfrom']);
$quranto = mysqli_escape_string($con, $_POST['quranto']);
$tanggal_setoran = mysqli_escape_string($con, $_POST['tanggal_setoran']);
$tanggal_setoran = convertDate($tanggal_setoran);
$skor = mysqli_escape_string($con, $_POST['skor']);

if($quranfrom > $quranto){
	echo '<script>alert("Masukan Tidak Valid")</script>';
	header("refresh: 0.1, url = /ppmjogja");
} else{
	for($i = $quranfrom; $i <= $quranto; $i++){
		$con->query("INSERT INTO hapalan VALUES ('$nis', $i, '$tanggal_setoran', $skor)");
	}

	header("refresh: 0.1; url = ../hapalan");

}

