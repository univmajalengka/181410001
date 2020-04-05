<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		
		<title>Sign In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="TUGAS SISTEM BASIS DATA LANJUT">
		<meta name="author" content="Andi Alfian">
		
		<link rel="icon" href="assets/img/user.png" type="image/x-icon">
		<link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" >
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/font-awesome.css" rel="stylesheet" >
	</head>
	<body class="login-page" background="assets/img/user-img-background.jpg">	
		<div class="login-box">
			<div class="logo text-center">
				<img src="assets/img/MT.png" width="100px" height="100px">
			</div>
			<div class="card">
				<div class="header">
					<?php
						if(isset($_POST["login"])){
							$user = $_POST["username"];
							$pass = $_POST["password"];
							
								include "koneksi.php";
								$qry = mysqli_query($koneksi,"select * from admin where password='".md5($pass)."' AND username='".$user."' LIMIT 1");
								$data = mysqli_fetch_array($qry);
								
								if(($user=$data["username"]) && ($pass=$data["password"])){
									$_SESSION["user"] = $data["username"];
									$_SESSION["pass"] = $data["password"];
									header("location:index.php");
								}else{
									echo "<center><div class='alert alert-danger alert-dismissable'>
										 <b>".$data['username']." dan ".$data['password']." DAN ".$user." dan ".md5($pass)."!!</b>
										  </div><center>";
								}
						}else{
							echo "<h2 align='center'>SIGN IN</h2>";
						}
					?> 
				</div>
				<div class="body">
					<form id="sign_in" action="" method="POST">
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
								<input class="btn btn-block bg-indigo" type="submit" name="login" value="SIGN IN">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.js"></script>
		<script src="assets/js/admin.js"></script>
	</body>
</html>