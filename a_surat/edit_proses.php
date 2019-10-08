<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id_dusun 		= $_POST['id_dusun'];
	$nama_dusun		= $_POST['nama_dusun'];
	$kadus			= $_POST['kadus'];
	
	$update = mysqli_query($con,"update dusun SET id_dusun='$id_dusun', nama_dusun='$nama_dusun', kadus='$kadus' WHERE id_dusun='$id_dusun'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='edit.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>