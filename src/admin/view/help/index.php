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
<a href="../../../">
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
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-xl-flex">

                                            <div class="w-100">
                                                <div class="p-lg-1">

                                                    <div id="intro" class="mb-5">
                                                        <h4 class="mt-0 mb-4">Introduction</h4>

                                                        <p>
                                                            Thank you for purchasing Enterprise Resource Planning (<strong>ERP System</strong>).
                                                        </p>
                                                        <p>
                                                            <strong>ERP</strong> is an information system solution to manage and plan all business functions and resources efficiently. Systems enabled to integrate all primary processes to enhance efficiency and maintain a competitive position.
                                                        </p>
                                                        <p>
                                                        </p>
                                                        <p>
                                                            Admin and Employee were the primary users of the system were other administrative access for different users for security and confidentiality. It minimized the paper works and created an automated environment, and it allows centralized reporting across the department, consequently saving hours and money.
                                                        </p>
                                                        <p>
                                                            It was a better way to communicate and manage information. It minimized the redundancy, repeated data entry, sources of wastage and facilitated job hiring in the company.
                                                        </p>
                                                        <p>
                                                            If you have any questions that are beyond the scope of this
                                                            documentation, please feel free to email or contact us via our
                                                            profile page or sent email on <code>ingra.developer@gmail.com</code>
                                                        </p>
                                                    </div>

                                                    <div id="structure" class="mb-5">
                                                        <h5 class="mt-0 mb-3">📁 Folder & Files Structure</h5>

                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <pre class="mb-0">
                                                                    ├── admin
                                                                    ├── view
                                                                    ├── common
                                                                    ├── body.php
                                                                    ├── footer.php
                                                                    ├── head-css.php
                                                                    ├── headDT.php
                                                                    ├── maintenance.php
                                                                    ├── printFunction.php
                                                                    ├── qrCode.min.js
                                                                    ├── query.php
                                                                    ├── scriptDT.php
                                                                    ├── status.css
                                                                    ├── status2.php
                                                                    ├── title-meta.php
                                                                    └── vendor-scripts.php
                                                                    ├── customers_data
                                                                    ├── customersProfile_view.php
                                                                    ├── customersProfile_row.php
                                                                    ├── customersProfile_modal.php
                                                                    ├── customersProfile_edit.php
                                                                    ├── customersProfile_add.php
                                                                    ├── customersProfile.php
                                                                    ├── customersPaid.php
                                                                    ├── customersBalance.php
                                                                    ├── customersAccount_row.php
                                                                    ├── customersAccount_modal.php
                                                                    ├── customersAccount_edit_photo.php
                                                                    ├── customersAccount_edit.php
                                                                    ├── customersAccount_delete.php
                                                                    ├── customersAccount_add.php
                                                                    └──index.php
                                                                    ├── dashboard
                                                                    └── index.php
                                                                    ├── employees_schedule
                                                                    ├── libs (Assets)
                                                                    ├── res  (Resources)
                                                                    ├── composer.json
                                                                    ├── download.php
                                                                    ├── gantt.css
                                                                    ├── gantt.php
                                                                    ├── ganttDrawerSVG.js
                                                                    ├── ganttGridEditor.js
                                                                    ├── ganttPrint.css
                                                                    ├── ganttTask.js
                                                                    ├── ganttTestSuite.js
                                                                    ├── ganttUtilities.js
                                                                    ├── ganttZoom.js
                                                                    ├── platform.css
                                                                    ├── schedules.php
                                                                    ├── schedules_add.php
                                                                    ├── schedules_delete.php
                                                                    ├── schedules_edit.php
                                                                    ├── schedules_edit_photo.php
                                                                    ├── schedules_modal.php
                                                                    └── schedules_row.php
                                                                    ├── extra
                                                                    ├── department.php
                                                                    ├── designation.php
                                                                    ├── dishType.php
                                                                    ├── employmentStatus.php
                                                                    ├── fileManager.php
                                                                    ├── leaveDescription.php
                                                                    ├── localization.php
                                                                    ├── newsletter.php
                                                                    ├── newsletter_form.php
                                                                    ├── paymentMethod.php
                                                                    ├── paymentType.php
                                                                    ├── performanceDesc.php
                                                                    ├── productCategory.php
                                                                    ├── supplyDist.php
                                                                    ├── units.php
                                                                    ├── users.php
                                                                    ├── users_form.php
                                                                    ├── website.php
                                                                    ├── website_form.php
                                                                    ├── websiteMessage.php
                                                                    └── websiteMessage_from.php
                                                                    ├── fileManager
                                                                    ├── config.php
                                                                    ├── tinyfilemanager.php
                                                                    └── translation.json
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_bankdepoin.php
                                                                    ├── dailyRecords_v2_bankdepoout.php
                                                                    ├── dailyRecords_v2_cashremitin.php
                                                                    ├── dailyRecords_v2_cashremitout.php
                                                                    ├── dailyRecords_v2_cashreturnin.php
                                                                    ├── dailyRecords_v2_cashreturnout.php
                                                                    ├── dailyRecords_v2_checksin.php
                                                                    ├── dailyRecords_v2_checksout.php
                                                                    ├── dailyRecords_v2_complete.php
                                                                    ├── dailyRecords_v2_crecardin.php
                                                                    ├── dailyRecords_v2_crecardout.php
                                                                    ├── dailyRecords_v2_cuscreitin.php
                                                                    ├── dailyRecords_v2_cuscreditout.php
                                                                    ├── dailyRecords_v2_debcardin.php
                                                                    ├── dailyRecords_v2_debcardout.php
                                                                    ├── dailyRecords_v2_discin.php
                                                                    ├── dailyRecords_v2_discout.php
                                                                    ├── dailyRecords_v2_empcreditin.php
                                                                    ├── dailyRecords_v2_empcreditout.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── dailyRecords_v2_lehcreditin.php
                                                                    ├── dailyRecords_v2_lehcreditout.php
                                                                    ├── dailyRecords_v2_pkin.php
                                                                    ├── dailyRecords_v2_pkout.php
                                                                    ├── dailyRecords_v2_prifamilyin.php
                                                                    ├── dailyRecords_v2_prifamilyout.php
                                                                    ├── dailyRecords_v2_psin.php
                                                                    ├── dailyRecords_v2_psout.php
                                                                    ├── dailyRecords_v2_purchasein.php
                                                                    ├── dailyRecords_v2_purchaseout.php
                                                                    ├── dailyRecords_v2_settings.php
                                                                    ├── deduction.php
                                                                    ├── deduction_form.php
                                                                    ├── download.php
                                                                    ├── download2.php
                                                                    ├── overview_allstore.php
                                                                    ├── overview_daet.php
                                                                    ├── overview_magsaysay.php
                                                                    └── overview_yashano.php
                                                                    ├── guide
                                                                    └── pages-starter.php
                                                                    ├── human_resource
                                                                    ├── calendar.php
                                                                    ├── calendar_form.php
                                                                    ├── email.php
                                                                    ├── jobApplication.php
                                                                    ├── jobApplication_form.php
                                                                    ├── jobApply.php
                                                                    ├── jobApply_form.php
                                                                    ├── jobDashboard.php
                                                                    ├── jobHired.php
                                                                    ├── jobHired_form.php
                                                                    ├── jobInterview_form.php
                                                                    ├── jobPending.php
                                                                    ├── jobVacancies.php
                                                                    ├── jobVacancies_form.php
                                                                    ├── leaves.php
                                                                    ├── leaves_form.php
                                                                    ├── messagesEmail.php
                                                                    ├── performanceAdd.php
                                                                    ├── performanceData.php
                                                                    ├── performanceView.php
                                                                    ├── sendsms.php
                                                                    ├── travelrequestData.php
                                                                    └──  travelrequestForm.php
                                                                    ├── logs
                                                                    ├── logs.php
                                                                    ├── logs_add.php
                                                                    ├── logs_delete.php
                                                                    ├── logs_edit.php
                                                                    ├── logs_modal.php
                                                                    └── logs_row.php
                                                                    ├── partials
                                                                    ├── includes
                                                                    ├── attendance_modal.php
                                                                    ├── cashadvance_modal.php
                                                                    ├── deduction_modal.php
                                                                    ├── employee_modal.php
                                                                    ├── employee_schedule_modal.php
                                                                    ├── overtime_modal.php
                                                                    ├── position_modal.php
                                                                    ├── schedule_modal.php
                                                                    └──  timezone.php
                                                                    ├── attendance.php
                                                                    ├── attendance_add.php
                                                                    ├── attendance_delete.php
                                                                    ├── attendance_edit.php
                                                                    ├── attendance_home.php
                                                                    ├── attendace_row.php
                                                                    ├── cashadvance.php
                                                                    ├── cashadvance_add.php
                                                                    ├── cashadvance_delete.php
                                                                    ├── cashadvance_edit.php
                                                                    ├── cashadvance_edit.php
                                                                    ├── cashadvance_row.php
                                                                    ├── deduction.php
                                                                    ├── deduction_add.php
                                                                    ├── deduction_delete.php
                                                                    ├── deduction_edit.php
                                                                    ├── deduction_row.php
                                                                    ├── employee.php
                                                                    ├── employee_add.php
                                                                    ├── employee_delete.php
                                                                    ├── employee_edit.php
                                                                    ├── employee_edit_photo.php
                                                                    ├── employee_id.php
                                                                    ├── employee_idpro.php
                                                                    ├── employee_profile.php
                                                                    ├── employee_row.php
                                                                    ├── idMaker.php
                                                                    ├── overtime.php
                                                                    ├── overtime_add.php
                                                                    ├── overtime_delete.php
                                                                    ├── overtime_edit.php
                                                                    ├── overtime_row.php
                                                                    ├── payroll.php
                                                                    ├── payroll_generate.php
                                                                    ├── payslip_generate.php
                                                                    ├── position.php
                                                                    ├── position_add.php
                                                                    ├── position_delete.php
                                                                    ├── position_edit.php
                                                                    ├── position_row.php
                                                                    ├── schedule.php
                                                                    ├── schedule_delete.php
                                                                    ├── schedule_edit.php
                                                                    ├── schedule_employee.php
                                                                    ├── schedule_employee_edit.php
                                                                    ├── schedule_employee_row.php
                                                                    ├── schedule_print.php
                                                                    └── shcedule_row.php
                                                                    ├── product_resources
                                                                    ├── addProduct_form.php
                                                                    ├── calctest.php
                                                                    ├── calculator.php
                                                                    ├── calculator_form.php
                                                                    ├── calculatorOne.php
                                                                    ├── calculatorOne_form.php
                                                                    ├── inventoryAll.php
                                                                    ├── inventoryDaet.php
                                                                    ├── inventoryMagsaysay.php
                                                                    ├── inventoryYashano.php
                                                                    ├── recipe.php
                                                                    ├── recipe_form.php
                                                                    ├── recipe_inventory.php
                                                                    ├── recipe_inventory_add.php
                                                                    ├── recipe_inventory_delete.php
                                                                    ├── recipe_inventory_edit.php
                                                                    ├── recipe_inventory_modal.php
                                                                    ├── recipe_inventory_row.php
                                                                    ├── scaleManager.php
                                                                    ├── sdCalendar.php
                                                                    ├── sdCalendar_form.php
                                                                    ├── sdOrders.php
                                                                    ├── sdOrders_form.php
                                                                    ├── sdProfile.php
                                                                    └── sdProfile_form.php
                                                                    ├── settings
                                                                    ├── settings.php
                                                                    └──  settings_form.php
                                                                    └──  uploads ( All Files save here)

                                                                    ├── controller
                                                                    ├── customers_data
                                                                    └── customersProfile.php
                                                                    ├── extra
                                                                    ├── department.php
                                                                    ├── designation.php
                                                                    ├── dishType.php
                                                                    ├── employeePosition.php
                                                                    ├── employmentStatus.php
                                                                    ├── leaveDescription.php
                                                                    ├── newsletter.php
                                                                    ├── overtimeDescription.php
                                                                    ├── paymentType.php
                                                                    ├── performanceDesc.php
                                                                    ├── productCategory.php
                                                                    ├── supplyDist.php
                                                                    ├── units.php
                                                                    ├── users.php
                                                                    ├── website.php
                                                                    └── websiteMessage.php
                                                                    ├── financial
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_settings.php
                                                                    └──  deduction.php
                                                                    ├── human_resource
                                                                    ├── attendanceLogs.php
                                                                    ├── calendar.php
                                                                    ├── employee.php
                                                                    ├── jobApplication.php
                                                                    ├── jobApply.php
                                                                    ├── jobHired.php
                                                                    ├── jobInterview.php
                                                                    ├── jobVacancies.php
                                                                    ├── leaves.php
                                                                    ├── overtime.php
                                                                    ├── performance.php
                                                                    └── travelRequest.php
                                                                    ├── product_resources
                                                                    ├── addProduct.php
                                                                    ├── calculator.php
                                                                    ├── calculatorOne.php
                                                                    ├── caltest.php
                                                                    ├── recipe.php
                                                                    ├── sdCalendar.php
                                                                    ├── sdOrders.php
                                                                    ├── sdProfile.php
                                                                    └── supp_dist.php
                                                                    ├── settings
                                                                    └── settings.php
                                                                    └── website
                                                                    ├── jobApply.php
                                                                    ├── jobVacancies.php
                                                                    ├── newsletter.php
                                                                    └── websiteMessage.php

                                                                    ├── assets (Site Assets & Resources)
                                                                    ├── scss
                                                                    ├── js
                                                                    ├── images
                                                                    └── fonts

                                                                    ├── attendance
                                                                    ├── assets (Site Assets & Resources)
                                                                    ├── attendance.php
                                                                    ├── header.php
                                                                    ├── index.php
                                                                    ├── scripts.php
                                                                    └── timezone.php
                                                                    ├── cashier_daet
                                                                    ├── controller
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── view
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    ├── cashier_magsaysay
                                                                    ├── controller
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── view
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    ├── cashier_yashano
                                                                    ├── controller
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── view
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    ├── developer
                                                                    └── view
                                                                    ├── common
                                                                    ├── body.php
                                                                    ├── footer.php
                                                                    ├── head-css.php
                                                                    ├── menu.php
                                                                    ├── printFunction.php
                                                                    ├── query.php
                                                                    ├── status.css
                                                                    ├── title-meta.php
                                                                    └── vendor-scripts.php
                                                                    ├── developer
                                                                    ├── index.php
                                                                    └── serverStatus.php
                                                                    ├── fileManager
                                                                    ├── config.php
                                                                    ├── tinyfilemanager.php
                                                                    └── translation.json   
                                                                    └── logs
                                                                    ├── logs.php
                                                                    ├── logs_add.php
                                                                    ├── logs_delete.php
                                                                    ├── logs_edit.php
                                                                    ├── logs_modal.php
                                                                    └── logs_row.php
                                                                    ├── manager_daet
                                                                    ├── controller
                                                                    ├── customers_data
                                                                    └── customersProfile.php
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── supp_dist.php
                                                                    └── view
                                                                    ├── common
                                                                    ├── body.php
                                                                    ├── footer.php
                                                                    ├── head-css.php
                                                                    ├── headDT.php
                                                                    ├── menu.php
                                                                    ├── printFunction.php
                                                                    ├── query.php
                                                                    ├── scriptDT.php
                                                                    ├── status.css
                                                                    ├── status2.php
                                                                    ├── title-meta.php
                                                                    └── vendor-scripts.php
                                                                    ├── customers_data
                                                                    ├── customersAccount.php
                                                                    ├── customersAccount_add.php
                                                                    ├── customersAccount_delete.php
                                                                    ├── customersAccount_edit.php
                                                                    ├── customersAccount_edit_photo.php
                                                                    ├── customersAccount_modal.php
                                                                    ├── customersAccount_row.php
                                                                    ├── customersBalance.php
                                                                    ├── customersPaid.php
                                                                    ├── customersProfile.php
                                                                    ├── customersProfile_add.php
                                                                    ├── customersProfile_delete.php
                                                                    ├── customersProfile_edit.php
                                                                    ├── customersProfile_modal.php
                                                                    ├── customersProfile_row.php
                                                                    ├── customersProfile_view.php
                                                                    └── download.php
                                                                    ├── employees_schedule
                                                                    ├── libs (Assets)
                                                                    ├── res  (Resources)
                                                                    ├── composer.json
                                                                    ├── download.php
                                                                    ├── gantt.css
                                                                    ├── gantt.php
                                                                    ├── ganttDrawerSVG.js
                                                                    ├── ganttGridEditor.js
                                                                    ├── ganttPrint.css
                                                                    ├── ganttTask.js
                                                                    ├── ganttTestSuite.js
                                                                    ├── ganttUtilities.js
                                                                    ├── ganttZoom.js
                                                                    ├── platform.css
                                                                    ├── schedules.php
                                                                    ├── schedules_add.php
                                                                    ├── schedules_delete.php
                                                                    ├── schedules_edit.php
                                                                    ├── schedules_edit_photo.php
                                                                    ├── schedules_modal.php
                                                                    └── schedules_row.php
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── sdProfile_form.php
                                                                    ├── manager_magsaysay
                                                                    ├── controller
                                                                    ├── customers_data
                                                                    └── customersProfile.php
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── supp_dist.php
                                                                    └── view
                                                                    ├── common
                                                                    ├── body.php
                                                                    ├── footer.php
                                                                    ├── head-css.php
                                                                    ├── headDT.php
                                                                    ├── menu.php
                                                                    ├── printFunction.php
                                                                    ├── query.php
                                                                    ├── scriptDT.php
                                                                    ├── status.css
                                                                    ├── status2.php
                                                                    ├── title-meta.php
                                                                    └── vendor-scripts.php
                                                                    ├── customers_data
                                                                    ├── customersAccount.php
                                                                    ├── customersAccount_add.php
                                                                    ├── customersAccount_delete.php
                                                                    ├── customersAccount_edit.php
                                                                    ├── customersAccount_edit_photo.php
                                                                    ├── customersAccount_modal.php
                                                                    ├── customersAccount_row.php
                                                                    ├── customersBalance.php
                                                                    ├── customersPaid.php
                                                                    ├── customersProfile.php
                                                                    ├── customersProfile_add.php
                                                                    ├── customersProfile_delete.php
                                                                    ├── customersProfile_edit.php
                                                                    ├── customersProfile_modal.php
                                                                    ├── customersProfile_row.php
                                                                    ├── customersProfile_view.php
                                                                    └── download.php
                                                                    ├── employees_schedule
                                                                    ├── libs (Assets)
                                                                    ├── res  (Resources)
                                                                    ├── composer.json
                                                                    ├── download.php
                                                                    ├── gantt.css
                                                                    ├── gantt.php
                                                                    ├── ganttDrawerSVG.js
                                                                    ├── ganttGridEditor.js
                                                                    ├── ganttPrint.css
                                                                    ├── ganttTask.js
                                                                    ├── ganttTestSuite.js
                                                                    ├── ganttUtilities.js
                                                                    ├── ganttZoom.js
                                                                    ├── platform.css
                                                                    ├── schedules.php
                                                                    ├── schedules_add.php
                                                                    ├── schedules_delete.php
                                                                    ├── schedules_edit.php
                                                                    ├── schedules_edit_photo.php
                                                                    ├── schedules_modal.php
                                                                    └── schedules_row.php
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── sdProfile_form.php
                                                                    ├── manager_yashano
                                                                    ├── controller
                                                                    ├── customers_data
                                                                    └── customersProfile.php
                                                                    ├── financial
                                                                    └── dailyRecords_v2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── supp_dist.php
                                                                    └── view
                                                                    ├── common
                                                                    ├── body.php
                                                                    ├── footer.php
                                                                    ├── head-css.php
                                                                    ├── headDT.php
                                                                    ├── menu.php
                                                                    ├── printFunction.php
                                                                    ├── query.php
                                                                    ├── scriptDT.php
                                                                    ├── status.css
                                                                    ├── status2.php
                                                                    ├── title-meta.php
                                                                    └── vendor-scripts.php
                                                                    ├── customers_data
                                                                    ├── customersAccount.php
                                                                    ├── customersAccount_add.php
                                                                    ├── customersAccount_delete.php
                                                                    ├── customersAccount_edit.php
                                                                    ├── customersAccount_edit_photo.php
                                                                    ├── customersAccount_modal.php
                                                                    ├── customersAccount_row.php
                                                                    ├── customersBalance.php
                                                                    ├── customersPaid.php
                                                                    ├── customersProfile.php
                                                                    ├── customersProfile_add.php
                                                                    ├── customersProfile_delete.php
                                                                    ├── customersProfile_edit.php
                                                                    ├── customersProfile_modal.php
                                                                    ├── customersProfile_row.php
                                                                    ├── customersProfile_view.php
                                                                    └── download.php
                                                                    ├── employees_schedule
                                                                    ├── libs (Assets)
                                                                    ├── res  (Resources)
                                                                    ├── composer.json
                                                                    ├── download.php
                                                                    ├── gantt.css
                                                                    ├── gantt.php
                                                                    ├── ganttDrawerSVG.js
                                                                    ├── ganttGridEditor.js
                                                                    ├── ganttPrint.css
                                                                    ├── ganttTask.js
                                                                    ├── ganttTestSuite.js
                                                                    ├── ganttUtilities.js
                                                                    ├── ganttZoom.js
                                                                    ├── platform.css
                                                                    ├── schedules.php
                                                                    ├── schedules_add.php
                                                                    ├── schedules_delete.php
                                                                    ├── schedules_edit.php
                                                                    ├── schedules_edit_photo.php
                                                                    ├── schedules_modal.php
                                                                    └── schedules_row.php
                                                                    ├── financial
                                                                    ├── dailyQuery.php
                                                                    ├── dailyRecords_v2.php
                                                                    ├── dailyRecords_v2_form.php
                                                                    ├── download.php
                                                                    └── download2.php
                                                                    └── product_resources
                                                                    ├── sdProfile.php
                                                                    └── sdProfile_form.php
                                                                    └── index.php


                                                                </pre>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div> <!-- end padding-->
                                            </div>

                                            <!-- Start right-side-nav -->
                                            <div class="d-none d-xl-block">
                                                <div class="right-side-nav">
                                                    <ul class="nav nav-pills flex-column">
                                                        <li class="nav-item">
                                                            <a href="#intro" class="nav-link">Introduction</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#structure" class="nav-link">Folder & Files Structure</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end card body-->
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