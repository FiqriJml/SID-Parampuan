<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';
require_once '../Classes/PHPExcel.php'; // Memanggil library PhpExcel
if (isset($_POST["upload"]))
{
  $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

		// upload file xls
		$targetPath = basename($_FILES['file']['name']); 
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);

         // load file excel
		$excel = PHPExcel_IOFactory::load($targetPath);
  }
  else
  { 
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
  }
}
// Menjalankan atau mengaktifkan lembar kerja excel
$excel->setActiveSheetIndex(0);

//ambil data disini
$i = 8; //samakan dengan baris data pertama di file excel
// perulangan data per baris
$huruf_awal = 'B'; //kolom awal data
$hrf = $huruf_awal; //mulai dari kolom B (nama penduduk)
$n=0;
$berhasil = 0;

while ($excel->getActiveSheet()->getCell($huruf_awal.$i)->getValue() != "") { //selagi ada data
	$nama = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$nik = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$kk = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$tempat = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	// $tanggal_lahir = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$tanggal_lahir = $excel->getActiveSheet()->getCell($hrf++.$i)->getFormattedValue();
	$jenis_kelamin = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$alamat = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$rt = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$rw = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$dusun = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$desa = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$kecamatan = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$agama = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$pendidikan = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$kewarganegaraan = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$status_perkawinan = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$gol_darah = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$status_sosial = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$kategori_sosial = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();
	$pekerjaan = $excel->getActiveSheet()->getCell($hrf++.$i)->getValue();

	// ubah jadi string biar enak di ambil;
	$tanggal_lahir = strval($tanggal_lahir);
	if($nama != ""){
		$query = "INSERT INTO `data_penduduk`(`nama`, `nik`, `kk`, `tempat`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `agama`, `pendidikan`, `kewarganegaraan`, `status_perkawinan`, `gol_darah`, `status_sosial`, `kategori_sosial`, `pekerjaan`) VALUES ('$nama','$nik','$kk','$tempat','$tanggal_lahir','$jenis_kelamin','$alamat','$rt','$rw','$dusun','$desa','$kecamatan','$agama','$pendidikan','$kewarganegaraan','$status_perkawinan','$gol_darah','$status_sosial','$kategori_sosial','$pekerjaan')";

		// input data ke database (table data_pegawai)
		mysqli_query($con,$query);
		$berhasil++;
	}
	echo $tanggal_lahir;
	$i++;
	$hrf = $huruf_awal;
}
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>
