				</div>
			</div>
			<div class="bawah">
				<table width="100%">
					<tr>
						<td width="20%">
							<a href="<?= base_url()?>SI/admin">
								<img src="<?= base_url()?>assets/img/menu1.png" width="100%">
							</a>
						</td>
						<td width="20%">
							<a href="<?= base_url()?>SI/klien">
								<img src="<?= base_url()?>assets/img/menu2.png" width="100%">
							</a>
						</td>
						<td width="20%">
							<a href="<?= base_url()?>SI/notaris">
								<img src="<?= base_url()?>assets/img/menu3.png" width="100%">
							</a>
						</td>
						<td width="20%">
							<a href="<?= base_url()?>SI/ppat">
								<img src="<?= base_url()?>assets/img/menu4.png" width="100%">
							</a>
						</td>
						<td width="20%">
							<a href="<?= base_url()?>SI/jenis_akta">
								<img src="<?= base_url()?>assets/img/menu5.png" width="100%">
							</a>
						</td>
					</tr>
				</table>
			</div>	
		</div>
		<script src="<?= base_url()?>assets/dt_table/jquery-3.3.1.js"></script>
		<script src="<?= base_url()?>assets/dt_table/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>assets/dt_table/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/dt_table/dataTables.responsive.min.js"></script>
		<script src="<?= base_url()?>assets/dt_table/responsive.bootstrap4.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
	</body>
</html>