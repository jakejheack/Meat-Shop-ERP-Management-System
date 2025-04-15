<?php include 'common/session.php' ?>
<?php if($_SESSION['perfor'] == on){?>
<?php include '../controller/hr_performance.php'; ?>

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

   <!-- jquery-bar-rating css -->
   <link href="assets/libs/jquery-bar-rating/themes/css-stars.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-2">&ensp;View Performance</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Performance</li>
                                <li class="breadcrumb-item active">View</li>
                            </ol>
                        </div>


                    </div>
                </div>
            </div>
            <!-- end page title -->    


            <!-- Status -->
            <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                <script src="../../../../dist/assets/libs/sweetalert2/sweetalert2.min.js"></script>
                <script>
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: '<?php echo $_SESSION['success_message2']; ?>',
                        showConfirmButton: false,
                        timer: 1500
                    })
                </script>
                <?php unset($_SESSION['success_message']); } ?>
                <!-- End Status -->

                <form method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-4">                                            
                                            <div class="form-group mt-2">
                                                <label class="control-label">Employee Name</label>
                                                <input class="form-control" type="text" value="<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['firstname'])));?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['lastname']))); ?>&nbsp;<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['suffix'])));?>" style="font-weight:600;text-transform:capitalize;" disabled>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group mt-2">
                                                <label for="formrow-firstname-input">Description</label>
                                                <input class="form-control" type="text" value="<?php echo utf8_encode(mb_strtoupper(strtolower($getROW['hr_perDesc'])));?>" style="font-weight:600;" disabled>
                                            </div>
                                        </div>



                                        <div class="col-md-2 mt-2">
                                            <div class="form-group">
                                                <label for="formrow-email-input">Date</label>               
                                                <input class="form-control" type="text" value="<?php echo mb_strtoupper(strtolower(date('M.d.Y', strtotime($getROW['hr_perDate']))));?>" style="font-weight:600;" disabled>

                                            </div>
                                        </div>
                                        <!--
                                        <div class="col-md-6 mt-2">
                                            <div class="form-group">
                                                <label for="formrow-email-input">Status</label>                                                     <input class="form-control" type="text" name="hr_employeeID" value="<?php echo $getROW['hr_perStatus'];?>" style="font-weight:600;" disabled>
                                            </div>
                                        </div>
                                        -->
                                                <div class="col-md-2 mt-2">
                                                    <div class="form-group">
                                                        <label for="formrow-password-input">Rating</label>
                                                        <div>
                                                            <select id="rating-css" disabled>
                                                                <option readonly><?php echo $getROW['hr_perRating'];?></option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>






                                            <div class="col-lg-12 ml-lg-auto">
                                                <div class="mt-5 mt-lg-4">
                                                    <div class="form-group">
                                                        <label for="formrow-firstname-input">Notes</label>
                                                        <div style="border:1px solid #CED4DA;border-radius: 9px;height:auto;">
                                                            <div style="margin-left:2%;margin-top:1%">
                                                                <p><?php echo utf8_encode($getROW['hr_perNotes']);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Button -->
                                            <div class="form-group mt-5 text-right" style="position:relative; text-align: right;">
                                                <a href="hr_performance" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            </div>
                                            <!-- End Button -->

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

        <!-- jquery-bar-rating js -->
        <script src="assets/libs/jquery-bar-rating/jquery.barrating.min.js"></script>   
        <script src="assets/js/pages/rating-init.js"></script>
        <!-- plugins -->
        <script src="assets/libs/select2/js/select2.min.js"></script>
        <!-- init js -->
        <script src="assets/js/pages/form-advanced.init.js"></script>
        <!-- Summernote js -->
        <script src="assets/libs/summernote/summernote-bs4.min.js"></script>
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