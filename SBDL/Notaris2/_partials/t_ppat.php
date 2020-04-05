<div class="block-header">
	<h2><i class="icon icon-table"></i> Data Akta PPAT</h2>
</div>
<div class="card">
	<div class="header">
		<a href="?pg=i_ppat" class="btn btn-primary"><i class="icon icon-plus"></i> Akta PPAT</a>
	</div>
<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>Nomor Akta PPAT</th>
				<th>Tanggal Dibuat</th>
				<th>Jenis Akta</th>
				<th>Pihak 1</th>
				<th>Pihak 2</th>
				<th>Nomor Hak</th>
				<th>Letak</th>
				<th>Luas Tanah</th>
				<th>Luas Bangunan </th>
				<th>Harga Transaksi </th>
				<th>Nomor Objek Pajak (NOP) </th>
				<th>Nilai Jual Objek Pajak (NJOP) </th>
				<th>Surat Setoran Pajak (SSP) </th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				$query = mysqli_query($koneksi,"select * from v_ppat");
				while($t = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $t['no_akta_p']?></td>
				<td><?= tanggal($t['tgl'])?></td>
				<td><?= $t['nama_jenis']?></td>
				<td><?= $t['pihak_1']?></td>
				<td><?= $t['pihak_2']?></td>
				<td><?= $t['no_hak']?></td>
				<td><?= $t['letak']?></td>
				<td><?= $t['luas_tanah']?></td>
				<td><?= $t['luas_bangunan']?></td>
				<td><?= number_format($t['harga_transaksi'])?></td>
				<td><?= $t['nop']?></td>
				<td><?= $t['njop']?></td>
				<td><?= $t['ssp']?></td>
				<td>
					<a href="?pg=e_ppat&pk=<?= $t['no_akta_p']?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="?pg=del&jn=ppat&pk=<?= $t['no_akta_p']?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
</div>