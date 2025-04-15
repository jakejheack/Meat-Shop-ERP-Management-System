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

                                                    <h4 class="mt-0 mb-4">Setup ERP System</h4>

                                                    <div id="desc" class="mb-5">
                                                        <h5 class="mt-4">Introduction</h5>
                                                        <p>
                                                            We are using
                                                            <a href="https://gulpjs.com/" target="_blank">PHP</a> (Hypertext Preprocessor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites. It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data. 
                                                            Please follow below steps to install and setup all
                                                            prerequisites:
                                                        </p>
                                                    </div>

                                                    <div id="prerequisites" class="mb-5">
                                                        <h5 class="mt-4">Prerequisites</h5>

                                                        <p>
                                                            Please follow below steps to install and setup all
                                                            prerequisites for Standalone/Offline Mode:
                                                        </p>


                                                        <ul>
                                                            <li>
                                                                <strong>Wamp Server</strong>
                                                                <p>
                                                                    Go to the official WAMP server website <a href="http://www.wampserver.com/en/" target="_blank">here</a> and download the 
                                                                    WampServer setup according to your Windows 10 version. If you have 64bit then download 
                                                                    the Wamp server (x64) otherwise the 32-bit (X86). To check your Windows 10 version right.
                                                                    <br>
                                                                    Guide for installation <a href="https://blog.templatetoaster.com/how-to-install-wamp/" target="_blank">CLICK HERE</a>
                                                                </p>
                                                            </li>
                                                            <li>
                                                                <strong>Files</strong>

                                                                <p>Make sure to have the files to import in hosting services.</p>
                                                            </li>
                                                        </ul>
                                                        <p>
                                                            Please follow below steps to install and setup all
                                                            prerequisites for Hosting/Online Mode:
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                <strong>Hosting Services</strong>
                                                                <p>
                                                                    Is a service that runs servers connected to the Internet, allowing organizations and individuals to serve content or host services connected to the Internet. A common kind of hosting is web <a href="https://www.hostinger.ph/" target="_blank">hostinger</a>,<a href="https://www.godaddy.com/en-ph" target="_blank"> godaddy</a>,<a href="https://www.bluehost.com/" target="_blank"> bluehost</a>, and etc. </p>
                                                                </li>
                                                                <li>
                                                                    <strong>Domain Name</strong>
                                                                    <p>
                                                                    Refers to your website address. This is what users type in a browser's search bar to directly access your website. A domain name is unique and cannot be shared between different sites.. (you can find it on hosting service as package or separate.) </p>
                                                                </li>

                                                                <li>
                                                                    <strong>Files</strong>

                                                                    <p>Make sure to have the files to import in hosting services.</p>
                                                                </li>

                                                            </ul>
                                                        </div>

                                                        <div id="installation">
                                                            <h5 class="mt-4">Installation</h5>

                                                            <p>
                                                                To setup the admin theme, follow below-mentioned steps:
                                                            </p>

                                                            <ul>
                                                                <li>
                                                                    <strong>Install Prerequisites</strong>
                                                                    <p>
                                                                        Make sure to have all above prerequisites installed
                                                                        &amp; running on your computer
                                                                    </p>
                                                                </li>

                                                            </ul>


                                                            <p class="mt-4">
                                                                After you finished with the above steps, you can run the
                                                                following commands into the terminal / command prompt from the
                                                                root directory of the project to run the project locally or
                                                                build for
                                                                production use:
                                                            </p>
                                                            <table class="table table-bordered m-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 20%;">
                                                                            <i class="ti-file"></i>Title</th>
                                                                            <th>Description</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <code>Offline</code>
                                                                            </td>
                                                                            <td>
                                                                                Paste your files in designated folder of wamp directory and import your database in phpmyadmin. then start wamp server application and run <a href="http://localhost">http://localhost</a
                                                                                    Add >.
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <code>Online</code>
                                                                                </td>
                                                                                <td>
                                                                                    Import your files in hosting services <a href="https://www.hostinger.ph/tutorials/website/how-to-upload-your-website" target="_blank">Guide for Hostinger</a>. after you import run your site in any browser by searching your domain name.
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div id="tips">
                                                                    <h5 class="mt-4">Tips</h5>

                                                                    <p>
                                                                     We suggest you do not change any files or rename them from the original files given by the developer. Any changes will encounter an error or data loss. We strongly suggest you contact the developer to change the following files needed.
                                                                 </p>

                                                             </div>
                                                         </div>

                                                         <!-- Start right-side-nav -->
                                                         <div class="d-none d-xl-block">
                                                            <div class="right-side-nav">
                                                                <ul class="nav nav-pills flex-column">
                                                                    <li class="nav-item">
                                                                        <a href="#desc" class="nav-link">Description</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#prerequisites" class="nav-link">Prerequisites</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#installation" class="nav-link">Installation</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#tips" class="nav-link">Tips</a>
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

                    <?php } ?>
                    <?php 
                    if($_SESSION['branch'] != Administrator)
                    {
                        header('location:../error404');
                        exit;
                    }
                    ?>