<form method="POST" action="inc/add_hapalan" class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Santri </label>
		<div class="col-sm-9">
		<select id="form-field-1" name="nis">
			<option value="">Pilih Santri:</option>
			<?php
				while ($row = $santri->fetch_assoc()) {
					$nis = $row['nis'];
					echo '<option value="'.$nis.'">'.$nis.' '.$row['nama'].'</option>';
				}
			?>
		</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Dari Surat</label>
		<div class="col-sm-9">
			<span class="input-icon">
				<select id="suratfrom" name="suratfrom" onchange="showAyatfrom(this.value)">
					<option value="">Pilih Surat: </option>
					<?php
					while($row = $select->fetch_assoc()){
						$suratid = $row['suratid'];
						echo "<option value='".$suratid."'>".$suratid.". ".$row['namasurat']."</option>";
					}
					?>
				</select>
			</span>
			<label>&nbsp; Ayat &nbsp;</label>
			<span class="input-icon input-icon-right">
				<div id="listAyatfrom">
					<select name="quranfrom" disabled>
						<option value="">Pilih Surat terlebih dahulu</option>
					</select>
				</div>
			</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right">Sampai Surat</label>
		<div class="col-sm-9">
			<span class="input-icon">
				<select id="suratto" name="suratto" onchange="showAyatto(this.value)">
					<option value="">Pilih Surat: </option>
					<?php
					while($row = $surat1->fetch_assoc()){
						$suratid1 = $row['suratid'];
						echo "<option class='surat' value='".$suratid1."' hidden>".$suratid1.". ".$row['namasurat']."</option>
					";
					}
					?>
				</select>
			</span>
			<label>&nbsp; Ayat &nbsp;</label>
			<span class="input-icon input-icon-right">
				<div id="listAyatto">
					<select name="quranto" disabled>
						<option value="">Pilih Surat terlebih dahulu</option>
					</select>
				</div>
			</span>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Setoran </label>
		<div class="col-sm-9">
			<input id="tanggal" name="tanggal_setoran" type="text">
			<div class="fa fa-calendar"></div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Status </label>
		<div class="col-sm-9">
			<select id="form-field-1" name="skor">
				<option value="">Pilih Status: </option>
				<?php
				while($row = $skor->fetch_assoc()){
					$skorid = $row['skor'];
					echo "<option value='".$skorid."'>".$row['status']."</option>";
				}
				?>
			</select>
		</div>
	</div>
	<div class="clearfix form-actions">
		<div class="col-md-offset-3 col-md-9">
			<button class="btn btn-success" type="submit" onclick="submitform()">
				<i class="ace-icon fa fa-check bigger-110"></i>
				Submit
			</button>
			&nbsp; &nbsp; &nbsp;
			<button class="btn" type="reset">
				<i class="ace-icon fa fa-undo bigger-110"></i>
				Reset
			</button>
		</div>
	</div>	
</form>