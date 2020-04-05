<?php
	if($_GET){
		if($_GET['jn']){
			$table = $_GET['jn'];
			$pk = $_GET['pk'];
			if($table=='admin'){
				$data = "username='".$pk."'";
			}elseif($table=='klien'){
				$data = "no_ktp='".$pk."'";
			}elseif($table=='notaris'){
				$data = "no_akta_n='".$pk."'";
			}elseif($table=='ppat'){
				$data = "no_akta_p='".$pk."'";
			}elseif($table=='jenis_pajak'){
				$data = "id_jenis_pajak='".$pk."'";
			}
			$q2 = mysqli_query($koneksi,"delete from ".$table." where ".$data." ;");
			if($q2){
				echo "<h2 class='text-center bg-success'>DATA BERHASIL TERHAPUS</h2>";
				echo "<meta http-equiv='refresh' content='1;url=?pg=t_".$table."'>";
			}else{
				echo "<h2 class='text-center bg-red'>DATA GAGAL TERHAPUS</h2>";
			}
		}
	}
?>