<html>
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>HOME</title>
		<meta name="description" content="Tugas Harian Sistem Database Lanjut">
		<meta name="author" content="Andi Alfian">
		<link href="<?= base_url('assets/img/user.png')?>" rel="icon" type="image/x-icon">
		<link href="<?= base_url('assets/css/style.css')?>" rel="stylesheet" />
		<link href="<?= base_url('assets/css/font-awesome.css')?>" rel="stylesheet" />
		<link href="<?= base_url('assets/dt_table/responsive.css')?>" rel="stylesheet" />
	</head>
	<body background="<?= base_url()?>assets/img/load.jpg">
		<div class="luar">
			<div class="atas">
				<div class="atas-kiri">
					<div style="position:relative;width:100%;height:50px;">
						<div style="position:absolute;left:0px;padding:0px;width:18%;height:10%;">
							<a href="#">
							<img src="<?= base_url()?>assets/img/user.png" width="100%" height="60px" />
							</a>
						</div>
						<div style="position:absolute;left:18%;margin-top:-2%;width:80%;">
							<img src="<?= base_url()?>assets/img/profil.png" width="100%" height="70px" />
						</div>
						<div style="position:absolute;left:18%; margin-top:-2%;width:80%;color:#fff;">
							<h4 style="padding-left:2%;"><?= $this->session->userdata('set_id') ?></h4>
							<p style="padding-left:12%;"><?= $this->session->userdata('akses') ?></p>
						</div>
					</div>
				</div>
				<div class="atas-mid">
					<h1><?= $title?></h1>
				</div>
				<div class="atas-kanan">
					<div style="position:absolute;top:0px;right:0px;width:100%;">
						<table width="100%"><tr>
							<td width="20%">
								<img src="<?= base_url()?>assets/img/bp.png" width="100%" height="auto" />
							</td>
							<td width="20%">
								<img src="<?= base_url()?>assets/img/tiket.png" width="100%" height="auto" />
							</td>
							<td width="20%">
								<img src="<?= base_url()?>assets/img/diamond.png" width="100%" height="auto" />
							</td>
						</tr></table>
					</div>
					<div style="position:absolute;top:0px;width:100%;">
						<table class="dt" width="100%"><tr>
							<td width="20%" style="padding-left:10%">
								<h2><?php echo date("d")?></h2>
							</td>
							<td width="20%" style="padding-left:10%">
								<h2><?php echo date("m")?></h3>
							</td>
							<td width="20%" style="padding-left:10%">
								<h2><?php echo date("Y")?></h2>
							</td>
						</tr></table>
					</div>
				</div>
			</div>
			<div class="kiri">
				<img src="<?= base_url()?>assets/img/right.png" width="100%" height="100%">
			</div>
			<div class="content-kiri">
				<div class="kiri-atas">
					<h3 class="text-center">MAIN MENU</h3>
				</div>
				<div class="kiri-mid">
					<ul>
						<li class="active">
							<a href="<?= base_url()?>SI/index"><i class="icon icon-home"></i> Home</a>
						</li>
						<li>
							<a href="<?= base_url()?>SI/i_admin"><i class="icon icon-plus"></i> Admin</a>
						</li>
						<li>
							<a href="<?= base_url()?>SI/i_klien"><i class="icon icon-plus"></i> Klien</a>
						</li>
						<li>
							<a href="<?= base_url()?>SI/i_notaris"><i class="icon icon-plus"></i> Akta Notaris</a>
						</li>
						<li>
							<a href="<?= base_url()?>SI/i_ppat"><i class="icon icon-plus"></i> Akta PPAT</a>
						</li>
						<li>
							<a href="<?= base_url()?>SI/i_jenis_akta"><i class="icon icon-plus"></i> Jenis Akta</a>
						</li>
						<li>
							<a href="<?= base_url()?>Login/logout"><i class="icon icon-signout"></i> Logout</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="isi">
				<div class="card">
					<?php
						include "tanggal.php";
					?>