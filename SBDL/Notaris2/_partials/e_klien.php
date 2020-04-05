<div class="block-header">
	<h2><i class="icon icon-user"></i> EDIT DATA KLIEN</h2> 
</div>
<div class="card">
	<div class="header">
		<?php
			if(isset($_GET['pk'])){
				$pk = $_GET['pk'];
				if(isset($_POST['Input'])) { 
					extract($_POST);
					$q2 = mysqli_query($koneksi,"UPDATE klien SET no_ktp='".$no_ktp."', nama_klien='".$nama."', tempat_lahir='".$temp."', tanggal_lahir='".$tgl."', alamat_klien='".$almt."', pekerjaan='".$pkr."' WHERE no_ktp='".$pk."';");
					if($q2) { 
						echo "<h2 class='text-center bg-success'>DATA BERHASIL TER-UPDATE</h2>";
						echo "<meta http-equiv='refresh' content='0; url=?pg=t_klien'>";
					}else{
						echo "<h2 class='text-center bg-red'>DATA GAGAL TER-UPDATE</h2>";
					} 
				} 
				$q3=mysqli_query($koneksi,"select * from klien where no_ktp='".$pk."'"); 
				$t=mysqli_fetch_array($q3); 	
			}
		?> 
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor KTP</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_ktp" required="" value="<?= $t['no_ktp']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nama Klien</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="nama" required="" value="<?= $t['nama_klien']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tempat Lahir</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="temp" required="" value="<?= $t['tempat_lahir']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tanggal Lahir</label>
				<div class="col-md-6">
					<input class="form-control" type="date" name="tgl" required="" value="<?= $t['tanggal_lahir']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Alamat</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="almt" required="" value="<?= $t['alamat_klien']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Pekerjaan</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="pkr" required="" value="<?= $t['pekerjaan']?>"/>
				</div>
			</div>
			<div class="form-actions text-center" style="padding-bottom:5px;">
				<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
				<input type="reset" class="btn btn-danger" value="Reset">
				<a href="?pg=t_klien" class="btn btn-success">Kembali</a>
			</div>
		</form>
	</div>
</div>