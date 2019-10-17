<?php
    $root = "../../../";

    $arsip_surat = $root.'arsip_surat/';

$nik = $_GET['nik'];
$tgl = date('Y-m-d');
$jenis_surat = 'Surat Pengantar Permohonan KK';
// nama file nya
$file = $nik."_".$jenis_surat."_".$tgl.".pdf";


$no_agenda = $_GET['no_agenda'];
$yang_ttd = $_GET['yang_ttd'];
$jabatan_ttd = $_GET['jabatan_ttd'];

$usaha_tahun_mulai = $_GET['usaha_tahun_mulai'];
$usaha_nama = $_GET['usaha_nama'];
$usaha_lokasi = $_GET['usaha_lokasi'];

include($root.'koneksi.php');

// ambil data desa
$query = "SELECT * FROM profil_desa WHERE id_profil=1";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $logo = $data['logo'];
        $data_desa = $data;
    }
}

//ambil data pada database
$query = "SELECT * FROM data_penduduk WHERE nik='$nik'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $data_penduduk = mysqli_fetch_assoc($result);
}

//simpan SURAT ke tabel surat
session_start();
$id_penduduk = $data_penduduk['id'];
$id_user = $_SESSION['id_user'];
$keperluan = $_GET['keperluan'];


$query = "INSERT INTO `surat`(`tanggal`, `jenis_surat`, `id_penduduk`, `id_user`, `keperluan`, `file`) VALUES (
                    '$tgl', '$jenis_surat', '$id_penduduk', '$id_user', '$keperluan','$file')";
// $result = mysqli_query($con, $query);
// simpan Selesai

$nama = $data_penduduk['nama'];
$tempat = $data_penduduk['tempat'];
$tanggal_lahir = $data_penduduk['tanggal_lahir'];
$jenis_kelamin = $data_penduduk['jenis_kelamin'];
if($jenis_kelamin == 'P' || $jenis_kelamin == 'p'){
    $jenis_kelamin = 'Perempuan';
}else{
    $jenis_kelamin = 'Laki-Laki';
}
$kewarganegaraan = $data_penduduk['kewarganegaraan'];
if(strtolower($kewarganegaraan) == 'indo'){
    $kewarganegaraan = 'Indonesia';
}

$gol_darah = $data_penduduk['gol_darah'];
$agama = $data_penduduk['agama'];
$status_perkawinan = $data_penduduk['status_perkawinan'];
$pekerjaan = $data_penduduk['pekerjaan'];
$alamat = $data_penduduk['alamat'];


// menentukan tanggal sekarang Lokasi Waktu Indonesia
date_default_timezone_set('Asia/Singapore');
setlocale(LC_ALL, 'IND');
$hari_ini = strftime('%e %B %Y');


require_once $root.'vendor/autoload.php';
// $mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

//create html of the data
ob_start();
?>

<style type="text/css">
    
    .text-center{
        text-align: center;
    }    
    .surat{
        font-size: 12px; 
        padding-left: 5px;
        padding-right: 5px;
    }
    .form-surat{
        padding: 5px;
        border: 1px solid black;
        border-bottom: none;
        height: 360px;
    }
    .table, table {
      border-collapse: collapse;
      font-size: 9px;
    }
    table th.no_border{
        border: none !important;
    }
    .table td, .table th {
      border: 1px solid black;
      text-align: left;
      padding: 2px 5px;
    }
    .garis_bawah{
        border-bottom: 1px solid black;
    }
    td, th {
        vertical-align: top;
    }
    th.v-center{
        vertical-align: middle;
    }
    .kiri{
        float: left;
        /*background-color: #dfd;*/
        width: 50%;
        height: 300px;
    }
    .kanan{
        float: left;
        /*background-color: #cec;*/
        width: 48%;
        height: 300px;
        padding-left: 2%;
    }
