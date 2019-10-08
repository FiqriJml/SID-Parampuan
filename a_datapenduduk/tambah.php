<?php include "../koneksi.php" ?>
<?php include "head.php" ?>

<body>
    <div id="wrapper">
    <?php include "nav.php" ?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="">
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="../keluar.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Tambah Data</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Data</a>
                        </li>
                        <li class="active">
                            <strong>Tambah Data</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-triangle-left"></i> Kembali </a>
                    </div>
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">

                <div class="col-lg-5">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">

                </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Tambah Data</h5>
                        </div>
                        <div class="ibox-content">
                            <form action="tambah_proses.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Agama</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="agama">
                                        <option>-- Pilih Agama --</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="BUDHA">BUDHA</option>
                                        <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                        <option value="KATOLIK">KATOLIK</option>
                                        <option value="KONG HU CU">KONG HU CU</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">NIK</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nik" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Pendidikan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pendidikan" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-5">
                                        <select class="form-control m-b" name="jenis_kelamin">
                                        <option>-- Pilih Jenis Kelamin --</option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                        </select>
                                    </div>  
                                    <label class="col-sm-2 control-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kewarganegaraan" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">KK</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="kk" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Status Perkawinan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="status_perkawinan">
                                        <option>-- Pilih Status Perkawinan --</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Tempat Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tempat" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Gol Darah</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="gol_darah">
                                        <option>-- Pilih Gol Darah --</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tanggal_lahir" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">SH Dalam Keluarga</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="status_sosial">
                                        <option>-- Pilih SH Keluarga --</option>
                                        <option value="AYAH">AYAH</option>
                                        <option value="IBU">IBU</option>
                                        <option value="ANAK">ANAK</option>
                                        <option value="KAKEK">KAKEK</option>
                                        <option value="NENENK">NENEK</option>
                                        <option value="SAUDARA">SAUDARA</option>
                                        </select>
                                    </div>  
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="alamat" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Kategori Sosial</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kategori_sosial" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">RT/RW</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="rt_rw" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pekerjaan" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Dusun</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="dusun" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Bapak</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="bapak" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="desa" class="form-control">
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Ibu</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="ibu" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Kecamatan</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kecamatan" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1 col-sm-offset-1">
                                        <button class="btn btn-primary" name="simpan" type="submit"><i class="glyphicon glyphicon-save"></i> Simpan</button>
                                        <input type="hidden" name="id" value="<?php echo $cek['id'] ?>">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <?php include "footer.php" ?>

        </div>
        </div>

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script src="../js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>
</html>
