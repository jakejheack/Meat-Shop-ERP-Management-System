<?php include 'common/session.php' ?>
<?php if($_SESSION['dash2'] == on){?>
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
                            <h4 class="mb-0">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
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
                                    <div class="ul uil-building" style="font-size:30px;color:#f46a6a;"> </div>
                                </div>
                                <div>
                                  <h4 class="mb-1 mt-1"><span data-plugin="counterup">
                                    <?php $sql = "SELECT * FROM employees"; $query = $conn->query($sql); echo "<h4>".$query->num_rows."</h4>"; ?></span></h4> <p class="text-muted mb-0">Total Employee</p>
                                  </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="mdi mdi-gender-male" style="font-size:30px;color:#50a5f1;"> </div>                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $dash_totalMale ?></span></h4>
                                        <p class="text-muted mb-0">Male</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div class="mdi mdi-gender-female" style="font-size:30px;color:#f1b44c;"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $dash_totalFemale ?></span></h4>
                                        <p class="text-muted mb-0">Female</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">

                            <div class="card">
                                <div class="card-body">
                                    <div class="float-end mt-2">
                                        <div class="uil uil-user-square" style="font-size:30px;color:#34c38f;"></div>
                                    </div>
                                    <div>
                                        <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $dash_inactive ?></span></h4>
                                        <p class="text-muted mb-0">Inactive Profile</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Daily Records Overview</h4><br><br>

                                    <div class="mt-1" style="text-align: center;">
                                        <ul class="list-inline main-chart mb-0">
                                            <li class="list-inline-item chart-border-left mr-0 border-0">
                                                <?php 
                                                    $dy = date("Y");
                                                    $a=$conn->query("select *, sum(totalSale) as total_sales from tb1 WHERE f3='Complete' AND f1=".$dy);
                                                while($arow=$a->fetch_array()){
                                                    ?>
                                                    <h3 class="text-primary">₱<?php echo number_format($arow['total_sales'],2); ?>
                                                </span><span class="text-muted d-inline-block font-size-15 ml-3">Total Sales</h3>
                                                <?php 
                                            }
                                            ?>
                                        </li>
                                        <li class="list-inline-item chart-border-left mr-0">
                                            <h3><span data-plugin="counterup"><?php echo $dailyPendingRecords ?></span><span class="text-muted d-inline-block font-size-15 ml-3">Pending Records</span>
                                            </h3>
                                        </li>

                                        <li class="list-inline-item chart-border-left mr-0">
                                            <h3><span data-plugin="counterup"><?php echo $dailyTotalRecords ?></span><span class="text-muted d-inline-block font-size-15 ml-3">Total Records</span>
                                            </h3>
                                        </li>

                                    </ul>
                                </div>
                                <br><br><br>
                                <div class="mt-3">
                                    <canvas  id="chartjs_bar"></canvas>
                                </div>
                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                             <h4 class="card-title mb-4">Store Active Products</h4>
                             <div id="pie_chart" class="apex-charts" dir="ltr"></div>

                         </div> <!-- end card-body-->
                     </div> <!-- end card-->

                     <div class="card">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/13d62123d19/naga/" data-label_1="NAGA CITY" data-label_2="WEATHER" data-font="Trebuchet MS" data-icons="Climacons Animated" data-theme="white_leather" >NAGA CITY WEATHER</a>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>
                    </div>
                 </div> <!-- end Col -->
             </div> <!-- end row-->


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

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['dash2'] != on)
{
    header('location:error404');
    exit;
}
?>