</style>
<div class="surat">
    <div class="form-surat">
        <div class="text-center">
            <span class="garis_bawah"><b>PENGANTAR PERMOHONAN KARTU KELUARGA ( KK ) PENDUDUK WNI</b></span> <br>
            <div>Nomor: 470 / <?= $no_agenda; ?> /PEM-PRM/2019<br></div> <br>
        </div>
        <div class="kiri">
            <table class="table">
                <tr>
                    <th>1. Nama KK/Pemohon</th>
                    <th>:</th>
                    <th colspan="2"><?= $nama; ?></th>
                </tr>
                <tr>
                    <th height="30px">2. Alamat Pemohon</th>
                    <th>:</th>
                    <th colspan="2"><?= $alamat; ?></th>
                </tr>
                <tr>
                    <th class="no_border" colspan="2"></th>
                    <th>RT/RW : <?= $data_penduduk['rt']?>/<?= $data_penduduk['rw']?></th>
                    <th>Desa/Kel. : <?= $data_penduduk['desa']?></th> 
                </tr>
                <tr>
                    <th class="no_border" colspan="2"></th>
                    <th>Kode Pos : <?= $data_desa['kode_pos'] ?></th>
                    <th>Kecamatan :  LABUAPI</th> 
                </tr>
                <tr>
                    <th class="no_border" colspan="2"></th>
                    <th>Kabupaten : LOMBOK BARAT</th>
                    <th>Provinsi : NUSA TENGGARA BARAT</th> 
                </tr>
                <tr>
                    <th height="15px" class="no_border"></th>
                </tr>
                <tr>
                    <th>3. Alasan Pemohon karena </th>
                    <th class="no_border">:</th>
                </tr>
            </table> <br>
            <table class="table">
                <tr>
                    <th class="no_border"></th>
                    <th class="v-center" height="20px" align="center" colspan="2">KK BARU</th>
                    <th class="no_border" colspan="2"></th>
                    <th class="v-center" height="20px" align="center" colspan="2">KK PERUBAHAN</th>
                </tr>
                <tr>
                    <th height="15px" class="no_border"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border">1</th>
                    <th class="no_border">KK Baru karena membentuk rumah tangga baru/Pernikahan</th>
                    <th class="no_border"></th>
                    <th width="10px"></th>
                    <th class="no_border">5</th>
                    <th class="no_border">Perubahan KK karena Kelahiran Anak</th>
                    <th class="no_border"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border">2</th>
                    <th class="no_border">KK Baru karena kedatangan/pindahan</th>
                    <th class="no_border"></th>
                    <th width="10px"></th>
                    <th class="no_border">6</th>
                    <th class="no_border">Perubahan KK karena kedatangan/numpang KK</th>
                    <th class="no_border"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border">3</th>
                    <th class="no_border">KK Baru karena tidak pernah memiliki KK sama SEKALI</th>
                    <th class="no_border"></th>
                    <th width="10px"></th>
                    <th class="no_border">7</th>
                    <th class="no_border">Perubahan KK karena Kepindahan/Kematian</th>
                    <th class="no_border"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border">4</th>
                    <th class="no_border">Kk Hilang/ Rusak</th>
                    <th class="no_border"></th>
                    <th width="10px"></th>
                    <th class="no_border">8</th>
                    <th class="no_border">Perubahan KK karena perubahan data/kesalahan data</th>
                    <th class="no_border"></th>
                </tr>
            </table>
        </div>
        <div class="kanan">
            <table class="table">
                <tr>
                    <th colspan="4">4. Lampiran Permohonan/Persyaratan</th>
                    <th class="no_border"></th>
                    <th colspan="8">Untuk Alasan Pemohon Nomor :</th>
                </tr>
                <tr>
                    <th height="15px" class="no_border"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">1</th>
                    <th class="no_border">KK Lama/KK Orang Tua</th>
                    <th class="no_border"></th>
                    <th>1</th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th>5</th>
                    <th></th>
                    <th>7</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">2</th>
                    <th class="no_border">Fotocopy KTP/KTP Elektronik (bagi yang telah menerima</th>
                    <th class="no_border"></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">3</th>
                    <th class="no_border">Fotocopy Buku Nikah/Akte Perkawinan (bila ada)</th>
                    <th class="no_border"></th>
                    <th>1</th>
                    <th></th>
                    <th>3</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">4</th>
                    <th class="no_border">Surat Keterangan Pindah (SKP) dari daerah asal</th>
                    <th class="no_border"></th>
                    <th>1</th>
                    <th>2</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">5</th>
                    <th class="no_border">KK yang ditumpangi (karena kedatanagan)</th>
                    <th class="no_border"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>6</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">6</th>
                    <th class="no_border">KK yang rusak</th>
                    <th class="no_border"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>4</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">7</th>
                    <th class="no_border">Fotocopy Surat Keterangan Kematian</th>
                    <th class="no_border"></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>7</th>
                    <th></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">8</th>
                    <th class="no_border">Dokumen Pendukung (Ijazah,Akta,dll) sesuai perubahan</th>
                    <th class="no_border"></th>
                    <th class="v-center">1</th>
                    <th class="v-center"></th>
                    <th class="v-center">3</th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center">8</th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">9</th>
                    <th class="no_border">Surat Ket.Biodata Penduduk dari Desa/Kel. (bermaterai)</th>
                    <th class="no_border"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center">3</th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                    <th class="v-center"></th>
                </tr>
                <tr>
                    <th width="10px"></th>
                    <th class="no_border"></th>
                    <th class="no_border">10</th>
                    <th class="no_border">Bukti telah perekaman KTP-el (semua keluarga)</th>
                    <th class="no_border"></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                </tr>
                
            </table>
        </div>
    </div>
<table class="table" width="100%">
    <tr>
        <th width="30px">No.</th>
        <th align="center">NAMA LENGKAP</th>
        <th align="center">N I K</th>
        <th align="center">JENIS KELAMIN</th>
        <th align="center">TEMPAT LAHIR</th>
        <th align="center">TANGGAL LAHIR</th>
        <th align="center">AGAMA</th>
        <th align="center">PENDIDIKAN</th>
    </tr>
    <?php $no=1; ?>
    <tr>
        <td><?=$no++;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><?=$no++;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><?=$no++;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td><?=$no++;?></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<br>
<table class="table" width="100%">
    <tr>
        <th rowspan="2">No.</th>
        <th width="150px" rowspan="2" align="center">JENIS PEKERJAAN</th>
        <th rowspan="2" align="center">STATUS PERKAWINAN</th>
        <th width="180px" rowspan="2" align="center">STATUS HUBUNGAN DALAM KELUARGA</th>
        <th colspan="4" align="center">NAMA ORANG TUA</th>
    </tr>
    <tr>
        <th width="140px" align="center">NAMA AYAH</th>
        <th width="115px" align="center">NIK AYAH</th>
        <th width="140px" align="center">NAMA IBU</th>  
        <th width="115px" align="center">NIK IBU</th>  
    </tr>
    <tr>
        <td>1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<br>
<span style="font-size: 10px;">Bahwa Biodata yang tercantum dalam pengantar ini adalah biodata yang benar sesuai dokumen pendukungnya dan dapat dipertanggungjawabkan dihadapan hukum.</span><br>

<table>
    <tr>
        <th width="100px"></th>
        <th>
             PEMOHON/KEPALA KELUARGA <br>
             <br><br><br><br><br>
               ( <?= $nama; ?> )
        </th>
        <th width="500px"></th>
        <th>
            Perampuan, <?= $hari_ini ?><br>
            <?php 
                $ket1 = 'Kepala Desa Perempuan';
                if($jabatan_ttd !== "Kepala Desa") {
                    $ket1 = 'A/n Kepala Desa Perempuan';
                    $jabatan_ttd .=',';
                }else{
                    $jabatan_ttd = '';
                }
            ?>
            <?= $ket1; ?><br> 
            <?= $jabatan_ttd; ?><br><br><br><br><br>
           ( <?= $yang_ttd; ?> )
        </th>
    </tr>
</table>
                           
</div>

<?php 
$body = ob_get_clean();
$mpdf->WriteHTML($body);
ob_get_clean();
// tampilkan surat
$mpdf->Output($file, 'I');
//simpan SURAT ke folder arsip_surat
$mpdf->Output($arsip_surat.$file, 'F');
?>