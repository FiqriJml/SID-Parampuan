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
                    <h2>Detail</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Detail</a>
                        </li>
                        <li class="active">
                            <strong>Detail</strong>
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
                            <!-- <h5>Detail Data Penduduk</h5> -->
                        </div>
                        <div class="ibox-content">
                        	
                        	<?php
                                include '../koneksi.php';
                                
                                $id   = $_GET['id'];
                                $data = mysqli_query($con, "select * from data_penduduk where id='$id'");
                                while(@$d = mysqli_fetch_array($data)){
                            ?>

                            <form action="#" method="post" class="form-horizontal" enctype="multipart/form-data">
                            	<input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Agama</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="agama" class="form-control" value="<?php echo $d['agama']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">NIK</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nik" class="form-control" value="<?php echo $d['nik']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Pendidikan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pendidikan" class="form-control" value="<?php echo $d['pendidikan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $d['jenis_kelamin']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $d['kewarganegaraan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">KK</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="kk" class="form-control" value="<?php echo $d['kk']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Status Perkawinan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="status_perkawinan" class="form-control" value="<?php echo $d['status_perkawinan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Tempat Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tempat" class="form-control" value="<?php echo $d['tempat']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Gol Darah</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="gol_darah" class="form-control" value="<?php echo $d['gol_darah']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Tanggal Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">SH Dalam Keluarga</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="status_sosial" class="form-control" value="<?php echo $d['status_sosial']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Alamat</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Kategori Sosial</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kategori_sosial" class="form-control" value="<?php echo $d['kategori_sosial']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">RT/RW</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="rt_rw" class="form-control" value="<?php echo $d['rt'].'/'.$d['rw']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pekerjaan" class="form-control" value="<?php echo $d['pekerjaan']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Dusun</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="dusun" class="form-control" value="<?php echo $d['dusun']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Bapak</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="bapak" class="form-control" value="<?php echo $d['bapak']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="desa" class="form-control" value="<?php echo $d['desa']; ?>" readonly>
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Ibu</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="ibu" class="form-control" value="<?php echo $d['ibu']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Kecamatan</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kecamatan" class="form-control" value="<?php echo $d['kecamatan']; ?>" readonly>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            }
                            ?>
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
