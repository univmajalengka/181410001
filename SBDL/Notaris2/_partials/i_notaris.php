<div class="block-header">
	<h2><i class="icon icon-table"></i> INPUT AKTA NOTARIS</h2> 
</div>
<div class="card">
	<div class="header">
		<?php 
			if(isset($_POST['Input'])){
				extract($_POST);
				$q2 = mysqli_query($koneksi,"INSERT INTO notaris (no_akta_n, tgl_buat_n, id_jenis_akta, nama_pihak) VALUES ('".$no_akta."','".$tgl."','01','".$pihak."');");
				if($q2){
					echo "<h2 class='text-center bg-success'>DATA BERHASIL TERSIMPAN</h2>";
					echo "<meta http-equiv='refresh' content='1;url=?pg=t_notaris'>";
				}else{
					echo "<h2 class='text-center bg-red'>DATA GAGAL TERSIMPAN</h2>";
				}
			}
		?>
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Akta Notaris</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_akta" required="" autofocus=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tanggal Dibuat</label>
				<div class="col-md-6">
					<input class="form-control" type="date" name="tgl" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nama Pihak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="pihak" required=""/>
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