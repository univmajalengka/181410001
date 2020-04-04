<div class="body">
	<form action="<?= base_url('SI/p_i_ppat')?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Nomor Akta PPAT</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_akta" required="" autofocus=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tanggal Dibuat</label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="tgl" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Pihak 1</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="pihak1" required=""/>
			</div>
			<label class="control-label col-md-2">Pihak 2</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="pihak2" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor Hak</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_hak" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Letak</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="letak" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Luas Tanah</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="lt" required=""/>
			</div>
			<label class="control-label col-md-2">Luas Bangunan</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="lb" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Harga Transaksi</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="ht" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor OP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nop" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor JOP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="njop" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">SSP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="ssp" required=""/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
</div>