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
                                                    <h4 id="link_employee" class="mt-0 mb-4">{ Employee }</h4>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Employee Profile</h5>
                                                        <p>
                                                            <code>/view/partials/employee.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <img src="assets/images/employee_profile.png" alt="image" class="img-fluid shadow" style="width: 60vh;" />
                                                            </div>
                                                            <div class="col-6">
                                                                <p>
                                                                    <div class="mt-5">
                                                                        1. <strong  style="color:#BD10E0;">Status</strong> - limegreen means profile is active and red means profile is inactive or disabled.<br>
                                                                        2. <strong style="color:#D0021B;">Dropdown</strong> - a button where you can find edit, edit photo, and delete.<br>
                                                                        3. <strong style="color:#F5A829;">Name</strong> - name of the person registered.<br>
                                                                        4. <strong style="color:#8B572A;">Company Position</strong> - position in the company.<br>
                                                                        5. <strong style="color:#84D42D;">Profile</strong> - it is the information sheet of the person.<br>
                                                                        6. <strong style="color:#50E3C2;">ID Card</strong> - where you can generate company id.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Performance</h5>
                                                        <p>
                                                            <code>/view/human_resource/performanceData.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/performance.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                                <img src="assets/images/performance_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#BD10E0;">Records no.</strong> - indicates the number of records in order.<br>
                                                                        2. <strong style="color:#D0021B;">Date Reported</strong> - the day records created or happened.<br>
                                                                        3. <strong style="color:#F5A829;">Employee Name</strong> - name of the person.<br>
                                                                        4. <strong style="color:#F8E71C;">Description</strong> - describe the title report.<br>
                                                                        5. <strong style="color:#8B572A;">Raiting</strong> - rate the report 5 star is the perfect score and 1 star is the lowest.<br>
                                                                        6. <strong style="color:#84D42D;">Status</strong> - status of report either complete or pending.<br>
                                                                        7. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                                        8. <strong style="color:#000000;">Notes</strong> - describe or notes of the report.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Travel Request</h5>
                                                        <p>
                                                            <code>/view/human_resource/travelrequestData.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <img src="assets/images/travel_request.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                            </div>
                                                            <div class="col-12">
                                                                <p>
                                                                    <div class="mt-3">
                                                                        1. <strong  style="color:#D0021B;">Request Date </strong> - date when form was fill up<br>
                                                                        2. <strong style="color:#F5A829;">Title</strong> - travel request title.<br>
                                                                        3. <strong style="color:#F8E71C;">Employee Name</strong> - name of the person.<br>
                                                                        4. <strong style="color:#8B572A;">Destination</strong> - travel location.<br>
                                                                        5. <strong style="color:#84D42D;">Expenses</strong> - expense that can be used in travel.<br>
                                                                        6. <strong style="color:#BD10E0;">Status</strong> - status of report either incoming or pending.<br>
                                                                        7. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>

                                                                    </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-5">
                                                        <h5 class="mt-4">Scheduler</h5>
                                                        <p>
                                                            <code>/view/employees_schedule/schedules.php</code>
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p>
                                                                   <strong>Part One</strong>
                                                               </p>
                                                               <img src="assets/images/gantt.PNG" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                           </div>
                                                           <div class="col-12">
                                                            <br>
                                                            <p>
                                                               <strong>Part Two</strong>
                                                           </p>
                                                           <img src="assets/images/schedule.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                       </div>
                                                       <div class="col-6">
                                                        <img src="assets/images/schedule_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                                    </div>
                                                    <div class="col-6">
                                                        <p>
                                                           <div class="mt-3">
                                                            1. <strong  style="color:#D0021B;">Date </strong> - today date of the form fill up<br>
                                                            2. <strong style="color:#F5A829;">Title</strong> - title of the form.<br>
                                                            3. <strong style="color:#F8E71C;">Store</strong> - store will form implement.<br>
                                                            4. <strong style="color:#8B572A;">Upload</strong> - part one file can be upload here.<br>
                                                            5. <strong style="color:#8B572A;">Download</strong> - a downloadable file of schedule.<br>
                                                            6. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                                        </div>
                                                    </p>
                                                </div>
                                                <div class="col-12">
                                                    <p>
                                                       <div class="mt-3">
                                                        <strong>Note:</strong> you need to creat a file in part one in order to upload your file in part two. this is manual save to website but it also can save in your computer. refresh the site will be loss your work.
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>



                                    <h4 id="link_jobportal" class="mt-0 mb-4">{ Job Portal }</h4>
                                    <div class="mb-5">
                                        <h5 class="mt-4">Job Dashboard</h5>
                                        <p>
                                            <code>/view/human_resource/jobDashboard.php</code>
                                        </p>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="assets/images/job_dashboard.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                            </div>
                                            <div class="col-12">
                                                <p>
                                                   <div class="mt-3">
                                                    1. <strong  style="color:#D0021B;">Pending Application </strong> - number of pending applicant.<br>
                                                    2. <strong style="color:#F5A829;">Scheduled Interview</strong> - number of incoming interview.<br>
                                                    3. <strong style="color:#F8E71C;">Enabled Vacancies</strong> - vacant job position in the company.<br>
                                                    4. <strong style="color:#8B572A;">Hired Applicant</strong> - total hired applicant in the system.<br>
                                                    5. <strong style="color:#84C644;">Date</strong> - date applicant applied.<br>
                                                    6. <strong style="color:#BD10E0;">Job Title</strong> - name of position in the company.<br>
                                                    7. <strong style="color:#50E3C2;">Applicant Name</strong> - name of person apply.<br>
                                                    8. <strong style="color:#B8E986;">Contact Name</strong> - contact person who apply.<br>
                                                    9. <strong style="color:#000000;">Email Address</strong> - contact email who apply.<br>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <h5 class="mt-4">Job Vacancies</h5>
                                    <p>
                                        <code>/view/human_resource/jobVacancies.php</code>
                                    </p>
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="assets/images/job_vacancies.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                        </div>
                                        <div class="col-12">
                                            <p>
                                               <div class="mt-3">
                                                1. <strong  style="color:#D0021B;">Date Added</strong> - date record was made.<br>
                                                2. <strong style="color:#F5A829;">Job Title</strong> - name of position in the company.<br>
                                                3. <strong style="color:#F8E71C;">NOE</strong> - number of employee need in the position.<br>
                                                4. <strong style="color:#8B572A;">Branch</strong> - job designation.<br>
                                                5. <strong style="color:#84C644;">Priority</strong> - job position priority needed in the company, high means urgent and low is fine.<br>
                                                6. <strong style="color:#BD10E0;">Status</strong> - position status either enabled or disabled.<br>
                                                7. <strong style="color:#4A90E2;">Action</strong> - button: view, edit, and delete the report.<br>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="mt-3"></div>
                                    <div class="col-12">
                                        <p>
                                            <code>/view/human_resource/jobVacancies_form.php</code>
                                        </p>
                                        <img src="assets/images/job_vacancies_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                                    </div>
                                    <div class="col-12">
                                        <p>
                                           <div class="mt-3">
                                            1. <strong  style="color:#D0021B;">Location</strong> - job location.<br>
                                            2. <strong style="color:#F5A829;">Experience</strong> - experience suited for the position.<br>
                                            3. <strong style="color:#F8E71C;">Type</strong> - job type either full time, on the job, and etc.<br>
                                            4. <strong style="color:#8B572A;">Salary</strong> - position salary or set to 0 for default.<br>
                                            5. <strong style="color:#84C644;">Job Description</strong> - description and notes in job position.<br>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p>
                                       <div class="mt-3">
                                        <strong>Note:</strong> procedures are same in Pending Application, Scheduled Interview, Application List, and Hired Applicant.
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <h4 id="link_attendance" class="mt-0 mb-4">{ Attendance }</h4>
                    <div class="mb-5">
                        <h5 class="mt-4">Dashboard</h5>
                        <p>
                            <code>/view/partials/attendance_home.php</code>
                        </p>
                        <div class="row">
                            <div class="col-12">
                                <img src="assets/images/attendance_dashboard.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                            </div>
                            <div class="col-12">
                                <p>
                                   <div class="mt-3">
                                    1. <strong  style="color:#D0021B;">Total Employee </strong> - number of employee in the company.<br>
                                    2. <strong style="color:#F5A829;">On time percentage</strong> - employee who attendance as ontime or not late.<br>
                                    3. <strong style="color:#F8E71C;">On time today</strong> - number of employee who are on time today.<br>
                                    4. <strong style="color:#8B572A;">Late Today</strong> - number of employee who are late today.<br>
                                    5. <strong style="color:#84C644;">Montly Chart</strong> - white indicates as late and green as Ontime, charts show the number of employee who are late and Ontime in the month as year.<br>
                                    
                                </div>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mb-5">
                    <h5 class="mt-4">Attendance logs</h5>
                    <p>
                        <code>/view/partials/attendance.php</code>
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <img src="assets/images/attendance_logs.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                        </div>
                        <div class="col-12">
                            <p>
                               <div class="mt-3">
                                1. <strong  style="color:#D0021B;">Date </strong> - the date that you check in.<br>
                                2. <strong style="color:#F5A829;">Employee ID</strong> - employee identification.<br>
                                3. <strong style="color:#F8E71C;">Employee</strong> - name of employee.<br>
                                4. <strong style="color:#8B572A;">Time In</strong> - time of employee time in.<br>
                                5. <strong style="color:#84C644;">Time Out</strong> - time of employee time out.<br>
                                6. <strong style="color:#4A90E2;">Action</strong> - button: edit, and delete the report.<br>
                            </div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb-5">
                <h5 class="mt-4">Time In & Out</h5>
                <p>
                    <code>/attendance/index.php</code>
                </p>
                <div class="row">
                    <div class="col-12">
                        <img src="assets/images/timeinout.png" alt="image" class="img-fluid shadow" style="width:50vh;" />
                    </div>
                    <div class="col-12">
                        <p>
                           <div class="mt-3">
                            1. <strong  style="color:#D0021B;">Input field </strong> - qr code scan by qr scanner.<br>
                            2. <strong style="color:#F5A829;">Time Status</strong> - Time In or Time Out.<br>
                        </div>
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <h5 class="mt-4">Overtime</h5>
            <p>
                <code>/view/partials/overtime.php</code>
            </p>
            <div class="row">
                <div class="col-12">
                    <img src="assets/images/overtime.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
                </div>
                <div class="col-12">
                    <p>
                       <div class="mt-3">
                        1. <strong  style="color:#D0021B;">Date </strong> - date of overtime.<br>
                        2. <strong style="color:#F5A829;">Employee ID</strong> - employee identification.<br>
                        3. <strong style="color:#F8E71C;">Name</strong> - name of employee.<br>
                        4. <strong style="color:#8B572A;">No. of Hours</strong> - overtime hours.<br>
                        5. <strong style="color:#84C644;">Rate</strong> - rate or payment of overtime.<br>
                        6. <strong style="color:#4A90E2;">Action</strong> - button: edit, and delete the report.<br>
                    </div>
                </p>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <h5 class="mt-4">Schedules</h5>
        <p>
            <code>/view/partials/schedule.php</code>
        </p>
        <div class="row">
            <div class="col-12">
                <img src="assets/images/schedules.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
            </div>
            <div class="col-6">
                <img src="assets/images/schedules_add.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
            </div>
            <div class="col-6">
                <p>
                   <div class="mt-3">
                    1. <strong  style="color:#D0021B;">Time In </strong> - start time of work.<br>
                    2. <strong style="color:#F5A829;">Time Out</strong> - end time of work.<br>
                    3. <strong style="color:#4A90E2;">Action</strong> - button: edit, and delete the report.<br>
                </div>
            </p>
        </div>
    </div>
