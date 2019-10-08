<?php

if(isset($_GET['id_profil'])){
	include('../koneksi.php');
	$id_profil = $_GET['id_profil'];
	$del = mysqli_query($con,"delete from profil_desa where id_profil='$id_profil'");

		if($del){
			
			echo "<script>window.alert('Data Berhasil Dihapus'); window.location.href='index.php'</script>";
			
		}else{
			
			echo "<script>window.alert('Data Gagal Dihapus'); window.location.href='index.php'</script>";
		}
	}

?>