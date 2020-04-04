<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Project Sistem Informasi Distrik Coding">
		<meta name="author" content="Andi Alfian">
		
		<link rel="icon" href="<?= base_url('assets/img/user.png')?>" type="image/x-icon">
		<link href="<?= base_url('assets/node-waves/bootstrap.css')?>" rel="stylesheet" >
		<link href="<?= base_url('assets/node-waves/waves.css')?>" rel="stylesheet" />
		<link href="<?= base_url('assets/node-waves/style.css')?>" rel="stylesheet">
		<link href="<?= base_url('assets/css/font-awesome.css')?>" rel="stylesheet" >
	</head>
	<body class="login-page" background="<?= base_url('assets/img/load.jpg')?>">	
		<div class="login-box">
			<div class="logo text-center">
				<h4 class="text-center">SIGN IN</h4>
			</div>
			<div class="card">
				<div class="body">
					<?php echo $this->session->flashdata('msg');?>
					<form id="sign_in" action="<?= base_url().'login/auth'?>" method="post">
						<div class="msg">Sign in to start your session</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="icon icon-user"></i>
							</span>
							<div class="form-line">
								<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
							</div>
						</div>
						<div class="input-group">
							<span class="input-group-addon">
								<i class="icon icon-lock"></i>
							</span>
							<div class="form-line">
								<input type="password" class="form-control" name="password" placeholder="Password" required>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 p-t-5">
								<input type="checkbox" name="rememberme" id="rememberme" 
									class="filled-in chk-col-indigo">
								<label for="rememberme">Remember Me</label>
							</div>
							<div class="col-xs-4">
								<button class="btn btn-block bg-indigo waves-effect" type="submit" name="login" >SIGN IN</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="<?= base_url('assets/node-waves/jquery.min.js');?>"></script>
		<script src="<?= base_url('assets/node-waves/bootstrap.js');?>"></script>
		<script src="<?= base_url('assets/node-waves/waves.js');?>"></script>
		<script src="<?= base_url('assets/node-waves/admin.js');?>"></script>
		<script src="<?= base_url('assets/node-waves/sign-in.js');?>"></script>

	</body>
</html>