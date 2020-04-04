<div class="body">
	<?php
		foreach($tbl as $t):
	?>
	<form action="<?= base_url('SI/p_e_notaris/'.$t->no_akta_n)?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Nomor Akta Notaris</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_akta" required="" value="<?= $t->no_akta_n?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tanggal Dibuat</label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="tgl" value="<?= $t->tgl_buat_n?>" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Pihak</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="pihak" value="<?= $t->nama_pihak?>" required=""/>
			</div>
		</div>
		
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
	<?php endforeach; ?>
</div>