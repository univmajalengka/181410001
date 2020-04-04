<div class="body">
	<form action="<?= base_url('SI/p_i_klien')?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Nomor KTP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_ktp" required="" autofocus=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Klien</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nama" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tempat Lahir</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="temp" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tanggal Lahir</label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="tgl" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Alamat</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="almt" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Pekerjaan</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="pkr" required=""/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
</div>