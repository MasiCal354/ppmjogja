<?php

	$santri = $con->query("SELECT * FROM data_santri NATURAL JOIN kuliah NATURAL JOIN kampus");
	echo '
	<table id="simple-table" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama</th>
				<th>Panggilan</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Nomor HP</th>
				<th>Kampus</th>
				<th>Prodi</th>
				<th>Golongan Darah</th>
			</tr>
		</thead>
		<tbody>
	';

	while ($row = $santri->fetch_assoc()) {
		$tanggal_lahir = strtotime($row['tanggal_lahir']);
		echo '
		<tr>
			<td>'.$row['nis'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['panggilan'].'</td>
			<td>'.$row['jenis_kelamin'].'</td>
			<td>'.$row['tempat_lahir'].'</td>
			<td>'.date('j F Y', $tanggal_lahir).'</td>
			<td>'.$row['no_hp'].'</td>
			<td>'.$row['kampus'].'</td>
			<td>'.$row['prodi'].'</td>
			<td>'.$row['gol_darah'].'</td>
		</tr>
		';
	}

	echo '</tbody></table>';