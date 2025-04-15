<?php include 'common/session.php'; ?>
<?php if($_SESSION['perfor'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/hr_performance.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/status2.php'; ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

   <!-- jquery-bar-rating css -->
   <link href="assets/libs/jquery-bar-rating/themes/css-stars.css" rel="stylesheet" type="text/css" />
   <!-- plugin css -->
   <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
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
                            <?php if(isset($_GET['edit'])){?>
                            <h4 class="mb-2">&ensp;Edit Performance</h4>
                            <?php } else { ?>
                                <h4 class="mb-2">&ensp;Add Performance</h4>
                            <?php } ?>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Performance</li>
                                <?php if(isset($_GET['edit'])){?>
                                    <li class="breadcrumb-item active">Edit Record</li>
                                <?php } else { ?>
                                    <li class="breadcrumb-item active">Add Record</li>
                                <?php } ?>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->    

            <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                <script src="../../../../dist/assets/libs/sweetalert2/sweetalert2.min.js"></script>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<?php echo $_SESSION['success_message2']; ?>',
                        showConfirmButton: false,
                        timer: 3000
                    })
                </script>
                <?php unset($_SESSION['success_message']); } ?>
                <!-- End Status -->

                <form method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-2">
                                        <div class="form-group mt-2">
                                            <label for="formrow-email-input">Date</label>
                                            <?php if(isset($_GET['edit'])){?>
                                                 <input type="text" class="form-control" name="hr_perDate" value="<?php if(isset($_GET['edit'])) echo $getROW['hr_perDate'];?>" autocomplete="off" style="font-weight: 600;" readonly>
                                             <?php } else { ?>
                                                 <input type="text" class="form-control" name="hr_perDate" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" style="font-weight: 600;"  readonly>
                                            <?php } ?>
                                        </div>
                                    </div>

                                        <div class="col-lg-4">                                            
                                            <div class="form-group mt-2">
                                                <label class="control-label">Employee Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                <?php if(isset($_GET['edit'])){?>
                                                 <input class="form-control" type="text" name="id" value="<?php if(isset($_GET['edit'])) echo utf8_encode(mb_strtoupper(strtolower($getROW['firstname']))); ?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['lastname'])));?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['suffix'])));?>" autocomplete="off" style="font-weight:600;text-transform:capitalize;" disabled>
                                             <?php } else { ?>
                                                <select name="hr_perName" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." autocomplete="off" required >
                                                    <option value="">Select Report Description</option>
                                                    <?php while($row1 = mysqli_fetch_array($result17)):;?>
                                                        <option class="uppercase" value="<?php echo $row1[0];?>"><?php echo utf8_encode(mb_strtoupper(strtolower($row1[2])));?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($row1[4])));?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($row1[5])));?></option>
                                                    <?php endwhile;?>
                                                </select>
                                            <?php } ?>
                                            <div class="invalid-feedback">
                                                Please choose a employee name.
                                            </div>
                                            </div>
                                         </div>
                                    


                                    <div class="col-lg-4">
                                        <div class="form-group mt-2">
                                            <label for="formrow-firstname-input">Description&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                            <?php if(isset($_GET['edit'])){?>
                                                <select type="text" name="hr_perDesc" class="form-control" autocomplete="off" required >
                                                    <option value="<?php if(isset($_GET['edit'])) echo $getROW['hr_perDesc'];?>"><?php if(isset($_GET['edit'])) echo utf8_encode(mb_strtoupper(strtolower($getROW['hr_perDesc'])));?></option>
                                                    <option value="" disabled select>- SELECT -</option>
                                                    <?php while($row1 = mysqli_fetch_array($result5)):;?>
                                                        <option value="<?php echo $row1[1];?>"><?php echo utf8_encode(mb_strtoupper(strtolower($row1[1])));?></option>
                                                    <?php endwhile;?>
                                                </select>
                                            <?php } else { ?>
                                                <select type="text" name="hr_perDesc" class="form-control" autocomplete="off" required >
                                                    <option value="">- SELECT -</option>
                                                    <?php while($row1 = mysqli_fetch_array($result5)):;?>
                                                        <option value="<?php echo $row1[1];?>"><?php echo utf8_encode(mb_strtoupper(strtolower($row1[1])));?></option>
                                                    <?php endwhile;?>
                                                </select>
                                            <?php } ?>
                                            <div class="invalid-feedback">
                                                Please choose a description.
                                            </div>
                                        </div>
                                    </div>



                                    
                                    <!--
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="formrow-email-input">Status</label>
                                            <?php if(isset($_GET['edit'])){?>
                                                <select type="text" name="hr_perStatus" class="form-control" autocomplete="off" required >
                                                    <option value="<?php if(isset($_GET['edit'])) echo $getROW['hr_perStatus'];?>"><?php if(isset($_GET['edit'])) echo $getROW['hr_perStatus'];?></option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Ongoing">Ongoing</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
                                            <?php } else { ?>
                                                <select type="text" name="hr_perStatus" class="form-control" autocomplete="off" required >
                                                    <option value="">Select Status</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Ongoing">Ongoing</option>
                                                    <option value="Complete">Complete</option>
                                                </select>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    -->
                                    <div class="col-md-2">
                                        <div class="form-group mt-2">
                                            <label for="formrow-password-input">Rating&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                            <div>
                                                <?php if(isset($_GET['edit'])){?>
                                                    <select id="rating-css" name="hr_perRating" autocomplete="off" required>
                                                        <option value="<?php if(isset($_GET['edit'])) echo $getROW['hr_perRating'];?>"><?php if(isset($_GET['edit'])) echo $getROW['hr_perRating'];?></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                <?php } else { ?>
                                                 <select id="rating-css" name="hr_perRating" autocomplete="off" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            <?php } ?>
                                            <div class="invalid-feedback">
                                                Please make a rate.
                                            </div>
                                        </div>
                                    </div>
                                </div>                                      
                               </div>                          

                               <!--
                               <div class="col-lg-6 ml-lg-auto">
                                <div class="mt-5 mt-lg-4">
                                    <div class="form-group">
                                        <label for="formrow-firstname-input">Notes</label>
                                        <textarea name="hr_perNotes" id="summernote-editor" class="summernote"><p></p><?php if(isset($_GET['edit'])) echo $getROW['hr_perNotes'];?></textarea>
                                    </div>
                                </div>
                            </div> 
                            -->       

                             <div class="col-lg-12 ml-lg-auto">
                                <div class="form-group mt-3">
                                    <label for="formrow-firstname-input">Notes</label>
                                    <textarea name="hr_perNotes" id="classic-editor"><p></p><?php if(isset($_GET['edit'])) echo utf8_encode($getROW['hr_perNotes']);?></textarea>
                                    <div class="valid-feedback mt-2">
                                        Looks good!
                                    </div>
                                </div>
                            </div>               

                            <!-- Button -->
                            <div class="form-group mt-3 text-right" style="position:relative; text-align: right;">
                                <?php if(isset($_GET['edit'])) { ?> 
                                    <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                    <a href="hr_performance" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                <?php } else { ?>
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save
                                    </button>&nbsp;
                                    <a href="hr_performance" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                <?php } ?> 
                            </div>
                            <!-- End Button -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Form Layout -->

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
<!-- jquery-bar-rating js -->
<script src="assets/libs/jquery-bar-rating/jquery.barrating.min.js"></script>   
<script src="assets/js/pages/rating-init.js"></script>
<!-- plugins -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>
<!-- ckeditor -->
<script src="assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>
<script>
        ClassicEditor
        .create( document.querySelector( '#classic-editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['perfor'] != on)
{
    header('location:error404');
    exit;
}
?>