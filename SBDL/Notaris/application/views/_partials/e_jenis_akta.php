<div class="body">
	<?php
		foreach($tbl as $t):
	?>
	<form method="post" action="<?= base_url('SI/p_e_jenis_akta/'.$t->id_jenis_akta)?>" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">ID Jenis Akta</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="id" value="<?= $t->id_jenis_akta?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Jenis Akta</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nm" value="<?= $t->nama_jenis ?>" />
			</div>
		</div>
		<?php endforeach; ?>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
</div>