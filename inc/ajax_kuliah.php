<?php
session_start();
include '../../dbc_ppmjogja.php';

$kampus = $_GET['kampus'];

$select = $con->query("SELECT * FROM kuliah WHERE kode_kampus = '$kampus'");

echo "<select id='form-field-1' name='kuliah' required>";
while($row = $select->fetch_assoc()){
	$kode = $row['kode_kuliah'];
	echo "<option value='".$kode."'>".$row['jenjang']." ".$row['prodi']."</option>";
}

echo '</select>';