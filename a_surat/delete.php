<?php

if(isset($_GET['id_dusun'])){
	include('../koneksi.php');
	$id_dusun = $_GET['id_dusun'];
	$del = mysqli_query($con,"delete from dusun where id_dusun='$id_dusun'");

		if($del){
			
			echo "<script>window.alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
			
		}else{
			
			echo "<script>window.alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
		}
	}

?>