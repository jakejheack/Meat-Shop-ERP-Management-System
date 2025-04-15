<?php include 'common/session.php' ?>
<?php if($_SESSION['suppro'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/pro_distprofile.php'; ?>
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
                                <h4 class="mb-2">&ensp;View Profile</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                    <li class="breadcrumb-item active">View Profile</li>
                                </ol>
                            <?php } elseif(isset($_GET['edit'])){?>
                                <h4 class="mb-2">&ensp;Edit Profile</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                    <li class="breadcrumb-item active">Edit Profile</li>
                                </ol>
                            <?php } else { ?>
                                <h4 class="mb-2">&ensp;Add Profile</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                    <li class="breadcrumb-item active">Add Profile</li>
                                </ol>
                            <?php } ?> 

                        </div>


                    </div>
                </div>
            </div>
            <!-- end page title -->    


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Profile ID</label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo $getROW['sd_profileID'];?></b></label>
                                        <?php }elseif(isset($_GET['edit'])) { ?> 
                                            <input class="form-control" type="text" name="sd_profileID" value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileID'];?>" autocomplete="off" style="font-weight:600;" readonly>
                                        <?php } else { ?>
                                            <input class="form-control" type="text" name="sd_profileID" class="form-control" value="<?php echo AutoGenID() ?>" autocomplete="off" readonly >

                                        <?php } ?>
                                        <div class="invalid-feedback">
                                            Please provide a id.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo utf8_encode(ucwords(strtolower($getROW['sd_profileName'])));?></b></label>
                                        <?php } else { ?>
                                            <input class="form-control" type="text" name="sd_profileName" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileName'];?>" autocomplete="off" required >

                                            <div class="invalid-feedback">
                                                Please provide a name.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Contacts&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo $getROW['sd_profileContacts'];?></b></label>
                                        <?php } else { ?>
                                            <input class="form-control" type="number" name="sd_profileContacts" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileContacts'];?>" autocomplete="off" required >

                                            <div class="invalid-feedback">
                                                Please provide a contact.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo utf8_encode(ucwords(strtolower($getROW['sd_profileAddress'])));?></b></label>
                                        <?php } else { ?>
                                            <input class="form-control" type="text" name="sd_profileAddress" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileAddress'];?>" autocomplete="off" required >

                                            <div class="invalid-feedback">
                                                Please provide a address.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        <?php } ?> 
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-md-2 col-form-label">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo utf8_encode(ucwords(strtolower($getROW['ex_sdCategory'])));?></b></label>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <select type="text" name="sd_profileCategory" class="form-control" autocomplete="off" required >
                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileCategory'];?>"><?php if(isset($_GET['edit'])) echo $getROW['ex_sdCategory'];?></option> 
                                                <?php while($row1 = mysqli_fetch_array($result10)):;?>
                                                    <option value="" disabled select>- SELECT -</option>
                                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        <?php } else { ?>
                                            <select type="text" name="sd_profileCategory" class="form-control" autocomplete="off" required>
                                                <option value="">- SELECT -</option>
                                                <?php while($row1 = mysqli_fetch_array($result10)):;?>
                                                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                                <?php endwhile;?>
                                            </select>
                                        <?php } ?>

                                        <div class="invalid-feedback">
                                            Please select a category.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-md-2 col-form-label">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo $getROW['sd_profileType'];?></b></label>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <select class="form-control" name="sd_profileType" autocomplete="off" required>
                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileType'];?>"><?php echo $getROW['sd_profileType'];?></option>
                                                <option value="" disabled select>- SELECT -</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Business">Business</option>
                                            </select>
                                        <?php } else { ?>
                                            <select class="form-control" name="sd_profileType" autocomplete="off" required>
                                                <option value="">- SELECT -</option>
                                                <option value="Personal">Personal</option>
                                                <option value="Business">Business</option>
                                            </select>
                                        <?php } ?>

                                        <div class="invalid-feedback">
                                            Please select a type.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label class="col-md-2 col-form-label">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <div class="col-md-10">
                                        <?php if(isset($_GET['view'])) { ?>
                                            <label class="form-control" style="font-weight:600;" required><b><?php echo $getROW['sd_profileStatus'];?></b></label>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <select class="form-control" name="sd_profileStatus" autocomplete="off" required>
                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['sd_profileStatus'];?>"><?php echo $getROW['sd_profileStatus'];?></option>
                                                <option value="" disabled select>- SELECT -</option>
                                                <option value="Enabled">Enabled</option>
                                                <option value="Disabled">Disabled</option>
                                            </select>
                                        <?php } else { ?>
                                            <select class="form-control" name="sd_profileStatus" autocomplete="off" required>
                                                <option value="">- SELECT -</option>
                                                <option value="Enabled">Enabled</option>
                                                <option value="Disabled">Disabled</option>
                                            </select>
                                        <?php } ?>
                                        <div class="invalid-feedback">
                                            Please select a status.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group mb-0 mt-4 text-right" style="position:relative; text-align: right;">
                                    <?php if(isset($_GET['view'])){?>
                                        <a href="pro_distprofile" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                    <?php }elseif(isset($_GET['edit'])) { ?> 
                                        <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                        <a href="pro_distprofile" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                    <?php } else { ?>
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                        </button>&nbsp;
                                        <a href="pro_distprofile" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                    <?php } ?> 
                                </div>
                                <!-- End Button -->
                            </div>
                        </form>
                    </div>
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
if($_SESSION['suppro'] != on)
{
    header('location:error404');
    exit;
}
?>