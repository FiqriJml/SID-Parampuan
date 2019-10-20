<?php
    $root = "../../../";

    $arsip_surat = $root.'arsip_surat/';

include($root.'koneksi.php');

$nik = $_GET['nik'];
$tgl = date('Y-m-d');

// Varian Surat
// yang di ganti untuk setiap surat
$jenis_surat = 'Surat Keterangan Pindah';

$no_label = "PEM-DK";
$no_surat = "471.2_";
$tujuan = $_GET['tujuan'];
$lamanya = $_GET['lamanya'];
$tanggal_berangkat = $_GET['tanggal_berangkat'];
$keperluan = $_GET['keperluan'];
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
    }
    .surat-isi{
    }
    .surat-kop{
        border-bottom: solid;
        /*background-color: #ff6;*/
        font-size: 13px;
    }
    .surat-badan{
        padding-top: .5cm;
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
        width: 560px;
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
    /*td{
        line-height: 95%;
    }*/
    table {
        border-collapse: none;
    }
    .table td, .table th, .border{
        border: solid 1px black;
        /*line-height: 110%;*/
        padding: 5px;
        text-align: center;
    }
    .border{
        padding-left: 10px;
        text-align: left;
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
                        <span class="garis_bawah"><b><?= strtoupper($jenis_surat) ?></b></span> <br>
                        <div style="margin-top: 3px;">
                        Nomor: <?= $no_surat; ?> / <?= $no_agenda; ?> / <?= $no_label; ?> / 2019<br>
                        </div>
                    </div>
                    <div class="text-justify"> <br>
                        DATA DAERAH ASAL
                        <div class="tabel">
                            <table border="0">
                                <tr>
                                    <td>1.&emsp;</td>
                                    <td width="200px">Nomor Kartu Keluarga</td><td class="border" width="250px"><?= $data_penduduk['nik']; ?></td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                                <tr>
                                    <td>2.&emsp;</td>
                                    <td>Nama Kepala Keluarga</td><td class="border"><?= $data_penduduk['nama']; ?></td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                                <tr>
                                    <td>3.&emsp;</td>
                                    <td>Alamat</td><td class="border"> Dusun <?= $data_penduduk['dusun']; ?></td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                            </table>
                            <table>
                                <tr>
                                    <td></td>
                                    <td>a. Desa/Kelurahan &nbsp;</td>
                                    <td class="border" width="180px"> <?= $data_penduduk['desa']; ?> </td>
                                    <td>&emsp;c. Kab./Kota&nbsp;</td>
                                    <td class="border" width="180px"> LOMBOK BARAT </td>
                                </tr><tr><td height="10px"></td></tr>
                                <tr>
                                    <td></td>
                                    <td>b. Kecamatan</td>
                                    <td class="border"> <?= $data_penduduk['kecamatan']; ?> </td>
                                    <td>&emsp;d. Provinsi&nbsp;</td>
                                    <td class="border"> NTB </td>
                                </tr>
                            </table>
                        </div>  
                    </div>


                    <div class="text-justify">
                        <br>
                        DATA KEPINDAHAN
                        <div class="tabel">
                            <table border="0">
                                <tr>
                                    <td rowspan="2">1.&emsp;</td>
                                    <td rowspan="2">Alasan Pindah &nbsp;</td>
                                    <td rowspan="2" class="border" width="30px"> <?= $_GET['alasan_pindah']; ?> </td>
                                    <td>&nbsp;1. Pekerjaan &nbsp;</td>
                                    <td>3. Keamanan &nbsp;</td>
                                    <td>5. Perumahan &nbsp;</td>
                                    <td colspan="2">7. Pindah Tempat Tinggal</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;2. Pendidikan &nbsp;</td>
                                    <td>4. Kesehatan &nbsp;</td>
                                    <td>6. Keluarga &nbsp;</td>
                                    <td>8. Menikah &nbsp;</td>
                                    <td>9. Lainnya</td>
                                </tr>
                                <tr><td height="10px"></td></tr>
                            </table>
                            <table border="0">
                                <tr>
                                    <td>2.&emsp;</td>
                                    <td>Alamat Tujuan Pindah &emsp;&emsp;</td><td class="border" width="389px"> <?= $_GET['pindah_alamat']; ?> </td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                            </table>
                            <table>
                                <tr>
                                    <td></td>
                                    <td>a. Desa/Kelurahan &nbsp;</td>
                                    <td class="border" width="180px"> <?=  $_GET['pindah_desa']; ?> </td>
                                    <td>&emsp;c. Kab./Kota&nbsp;</td>
                                    <td class="border" width="180px"> <?= $_GET['pindah_kab']; ?> </td>
                                </tr><tr><td height="10px"></td></tr>
                                <tr>
                                    <td></td>
                                    <td>b. Kecamatan</td>
                                    <td class="border"> <?= $_GET['pindah_kec']; ?> </td>
                                    <td>&emsp;d. Provinsi&nbsp;</td>
                                    <td class="border"> <?= $_GET['pindah_prov']; ?> </td>
                                </tr>
                            </table>
                            <table border="0">
                                <tr><td height="10px"></td></tr>
                                <tr>
                                    <td rowspan="2">3.&emsp;</td>
                                    <td rowspan="2" width="156px">Jenis Kepindahan &nbsp;</td>
                                    <td rowspan="2" class="border" width="30px"> <?= $_GET['klasifikasi_pindah']; ?> </td>
                                      
                                    <td>&nbsp;1.Dalam Satu Desa/Kelurahan &nbsp;</td>
                                    <td>3. Antar Kecamatan &nbsp;</td>
                                    <td>5. Antar Provinsi &nbsp;</td>
                                </tr>
                                <tr>

                                    <td>&nbsp;2.Antar Desa/Kelurahan &nbsp;</td>
                                    <td>4. Antar Kab./Kota &nbsp;</td>
                                    <td></td>
                                </tr>
                                <tr><td height="10px"></td></tr>
                            </table>
                            <table border="0">
                                <tr>
                                    <td rowspan="2">4.&emsp;</td>
                                    <td rowspan="2">Jenis Kepindahan</td>
                                    <td rowspan="2" class="border" width="30px"> <?= $_GET['jenis_kepindahan']; ?> </td>
                                    <td>&nbsp;1. KepalaKeluarga &nbsp; 3. KepalaKeluargadanSbg. AnggotaKeluarga &nbsp;</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;2. KepalaKeluargadanSemuaAnggotaKeluarga &nbsp; 4. AnggotaKeluarga &nbsp;</td>
                                </tr>
                                <tr><td height="10px"></td></tr>
                                <tr>
                                    <td rowspan="2">5.&emsp;</td>
                                    <td rowspan="2">Status Nomor KK <br>Bagi Yang Tidak Pindah</td>
                                    <td rowspan="2" class="border" width="30px"> <?= $_GET['status_kk_tidak_pindah']; ?> </td>
                                      
                                    <td>&nbsp;1. Numpang KK &nbsp;&nbsp; 3. Membuat KK Baru</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;2.Tidak Ada AnggotaKeluarga Yang ditinggal &nbsp;&nbsp;4. AnggotaKeluarga</td>
                                </tr>
                                <tr><td height="10px"></td></tr>
                                <tr>
                                    <td rowspan="2">6.&emsp;</td>
                                    <td rowspan="2">Status Nomor KK <br>Bagi Yang Pindah &nbsp;</td>
                                    <td rowspan="2" class="border" width="30px"> <?= $_GET['status_kk_pindah']; ?> </td>
                                    <td>&nbsp;1.Numpang KK &nbsp;&nbsp;3. Nama Kepala Keluarga dan Nomor KK</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;2.Membuat KK Baru</td>
                                </tr>
                                <tr><td height="10px"></td></tr>
                            </table>
                            <table border="0">
                                <tr>
                                    <td>7.&emsp;</td>
                                    <td>Rencana Tanggal Pindah &emsp;&emsp;</td><td class="border" width="371px"><?= $_GET['pindah_tgl']; ?></td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                                <tr>
                                    <td>8.&emsp;</td>
                                    <td>Keluarga Yang Pindah &emsp;&emsp;</td>
                                    <td></td>
                                </tr><tr><td height="10px"></td></tr>
                            </table>
                        </div>  
                    </div>
                        <table class="table" width="100%">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>SHDK</th>
                            </tr>
                            <?php $key=-1; foreach ($_GET['mNama'] as $key => $nama): ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $_GET['mNik'][$key] ?> </td>
                                <td><?= $_GET['mNama'][$key] ?> </td>
                                <td><?= $_GET['mShdk'][$key] ?> </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php for ($i=$key+1; $i < 4; $i++):?>
                                <tr>
                                    <td><?= $i+1 ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php endfor; ?>

                        </table>
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