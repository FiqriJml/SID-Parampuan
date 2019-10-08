<?php
include('../koneksi.php');
// ambil data file
$filename           = $_FILES["logo"]["name"];
$file_basename      = substr($filename, 0, strripos($filename, '.'));
$file_ext           = substr($filename, strripos($filename, '.'));
$filesize           = $_FILES["logo"]["size"];
$allowed_file_types = array('.jpg','.png','.jpeg','.gif','.JPG','.JPEG  ');

if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000000))
{
    // Ubah nama file
    $newfilename = md5($file_basename) . $file_ext;
    if (file_exists("../img/logo/" . $newfilename))
    {
        // Jika file sudah ada
        echo "<script>window.alert('File Sudah Ada!'); window.location.href='tambah.php'</script>";
    }
    else
    {
        move_uploaded_file($_FILES["logo"]["tmp_name"], "../img/logo/" . $newfilename);

    // ambil data dari form
    $logo               = $newfilename;
    $nama_desa          = $_POST['nama_desa'];
    $alamat_desa        = $_POST['alamat_desa'];
    $kode_pos           = $_POST['kode_pos'];
    $kades              = $_POST['kades'];
    $jabatan_kades      = $_POST['jabatan_kades'];
    $sekdes             = $_POST['sekdes'];
    $jabatan_sekdes     = $_POST['jabatan_sekdes'];
    $kasi_pemerintahan  = $_POST['kasi_pemerintahan'];
    $kasi_kesejahteraan = $_POST['kasi_kesejahteraan'];
    $kasi_pelayanan     = $_POST['kasi_pelayanan'];
    $kaur_tu            = $_POST['kaur_tu'];
    $kaur_keuangan      = $_POST['kaur_keuangan'];
    $kaur_perencanaan   = $_POST['kaur_perencanaan'];

    // query
    $query = "INSERT INTO `profil_desa` (`id_profil`,`nama_desa`,`alamat_desa`,`kode_pos`,`logo`,`kades`,`jabatan_kades`,`sekdes`,`jabatan_sekdes`,`kasi_pemerintahan`,`kasi_kesejahteraan`,`kasi_pelayanan`,`kaur_tu`,`kaur_keuangan`,`kaur_perencanaan`) VALUES (NULL,'$nama_desa','$alamat_desa','$kode_pos','$logo','$kades','$jabatan_kades','$sekdes','$jabatan_sekdes','$kasi_pemerintahan','$kasi_kesejahteraan','$kasi_pelayanan','$kaur_tu','$kaur_keuangan','$kaur_perencanaan');";

    $hasil = mysqli_query($con, $query);

    // cek keberhasilan pendambahan data
    if ($hasil == true) {
      echo "<script>window.alert('Data Berhasil Di Input'); window.location.href='index.php'</script>";
    } else {
      echo "<script>window.alert('Data Gagal Di Input'); window.location.href='tambah.php'</script>";
    }

    }
}
elseif (empty($file_basename))
{
    // file belum dipilih
    echo "<script>window.alert('Pilih File Untuk Diunggah'); window.location.href='tambah.php'</script>";
}
elseif ($filesize > 2000000000)
{
    // ukuran file terlalu besar
    echo "<script>window.alert('File Yang Diunggah Terlalu Besar!'); window.location.href='tambah.php'</script>";
}
else
{
    // format file bukan gambar
    echo "<script>window.alert('Format File Salah'); window.location.href='tambah.php'</script>";
    unlink($_FILES["logo"]["tmp_name"]);
}
?>