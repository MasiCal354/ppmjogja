<?php
session_start();
include '../../dbc_ppmjogja.php';

$surat = $_GET['surat'];

$select = $con->query("SELECT * FROM quran WHERE suratid = '$surat'");

echo "<select id='form-field-1' name='quranfrom' required>";
echo "<option value=''>Dari Ayat</option>";
while($row = $select->fetch_assoc()){
	$qid = $row['qid'];
	echo "<option value='".$qid."' onchange='fromTo(this.innerHTML)'>".$row['ayat']."</option>";
}

echo '</select>';