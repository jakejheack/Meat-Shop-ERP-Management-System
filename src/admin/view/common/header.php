<?php
$jobpending = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE stat='Pending';" ) );
$maintenance = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM logs WHERE logsStatus='Maintenance';" ) );
?>
<?php
function get_time_ago( $time )
{
    $time_difference = time() - $time;

    if( $time_difference < 24 * 60 * 60 ) { return 'today date'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
        30 * 24 * 60 * 60       =>  'month',
        24 * 60 * 60            =>  'day',
        60 * 60                 =>  'hour',
        60                      =>  'minute',
        1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            
        </div>
        <div class="d-flex">

            <div id="MyClockDisplay" class="clock" onload="showTime()" style="font-size:21px; font-weight:600; font-family: calibre; position: absolute; right: 45%; top: 31%; "></div>
            
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="uil-search"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
            aria-labelledby="page-header-search-dropdown">
            
            <form class="p-3">
                <div class="m-0">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="dropdown d-none d-lg-inline-block ms-1">
        <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
            <i class="uil-minus-path"></i>
        </button>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="uil-bell"></i>
        <span class="badge bg-danger rounded-pill"><?php 
        $notifall=$jobpending+$maintenance; 
        echo $notifall; ?></span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
    aria-labelledby="page-header-notifications-dropdown">
    <div class="p-3">
        <div class="row align-items-center">
            <div class="col">
                <h5 class="m-0 font-size-16"> Notifications </h5>
            </div>
        </div>
    </div>
    <div data-simplebar style="max-height: 230px;">

        <?php if ($jobpending != 0) {?>
            <a href="../view/hr_jobapply" class="text-reset notification-item">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                <i class="uil-bag"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1">Job Application<span class="badge rounded-pill bg-danger float-end"><?php echo $jobpending; ?></span></h6>
                        <div class="font-size-12 text-muted">
                            <?php

                            $res = $MySQLiconn->query("SELECT * FROM job_apply ORDER BY id DESC LIMIT 1");
                            while($row=$res->fetch_array()){  
                                ?>

                                <p class="mb-1"><?php echo $row['fullname']; ?></p>

                                
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo get_time_ago(strtotime($row['created_on'])); ?></p>

                                <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        <?php if ($maintenance != 0) {?>
            <a href="../view/ex_logs" class="text-reset notification-item">
                <div class="d-flex align-items-start">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-xs">
                            <span class="avatar-title bg-danger rounded-circle font-size-16">
                                <i class="uil-wrench"></i>
                            </span>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="mb-1">Maintenance<span class="badge rounded-pill bg-danger float-end"><?php echo $maintenance; ?></span></h6>
                        <div class="font-size-12 text-muted">
                            <?php

                            $res = $MySQLiconn->query("SELECT * FROM logs WHERE logsStatus='Maintenance' ORDER BY id DESC LIMIT 1");
                            while($row=$res->fetch_array()){  
                                ?>
                                <p class="mb-1"><?php echo $row['logsTitle']; ?></p>
                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <?php echo get_time_ago(strtotime($row['logsDate'])); ?></p>
                                <?php
                            } 
                            ?>
                        </div>
                    </div>
                </div>
            </a>
        <?php } ?>
        
        
    </div>
    <div class="p-2 border-top">
        <div class="d-grid">
        </div>
    </div>
</div>
</div>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

    <img class="rounded-circle header-profile-user" src="../uploads/userprofile/<?php if($_SESSION['imageText'] == 'null'){?>default_profile.jpg<?php }else{?><?php echo($_SESSION['imageText']); ?><?php }?>">


    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo mb_strtoupper($_SESSION['accfname']); ?></span>
    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
</button>
<div class="dropdown-menu dropdown-menu-end">
    <!-- item-->
    <?php if($_SESSION['branch'] == Administrator){?>
        <a class="dropdown-item d-block" href="../view/help/index.php" target="_blank"><i class="uil uil-file-question-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Documentation</span></a>
    <?php } ?>
    <a class="dropdown-item" href="../../../../index" target="_blank"><i class="uil uil-cloud-check font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Website</span></a>
    <a class="dropdown-item" href="../../?logout=true"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
</div>
</div>

<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
        <i class="uil-cog"></i>
    </button>
</div>

</div>
</div>
</header>

