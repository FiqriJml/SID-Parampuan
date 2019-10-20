<?php
    include "head.php" ;
?>
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
                                <a href="surat/01_keterangan_usaha" class="btn btn-warning m-r-sm">Surat Keterangan Usaha</a>
                            </td>
                            <td>
                                <a href="surat/02_pengantar_permohononan_kk" class="btn btn-info m-r-sm">Surat Pengantar Permohononan Kartu Keluarga</a>
                            </td>
                            <td>
                                <a href="surat/03_keterangan_status" class="btn btn-primary m-r-sm">Surat Keterangan Status</a>
                            </td>
                            <td>
                                <a href="surat/04_keterangan_kematian" class="btn btn-primary m-r-sm">Surat Keterangan Kematian</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="surat/05_keterangan_penduduk_sementara" class="btn btn-primary m-r-sm">Surat Keterangan Penduduk Sementara</a>
                            </td>
                            <td>
                                <a href="surat/06_keterangan_domisili" class="btn btn-primary m-r-sm">Surat Keterangan Domisili</a>
                            </td>
                            <td>
                                <a href="surat/07_keterangan_lahir" class="btn btn-primary m-r-sm">Surat Keterangan Lahir</a>
                            </td>
                            <td>
                                <a href="surat/08_keterangan_pindah" class="btn btn-info m-r-sm">Surat Keterangan Pindah</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="surat/09_keterangan_tidak_mampu_sekolah" class="btn btn-primary m-r-sm">Surat Keterangan Tidak Mampu Sekolah</a>
                            </td>
                            <td>
                                <a href="surat/10_keterangan_tidak_mampu" class="btn btn-primary m-r-sm">Surat Keterangan Tidak Mampu</a>
                            </td>
                            <td>
                                <a href="surat/11_keterangan_catatan_kepolisian" class="btn btn-warning m-r-sm">Surat Keterangan Catatan Kepolisian</a>
                            </td>
                            <td>
                                <a href="surat/12_keterangan_menikah" class="btn btn-primary m-r-sm">Surat Keterangan Menikah</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="surat/13_keterangan_beda_nama" class="btn btn-warning m-r-sm">Surat Keterangan Beda Nama</a>
                            </td>
                            <td>
                                <a href="surat/14_keterangan_bepergian" class="btn btn-warning m-r-sm">Surat Keterangan Bepergian</a>
                            </td>
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
