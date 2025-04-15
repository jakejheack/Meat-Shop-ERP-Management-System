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
                                                    <h4 id="link_customers_profile" class="mt-0 mb-4">{ Customers Profile }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Customers Profile</h5>
                                                        <p>
                                                            <code>/view/customers_data/customersProfile.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/customers_profile.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                            </div> 

                                                            <div class="col-6">
                                                                <div class="mt-4">
                                                                    <img src="assets/images/customers_profile_add.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                                </div>
                                                            </div> 
                                                            <div class="col-6">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Customers Name</strong> - name of the customer.<br>
                                                                        2. <strong style="color:#F5A829;">Tin number</strong> - customer tin number.<br>
                                                                        3. <strong style="color:#F8E71C;">Contact</strong> - customer contact details.<br>
                                                                        4. <strong style="color:#8B572A;">Due</strong> - date of credit from start to end.<br>
                                                                        5. <strong style="color:#BD10E0;">Amount Limit</strong> - amount will be credit.<br>
                                                                        6. <strong style="color:#000000;">Address</strong> - customer address.<br>
                                                                        7. <strong style="color:#50E3C2;">Type</strong> - profile type business or personal.<br>
                                                                        8. <strong style="color:#50E3C2;">Status</strong> - enabled or disabled the profile.<br>
                                                                        9. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 id="link_customers_payment" class="mt-0 mb-4">{ Customers Payment }</h4>
                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Customers Payment</h5>
                                                        <p>
                                                            <code>/view/customers_data/customersAccount.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/customers_payment.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Buttons</strong> - this buttons will direct you to another page.<br>
                                                                        2. <strong style="color:#F5A829;">Date</strong> - transaction date.<br>
                                                                        3. <strong style="color:#F8E71C;">Transaction Number</strong> - transaction number.<br>
                                                                        4. <strong style="color:#8B572A;">Customer Name</strong> - name of the customer.<br>
                                                                        5. <strong style="color:#84D42D;">Type</strong> - type will be credit or paid.<br>
                                                                        6. <strong style="color:#BD10E0;">Amount</strong> - amount credit or paid.<br>
                                                                        7. <strong style="color:#50E3C2;">Method</strong> - method of payment.<br>
                                                                        8. <strong style="color:#000000;">Notes</strong> - transaction notes.<br>
                                                                        9. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Check Balance</h5>
                                                        <p>
                                                            <code>/view/customers_data/customersBalance.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/check_balance.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        <strong>Note:</strong> Customers total available balance, you need to change type into credit to display the amount of customers here.

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
                                                                <a href="#link_customers_profile" class="nav-link">Customers Profile</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#link_customers_payment" class="nav-link">Customers Payment</a>
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