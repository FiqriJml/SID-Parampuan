<?php
if(isset($_POST['simpan'])){

    include ('../koneksi.php');

    $nama               = $_POST['nama'];
    $nik                = $_POST['nik'];
    $jenis_kelamin      = $_POST['jenis_kelamin'];
    $kk                 = $_POST['kk'];
    $tempat             = $_POST['tempat'];
    $tanggal_lahir      = $_POST['tanggal_lahir'];
    $alamat             = $_POST['alamat'];
    $rt_rw              = $_POST['rt_rw'];
    $dusun              = $_POST['dusun'];
    $desa               = $_POST['desa'];
    $kecamatan          = $_POST['kecamatan'];
    $agama              = $_POST['agama'];
    $pendidikan         = $_POST['pendidikan'];
    $kewarganegaraan    = $_POST['kewarganegaraan'];
    $status_perkawinan  = $_POST['status_perkawinan'];
    $gol_darah          = $_POST['gol_darah'];
    $status_sosial      = $_POST['status_sosial'];
    $kategori_sosial    = $_POST['kategori_sosial'];
    $pekerjaan          = $_POST['pekerjaan'];
    $bapak              = $_POST['bapak'];
    $ibu                = $_POST['ibu'];


    $query = "INSERT INTO `data_penduduk` (`id`,`nama`,`nik`,`jenis_kelamin`,`kk`,`tempat`,`tanggal_lahir`,`alamat`,`rt_rw`,`dusun`,`desa`,`kecamatan`,`agama`,`pendidikan`,`kewarganegaraan`,`status_perkawinan`,`gol_darah`,`status_sosial`,`kategori_sosial`,`pekerjaan`,`bapak`,`ibu`) VALUES (NULL,'$nama','$nik','$jenis_kelamin','$kk','$tempat','$tanggal_lahir','$alamat','$rt_rw','$dusun','$desa','$kecamatan','$agama','$pendidikan','$kewarganegaraan','$status_perkawinan','$gol_darah','$status_sosial','$kategori_sosial','$pekerjaan','$bapak','$ibu');";

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