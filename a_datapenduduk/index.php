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
                    <h2>Data Penduduk</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="../index.php">Home</a>
                        </li>
                        <li>
                            <a>Penduduk</a>
                        </li>
                        <li class="active">
                            <strong>Data Penduduk</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="tambah.php" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Add Data</a>

                        <a href="import.php" class="btn btn-warning"><i class="glyphicon glyphicon-import"></i> Import</a>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Data Penduduk</h5>
                            </div>


                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>L/P</th>
                                                <th>NIK</th>
                                                <th>KK</th>
                                                <th>Alamat</th>
                                                <th>Dusun</th>
                                                <th>Gol Darah</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include('../koneksi.php');

                                            $query = "SELECT * FROM data_penduduk order by id desc";
                                            $result = mysqli_query($con, $query);
                                            if (mysqli_num_rows($result) == 0) {
                                                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                                            } else {

                                                $no = 1;
                                                while ($data = mysqli_fetch_assoc($result)) {

                                                    echo '<tr>';
                                                    echo '<td>' . $no . '</td>';
                                                    echo '<td>' . $data['nama'] . '</td>';
                                                    echo '<td>' . $data['jenis_kelamin'] . '</td>';
                                                    echo '<td>' . $data['nik'] . '</td>';
                                                    echo '<td>' . $data['kk'] . '</td>';
                                                    echo '<td>' . $data['alamat'] . '</td>';
                                                    echo '<td>' . $data['dusun'] . '</td>';
                                                    echo '<td>' . $data['gol_darah'] . '</td>';
                                                    echo '<td>

                                    <a href="detail.php?id=' . $data['id'] . '" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    
                                    <a href="edit.php?id=' . $data['id'] . '" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></a>

                                    <a href="delete.php?id=' . $data['id'] . '" onclick="return confirm(\'Apakah Yakin Ingin Menghapus Data?\')" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-trash"></i> </a>
                                    </td>';

                                                    echo '</tr>';
                                                    $no++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

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
    <script src="../js/plugins/iCheck/icheck.min.js"></script>
    <script src="../js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
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