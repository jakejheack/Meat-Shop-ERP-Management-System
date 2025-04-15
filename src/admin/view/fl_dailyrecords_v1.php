<?php include 'common/session.php'; ?>
<?php if($_SESSION['records1'] == on){?>
<?php include '../controller/fl_dailyrecords_v1.php'; ?>
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
                                    <h4 class="mb-2">&ensp;Daily Records</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Daily Records</li>
                                            <li class="breadcrumb-item active">v1.0</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <!-- Status -->
                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                            <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
                            <script>
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: '<?php echo $_SESSION['success_message2']; ?>',
                                showConfirmButton: false,
                                timer: 2000
                                })
                            </script>
                        <?php unset($_SESSION['success_message']); } ?>

                    <?php if (isset($_SESSION['warning_message']) && !empty($_SESSION['warning_message'])) { ?>
                        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
                        <script>
                            Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: '<?php echo $_SESSION['warning_message2']; ?>',
                            showConfirmButton: false,
                            timer: 2000
                            })
                        </script>
                    <?php unset($_SESSION['warning_message']); } ?>
                        <!-- End Status -->
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th width="50">Date</th>
                                                <th>Store Name</th>
                                                <th>Total Sale</th>
                                                <th width="40">Status</th>
                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th width="20" style="text-align:center">Action</th>
                                            <?php } ?>

                                            </tr>
                                            </thead>
        
                                              
                                            <tbody>
                                            <?php
                                                $res = $MySQLiconn->query("SELECT * FROM dailyrecords ORDER BY dailyDate DESC");
                                                while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td><?php echo date('M-d-Y h:i a', strtotime($row['dailyDate'])); ?></td>
                                                <td><?php echo $row['dailyStore']; ?></td>
                                                <td><?php echo $row['totalSale']; ?></td>
                                                <td><?php echo $row['dailyStatus']; ?></td>

                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td style="text-align:center">
                                                    <div class="action-btn">
                                                    <?php if($_SESSION['viewbut'] == on){?>
                                                        <a href="fl_dailyrecords_v1_form?view=<?php echo $row['dailyID']; ?>" class="text-primary" title="view"><i class="mdi mdi-eye-outline" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                        <a href="?del=<?php echo $row['dailyID']; ?>" onclick="return confirm('sure to delete !'); " class="text-dark ml-2" title="delete"><i class="mdi mdi-delete-variant" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    </div>
                                                </td>
                                            <?php } ?>
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
                        columns: [ 0, 1, 2, 3, 4, 5, 6]
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
                        columns: [ 0, 1, 2, 3, 4, 5, 6]
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
if($_SESSION['records1'] != on)
{
    header('location:error404');
    exit;
}
?>