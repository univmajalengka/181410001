<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No</th>
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
				$no = 1;
				foreach($tbl as $t){
			?>
			<tr>
				<td align="right"><?= $no?>.</td>
				<td><?= $t->no_ktp?></td>
				<td><?= $t->nama_klien?></td>
				<td><?= $t->tempat_lahir?></td>
				<td><?= tanggal($t->tanggal_lahir)?></td>
				<td><?= $t->alamat_klien?></td>
				<td><?= $t->pekerjaan?></td>
				<td><?= $t->jenis_akta?></td>
				<td>
					<a href="<?= base_url('SI/e_klien/'.$t->no_ktp)?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="<?= base_url('SI/del/klien/'.$t->no_ktp)?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>