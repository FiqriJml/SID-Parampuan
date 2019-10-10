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
                    <h2>Pembuatan Surat</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Pembuatan Surat</a>
                        </li>
                        <li class="active">
                            <strong>Pembuatan Surat</strong>
                        </li>
                    </ol>
                </div><!-- 
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Add Data</a>
                    </div>
                </div> -->
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row m-t-lg">
            <div class="col-lg-12">
                <div>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-danger m-r-sm">Surat Domisili Perusahaan</a>
                            </td>
                            <td>
                                <a href="surat_keterangan_penghasilan_form.php" class="btn btn-primary m-r-sm">Surat Keterangan Penghasilan</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info m-r-sm">Surat Keterangan Pindah</a>
                            </td>
                            <td>
                                <a href="surat_keterangan_usaha_form.php" class="btn btn-warning m-r-sm">Surat Keterangan Usaha</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-warning m-r-sm">Surat Pengantar Permohonan KK</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger m-r-sm">SKTM Rumah Sakit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary m-r-sm">SKTM Sekolah</a>
                            </td>
                            <td>
                                <a href="surat_keterangan_belum_menikah_form.php" class="btn btn-info m-r-sm">Surat Keterangan Belum Menikah</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-info m-r-sm">Surat Keterangan Domisili KK</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-warning m-r-sm">Surat Keterangan Duda</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
