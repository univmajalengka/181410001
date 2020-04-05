<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:login.php');
	}else{
		$username = $_SESSION['user'];	
	}
	include "koneksi.php";
	$q1 = mysqli_query($koneksi,"select * from admin where username='$username'"); 
	$u = mysqli_fetch_array($q1);
?>
<!DOCTYPE html>
<html>
	<head>		
		<meta charset="utf-8" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Home</title>
		<meta name="description" content="Tugas Sistem Basis Data Lanjut">
		<meta name="author" content="Andi Alfian">
		
		<link rel="SHORTCUT ICON" href="assets/img/MT.png">
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/node-waves/waves.min.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
		<link href="assets/css/all-themes.min.css" rel="stylesheet" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/jquery-datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<link href="assets/jquery-datatable/responsive.bootstrap4.min.css" rel="stylesheet" />
	</head>
	<body class="theme-purple">
		<div class="overlay"></div>
		<nav class="navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="javascript:void(0);" class="bars"></a>
					<a class="navbar-brand" href="index.php"><font face="candara">Sistem Informasi Notaris PPAT</font></a>
				</div>
		
			</div>
		</nav>
		<section>
			<aside id="leftsidebar" class="sidebar">
				<div class="user-info">
					<div class="image">
						<img src="assets/img/user.png" width="48" height="48" alt="User" />
					</div>
					<div class="info-container">	
						<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="#"><?= $_SESSION['user']?></a>
						</div>
						<div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                            </ul>
						</div>
					</div>
				</div>
				<div class="menu">
					<ul class="list">
						<li class="header">MAIN MENU</li>
						<li class="active">
							<a href="index.php">
								<i class="material-icons">home</i>
								<span>Home</span>
							</a>
						</li>
						<li><a href="?pg=t_admin"><i class="material-icons">account_circle</i><span>Admin</span></a></li>
						<li><a href="?pg=t_klien"><i class="material-icons">face</i><span>Data Klien</span></a></li>
						<li><a href="?pg=t_notaris"><i class="material-icons">book</i><span>Akta Notaris</span></a></li>
						<li><a href="?pg=t_ppat"><i class="material-icons">book</i><span>Akta PPAT</span></a></li>
						<li><a href="?pg=t_jenis_pajak"><i class="material-icons">monetization_on</i><span>Jenis Pajak</span></a></li>
						<li><a href="?pg=t_jenis_akta"><i class="material-icons">book</i><span>Jenis Akta</span></a></li>
					</ul>
				</div>
				<div class="legal">
					<div class="copyright">
						&copy; 2020 <a href="javascript:void(0);">Sistem Informasi Notaris PPAT</a>.
					</div>
					<div class="version">
						<b>Current Version: </b> 2.4.20.5
					</div>
				</div>
			</aside>
		</section>
		
		<section class="content">
			<div class="container-fluid">
				<div ng-view>
					<?php
						include "tanggal.php";
						if(isset($_GET["pg"])){
							include_once("_partials/".$_GET["pg"].".php");
						}else{
					?>
					
					<div class="card">
						<div class="header">
							<h2>DASHBOARD</h2>
						</div>
						<div class="body">
							<p>
								Nama Sistem : Sistem Informasi Notaris PPAT<br>
								Mata Kuliah : Sistem Basis Data Lanjut<br>
								Nama : Andi Alfian<br>
								NPM : 18.14.1.0001<br>
								Kelas : 4A Informatika<br>
							</p>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</section>
		
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/jquery-datatable/jquery.dataTables.min.js"></script>
		<script src="assets/jquery-datatable/dataTables.bootstrap4.min.js"></script>
		<script src="assets/jquery-datatable/dataTables.responsive.min.js"></script>
		<script src="assets/jquery-datatable/responsive.bootstrap4.min.js"></script>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
		<script src="assets/node-waves/waves.min.js"></script>
		<script src="assets/js/jquery-slimscroll.js"></script>
		<script src="assets/js/admin.js"></script>
	</body>
</html>