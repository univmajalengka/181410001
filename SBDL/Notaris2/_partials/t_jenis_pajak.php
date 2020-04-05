<div class="block-header">
	<h2><i class="icon icon-dollars"></i> Data Jenis Pajak</h2>
</div>
<div class="card">
	<div class="header">
		<a href="?pg=i_jenis_pajak" class="btn btn-primary"><i class="icon icon-plus"></i> Jenis Pajak</a>
	</div>
	<div class="body">
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
			style="width:100%">
			<thead>
				<tr>
					<th>ID Jenis Pajak</th>
					<th>Jenis Pajak</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = mysqli_query($koneksi,"select * from jenis_pajak");
					while($t = mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?= $t['id_jenis_pajak']?></td>
					<td><?= $t['nama_jenis_pajak']?></td>
					<td><a href="?pg=del&jn=jenis_pajak&pk=<?= $t['id_jenis_pajak']?>" class="btn btn-danger"><i class="icon icon-trash"></i></a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>