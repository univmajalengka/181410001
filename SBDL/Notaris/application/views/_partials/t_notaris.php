<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>No.Akta Notaris</th>
				<th>Tanggal Dibuat</th>
				<th>Jenis Akta</th>
				<th>Nama Pihak</th>
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
				<td><?= $t->no_akta_n?></td>
				<td><?= tanggal($t->tgl)?></td>
				<td><?= $t->nama_jenis?></td>
				<td><?= $t->nama_pihak?></td>
				<td>
					<a href="<?= base_url('SI/e_notaris/'.$t->no_akta_n)?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="<?= base_url('SI/del/notaris/'.$t->no_akta_n)?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>