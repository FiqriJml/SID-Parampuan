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
                    <h2>Edit Data</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Data</a>
                        </li>
                        <li class="active">
                            <strong>Edit Data</strong>
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
                            <h5>Edit Data</h5>
                        </div>
                        <div class="ibox-content">
                        	
                        	<?php
                                include '../koneksi.php';
                                
                                $id = $_GET['id'];
                                $data = mysqli_query($con, "select * from data_penduduk where id='$id'");
                                while(@$d = mysqli_fetch_array($data)){
                            ?>

                            <form action="edit_proses.php" method="post" class="form-horizontal">
                            	<input type="hidden" name="id" value="<?php echo $id; ?>">

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Nama</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Agama</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="agama">
                                        <option><?php echo $d['agama']; ?></option>
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
                                        <input type="text" name="nik" class="form-control" value="<?php echo $d['nik']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Pendidikan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pendidikan" class="form-control" value="<?php echo $d['pendidikan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-5">
                                        <select class="form-control m-b" name="jenis_kelamin">
                                        <option><?php echo $d['jenis_kelamin']; ?></option>
                                        <option value="L">L</option>
                                        <option value="P">P</option>
                                        </select>
                                    </div>  
                                    <label class="col-sm-2 control-label">Kewarganegaraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $d['kewarganegaraan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">KK</label>
                                        <div class="col-sm-5">
                                        <input type="text" name="kk" class="form-control" value="<?php echo $d['kk']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Status Perkawinan</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="status_perkawinan">
                                        <option><?php echo $d['status_perkawinan']; ?></option>
                                        <option value="KAWIN">KAWIN</option>
                                        <option value="BELUM KAWIN">BELUM KAWIN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Tempat Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tempat" class="form-control" value="<?php echo $d['tempat']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Gol Darah</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="gol_darah">
                                        <option><?php echo $d['gol_darah']; ?></option>
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
                                        <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">SH Dalam Keluarga</label>
                                    <div class="col-sm-4">
                                        <select class="form-control m-b" name="status_sosial">
                                        <option><?php echo $d['status_sosial']; ?></option>
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
                                        <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kategori Sosial</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kategori_sosial" class="form-control" value="<?php echo $d['kategori_sosial']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">RT/RW</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="rt_rw" class="form-control" value="<?php echo $d['rt_rw']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="pekerjaan" class="form-control" value="<?php echo $d['pekerjaan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Dusun</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="dusun" class="form-control" value="<?php echo $d['dusun']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Bapak</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="bapak" class="form-control" value="<?php echo $d['bapak']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="desa" class="form-control" value="<?php echo $d['desa']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Nama Ibu</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="ibu" class="form-control" value="<?php echo $d['ibu']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Kecamatan</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kecamatan" class="form-control" value="<?php echo $d['kecamatan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-1 col-sm-offset-1">
                                        <button class="btn btn-primary" name="save" type="submit"><i class="glyphicon glyphicon-saved"></i> Update</button>
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

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../js/plugins/dataTables/datatables.min.js"></script>
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
</body>
</html>
