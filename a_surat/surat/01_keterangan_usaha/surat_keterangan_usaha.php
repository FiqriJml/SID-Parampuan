<?php
    $root = "../../../";
    require_once $root.'vendor/autoload.php';

    $arsip_surat = $root.'arsip_surat/';

$mpdf = new \Mpdf\Mpdf();

$nik = $_GET['nik'];
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
$tgl = date('Y-m-d');
$jenis_surat = 'Surat Keterangan Usaha';
$id_penduduk = $data_penduduk['id'];
$id_user = $_SESSION['id_user'];
$keperluan = $_GET['keperluan'];

// nama file nya
$file = $nik."_".$jenis_surat."_".$tgl.".pdf";

$query = "INSERT INTO `surat`(`tanggal`, `jenis_surat`, `id_penduduk`, `id_user`, `keperluan`, `file`) VALUES (
                    '$tgl', '$jenis_surat', '$id_penduduk', '$id_user', '$keperluan','$file')";
$result = mysqli_query($con, $query);
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

//create html of the data
ob_start();
?>

<style type="text/css">
    .surat{
        // width: 20.9cm;
        // height: 29.6cm;
        /*background-color: pink;*/
        background-color: #fff;
    }
    .surat h1{
        margin: 0px -15px; 
        padding: 12px;
    }
    .surat-isi{
        padding: 0cm 1.5cm;
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
        margin-left: 9.2cm;
    }
    .kop-logo{
        float: left;
        width: 70px;
    }
    .kop-isi{
        float: left;
        width: 426px;
        text-align: center;
        font-weight: bold;
        /*background-color: #cfc*/
    }
    .kop-logo-desa{
        float: left;
        width: 70px;
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
        padding-left: 2.5cm;
        padding-right: 2cm;
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
                    <div class="text-center">
                        <span class="garis_bawah"><b>SURAT KETERANGAN USAHA</b></span> <br>
                        <div style="margin-top: 3px;">
                        Nomor : 500 / <?= $no_agenda; ?> / X / 2019 <br>
                        </div>
                    </div>
                    <br>
                    <div class="text-justify">
                        <p>&emsp;&emsp;&emsp;Yang bertandatangan dibawah ini Kepala Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat, menerangkan dengan sebenarnya bahwa:</p>
                        <div class="tabel">
                            <table border="0">
                                <tr>
                                    <td class="label-td">Nama</td> <td>:&emsp;</td> <td> <b><?= $nama; ?></b></td>
                                </tr>
                                <tr>
                                    <td>Tempat/tgl. lahir</td> <td>:</td> <td><?= $tempat; ?>, <?= $tanggal_lahir; ?></td>
                                </tr>
                                <tr>
                                    <td>NIK</td> <td>:</td> <td><?= $nik; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis kelamin</td> <td>:</td> <td><?= $jenis_kelamin; ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td>:</td> <td><?= $agama; ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td> <td>:</td> <td><?= $status_perkawinan; ?></td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan</td> <td>:</td> <td><?= $pekerjaan; ?></td>
                                </tr>
                                <tr>
                                    <td valign="top">Alamat</td> <td valign="top">:</td> 
                                    <td class="text-justify" valign="top"><?= $alamat; ?> </td>
                                </tr>
                            </table>
                        </div>  
                        <br>
                        <p>&emsp;&emsp;&emsp;Bahwa yang namanya tersebut diatas memang benar penduduk yang berdomisili dan bertempat tinggal di wilayah kami Desa Perampuan, Kecamatan Labuapi, Kabupaten Lombok Barat. dan yang bersangkutan memang benar mempunyai Usaha   <strong><u>“ <?= $usaha_nama; ?> ”</u></strong> yang berlokasi di <?= $usaha_lokasi; ?>, dan usaha tersebut dimulai sejak tahun <?= $usaha_tahun_mulai; ?>  sampai saat ini.</p>
                        <p>&emsp;&emsp;&emsp;Demikian surat keterangan ini kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
                    </div>
                    <br><br> <br><br>
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
                        <br><br><br> <br> <br> <br>



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