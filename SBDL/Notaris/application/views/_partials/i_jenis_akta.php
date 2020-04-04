<div class="body">
	<form action="<?= base_url('SI/p_i_jenis_akta')?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">ID Jenis Akta</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="no_akta" required="" autofocus=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Jenis Akta</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nmj" required=""/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
</div>