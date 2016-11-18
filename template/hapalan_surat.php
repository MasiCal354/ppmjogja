<?php

	$hapalan = $con->query("SELECT * FROM hapalan NATURAL JOIN quran NATURAL JOIN skor_hapalan WHERE suratid = '$suratid' AND nis = '$nis'");

	$biodata = $con->query("SELECT * FROM data_santri WHERE nis = '$nis'");
	$surat = $con->query("SELECT namasurat FROM surat WHERE suratid = '$suratid'");
	$row = $surat->fetch_assoc();
	$namasurat = $row['namasurat'];
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
		<tr>
			<th style="background:repeat-x #F2F2F2;background-image:-webkit-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:-o-linear-gradient(top,#F8F8F8 0,#ECECEC 100%);background-image:linear-gradient(to bottom,#F8F8F8 0,#ECECEC 100%);">Surat</th>
			<td>'.$namasurat.'</td>	
		</tr>
	</table>
	';

	echo '
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th style="text-align: center;" width="5%">No</th>
				<th style="text-align: center;">Ayat</th>
				<th style="text-align: center;">Tanggal Setoran</th>
				<th style="text-align: center;">Status</th>
			</tr>
		</thead>
		<tbody>
	';

	$i = 1;
	while ($row = $hapalan->fetch_assoc()) {
		$str_date = strtotime($row['str_date']);
		echo '
		<tr>
			<td style="text-align: center;">'.$i.'</td>
			<td>'.$row['ayat'].'</td>
			<td>'.date('j F Y', $str_date).'</td>
			<td>'.$row['status'].'</td>
		</tr>
		';
		$i++;
	}

	echo '</tbody></table>';