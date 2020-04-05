<div class="block-header">
	<h2><i class="icon icon-table"></i> INPUT AKTA PPAT</h2> 
</div>
<div class="card">
	<div class="header">
		<?php 
			if(isset($_POST['Input'])){
				extract($_POST);
				$q2 = mysqli_query($koneksi,"INSERT INTO ppat (no_akta_p, tgl_buat_p, id_jenis_akta, pihak_1, pihak_2, no_hak, letak, luas_tanah, luas_bangunan, harga_transaksi, nop, njop, ssp) VALUES ('".$no_akta."','".$tgl."','02','".$pihako."','".$pihakt."','".$no_hak."','".$letak."','".$lt."','".$lb."','".$ht."','".$nop."','".$njop."','".$ssp."');");
				if($q2){
					echo "<h2 class='text-center bg-success'>DATA BERHASIL TERSIMPAN</h2>";
					echo "<meta http-equiv='refresh' content='1;url=?pg=t_ppat'>";
				}else{
					echo "<h2 class='text-center bg-red'>DATA GAGAL TERSIMPAN</h2>";
				}
			}
		?>
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Akta PPAT</label>
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
				<label class="control-label col-md-2">Pihak 1</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="pihako" required=""/>
				</div>
				<label class="control-label col-md-2">Pihak 2</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="pihakt" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Hak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_hak" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Letak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="letak" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Luas Tanah</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="lt" required=""/>
				</div>
				<label class="control-label col-md-2">Luas Bangunan</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="lb" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Harga Transaksi</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ht" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Objek Pajak (NOP)</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="nop" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nilai Jual Objek Pajak (NJOP)</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="njop" required=""/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Surat Setoran Pajak (SSP)</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ssp" required=""/>
				</div>
			</div>
			<div class="form-actions text-center" style="padding-bottom:5px;">
				<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
				<input type="reset" class="btn btn-danger" value="Reset">
				<a href="?pg=t_ppat" class="btn btn-success">Kembali</a>
			</div>
		</form>
	</div>
</div>