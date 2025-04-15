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
                                                    <h4 id="link_login" class="mt-0 mb-4">{ Login }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4"><i class="mdi mdi-star text-warning"></i> What is login used for?</h5>
                                                        <p>
                                                            Alternatively referred to as a sign in or login is a set of credentials used to gain access to an area requiring proper authorization.
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <img src="assets/images/login.PNG" alt="image" class="img-fluid shadow" style="width: 60vh;" />
                                                            </div>
                                                            <div class="col-6">
                                                                <p>
                                                                    <div class="mt-2">
                                                                        1. <strong>Username</strong> - An identification used by a person with access.<br><br>
                                                                        2. <strong>Password</strong> - A secret word or phrase that must be used to gain admission to something.
                                                                    </div>
                                                                    <div class="mt-5">
                                                                        <strong>Note:</strong>  Credentials will be given by the administrator registered in the user's tab. <a href="extra.php#link_users" target="_blank">Here</a>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h4 id="link_dashboard" class="mt-0 mb-4">{ Dashboard }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Overview</h5>
                                                        <p>
                                                            A dashboard is a type of graphical user interface which often provides at-a-glance views of key performance indicators relevant to a particular objective or business process. In other usage, "dashboard" is another name for "progress report" or "report" and considered a form of data visualization.
                                                        </p>
                                                    </div>

                                                    <div id="prerequisites" class="mb-5">
                                                        <h5 class="mt-4">Body Parts</h5>
                                                        <p>
                                                            Parts are separated into four.
                                                        </p>
                                                        <img src="assets/images/dashboard.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                        <div class="mt-4"></div>
                                                        <ul>
                                                            <li>
                                                                <strong>1. Header</strong>
                                                                <p>
                                                                    It is from the top page of the site where the function includes logo, time, notification, and dropdown button where you can log out your account.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <strong>2. Menu</strong>
                                                                <p>
                                                                    It is the primary essential in the site where they redirect you from the website's different pages.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <strong>3. Content</strong>
                                                                <p>
                                                                    It includes various information gathered in one place from different pages: employees status, daily records reports, products inventory percentage, latest transaction, and weather in the area.
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <strong>4. Footer</strong>
                                                                <p>
                                                                  Watermark in the website where author or company indicates.  
                                                              </p>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>

                                              <!-- Start right-side-nav -->
                                              <div class="d-none d-xl-block">
                                                <div class="right-side-nav">
                                                    <ul class="nav nav-pills flex-column">
                                                        <li class="nav-item">
                                                            <a href="#link_login" class="nav-link">Login</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#link_dashboard" class="nav-link">Dashboard</a>
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