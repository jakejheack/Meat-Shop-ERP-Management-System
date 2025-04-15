<?php include 'common/session.php'; ?>
<?php if($_SESSION['usersacc'] == on){?>
<?php include '../controller/fl_dailyrecords_v2_settings.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
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
                                    <h4 class="mb-2">&ensp;Daily Records Settings</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Daily Records Settings</li>
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
                    

                        <div class="row" style="zoom:90%">
                            <div class="col-12">
                                <div class="card">
                                    <form method="post">
                                    <div class="card-body">
                                        <code style="font-size: 18px;margin-left: 4em;">Tab Title</code>
                                    <hr style="margin-left: 4em;margin-right: 4em;">
                                    
                                       
                                        <!--Tab#1 -->
                                        <div class="form-group row">
                                           <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #1</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab1" maxlength="25" id="thresholdconfig" class="form-control"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab1'];?>"/>
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat1" type="checkbox" id="switch1" switch="bool" <?php if($getROW['tabstat1'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switch1" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right; visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab1access">
                                                        <option value="All"<?php if($getROW['tab1access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab1access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab1access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab1access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                        <!--Tab#2 -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #2</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab2" class="form-control"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab2'];?>" />
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat2" type="checkbox" id="switch2" switch="bool" <?php if($getROW['tabstat2'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switch2" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right; visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab2access">
                                                        <option value="All"<?php if($getROW['tab2access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab2access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab2access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab2access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                        
                                        <!--Tab#3 -->
                                        <div class="form-group row">
                                           <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #3</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab3" class="form-control"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab3'];?>"/>
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat3" type="checkbox" id="switch3" switch="bool" <?php if($getROW['tabstat3'] == 'on') {echo "checked"; } else {} ?> /> 
                                                   <label for="switch3" data-on-label="On" data-off-label="Off"></label>

                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right; visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab3access">
                                                        <option value="All"<?php if($getROW['tab3access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab3access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab3access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab3access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                        <!--Tab#4 -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #4</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab4" class="form-control" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab4'];?>" />
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat4" type="checkbox" id="switch4" switch="bool" <?php if($getROW['tabstat4'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switch4" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab4access">
                                                        <option value="All"<?php if($getROW['tab4access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab4access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab4access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab4access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                        
                                        <!--Tab#5 -->
                                        <div class="form-group row">
                                           <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #5</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab5" class="form-control"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab5'];?>"/>
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat5" type="checkbox" id="switch5" switch="bool" <?php if($getROW['tabstat5'] == 'on') {echo "checked"; } else {} ?> /> 
                                                   <label for="switch5" data-on-label="On" data-off-label="Off"></label>

                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right; visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab5access">
                                                        <option value="All"<?php if($getROW['tab5access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab5access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab5access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab5access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>

                                        <!--Tab#6 -->
                                        <div class="form-group row">
                                           <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Tab #6</label>
                                            <div class="col-md-4">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tab6" class="form-control"  autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['tab6'];?>" />
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>

                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="tabstat6" type="checkbox" id="switch6" switch="bool" <?php if($getROW['tabstat6'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switch6" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right; visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="tab6access">
                                                        <option value="All"<?php if($getROW['tab6access'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['tab6access'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['tab6access'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['tab6access'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>


                                    <br><br> 
                                    <code style="font-size: 18px;margin-left: 4em;">Form Control</code>   
                                    <hr style="margin-left: 4em;margin-right: 4em;">


                                    <!-- PK -->
                                       <div class="form-group row">
                                           <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">PK</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="pk" type="checkbox" id="switchpk" switch="bool" <?php if($getROW['pk'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switchpk" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                 <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="pkin" type="checkbox" id="switchpkin" switch="bool" <?php if($getROW['pkin'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switchpkin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="pkout" type="checkbox" id="switchpkout" switch="bool" <?php if($getROW['pkout'] == 'on') {echo "checked"; } else {} ?> />
                                                    <label for="switchpkout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="pktab">
                                                        <option value="1"<?php if($getROW['pktab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['pktab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['pktab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['pktab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['pktab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['pktab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="pkaccess">
                                                        <option value="All"<?php if($getROW['pkaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['pkaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['pkaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['pkaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- PS -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">PS</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="ps" type="checkbox" id="switchps" switch="bool" <?php if($getROW['ps'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchps" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="psin" type="checkbox" id="switchpsin" switch="bool" <?php if($getROW['psin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchpsin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="psout" type="checkbox" id="switchpsout" switch="bool" <?php if($getROW['psout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchpsout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="pstab">
                                                        <option value="1"<?php if($getROW['pstab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['pstab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['pstab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['pstab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['pstab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['pstab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="psaccess">
                                                        <option value="All"<?php if($getROW['psaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['psaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['psaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['psaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Discount -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Discount</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="disc" type="checkbox" id="switchdisc" switch="bool" <?php if($getROW['disc'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdisc" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="discin" type="checkbox" id="switchdiscin" switch="bool" <?php if($getROW['discin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdiscin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="discout" type="checkbox" id="switchdiscout" switch="bool" <?php if($getROW['discout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdiscout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="disctab">
                                                        <option value="1"<?php if($getROW['disctab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['disctab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['disctab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['disctab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['disctab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['disctab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="discaccess">
                                                        <option value="All"<?php if($getROW['discaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['discaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['discaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['discaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Purchase -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Purchase</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="chick" type="checkbox" id="switchchick" switch="bool" <?php if($getROW['chick'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchick" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="chickin" type="checkbox" id="switchchickin" switch="bool" <?php if($getROW['chickin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchickin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="chickout" type="checkbox" id="switchchickout" switch="bool" <?php if($getROW['chickout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchickout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="chicktab">
                                                        <option value="1"<?php if($getROW['chicktab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['chicktab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['chicktab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['chicktab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['chicktab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['chicktab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="chickaccess">
                                                        <option value="All"<?php if($getROW['chickaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['chickaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['chickaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['chickaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Customers Credit -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Customers Credit</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cuscredit" type="checkbox" id="switchcuscredit" switch="bool" <?php if($getROW['cuscredit'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcuscredit" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cuscreditin" type="checkbox" id="switchcuscreditin" switch="bool" <?php if($getROW['cuscreditin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcuscreditin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cuscreditout" type="checkbox" id="switchcuscreditout" switch="bool" <?php if($getROW['cuscreditout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcuscreditout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cuscredittab">
                                                        <option value="1"<?php if($getROW['cuscredittab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['cuscredittab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['cuscredittab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['cuscredittab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['cuscredittab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['cuscredittab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cuscreditaccess">
                                                        <option value="All"<?php if($getROW['cuscreditaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['cuscreditaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['cuscreditaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cuscreditaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Employee Credit -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Employee Credit</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="empcredit" type="checkbox" id="switchempcredit" switch="bool" <?php if($getROW['empcredit'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchempcredit" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="empcreditin" type="checkbox" id="switchempcreditin" switch="bool" <?php if($getROW['empcreditin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchempcreditin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="empcreditout" type="checkbox" id="switchempcreditout" switch="bool" <?php if($getROW['empcreditout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchempcreditout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="empcredittab">
                                                        <option value="1"<?php if($getROW['empcredittab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['empcredittab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['empcredittab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['empcredittab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['empcredittab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['empcredittab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="empcreditaccess">
                                                        <option value="All"<?php if($getROW['empcreditaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['empcreditaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['empcreditaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['empcreditaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Lehmann Credit -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Lehmann Credit</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="lehcredit" type="checkbox" id="switchlehcredit" switch="bool" <?php if($getROW['lehcredit'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchlehcredit" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                   <input name="lehcreditin" type="checkbox" id="switchlehcreditin" switch="bool" <?php if($getROW['lehcreditin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchlehcreditin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="lehcreditout" type="checkbox" id="switchlehcreditout" switch="bool" <?php if($getROW['lehcreditout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchlehcreditout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="lehcredittab">
                                                        <option value="1"<?php if($getROW['lehcredittab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['lehcredittab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['lehcredittab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['lehcredittab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['lehcredittab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['lehcredittab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="lehcreditaccess">
                                                        <option value="All"<?php if($getROW['lehcreditaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['lehcreditaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['lehcreditaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['lehcreditaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Cash Remit -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Cash Remit</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashremit" type="checkbox" id="switchcashremit" switch="bool" <?php if($getROW['cashremit'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashremit" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashremitin" type="checkbox" id="switchcashremitin" switch="bool" <?php if($getROW['cashremitin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashremitin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashremitout" type="checkbox" id="switchcashremitout" switch="bool" <?php if($getROW['cashremitout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashremitout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashremittab">
                                                        <option value="1"<?php if($getROW['cashremittab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['cashremittab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['cashremittab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['cashremittab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['cashremittab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['cashremittab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashremitaccess">
                                                        <option value="All"<?php if($getROW['cashremitaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['cashremitaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['cashremitaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cashremitaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                         <!-- Cash Return -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Cash Return</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashreturn" type="checkbox" id="switchcashreturn" switch="bool" <?php if($getROW['cashreturn'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashreturn" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashreturnin" type="checkbox" id="switchcashreturnin" switch="bool" <?php if($getROW['cashreturnin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashreturnin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashreturnout" type="checkbox" id="switchcashreturnout" switch="bool" <?php if($getROW['cashreturnout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashreturnout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashreturntab">
                                                        <option value="1"<?php if($getROW['cashreturntab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['cashreturntab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['cashreturntab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['cashreturntab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['cashreturntab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['cashreturntab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashreturnaccess">
                                                        <option value="All"<?php if($getROW['cashreturnaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['cashreturnaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['cashreturnaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cashreturnaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Bank Deposit -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Bank Deposit</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="bankdepo" type="checkbox" id="switchbankdepo" switch="bool" <?php if($getROW['bankdepo'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchbankdepo" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="bankdepoin" type="checkbox" id="switchbankdepoin" switch="bool" <?php if($getROW['bankdepoin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchbankdepoin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="bankdepoout" type="checkbox" id="switchbankdepoout" switch="bool" <?php if($getROW['bankdepoout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchbankdepoout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="bankdepotab">
                                                        <option value="1"<?php if($getROW['bankdepotab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['bankdepotab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['bankdepotab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['bankdepotab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['bankdepotab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['bankdepotab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="bankdepoaccess">
                                                        <option value="All"<?php if($getROW['bankdepoaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['bankdepoaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['bankdepoaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['bankdepoaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Private Family -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Private Family</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="prifamily" type="checkbox" id="switchprifamily" switch="bool" <?php if($getROW['prifamily'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchprifamily" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="prifamilyin" type="checkbox" id="switchprifamilyin" switch="bool" <?php if($getROW['prifamilyin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchprifamilyin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="prifamilyout" type="checkbox" id="switchprifamilyout" switch="bool" <?php if($getROW['prifamilyout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchprifamilyout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="prifamilytab">
                                                        <option value="1"<?php if($getROW['prifamilytab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['prifamilytab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['prifamilytab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['prifamilytab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['prifamilytab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['prifamilytab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="prifamilyaccess">
                                                        <option value="All"<?php if($getROW['prifamilyaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['prifamilyaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['prifamilyaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['prifamilyaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Credit Card -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Credit Card</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="crcard" type="checkbox" id="switchcrcard" switch="bool" <?php if($getROW['crcard'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcrcard" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                   <input name="crcardin" type="checkbox" id="switchcrcardin" switch="bool" <?php if($getROW['crcardin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcrcardin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="crcardout" type="checkbox" id="switchcrcardout" switch="bool" <?php if($getROW['crcardout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcrcardout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="crcardtab">
                                                        <option value="1"<?php if($getROW['crcardtab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['crcardtab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['crcardtab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['crcardtab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['crcardtab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['crcardtab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="crcardaccess">
                                                        <option value="All"<?php if($getROW['crcardaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['crcardaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['crcardaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['crcardaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                         <!-- Debit Card -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Debit Card</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="decard" type="checkbox" id="switchdecard" switch="bool" <?php if($getROW['decard'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdecard" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="decardin" type="checkbox" id="switchdecardin" switch="bool" <?php if($getROW['decardin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdecardin" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="decardout" type="checkbox" id="switchdecardout" switch="bool" <?php if($getROW['decardout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdecardout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="decardtab">
                                                        <option value="1"<?php if($getROW['decardtab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['decardtab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['decardtab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['decardtab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['decardtab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['decardtab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="decardaccess">
                                                        <option value="All"<?php if($getROW['decardaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['decardaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['decardaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['decardaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <!-- Checks -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Checks</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="checks" type="checkbox" id="switchchecks" switch="bool" <?php if($getROW['checks'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchecks" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">In</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="checksin" type="checkbox" id="switchchecksin" switch="bool" <?php if($getROW['checksin'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchecksin" data-on-label="On" data-off-label="Off"></label>                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Out</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="checksout" type="checkbox" id="switchchecksout" switch="bool" <?php if($getROW['checksout'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchchecksout" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="checkstab">
                                                        <option value="1"<?php if($getROW['checkstab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['checkstab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['checkstab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['checkstab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['checkstab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['checkstab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="checksaccess">
                                                        <option value="All"<?php if($getROW['checksaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['checksaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['checksaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['checksaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>


                                            <!-- Cashier -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Cashier</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashier" type="checkbox" id="switchcashier" switch="bool" <?php if($getROW['cashier'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashier" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                           <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label"></label>
                                            <div class="col-md-3 mt-2">
                                            </div>
                                           
                                           

                                            <label style="text-align:right" for="example-text-input" class="col-md-1 col-form-label">Tab</label>
                                            <div class="col-md-1">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashiertab">
                                                        <option value="1"<?php if($getROW['cashiertab'] == '1') { ?> selected="selected"<?php } ?>>1</option>
                                                        <option value="2"<?php if($getROW['cashiertab'] == '2') { ?> selected="selected"<?php } ?>>2</option>
                                                        <option value="3"<?php if($getROW['cashiertab'] == '3') { ?> selected="selected"<?php } ?>>3</option>
                                                        <option value="4"<?php if($getROW['cashiertab'] == '4') { ?> selected="selected"<?php } ?>>4</option>
                                                        <option value="5"<?php if($getROW['cashiertab'] == '5') { ?> selected="selected"<?php } ?>>5</option>
                                                        <option value="6"<?php if($getROW['cashiertab'] == '6') { ?> selected="selected"<?php } ?>>6</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashieraccess">
                                                        <option value="All"<?php if($getROW['cashieraccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['cashieraccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['cashieraccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cashieraccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                        </div>
                                        
                                        <br><br>
                                        <code style="font-size: 18px;margin-left: 4em;">Extra Control</code>   
                                        <hr style="margin-left: 4em;margin-right: 4em;">

                                           <!-- Total Amount -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Total Amount</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="totalamount" type="checkbox" id="switchtotalamount" switch="bool" <?php if($getROW['totalamount'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchtotalamount" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="totalamountaccess">
                                                        <option value="All"<?php if($getROW['totalamountaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['totalamountaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['totalamountaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['totalamountaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>


                                            <!-- Weighing Scale -->
                                            <label for="example-text-input" class="col-md-1 col-form-label">Weighing Scale</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="scale" type="checkbox" id="switchscale" switch="bool" <?php if($getROW['scale'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchscale" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="scaleaccess">
                                                        <option value="All"<?php if($getROW['scaleaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['scaleaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['scaleaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['scaleaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                           

                                        </div>

                                        <!-- Sobra -->
                                        <div class="form-group row">
                                            <div class="col-1"></div> 

                                             <label for="example-text-input" class="col-md-1 col-form-label">Sobra</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="sobra" type="checkbox" id="switchsobra" switch="bool" <?php if($getROW['sobra'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchsobra" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="sobraaccess">
                                                        <option value="All"<?php if($getROW['sobraaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['sobraaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['sobraaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cashieraccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>


                                            <!-- Total -->
                                            <label for="example-text-input" class="col-md-1 col-form-label">Total</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="total" type="checkbox" id="switchtotal" switch="bool" <?php if($getROW['total'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchtotal" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="totalaccess">
                                                        <option value="All"<?php if($getROW['totalaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['totalaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['totalaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['totalaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                        </div>
                                        

                                         <!-- Difference -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Difference</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="difference" type="checkbox" id="switchdifference" switch="bool" <?php if($getROW['difference'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchdifference" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="differenceaccess">
                                                        <option value="All"<?php if($getROW['differenceaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['differenceaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['differenceaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['differenceaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>


                                            <!-- Total Sale -->
                                            <label for="example-text-input" class="col-md-1 col-form-label">Total Sale</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="totalsale" type="checkbox" id="switchtotalsale" switch="bool" <?php if($getROW['totalsale'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchtotalsale" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="totalsaleaccess">
                                                        <option value="All"<?php if($getROW['totalsaleaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['totalsaleaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['totalsaleaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['totalsaleaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>


                                        </div>


                                            
                                         <!-- Upload -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                            <label for="example-text-input" class="col-md-1 col-form-label">Upload </label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="upload" type="checkbox" id="switchupload" switch="bool" <?php if($getROW['upload'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchupload" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="uploadaccess">
                                                        <option value="All"<?php if($getROW['uploadaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['uploadaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['uploadaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['uploadaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                         

                                            <!-- Notes -->
                                            <label for="example-text-input" class="col-md-1 col-form-label">Notes</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="notes" type="checkbox" id="switchnotes" switch="bool" <?php if($getROW['notes'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchnotes" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="notesaccess">
                                                        <option value="All"<?php if($getROW['notesaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['notesaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['notesaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['notesaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>


                                        </div>

                                         <!-- Cashier Duty -->
                                        <div class="form-group row">
                                            <div class="col-1"></div>
                                             <label for="example-text-input" class="col-md-1 col-form-label">Cashier Duty</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="cashierduty" type="checkbox" id="switchcashierduty" switch="bool" <?php if($getROW['cashierduty'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchcashierduty" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="cashierdutyaccess">
                                                        <option value="All"<?php if($getROW['cashierdutyaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['cashierdutyaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['cashierdutyaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['cashierdutyaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                        

                                            <!-- Record Duty -->

                                            <label for="example-text-input" class="col-md-1 col-form-label">Record Duty</label>
                                            <div class="col-md-1 mt-2">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <input name="recordduty" type="checkbox" id="switchrecordduty" switch="bool" <?php if($getROW['recordduty'] == 'on') {echo "checked"; } else {} ?> /> 
                                                    <label for="switchrecordduty" data-on-label="On" data-off-label="Off"></label>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>
                                           
                                          
                                             <label style="text-align:right;visibility: hidden;" for="example-text-input" class="col-md-1 col-form-label">Access</label>
                                            <div class="col-md-1" style="visibility: hidden;">
                                                <?php if(isset($_GET['edit'])) { ?>
                                                    <select class="form-control" name="recorddutyaccess">
                                                        <option value="All"<?php if($getROW['recorddutyaccess'] == 'All') { ?> selected="selected"<?php } ?>>All</option>
                                                        <option value="Admin"<?php if($getROW['recorddutyaccess'] == 'Admin') { ?> selected="selected"<?php } ?>>Admin</option>
                                                        <option value="Manager"<?php if($getROW['recorddutyaccess'] == 'Manager') { ?> selected="selected"<?php } ?>>Manager</option>
                                                        <option value="Cashier"<?php if($getROW['recorddutyaccess'] == 'Cashier') { ?> selected="selected"<?php } ?>>Cashier</option>
                                                    </select>
                                                 <?php } else { ?>
                                                <?php } ?> 
                                            </div>

                                        </div>

                                        

                                        <!-- Button -->
                                        <div class="form-group mb-0 text-right" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['edit'])){?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-wrench mr-2"></i> Save  </button>&nbsp;
                                                <a href="fl_dailyrecords_v2_form.php" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="fl_dailyrecords_v2_form" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
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
if($_SESSION['usersacc'] != on)
{
    header('location:error404');
    exit;
}
?>