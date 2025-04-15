<?php include 'common/session.php' ?>
<?php if($_SESSION['empleave'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/hr_attleave.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?>
   <?php include 'common/print.php' ?> 
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
                                            <h4 class="mb-2">&ensp;View Leave</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Employee Leave</li>
                                            <li class="breadcrumb-item active">View Leave</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Leave</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Employee Leave</li>
                                            <li class="breadcrumb-item active">Edit Leave</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Leave</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Employee Leave</li>
                                            <li class="breadcrumb-item active">Add Leave</li>
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
                                        <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate1">Date</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;" value="<?php echo $getROW['leaveDate'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="leaveDate" value="<?php if(isset($_GET['edit'])) echo $getROW['leaveDate'];?>" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="leaveDate" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate4">Employee Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate3" value="<?php echo utf8_encode(ucwords(strtolower($getROW['leaveName'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select class="form-control" id="validate4" name="leaveName"x required>
                                                                     <option value="<?php if(isset($_GET['edit'])) echo $getROW['leaveName'];?>"><?php if(isset($_GET['edit'])) echo utf8_encode(ucwords(strtolower($getROW['leaveName'])));?></option>
                                                                    <option value="" select disabled>- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result6)):;?>
                                                                     <option value="<?php echo $row1[2];?> <?php echo $row1[3];?>"><?php echo utf8_encode(ucwords(strtolower($row1[2])));?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row1[3])));?>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select style="width:100%;" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." id="employee" name="leaveName" required>
                                                                    <option value="">- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result6)):;?>
                                                                     <option value="<?php echo utf8_encode(ucwords(strtolower($row1[2])));?> <?php echo utf8_encode(ucwords(strtolower($row1[3])));?>"><?php echo utf8_encode(ucwords(strtolower($row1[2])));?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row1[3])));?>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please provide a employee name.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate5">Date From&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr>  </label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate5" value="<?php echo date('M-d-Y h:i a', strtotime ($getROW['leaveFrom']));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="date" class="form-control" id="validate5" placeholder="Date From" name="leaveFrom" value="<?php if(isset($_GET['edit'])) echo $getROW['leaveFrom'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="date" class="form-control" id="validate5" placeholder="Date From" name="leaveFrom" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a date from.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate6">Date To&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate6" value="<?php echo date('M-d-Y h:i a', strtotime ($getROW['leaveTo']));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                             <input type="date" class="form-control" id="validate6" placeholder="Date To" name="leaveTo"  value="<?php if(isset($_GET['edit'])) echo $getROW['leaveTo'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="date" class="form-control" id="validate6" placeholder="Date To" name="leaveTo" required>
                                                        <?php } ?>
                                                        
                                                        <div class="invalid-feedback">
                                                            Please provide a date to.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate10">Description&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate8" value="<?php echo $getROW['leaveDes'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select type="text" name="leaveDes" class="form-control" autocomplete="off" required >
                                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['leaveDes'];?>"><?php if(isset($_GET['edit'])) echo $getROW['leaveDes'];?></option>
                                                                <option value="" select disabled>- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result15)):;?>
                                                                    <option value="<?php echo $row1[1];?>"><?php echo utf8_encode(ucwords(strtolower($row1[1])));?></option>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select type="text" name="leaveDes" class="form-control" autocomplete="off" required >
                                                                <option value="">- SELECT-</option>
                                                                <?php while($row1 = mysqli_fetch_array($result15)):;?>
                                                                    <option value="<?php echo $row1[1];?>"><?php echo utf8_encode(ucwords(strtolower($row1[1])));?></option>
                                                                <?php endwhile;?>
                                                            </select>

                                                            
                                                        <?php } ?> 
                                                        
                                                        <div class="invalid-feedback">
                                                           Please provide a description.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate7">File</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <a href="../uploads/payment/<?php echo $getROW['imageText'];?>" target="_blank"><label style="margin-top:7px;margin-left:px;"><i class="mdi mdi-cloud-download-outline"></i>&ensp;Download File</label></a>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <div class="col-md-10">
                                                                <input type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>

                                                                <div class="valid-feedback mt-1">
                                                                    Looks good!.
                                                                </div>
                                                            </div>
                                                            <div id="hide-from-screen">
                                                             <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="col-md-10">
                                                                <input type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>

                                                                <div class="valid-feedback mt-1">
                                                                    Looks good!.
                                                                </div>
                                                            </div>
                                                            <div id="hide-from-screen">
                                                             <input name="imageText" id='outputfile' value="null" readonly/>
                                                            </div>
                                                        <?php } ?>  

                                                        
                                                        
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
                                                <a href="hr_attleave" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="hr_attleave" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="upload"><i class="mdi mdi-database-plus mr-2"></i> Submit
                                                </button>&nbsp;
                                                <a href="hr_attleave" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
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
if($_SESSION['empleave'] != on)
{
    header('location:error404');
    exit;
}
?>