<div class="body">
	<form action="<?= base_url('SI/p_i_admin')?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2">Username</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="username" autofocus="" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Password</label>
			<div class="col-md-6">
				<input class="form-control" type="password" name="password" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Nama Admin</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nama" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">Alamat Admin</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="almt" required=""/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2">No.Telepon</label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="telp" required=""/>
			</div>
		</div>
		<div class="form-actions text-center" style="padding-bottom:5px;">
			<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
			<input type="reset" class="btn btn-danger" value="Reset">
		</div>
	</form>
</div>