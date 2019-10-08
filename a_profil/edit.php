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
                                
                                $id_profil = $_GET['id_profil'];
                                $data = mysqli_query($con, "select * from profil_desa where id_profil='$id_profil'");
                                while(@$d = mysqli_fetch_array($data)){
                            ?>

                            <form action="edit_proses.php" method="post" class="form-horizontal">
                            	<input type="hidden" name="id_profil" value="<?php echo $id_profil; ?>">

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Nama Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="nama_desa" class="form-control" value="<?php echo $d['nama_desa']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kasi Pemerintahan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kasi_pemerintahan" class="form-control" value="<?php echo $d['kasi_pemerintahan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Alamat Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="alamat_desa" class="form-control" value="<?php echo $d['alamat_desa']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kasi Kesejahteraan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kasi_kesejahteraan" class="form-control" value="<?php echo $d['kasi_kesejahteraan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Kode Pos</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kode_pos" class="form-control" value="<?php echo $d['kode_pos']; ?>">
                                    </div>  
                                    <label class="col-sm-2 control-label">Kasi Pelayanan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kasi_pelayanan" class="form-control" value="<?php echo $d['kasi_pelayanan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Kepala Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="kades" class="form-control" value="<?php echo $d['kades']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kaur TU & Umum</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kaur_tu" class="form-control" value="<?php echo $d['kaur_tu']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Jabatan Kades</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="jabatan_kades" class="form-control" value="<?php echo $d['jabatan_kades']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kaur Keuangan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kaur_keuangan" class="form-control" value="<?php echo $d['kaur_keuangan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Sekretaris Desa</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="sekdes" class="form-control" value="<?php echo $d['sekdes']; ?>">
                                    </div>
                                    <label class="col-sm-2 control-label">Kaur Perencanaan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="kaur_perencanaan" class="form-control" value="<?php echo $d['kaur_perencanaan']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Jabatan Sekdes</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="jabatan_sekdes" class="form-control" value="<?php echo $d['jabatan_sekdes']; ?>">
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
