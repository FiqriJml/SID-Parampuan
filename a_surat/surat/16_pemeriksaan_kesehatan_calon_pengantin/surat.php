<?php
    $root = "../../../";

    $arsip_surat = $root.'arsip_surat/';

include($root.'koneksi.php');

$nik_istri = $_GET['nik_istri'];
$nik_suami = $_GET['nik_suami'];

$tgl = date('Y-m-d');

// Varian Surat
// yang di ganti untuk setiap surat
$jenis_surat = 'Surat Pemeriksaan Kesehatan Calon Pengantin';

$no_label = "PEL-DK";
$no_surat = "472.2";
$keterangan = $_GET['keterangan'];

// nama file nya
$file = $nik."_".$jenis_surat."_".$tgl.".pdf";

$no_agenda = $_GET['no_agenda'];
$yang_ttd = $_GET['yang_ttd'];
$jabatan_ttd = $_GET['jabatan_ttd'];

$status = $_GET['status'];


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
$query = "SELECT * FROM data_penduduk WHERE nik='$nik_istri'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $data_istri = mysqli_fetch_assoc($result);
}
//ambil data pada database
$query = "SELECT * FROM data_penduduk WHERE nik='$nik_suami'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $data_suami = mysqli_fetch_assoc($result);
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
// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
// $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);
// kertas legal
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'legal']);

//create html of the data
ob_start();
?>

<style type="text/css">
    .surat{
        /*background-color: pink;*/
        background-color: #fff;
        font-size: 13px;
    }
    .surat-isi{
        padding: 0cm 1cm;
    }
    .surat-kop{
        border-bottom: solid;
        /*background-color: #ff6;*/
        font-size: 13px;
    }
    .surat-badan{
        padding-top: 1cm;
        /*background-color: #fe4;*/
        /*height:100%; display:block;*/
    }
    .surat-ttd{
        /*background-color: #eef;*/
        width: 6cm;
        margin-left: 10.2cm;
    }
    .kop-logo{
        float: left;
        width: 70px;
    }
    .kop-isi{
        float: left;
        width: 460px;
        text-align: center;
        font-weight: bold;
        /*background-color: #cfc;*/
    }
    .kop-logo-desa{
        float: left;
        width: 70px;
        background-color: #cfc;
    }
    .clearfix {
      overflow: auto;
    }
    .text-center{
        text-align: center;
    }
    .text-justify{
        text-align: justify;
    }
    .text-top{
        vertical-align: top;
    }
    .tabel{
        padding-left: 0.5cm;
        padding-right: 0.5cm;
    }
    .tabel .label-td{
        width: 3.6cm;
    }
    .tabel td{
        font-size: 14px;
    }
    .garis_bawah{
        border-bottom: solid 2px;
    }
    .form-surat{
        background-color: #fff;
        /*padding: 20px 30px;*/
        padding-bottom: 50px;
        margin-bottom: 50px;
    }
    .form-surat h1{
        /*font-weight: bold;*/
        padding: 12px;

    }
    .kop-isi .desa{
        font-size: 22px;
    }
    table {
        border-collapse: none;
    }
    .judul_surat{
        font-size: 13px;
        vertical-align: top;
    }
