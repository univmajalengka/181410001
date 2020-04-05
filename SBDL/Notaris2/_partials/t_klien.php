<div class="block-header">
	<h2><i class="icon icon-user"></i> Data Klien</h2>
</div>
<div class="card">
	<div class="header">
		<a href="?pg=i_klien" class="btn btn-primary"><i class="icon icon-plus"></i> Klien</a>
	</div>
	<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No.KTP</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Pekerjaan</th>
				<th>Jenis Akta</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($koneksi,"select * from v_klien");
				while($t = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $t['no_ktp']?></td>
				<td><?= $t['nama_klien']?></td>
				<td><?= $t['tempat_lahir']?></td>
				<td><?= tanggal($t['tanggal_lahir'])?></td>
				<td><?= $t['alamat_klien']?></td>
				<td><?= $t['pekerjaan']?></td>
				<td><?= $t['jenis_akta']?></td>
				<td>
					<a href="?pg=e_klien&pk=<?= $t['no_ktp']?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="?pg=del&jn=klien&pk=<?= $t['no_ktp']?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
</div>