</div>

<div class="mb-5">
    <h5 class="mt-4">Employees Schedule</h5>
    <p>
        <code>/view/partials/schedule_employee.php</code>
    </p>
    <div class="row">
        <div class="col-12">
            <img src="assets/images/employees_schedule.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-12">
            <p>
               <div class="mt-3">
                1. <strong  style="color:#D0021B;">Employee ID</strong> - employee identification.<br>
                2. <strong style="color:#F5A829;">Name</strong> - employee name.<br>
                2. <strong style="color:#F8E71C;">Schedule</strong> - employee work schedule.<br>
                3. <strong style="color:#4A90E2;">Action</strong> - button: edit the report.<br>
            </div>
        </p>
    </div>
</div>
</div>

<div class="mb-5">
    <h5 class="mt-4">Employee Leaves</h5>
    <p>
        <code>/view/human_resource/leaves.php</code>
    </p>
    <div class="row">
        <div class="col-12">
            <img src="assets/images/employee_leaves.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-12">
            <p>
               <div class="mt-3">
                1. <strong  style="color:#D0021B;">Date</strong> - date of file leave.<br>
                2. <strong style="color:#F5A829;">Employee Name</strong> - name pf employee who are in leave.<br>
                2. <strong style="color:#F8E71C;">From</strong> - date start of leave.<br>
                3. <strong style="color:#8B572A;">To</strong> - date end of leave.<br>
                4. <strong style="color:#84D42D;">Description</strong> - leave description either sick leave, maternity leave or etc..<br>
                5. <strong style="color:#BD10E0;">File</strong> - downloadable file like doctor recipt, doctor letter and etc.<br>
                3. <strong style="color:#4A90E2;">Action</strong> - button: edit and delete the report.<br>
            </div>
        </p>
    </div>
