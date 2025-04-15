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
                                                    <h4 id="link_product_inventory" class="mt-0 mb-4">{ Products Inventory }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Dashboard</h5>
                                                        <p>
                                                            <code>/view/product_resources/inventoryAll.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/product_dashboard.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                            </div> 
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Recent Added Products</strong> - product latest created.<br>
                                                                        2. <strong style="color:#F5A829;">Product Stock</strong> - number of stock per store.<br>
                                                                        3. <strong style="color:#8B572A;">Active Product Percentage</strong> - percentage of active products.<br>
                                                                        4. <strong style="color:#84D42D;">Detailed Recent Added Products</strong> - detailed added products.<br>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-5">
                                                        <h5 class="mt-3">Product Inventory</h5>
                                                        <p>
                                                            <code>/view/product_resources/inventoryYashano.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/product_inventory.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                            </div> 
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">SKU</strong> - product sku.<br>
                                                                        2. <strong style="color:#F5A829;">Product Name</strong> - name of product.<br>
                                                                        3. <strong style="color:#F8E71C;">Stock</strong> - number of stock.<br>
                                                                        4. <strong style="color:#8B572A;">Price</strong> - product price.<br>
                                                                        5. <strong style="color:#84D42D;">Retail</strong> - product price in retail.<br>
                                                                        6. <strong style="color:#BD10E0;">Category</strong> - category of product.<br>
                                                                        7. <strong style="color:#000000;">Status</strong> - status either enabled or disabled.<br>
                                                                        8. <strong style="color:#4A90E2;">Action</strong> - button: view, edit and delete the report.<br>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h4 id="link_calculator" class="mt-0 mb-4">{ Calculator }</h4>
                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Calculator 1</h5>
                                                        <p>
                                                            <code>/view/product_resources/calculatorOne.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/calculator1.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <img src="assets/images/calculator1_aadd.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Date & Title</strong> - date & title of your report.<br>
                                                                        2. <strong style="color:#F5A829;">Recovery</strong> - recovery rate.<br>
                                                                        3. <strong style="color:#F8E71C;">Live Weight</strong> - the weight of an animal before it has been slaughtered and prepared as a carcass.<br>
                                                                        4. <strong style="color:#8B572A;">Carcass Weight</strong> - Dressed weight refers to the weight of an animal after being partially butchered, removing all the internal organs and oftentimes the head as well as inedible portions of the tail and legs.<br>
                                                                        5. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Calculator 2</h5>
                                                        <p>
                                                            <code>/view/product_resources/calculator.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/calculator2.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Date & Title</strong> - date & title of your report.<br>
                                                                        2. <strong style="color:#F5A829;">Weight</strong> - total weight.<br>
                                                                        3. <strong style="color:#F8E71C;">Total Retail</strong> - product retail price.<br>
                                                                        4. <strong style="color:#84D42D;">Total Canteen</strong> - product canteen price.<br>
                                                                        5. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="mt-3">
                                                                        <img src="assets/images/calculator2_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <p>
                                                                        <div class="mt-3">
                                                                            <strong>Note: </strong> all input field are made in auto generated and cannot be change.
                                                                        </div>
                                                                    </div>
                                                                </p>
                                                                
                                                            </div>
                                                        </div>


                                                        <h4 id="link_recipe" class="mt-0 mb-4">{ Lehmann Recipe }</h4>
                                                        <div class="mb-5">
                                                            <h5 class="mt-4">Inventory</h5>
                                                            <p>
                                                                <code>/view/product_resources/recipe_inventory.php</code>
                                                            </p>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <img src="assets/images/recipe_inventory1.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                    <img src="assets/images/recipe_inventory_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                </div>
                                                                <div class="col-12">
                                                                    <p>
                                                                        <div class="mt-3">
                                                                            1. <strong  style="color:#D0021B;">Status</strong> - status of inventory enabled or disabled.<br>
                                                                            2. <strong style="color:#F5A829;">Stock</strong> - number of stock product.<br>
                                                                            3. <strong style="color:#F8E71C;">Product Name</strong> - name of product.<br>
                                                                            4. <strong style="color:#8B572A;">Weight & Unit</strong> - weight and unit of product.<br>
                                                                            6. <strong style="color:#84D42D;">Price</strong> - product price.<br>
                                                                            7. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                        </div>
                                                                    </div>                                                    </div>
                                                                </div>

                                                                <div class="mb-5">
                                                                    <h5 class="mt-4">Recipe</h5>
                                                                    <p>
                                                                        <code>/view/product_resources/recipe.php</code>
                                                                    </p>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <img src="assets/images/recipe.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <p>
                                                                                <div class="mt-3">
                                                                                    1. <strong  style="color:#D0021B;">Date Created</strong> - recipe date created.<br>
                                                                                    2. <strong style="color:#F5A829;">Recipe Name</strong> - name of recipe.<br>
                                                                                    3. <strong style="color:#8B572A;">Dish Type</strong> - recipe type.<br>
                                                                                    4. <strong style="color:#84D42D;">Total Cost</strong> - total cost of recipe.<br>
                                                                                    5. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                                    <div class="col-12">
                                                                                        <div class="mt-3">
                                                                                            <img src="assets/images/recipe_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <p>
                                                                                            <div class="mt-3">
                                                                                                <strong>Note: </strong> all input field are made in auto generated and cannot be change.
                                                                                            </div>
                                                                                        </div>
                                                                                    </p>
                                                                                </div>
                                                                            </div>                                                    </div>
                                                                        </div>

                                                                        <h4 id="link_dist" class="mt-0 mb-4">{ Supplier & Distributor }</h4>

                                                                        <div class="mb-5">
                                                                            <h5 class="mt-4">Profile List</h5>
                                                                            <p>
                                                                                <code>/view/product_resources/sdProfile.php</code>
                                                                            </p>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <img src="assets/images/distributor.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                                                </div> 
                                                                                <div class="col-12">
                                                                                    <p>
                                                                                        <div class="mt-3">
                                                                                            1. <strong  style="color:#D0021B;">Buttons</strong> - you can add and print report.<br>
                                                                                            2. <strong style="color:#F5A829;">Customers Details</strong> - Supp & Distributor details.<br>
                                                                                            3. <strong style="color:#F8E71C;">Category</strong> - business category.<br>
                                                                                            4. <strong style="color:#8B572A;">Type</strong> - personal or business.<br>
                                                                                            5. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                                        </div>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-5">
                                                                            <h5 class="mt-4">Order List</h5>
                                                                            <p>
                                                                                <code>/view/product_resources/sdOrders.php</code>
                                                                            </p>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <img src="assets/images/order_list.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                                                </div> 
                                                                                <div class="col-12">
                                                                                    <p>
                                                                                        <div class="mt-3">
                                                                                            1. <strong  style="color:#D0021B;">Buttons</strong> - you can add and print report.<br>
                                                                                            2. <strong style="color:#F5A829;">Order Date</strong> - date of order created.<br>
                                                                                            3. <strong style="color:#F8E71C;">Business Name</strong> - name of business.<br>
                                                                                            4. <strong style="color:#8B572A;">Total</strong> - total amount of order.<br>
                                                                                            5. <strong style="color:#84D42D;">Type</strong> - order status like pending or complete.<br>
                                                                                            6. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                                        </div>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-5">
                                                                            <h5 class="mt-4">Calendar</h5>
                                                                            <p>
                                                                                <code>/view/product_resources/sdCalendar.php</code>
                                                                            </p>
                                                                            <div class="row">
                                                                                <div class="col-12">
                                                                                    <img src="assets/images/order_calendar.png" alt="image" class="img-fluid shadow" style="width: 120vh;" />
                                                                                </div> 
                                                                                <div class="col-12">
                                                                                    <p>
                                                                                        <div class="mt-3">
                                                                                            <strong>Note: </strong> where you can put your schedule into one place calendar.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                        </div>

                                                                        <!-- Start right-side-nav -->
                                                                        <div class="d-none d-xl-block">
                                                                            <div class="right-side-nav">
                                                                                <ul class="nav nav-pills flex-column">
                                                                                    <li class="nav-item">
                                                                                        <a href="#link_product_inventory" class="nav-link">Product Inventory</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a href="#link_calculator" class="nav-link">Calculator</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a href="#link_recipe" class="nav-link">Lehmann Recipe</a>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a href="#link_dist" class="nav-link">Supp & Distributor</a>
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