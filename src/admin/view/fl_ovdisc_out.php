<?php include 'common/session.php'; ?>
<?php if($_SESSION['overrec'] == on){?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

   <!-- DataTables -->
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
</head>

<?php include 'common/body.php'; ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'common/header.php'; ?>
        <?php include 'common/sidebar.php'; ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                   <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title-left">
                                    <h4 class="mb-2">&ensp;Discount Out</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Records</li>
                                            <li class="breadcrumb-item active">Discount Out</li>
                                        </ol>
                                    </div>
                                    
                                    <div class="page-title-right">
                                    
                                    <ol class="breadcrumb m-0">
                                        <li><button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Records Menu</button></li>&ensp;
                                        &ensp;&ensp;
                                        <li><a href="fl_ovdisc_in" class="btn btn-success waves-effect waves-light">&ensp;In&ensp;</a></li>&ensp;
                                        <li><a href="fl_ovdisc_out" class="btn btn-danger waves-effect waves-light"> Out </a></li>&ensp;
                                    </ol>
                                        
                                    
                                    <!-- Modal -->
                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalCenterTitle">Records Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                        <div class="button-items" style="text-align:center;">
                                            <a href="fl_ovpk_in"><button type="button" class="btn btn-info waves-effect waves-light">PK</button></a>&nbsp;
                                            <a href="fl_ovps_in"><button type="button" class="btn btn-info waves-effect waves-light">PS</button></a>&nbsp;
                                            <a href="fl_ovdisc_in"><button type="button" class="btn btn-info waves-effect waves-light">DISCOUNT</button></a>&nbsp;
                                            <a href="fl_ovpurchase_in"><button type="button" class="btn btn-info waves-effect waves-light">PURCHASES</button></a>&nbsp;
                                            <a href="fl_ovcuscredit_in"><button type="button" class="btn btn-info waves-effect waves-light">CUSTOMERS CREDIT</button></a>&nbsp;
                                            <a href="fl_ovempcredit_in"><button type="button" class="btn btn-info waves-effect waves-light">EMPLOYEES CREDIT</button></a>
                                            <a href="fl_ovlehcredit_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">LEHMANN CREDIT</button></a>&nbsp;
                                            <a href="fl_ovcashremit_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">CASH REMIT</button></a>&nbsp;
                                            <a href="fl_ovcashreturn_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">CASH RETURN</button></a>&nbsp;
                                            <a href="fl_ovbankdepo_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">BANK DEPOSIT</button></a>&nbsp;
                                            <a href="fl_ovprifamily_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">PRIVATE FAMILY</button></a>&nbsp;
                                            <a href="fl_ovcrecard_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">CREDIT CARD</button></a>&nbsp;
                                            <a href="fl_ovdebcard_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">DEBIT CARD</button></a>&nbsp;
                                            <a href="fl_ovchecks_in"><button type="button" class="btn btn-info waves-effect waves-light mt-3">CHECKS</button></a>
                                          <!--  <a href="dailyRecords_v2_cashierin.php"><button type="button" class="btn btn-info waves-effect waves-light">CASHIER</button></a>-->
                                            
                                        </div>
                                    </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th style="width:1%;">#</th>
                                                <th style="width:5%;">Date</th>
                                                <th>Branch</th>
                                                <th>Title</th>
                                                <th>Amount Out</th>   
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $i = 1;
                                                $format = "M d Y";
                                                $res = $MySQLiconn->query("SELECT * FROM tb1 JOIN tbdisc2 ON tbdisc2.tb1_id=tb1.id WHERE discout2 NOT IN (' ')");
                                                while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td><?php echo $i; $i++;?></td>
                                                <td style="width:15%;"><?php echo date_format(date_create($row['f1']), $format); ?></td>
                                                <td><?php echo ucwords(strtolower($row['f2'])); ?></td>
                                                <td><?php echo ucwords(strtolower($row['discout1'])); ?></td>
                                                <td>₱ <?php echo number_format($row['discout2'],2); ?></td>
                                            </tr>
                                            <?php
                                            } 
                                            ?>
                                            <?php
                                                $format = "M d Y";
                                                $res = $MySQLiconn->query("SELECT * FROM tb1 JOIN tbdisc2 ON tbdisc2.tb1_id=tb1.id WHERE discout4 NOT IN (' ')");
                                                while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td><?php echo $i; $i++;?></td>
                                                <td style="width:15%;"><?php echo date_format(date_create($row['f1']), $format); ?></td>
                                                <td><?php echo ucwords(strtolower($row['f2'])); ?></td>
                                                <td><?php echo ucwords(strtolower($row['discout3'])); ?></td>
                                                <td>₱ <?php echo number_format($row['discout4'],2); ?>
                                                
                                            </tr>
                                            <?php
                                            } 
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                       


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php'; ?>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Time -->
    <script src="assets/js/time.js"></script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Session timeout js -->
    <script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
    <!-- Session timeout js -->
    <script src="assets/js/pages/session-timeout.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "order": [[ 0, "desc" ]],
        dom: 
        "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
        "<'row'<'col-sm-12'tr>>" +
        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",

 
        buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                }
            },
            
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },

        ]

     } );
    } );
</script>

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['overrec'] != on)
{
    header('location:error404');
    exit;
}
?>