<?php
if(isset($_POST['simpan'])){

	include ('../koneksi.php');

	$nama_dusun		= $_POST['nama_dusun'];
	$kadus			= $_POST['kadus'];


	$query = "INSERT INTO `dusun` (`id_dusun`,`nama_dusun`,`kadus`) VALUES (NULL,'$nama_dusun','$kadus');";
	
	$hasil = mysqli_query($con, $query);
	if ($hasil == true) {
      echo "<script>window.alert('Data Berhasil Di Tambah'); window.location.href='index.php'</script>";
    } else {
      echo "<script>window.alert('Data Gagal Di Tambah'); window.location.href='tambah.php'</script>";
    }
}else{	
	echo '<script>window.history.back()</script>';
}
?>