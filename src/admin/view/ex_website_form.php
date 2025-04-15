<?php include 'common/session.php'; ?>
<?php if($_SESSION['web'] == on){?>
    <?php include '../controller/ex_website.php'; ?>

    <!doctype html>
    <html lang="en">
    <head>
     <?php include 'common/title.php'; ?> 
     <?php include 'common/print.php'; ?> 
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
                            <h4 class="mb-2">&ensp;Website Settings</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item">Website Settings</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>


                    </div>
                </div>
            </div>
            <!-- end page title -->  


            <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             <div class="form-group row mt-3">
                                <label class="col-md-2 col-form-label">Store Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="storeName" value="<?php if(isset($_GET['edit'])) echo $getROW['storeName'];?>" autocomplete="off" required >

                                    <div class="invalid-feedback">
                                        Please provide a name.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <label class="col-md-2 col-form-label">Store Logo</label>
                                <div class="col-md-10">
                                 <div>
                                     <input id='inputfile' type="file" name="logo" onChange='getFileNameWithExt3(event)'/>

                                     <div class="invalid-feedback">
                                        Please provide a logo.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div id="hide-from-screen">
                                 <input name="logoOne" id='outputfile3' value="<?php if(isset($_GET['edit'])) echo $getROW['logoOne'];?>" readonly/>
                             </div>
                         </div>
                     </div>
                     <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">Right Nav Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="navHeading" value="<?php if(isset($_GET['edit'])) echo $getROW['navHeading'];?>" autocomplete="off" required >

                            <div class="invalid-feedback">
                                Please provide a nav name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>

                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">Title Heading</label>
                        <div class="col-md-10">
                            <input class="form-control capitalize" type="text" name="headingTwo" value="<?php if(isset($_GET['edit'])) echo $getROW['headingTwo'];?>" autocomplete="off" required >

                            <div class="invalid-feedback">
                                Please provide a heading 2.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">Sub Heading</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="headingOne" value="<?php if(isset($_GET['edit'])) echo $getROW['headingOne'];?>" autocomplete="off" required >

                            <div class="invalid-feedback">
                                Please provide a heading 1.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">About Us</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="image_text" value="<?php if(isset($_GET['edit'])) echo $getROW['image_text'];?>" autocomplete="off" required >

                            <div class="invalid-feedback">
                                Please provide a about.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-md-2 col-form-label">Main Background</label>
                        <div class="col-md-10">
                         <div>
                             <input id='inputfile' type="file" name="image" onChange='getFileNameWithExt(event)'/>

                             <div class="invalid-feedback">
                                Please provide a background.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div id="hide-from-screen">
                         <input name="imageOne" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageOne'];?>" readonly/>
                     </div>
                 </div>
             </div>
             <div class="form-group row mt-3">
                <label class="col-md-2 col-form-label">Right Image</label>
                <div class="col-md-10">
                 <div>
                     <input id='inputfile2' type="file" name="imageTwo" onChange='getFileNameWithExt2(event)'/>

                     <div class="invalid-feedback">
                        Please provide a right image.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div id="hide-from-screen">
                 <input name="imagetwoTwo" id='outputfile2' value="<?php if(isset($_GET['edit'])) echo $getROW['imagetwoTwo'];?>" readonly/>
             </div>
         </div>
     </div>

     <br>
     <hr>
     <div class="form-group row mt-4">
        <label class="col-md-2 col-form-label">Contact Address</label>
        <div class="col-md-10">
            <input class="form-control capitalize" type="text" name="pageaddress" value="<?php if(isset($_GET['edit'])) echo $getROW['pageaddress'];?>" autocomplete="off" required>

            <div class="invalid-feedback">
                Please provide a address.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Contact Email</label>
        <div class="col-md-10">
            <input class="form-control" type="email" name="pageemail" value="<?php if(isset($_GET['edit'])) echo $getROW['pageemail'];?>" autocomplete="off">

            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Contact No.</label>
        <div class="col-md-10">
            <input class="form-control" type="number" name="pagecontact" value="<?php if(isset($_GET['edit'])) echo $getROW['pagecontact'];?>" autocomplete="off">

            <div class="invalid-feedback">
                Please provide a contact number.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Facebook Link</label>
        <div class="col-md-10">
            <div class="input-group">
                <div class="input-group-text"><i class="mdi mdi-facebook"></i></div>
                <input class="form-control" type="text" name="fbLink" value="<?php if(isset($_GET['edit'])) echo $getROW['fbLink'];?>" autocomplete="off">

                <div class="invalid-feedback">
                    Please provide a facebook link.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Twitter Link</label>
        <div class="col-md-10">
            <div class="input-group">
                <div class="input-group-text"><i class="mdi mdi-twitter"></i></div>
                <input class="form-control" type="text" name="tweetLink" value="<?php if(isset($_GET['edit'])) echo $getROW['tweetLink'];?>" autocomplete="off">

                <div class="invalid-feedback">
                    Please provide a twitter link.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Instagram Link</label>
        <div class="col-md-10">
            <div class="input-group">
                <div class="input-group-text"><i class="mdi mdi-instagram"></i></div>
                <input class="form-control" type="text" name="instaLink" value="<?php if(isset($_GET['edit'])) echo $getROW['instaLink'];?>" autocomplete="off">

                <div class="invalid-feedback">
                    Please provide a instagram link.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mt-3">
        <label class="col-md-2 col-form-label">Footer</label>
        <div class="col-md-10">
            <div class="input-group">
                <div class="input-group-text"><i class="mdi mdi-copyright"></i></div>
                <input class="form-control" type="text" name="footer" value="<?php if(isset($_GET['edit'])) echo $getROW['footer'];?>" autocomplete="off" required >

                <div class="invalid-feedback">
                    Please provide a footer.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
    </div>

    <div class="form-group mt-4 text-right" style="position:relative; text-align: right;">
        <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
        <a href="ex_website" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
    </div>
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
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<script>
    function getFileNameWithExt3(event) {
        if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
            return;
        }

        const name = event.target.files[0].name;
        const lastDot = name.lastIndexOf('.');
        const fileName = name.substring(0, lastDot) + name.substring(lastDot + .1);
        outputfile3.value = fileName;

    }

    function getFileNameWithExt(event) {
        if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
            return;
        }

        const name = event.target.files[0].name;
        const lastDot = name.lastIndexOf('.');
        const fileName = name.substring(0, lastDot) + name.substring(lastDot + .1);
        outputfile.value = fileName;

    }

    function getFileNameWithExt2(event) {
        if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
            return;
        }

        const name = event.target.files[0].name;
        const lastDot = name.lastIndexOf('.');
        const fileName = name.substring(0, lastDot) + name.substring(lastDot + .1);
        outputfile2.value = fileName;

    }
</script>
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