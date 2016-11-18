<?php

	$hapalan = $con->query("SELECT nis, nama, jenis_kelamin, tanggal_lahir, suratid, namasurat, ROUND(AVG(skor)) AS avg_skor FROM hapalan NATURAL JOIN quran NATURAL JOIN data_santri NATURAL JOIN surat WHERE nis = '$nis' GROUP BY suratid");
	$biodata = $con->query("SELECT * FROM data_santri WHERE nis = '$nis'");
	$row = $biodata->fetch_assoc();
	$usia = getAge($row['tanggal_lahir']);
	echo '
	<table class="table table-bordered table-hover">
		<tr>
			<th style="width: 10%; background:repeat-x #F2F2F2;background-image:-webkit-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:-o-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:linear-gradient(to bottom,#F8F8F8 0,#ECECEC 100%);">NIS</th>
			<td>'.$nis.'</td>
		</tr>
		<tr>
			<th style="background:repeat-x #F2F2F2;background-image:-webkit-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:-o-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:linear-gradient(to bottom,#F8F8F8 0,#ECECEC 100%);">Nama</th>
			<td>'.$row['nama'].'</td>	
		</tr>
		<tr>
			<th style="background:repeat-x #F2F2F2;background-image:-webkit-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:-o-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:linear-gradient(to bottom,#F8F8F8 0,#ECECEC 100%);">Jenis Kelamin</th>
			<td>'.$row['jenis_kelamin'].'</td>	
		</tr>
		<tr>
			<th style="background:repeat-x #F2F2F2;background-image:-webkit-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:-o-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:linear-gradient(to bottom,#F8F8F8 0,#ECECEC 100%);">Usia</th>
			<td>'.$usia.'</td>	
		</tr>
	</table>
	';

	echo '
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="text-align: center;" width="5%">No</th>
				<th style="text-align: center;">Nama Surat</th>
				<th style="text-align: center;">Banyaknya Ayat yang Hapal</th>
				<th style="text-align: center;">Banyaknya Ayat</th>
				<th style="text-align: center;">Status</th>
			</tr>
		</thead>
		<tbody>
	';
	$i = 1;
	while ($row = $hapalan->fetch_assoc()) {
		$suratid = $row['suratid'];
		$status = getStatus($row['avg_skor']);
		$ayat = $con->query("SELECT COUNT(*) AS banyak_hapalan FROM hapalan NATURAL JOIN quran NATURAL JOIN surat WHERE nis = '$nis' AND suratid = '$suratid'");
		$ayat0 = $con->query("SELECT COUNT(*) AS banyak_ayat FROM quran NATURAL JOIN surat WHERE suratid = '$suratid'");

		$sum_ayat = $ayat->fetch_assoc();
		$total_ayat = $ayat0->fetch_assoc();

		echo '
		<tr>
			<td style="text-align: center;">'.$i.'</td>
			<td><a href="?nis='.$nis.'&suratid='.$suratid.'">'.$row['namasurat'].'</a></td>
			<td style="text-align: center; width: 20%">'.$sum_ayat["banyak_hapalan"].'</td>
			<td style="text-align: center; width: 20%">'.$total_ayat["banyak_ayat"].'</td>
			<td style="text-align: center; width: 20%">'.$status.'</td>
		</tr>
		';
		$i++;
	}

	echo '</tbody></table>';