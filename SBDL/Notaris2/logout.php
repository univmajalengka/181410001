<?php 
	session_start();
	unset($_SESSION['user']);
	session_destroy();
	echo "<script>window.alert('Anda Berhasil Keluar!!!')
        window.location=('login.php')</script>";
?>