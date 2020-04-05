<div class="block-header">
	<h2><i class="icon icon-user"></i> EDIT DATA ADMIN</h2> 
</div>
<div class="card">
	<div class="header">
		<?php
			if(isset($_GET['pk'])){
				$pk = $_GET['pk'];
				if(isset($_POST['Input'])) { 
					extract($_POST);
					$q2 = mysqli_query($koneksi,"UPDATE admin SET username='".$username."', nama='".$nama."', alamat='".$almt."', telepon='".$telp."' WHERE username='".$pk."';");
					if($q2) { 
						echo "<h2 class='text-center bg-success'>DATA BERHASIL TER-UPDATE</h2>";
						echo "<meta http-equiv='refresh' content='0; url=?pg=t_admin'>";
					}else{
						echo "<h2 class='text-center bg-red'>DATA GAGAL TER-UPDATE</h2>";
					} 
				} 
				$q3=mysqli_query($koneksi,"select * from admin where username='".$pk."'"); 
				$t=mysqli_fetch_array($q3); 	
			}
		?> 
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Username</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="username" required="" value="<?= $t['username'] ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nama Admin</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="nama" required="" value="<?= $t['nama'] ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Alamat Admin</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="almt" required="" value="<?= $t['alamat'] ?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">No.Telepon</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="telp" required="" value="<?= $t['telepon'] ?>" />
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