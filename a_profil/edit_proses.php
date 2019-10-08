<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id_profil 				= $_POST['id_profil'];
	$nama_desa				= $_POST['nama_desa'];
	$alamat_desa			= $_POST['alamat_desa'];
	$kode_pos				= $_POST['kode_pos'];
	$kades					= $_POST['kades'];
	$jabatan_kades			= $_POST['jabatan_kades'];
	$sekdes					= $_POST['sekdes'];
	$jabatan_sekdes			= $_POST['jabatan_sekdes'];
	$kasi_pemerintahan		= $_POST['kasi_pemerintahan'];
	$kasi_kesejahteraan		= $_POST['kasi_kesejahteraan'];
	$kasi_pelayanan			= $_POST['kasi_pelayanan'];
	$kaur_tu				= $_POST['kaur_tu'];
	$kaur_keuangan			= $_POST['kaur_keuangan'];
	$kaur_perencanaan		= $_POST['kaur_perencanaan'];

	
	$update = mysqli_query($con,"update profil_desa SET id_profil='$id_profil',nama_desa='$nama_desa',alamat_desa='$alamat_desa',kode_pos='$kode_pos',kades='$kades',jabatan_kades='$jabatan_kades',sekdes='$sekdes',jabatan_sekdes='$jabatan_sekdes',kasi_pemerintahan='$kasi_pemerintahan',kasi_kesejahteraan='$kasi_kesejahteraan',kasi_pelayanan='$kasi_pelayanan',kaur_tu='$kaur_tu',kaur_keuangan='$kaur_keuangan',kaur_perencanaan='$kaur_perencanaan' WHERE id_profil='$id_profil'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='edit.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>