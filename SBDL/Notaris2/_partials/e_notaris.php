<div class="block-header">
	<h2><i class="icon icon-table"></i> EDIT AKTA NOTARIS</h2> 
</div>
<div class="card">
	<div class="header">
		<?php
			if(isset($_GET['pk'])){
				$pk = $_GET['pk'];
				if(isset($_POST['Input'])) { 
					extract($_POST);
					$q2 = mysqli_query($koneksi,"UPDATE notaris SET no_akta_n='".$no_akta."', tgl_buat_n='".$tgl."', nama_pihak='".$pihak."' WHERE no_akta_n='".$pk."';");
					if($q2) { 
						echo "<h2 class='text-center bg-success'>DATA BERHASIL TER-UPDATE</h2>";
						echo "<meta http-equiv='refresh' content='0; url=?pg=t_notaris'>";
					}else{
						echo "<h2 class='text-center bg-red'>DATA GAGAL TER-UPDATE</h2>";
					} 
				} 
				$q3=mysqli_query($koneksi,"select * from notaris where no_akta_n='".$pk."'"); 
				$t=mysqli_fetch_array($q3); 	
			}
		?> 
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Akta Notaris</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_akta" value="<?= $t['no_akta_n']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tanggal Dibuat</label>
				<div class="col-md-6">
					<input class="form-control" type="date" name="tgl" value="<?= $t['tgl_buat_n']?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nama Pihak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="pihak" value="<?= $t['nama_pihak']?>" />
				</div>
			</div>
			
			<div class="form-actions text-center" style="padding-bottom:5px;">
				<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
				<input type="reset" class="btn btn-danger" value="Reset">
				<a href="?pg=t_notaris" class="btn btn-success">Kembali</a>
			</div>
		</form>
	</div>
</div>