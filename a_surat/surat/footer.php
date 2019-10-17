<?php
$root = "../../../";
?>
<div class="footer">
    <div class="pull-right">
        <b>Copyright 2019 ©</b> SID Desa Parampuan 
    </div>
</div>
    <!-- Mainly scripts -->
    <script src="<?= $root; ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?= $root; ?>js/bootstrap.min.js"></script>
    <script src="<?= $root; ?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?= $root; ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= $root; ?>js/plugins/dataTables/datatables.min.js"></script>
    <script src="<?= $root; ?>js/inspinia.js"></script>
    <script src="<?= $root; ?>js/plugins/pace/pace.min.js"></script>
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