<?php
if(isset($_POST['save'])){
	
	include('../koneksi.php');

	$id 				= $_POST['id'];
	$nama				= $_POST['nama'];
	$nik				= $_POST['nik'];
	$jenis_kelamin		= $_POST['jenis_kelamin'];
	$kk					= $_POST['kk'];
	$tempat				= $_POST['tempat'];
	$tanggal_lahir		= $_POST['tanggal_lahir'];
	$alamat				= $_POST['alamat'];
	$rt_rw				= $_POST['rt_rw'];
	$dusun				= $_POST['dusun'];
	$desa				= $_POST['desa'];
	$kecamatan			= $_POST['kecamatan'];
	$agama				= $_POST['agama'];
	$pendidikan			= $_POST['pendidikan'];
	$kewarganegaraan	= $_POST['kewarganegaraan'];
	$status_perkawinan	= $_POST['status_perkawinan'];
	$gol_darah			= $_POST['gol_darah'];
	$status_sosial		= $_POST['status_sosial'];
	$kategori_sosial	= $_POST['kategori_sosial'];
	$pekerjaan			= $_POST['pekerjaan'];
	$bapak				= $_POST['bapak'];
	$ibu				= $_POST['ibu'];

	
	$update = mysqli_query($con,"update data_penduduk SET id='$id',nama='$nama',nik='$nik',jenis_kelamin='$jenis_kelamin',kk='$kk',tempat='$tempat',tanggal_lahir='$tanggal_lahir',alamat='$alamat',rt_rw='$rt_rw',dusun='$dusun',desa='$desa',kecamatan='$kecamatan',agama='$agama',pendidikan='$pendidikan',kewarganegaraan='$kewarganegaraan',status_perkawinan='$status_perkawinan',gol_darah='$gol_darah',status_sosial='$status_sosial',kategori_sosial='$kategori_sosial',pekerjaan='$pekerjaan',bapak='$bapak',ibu='$ibu' WHERE id='$id'");

	if($update){
		echo "<script>window.alert('Data Berhasil Di Update'); window.location.href='index.php'</script>";
	}else{
		echo "<script>window.alert('Data Gagal Di Update'); window.location.href='edit.php'</script>";
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>