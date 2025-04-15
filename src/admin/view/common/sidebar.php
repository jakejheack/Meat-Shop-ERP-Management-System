<div class="vertical-menu">
    <div class="navbar-brand-box">
        <a href="javascript: void(0);" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo_icon.png" alt="" height="25">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo_name.png" alt="" height="35">
            </span>
        </a>

        <a href="javascript: void(0);" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo_icon.png" alt="" height="25">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo_name.png" alt="" height="35">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">

                <?php if($_SESSION['dash1'] == on || $_SESSION['dash2'] == on ){?>
                    <li class="menu-title">Menu</li>
                <?php } ?> 

                <?php if($_SESSION['dash1'] == on){?>
                    <li>
                        <a href="dashboard1">
                            <i class="uil-home-alt"></i>
                            <span>Dashboard 1</span>
                        </a>
                    </li>
                <?php } ?> 
                <?php if($_SESSION['dash2'] == on){?>
                    <li>
                     <a href="hr_attdashboard">
                        <i class="uil-dashboard"></i>
                        <span>Dashboard 2</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['cusprof'] == on || $_SESSION['cusstat'] == on){?>
                <li class="menu-title">Customers</li>
            <?php } ?>

            <?php if($_SESSION['cusprof'] == on){?>
                <li>
                    <a href="cus_customers_profile">
                        <i class="uil-users-alt"></i>
                        <span>Customers Profile</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['dash1'] == on || $_SESSION['dash2'] == on || $_SESSION['cusstat'] == on || $_SESSION['epcredit'] == on || $_SESSION['lehtprice'] == on){?>
                <li class="menu-title">Daily Basis</li>
            <?php } ?> 

            <?php if($_SESSION['records1'] == on || $_SESSION['records2'] == on || $_SESSION['records3'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file"></i>
                        <span>Daily Records</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['records1'] == on){?>
                            <li><a href="fl_dailyrecords_v1">Daily Records v1.0</a></li>
                        <?php } ?>
                        <?php if($_SESSION['records2'] == on){?>
                            <li><a href="fl_dailyrecords_v2">Daily Records v2.3</a></li>
                        <?php } ?>
                        <?php if($_SESSION['records3'] == on){?>
                            <li><a href="fl_dailyrecords_v3">Daily Records v3.0<span class="badge rounded-pill bg-danger float-end">New!</span></a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['cusstat'] == on){?>
                <li>
                    <a href="cus_customers_sort">
                        <i class="uil-user-check"></i>
                        <span>Customers Credit<span class="badge rounded-pill bg-danger float-end">New!</span></span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['epcredit'] == on){?>
                <li>
                    <a href="employees_credit">
                        <i class="mdi mdi-account-cash-outline"></i>
                        <span>Employees Credit<span class="badge rounded-pill bg-danger float-end">New!</span></span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['lehtprice'] == on){?>
                <li>
                    <a href="today_price">
                        <i class="uil-weight"></i>
                        <span>Today Price<span class="badge rounded-pill bg-danger float-end">New!</span></span>
                    </a>
                </li>
            <?php } ?>



            <?php if ($_SESSION['emppro'] == on || $_SESSION['perfor'] == on || $_SESSION['travelreq'] == on || $_SESSION['sched'] == on || $_SESSION['dashportal'] == on || $_SESSION['vacancies'] == on || $_SESSION['applicant'] == on || $_SESSION['dashatt'] == on || $_SESSION['timeinout'] == on || $_SESSION['attlogs'] == on || $_SESSION['overtime'] == on || $_SESSION['attsched'] == on || $_SESSION['empshed'] == on || $_SESSION['empleave'] == on || $_SESSION['email'] == on || $_SESSION['sms'] == on || $_SESSION['calendar'] == on){?>
                <li class="menu-title">Human Resource</li>
            <?php } ?>

            <?php if($_SESSION['emppro'] == on || $_SESSION['perfor'] == on || $_SESSION['travelreq'] == on || $_SESSION['sched'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-chat-bubble-user"></i>
                        <span>Employees</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['emppro'] == on){?>
                            <li><a href="hr_employees">Profiles</a></li>
                        <?php } ?>
                        <?php if($_SESSION['perfor'] == on){?>
                            <li><a href="hr_performance">Performance</a></li>
                        <?php } ?>
                        <?php if($_SESSION['travelreq'] == on){?>
                            <li><a href="hr_travelrequest">Travel Request</a></li>
                        <?php } ?>
                        <?php if($_SESSION['sched'] == on){?>
                            <li><a href="hr_scheduler">Scheduler</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['dashportal'] == on || $_SESSION['vacancies'] == on || $_SESSION['applicant'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file-bookmark-alt"></i>
                        <span>Job Portal</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['dashportal'] == on){?>
                            <li><a href="hr_jobdashboard">Dashboard</a></li>
                        <?php } ?>
                        <?php if($_SESSION['vacancies'] == on){?>
                            <li><a href="hr_jobvacancies">Vacancies</a></li>
                        <?php } ?>
                        <?php if($_SESSION['applicant'] == on){?>
                            <li><a href="hr_jobapply">Application</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['dashatt'] == on || $_SESSION['timeinout'] == on || $_SESSION['attlogs'] == on || $_SESSION['overtime'] == on || $_SESSION['attsched'] == on || $_SESSION['empshed'] == on || $_SESSION['empleave'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-check"></i>
                        <span>Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['dashatt'] == on){?>
                            <li><a href="hr_attdashboard">Dashboard</a></li>
                        <?php } ?>
                        <?php if($_SESSION['timeinout'] == on){?>
                            <li><a href="hr_attendance_main" target="_blank">Time In-Out</a></li>
                        <?php } ?>
                        <?php if($_SESSION['attlogs'] == on){?>
                            <li><a href="hr_attlogs">Logs</a></li>
                        <?php } ?>
                        <?php if($_SESSION['overtime'] == on){?>
                            <li><a href="hr_attovertime">Overtime</a></li>
                        <?php } ?>
                        <?php if($_SESSION['attsched'] == on){?>
                            <li><a href="hr_attsched">Schedules</a></li>
                        <?php } ?>
                        <?php if($_SESSION['empshed'] == on){?>
                            <li><a href="hr_attempsched">Employees Schedule</a></li>
                        <?php } ?>
                        <?php if($_SESSION['empleave'] == on){?>
                            <li><a href="hr_attleave">Employee Leave</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['email'] == on || $_SESSION['sms'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-comment-alt-message"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['email'] == on){?>
                            <li><a href="https://mail.hostinger.com/" target="_blank">Email</a></li>
                        <?php } ?>
                        <?php if($_SESSION['sms'] == on){?>
                            <li><a href="hr_sms">SMS</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            <?php if($_SESSION['calendar'] == on){?>
                <li>
                    <a href="hr_calendar">
                        <i class="uil-calendar-alt"></i>
                        <span>Calendar</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['overrec'] == on || $_SESSION['overall'] == on || $_SESSION['records1'] == on || $_SESSION['records2'] == on || $_SESSION['purchases'] == on || $_SESSION['cashadv'] == on || $_SESSION['deduc'] == on || $_SESSION['possalary'] == on || $_SESSION['payroll'] == on){?>
                <li class="menu-title">Financial</li>
            <?php } ?>

            <?php if($_SESSION['overrec'] == on || $_SESSION['overall'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-graph-bar"></i>
                        <span>Daily Overview</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['overrec'] == on){?>
                            <li><a href="fl_ovpk_in">Records</a></li>
                        <?php } ?>
                        <?php if($_SESSION['overall'] == on){?>
                            <li><a href="fl_ovallstore">All Store</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>



            <?php if($_SESSION['purchases'] == on){?>
                <li>
                    <a href="fl_purchases">
                        <i class="uil-shopping-cart-alt"></i>
                        <span>Purchases</span>
                    </a>
                </li>
            <?php } ?>

            <?php if($_SESSION['cashadv'] == on || $_SESSION['deduc'] == on || $_SESSION['possalary'] == on || $_SESSION['payroll'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        <span>Employees</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['cashadv'] == on){?>
                            <li><a href="fl_cashadvance">Cash Advance</a></li>
                        <?php } ?>
                        <?php if($_SESSION['deduc'] == on){?>
                            <li><a href="fl_deduction">Deductions</a></li>
                        <?php } ?>
                        <?php if($_SESSION['possalary'] == on){?>
                            <li><a href="fl_position">Position Salary</a></li>
                        <?php } ?>
                        <?php if($_SESSION['payroll'] == on){?>
                            <li><a href="fl_payroll">Payroll</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            

            <?php if($_SESSION['lehtprice'] == on || $_SESSION['dashinv'] == on || $_SESSION['proinv'] == on || $_SESSION['calc1'] == on || $_SESSION['calc2'] == on || $_SESSION['lehinv'] == on || $_SESSION['lehrec'] == on || $_SESSION['suppro'] == on || $_SESSION['orlist'] == on || $_SESSION['supcalen'] == on){?>
                <li class="menu-title">Products Resources</li>
            <?php } ?>

            <?php if($_SESSION['dashinv'] == on || $_SESSION['proinv'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-file"></i>
                        <span>Inventory</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['dashinv'] == on){?>
                            <li><a href="pro_inventory_dashboard">Dashboard</a></li>
                        <?php } ?>
                        <?php if($_SESSION['proinv'] == on){?>
                            <li><a href="pro_products">Products</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['calc1'] == on || $_SESSION['calc2'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-user-square"></i>
                        <span>Calculator</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['calc1'] == on){?>
                            <li><a href="pro_calculator1">Calculator #1</a></li>
                        <?php } ?>
                        <?php if($_SESSION['calc2'] == on){?>
                            <li><a href="pro_calculator2">Calculator #2</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['lehinv'] == on || $_SESSION['lehrec'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-book"></i>
                        <span>Lehmann Recipe</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['lehinv'] == on){?>
                            <li><a href="pro_repinventory">Inventory</a></li>
                        <?php } ?>
                        <?php if($_SESSION['lehrec'] == on){?>
                            <li><a href="pro_reprecipe">Recipe</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['suppro'] == on || $_SESSION['orlist'] == on || $_SESSION['supcalen'] == on){?>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="uil-notebooks"></i>
                        <span>Supp & Distributor</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['suppro'] == on){?>
                            <li><a href="pro_distprofile">Profile</a></li>
                        <?php } ?>

                        <?php if($_SESSION['supcalen'] == on){?>
                            <li><a href="pro_distcalendar">Calendar</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['web'] == on || $_SESSION['webmes'] == on || $_SESSION['newslet'] == on || $_SESSION['fileman'] == on || $_SESSION['usersacc'] == on || $_SESSION['local'] == on || $_SESSION['logs'] == on){?>
             <li class="menu-title">More</li>
         <?php } ?>

         <?php if($_SESSION['web'] == on || $_SESSION['webmes'] == on || $_SESSION['newslet'] == on || $_SESSION['fileman'] == on || $_SESSION['usersacc'] == on || $_SESSION['local'] == on){?>
             <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="uil-wrench"></i>
                    <span>Extra<span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <?php if($_SESSION['web'] == on){?>
                            <li><a href="ex_website">Website</a></li>
                        <?php } ?>
                        <?php if($_SESSION['webmes'] == on){?>
                            <li><a href="ex_webmessage">Website Messages</a></li>
                        <?php } ?>
                        <?php if($_SESSION['newslet'] == on){?>
                            <li><a href="ex_newsletter">Newsletter</a></li>
                        <?php } ?>
                        <?php if($_SESSION['fileman'] == on){?>
                            <li><a href="ex_filemanager">File Manager</a></li>
                        <?php } ?>
                        <?php if($_SESSION['usersacc'] == on){?>
                            <li><a href="ex_users">Users Account</a></li>
                        <?php } ?>
                        <?php if($_SESSION['local'] == on){?>
                            <li><a href="ex_localization">Localization</a></li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

            <?php if($_SESSION['logs'] == on){?>
                <li>
                    <a href="ex_logs">
                        <i class="uil-book-open"></i>
                        <span>Logs</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>

</div>
</div>
