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

$nis = mysqli_escape_string($con, $_POST["nis"]);
$nama = mysqli_escape_string($con, $_POST["nama"]);
$panggilan = mysqli_escape_string($con, $_POST["panggilan"]);
$jenis_kelamin = mysqli_escape_string($con, $_POST["jenis_kelamin"]);
$tempat_lahir = mysqli_escape_string($con, $_POST["tempat_lahir"]);
$tanggal_lahir = mysqli_escape_string($con, $_POST["tanggal_lahir"]);

$tanggal_lahir = convertDate($tanggal_lahir);

$no_hp = mysqli_escape_string($con, $_POST["no_hp"]);
$alamat = mysqli_escape_string($con, $_POST["alamat"]);
$kuliah = mysqli_escape_string($con, $_POST["kuliah"]);
$gol_darah = mysqli_escape_string($con, $_POST["gol_darah"]);

$check_nis = $con->query("SELECT * FROM data_santri WHERE nis = '$nis'");
if ($row = $check_nis->fetch_assoc()) {
	echo '<script type="text/javascript">alert("Nomor Induk Santri Already Used")</script>';
	header("refresh: 0.1; url = ../add_santri");
} else {
	$con->query("INSERT INTO data_santri VALUES ('$nis', '$nama', '$panggilan', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$no_hp', '$alamat', '$kuliah', '$gol_darah')");
	header("refresh: 0.1; url = ../santri");
}