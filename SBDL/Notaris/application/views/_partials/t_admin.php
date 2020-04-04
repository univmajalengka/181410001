<div class="body">
	<table id="example" class="table table-striped table-bordered dt-responsive nowrap"
		style="width:100%">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				$id = $this->session->userdata('set_id');
				foreach($tbl as $t){
			?>
				<tr>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?> align="right"><?= $no?>.</td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>><?= $t->username?></td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>><?= $t->password?></td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>><?= $t->nama?></td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>><?= $t->alamat?></td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>><?= $t->telepon?></td>
				<td <?php if($id==$t->username){echo'class="bg-danger"';}?>>
					<a href="<?= base_url('SI/e_admin/'.$t->username)?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
					<?php if($id!=$t->username){ ?><a href="<?= base_url('SI/del/admin/'.$t->username)?>" class="btn btn-danger"><i class="icon icon-trash"></i></a><?php } ?>
				</td>
			</tr>
			<?php
					$no++;
				}
			?>
		</tbody>
	</table>
</div>