<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Jenis Akta</th>
				<th>Nama Jenis Akta</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($tbl as $t){
			?>
			<tr>
				<td align="right"><?= $no?>.</td>
				<td><?= $t->id_jenis_akta?></td>
				<td><?= $t->nama_jenis?></td>
				<td>
					<a href="<?= base_url('SI/e_jenis_akta/'.$t->id_jenis_akta)?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
				</td>
			</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>