<div class="block-header">
	<h2><i class="icon icon-table"></i> Data Akta Notaris</h2>
</div>
<div class="card">
	<div class="header">
		<a href="index.php?pg=i_notaris" class="btn btn-primary"><i class="icon icon-plus"></i> Akta Notaris</a>
	</div>
<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No.Akta Notaris</th>
				<th>Tanggal Dibuat</th>
				<th>Jenis Akta</th>
				<th>Nama Pihak</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($koneksi,"select * from v_notaris");
				while($t = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $t['no_akta_n']?></td>
				<td><?= tanggal($t['tgl'])?></td>
				<td><?= $t['nama_jenis']?></td>
				<td><?= $t['nama_pihak']?></td>
				<td>
					<a href="?pg=e_notaris&pk=<?= $t['no_akta_n']?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="?pg=del&jn=notaris&pk=<?= $t['no_akta_n']?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
</div>