</div>
</div>

<h4 id="link_messages" class="mt-0 mb-4">{ Messages }</h4>
<div class="mb-5">
    <h5 class="mt-4">Email</h5>
    <p>
        <code>https://mail.hostinger.com/?_task=login</code>
    </p>
    <div class="row">
        <div class="col-12">
            <img src="assets/images/email.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-6">
            <img src="assets/images/email_login.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-6">
           <p>
               <div class="mt-5">
                <strong>Note:</strong> login your account registered given by the administrator. If there is no account you need to registered your custom email in hostinger services.<br><br>
                Login here to create email <a href="https://www.hostinger.ph/" target="_blank">Here</a>.<br>
                <i>see image below for next step.</i>
            </div>
        </p>
    </div>
    <div class="col-12">
       <p>
           1. <strong>Click Manage</strong>
           <img src="assets/images/hostinger1.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
   <div class="col-12">
       <p>
           2. <strong>Find emails and click email accounts</strong>
           <img src="assets/images/hostinger2.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
   <div class="col-12">
       <p>
           3. <strong>Click next arrow</strong>
           <img src="assets/images/hostinger3.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
   <div class="col-12">
       <p>
           4. <strong>Click add email account</strong>
           <img src="assets/images/hostinger4.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
   <div class="col-12">
       <p>
           5. <strong>Create your email and password you want and then click create.</strong>
           <img src="assets/images/hostinger5.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
