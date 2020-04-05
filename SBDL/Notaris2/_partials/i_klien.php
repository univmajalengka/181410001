<div class="block-header">
	<h2><i class="icon icon-table"></i> INPUT DATA KLIEN</h2> 
</div>
<div class="card">
	<div class="header">
		<?php 
			if(isset($_POST['Input'])){
				extract($_POST);
				$q2 = mysqli_query($koneksi,"insert into klien(no_ktp,nama_klien,alamat_klien,tempat_lahir,tanggal_lahir,pekerjaan,id_jenis_akta) 
					values('$no_ktp','$nama','$almt','$temp','$tgl','$pkr','03')");
				if($q2){
					echo "<h2 class='text-center bg-success'>DATA BERHASIL TERSIMPAN</h2>";
					echo "<meta http-equiv='refresh' content='1;url=?pg=t_klien'>";
				}else{
					echo "<h2 class='text-center bg-red'>DATA GAGAL TERSIMPAN</h2>";
				}
			}
		?>
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor KTP</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_ktp" required="" autofocus=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nama Klien</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="nama" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tempat Lahir</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="temp" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tanggal Lahir</label>
				<div class="col-md-6">
					<input class="form-control" type="date" name="tgl" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Alamat</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="almt" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Pekerjaan</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="pkr" required=""/>
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