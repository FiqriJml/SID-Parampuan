<?php

if(isset($_GET['id'])){
	include('../koneksi.php');
	$id = $_GET['id'];
	$del = mysqli_query($con,"delete from data_penduduk where id='$id'");

		if($del){
			
			echo "<script>window.alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
			
		}else{
			
			echo "<script>window.alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
		}
	}

?>