<?php include 'common/session.php'; ?>
<?php if($_SESSION['dashinv'] == on){?>
<?php
$enabledallProduct = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStatus='Enabled';" ) );
$enableddaetProduct = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStore='Daet' AND productStatus='Enabled';" ) );
$enabledmagsaysayProduct = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStore='Magsaysay' AND productStatus='Enabled';" ) );
$enabledyashanoProduct = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE  productStore='Yashano' AND productStatus='Enabled';" ) );

$disabledallProduct = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStatus='Disabled';" ) );
$disableddaetProduct= mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStore='Daet' AND productStatus='Disabled';" ) );
$disabledmagsaysayProduct= mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStore='Magsaysay' AND productStatus='Disabled';" ) );
$disabledyashanoProduct= mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM product_inventory WHERE productStore='Yashano' AND productStatus='Disabled';" ) );

?>
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
                            <h4 class="mb-2">&ensp;Products Dashboard</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Products Dashboard</li>
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
                                <div class="uil uil-store" style="font-size:30px;color:#f46a6a;"> </div>
                            </div>
                            <div>
                                <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $enabledallProduct ?></span></h4>
                                <p class="text-muted mb-0">All Store</p>
                                <p class="text-muted mb-0">Inactive: <?php echo $disabledallProduct ?></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col-->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end mt-2">
                                <div class="uil uil-store" style="font-size:30px;color:#50a5f1;"> </div>                                    </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $enableddaetProduct ?></span></h4>
                                    <p class="text-muted mb-0">Daet</p>
                                    <p class="text-muted mb-0">Inactive: <?php echo $disableddaetProduct ?></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="uil uil-store" style="font-size:30px;color:#f1b44c;"></div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $enabledmagsaysayProduct ?></span></h4>
                                    <p class="text-muted mb-0">Magsaysay</p>
                                    <p class="text-muted mb-0">Inactive: <?php echo $disabledmagsaysayProduct ?></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-md-6 col-xl-3">

                        <div class="card">
                            <div class="card-body">
                                <div class="float-end mt-2">
                                    <div class="uil uil-store" style="font-size:30px;color:#34c38f;"></div>
                                </div>
                                <div>
                                    <h4 class="mb-1 mt-1"><span data-plugin="counterup"><?php echo $enabledyashanoProduct ?></span></h4>
                                    <p class="text-muted mb-0">Yashano</p>
                                    <p class="text-muted mb-0">Inactive: <?php echo $disabledyashanoProduct ?></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->



                <div class="row">
                   <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Recent Products</h4><br>
                            <div class="table-responsive">
                                <table class="table table-sm m-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>SKU</th>
                                            <th>Product Name</th>
                                            <th>Stock</th>
                                            <th>Store</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $res = $MySQLiconn->query("SELECT * FROM product_inventory ORDER BY productID DESC  LIMIT 7;");
                                        while($row=$res->fetch_array()){                                       
                                        ?>
                                        <tr>
                                            <th><?php echo substr($row['productID'],6); ?></th>
                                            <td><?php echo $row['productSku']; ?></td>
                                            <td><?php echo utf8_encode(ucwords(strtolower($row['productName']))); ?></td>
                                            <td><?php echo $row['productStock']; ?></td>
                                            <td><?php echo $row['productStore']; ?></td>
                                        </tr>
                                        <?php
                                        } 
                                        ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>
               <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Active Product Chart</h4><br>
                        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div> <!-- end col-->  
            <!-- End Pie -->
        </div>







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
<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<script>// pie chart

    var options = {
      chart: {
          height: 320,
          type: 'pie',
      }, 
      series: [<?php echo $enableddaetProduct ?>, <?php echo $enabledmagsaysayProduct ?>,<?php echo $enabledyashanoProduct ?>],
      labels: ["Daet", "Magsaysay", "Yashano Mall"],
      colors: ["#f1b44c", "#5b73e8", "#34c38f"],
      legend: {
          show: true,
          position: 'bottom',
          horizontalAlign: 'center',
          verticalAlign: 'middle',
          floating: false,
          fontSize: '14px',
          offsetX: 0
      },
      responsive: [{
          breakpoint: 600,
          options: {
              chart: {
                  height: 240
              },
              legend: {
                  show: false
              },
          }
      }]

  }

  var chart = new ApexCharts(
      document.querySelector("#pie_chart"),
      options
      );

  chart.render();
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['dashinv'] != on)
{
    header('location:error404');
    exit;
}
?>