<?php include 'common/session.php' ?>
<?php if($_SESSION['dashatt'] == on){?>
<?php 
include '../../../system/timezone.php'; 
$today = date('Y-m-d');
$year = date('Y');
if(isset($_GET['year'])){
    $year = $_GET['year'];
}
?>
<!doctype html>
<html lang="en">

<head>
 <?php include 'common/title.php' ?> 
 <?php include 'common/status2.php' ?>
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
                            <h4 class="mb-2">&ensp;Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Attendance Dashboard</li>
                            </ol>
                        </div>

                      <?php if($_SESSION['attlogs'] == on){?>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li><a href="hr_attlogs" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-account-clock mr-2"></i>&nbsp;&nbsp;Attendance Logs </a></li>&ensp;
                            </ol>
                        </div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <!-- end page title --> 


            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div class="mdi mdi-office-building-outline" style="font-size:30px;color:#f46a6a;"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1">
                                    <span data-plugin="counterup">
                                        <?php
                                        $sql = "SELECT * FROM employees";
                                        $query = $conn->query($sql);

                                        echo "<h4>".$query->num_rows."</h4>";
                                        ?>
                                    </span>
                                </h4>
                                <p class="text-muted mb-0">Total Employee</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div class="mdi mdi-percent-outline" style="font-size:30px;color:#50a5f1;"> </div>                                    </div>
                                <div>
                                    <h4 class="mb-1 mt-1">
                                        <span data-plugin="counterup">
                                          <?php
                                          $sql = "SELECT * FROM attendance";
                                          $query = $conn->query($sql);
                                          $total = $query->num_rows;

                                          $sql = "SELECT * FROM attendance WHERE status = 1";
                                          $query = $conn->query($sql);
                                          $early = $query->num_rows;

                                          $percentage = ($early/$total)*100;

                                          echo "<h4>".number_format($percentage)."</h4>";
                                          ?>
                                      </span>
                                  </h4>
                                  <p class="text-muted mb-0">On Time Percentage</p>
                              </div>
                          </div>
                      </div>
                  </div> <!-- end col-->

                  <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div class="mdi mdi-account-convert" style="font-size:30px;color:#f1b44c;"></div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1">
                                    <span data-plugin="counterup">
                                       <?php
                                       $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 1";
                                       $query = $conn->query($sql);

                                       echo "<h4>".$query->num_rows."</h4>"
                                       ?>
                                   </span>
                               </h4>
                               <p class="text-muted mb-0">On Time Today</p>
                           </div>
                       </div>
                   </div>
               </div> <!-- end col-->

               <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body">
                        <div class="float-end mt-2">
                            <div class="mdi mdi-account-convert" style="font-size:30px;color:#34c38f;"></div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1">
                                <span data-plugin="counterup">
                                   <?php
                                   $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 0";
                                   $query = $conn->query($sql);

                                   echo "<h4>".$query->num_rows."</h4>"
                                   ?>
                               </span>
                           </h4>
                           <p class="text-muted mb-0">Late Today</p>
                       </div>
                   </div>
               </div>
           </div> <!-- end col-->
       </div> <!-- end row-->

       <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="mt-2">
                                <label class="form-label"><h5>Attendance Chart</h5> </label>

                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="mt-2">
                                <label style="font-size: 12px;text-align: right;">Select Year:</label>
                            </div>
                        </div>

                        <div class="col-md-2" style="position:relative; text-align: right;font-weight: bold;">
                            <div class="mt-1">
                                <form class="form-inline">
                                    <select class="form-control" id="select_year">
                                        <?php
                                        $dateCurrent = date('Y');
                                        for($i=2020; $i<=$dateCurrent; $i++){
                                            $selected = ($i==$year)?'selected':'';
                                            echo "
                                            <option value='".$i."' ".$selected.">".$i."</option>
                                            ";
                                        }
                                        ?>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-12" style="text-align: center;">
                            <br>
                            <div class="chart">                               
                                <canvas id="barChart" style="height:150px"></canvas>
                                <div class="mt-1">
                                    <div id="legend" class="text-center"></div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-1">
                            <div class="avatar-md mx-auto rounded my-2" style="width:20px;height:20px;background-color:#D2D6DE;"></div>
                        </div>
                        <div class="col-1 mt-1">
                            <span><b>Late</b></span> 
                        </div>

                        <div class="col-1">
                            <div class="avatar-md mx-auto rounded my-2" style="width:20px;height:20px;background-color:#00A65A;"></div>                                
                        </div>
                        <div class="col-1 mt-1">
                            <span><b>Ontime</b></span>
                        </div>
                        <div class="col-4"></div>
                    </div>
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

<script src="assets/bower_components/chart.js/Chart.js"></script>
<!-- Chart Data -->
<?php
$and = 'AND YEAR(date) = '.$year;
$months = array();
$ontime = array();
$late = array();
for( $m = 1; $m <= 12; $m++ ) {
    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 1 $and";
    $oquery = $conn->query($sql);
    array_push($ontime, $oquery->num_rows);

    $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 0 $and";
    $lquery = $conn->query($sql);
    array_push($late, $lquery->num_rows);

    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
}

$months = json_encode($months);
$late = json_encode($late);
$ontime = json_encode($ontime);

?>
<!-- End Chart Data -->
<script>
    $(function(){
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChart = new Chart(barChartCanvas)
      var barChartData = {
        labels  : <?php echo $months; ?>,
        datasets: [
        {
            label               : 'Late',
            fillColor           : 'rgba(210, 214, 222, 1)',
            strokeColor         : 'rgba(210, 214, 222, 1)',
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : <?php echo $late; ?>
        },
        {
            label               : 'Ontime',
            fillColor           : 'rgba(60,141,188,0.9)',
            strokeColor         : 'rgba(60,141,188,0.8)',
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : <?php echo $ontime; ?>
        }
        ]
    }
    barChartData.datasets[1].fillColor   = '#00a65a'
    barChartData.datasets[1].strokeColor = '#00a65a'
    barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero        : true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines      : true,
    //String - Colour of the grid lines
    scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //Number - Width of the grid lines
    scaleGridLineWidth      : 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines  : true,
    //Boolean - If there is a stroke on each bar
    barShowStroke           : true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth          : 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing         : 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing       : 1,
    //String - A legend template
    legendTemplate          : ' ', //Boolean - whether to make the chart responsive
    responsive              : true,
    maintainAspectRatio     : true
}

barChartOptions.datasetFill = false
var myChart = barChart.Bar(barChartData, barChartOptions)
document.getElementById('legend').innerHTML = myChart.generateLegend();
});
</script>
<script>
    $(function(){
      $('#select_year').change(function(){
        window.location.href = 'hr_attdashboard?year='+$(this).val();
    });
  });
</script>

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['dashatt'] != on)
{
    header('location:error404');
    exit;
}
?>