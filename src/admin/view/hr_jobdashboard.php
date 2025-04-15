<?php include 'common/session.php' ?>
<?php if($_SESSION['dashportal'] == on){?>
<?php
$job_pending = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE stat='Pending';" ) );
$job_interview = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE stat='Interview';" ) );
$job_vacancies = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_vacancies WHERE stat='Enabled';" ) );
$job_hired = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE stat='Hired';" ) );
?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<?php include 'common/body.php' ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'common/header.php' ?>
        <?php include 'common/sidebar.php' ?>



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
                                    <h4 class="mb-2">&ensp;Job Portal Dashboard</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div class="mdi mdi-form-select" style="font-size:30px;color:#f46a6a;"> </div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $job_pending ?></span></h4>
                                        <p class="text-muted mb-0">Application</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div class="mdi mdi-record-rec" style="font-size:30px;color:#50a5f1;"> </div>                                    </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $job_interview ?></span></h4>
                                            <p class="text-muted mb-0">Interview</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div class="mdi mdi-office-building-marker-outline" style="font-size:30px;color:#f1b44c;"></div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $job_vacancies ?></span></h4>
                                            <p class="text-muted mb-0">Vacancies</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end mt-2">
                                            <div class="mdi mdi-human-queue" style="font-size:30px;color:#34c38f;"></div>
                                        </div>
                                        <div>
                                            <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $job_hired ?></span></h4>
                                            <p class="text-muted mb-0">Hired</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div> <!-- end row-->

                         <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="page-title-box d-flex align-items-center justify-content-between">
                                        <div class="page-title-left">
                                            <h4 class="card-title mb-4">Recent Applicant</h4>
                                        </div>
                                    
                                        <div class="page-title-right mb-4">
                                            <a href="hr_jobapply"><button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">View Details</button></a>
                                        </div>
                                        </div>
                                        
                                         
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Job Title & Branch</th>
                                                        <th>Applicant Name</th>
                                                        <th>Contact</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $res = $MySQLiconn->query("SELECT * FROM job_apply ORDER BY id DESC LIMIT 10");
                                                    while($row=$res->fetch_array()){  
                                                ?>
                                                    <tr>
                                                        <td><?php echo date('M-d-Y', strtotime($row['created_on'])); ?></td>
                                                        <td><?php echo ucwords($row['posposition']); ?></td>
                                                        <td><?php echo ucwords($row['fullname']); ?></td>
                                                        <td><?php echo $row['contact']; ?></td>
                                                        <td><?php echo $row['stat']; ?></td>
                                                    </tr>
                                                    <?php
                                                    } 
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php' ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php' ?>

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

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['dashportal'] != on)
{
    header('location:error404');
    exit;
}
?>