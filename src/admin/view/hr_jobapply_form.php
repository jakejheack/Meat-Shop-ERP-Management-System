<?php include 'common/session.php' ?>
<?php if($_SESSION['applicant'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/hr_jobapply.php'; ?>
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
                                            <h4 class="mb-2">&ensp;View Application</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Application</li>
                                            <li class="breadcrumb-item active">View Application</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Application</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Application</li>
                                            <li class="breadcrumb-item active">Edit Application</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Application</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Application</li>
                                            <li class="breadcrumb-item active">Add Application</li>
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
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate1">Date</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" value="<?php echo $getROW['applySched'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="applySched" value="<?php if(isset($_GET['edit'])) echo $getROW['applySched'];?>" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="applySched" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate2">Full Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate2" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyName'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate2" placeholder="Full Name" name="applyName" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['applyName']));?>" autocomplete="off" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate2" placeholder="Full Name" name="applyName" autocomplete="off" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a full name.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate4">Contact Number&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate4" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyContact'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input type="number" class="form-control" id="validate4" placeholder="Contact Number" name="applyContact" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['applyContact']));?>" required>
                                                        <?php } else { ?>
                                                            <input type="number" class="form-control" id="validate4" placeholder="Contact Number" name="applyContact" autocomplete="off" required>
                                                        <?php } ?>
                                                        
                                                        <div class="invalid-feedback">
                                                            Please provide a contact number.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate5">Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate5" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyAddress'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate5" placeholder="Address" name="applyAddress" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['applyAddress']));?>" autocomplete="off" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate5" placeholder="Address" name="applyAddress" autocomplete="off" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a address.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate8">Email Address</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate8" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyEmail'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input type="email" class="form-control" id="validate8" placeholder="Email Address" name="applyEmail" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['applyEmail'];?>">
                                                        <?php } else { ?>
                                                            <input type="email" class="form-control" id="validate8" placeholder="Email Address" name="applyEmail" autocomplete="off">
                                                        <?php } ?>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate7">Vacancies&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate7" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyPosition'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input class="form-control" id="example-date-input" type="text" name="applyPosition" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['applyPosition'];?>" style="font-weight: 600;text-transform: capitalize;" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <select type="text" name="applyPosition" class="form-control" autocomplete="off" style="text-transform: capitalize;" required >
                                                                <option value="">- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result13)):;?>
                                                                    <option value="<?php echo $row1[2];?> | <?php echo $row1[9];?>"><?php echo $row1[2];?>&ensp;(<?php echo utf8_encode(ucwords(strtolower($row1[7])));?>)&ensp;-&ensp;<?php echo utf8_encode(ucwords(strtolower($row1[9])));?></option>
                                                                <?php endwhile;?>
                                                            </select>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please select a vacancies.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate8">File</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <a style="color:#5b73e8;font-weight: 600;" class="form-control" href="../uploads/jobApplicant/<?php echo $getROW['imageText'];?>" download>DOWNLOAD</a>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input class="mt-1" type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>
                                                        <div id="hide-from-screen">
                                                            <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                                                        </div>
                                                        <?php } else { ?>
                                                            <input type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>
                                                        <div id="hide-from-screen">
                                                            <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                                                        </div>
                                                        <?php } ?>
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate8">Date Interview</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate8" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyschedDate'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input type="date" class="form-control" id="validate8" placeholder="Email Address" name="applyschedDate" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['applyschedDate'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="date" class="form-control" id="validate8" placeholder="Email Address" name="applyschedDate" autocomplete="off" required>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                           Please provide a date.
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate6">Application Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate6" value="<?php echo utf8_encode(ucwords(strtolower($getROW['applyStatus'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select class="form-control" name="applyStatus" autocomplete="off" required>
                                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['applyStatus'];?>"><?php echo $getROW['applyStatus'];?></option>
                                                                <option value="" disabled>- SELECT -</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Interview">Interview</option>
                                                                <option value="Rejected">Rejected</option>
                                                                <option value="Hired">Hired</option>
                                                            </select>
                                                        <?php } else { ?>
                                                            <select class="form-control" name="applyStatus" autocomplete="off" required>
                                                                <option value="">- Select -</option>
                                                                <option value="Pending">Pending</option>
                                                                <option value="Interview">Interview</option>
                                                                <option value="Rejected">Rejected</option>
                                                                <option value="Hired">Hired</option>
                                                            </select>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please select a status.
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>


                                            <!-- Button -->
                                        <div class="form-group mt-3 text-right" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['view'])){?>
                                                <!--
                                                <button class="btn btn-success waves-effect waves-light" id="btnPrint" onclick="window.print();"><i class="mdi mdi-database-plus mr-2"></i> Print
                                                </button>&nbsp;
                                                -->
                                                <a href="javascript:history.go(-1)" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="javascript:history.go(-1)" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="upload"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="javascript:history.go(-1)" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
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
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['applicant'] != on)
{
    header('location:error404');
    exit;
}
?>