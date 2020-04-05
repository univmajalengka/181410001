<div class="block-header">
	<h2><i class="icon icon-table"></i> INPUT ADMIN</h2> 
</div>
<div class="card">
	<div class="header">
		<?php 
			if(isset($_POST['Input'])){
				extract($_POST);
				$q2 = mysqli_query($koneksi,"insert into admin(username,password,nama,alamat,telepon) 
					values('$username','".md5($password)."','$nama','$almt','$telp')");
				if($q2){
					echo "<h2 class='text-center bg-success'>DATA ADMIN TERSIMPAN</h2>";
					echo "<meta http-equiv='refresh' content='1;url=?pg=t_admin'>";
				}else{
					echo "<h2 class='text-center bg-red'>DATA GAGAL TERSIMPAN</h2>";
				}
			}
		?>
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
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
				<a href="?pg=t_admin" class="btn btn-success">Kembali</a>
			</div>
		</form>
	</div>
</div>