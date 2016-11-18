<?php
session_start();
include '../../dbc_ppmjogja.php';

$surat = $_GET['surat'];

$select = $con->query("SELECT * FROM quran WHERE suratid = '$surat'");

echo "<select id='form-field-1' name='quranto' required>";
echo "<option value=''>Sampai Ayat</option>";
while($row = $select->fetch_assoc()){
	$qid = $row['qid'];
	echo "<option class='ayat' value='".$qid."'>".$row['ayat']."</option>";
}

echo '</select>';