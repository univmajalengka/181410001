<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>No.Akta PPAT</th>
				<th>Tanggal Dibuat</th>
				<th>Jenis Akta</th>
				<th>Pihak 1</th>
				<th>Pihak 2</th>
				<th>No.Hak</th>
				<th>Letak</th>
				<th>Luas Tanah</th>
				<th>Luas Bangunan</th>
				<th>Harga Transaksi</th>
				<th>NOP</th>
				<th>NJOP</th>
				<th>SSP</th>
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
				<td><?= $t->no_akta_p?></td>
				<td><?= tanggal($t->tgl)?></td>
				<td><?= $t->nama_jenis?></td>
				<td><?= $t->pihak_1?></td>
				<td><?= $t->pihak_2?></td>
				<td><?= $t->no_hak?></td>
				<td><?= $t->letak?></td>
				<td><?= $t->luas_tanah?></td>
				<td><?= $t->luas_bangunan?></td>
				<td><?= number_format($t->harga_transaksi)?></td>
				<td><?= $t->nop?></td>
				<td><?= $t->njop?></td>
				<td><?= $t->ssp?></td>
				<td>
					<a href="<?= base_url('SI/e_ppat/'.$t->no_akta_p)?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<a href="<?= base_url('SI/del/ppat/'.$t->no_akta_p)?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
				</td>
			</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>