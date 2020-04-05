<div class="block-header">
	<h2><i class="icon icon-table"></i> Data Jenis Akta</h2>
</div>
<div class="card">
	<div class="header">
		<a href="index.php?pg=i_jenis_akta" class="btn btn-primary"><i class="icon icon-plus"></i> Jenis Akta</a>
	</div>
	<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>ID Jenis Akta</th>
				<th>Nama Jenis Akta</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($koneksi,"select * from jenis_akta");
				while($t = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?= $t['id_jenis_akta']?></td>
				<td><?= $t['nama_jenis']?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
</div>