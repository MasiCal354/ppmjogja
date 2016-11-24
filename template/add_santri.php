<form method="POST" action="inc/add_santri" class="form-horizontal" role="form">
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIS </label>
		<div class="col-sm-9">
			<input id="nis" name="nis" type="text" id="form-field-1" placeholder="Nomor Induk Santri" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
		<div class="col-sm-9">
			<input name="nama" type="text" id="form-field-1" placeholder="Nama Lengkap" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Panggilan </label>
		<div class="col-sm-9">
			<input name="panggilan" type="text" id="form-field-1" placeholder="Nama Palnggilan" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>
		<div class="col-sm-9">
			<div class="radio">
				<label>
					<input name="jenis_kelamin" type="radio" class="ace" value="L" checked/>
					<span class="lbl"> Laki-Laki</span>
				</label>
			</div>
			<div class="radio">
				<label>
					<input name="jenis_kelamin" type="radio" class="ace" value="P"/>
					<span class="lbl"> Perempuan</span>
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tempat Kelahiran </label>
		<div class="col-sm-9">
			<input name="tempat_lahir" type="text" id="form-field-1" placeholder="Tempat Kelahiran" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Tanggal Lahir </label>
		<div class="col-sm-9">
			<input class="tanggal" name="tanggal_lahir" type="text">
			<div class="fa fa-calendar"></div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor HP </label>
		<div class="col-sm-9">
			<input id="phone" name="no_hp" type="text" id="form-field-1" placeholder="Nomor HP" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alamat </label>
		<div class="col-sm-9">
			<input name="alamat" type="text" id="form-field-1" placeholder="Alamat Asal" class="col-xs-10 col-sm-5" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kampus </label>
		<div class="col-sm-9">
			<select id="form-field-1" name="kampus" onchange="showProdi(this.value)">
			<option value="">Pilih Perguruan Tinggi: </option>
			<?php
			while($row = $select->fetch_assoc()){
						$kode = $row['kode_kampus'];
						echo "<option value='".$kode."'>".$row['kampus']."</option>";
					}
			?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Prodi </label>
		<div class="col-sm-9">				
		<div id="listProdi">
			<select id="form-field-1" name="kuliah" disabled><option value="">Pilih Perguruan Tinggi terlebih dahulu</option></select>
		</div>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Golongan Darah </label>
		<div class="col-sm-9">
			<select id="form-field-1" name="gol_darah">
				<option value="A">A</option>
				<option value="B">B</option>
				<option value="AB">AB</option>
				<option value="O">O</option>
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