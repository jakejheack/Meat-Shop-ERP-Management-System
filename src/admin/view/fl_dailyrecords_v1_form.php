<?php include 'common/session.php'; ?>
<?php if($_SESSION['records1'] == on){?>
<?php include '../controller/fl_dailyrecords_v1.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/print.php'; ?>
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
                                    <h4 class="mb-2">&ensp;Daily Records </h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Daily Records v1.0</li>
                                        </ol>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <!-- Status -->
                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                            <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
                            <script>
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: '<?php echo $_SESSION['success_message2']; ?>',
                                showConfirmButton: false,
                                timer: 2000
                                })
                            </script>
                        <?php unset($_SESSION['success_message']); } ?>

                    <?php if (isset($_SESSION['warning_message']) && !empty($_SESSION['warning_message'])) { ?>
                        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
                        <script>
                            Swal.fire({
                            position: 'center',
                            icon: 'warning',
                            title: '<?php echo $_SESSION['warning_message2']; ?>',
                            showConfirmButton: false,
                            timer: 2000
                            })
                        </script>
                    <?php unset($_SESSION['warning_message']); } ?>
                        <!-- End Status -->
                    

                        
                        <!-- Start -->
                        <form method="post" enctype="multipart/form-data">
                        <div class="row">
                           <div class="col-12" style="zoom:90%;">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="accordion" class="custom-accordion">
                                            <div class="card mb-1 shadow-none">
                                                    <div class="card-body">
                                                    
                                                    <!-- Date -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-4">
                                                        <label>Date</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo date('M-d-Y', strtotime($getROW['dailyDate']));?>" disabled/>
                                                        <?php } else { ?>
                                                            <input type="datetime-local" name="dailyDate" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['dailyDate'];?>" autocomplete="off" required/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Shop Record -->
                                                    <div  class="form-group col-lg-4">
                                                        <label>Store</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['dailyStore'];?>" disabled/>
                                                        <?php } elseif(isset($_GET['edit'])) { ?>
                                                            <select class="form-control custom-select" name="dailyStore" required>
                                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['dailyStore'];?>"><?php if(isset($_GET['edit'])) echo $getROW['dailyStore'];?></option>
                                                                <option value="Daet">Daet</option>
                                                                <option value="Magsaysay">Magsaysay</option>
                                                                <option value="Yashano">Yashano</option>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control custom-select" name="dailyStore" required>
                                                                <option>Select Store</option>
                                                                <option value="Daet">Daet</option>
                                                                <option value="Magsaysay">Magsaysay</option>
                                                                <option value="Yashano">Yashano</option>
                                                            </select>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Status -->
                                                    <div  class="form-group col-lg-4">
                                                        <label>Status</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['dailyStatus'];?>" disabled/>
                                                        <?php } elseif(isset($_GET['edit'])) { ?>
                                                            <select class="form-control custom-select" name="dailyStatus" required>
                                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['dailyStatus'];?>"><?php if(isset($_GET['edit'])) echo $getROW['dailyStatus'];?></option>
                                                                <option value="Ongoing">Ongoing</option>
                                                                <option value="ReCheck">ReCheck</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Complete">Complete</option>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control custom-select" name="dailyStatus" required>
                                                                <option>Select Status</option>
                                                                <option value="Ongoing">Ongoing</option>
                                                                <option value="ReCheck">Re-Check</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Complete">Complete</option>
                                                            </select>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <hr>    
                                                        
                                                    <!-- 1st -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label>Record Name</label>
                                                        <a href="#collapsepkName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">PK</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Total In</label>
                                                        <a href="#collapsepkIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pktotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pktotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pktotalIn" name="pktotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pktotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Total Out</label>
                                                        <a href="#collapsepkOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pktotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pktotalOut" type="text" name="pktotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pktotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Morning</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneKMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input id="oneKMorning" type="text" name="oneKMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneKMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Evening</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneKEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                    <input id="oneKEvening" type="text" name="oneKEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneKEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsepkName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="pkName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pkName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="pkName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pkName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->   
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepkIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn1" name="pkIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn2" name="pkIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn3" name="pkIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn4" name="pkIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn5" name="pkIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn6" name="pkIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn7" name="pkIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn8" name="pkIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn9" name="pkIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkIn10" name="pkIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['pkIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepkOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut1" name="pkOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut2" name="pkOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut3" name="pkOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut4" name="pkOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="pkOut5" name="pkOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut6" name="pkOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut7" name="pkOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut8" name="pkOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut9" name="pkOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pkOut10" name="pkOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['pkOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                <!-- 2nd -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsepsName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">PS</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsepsIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pstotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pstotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pstotalIn" name="pstotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pstotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsepsOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pstotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pstotalOut" type="text" name="pstotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pstotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveHMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input id="fiveHMorning" type="text" name="fiveHMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveHMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveHEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input id="fiveHEvening" type="text" name="fiveHEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveHEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsepsName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="psName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['psName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pkName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="psName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['psName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepsIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn1" name="psIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn2" name="psIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn3" name="psIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn4" name="psIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn5" name="psIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn6" name="psIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn7" name="psIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn8" name="psIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn9" name="psIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psIn10" name="psIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['psIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepsOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut1" name="psOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut2" name="psOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut3" name="psOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut4" name="psOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="psOut5" name="psOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut6" name="psOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut7" name="psOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut8" name="psOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut9" name="psOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['psOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="psOut10" name="psOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['psOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 3rd -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsediscName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Discount (sr., pwd)</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsediscIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="disctotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['disctotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="disctotalIn" name="disctotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['disctotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsediscOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['disctotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="disctotalOut" type="text" name="disctotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['disctotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneHMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input id="oneHMorning" type="text" name="oneHMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneHMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneHEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input id="oneHEvening" type="text" name="oneHEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneHEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsediscName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="discName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['discName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="discName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['discName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsediscIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn1" name="discIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn2" name="discIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn3" name="discIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn4" name="discIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn5" name="discIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn6" name="discIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn7" name="discIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn8" name="discIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn9" name="discIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn10" name="discIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn11" name="discIn11" class="form-control" placeholder="In#11" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn12" name="discIn12" class="form-control" placeholder="In#12" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn13" name="discIn13" class="form-control" placeholder="In#13" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn14" name="discIn14" class="form-control" placeholder="In#14" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discIn15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discIn15" name="discIn15" class="form-control" placeholder="In#15" value="<?php if(isset($_GET['edit'])) echo $getROW['discIn15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsediscOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut1" name="discOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut2" name="discOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut3" name="discOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut4" name="discOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="discOut5" name="discOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut6" name="discOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut7" name="discOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut8" name="discOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut9" name="discOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut10" name="discOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut11" name="discOut11" class="form-control" placeholder="Out#11" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut12" name="discOut12" class="form-control" placeholder="Out#12" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut13" name="discOut13" class="form-control" placeholder="Out#13" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="discOut14" name="discOut14" class="form-control" placeholder="Out#14" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['discOut15'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="discOut15" name="discOut15" class="form-control" placeholder="Out#15" value="<?php if(isset($_GET['edit'])) echo $getROW['discOut15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                    
                                                    <!-- 4th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsechickName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Chicken</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsechickIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="chicktotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['chicktotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="chicktotalIn" name="chicktotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chicktotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsechickOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['chicktotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="chicktotalOut" type="text" name="chicktotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chicktotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiftyMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input id="fiftyMorning" type="text" name="fiftyMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiftyMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiftyEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input id="fiftyEvening" type="text" name="fiftyEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiftyEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsechickName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="chickName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chickName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="chickName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chickName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsechickIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn1" name="chickIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn2" name="chickIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn3" name="chickIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn4" name="chickIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn5" name="chickIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn6" name="chickIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn7" name="chickIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn8" name="chickIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn9" name="chickIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickIn10" name="chickIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['chickIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsechickOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut1" name="chickOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut2" name="chickOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut3" name="chickOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut4" name="chickOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="chickOut5" name="chickOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut6" name="chickOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut7" name="chickOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut8" name="chickOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut9" name="chickOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['chickOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="chickOut10" name="chickOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['chickOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 5th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapseagriName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Agri</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseagriIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="agritotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['agritotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="agritotalIn" name="agritotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['agritotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseagriOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['agritotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="agritotalOut" type="text" name="agritotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['agritotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['twentyMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input id="twentyMorning" type="text" name="twentyMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['twentyMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['twentyEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input id="twentyEvening" type="text" name="twentyEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['twentyEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapseagriName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                      <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="agriName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['agriName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="agriName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['agriName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseagriIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn1" name="agriIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn2" name="agriIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn3" name="agriIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn4" name="agriIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn5" name="agriIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn6" name="agriIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn7" name="agriIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn8" name="agriIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn9" name="agriIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriIn10" name="agriIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['agriIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseagriOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut1" name="agriOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut2" name="agriOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut3" name="agriOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut4" name="agriOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="agriOut5" name="agriOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut6" name="agriOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut7" name="agriOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut8" name="agriOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut9" name="agriOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['agriOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="agriOut10" name="agriOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['agriOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 6th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsegrocName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Grocery</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsegrocIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="groctotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['groctotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="groctotalIn" name="groctotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['groctotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsegrocOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['groctotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="groctotalOut" type="text" name="groctotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['groctotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tenMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input id="tenMorning" type="text" name="tenMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tenMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tenEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input id="tenEvening" type="text" name="tenEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tenEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsegrocName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="grocName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['grocName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="grocName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['grocName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsegrocIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn1" name="grocIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn2" name="grocIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn3" name="grocIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn4" name="grocIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn5" name="grocIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn6" name="grocIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn7" name="grocIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn8" name="grocIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn9" name="grocIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocIn10" name="grocIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['grocIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsegrocOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut1" name="grocOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut2" name="grocOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut3" name="grocOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut4" name="grocOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="grocOut5" name="grocOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut6" name="grocOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut7" name="grocOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut8" name="grocOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut9" name="grocOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['grocOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="grocOut10" name="grocOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['grocOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 7th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsecowName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Cow</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecowIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cowtotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['cowtotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cowtotalIn" name="cowtotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cowtotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecowOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['cowtotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cowtotalOut" type="text" name="cowtotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cowtotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input id="fiveMorning" type="text" name="fiveMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input id="fiveEvening" type="text" name="fiveEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsecowName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="cowName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cowName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="cowName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cowName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecowIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn1" name="cowIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn2" name="cowIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn3" name="cowIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn4" name="cowIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn5" name="cowIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn6" name="cowIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn7" name="cowIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn8" name="cowIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn9" name="cowIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowIn10" name="cowIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['cowIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecowOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut1" name="cowOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut2" name="cowOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut3" name="cowOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut4" name="cowOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="cowOut5" name="cowOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut6" name="cowOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut7" name="cowOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut8" name="cowOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut9" name="cowOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cowOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cowOut10" name="cowOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['cowOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 8th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsepigName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Pig</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsepigIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pigtotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pigtotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pigtotalIn" name="pigtotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pigtotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsepigOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['pigtotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="pigtotalOut" type="text" name="pigtotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pigtotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['oneMorning'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input id="oneMorning" type="text" name="oneMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['oneEvening'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input id="oneEvening" type="text" name="oneEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsepigName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="pigName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pigName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="pigName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pigName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepigIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn1" name="pigIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn2" name="pigIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn3" name="pigIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn4" name="pigIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn5" name="pigIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn6" name="pigIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn7" name="pigIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn8" name="pigIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn9" name="pigIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigIn10" name="pigIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['pigIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsepigOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut1" name="pigOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut2" name="pigOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut3" name="pigOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut4" name="pigOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="pigOut5" name="pigOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut6" name="pigOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut7" name="pigOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut8" name="pigOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut9" name="pigOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pigOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="pigOut10" name="pigOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['pigOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 9th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsecosCreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Customers Credit</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecosCreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cosCredittotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['cosCredittotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cosCredittotalIn" name="cosCredittotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCredittotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecosCreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['cosCredittotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="cosCredittotalOut" type="text" name="cosCredittotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCredittotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tfiveMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input id="tfiveMorning" type="text" name="tfiveMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tfiveMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tfiveEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input id="tfiveEvening" type="text" name="tfiveEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tfiveEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsecosCreditName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="cosCreditName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="cosCreditName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditName3'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="cosCreditName3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditName3'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditName4'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="cosCreditName4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditName4'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecosCreditIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn1" name="cosCreditIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn2" name="cosCreditIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn3" name="cosCreditIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn4" name="cosCreditIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn5" name="cosCreditIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn6" name="cosCreditIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn7" name="cosCreditIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn8" name="cosCreditIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn9" name="cosCreditIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn10" name="cosCreditIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn11" name="cosCreditIn11" class="form-control" placeholder="In#11" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn12" name="cosCreditIn12" class="form-control" placeholder="In#12" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn13" name="cosCreditIn13" class="form-control" placeholder="In#13" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn14" name="cosCreditIn14" class="form-control" placeholder="In#14" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn15" name="cosCreditIn15" class="form-control" placeholder="In#15" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn16" name="cosCreditIn16" class="form-control" placeholder="In#16" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn17" name="cosCreditIn17" class="form-control" placeholder="In#17" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn18" name="cosCreditIn18" class="form-control" placeholder="In#18" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn19" name="cosCreditIn19" class="form-control" placeholder="In#19" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditIn20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditIn20" name="cosCreditIn20" class="form-control" placeholder="In#20" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditIn20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecosCreditOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut1" name="cosCreditOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut2" name="cosCreditOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut3" name="cosCreditOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut4" name="cosCreditOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="cosCreditOut5" name="cosCreditOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut6" name="cosCreditOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut7" name="cosCreditOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut8" name="cosCreditOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut9" name="cosCreditOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut10" name="cosCreditOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut11" name="cosCreditOut11" class="form-control" placeholder="Out#11" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut12" name="cosCreditOut12" class="form-control" placeholder="Out#12" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut13" name="cosCreditOut13" class="form-control" placeholder="Out#13" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut14" name="cosCreditOut14" class="form-control" placeholder="Out#14" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut15" name="cosCreditOut15" class="form-control" placeholder="Out#15" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut16" name="cosCreditOut16" class="form-control" placeholder="Out#16" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut17" name="cosCreditOut17" class="form-control" placeholder="Out#17" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut18" name="cosCreditOut18" class="form-control" placeholder="Out#18" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut19" name="cosCreditOut19" class="form-control" placeholder="Out#19" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cosCreditOut20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="cosCreditOut20" name="cosCreditOut20" class="form-control" placeholder="Out#20" value="<?php if(isset($_GET['edit'])) echo $getROW['cosCreditOut20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 10th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapseempCreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Employees Credit</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseempCreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="empCredittotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['empCredittotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="empCredittotalIn" name="empCredittotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['empCredittotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseempCreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['empCredittotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="empCredittotalOut" type="text" name="empCredittotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['empCredittotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalMorning'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input id="totalMorning" type="text" name="totalMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalMorning'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalEvening'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input id="totalEvening" type="text" name="totalEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalEvening'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapseempCreditName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="empCreditName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="empCreditName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseempCreditIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn1" name="empCreditIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn2" name="empCreditIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn3" name="empCreditIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn4" name="empCreditIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn5" name="empCreditIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn6" name="empCreditIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn7" name="empCreditIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn8" name="empCreditIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn9" name="empCreditIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn10" name="empCreditIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn11" name="empCreditIn11" class="form-control" placeholder="In#11" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn12" name="empCreditIn12" class="form-control" placeholder="In#12" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn13" name="empCreditIn13" class="form-control" placeholder="In#13" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn14" name="empCreditIn14" class="form-control" placeholder="In#14" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditIn15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditIn15" name="empCreditIn15" class="form-control" placeholder="In#15" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditIn15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseempCreditOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut1" name="empCreditOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut2" name="empCreditOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut3" name="empCreditOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut4" name="empCreditOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="empCreditOut5" name="empCreditOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut6" name="empCreditOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut7" name="empCreditOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut8" name="empCreditOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut9" name="empCreditOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut10" name="empCreditOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut11" name="empCreditOut11" class="form-control" placeholder="Out#11" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut12" name="empCreditOut12" class="form-control" placeholder="Out#12" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut13" name="empCreditOut13" class="form-control" placeholder="Out#13" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut14" name="empCreditOut14" class="form-control" placeholder="Out#14" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['empCreditOut15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="empCreditOut15" name="empCreditOut15" class="form-control" placeholder="Out#15" value="<?php if(isset($_GET['edit'])) echo $getROW['empCreditOut15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 11th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapselehCreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Lehmann Credit</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapselehCreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="lehCredittotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['lehCredittotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="lehCredittotalIn" name="lehCredittotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCredittotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapselehCreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['lehCredittotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="lehCredittotalOut" type="text" name="lehCredittotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCredittotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneKsecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input id="oneKsecMorning" type="text" name="oneKsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneKsecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneKsecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1T</div>
                                                                <input id="oneKsecEvening" type="text" name="oneKsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneKsecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapselehCreditName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="lehCreditName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="lehCreditName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapselehCreditIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn1" name="lehCreditIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn2" name="lehCreditIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn3" name="lehCreditIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn4" name="lehCreditIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn5" name="lehCreditIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn6" name="lehCreditIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn7" name="lehCreditIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn8" name="lehCreditIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn9" name="lehCreditIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditIn10" name="lehCreditIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapselehCreditOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut1" name="lehCreditOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut2" name="lehCreditOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut3" name="lehCreditOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut4" name="lehCreditOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="lehCreditOut5" name="lehCreditOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut6" name="lehCreditOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut7" name="lehCreditOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut8" name="lehCreditOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut9" name="lehCreditOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['lehCreditOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="lehCreditOut10" name="lehCreditOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['lehCreditOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                     
                                                    <!-- 12th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapseupName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Remit</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseupIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="uptotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['uptotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="uptotalIn" name="uptotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['uptotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseupOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['uptotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="uptotalOut" type="text" name="uptotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['uptotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveHsecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input id="fiveHsecMorning" type="text" name="fiveHsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveHsecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiveHsecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">5H</div>
                                                                <input id="fiveHsecEvening" type="text" name="fiveHsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiveHsecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapseupName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="upName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['upName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="upName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['upName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseupIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn1" name="upIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn2" name="upIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn3" name="upIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn4" name="upIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn5" name="upIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn6" name="upIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn7" name="upIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn8" name="upIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn9" name="upIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upIn10" name="upIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['upIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseupOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut1" name="upOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut2" name="upOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut3" name="upOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut4" name="upOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="upOut5" name="upOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut6" name="upOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut7" name="upOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut8" name="upOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut9" name="upOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['upOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="upOut10" name="upOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['upOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                    
                                                    <!-- 13th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapseinName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">IN</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseinIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="intotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['intotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="intotalIn" name="intotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['intotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseinOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['intotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="intotalOut" type="text" name="intotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['intotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneHsecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input id="oneHsecMorning" type="text" name="oneHsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneHsecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['oneHsecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">1H</div>
                                                                <input id="oneHsecEvening" type="text" name="oneHsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['oneHsecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapseinName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="inName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['inName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="inName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['inName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseinIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn1" name="inIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn2" name="inIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn3" name="inIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn4" name="inIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn5" name="inIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn6" name="inIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn7" name="inIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn8" name="inIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn9" name="inIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inIn10" name="inIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['inIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseinOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut1" name="inOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut2" name="inOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut3" name="inOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut4" name="inOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="inOut5" name="inOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut6" name="inOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut7" name="inOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut8" name="inOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut9" name="inOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['inOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="inOut10" name="inOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['inOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                    
                                                    <!-- 14th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsebankName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Bank Deposit</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsebankIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="banktotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['banktotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="banktotalIn" name="banktotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['banktotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsebankOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['banktotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="banktotalOut" type="text" name="banktotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['banktotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiftysecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input id="fiftysecMorning" type="text" name="fiftysecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiftysecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fiftysecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">50</div>
                                                                <input id="fiftysecEvening" type="text" name="fiftysecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fiftysecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsebankName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="bankName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['bankName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="bankName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['bankName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsebankIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn1" name="bankIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn2" name="bankIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn3" name="bankIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn4" name="bankIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn5" name="bankIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn6" name="bankIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn7" name="bankIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn8" name="bankIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn9" name="bankIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankIn10" name="bankIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['bankIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsebankOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut1" name="bankOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut2" name="bankOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut3" name="bankOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut4" name="bankOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="bankOut5" name="bankOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut6" name="bankOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut7" name="bankOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut8" name="bankOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut9" name="bankOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['bankOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="bankOut10" name="bankOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['bankOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>   
                                                        
                                                    <!-- 15th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapseprFamilyName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Private Family</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseprFamilyIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="prFamilytotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['prFamilytotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="prFamilytotalIn" name="prFamilytotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilytotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapseprFamilyOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['prFamilytotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="prFamilytotalOut" type="text" name="prFamilytotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilytotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                      <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['twentysecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input id="twentysecMorning" type="text" name="twentysecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['twentysecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['twentysecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">20</div>
                                                                <input id="twentysecEvening" type="text" name="twentysecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['twentysecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapseprFamilyName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="prFamilyName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="prFamilyName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseprFamilyIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn1" name="prFamilyIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn2" name="prFamilyIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn3" name="prFamilyIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn4" name="prFamilyIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn5" name="prFamilyIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn6" name="prFamilyIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn7" name="prFamilyIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn8" name="prFamilyIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn9" name="prFamilyIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyIn10" name="prFamilyIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapseprFamilyOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut1" name="prFamilyOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut2" name="prFamilyOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut3" name="prFamilyOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut4" name="prFamilyOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="prFamilyOut5" name="prFamilyOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut6" name="prFamilyOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut7" name="prFamilyOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut8" name="prFamilyOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut9" name="prFamilyOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['prFamilyOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="prFamilyOut10" name="prFamilyOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['prFamilyOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 16th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsecrCardName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Credit Card</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecrCardIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="crCardtotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['crCardtotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="crCardtotalIn" name="crCardtotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardtotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsecrCardOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['crCardtotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="crCardtotalOut" type="text" name="crCardtotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardtotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tensecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input id="tensecMorning" type="text" name="tensecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tensecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['tensecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">10</div>
                                                                <input id="tensecEvening" type="text" name="tensecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tensecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <div id="collapsecrCardName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="crCardName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="crCardName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--Out -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardName3'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="crCardName3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardName3'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--Out -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardName4'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="crCardName4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardName4'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecrCardIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn1" name="crCardIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn2" name="crCardIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn3" name="crCardIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn4" name="crCardIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn5" name="crCardIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn6" name="crCardIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn7" name="crCardIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn8" name="crCardIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn9" name="crCardIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn10" name="crCardIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn11" name="crCardIn11" class="form-control" placeholder="In#11" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn12" name="crCardIn12" class="form-control" placeholder="In#12" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn13" name="crCardIn13" class="form-control" placeholder="In#13" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn14" name="crCardIn14" class="form-control" placeholder="In#14" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn15" name="crCardIn15" class="form-control" placeholder="In#15" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn16" name="crCardIn16" class="form-control" placeholder="In#16" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn17" name="crCardIn17" class="form-control" placeholder="In#17" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn18" name="crCardIn18" class="form-control" placeholder="In#18" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!--19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn19" name="crCardIn19" class="form-control" placeholder="In#19" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn20" name="crCardIn20" class="form-control" placeholder="In#20" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 21 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn21'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn21" name="crCardIn21" class="form-control" placeholder="In#21" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn21'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 22 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn22'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn22" name="crCardIn22" class="form-control" placeholder="In#22" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn22'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 23 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn23'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn23" name="crCardIn23" class="form-control" placeholder="In#23" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn23'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 24 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn24'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn24" name="crCardIn24" class="form-control" placeholder="In#24" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn24'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 25 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn25'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn25" name="crCardIn25" class="form-control" placeholder="In#25" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn25'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 26 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn26'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn26" name="crCardIn26" class="form-control" placeholder="In#26" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn26'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 27 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn27'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn27" name="crCardIn27" class="form-control" placeholder="In#27" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn27'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 28 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn28'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn28" name="crCardIn28" class="form-control" placeholder="In#28" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn28'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 29 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn29'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn29" name="crCardIn29" class="form-control" placeholder="In#29" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn29'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 30 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardIn30'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardIn30" name="crCardIn30" class="form-control" placeholder="In#30" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardIn30'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsecrCardOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut1" name="crCardOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut2" name="crCardOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut3" name="crCardOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut4" name="crCardOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="crCardOut5" name="crCardOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut6" name="crCardOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut7" name="crCardOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut8" name="crCardOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut9" name="crCardOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut10" name="crCardOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut11" name="crCardOut11" class="form-control" placeholder="Out#11" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut12" name="crCardOut12" class="form-control" placeholder="Out#12" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut13" name="crCardOut13" class="form-control" placeholder="Out#13" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut14" name="crCardOut14" class="form-control" placeholder="Out#14" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut15'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="crCardOut15" name="crCardOut15" class="form-control" placeholder="Out#15" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut16" name="crCardOut16" class="form-control" placeholder="Out#16" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut17" name="crCardOut17" class="form-control" placeholder="Out#17" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut18" name="crCardOut18" class="form-control" placeholder="Out#18" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut19" name="crCardOut19" class="form-control" placeholder="Out#19" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut20" name="crCardOut20" class="form-control" placeholder="Out#20" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 21 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut21'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut21" name="crCardOut21" class="form-control" placeholder="Out#21" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut21'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 22 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut22'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut22" name="crCardOut22" class="form-control" placeholder="Out#22" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut22'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 23 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut23'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut23" name="crCardOut23" class="form-control" placeholder="Out#23" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut23'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 24 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut24'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut24" name="crCardOut24" class="form-control" placeholder="Out#24" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut24'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 25 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut25'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="crCardOut25" name="crCardOut25" class="form-control" placeholder="Out#25" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut25'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 26 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut26'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut26" name="crCardOut26" class="form-control" placeholder="Out#26" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut26'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 27 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut27'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut27" name="crCardOut27" class="form-control" placeholder="Out#27" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut27'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 28 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut28'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut28" name="crCardOut28" class="form-control" placeholder="Out#28" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut28'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 29 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut29'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut29" name="crCardOut29" class="form-control" placeholder="Out#29" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut29'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 30 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['crCardOut30'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="crCardOut30" name="crCardOut30" class="form-control" placeholder="Out#30" value="<?php if(isset($_GET['edit'])) echo $getROW['crCardOut30'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 17th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsedeCardName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Debit Card</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsedeCardIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="deCardtotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['deCardtotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="deCardtotalIn" name="deCardtotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardtotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsedeCardOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['deCardtotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="deCardtotalOut" type="text" name="deCardtotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardtotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fivesecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input id="fivesecMorning" type="text" name="fivesecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fivesecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['fivesecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">05</div>
                                                                <input id="fivesecEvening" type="text" name="fivesecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['fivesecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div> 
                                                    </div>
                                                        
                                                    <div id="collapsedeCardName" class="collapse" data-parent="#accordion">
                                                       <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="deCardName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="deCardName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--Out -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardName3'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="deCardName3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardName3'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--Out -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardName4'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="deCardName4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardName4'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsedeCardIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn1" name="deCardIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn2" name="deCardIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn3" name="deCardIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn4" name="deCardIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn5" name="deCardIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn6" name="deCardIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn7" name="deCardIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn8" name="deCardIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn9" name="deCardIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn10" name="deCardIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn11" name="deCardIn11" class="form-control" placeholder="In#11" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn12" name="deCardIn12" class="form-control" placeholder="In#12" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn13" name="deCardIn13" class="form-control" placeholder="In#13" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn14" name="deCardIn14" class="form-control" placeholder="In#14" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn15'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn15" name="deCardIn15" class="form-control" placeholder="In#15" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn16" name="deCardIn16" class="form-control" placeholder="In#16" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn17" name="deCardIn17" class="form-control" placeholder="In#17" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn18" name="deCardIn18" class="form-control" placeholder="In#18" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn19" name="deCardIn19" class="form-control" placeholder="In#19" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn20" name="deCardIn20" class="form-control" placeholder="In#20" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 21 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn21'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn21" name="deCardIn21" class="form-control" placeholder="In#21" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn21'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 22 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn22'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn22" name="deCardIn22" class="form-control" placeholder="In#22" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn22'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 23 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn23'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn23" name="deCardIn23" class="form-control" placeholder="In#23" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn23'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 24 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn24'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn24" name="deCardIn24" class="form-control" placeholder="In#24" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn24'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 25 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn25'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn25" name="deCardIn25" class="form-control" placeholder="In#25" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn25'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 26 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn26'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn26" name="deCardIn26" class="form-control" placeholder="In#26" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn26'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 27 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn27'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn27" name="deCardIn27" class="form-control" placeholder="In#27" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn27'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 28 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn28'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn28" name="deCardIn28" class="form-control" placeholder="In#28" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn28'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 29 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn29'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn29" name="deCardIn29" class="form-control" placeholder="In#29" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn29'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 30 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardIn30'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardIn30" name="deCardIn30" class="form-control" placeholder="In#30" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardIn30'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsedeCardOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--Out -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut1" name="deCardOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut2" name="deCardOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut3" name="deCardOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut4" name="deCardOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="deCardOut5" name="deCardOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut6" name="deCardOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut7" name="deCardOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut8" name="deCardOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut9" name="deCardOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut10" name="deCardOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--Out -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 11 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut11'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut11" name="deCardOut11" class="form-control" placeholder="Out#11" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut11'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 12 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut12'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut12" name="deCardOut12" class="form-control" placeholder="Out#12" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut12'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 13 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut13'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut13" name="deCardOut13" class="form-control" placeholder="Out#13" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut13'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 14 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut14'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut14" name="deCardOut14" class="form-control" placeholder="Out#14" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut14'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 15 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut15'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="deCardOut15" name="deCardOut15" class="form-control" placeholder="Out#15" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut15'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 16 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut16'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut16" name="deCardOut16" class="form-control" placeholder="Out#16" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut16'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 17 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut17'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut17" name="deCardOut17" class="form-control" placeholder="Out#17" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut17'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 18 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut18'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut18" name="deCardOut18" class="form-control" placeholder="Out#18" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut18'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 19 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut19'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut19" name="deCardOut19" class="form-control" placeholder="Out#19" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut19'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 20 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut20'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut20" name="deCardOut20" class="form-control" placeholder="Out#20" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut20'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <div class="row">
                                                        <!--Out -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 21 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut21'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut21" name="deCardOut21" class="form-control" placeholder="Out#21" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut21'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 22 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut22'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut22" name="deCardOut22" class="form-control" placeholder="Out#22" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut22'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 23 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut23'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut23" name="deCardOut23" class="form-control" placeholder="Out#23" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut23'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 24 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut24'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut24" name="deCardOut24" class="form-control" placeholder="Out#24" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut24'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 25 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut25'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="deCardOut25" name="deCardOut25" class="form-control" placeholder="Out#25" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut25'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!--26 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut26'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut26" name="deCardOut26" class="form-control" placeholder="Out#26" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut26'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 27 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut27'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut27" name="deCardOut27" class="form-control" placeholder="Out#27" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut27'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 28 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut28'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut28" name="deCardOut28" class="form-control" placeholder="Out#28" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut28'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 29 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut29'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut29" name="deCardOut29" class="form-control" placeholder="Out#29" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut29'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 30 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['deCardOut30'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="deCardOut30" name="deCardOut30" class="form-control" placeholder="Out#30" value="<?php if(isset($_GET['edit'])) echo $getROW['deCardOut30'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <!-- 18th -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <a href="#collapsechecksName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Checks</label>
                                                        </a>
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsechecksIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="checkstotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['checkstotalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="checkstotalIn" name="checkstotalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checkstotalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <a href="#collapsechecksOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['checkstotalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="checkstotalOut" type="text" name="checkstotalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checkstotalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                        </a>
                                                    </div>
                                                     <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['onesecMorning'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input id="onesecMorning" type="text" name="onesecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['onesecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['onesecEvening'],2);?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">01</div>
                                                                <input id="onesecEvening" type="text" name="onesecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['onesecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div> 
                                                    </div>
                                                        
                                                    <div id="collapsechecksName" class="collapse" data-parent="#accordion">
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksName1'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">&ensp;IN&ensp;</div>
                                                                    <input type="text" name="checksName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checksName1'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!--In -->
                                                        <div class="row">
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-10">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksName2'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                <div class="input-group-text">OUT</div>
                                                                    <input type="text" name="checksName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checksName2'];?>" autocomplete="off"/>
                                                                </div>
                                                            <?php } ?> 
                                                            </div>
                                                        </div>
                                                        <!-- End -->  
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsechecksIn" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn1" name="checksIn1" class="form-control" placeholder="In#1" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn2" name="checksIn2" class="form-control" placeholder="In#2" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn3" name="checksIn3" class="form-control" placeholder="In#3" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn4" name="checksIn4" class="form-control" placeholder="In#4" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn5'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn5" name="checksIn5" class="form-control" placeholder="In#5" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn6" name="checksIn6" class="form-control" placeholder="In#6" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn7" name="checksIn7" class="form-control" placeholder="In#7" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn8" name="checksIn8" class="form-control" placeholder="In#8" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn9" name="checksIn9" class="form-control" placeholder="In#9" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksIn10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksIn10" name="checksIn10" class="form-control" placeholder="In#10" value="<?php if(isset($_GET['edit'])) echo $getROW['checksIn10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                        
                                                    <div id="collapsechecksOut" class="collapse" data-parent="#accordion">
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 1 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut1'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut1" name="checksOut1" class="form-control" placeholder="Out#1" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut1'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 2 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut2'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut2" name="checksOut2" class="form-control" placeholder="Out#2" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut2'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 3 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut3'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut3" name="checksOut3" class="form-control" placeholder="Out#3" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut3'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 4 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut4'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut4" name="checksOut4" class="form-control" placeholder="Out#4" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut4'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 5 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut5'];?>" disabled/>
                                                            <?php } else { ?>
                                                               <input type="text" id="checksOut5" name="checksOut5" class="form-control" placeholder="Out#5" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut5'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        
                                                        <div class="row">
                                                        <!--In -->
                                                            <div class="form-group col-lg-1">  
                                                            </div>
                                                        <!-- 6 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut6'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut6" name="checksOut6" class="form-control" placeholder="Out#6" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut6'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 7 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut7'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut7" name="checksOut7" class="form-control" placeholder="Out#7" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut7'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 8 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut8'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut8" name="checksOut8" class="form-control" placeholder="Out#8" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut8'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 9 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut9'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut9" name="checksOut9" class="form-control" placeholder="Out#9" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut9'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- 10 -->
                                                            <div  class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['checksOut10'];?>" disabled/>
                                                            <?php } else { ?>
                                                                <input type="text" id="checksOut10" name="checksOut10" class="form-control" placeholder="Out#10" value="<?php if(isset($_GET['edit'])) echo $getROW['checksOut10'];?>" autocomplete="off"/>
                                                            <?php } ?> 
                                                            </div>
                                                        <!-- End -->    
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                    
                                                    <!-- total -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input id="totalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalIn'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input id="totalIn" name="totalIn" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalIn'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalOut'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input id="totalOut" type="text" name="totalOut" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalOut'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['tfivesecMorning'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input id="tfivesecMorning" type="text" name="tfivesecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tfivesecMorning'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['tfivesecEvening'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">.25</div>
                                                                <input id="tfivesecEvening" type="text" name="tfivesecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['tfivesecEvening'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- total -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalsecMorning'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input id="totalsecMorning" type="text" name="totalsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalsecMorning'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalsecEvening'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#74788d;color:white;">TA</div>
                                                                <input id="totalsecEvening" type="text" name="totalsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalsecEvening'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div> 
                                                    </div>
                                                        
                                                    <!-- total -->   
                                                    <div class="row">
                                                    <!-- Record Name -->
                                                    <div  class="form-group col-lg-2">
                                                    </div>
                                                    
                                                    <!-- In -->
                                                    <div class="form-group col-lg-3">
                                                    </div>
                                                        
                                                    <!-- Out -->
                                                    <div class="form-group col-lg-3">
                                                    </div>
                                                    <!-- Morning -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalAllMorning'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input id="totalAllMorning" type="text" name="totalAllMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAllMorning'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?> 
                                                    </div>
                                                    <!-- Evening -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalAllEvening'],2);?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text" style="background-color:#34c38f;color:white;">TA</div>
                                                                <input id="totalAllEvening" type="text" name="totalAllEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAllEvening'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div> 
                                                    </div>
                                                        
                                                    <hr>
                                                        
                                                    <div class="row">
                                                    <!-- W.S -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Weighing Scale</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="scale" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['scale'];?>"/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="scale" name="scale" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['scale'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Difference</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="difference" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['difference'];?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="difference" name="difference" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['difference'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div>   
                                                    
                                                    <div class="row">
                                                    <!-- Sobra -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Sobra</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="sobra" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['sobra'];?>"/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="sobra" name="sobra" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['sobra'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total Sale</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalSale" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['totalSale'];?>"/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalSale" name="totalSale" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalSale'];?>" autocomplete="off"/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div> 
                                                    
                                                    <div class="row">
                                                    <!-- Total -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="wsTotal" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['ssTotal'];?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="wsTotal" name="ssTotal" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['ssTotal'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    </div> 
                                                    <br>
                                                    <div class="row">
                                                    <!-- Notes -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Upload Documents</label>
                                                    </div>
                                                    <?php if(isset($_GET['view'])) { ?>
                                                    <div class="form-group col-lg-8">
                                                        <a href="../uploads/dailyRecords/<?php echo $getROW['imageText'];?>" target="_blank"><label style="margin-top:7px;margin-left:px;"><i class="mdi mdi-cloud-download-outline"></i>&ensp;Download File</label></a>
                                                    </div>
                                                    <?php } else { ?>
                                                    <div class="form-group col-lg-8">
                                                        <input style="margin-top:5px;" type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>
                                                    <div id="hide-from-screen">
                                                        <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                                                    </div>
                                                    </div>
                                                    <?php } ?>
                                                    
                                                    </div> 
                                                    
                                                    <div class="row">
                                                    <!-- Notes -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Notes</label>
                                                    </div>
                                                    <div class="form-group col-lg-8">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['notes'];?>"/>
                                                        <?php } else { ?>
                                                                <input name="notes" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['notes'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    </div> 
                                                        
                                                    <div class="row">
                                                    <!-- Cashier Duty -->
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Cashier Duty</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                                <input id="cashierDuty" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['cashierDuty'];?>"/>
                                                        <?php } else { ?>
                                                                <input id="cashierDuty" name="cashierDuty" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cashierDuty'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <div  class="form-group col-lg-2">
                                                        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Record Duty</label>
                                                    </div>
                                                    <div class="form-group col-lg-3">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                                <input id="recordDuty" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['recordDuty'];?>"/>
                                                        <?php } else { ?>
                                                                <input id="recordDuty" name="recordDuty" style="font-weight:600" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['recordDuty'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    </div> 
                                                    
                                                        
                                                        
                                                        
                                                </div>
                                            </div>
                                            
                                            <!-- Button -->
                                        <div class="form-group mb-0 text-right" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['view'])){?>
                                            <!--
                                                <button class="btn btn-success waves-effect waves-light" id="btnPrint" onclick="window.print();"><i class="mdi mdi-database-plus mr-2"></i> Print
                                                </button>&nbsp;
                                            -->
                                                <a href="fl_dailyrecords_v1" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="fl_dailyrecords_v1" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="upload"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="fl_dailyrecords_v1" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php } ?> 
                                        </div>
                                        <!-- End Button -->
                                           
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                        <!-- end row -->









                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php'; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php'; ?>
    <?php include 'common/dailyquery_v1.php'; ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function getFileNameWithExt(event) {
            if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
                return;
            }

            const name = event.target.files[0].name;
            const lastDot = name.lastIndexOf('.');

            const fileName = name.substring(0, lastDot) + name.substring(lastDot + .1);
            outputfile.value = fileName;
            
        }
    </script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['records1'] != on)
{
    header('location:error404');
    exit;
}
?>