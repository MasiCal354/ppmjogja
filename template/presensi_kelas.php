<?php
include 'inc/fpdf.php';

$kode_kelas = $_GET['kelas'];
$santri = $con->query("SELECT nama, unit FROM kelas_santri NATURAL JOIN data_santri NATURAL JOIN unit_santri WHERE kode_kelas = '$kode_kelas'");
$kelas = $con->query("SELECT * FROM kelas WHERE kode_kelas = '$kode_kelas'");
$x = $kelas->fetch_assoc();
$i = 0;
while ($row = $santri->fetch_assoc()) {
	$unit[$i] = $row['unit'];
	$nama[$i] = $row['nama'];
	$i++;
}

for($j = $i; $j < 40;$j++){
	$unit[$j] = "";
	$nama[$j] = "";
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('assets/img/logo.png',15,10,20);
$pdf->SetFont('Times','B',15);
$pdf->Ln(5);
$pdf->Cell(80);

$pdf->Cell(30,10,'PRESENSI PENGAJIAN PPM YOGYAKARTA',0,0,'C');
$pdf->Ln(5);
$pdf->SetFont('Times','',11);
$pdf->Cell(30, 18, "Kelas: ".$x["nama_kelas"]);
$pdf->Ln(15);
$pdf->Cell(10, 18, "No", 1, 0, 'C');
$pdf->Cell(50, 18, "Nama", 1, 0, 'C');
$pdf->Cell(10, 18, "Unit", 1, 0, 'C');
$pdf->Cell(120, 5, "Sesi Pengajian", 1, 0, 'C');
$pdf->Ln();
$pdf->Cell(70, 0, "", 0);
for ($i=0; $i < 15; $i++) { 
	$pdf->Cell(8, 8, "", 1);
}
$pdf->Ln();
$pdf->Cell(70, 5, "", 0);
for ($i=0; $i < 15; $i++) { 
	$pdf->Cell(8, 5, "", 1);
}
$pdf->Ln();
for ($i=1; $i <= 40; $i++) { 
	$pdf->Cell(10, 5, $i, 1, 0, 'C');
	$pdf->Cell(50, 5, $nama[$i-1], 1);
	$pdf->Cell(10, 5, $unit[$i-1], 1, 0, 'C');
	for ($j=0; $j < 15; $j++) { 
		$pdf->Cell(8, 5, "", 1);
	}
	$pdf->Ln();
}
$pdf->Cell(70, 5, "Jumlah Hadir", 1, 0, 'C');
for ($i=0; $i < 15; $i++) { 
	$pdf->Cell(8, 5, "", 1);
}
$pdf->Ln(10);
$pdf->Cell(40, 5, "Keterangan: ");
$pdf->Ln();
$middot = html_entity_decode("&#183;");
$pdf->Cell(10);
$pdf->Cell(40, 5, iconv("UTF-8", "ISO-8859-1", "·").": Hadir Tepat Waktu");
$pdf->Output();
?>