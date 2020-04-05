<div class="block-header">
	<h2><i class="icon icon-user"></i> Data Admin</h2>
</div>
<div class="card">
	<div class="header">
		<a href="?pg=i_admin" class="btn btn-primary"><i class="icon icon-plus"></i> Admin</a>
	</div>
	<div class="body">
		<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
			<thead>
				<tr>
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
					$query = mysqli_query($koneksi,"select * from admin");
					while($t = mysqli_fetch_array($query)){
				?>
					<tr>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>><?= $t['username']?></td>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>><?= $t['password']?></td>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>><?= $t['nama']?></td>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>><?= $t['alamat']?></td>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>><?= $t['telepon']?></td>
					<td <?php if($t['username']==$u['username']){echo "class='bg-danger'";}?>>
						<a href="?pg=e_admin&pk=<?= $t['username']?>" class="btn btn-info"><i class="icon icon-pencil"></i></a>
						<?php if($t['username']!=$u['username']){ ?>
							<a href="?pg=del&jn=admin&pk=<?= $t['username']?>" class="btn btn-danger"><i class="icon icon-trash"></i></a>
						<?php } ?>
					</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>