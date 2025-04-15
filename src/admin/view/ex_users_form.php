<?php include 'common/session.php'; ?>
<?php if($_SESSION['usersacc'] == on){?>
    <?php include '../controller/ex_users.php'; ?>

    <!doctype html>
    <html lang="en">
    <head>
       <?php include 'common/title.php'; ?> 
       <?php include 'common/print.php'; ?> 
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
                            <h4 class="mb-2">&ensp;User Permisson</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">User Permisson</li>
                            </ol>
                        </div>

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

                    <div class="row" style="zoom:90%">
                        <div class="col-12">
                            <div class="card">
                                <form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                    <div class="card-body">
                                        <code style="font-size: 18px;margin-left: 4em;">General</code>
                                        <hr style="margin-left: 4em;margin-right: 4em;">

                                        <div class="form-group row">
                                           <div class="col-1"></div>
                                           <label for="example-text-input" class="col-md-2 col-form-label">Firstname</label>
                                           <div class="col-md-4">
                                            <?php if(isset($_GET['edit'])) { ?>
                                                <input type="text" name="accfname" maxlength="30" id="thresholdconfig" class="form-control"autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['accfname'];?>" required/>
                                            <?php } else { ?>
                                                <input type="text" name="accfname" maxlength="30" id="thresholdconfig" class="form-control" autocomplete="off" required/>
                                            <?php } ?> 
                                            <div class="invalid-feedback">
                                                Please provide a firstname.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-2">
                                       <div class="col-1"></div>
                                       <label for="example-text-input" class="col-md-2 col-form-label">Lastname</label>
                                       <div class="col-md-4">
                                        <?php if(isset($_GET['edit'])) { ?>
                                            <input type="text" name="acclname" maxlength="30" id="thresholdconfig" class="form-control"autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['acclname'];?>" required/>
                                        <?php } else { ?>
                                            <input type="text" name="acclname" maxlength="30" id="thresholdconfig" class="form-control" autocomplete="off" required/>
                                        <?php } ?> 
                                        <div class="invalid-feedback">
                                            Please provide a lastname.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mt-2">
                                   <div class="col-1"></div>
                                   <label for="example-text-input" class="col-md-2 col-form-label">Role Title</label>
                                   <div class="col-md-4">
                                    <?php if(isset($_GET['edit'])) { ?>
                                        <input type="text" name="roletitle" maxlength="30" id="thresholdconfig" class="form-control" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['roletitle'];?>" required/>
                                    <?php } else { ?>
                                        <input type="text" name="roletitle" maxlength="30" id="thresholdconfig" class="form-control" autocomplete="off" required/>
                                    <?php } ?> 

                                    <div class="invalid-feedback">
                                        Please provide a title.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mt-2">
                               <div class="col-1"></div>
                               <label for="example-text-input" class="col-md-2 col-form-label"> Branch</label>
                               <div class="col-md-4">
                                <?php if(isset($_GET['edit'])) { ?>
                                    <select class="form-control" name="branch" required>
                                        <option value="<?php if(isset($_GET['edit'])) echo $getROW['branch'];?>"><?php if(isset($_GET['edit'])) echo $getROW['branch'];?></option>
                                        <option value="" disabled select>- SELECT -</option>
                                        <option value="Daet">Daet</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Yashano">Yashano</option>
                                        <?php if($_SESSION['access'] == Administrator){?>
                                            <option value="All">All</option>
                                        <?php } ?>
                                    </select>

                                <?php } else { ?>
                                    <select class="form-control" name="branch" required>
                                        <option value="">- SELECT -</option>
                                        <option value="Daet">Daet</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Yashano">Yashano</option>
                                        <?php if($_SESSION['access'] == Administrator){?>
                                            <option value="All">All</option>
                                        <?php } ?>
                                    </select>
                                <?php } ?> 
                                <div class="invalid-feedback">
                                    Please select a branch.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                           <div class="col-1"></div>
                           <label for="example-text-input" class="col-md-2 col-form-label"> Access</label>
                           <div class="col-md-4">
                            <?php if(isset($_GET['edit'])) { ?>
                                <select class="form-control" name="access" required>
                                    <option value="<?php if(isset($_GET['edit'])) echo $getROW['access'];?>"><?php if(isset($_GET['edit'])) echo $getROW['access'];?></option>
                                    <option value="" disabled select>- SELECT -</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Manager">Manager</option>
                                    <option value="BranchControl">BranchControl</option>
                                    <option value="Other">Other</option>
                                    <?php if($_SESSION['access'] == Administrator){?>
                                        <option value="Administrator">Administrator</option>
                                    <?php } ?>
                                </select>

                            <?php } else { ?>
                                <select class="form-control" name="access" required>
                                    <option value="">- SELECT -</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Manager">Manager</option>
                                    <option value="BranchControl">BranchControl</option>
                                    <option value="Other">Other</option>
                                    <?php if($_SESSION['access'] == Administrator){?>
                                        <option value="Administrator">Administrator</option>
                                    <?php } ?>
                                </select>
                            <?php } ?> 
                            <div class="invalid-feedback">
                                Please select a access.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                       <div class="col-1"></div>
                       <label for="example-text-input" class="col-md-2 col-form-label">Username</label>
                       <div class="col-md-4">
                        <?php if(isset($_GET['edit'])) { ?>
                            <input type="text" name="username" id="thresholdconfig" class="form-control" autocomplete="off" value="<?php if(isset($_GET['edit'])) echo $getROW['username'];?>" required/>
                        <?php } else { ?>
                            <input type="text" name="username" id="username" class="form-control" autocomplete="off" required onInput="checkUsername()"/>
                            <span id="check-username"></span>
                        <?php } ?> 
                        <div class="invalid-feedback">
                            Please provide a username.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <?php if(isset($_GET['edit'])) { ?>
                <?php } else { ?>
                    <div class="form-group row mt-2">
                     <div class="col-1"></div>
                     <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
                     <div class="col-md-4">
                        <input type="text" name="password" maxlength="30" id="thresholdconfig" class="form-control" autocomplete="off" required/>
                        <div class="invalid-feedback">
                            Please provide a password.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>
            <?php } ?> 

            <div class="form-group row mt-2">
             <div class="col-1"></div>
             <label for="example-text-input" class="col-md-2 col-form-label">User Photo</label>
             <div class="col-md-4">
                <?php if(isset($_GET['edit'])) { ?>
                    <input style="margin-top:5px;" type="file" name="image" accept="image/*" id='inputfile' onChange='getFileNameWithExt(event)'>

                    <div id="hide-from-screen">
                        <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                    </div>
                <?php } else { ?>
                    <input style="margin-top:5px;" type="file" name="image" accept="image/*"  id='inputfile' onChange='getFileNameWithExt(event)'>

                    <div id="hide-from-screen">
                       <input name="imageText" id='outputfile' value="null" readonly/>
                   </div>
               <?php } ?> 
               <div class="invalid-feedback">
                Please provide a photo.
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
       <div class="col-1"></div>
       <label for="example-text-input" class="col-md-2 col-form-label">Account Status</label>
       <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="accstatus" type="checkbox" id="xaccstatus" switch="bool" <?php if($getROW['accstatus'] == 'on') {echo "checked"; } else {} ?> />
            <label for="xaccstatus" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="accstatus" type="checkbox" id="xaccstatus" switch="bool" <?php if($getROW['accstatus'] == 'on') {echo "checked"; } else {} ?> />
            <label for="xaccstatus" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Action Buttons</code>  
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">View Button</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="viewbut" type="checkbox" id="xviewbut" switch="bool" <?php if($getROW['viewbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xviewbut" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="viewbut" type="checkbox" id="xviewbut" switch="bool" <?php if($getROW['viewbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xviewbut" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Edit Button</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="editbut" type="checkbox" id="xeditbut" switch="bool" <?php if($getROW['editbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xeditbut" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="editbut" type="checkbox" id="xeditbut" switch="bool" <?php if($getROW['editbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xeditbut" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Edit File Button</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="filebut" type="checkbox" id="xfilebut" switch="bool" <?php if($getROW['filebut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xfilebut" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="filebut" type="checkbox" id="xfilebut" switch="bool" <?php if($getROW['filebut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xfilebut" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Delete Button</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="deletebut" type="checkbox" id="xdeletebut" switch="bool" <?php if($getROW['deletebut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdeletebut" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="deletebut" type="checkbox" id="xdeletebut" switch="bool" <?php if($getROW['deletebut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdeletebut" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Add Button</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="addbut" type="checkbox" id="xaddbut" switch="bool" <?php if($getROW['addbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xaddbut" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="addbut" type="checkbox" id="xaddbut" switch="bool" <?php if($getROW['addbut'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xaddbut" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Menu</code>  
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
   <div class="col-1"></div>
   <label for="example-text-input" class="col-md-2 col-form-label">Dashboard #1</label>
   <div class="col-md-1 mt-2">
    <?php if(isset($_GET['edit'])) { ?>
        <input name="dash1" type="checkbox" id="xdash1" switch="bool" <?php if($getROW['dash1'] == 'on') {echo "checked"; } else {} ?> />
        <label for="xdash1" data-on-label="On" data-off-label="Off"></label>
    <?php } else { ?>
        <input name="dash1" type="checkbox" id="xdash1" switch="bool" <?php if($getROW['dash1'] == 'on') {echo "checked"; } else {} ?> />
        <label for="xdash1" data-on-label="On" data-off-label="Off"></label>
    <?php } ?> 
</div>

<label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Dashboard #2</label>
<div class="col-md-1 mt-2">
    <?php if(isset($_GET['edit'])) { ?>
        <input name="dash2" type="checkbox" id="xdash2" switch="bool" <?php if($getROW['dash2'] == 'on') {echo "checked"; } else {} ?> />
        <label for="xdash2" data-on-label="On" data-off-label="Off"></label>
    <?php } else { ?>
        <input name="dash2" type="checkbox" id="xdash2" switch="bool" <?php if($getROW['dash2'] == 'on') {echo "checked"; } else {} ?> />
        <label for="xdash2" data-on-label="On" data-off-label="Off"></label>
    <?php } ?> 
</div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Employees</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Employee Profiles</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="emppro" type="checkbox" id="xemppro" switch="bool" <?php if($getROW['emppro'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xemppro" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="emppro" type="checkbox" id="xemppro" switch="bool" <?php if($getROW['emppro'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xemppro" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Performance</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="perfor" type="checkbox" id="xperfor" switch="bool" <?php if($getROW['perfor'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xperfor" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="perfor" type="checkbox" id="xperfor" switch="bool" <?php if($getROW['perfor'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xperfor" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Travel Request</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="travelreq" type="checkbox" id="xtravelreq" switch="bool" <?php if($getROW['travelreq'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xtravelreq" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="travelreq" type="checkbox" id="xtravelreq" switch="bool" <?php if($getROW['travelreq'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xtravelreq" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Scheduler</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="sched" type="checkbox" id="xsched" switch="bool" <?php if($getROW['sched'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsched" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="sched" type="checkbox" id="xsched" switch="bool" <?php if($getROW['sched'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsched" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Job Portals</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Dashboard</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="dashportal" type="checkbox" id="xdashportal" switch="bool" <?php if($getROW['dashportal'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashportal" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="dashportal" type="checkbox" id="xdashportal" switch="bool" <?php if($getROW['dashportal'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashportal" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Vacancies</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="vacancies" type="checkbox" id="xvacancies" switch="bool" <?php if($getROW['vacancies'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xvacancies" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="vacancies" type="checkbox" id="xvacancies" switch="bool" <?php if($getROW['vacancies'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xvacancies" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Application</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="applicant" type="checkbox" id="xapplicant" switch="bool" <?php if($getROW['applicant'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xapplicant" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="applicant" type="checkbox" id="xapplicant" switch="bool" <?php if($getROW['applicant'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xapplicant" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Attendance</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Dashboard</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="dashatt" type="checkbox" id="xdashatt" switch="bool" <?php if($getROW['dashatt'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashatt" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="dashatt" type="checkbox" id="xdashatt" switch="bool" <?php if($getROW['dashatt'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashatt" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Time In-Out</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="timeinout" type="checkbox" id="xtimeinout" switch="bool" <?php if($getROW['timeinout'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xtimeinout" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="timeinout" type="checkbox" id="xtimeinout" switch="bool" <?php if($getROW['timeinout'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xtimeinout" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Attendance Logs</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="attlogs" type="checkbox" id="xattlogs" switch="bool" <?php if($getROW['attlogs'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xattlogs" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="attlogs" type="checkbox" id="xattlogs" switch="bool" <?php if($getROW['attlogs'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xattlogs" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Overtime</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="overtime" type="checkbox" id="xovertime" switch="bool" <?php if($getROW['overtime'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xovertime" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="overtime" type="checkbox" id="xovertime" switch="bool" <?php if($getROW['overtime'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xovertime" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Schedules</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="attsched" type="checkbox" id="xattsched" switch="bool" <?php if($getROW['attsched'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xattsched" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="attsched" type="checkbox" id="xattsched" switch="bool" <?php if($getROW['attsched'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xattsched" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Employee Schedules</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="empshed" type="checkbox" id="xempshed" switch="bool" <?php if($getROW['empshed'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xempshed" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="empshed" type="checkbox" id="xempshed" switch="bool" <?php if($getROW['empshed'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xempshed" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Employee Leave</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="empleave" type="checkbox" id="xempleave" switch="bool" <?php if($getROW['empleave'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xempleave" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="empleave" type="checkbox" id="xempleave" switch="bool" <?php if($getROW['empleave'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xempleave" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Messages</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="email" type="checkbox" id="xemail" switch="bool" <?php if($getROW['email'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xemail" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="email" type="checkbox" id="xemail" switch="bool" <?php if($getROW['email'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xemail" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Sms</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="sms" type="checkbox" id="xsms" switch="bool" <?php if($getROW['sms'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsms" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="sms" type="checkbox" id="xsms" switch="bool" <?php if($getROW['sms'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsms" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>                                           
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Calendar</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Calendar</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="calendar" type="checkbox" id="xcalendar" switch="bool" <?php if($getROW['calendar'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalendar" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="calendar" type="checkbox" id="xcalendar" switch="bool" <?php if($getROW['calendar'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalendar" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Daily Overview</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Records</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="overrec" type="checkbox" id="xoverrec" switch="bool" <?php if($getROW['overrec'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xoverrec" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="overrec" type="checkbox" id="xoverrec" switch="bool" <?php if($getROW['overrec'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xoverrec" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">All Store</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="overall" type="checkbox" id="xoverall" switch="bool" <?php if($getROW['overall'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xoverall" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="overall" type="checkbox" id="xoverall" switch="bool" <?php if($getROW['overall'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xoverall" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Daily Records</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Daily Records v1.0</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="records1" type="checkbox" id="xrecords1" switch="bool" <?php if($getROW['records1'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords1" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="records1" type="checkbox" id="xrecords1" switch="bool" <?php if($getROW['records1'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords1" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Daily Records v2.3</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="records2" type="checkbox" id="xrecords2" switch="bool" <?php if($getROW['records2'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords2" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="records2" type="checkbox" id="xrecords2" switch="bool" <?php if($getROW['records2'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords2" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Daily Records v3.0</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="records3" type="checkbox" id="xrecords3" switch="bool" <?php if($getROW['records3'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords3" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="records3" type="checkbox" id="xrecords3" switch="bool" <?php if($getROW['records3'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xrecords3" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Purchases</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Purchases</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="purchases" type="checkbox" id="xpurchases" switch="bool" <?php if($getROW['purchases'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpurchases" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="purchases" type="checkbox" id="xpurchases" switch="bool" <?php if($getROW['purchases'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpurchases" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Employees</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Cash Advance</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="cashadv" type="checkbox" id="xcashadv" switch="bool" <?php if($getROW['cashadv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcashadv" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="cashadv" type="checkbox" id="xcashadv" switch="bool" <?php if($getROW['cashadv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcashadv" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Deduction</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="deduc" type="checkbox" id="xdeduc" switch="bool" <?php if($getROW['deduc'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdeduc" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="deduc" type="checkbox" id="xdeduc" switch="bool" <?php if($getROW['deduc'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdeduc" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Position Salary</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="possalary" type="checkbox" id="xpossalary" switch="bool" <?php if($getROW['possalary'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpossalary" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="possalary" type="checkbox" id="xpossalary" switch="bool" <?php if($getROW['possalary'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpossalary" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>


<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Payroll</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="payroll" type="checkbox" id="xpayroll" switch="bool" <?php if($getROW['payroll'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpayroll" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="payroll" type="checkbox" id="xpayroll" switch="bool" <?php if($getROW['payroll'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xpayroll" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

     <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Employees Credit</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="epcredit" type="checkbox" id="xepcredit" switch="bool" <?php if($getROW['epcredit'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xepcredit" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="epcredit" type="checkbox" id="xepcredit" switch="bool" <?php if($getROW['epcredit'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xepcredit" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Customers</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Customers Profile</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="cusprof" type="checkbox" id="xcusprof" switch="bool" <?php if($getROW['cusprof'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcusprof" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="cusprof" type="checkbox" id="xcusprof" switch="bool" <?php if($getROW['cusprof'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcusprof" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Customers Credit</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="cusstat" type="checkbox" id="xcusstat" switch="bool" <?php if($getROW['cusstat'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcusstat" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="cusstat" type="checkbox" id="xcusstat" switch="bool" <?php if($getROW['cusstat'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcusstat" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Inventory</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Dashboard</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="dashinv" type="checkbox" id="xdashinv" switch="bool" <?php if($getROW['dashinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashinv" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="dashinv" type="checkbox" id="xdashinv" switch="bool" <?php if($getROW['dashinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xdashinv" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Products</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="proinv" type="checkbox" id="xproinv" switch="bool" <?php if($getROW['proinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xproinv" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="proinv" type="checkbox" id="xproinv" switch="bool" <?php if($getROW['proinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xproinv" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Calculator</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Calculator #1</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="calc1" type="checkbox" id="xcalc1" switch="bool" <?php if($getROW['calc1'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalc1" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="calc1" type="checkbox" id="xcalc1" switch="bool" <?php if($getROW['calc1'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalc1" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Calculator #2</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="calc2" type="checkbox" id="xcalc2" switch="bool" <?php if($getROW['calc2'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalc2" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="calc2" type="checkbox" id="xcalc2" switch="bool" <?php if($getROW['calc2'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xcalc2" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Lehmann</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Today Price</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="lehtprice" type="checkbox" id="xlehtprice" switch="bool" <?php if($getROW['lehtprice'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehtprice" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="lehtprice" type="checkbox" id="xlehtprice" switch="bool" <?php if($getROW['lehtprice'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehtprice" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Inventory</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="lehinv" type="checkbox" id="xlehinv" switch="bool" <?php if($getROW['lehinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehinv" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="lehinv" type="checkbox" id="xlehinv" switch="bool" <?php if($getROW['lehinv'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehinv" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Recipe</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="lehrec" type="checkbox" id="xlehrec" switch="bool" <?php if($getROW['lehrec'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehrec" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="lehrec" type="checkbox" id="xlehrec" switch="bool" <?php if($getROW['lehrec'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlehrec" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">Supplier/Distributor</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Profile</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="suppro" type="checkbox" id="xsuppro" switch="bool" <?php if($getROW['suppro'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsuppro" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="suppro" type="checkbox" id="xsuppro" switch="bool" <?php if($getROW['suppro'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsuppro" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Order List</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="orlist" type="checkbox" id="xorlist" switch="bool" <?php if($getROW['orlist'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xorlist" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="orlist" type="checkbox" id="xorlist" switch="bool" <?php if($getROW['orlist'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xorlist" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Calendar</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="supcalen" type="checkbox" id="xsupcalen" switch="bool" <?php if($getROW['supcalen'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsupcalen" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="supcalen" type="checkbox" id="xsupcalen" switch="bool" <?php if($getROW['supcalen'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xsupcalen" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<br>
<code style="font-size: 18px;margin-left: 4em;">More</code>
<hr style="margin-left: 4em;margin-right: 4em;">

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Website</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="web" type="checkbox" id="xweb" switch="bool" <?php if($getROW['web'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xweb" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="web" type="checkbox" id="xweb" switch="bool" <?php if($getROW['web'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xweb" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Website Message</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="webmes" type="checkbox" id="xwebmes" switch="bool" <?php if($getROW['webmes'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xwebmes" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="webmes" type="checkbox" id="xwebmes" switch="bool" <?php if($getROW['webmes'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xwebmes" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Newsletter</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="newslet" type="checkbox" id="xnewslet" switch="bool" <?php if($getROW['newslet'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xnewslet" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="newslet" type="checkbox" id="xnewslet" switch="bool" <?php if($getROW['newslet'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xnewslet" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">File Manager</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="fileman" type="checkbox" id="xfileman" switch="bool" <?php if($getROW['fileman'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xfileman" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="fileman" type="checkbox" id="xfileman" switch="bool" <?php if($getROW['fileman'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xfileman" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Users Account</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="usersacc" type="checkbox" id="xusersacc" switch="bool" <?php if($getROW['usersacc'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xusersacc" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="usersacc" type="checkbox" id="xusersacc" switch="bool" <?php if($getROW['usersacc'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xusersacc" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>

    <label style="text-align:right" for="example-text-input" class="col-md-2 col-form-label">Localization</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="local" type="checkbox" id="xlocal" switch="bool" <?php if($getROW['local'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlocal" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="local" type="checkbox" id="xlocal" switch="bool" <?php if($getROW['local'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlocal" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>
</div>

<div class="form-group row">
    <div class="col-1"></div>
    <label for="example-text-input" class="col-md-2 col-form-label">Logs</label>
    <div class="col-md-1 mt-2">
        <?php if(isset($_GET['edit'])) { ?>
            <input name="logs" type="checkbox" id="xlogs" switch="bool" <?php if($getROW['logs'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlogs" data-on-label="On" data-off-label="Off"></label>
        <?php } else { ?>
            <input name="logs" type="checkbox" id="xlogs" switch="bool" <?php if($getROW['logs'] == 'on') {echo "checked"; } else {} ?> /> 
            <label for="xlogs" data-on-label="On" data-off-label="Off"></label>
        <?php } ?> 
    </div>                                          
</div>

<div class="form-group mt-4 text-right" style="position:relative; text-align: right;">
    <?php if(isset($_GET['edit'])){?>
        <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-wrench mr-2"></i> Update </button>&nbsp;
        <a href="ex_users" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
    <?php } else { ?>
        <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save </button>&nbsp;
        <a href="ex_users" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
    <?php } ?> 
</div>

</div>
</form>
</div>
</div> 
</div>

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
<script>
    function checkUsername() {

        jQuery.ajax({
            url: "ex_users_exist.php",
            data:'username='+$("#username").val(),
            type: "POST",
            success:function(data){
                $("#check-username").html(data);
            },
            error:function (){}
        });
    }
</script>
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