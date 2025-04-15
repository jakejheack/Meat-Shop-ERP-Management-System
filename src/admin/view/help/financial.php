<?php 
session_start();

if(!isset($_SESSION['id']))
{
    header('location:../../../index?lmsg=true');
    exit;
}

require_once('../../../../system/config.php');
require_once('../../../../system/conn.php');
require_once('../../../../system/connect.php');
require_once('../../../../system/drconnect.php');
?>
<?php if($_SESSION['branch'] == Administrator){?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DOCS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Skote Premium Multipurpose Admin & Dashboard Template documentation of HTML & Laravel" name="description" />
        <meta content="INGRA" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/logo_icon.png">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <body data-topbar="dark" data-spy="scroll" data-target=".right-side-nav" data-offset="175">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    &ensp;<img src="../assets/images/logo_name.png" alt="" height="35">
                                </span>
                                <span class="logo-lg">
                                    &ensp;<img src="../assets/images/logo_name.png" alt="" height="35">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect d-lg-none" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>


                    </div>

                    <div class="d-flex">

                        <div class="d-inline-block">
                            <h5 class="header-item m-0"><span class="badge badge-danger">Docs v1.0</span></h5>
                        </div>
                        
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Docs</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="mdi mdi-text-box-outline"></i>
                                    <span>Introduction</span>
                                </a>
                            </li>

                            <li>
                                <a href="setup.php" class=" waves-effect">
                                    <i class="mdi mdi-cog-outline"></i>
                                    <span>Setup</span>
                                </a>
                            </li>

                            <li class="menu-title">Manual</li>

                            <li>
                                <a href="home.php" class=" waves-effect">
                                    <i class="mdi mdi-home-circle-outline"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li>
                                <a href="human_resource.php" class=" waves-effect">
                                    <i class="mdi mdi-folder-heart-outline"></i>
                                    <span>Human Resource</span>
                                </a>
                            </li>
                            <li>
                                <a href="financial.php" class=" waves-effect">
                                    <i class="mdi mdi-account-cash-outline"></i>
                                    <span>Financial</span>
                                </a>
                            </li>
                            <li>
                                <a href="customers.php" class=" waves-effect">
                                    <i class="mdi mdi-account-box-multiple-outline"></i>
                                    <span>Customers</span>
                                </a>
                            </li>
                            <li>
                                <a href="product_resources.php" class=" waves-effect">
                                    <i class="mdi mdi-basket-unfill"></i>
                                    <span>Product Resources</span>
                                </a>
                            </li>
                            <li>
                                <a href="extra.php" class=" waves-effect">
                                    <i class="mdi mdi-hammer-wrench"></i>
                                    <span>Extra</span>
                                </a>
                            </li>
                            <li>
                                <a href="logs.php" class=" waves-effect">
                                    <i class="mdi mdi-clipboard-list-outline"></i>
                                    <span>Logs</span>
                                </a>
                            </li>

                            <li class="menu-title">Other</li>

                            <li>
                                <a href="changelog.php" class=" waves-effect">
                                    <i class="mdi mdi-format-list-bulleted"></i>
                                    <span>Changelog</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="p-lg-1">

                                            <div class="d-xl-flex">

                                                <div class="w-100">
                                                    <h4 id="link_dailyoverview" class="mt-0 mb-4">{ Daily Overview }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Records</h5>
                                                        <p>
                                                            <code>/view/financial/dailyRecords_v2_pkin.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p>
                                                                   <strong>Daily Records Category</strong>
                                                               </p>
                                                               <img src="assets/images/records_overview.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                           </div>
                                                           <div class="col-12 mt-4">
                                                            <p>
                                                               <strong>Records Overview</strong>
                                                           </p>
                                                           <img src="assets/images/records_overview2.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                       </div>
                                                       <div class="col-12">
                                                        <p>
                                                            <div class="mt-3">
                                                                1. <strong  style="color:#D0021B;">Records Menu</strong> - daily records reports summary per category.<br>
                                                                2. <strong style="color:#F5A829;">In & Out</strong> - daily records in and out transaction.<br>
                                                                3. <strong style="color:#50E3C2;">Reports Export</strong> - can export report in exel,pdf, and copy the reports.<br>
                                                                4. <strong style="color:#F8E71C;">Date</strong> - reports date created.<br>
                                                                5. <strong style="color:#8B572A;">Store</strong> - reports store located.<br>
                                                                6. <strong style="color:#84C644;">Title</strong> - title of report.<br>
                                                                7. <strong style="color:#BD10E0;">Amount</strong> - the total amount of either in or out transaction.<br>

                                                            </div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <h5 class="mt-4">Daily Overview</h5>
                                                <p>
                                                    <code>/view/financial/overview_allstore.php</code>
                                                </p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="assets/images/daily_overview.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                    </div>
                                                    <div class="col-12">
                                                        <p>
                                                           <div class="mt-3">
                                                            <strong>Note:</strong> to shown the records in overview you must need to <strong>Complete</strong> status the daily records report in <a href="https://www.lehmannstore.com/src/admin/view/financial/dailyRecords_v2.php" target="_blank">Here</a>.
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 id="link_dailyrecords" class="mt-0 mb-4">{ Daily Records }</h4>
                                        <div class="mb-5">
                                            <h5 class="mt-4">Daily Records</h5>
                                            <p>
                                                <code>/view/financial/dailyRecords_v2.php</code>
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="assets/images/daily_records.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                </div>
                                                <div class="col-12">
                                                    <p>
                                                        <div class="mt-3">
                                                            1. <strong  style="color:#D0021B;">Date & Time</strong> - records date & time created.<br>
                                                            2. <strong style="color:#F5A829;">Store</strong> - records store.<br>
                                                            3. <strong style="color:#F8E71C;">Status</strong> - status of records.<br>
                                                            4. <strong style="color:#8B572A;">Cashier Name</strong> - cashier who fill up the form.<br>
                                                            5. <strong style="color:#84D42D;">Manager Name</strong> - manager who fill up the form.<br>
                                                            6. <strong style="color:#BD10E0;">Sale</strong> - total sale of each records.<br>
                                                            7. <strong style="color:#000000;">File</strong> - downloadable file.<br>
                                                            8. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>

                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-5">
                                            <h5 class="mt-4">Add Record</h5>
                                            <p>
                                                <code>/admin/view/financial/dailyRecords_v2_form.php</code>
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="assets/images/daily_records_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                </div>
                                                <div class="col-12">
                                                    <p>
                                                        <div class="mt-3">
                                                            1. <strong  style="color:#D0021B;">Date & Time</strong> - this field is auto generated and can't be change.<br>
                                                            2. <strong style="color:#F5A829;">Status</strong> - form status either pending, complete, recheck, or complete.<br>
                                                            3. <strong style="color:#F8E71C;">Input Field</strong> - where you can input your text.<br>
                                                            4. <strong style="color:#8B572A;">Buttons</strong> - use for add or remove certain field.<br>
                                                            5. <strong style="color:#84D42D;">Total Amount</strong> - this is auto generated and calculated depends on the amount input. this area can't be change.<br>
                                                            6. <strong style="color:#BD10E0;">Logs Form</strong> - cashiers and managers remarks.<br>
                                                        </div>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 id="link_employees" class="mt-0 mb-4">{ Employees }</h4>
                                        <div class="mb-5">
                                            <h5 class="mt-4">Cash Advance</h5>
                                            <p>
                                                <code>/view/partials/cashadvance.php</code>
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="assets/images/cash_advance.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                </div>
                                                <div class="col-6">
                                                    <img src="assets/images/cash_advance_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                </div>
                                                <div class="col-6">
                                                    <p>
                                                       <div class="mt-4">
                                                        1. <strong  style="color:#D0021B;">Date</strong> - date created.<br>
                                                        2. <strong style="color:#F5A829;">Employee ID</strong> - employee identification.<br>
                                                        3. <strong style="color:#F8E71C;">Name</strong> - employee name.<br>
                                                        4. <strong style="color:#8B572A;">Amount</strong> - the amount cash adcance.<br>
                                                        5. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <h5 class="mt-4">Deduction</h5>
                                        <p>
                                            <code>/view/partials/deduction.php</code>
                                        </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="assets/images/deduction.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                            </div>
                                            <div class="col-6">
                                                <img src="assets/images/deduction_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                            </div>
                                            <div class="col-6">
                                                <p>
                                                   <div class="mt-5">
                                                    1. <strong  style="color:#D0021B;">Description</strong> - duduction description.<br>
                                                    2. <strong style="color:#F5A829;">Amount</strong> - amount deduction.<br>
                                                    3. <strong style="color:#4A90E2;">Action</strong> - button: edit and delete the report.<br>
                                                </div>
                                            </p>
                                        </div> 
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h5 class="mt-4">Position Salary</h5>
                                    <p>
                                        <code>/view/partials/position.php</code>
                                    </p>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="assets/images/position_salary.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                        </div>
                                        <div class="col-6">
                                            <img src="assets/images/position_salary_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                        </div>
                                        <div class="col-6">
                                            <p>
                                               <div class="mt-5">
                                                1. <strong  style="color:#D0021B;">Position Title</strong> - position name.<br>
                                                2. <strong style="color:#F5A829;">Rate</strong> - amount rate per hour.<br>
                                                3. <strong style="color:#4A90E2;">Action</strong> - button: edit and delete the report.<br>
                                            </div>
                                        </p>
                                    </div> 
                                </div>
                            </div>

                            <div class="mb-5">
                                <h5 class="mt-4">Payroll</h5>
                                <p>
                                    <code>/view/partials/payroll.php</code>
                                </p>
                                <div class="row">
                                    <div class="col-12">
                                        <img src="assets/images/payroll.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                    </div>
                                    <div class="col-12">
                                        <p>
                                           <div class="mt-3">
                                            1. <strong  style="color:#D0021B;">Date</strong> - start and end date to generate report of employee.<br>
                                            2. <strong style="color:#F5A829;">Buttons</strong> - use to print payroll.<br>
                                            3. <strong style="color:#F8E71C;">Employee Name</strong> - name of employee.<br>
                                            4. <strong style="color:#8B572A;">Employee ID</strong> - employee identification.<br>
                                            5. <strong style="color:#84D42D;">Amount</strong> - the amount of employee gross, deduction, cash advance, and net pay.<br>
                                        </div>
                                    </p>
                                </div> 
                            </div>
                        </div>


                    </div>

                    <!-- Start right-side-nav -->
                    <div class="d-none d-xl-block">
                        <div class="right-side-nav">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item">
                                    <a href="#link_dailyoverview" class="nav-link">Daily Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#link_dailyrecords" class="nav-link">Daily Records</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#link_employees" class="nav-link">Employees</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- End right-side-nav -->
                </div>

            </div> <!-- end padding-->
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
</div>
<!-- end row -->

</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Metzgerei-Lehmann Corp.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Author | Ingra
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['branch'] != Administrator)
{
    header('location:../error404');
    exit;
}
?>