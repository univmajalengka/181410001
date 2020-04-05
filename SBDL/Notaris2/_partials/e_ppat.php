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
					$q2 = mysqli_query($koneksi,"UPDATE ppat SET no_akta_p='".$no_akta."', tgl_buat_p='".$tgl."', pihak_1='".$pihako."', pihak_2='".$pihakt."', letak='".$letak."', no_hak='".$no_hak."', luas_tanah='".$lt."', luas_bangunan='".$lb."', harga_transaksi='".$ht."', nop='".$nop."', njop='".$njop."', ssp='".$ssp."' WHERE no_akta_p='".$pk."';");
					if($q2) { 
						echo "<h2 class='text-center bg-success'>DATA BERHASIL TER-UPDATE</h2>";
						echo "<meta http-equiv='refresh' content='0; url=?pg=t_ppat'>";
					}else{
						echo "<h2 class='text-center bg-red'>DATA GAGAL TER-UPDATE</h2>";
					} 
				} 
				$q3=mysqli_query($koneksi,"select * from v_ppat where no_akta_p='".$pk."'"); 
				$t=mysqli_fetch_array($q3); 	
			}
		?> 
	</div>
	<div class="body">
		<form action="" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Akta PPAT</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_akta" required="" value="<?= $t['no_akta_p']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Tanggal Dibuat</label>
				<div class="col-md-6">
					<input class="form-control" type="date" name="tgl" required="" value="<?= $t['tgl']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Pihak 1</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="pihako" required="" value="<?= $t['pihak_1']?>"/>
				</div>
				<label class="control-label col-md-2">Pihak 2</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="pihakt" required="" value="<?= $t['pihak_2']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nomor Hak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="no_hak" required="" value="<?= $t['no_hak']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Letak</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="letak" required="" value="<?= $t['letak']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Luas Tanah</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="lt" required="" value="<?= $t['luas_tanah']?>"/>
				</div>
				<label class="control-label col-md-2">Luas Bangunan</label>
				<div class="col-md-4">
					<input class="form-control" type="text" name="lb" required="" value="<?= $t['luas_bangunan']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Harga Transaksi</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ht" required="" value="<?= $t['harga_transaksi']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nomor OP</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="nop" required="" value="<?= $t['nop']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">Nomor JOP</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="njop" required="" value="<?= $t['njop']?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2">SSP</label>
				<div class="col-md-6">
					<input class="form-control" type="text" name="ssp" required="" value="<?= $t['ssp']?>"/>
				</div>
			</div>
			<div class="form-actions text-center" style="padding-bottom:5px;">
				<input type="submit" name="Input" class="btn btn-primary" value="Simpan">
				<input type="reset" class="btn btn-danger" value="Reset">
			</div>
		</form>
	</div>
</div>