</style>
        <div class="surat">
            <div class="surat-isi">
                <div class="surat-kop clearfix">
                    <div class="kop-logo"> 
                        <img src="<?= $root; ?>img/logo/logo_lombok_barat.png">
                    </div>
                    <div class="kop-isi">
                    <span>PEMERINTAH KABUPATEN LOMBOK BARAT<br>
                        <!-- K E C A M A T A N  L A B U A P I <br> -->
                        KECAMATAN LABUAPI</span><br>
                                <span class="desa">DESA <?=$data_desa['nama_desa']?></span> <br>
                        <?=$data_desa['alamat_desa']?> Kode Pos: <?=$data_desa['kode_pos']?>
                    </div>
                    <div class="kop-logo-desa"> 
                        <img src="<?= $root; ?>img/logo/<?=$data_desa['logo']?>" >
                    </div>
                </div>
                <div class="surat-badan">
                    <table border="0" class="judul_surat">
                        <tr>
                            <td colspan="4" width="12cm"></td>
                            <td>
                                <u>Perampuan, <?= $hari_ini;?></u> <br>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor</td> <td>:</td> <td><?=$no_surat;?> / <?=$no_agenda;?> / <?=$no_label;?> / 2019</td>
                            <td rowspan="2">Yth.</td>
                            <td rowspan="2">Kepala UPT BLUD Puskesmas Perampuan</td>
                        </tr> 
                        <tr>
                            <td>Lamp.</td> <td>:</td> <td>-</td>
                        </tr>
                        <tr>
                            <td>Hal</td> <td>:</td> <td>Pemeriksaan Kesehatan Calon Pengantin <br>( Suntik TT ). </td>
                            <td rowspan="2"></td>
                            <td rowspan="2">di_ <br>&emsp;&emsp;Labuapi</td>
                        </tr> 
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                    </table>
                     <br>
                    <div class="text-justify">
                        <p>&emsp;&emsp;&emsp;&emsp; <b><i>Bismillahirrohmanirrohim,</i></b>
                                <br>
                                &emsp;&emsp;&emsp;&emsp; Assalamu’alaikum Warohmatullohi Wabarokaatuh
                            </p>
                            <p>&emsp;&emsp;&emsp;&emsp; 
                                Untuk menindak lanjuti Peraturan Daerah Kabupaten Lombok Barat Pasal 16 Ayat ( 14 ) tentang
                                pencegahan dan penanggulangan <b><i>Human Immunodeficiency Virus</i></b> dan <b><i>Aquared Imune Defiency
                                Syndrome</i></b>, dan instruksi Bupati Lombok Barat tentang pemeriksaan kesehatan bagi pasangan calon
                                pengantin, dengan ini diharapkan dapat dilakukan pemeriksaan kesehatan kepada calon pasangan
                                pengantin yang identitasnya sebagai berikut : 
                            </p>
                        <div class="tabel">
                            <table border="0">
                                <tr>
                                    <td width="15px">I.</td>
                                    <td>Calon Suami</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="label-td">Nama</td> <td>:&emsp;</td> <td> <b><?= $data_suami['nama']; ?></b></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>NIK</td> <td>:</td> <td><?= $data_suami['nik'];?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Tempat/tgl. lahir</td> <td>:</td> <td><?= $data_suami['tempat']; ?>, <?= $data_suami['tanggal_lahir']; ?></td>
                                </tr>
                                <?php
                                    $jenis_kelamin = $data_suami['jenis_kelamin'];
                                    if($jenis_kelamin == 'P' || $jenis_kelamin == 'p'){
                                        $jenis_kelamin = 'Perempuan';
                                    }else{
                                        $jenis_kelamin = 'Laki-Laki';
                                    }
                                ?>
                                <tr>
                                    <td></td>
                                    <td>Jenis kelamin</td> <td>:</td> <td><?= $jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Agama</td> <td>:</td> <td><?= $data_suami['agama']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Status</td> <td>:</td> <td><?= $data_suami['status_perkawinan']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Pekerjaan</td> <td>:</td> <td><?= $data_suami['pekerjaan']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td valign="top">Alamat</td> <td valign="top">:</td> 
                                    <td class="text-justify" valign="top">Dusun <?= $data_suami['dusun']; ?> Desa <?= $data_suami['desa']; ?> Kecamatan <?= $data_suami['kecamatan']; ?> Kabupaten Lombok Barat </td>
                                </tr>
                            </table>

                            <table border="0">
                                <tr>
                                    <td width="15px">II.</td>
                                    <td>Calon Istri</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="label-td">Nama</td> <td>:&emsp;</td> <td> <b><?= $data_istri['nama']; ?></b></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>NIK</td> <td>:</td> <td><?= $data_istri['nik'];?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Tempat/tgl. lahir</td> <td>:</td> <td><?= $data_istri['tempat']; ?>, <?= $data_istri['tanggal_lahir']; ?></td>
                                </tr>
                                <?php
                                    $jenis_kelamin = $data_istri['jenis_kelamin'];
                                    if($jenis_kelamin == 'P' || $jenis_kelamin == 'p'){
                                        $jenis_kelamin = 'Perempuan';
                                    }else{
                                        $jenis_kelamin = 'Laki-Laki';
                                    }
                                ?>
                                <tr>
                                    <td></td>
                                    <td>Jenis kelamin</td> <td>:</td> <td><?= $jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Agama</td> <td>:</td> <td><?= $data_istri['agama']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Status</td> <td>:</td> <td><?= $data_istri['status_perkawinan']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Pekerjaan</td> <td>:</td> <td><?= $data_istri['pekerjaan']; ?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td valign="top">Alamat</td> <td valign="top">:</td> 
                                    <td class="text-justify" valign="top">Dusun <?= $data_istri['dusun']; ?> Desa <?= $data_istri['desa']; ?> Kecamatan <?= $data_istri['kecamatan']; ?> Kabupaten Lombok Barat </td>
                                </tr>
                            </table>
                        </div>  

                    </div>
                    <p>
                        &emsp;&emsp;&emsp;Demikian pemberitahuan ini kami sampaikan agar dapat dibantu, atas perhatian dan
kerjasamanya kami ucapkan terima kasih.
                    </p>
                    <p>
                        &emsp;&emsp;&emsp;Wassalamu’alaikum Warohmatullohi Wabarokaatuh.
                    </p>
                    <br><br>
                    <div class="surat-ttd">
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
                        <?= $jabatan_ttd; ?> <br> 
                        <br><br><br> <br> <br><br>



                            <div class="text-center">
                            <b>(    <?= $yang_ttd; ?>    )</b></div>
                    </div>
                </div>
            </div>
        </div>
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