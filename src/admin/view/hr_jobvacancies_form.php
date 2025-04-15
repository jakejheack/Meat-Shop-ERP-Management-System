<?php include 'common/session.php' ?>
<?php if($_SESSION['vacancies'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/hr_jobvacancies.php'; ?>
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
                                            <h4 class="mb-2">&ensp;View Vacancies</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Vacancies</li>
                                            <li class="breadcrumb-item active">View Vacancies</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Vacancies</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Vacancies</li>
                                            <li class="breadcrumb-item active">Edit Vacancies</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Vacancies</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Vacancies</li>
                                            <li class="breadcrumb-item active">Add Vacancies</li>
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
                                                            <input type="text" class="form-control" value="<?php echo $getROW['jobDate'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="jobDate" value="<?php if(isset($_GET['edit'])) echo $getROW['jobDate'];?>" autocomplete="off" readonly>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate1" style="font-weight: 600;"placeholder="Date" name="jobDate" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" readonly>
                                                        <?php } ?>
                                                        
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate2">Job Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate2" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobTitle'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate2" placeholder="Job Title (Max 25 Characters)" name="jobTitle" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['jobTitle']));?>" autocomplete="off" maxlength="25" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate2" placeholder="Job Title (Max 25 Characters)" name="jobTitle" maxlength="25" autocomplete="off" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a job title.
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate3">Salary&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text">₱</div>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate3" value="<?php echo number_format($getROW['jobSalary'],2);?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="number" class="form-control" id="validate3" placeholder="Salary" name="jobSalary"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['jobSalary']));?>" required>
                                                        <?php } else { ?>
                                                            <input type="number" class="form-control" id="validate3" placeholder="Salary" name="jobSalary"  autocomplete="off" required>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please provide salary.
                                                        </div>
                                                    	</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate4">Experience&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate4" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobExperience'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input type="text" class="form-control" id="validate4" placeholder="Experience" name="jobExperience" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['jobExperience']));?>" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate4" placeholder="Experience" name="jobExperience" autocomplete="off" required>
                                                        <?php } ?>
                                                        
                                                        <div class="invalid-feedback">
                                                            Please provide a experience.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate5">Location&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate5" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobLocation'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <input type="text" class="form-control" id="validate5" placeholder="Location" name="jobLocation" value="<?php if(isset($_GET['edit'])) echo utf8_encode(ucwords($getROW['jobLocation']));?>" autocomplete="off" required>
                                                        <?php } else { ?>
                                                            <input type="text" class="form-control" id="validate5" placeholder="Location" name="jobLocation" autocomplete="off" required>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please provide a location.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate6">Job Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate6" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobType'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                        	<select class="form-control" name="jobType" autocomplete="off" id="validate6" required>
                                                        		<option value="<?php if(isset($_GET['edit'])) echo $getROW['jobType'];?>"><?php echo $getROW['jobType'];?></option>
                                                        		<option value="" disabled>- SELECT -</option>
                                                        		<option value="Full-Time">Full-Time</option>
                                                        		<option value="Part-Time">Part-Time</option>
                                                        		<option value="Temporary">Temporary</option>
                                                        		<option value="Seasonal">Seasonal</option>
                                                        		<option value="Temporary">Temporary</option>
                                                        		<option value="Freelancers">Freelancers</option>
                                                        		<option value="Consultants">Consultants</option>
                                                        		<option value="Contractors">Contractors</option>
                                                        	</select>
                                                        <?php } else { ?>
                                                        	<select class="form-control" name="jobType" autocomplete="off" id="validate6" required>
                                                        		<option value="">- SELECT -</option>
                                                        		<option value="Full-Time">Full-Time</option>
                                                        		<option value="Part-Time">Part-Time</option>
                                                        		<option value="Temporary">Temporary</option>
                                                        		<option value="Seasonal">Seasonal</option>
                                                        		<option value="Temporary">Temporary</option>
                                                        		<option value="Freelancers">Freelancers</option>
                                                        		<option value="Consultants">Consultants</option>
                                                        		<option value="Contractors">Contractors</option>
                                                        	</select>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please choose a type.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate7">Branch&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate7" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobBranch'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                        	<select type="text" name="jobBranch" class="form-control" autocomplete="off" id="validate7" required >
                                                        		<option value="<?php if(isset($_GET['edit'])) echo $getROW['jobBranch'];?>"><?php if(isset($_GET['edit'])) echo $getROW['jobBranch'];?></option>
                                                        		<option value="" disabled>- SELECT -</option>
                                                        		<?php while($row1 = mysqli_fetch_array($result1)):;?>
                                                        			<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                        		<?php endwhile;?>
                                                        	</select>
                                                        <?php } else { ?>
                                                        	<select type="text" name="jobBranch" class="form-control" autocomplete="off" id="validate7" required >
                                                        		<option value="">- SELECT -</option>
                                                        		<?php while($row1 = mysqli_fetch_array($result1)):;?>
                                                        			<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                        		<?php endwhile;?>
                                                        	</select>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please choose a branch.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate8">No of Employee&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                            <input type="text" class="form-control" id="validate8" value="<?php echo utf8_encode(ucwords(strtolower($getROW['jobNo'])));?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                           <input type="number" class="form-control" id="validate8" placeholder="NoE" name="jobNo" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['jobNo'];?>" required>
                                                        <?php } else { ?>
                                                            <input type="number" class="form-control" id="validate8" placeholder="NoE" name="jobNo" autocomplete="off" required>
                                                        <?php } ?>
                                                        <div class="invalid-feedback">
                                                            Please provide a number of employee.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate9">Priority&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr>  </label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate9" value="<?php echo $getROW['jobPriority'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                        	<select class="form-control" name="jobPriority" autocomplete="off" id="validate9" required>
                                                        		<option value="<?php if(isset($_GET['edit'])) echo $getROW['jobPriority'];?>"><?php echo $getROW['jobPriority'];?></option>
                                                        		<option value="" disabled>- SELECT -</option>
                                                        		<option value="Low">Low</option>
                                                        		<option value="Mid">Mid</option>
                                                        		<option value="High">High</option>
                                                        	</select>
                                                        <?php } else { ?>
                                                        	<select class="form-control" name="jobPriority" autocomplete="off" id="validate9" required>
                                                        		<option value="">- SELECT -</option>
                                                        		<option value="Low">Low</option>
                                                        		<option value="Mid">Mid</option>
                                                        		<option value="High">High</option>
                                                        	</select>
                                                        <?php } ?>

                                                        <div class="invalid-feedback">
                                                            Please choose a priority.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate10">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <?php if(isset($_GET['view'])){?>
                                                             <input type="text" class="form-control" id="validate10" value="<?php echo $getROW['jobStatus'];?>" readonly>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                        	<select class="form-control" name="jobStatus" autocomplete="off" id="validate10" required>
                                                        		<option value="<?php if(isset($_GET['edit'])) echo $getROW['jobStatus'];?>"><?php echo $getROW['jobStatus'];?></option>
                                                        		<option value="" disabled>- SELECT -</option>
                                                        		<option value="Enabled">Enabled</option>
                                                        		<option value="Disabled">Disabled</option>
                                                        	</select>
                                                        <?php } else { ?>
                                                        	<select class="form-control" name="jobStatus" autocomplete="off" id="validate10" required>
                                                        		<option value="">- SELECT -</option>
                                                        		<option value="Enabled">Enabled</option>
                                                        		<option value="Disabled">Disabled</option>
                                                        	</select>
                                                        <?php } ?>
                                                        
                                                        <div class="invalid-feedback">
                                                            Please choose a status.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validate11">Description</label>
                                                        <?php if(isset($_GET['view'])){?>
                                                        	<div style="border:1px solid #CED4DA;border-radius: 9px;height:auto;">
                                                        		<div style="margin-left:2%;margin-top:1%">
                                                        			<p style="font-weight:600;white-space: pre-wrap;" required><?php echo $getROW['jobDescription'];?></p>
                                                        		</div>
                                                        	</div>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                        	<textarea class="form-control" name="jobDescription" rows="15" style="width: 100%;white-space: pre-wrap;"><?php if(isset($_GET['edit'])) echo $getROW['jobDescription'];?></textarea>
                                                        <?php } else { ?><br>
                                                            <textarea class="form-control" name="jobDescription" rows="15" style="width: 100%;white-space: pre-wrap;"></textarea>
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
                                                <a href="hr_jobvacancies" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="hr_jobvacancies" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="hr_jobvacancies" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
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
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['vacancies'] != on)
{
    header('location:error404');
    exit;
}
?>