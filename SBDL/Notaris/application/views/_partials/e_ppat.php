<div class="body">
	<?php
		foreach($tbl as $t):
	?>
	<form action="<?= base_url('SI/p_e_ppat/'.$t->no_akta_p)?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Nomor Akta PPAT</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_akta" required="" value="<?= $t->no_akta_p?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tanggal Dibuat</label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="tgl" required="" value="<?= $t->tgl_buat_p?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Pihak 1</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="pihak1" required="" value="<?= $t->pihak_1?>"/>
			</div>
			<label class="control-label col-md-2">Pihak 2</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="pihak2" required="" value="<?= $t->pihak_2?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor Hak</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_hak" required="" value="<?= $t->no_hak?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Letak</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="letak" required="" value="<?= $t->letak?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Luas Tanah</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="lt" required="" value="<?= $t->luas_tanah?>"/>
			</div>
			<label class="control-label col-md-2">Luas Bangunan</label>
			<div class="col-md-4">
				<input class="form-control" type="text" name="lb" required="" value="<?= $t->luas_bangunan?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Harga Transaksi</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="ht" required="" value="<?= $t->harga_transaksi?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor OP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nop" required="" value="<?= $t->nop?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nomor JOP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="njop" required="" value="<?= $t->njop?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">SSP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="ssp" required="" value="<?= $t->ssp?>"/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
	<?php endforeach; ?>
</div>