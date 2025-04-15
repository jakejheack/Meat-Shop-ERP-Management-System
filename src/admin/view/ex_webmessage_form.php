<?php include 'common/session.php'; ?>
<?php if($_SESSION['webmes'] == on){?>
<?php include '../controller/ex_webmessage.php'; ?>
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
                                    <h4 class="mb-2">&ensp;Website Message</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Website Message</li>
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
                    

                        <form method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <br>
                                    <div class="card-body">
                                        <div class="form-group row" id="hide-from-screen">
                                            <label class="col-md-2 col-form-label">Status</label>
                                            <div class="col-md-10">
                                                <?php if(isset($_GET['view'])){?>
                                                    <input name="webmesStatus" class="form-control" value="Read" readonly>
                                                 <?php } else { ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="<?php if(isset($_GET['view'])) echo $getROW['webmesName'];?>" required readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" value="<?php if(isset($_GET['view'])) echo $getROW['webmesEmail'];?>" autocomplete="off" readonly >
                                            </div>
                                        </div>
                                        <div class="form-group row mt-3">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Message</label>
                                            <div class="col-md-10">
                                                <div style="border:1px solid #CED4DA;border-radius: 9px;height:auto;">
                                                    <div style="margin-left:2%;margin-top:1%">
                                                        <p><?php echo utf8_encode($getROW['webmesText']);?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <!-- Button -->
                                        <div class="form-group mt-3 text-right" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['view'])) { ?> 
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-sticker-check-outline mr-2"></i> Ok </button>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save 
                                                </button>&nbsp;
                                                <a href="websiteMessage.php" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php } ?> 
                                        </div>
                                        <!-- End Button -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
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

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['webmes'] != on)
{
    header('location:error404');
    exit;
}
?>