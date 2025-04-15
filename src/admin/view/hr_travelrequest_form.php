<?php include 'common/session.php' ?>
<?php if($_SESSION['travelreq'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/hr_travelrequest.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

   <!-- plugin css -->
   <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
   <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
</head>

<?php include 'common/body.php' ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'common/header.php' ?>
        <?php include 'common/sidebar.php' ?>



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
                                        <?php if(isset($_GET['view'])){?>
                                            <h4 class="mb-2">&ensp;View Request</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Travel Request</li>
                                            <li class="breadcrumb-item active">View Request</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Request</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Travel Request</li>
                                            <li class="breadcrumb-item active">Edit Request</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Request</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Travel Request</li>
                                            <li class="breadcrumb-item active">Add Request</li>
                                        </ol>
                                        <?php } ?> 
                                    
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate1">Date</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;" value="<?php echo $getROW['hr_travelToday'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="hr_travelToday" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelToday'];?>" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="hr_travelToday" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate2">Record ID</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate2" style="font-weight: 600;" value="<?php echo $getROW['hr_travelID'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate2" style="font-weight: 600;" placeholder="Record ID" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelID'];?>" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate2" style="font-weight: 600;" placeholder="Record ID" name="hr_travelID" value="<?php echo AutoGenID() ?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate3">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate3" value="<?php echo utf8_encode(ucwords(strtolower($getROW['hr_travelTitle'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate3" placeholder="Title (Max 25 Characters)" name="hr_travelTitle" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['hr_travelTitle']));?>" autocomplete="off" maxlength="25" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate3" placeholder="Title (Max 25 Characters)" name="hr_travelTitle" maxlength="25" autocomplete="off" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a title.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate4">Employee Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate3" value="<?php echo utf8_encode(ucwords(strtolower($getROW['hr_travelName'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select class="form-control" id="validate4" name="hr_travelName" required>
                                                                     <option value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelName'];?>"><?php if(isset($_GET['edit'])) echo utf8_encode(ucwords(strtolower($getROW['hr_travelName'])));?></option>
                                                                    <option value="" disabled>- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result6)):;?>
                                                                     <option value="<?php echo $row1[2];?> <?php echo $row1[3];?>"><?php echo utf8_encode(ucwords(strtolower($row1[2])));?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row1[3])));?>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control" id="validate4" name="hr_travelName" required>
                                                                    <option value="">- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result6)):;?>
                                                                     <option value="<?php echo utf8_encode(ucwords(strtolower($row1[2])));?> <?php echo utf8_encode(ucwords(strtolower($row1[3])));?>"><?php echo utf8_encode(ucwords(strtolower($row1[2])));?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row1[3])));?>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please provide record employee name.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate5">Depart Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr>  </label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate5" value="<?php echo date('M-d-Y h:i a', strtotime ($getROW['hr_travelDepart']));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="datetime-local" class="form-control" id="validate5" placeholder="Depart Date" name="hr_travelDepart" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelDepart'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="datetime-local" class="form-control" id="validate5" placeholder="Depart Date" name="hr_travelDepart" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a depart date.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate6">Return Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate6" value="<?php echo date('M-d-Y h:i a', strtotime ($getROW['hr_travelReturn']));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                             <input type="datetime-local" class="form-control" id="validate6" placeholder="Return Date" name="hr_travelReturn"  value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelReturn'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="datetime-local" class="form-control" id="validate6" placeholder="Return Date" name="hr_travelReturn" required>
                                                        <?php } ?>
                                                        
                                                        <div class="invalid-feedback">
                                                            Please provide a return date.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate7">Destination&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate7" name="hr_travelDes" value="<?php echo $getROW['hr_travelDes'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate7" placeholder="Destination (Max 25 Characters)" name="hr_travelDes" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords(strtolower($getROW['hr_travelDes'])));?>" maxlength="25" autocomplete="off" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate7" placeholder="Destination (Max 25 Characters)" name="hr_travelDes" maxlength="25" autocomplete="off" required>
                                                        <?php } ?>  

                                                        
                                                        <div class="invalid-feedback">
                                                            Please provide a destination.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate8">Expense&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text">₱</div>
                                                            <?php if(isset($_GET['view'])){?>
                                                                <input type="number" class="form-control" id="validate8" value="<?php echo number_format($getROW['hr_travelExp'],2);?>" readonly>
                                                            <?php } elseif(isset($_GET['edit'])){?>
                                                                <input type="number" class="form-control" id="validate8" placeholder="Expense" name="hr_travelExp" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelExp'];?>" autocomplete="off"  required>
                                                            <?php } else { ?>
                                                                <input type="number" class="form-control" id="validate8" placeholder="Expense" name="hr_travelExp" autocomplete="off" required>
                                                            <?php } ?> 
                                                            
                                                            <div class="invalid-feedback">
                                                            Please provide a expense.
                                                            </div>
                                                        </div>                                                        
                                                         
                                                    </div>
                                                </div>
                                                 <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate9">Payment Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate8" value="<?php echo $getROW['hr_travelPaytype'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select class="form-control" id="validate9" placeholder="Payment Type" name="hr_travelPaytype" required>
                                                                    <option value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelPaytype'];?>"><?php if(isset($_GET['edit'])) echo $getROW['hr_travelPaytype'];?></option>
                                                                    <option value="" disabled>- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result7)):;?>
                                                                    <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control" id="validate9" placeholder="Payment Type" name="hr_travelPaytype" required>
                                                                    <option value="">- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result7)):;?>
                                                                    <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                                <?php endwhile;?>
                                                            </select>                                                            
                                                        <?php } ?>
                                                        
                                                         <div class="invalid-feedback">
                                                            Please provide a payment type.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate10">Notes</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate8" value="<?php echo $getROW['hr_travelNotes'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate10" placeholder="Notes" name="hr_travelNotes" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_travelNotes'];?>" maxlength="120" autocomplete="off">
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate10" placeholder="Notes" name="hr_travelNotes" maxlength="120" autocomplete="off">
                                                        <?php } ?> 
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
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
                                                <a href="hr_travelrequest" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="hr_travelrequest" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="hr_travelrequest" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php } ?> 
                                        </div>
                                        <!-- End Button -->
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php' ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php' ?>

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

    <!-- parsleyjs -->
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['travelreq'] != on)
{
    header('location:error404');
    exit;
}
?>