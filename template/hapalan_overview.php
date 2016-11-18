<?php

	$hapalan = $con->query("SELECT nis, nama, jenis_kelamin, tanggal_lahir, COUNT(DISTINCT suratid) AS banyak_surat, ROUND(AVG(skor)) AS avg_skor FROM hapalan NATURAL JOIN data_santri NATURAL JOIN quran NATURAL JOIN surat GROUP BY nis");

	echo '
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">NIS</th>
				<th style="text-align: center;">Nama</th>
				<th style="text-align: center;">Jenis Kelamin</th>
				<th style="text-align: center;">Usia</th>
				<th style="text-align: center;">Banyak Surat</th>
				<th style="text-align: center;">Status</th>
			</tr>
		</thead>
		<tbody>
	';
	$i = 1;
	while ($row = $hapalan->fetch_assoc()) {
		$nis = $row['nis'];
		$usia = getAge($row['tanggal_lahir']);
		$status = getStatus($row['avg_skor']);
		echo '
		<tr>
			<td style="text-align: center;">'.$i.'</td>
			<td><a href="?nis='.$nis.'">'.$nis.'</a></td>
			<td>'.$row['nama'].'</td>
			<td style="text-align: center;">'.$row['jenis_kelamin'].'</td>
			<td style="text-align: center;">'.$usia.'</td>
			<td style="text-align: center;">'.$row['banyak_surat'].'</td>
			<td>'.$status.'</td>
		</tr>
		';
		$i++;
	}

	echo '</tbody></table>';