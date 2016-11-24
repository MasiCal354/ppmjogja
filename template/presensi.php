<?php
$kelas = $con->query("SELECT * FROM kelas");
echo "<ol>";
while ($row = $kelas->fetch_assoc()) {
	$x = $row['kode_kelas'];
	echo '<li><a href="?kelas='.$x.'">'.$row['nama_kelas'].'</a></li>';
}
echo "</ol>";