</div>
</div>

<div class="mb-5">
    <h5 class="mt-4">SMS</h5>
    <p>
        <code>/view/human_resource/sendsms.php</code>
    </p>
    <div class="row">
        <div class="col-12">
            <p>
               1. <strong>Login Username and Password</strong>
               <img src="assets/images/sms1.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
           </p>
       </div>
       <div class="col-12">
        <p>
           2. <strong>SMS interface</strong> - Make sure you have credits for you to be able to send your message. charge per message <a href="https://www.bulksms.com/pricing/all/?creditsHoldingCurrency=GBP" target="_blank">Here</a>.
           <img src="assets/images/sms2.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
       </p>
   </div>
   <div class="col-12">
    <p>
       <div class="mt-3">
        <strong>Note:</strong> Additional tutorial for builksms <a href="https://www.bulksms.com/support/video-tutorials.htm" target="_blank">Here</a>.
    </div>
</p>
</div>
</div>
</div>

<h4 id="link_calendar" class="mt-0 mb-4">{ Calendar }</h4>
<div class="mb-5">
    <h5 class="mt-4">Calendar</h5>
    <p>
        <code>/view/human_resource/calendar.php</code>
    </p>
    <div class="row">
        <div class="col-12">
            <img src="assets/images/calendar.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-12">
            <img src="assets/images/calendar2.png" alt="image" class="img-fluid shadow" style="width:120vh;" />
        </div>
        <div class="col-12">
            <p>
               <div class="mt-3">
                1. <strong  style="color:#D0021B;">Event Name </strong> - title of the event.<br>
                2. <strong style="color:#F5A829;">Start Date</strong> - event start date.<br>
                3. <strong style="color:#F8E71C;">End Date</strong> - event end date.<br>
                4. <strong style="color:#8B572A;">Event Color</strong> - color of the event like blue, red, green, and etc.<br>
                5. <strong style="color:#4A90E2;">Action</strong> - button: edit and delete the report.<br>
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
                <a href="#link_employee" class="nav-link">Employee</a>
            </li>
            <li class="nav-item">
                <a href="#link_jobportal" class="nav-link">Job Portal</a>
            </li>
            <li class="nav-item">
                <a href="#link_attendance" class="nav-link">Attendance</a>
            </li>
            <li class="nav-item">
                <a href="#link_messages" class="nav-link">Messages</a>
            </li>
            <li class="nav-item">
                <a href="#link_calendar" class="nav-link">Calendar</a>
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