<div class="body">
	<?php
		foreach($tbl as $t):
	?>
	<form action="<?= base_url('SI/p_e_klien/'.$t->no_ktp)?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Nomor KTP</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_ktp" required="" value="<?= $t->no_ktp?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Klien</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nama" required="" value="<?= $t->nama_klien?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tempat Lahir</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="temp" required="" value="<?= $t->tempat_lahir?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Tanggal Lahir</label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="tgl" required="" value="<?= $t->tanggal_lahir?>" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Alamat</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="almt" required="" value="<?= $t->alamat_klien?>"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Pekerjaan</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="pkr" required="" value="<?= $t->pekerjaan?>"/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
	<?php endforeach; ?>
</div>