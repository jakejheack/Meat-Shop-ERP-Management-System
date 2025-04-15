<?php include 'common/session.php'; ?>
<?php if($_SESSION['records3'] == on){?>
    <?php include '../controller/fl_dailyrecords_v3.php'; ?>
    <!doctype html>
    <html lang="en">

    <head>
     <?php include 'common/title.php'; ?>
     <?php include 'common/status2.php'; ?>  
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
                                <li class="breadcrumb-item active">Pending</li>
                                <li class="breadcrumb-item active">v3.0</li>
                            </ol>
                        </div>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <?php if($_SESSION['addbut'] == on && $_SESSION['branch'] == Daet || $_SESSION['branch'] == Magsaysay || $_SESSION['branch'] == Yashano){?>
                                    <li><a href="fl_dailyrecords_v3_form" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-book-check mr-2"></i> Add Records </a></li>&ensp;
                                <?php } ?>
                                <?php if($_SESSION['addbut'] == on && $_SESSION['branch'] == All){?>
                                 <li>
                                    <div class="dropdown show">
                                        <a class="btn btn-primary " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Add Records <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                      </a>

                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="fl_dailyrecords_v3_form_daet">Daet</a>
                                        <a class="dropdown-item" href="fl_dailyrecords_v3_form_magsaysay">Magsaysay</a>
                                        <a class="dropdown-item" href="fl_dailyrecords_v3_form_yashano">Yashano</a>
                                    </div>
                                </div>
                            </li>&ensp;
                        <?php } ?>
                        <?php if($_SESSION['access'] == Administrator){?>
                            <li>
                                <div class="dropdown show">
                                    <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      See More <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="fl_dailyrecords_v3">Pending</a>
                                    <a class="dropdown-item" href="fl_dailyrecords_v3_complete">Complete</a>
                                </div>
                            </div>
                        </li>&ensp;
                    <?php } ?>
                    <li><a href="#logs" data-bs-toggle="collapse" aria-expanded="false" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-check-outline mr-2"></i>Logs</a></li>
                    &ensp;
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
            timer: 10000
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
                timer: 10000
            })
        </script>
        <?php unset($_SESSION['warning_message']); } ?>
        <!-- End Status -->
        <div id="logs" class="collapse">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title"><code>Today Submit Record/s</code></h4>                            
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th style="width:0%;">#</th>
                                            <th>Date & Time</th>
                                            <th>Branch</th>
                                            <th>Status</th>
                                            <th>Cashier Name</th>
                                            <th>Record Name</th>
                                        </tr>
                                    </thead>
                                    <tbody style="zoom:90%">
                                        <?php 
                                        $i = 1;
                                        if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f3 NOT IN('Ongoing','ReCheck') AND created_on = CURDATE() ORDER BY id DESC;";
                                        } elseif ($_SESSION['branch'] == Daet) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Daet' AND  f3 NOT IN('Ongoing','ReCheck') AND created_on = CURDATE() ORDER BY id DESC;";
                                        } elseif ($_SESSION['branch'] == Manager) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Manager' AND  f3 NOT IN('Ongoing','ReCheck') AND created_on = CURDATE() ORDER BY id DESC;";
                                        } elseif ($_SESSION['branch'] == Yashano) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Yashano' AND  f3 NOT IN('Ongoing','ReCheck') AND created_on = CURDATE() ORDER BY id DESC;";
                                        }
                                        $result = mysqli_query($conn, $users);
                                        if ($result->num_rows > 0) {
                                            $i=1;
                                            while($row = $result->fetch_assoc())
                                                { ?>
                                                    <tr>
                                                        <td><?php echo $i; $i++;?></td> 
                                                        <td style="width:20%; text-transform: capitalize;"><?php echo date('M-d-Y h:i a', strtotime($row['f1'])); ?></td>
                                                        <td style="width:20%;"><?php echo $row['f2']; ?></td> 
                                                        <td style="width:20%;" class="<?php echo $row['f3']; ?>"><?php echo $row['f3']; ?></td> 
                                                        <td style="width:20%;"><?php echo ucwords(ucfirst($row['cashierDuty'])); ?></td>
                                                        <td style="width:20%;"><?php echo ucwords(ucfirst($row['recordDuty'])); ?></td>
                                                    </tr>
                                                    <?php 
                                                } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <?php if ($_SESSION['access'] == Administrator){ ?>
                                <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <?php }else{ ?>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <?php } ?>

                                    <thead>
                                        <tr>
                                            <th style="width:0%;">#</th>
                                            <th style="width:0%;"></th>
                                            <th>Date & Time</th>
                                            <th>Branch</th>
                                            <th>Cashier Name</th>
                                            <th>Manager Name</th>
                                            <?php if($_SESSION['access'] == Administrator){?>
                                                <th>Sale</th>
                                            <?php } ?>
                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th style="width: 0%;"></th>
                                            <?php } ?>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        <?php 
                                        if ($_SESSION['access'] == Administrator){
                                            $users = "SELECT * FROM tb1_v3 WHERE f3 NOT IN('Complete');";

                                        } elseif ($_SESSION['access'] == BranchControl && $_SESSION['branch'] == All) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f3 NOT IN('Complete','Pending') AND created_on = CURDATE() OR f2='Daet' AND f3 NOT IN('Complete','Pending','Ongoing');";

                                        } elseif ($_SESSION['access'] == BranchControl) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2 $_SESSION='access' AND f3 NOT IN('Complete','Pending') AND created_on = CURDATE() OR f2='Daet' AND f3 NOT IN('Complete','Pending','Ongoing');";

                                        } elseif ($_SESSION['branch'] == Daet) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Daet' AND f3 NOT IN('Complete','Pending') AND created_on = CURDATE() OR f2='Daet' AND f3 NOT IN('Complete','Pending','Ongoing');";

                                        } elseif ($_SESSION['branch'] == Magsaysay) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Magsaysay' AND f3 NOT IN('Complete','Pending') AND created_on = CURDATE() OR f2='Magsaysay' AND f3 NOT IN('Complete','Pending','Ongoing');";

                                        } elseif ($_SESSION['branch'] == Yashano) {
                                            $users = "SELECT * FROM tb1_v3 WHERE f2='Yashano' AND f3 NOT IN('Complete','Pending') AND created_on = CURDATE() OR f2='Yashano' AND f3 NOT IN('Complete','Pending','Ongoing');";
                                        } else {

                                        }                                            
                                        $result = mysqli_query($conn, $users);
                                        if ($result->num_rows > 0) {
                                            $i=1;
                                            while($row = $result->fetch_assoc())
                                                { ?> 

                                                    <tr>
                                                        <td style="width:0%;"><?php echo $row['id']; ?></td>  
                                                        <td style="width:5%;font-weight: 600;" class="<?php echo $row['f3']; ?>" title="<?php echo $row['f3']; ?>">●</td>
                                                        <td style="width:5%; text-transform: capitalize;"><?php echo date('M-d-Y h:i a', strtotime('+8 hour',strtotime($row['f1']))); ?></td>
                                                        <td style="width:5%;"><?php echo $row['f2']; ?></td>   
                                                        <td><?php echo utf8_encode(ucwords(strtolower($row['cashierDuty']))); ?></td>
                                                        <td><?php echo utf8_encode(ucwords(strtolower($row['recordDuty']))); ?></td>
                                                        <?php if($_SESSION['access'] == Administrator){?>
                                                            <td style="text-transform:capitalize;width:10%;"><?php echo $row['totalSale']; ?></td>
                                                        <?php } ?>
                                                        <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                            <td style="text-align:right" id="btnPrint">

                                                              <div class="dropdown show action-btn">
                                                                <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                  <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                                              </a>
                                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                  <?php if($_SESSION['viewbut'] == on){?>
                                                                    <a href="fl_dailyrecords_v3_form?view=<?php echo $row['id']; ?>" class="dropdown-item" title="view">View</a>
                                                                    <a href="fl_dailyrecords_v3_print?view=<?php echo $row['id']; ?>" class="dropdown-item" title="view">Print</a>
                                                                    <a href="dl_dr1_v3?path=../uploads/dailyRecords/<?php echo $row['imageText'];?>" class="dropdown-item" title="view">Download</a>
                                                                <?php } ?>
                                                                <?php if($_SESSION['editbut'] == on){?>
                                                                    <a href="fl_dailyrecords_v3_form?rid=<?php echo $row['id']; ?>" class="dropdown-item" title="edit">Edit</a>
                                                                <?php } ?>
                                                                <?php if($_SESSION['deletebut'] == on){?>
                                                                    <a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !'); " class="dropdown-item" title="delete">Delete</a>
                                                                <?php } ?>  
                                                            </div>
                                                        </div>
                                                    </td>
                                                <?php } ?>
                                            </tr> 
                                            <?php 
                                        } } ?>
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
                    columns: [ 0, 2, 3, 4, 5, 6]
                }
            },

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 2, 3, 4, 5, 6]
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
if($_SESSION['records2'] != on)
{
    header('location:error404');
    exit;
}
?>
