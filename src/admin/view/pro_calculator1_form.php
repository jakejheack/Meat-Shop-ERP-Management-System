<?php include 'common/session.php' ?>
<?php if($_SESSION['calc1'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/pro_calculator1.php'; ?>
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
                                            <h4 class="mb-2">&ensp;View Calculator #1</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #1</li>
                                            <li class="breadcrumb-item active">View Calculator #1</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Calculator #1</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #1</li>
                                            <li class="breadcrumb-item active">Edit Calculator #1</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Calculator #1</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #1</li>
                                            <li class="breadcrumb-item active">Add Calculator #1</li>
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
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;" value="<?php echo $getROW['calcODate'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="calcODate" value="<?php if(isset($_GET['edit'])) echo $getROW['calcODate'];?>" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="calcODate" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate3">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate3" value="<?php echo utf8_encode(ucwords(strtolower($getROW['calcOTitle'])));?>" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" name="calcOTitle" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcOTitle'];?>" autocomplete="off" required/>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a title.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>

                                               <!-- 1st -->   
                                                    <div class="row">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label>Name</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Recovery Rate</label>
                                                        <?php } else { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Recovery Rate</label>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Percentage -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Percent</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcRPercent'];?>" readonly/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div> 
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input id="calcRPercent" name="calcRPercent" style="font-weight:600;color:#f46a6a;" class="form-control" value="100" readonly/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div>  
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                   
                                                    <!-- Live Weight -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Live Weight</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input type="number" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcRLive'];?>" disabled/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input type="number" id="calcRLive" name="calcRLive"  class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcRLive'];?>" autocomplete="off" required/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>

                                                            <div class="invalid-feedback">
                                                                Please provide a live weight.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>

                                                        

                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass Weight -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Carcass Weight</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input type="number" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcRCarcass'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="calcRCarcass" type="number" name="calcRCarcass" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcRCarcass'];?>" autocomplete="off" required/>

                                                            <div class="invalid-feedback">
                                                                Please provide a carcass weight.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total -->
                                                    <div class="form-group col-lg-2">
                                                        &ensp; &ensp; &ensp; &ensp;&nbsp;<label>Total</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcRTotal" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcRTotal'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcRTotal" name="calcRTotal" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcRTotal'];?>" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 2nd -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label>Name</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Live Weight</label>
                                                        <?php } else { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Live Weight</label>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass Weight Price -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Carcass Weight Price</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcLCarcass'];?>" disabled/>
                                                            &ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div>  
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input type="number" id="calcLCarcass" name="calcLCarcass" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcLCarcass'];?>" autocomplete="off" required/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div>  

                                                            <div class="invalid-feedback">
                                                                Please provide a weight price.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Percent -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Percent</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcLPercent'];?>" disabled/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input id="calcLPercent" name="calcLPercent" style="font-weight:600;color:#f46a6a;" class="form-control" value="100" autocomplete="off" readonly/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Recovery Rate -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Recovery Rate</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcRTotal'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="calcRTotal2" style="font-weight:600;color:#f46a6a;" name="calcLRecovery" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcLRecovery'];?>" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total -->
                                                    <div class="form-group col-lg-2">
                                                         &ensp; &ensp; &ensp; &ensp;&nbsp;<label>Total</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcLTotal" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcLTotal'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcLTotal" name="calcLTotal" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcLTotal'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 3rd -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label>Name</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Carcass Weight</label>
                                                        <?php } else { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;">Carcass Weight</label>
                                                        <?php } ?>
                                                    </div>
                                                        
                                                    <!-- Carcass Weight Price -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Live Weight Price</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCWeight'];?>" disabled/>
                                                            &ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>  
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input id="calcCTotal4" name="calcCWeight" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCWeight'];?>" autocomplete="off" readonly/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">X</div>  
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                        
                                                    <!-- Percent -->
                                                    <div class="form-group col-lg-3">
                                                        <label>Percent</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                        <div class="input-group">
                                                            <input class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcCPercent'];?>" disabled/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div>
                                                        </div>
                                                        <?php } else { ?>
                                                        <div class="input-group">
                                                            <input id="calcCPercent" name="calcCPercent" style="font-weight:600;color:#f46a6a;" class="form-control" value="100" autocomplete="off" readonly/>&ensp;&ensp;&ensp;
                                                            <div class="input-group-text">/</div>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Recovery Rate -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Recovery Rate</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcCRecovery'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="calcCTotal3" style="font-weight:600;color:#f46a6a;" name="calcCRecovery" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCRecovery'];?>" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total -->
                                                    <div class="form-group col-lg-2">
                                                         &ensp; &ensp; &ensp; &ensp;&nbsp;<label>Total</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcCTotal" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php echo $getROW['calcCTotal'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">=</div>&ensp;
                                                                <input id="calcCTotal" name="calcCTotal" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCTotal'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                            <!-- Button -->
                                        <div class="form-group mb-0 text-right mt-3" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['view'])){?>
                                                <a href="pro_calculator1" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="pro_calculator1" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="pro_calculator1" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
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
        $(function () 
        {
            $("#calcRTotal, #calcRPercent, #calcRLive, #calcRCarcass, #calcLTotal, #calcLCarcass, #calcLPercent, #calcRTotal2").keyup(function () {
                $("#calcRTotal").val(+$("#calcRPercent").val() / +$("#calcRLive").val() * +$("#calcRCarcass").val() );

                $("#calcRTotal2").val(+$("#calcRTotal").val() );

                $("#calcLTotal").val(+$("#calcLCarcass").val() / +$("#calcLPercent").val() * +$("#calcRTotal").val() );

                $("#calcCTotal3").val(+$("#calcRTotal").val() );

                $("#calcCTotal4").val(+$("#calcLTotal").val() );

                $("#calcCTotal").val(+$("#calcCTotal4").val() * +$("#calcCPercent").val() / +$("#calcCTotal3").val() );


            });
        });
    </script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['calc1'] != on)
{
    header('location:error404');
    exit;
}
?>