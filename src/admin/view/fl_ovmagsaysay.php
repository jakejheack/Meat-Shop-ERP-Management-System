<?php include 'common/session.php'; ?>
<?php if($_SESSION['overall'] == on){?>
<?php include '../../../system/ovconnect.php'; ?>

<?php
$result = mysqli_query($conn,"select year(f1) as year, month(f1) as month, 
sum(scale) as ws, 
sum(sobra) as sobra, 
sum(difference) as difference, 
sum(totalSale) as totalSale, 
sum(pkin) as tbpkin, sum(pkout) as tbpkout, 
sum(psin) as tbpsin, sum(psout) as tbpsout, 
sum(discin) as tbdiscin, sum(discout) as tbdiscout, 
sum(chickin) as tbchickin, sum(chickout) as tbchickout,
sum(cuscreditin) as tbcuscreditin, sum(cuscreditout) as tbcuscreditout, 
sum(epcreditin) as tbempcreditin, sum(epcreditout) as tbempcreditout, 
sum(lehcreditin) as tblehcreditin, sum(lehcreditout) as tblehcreditout, 
sum(remitin) as tbcashremitin, sum(remitout) as tbcashremitout, 
sum(cashin) as tbcashreturnin, sum(cashout) as tbcashreturnout,
sum(bankdepoin) as tbbankdepoin, sum(bankdepoout) as tbbankdepoout,
sum(prfamilyin) as tbprifamilyin, sum(prfamilyout) as tbprifamilyout,
sum(crcardin) as tbcrecardin, sum(crcardout) as tbcrecardout,
sum(dccardin) as tbdebcardin, sum(dccardout) as tbdebcardout,
sum(checksin) as tbchecksin, sum(checksout) tbchecksout
from tb1 WHERE f3='Complete' AND f2='Magsaysay'
group by year(f1), month(f1) ORDER BY f1 DESC");
?>
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

   <!-- Responsive Table css -->
    <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
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
                                    <h4 class="mb-2">&ensp;Overview Magsaysay</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Daily Overview</li>
                                            <li class="breadcrumb-item active">Magsaysay</li>
                                        </ol>
                                    </div>
                                    
                                    <div class="page-title-right">
                                    
                                    <ol class="breadcrumb m-0">
                                        <li><a href="fl_ovallstore" class="btn btn-primary waves-effect waves-light">All</a></li>&ensp;
                                        <li><a href="fl_ovdaet" class="btn btn-primary waves-effect waves-light">Daet</a></li>&ensp;
                                        <li><a href="fl_ovmagsaysay" class="btn btn-primary waves-effect waves-light"> Magsaysay </a></li>&ensp;
                                        <li><a href="fl_ovyashano" class="btn btn-primary waves-effect waves-light">Yashano</a></li>&ensp;&ensp;&ensp;
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="table-rep-plugin compact">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="example" class="table">
                                                    <thead>
                                                      <tr class="thCenter table-warning">
                                                        <th rowspan="1">Year & Month</th>
                                                        <th data-priority="2" colspan="1">W. Scale</th>
                                                        <th data-priority="3" colspan="1">Sobra</th>
                                                        <th data-priority="4" colspan="1">Difference</th>
                                                        <th data-priority="5" colspan="1">Total Sale</th>
                                                        <th data-priority="6" colspan="2" >PK</th>
                                                        <th data-priority="7" colspan="2">PS</th>
                                                        <th data-priority="8" colspan="2">Discount</th>
                                                        <th data-priority="9" colspan="2">Purchase</th>
                                                        <th data-priority="10" colspan="2">Customers Credit</th>
                                                        <th data-priority="11" colspan="2">Employees Credit</th>
                                                        <th data-priority="12" colspan="2">Lehmann Credit</th>
                                                        <th data-priority="13" colspan="2">Cash Remit</th>
                                                        <th data-priority="14" colspan="2">Cash Return  </th>
                                                        <th data-priority="15" colspan="2">Bank Deposit</th>
                                                        <th data-priority="16" colspan="2">Private Family</th>
                                                        <th data-priority="17" colspan="2">Credit Card</th>
                                                        <th data-priority="18" colspan="2">Debit Card</th>
                                                        <th data-priority="19   " colspan="2">Checks</th>
                                                      </tr>
                                                   <tr class="thINOUT table-success">
                                                       <th></th>
                                               <th></th>
                                               <th></th>
                                               <th></th>
                                               <th></th>
                                               <th>IN</th>
                                               <th>OUT</th>
                                               <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                               <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                               <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                               <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                       <th>IN</th>
                                               <th>OUT</th>
                                                  </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                     $i=0;
                                                     while($row = mysqli_fetch_array($result)) {
                                                         $monthNum  = $row["month"];
                                                         $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                                                         $monthName = $dateObj->format('F');
                                                    ?>
                                                    <tr>
                                             <td><?php echo $row["year"]; ?> <?php echo $monthName; ?></td>
                                             <td><?php echo number_format ($row["ws"],2); ?></td>
                                             <td><?php echo number_format ($row ["sobra"],2); ?></td>
                                             <td><?php echo number_format ($row["difference"],2); ?></td>
                                             <td><?php echo number_format ($row["totalSale"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbpkin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbpkout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbpsin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbpsout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbdiscin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbdiscout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbchickin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbchickout"],2); ?></td>
                                             <td><?php echo number_format ($row["tbcuscreditin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcuscreditout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbempcreditin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbempcreditout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tblehcreditin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tblehcreditout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcashremitin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcashremitout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcashreturnin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcashreturnout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbbankdepoin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbbankdepoout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbprifamilyin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbprifamilyout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcrecardin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbcrecardout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbdebcardin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbdebcardout"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbchecksin"],2); ?></td>   
                                             <td><?php echo number_format ($row["tbchecksout"],2); ?></td>   
                                                    </tr>
                                                     <?php
                                                           $i++;
                                                       }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
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

    <!-- Responsive Table js -->
    <script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
    <!-- Init js -->
    <script src="assets/js/pages/table-responsive.init.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['overall'] != on)
{
    header('location:error404');
    exit;
}
?>
