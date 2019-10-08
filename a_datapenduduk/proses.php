<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader.php";
?>

<?php
// upload file xls
$target = basename($_FILES['file']['name']) ;
move_uploaded_file($_FILES['file']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama    			= $data->val($i, 1);
	$nik    			= $data->val($i, 2);
	$jenis_kelamin    	= $data->val($i, 3);
	$kk   				= $data->val($i, 4);
	$tempat   			= $data->val($i, 5);
	$tanggal_lahir  	= $data->val($i, 6);
	$alamat  			= $data->val($i, 7);
	$rt_rw  			= $data->val($i, 8);
	$dusun  			= $data->val($i, 9);
	$desa  				= $data->val($i, 10);
	$kecamatan  		= $data->val($i, 11);
	$agama  			= $data->val($i, 12);
	$pendidikan  		= $data->val($i, 13);
	$kewarganegaraan  	= $data->val($i, 14);
	$status_perkawinan  = $data->val($i, 15);
	$gol_darah  		= $data->val($i, 16);
	$status_sosial  	= $data->val($i, 17);
	$kategori_sosial  	= $data->val($i, 18);
	$pekerjaan  		= $data->val($i, 19);
	$bapak 				= $data->val($i, 20);
	$ibu  				= $data->val($i, 21);

	if($nama != "" && $nik != "" && $jenis_kelamin != "" && $kk != "" && $tempat != "" && $tanggal_lahir != "" && $alamat != "" && $rt_rw != "" && $dusun != "" && $desa != "" && $kecamatan != "" && $agama != "" && $pendidikan != "" && $kewarganegaraan != "" && $status_perkawinan != "" && $gol_darah != "" && $status_sosial != "" && $kategori_sosial != ""&& $pekerjaan != "" && $bapak != "" && $ibu != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($con,"INSERT into data_penduduk values('','$nama','$nik','$jenis_kelamin','$kk','$tempat','$tanggal_lahir','$alamat','$rt_rw','$dusun','$desa','$kecamatan','$agama','$pendidikan','$kewarganegaraan','$status_perkawinan','$gol_darah','$status_sosial','$kategori_sosial','$pekerjaan','$bapak','$ibu')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>