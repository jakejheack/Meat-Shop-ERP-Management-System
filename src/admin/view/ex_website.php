<?php include 'common/session.php'; ?>
<?php if($_SESSION['web'] == on){?>
    <?php include '../controller/ex_website.php'; ?>

    <!doctype html>
    <html lang="en">
    <head>
       <?php include 'common/title.php'; ?> 
       <?php include 'common/status2.php'; ?> 
       <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
       <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
       <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
       <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   </head>

   <?php include 'common/body.php'; ?>
   <div id="layout-wrapper">
    <?php include 'common/header.php'; ?>
    <?php include 'common/sidebar.php'; ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <div class="page-title-left">
                                <h4 class="mb-2">&ensp;Website</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Website</li>
                                </ol>
                            </div>

                            <?php if($_SESSION['editbut'] == on){?>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li><a href="ex_website_form?edit=1" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-progress-wrench mr-2"></i> Edit </a></li>&ensp;
                                    </ol>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>

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

                        <form method="post" action="ex_website_form.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <?php
                                            $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
                                            while($row=$res->fetch_array()){                                       
                                                ?>
                                                <div class="form-group row mt-3">
                                                    <label class="col-md-2 col-form-label">Store Name</label>
                                                    <div class="col-md-10">
                                                        <input style="text-transform:capitalize;" class="form-control" type="text" name="storeName" value="<?php echo $row['storeName']; ?>" autocomplete="off" readonly >
                                                    </div>
                                                </div>
                                                <div class="form-group row mt-3">
                                                    <label class="col-md-2 col-form-label">Store Logo</label>
                                                    <div class="col-md-10">
                                                       <div>
                                                           <img height="120" width="130" src="../uploads/website/<?php echo $row['logoOne']; ?>">
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="form-group row mt-3">
                                                <label class="col-md-2 col-form-label">Right Nav Heading</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="navHeading" value="<?php echo $row['navHeading']; ?>" autocomplete="off" readonly >
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-md-2 col-form-label">Title Heading</label>
                                                <div class="col-md-10">
                                                    <input class="form-control capitalize" type="text" name="headingTwo" value="<?php echo $row['headingTwo']; ?>" autocomplete="off" readonly >
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-md-2 col-form-label">Sub Heading</label>
                                                <div class="col-md-10">
                                                    <input class="form-control capitalize" type="text" name="headingOne" value="<?php echo $row['headingOne']; ?>" autocomplete="off" readonly >
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-md-2 col-form-label">About Us</label>
                                                <div class="col-md-10">
                                                    <input class="form-control capitalize" type="text" name="image_text" value="<?php echo $row['image_text']; ?>" autocomplete="off" readonly >
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <label class="col-md-2 col-form-label">Image Background</label>
                                                <div class="col-md-10">
                                                   <div>
                                                       <img height="120" width="130" src="../uploads/website/<?php echo $row['imageOne']; ?>">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="form-group row mt-3">
                                            <label class="col-md-2 col-form-label">Image 2</label>
                                            <div class="col-md-10">
                                               <div>
                                                   <img height="120" width="130" src="../uploads/website/<?php echo $row['imagetwoTwo']; ?>">
                                               </div>
                                           </div>
                                       </div>
                                       <hr>
                                       <div class="form-group row mt-4">
                                        <label class="col-md-2 col-form-label">Contact Address</label>
                                        <div class="col-md-10">
                                            <input class="form-control capitalize" type="text" name="pageaddress" value="<?php echo $row['pageaddress']; ?>" autocomplete="off" readonly >
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Contact Email</label>
                                        <div class="col-md-10">
                                            <input class="form-control capitalize" type="text" name="pageemail" value="<?php echo $row['pageemail']; ?>" autocomplete="off" readonly >
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Contact No.</label>
                                        <div class="col-md-10">
                                            <input class="form-control capitalize" type="text" name="pagecontact" value="<?php echo $row['pagecontact']; ?>" autocomplete="off" readonly >
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Facebook Link</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="mdi mdi-facebook"></i></div>
                                                <input class="form-control" type="text" name="fbLink" value="<?php echo $row['fbLink']; ?>" autocomplete="off" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Twitter Link</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="mdi mdi-twitter"></i></div>
                                                <input class="form-control" type="text" name="tweetLink" value="<?php echo $row['tweetLink']; ?>" autocomplete="off" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Instagram Link</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="mdi mdi-instagram"></i></div>
                                                <input class="form-control" type="text" name="instaLink" value="<?php echo $row['instaLink']; ?>" autocomplete="off" readonly >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-3">
                                        <label class="col-md-2 col-form-label">Footer</label>
                                        <div class="col-md-10">
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="mdi mdi-copyright"></i></div>
                                                <input class="form-control" type="text" name="footer" value="<?php echo $row['footer']; ?>" autocomplete="off" readonly >
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?> 
                            </div>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>

    <?php include 'common/footer.php'; ?>
</div>
</div>

<?php include 'common/theme.php'; ?>
<div class="rightbar-overlay"></div>
<script src="assets/js/time.js"></script>
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
<script src="assets/js/pages/session-timeout.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/pages/sweet-alerts.init.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['web'] != on)
{
    header('location:error404');
    exit;
}
?>