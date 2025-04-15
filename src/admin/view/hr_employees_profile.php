<?php include 'common/session.php'; ?>
<?php if($_SESSION['emppro'] == on){?>
<?php include '../controller/hr_employees_idpro.php'; ?>
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

   <!-- DataTables -->
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- jquery-bar-rating css -->
   <link href="assets/libs/jquery-bar-rating/themes/css-stars.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
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
                            <h4 class="mb-2">&ensp;Employee Profile</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Employee Profile</li>
                            </ol>
                        </div>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                               <li><a href="hr_employees" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a></li>&ensp;
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

                <div class="row mb-4">
                    <div class="col-xl-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="clearfix"></div>
                                    <div>
                                        <br><br>
                                        <img src="../uploads/employee/<?php echo $getROW['photo'];?>" alt="" class="avatar-lg rounded-circle img-thumbnail" >
                                    </div>
                                    <h4 class="mt-3 mb-1"><?php echo utf8_encode(ucwords(strtolower($getROW['firstname'])));?> <?php echo utf8_encode(ucwords(strtolower($getROW['lastname'])));?> <?php echo utf8_encode(ucwords(strtolower($getROW['suffix'])));?></h4>
                                    <p class="text-muted">ID: <?php echo $getROW['employee_id'];?></p>
                                    <br>
                                    <br>


                                </div>

                                <hr class="my-4">

                                <ul class="activity-feed mb-0 pl-2" style="zoom:90%">
                                    <li class="feed-item">
                                        <div class="feed-item-list">
                                            <h5 class="mb-1" style="color:#5b73e8">Remarks</h5>
                                            <div class="card-body">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="col-md-5 text-right control-label col-form-label">Employee ID</label>
                                                    <div class="col-md-7 border-left pb-2 pt-2">
                                                        <label><b><?php echo $getROW['employee_id'];?></b></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="col-md-5 text-right control-label col-form-label">Designation</label>
                                                    <div class="col-md-7 border-left pb-2 pt-2">
                                                        <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['designation'])));?></b></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="col-md-5 text-right control-label col-form-label">Department</label>
                                                    <div class="col-md-7 border-left pb-2 pt-2">
                                                       <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['department'])));?></b></label>
                                                   </div>
                                               </div>                                    
                                               <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-5 text-right control-label col-form-label">Position</label>
                                                <div class="col-md-7 border-left pb-2 pt-2">
                                                    <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['description'])));?></b></label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-5 text-right control-label col-form-label">Employment Type</label>
                                                <div class="col-md-7 border-left pb-2 pt-2">
                                                    <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['employment'])));?></b></label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-5 text-right control-label col-form-label">Join Date</label>
                                                <div class="col-md-7 border-left pb-2 pt-2">
                                                    <label><b><?php echo $getROW['created_on'];?></b></label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-5 text-right control-label col-form-label">Dismissal Date</label>
                                                <div class="col-md-7 border-left pb-2 pt-2">
                                                    <label><b><?php echo $getROW['dismiss'];?></b></label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-5 text-right control-label col-form-label">Status</label>
                                                <div class="col-md-7 border-left pb-2 pt-2">
                                                    <label><b class="<?php echo $getROW['stat'];?>"><?php echo $getROW['stat'];?></b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>



                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card mb-0">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                                    <i class="uil uil-user-circle font-size-20"></i>
                                    <span class="d-none d-sm-block">About</span> 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#performance" role="tab">
                                    <i class="mdi mdi-account-star-outline font-size-20"></i>
                                    <span class="d-none d-sm-block">Performance</span> 
                                </a>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content p-4" style="zoom:95%">
                            <div class="tab-pane active" id="about" role="tabpanel">
                                <div>
                                    <div>
                                        <ul class="activity-feed mb-0 pl-2">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <h5 class="mb-1" style="color:#5b73e8">Personal Information</h5>
                                                    <div class="card-body">
                                                        <div class="form-group row align-items-center mb-0">
                                                            <label class="col-md-3 text-right control-label col-form-label">First Name</label>
                                                            <div class="col-md-9 border-left pb-2 pt-2">
                                                               <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['firstname'])));?></b></label>
                                                           </div>
                                                       </div>                                    
                                                       <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Middle Name</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['middlename'])));?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Last Name</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['lastname'])));?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Suffix</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['suffix'])));?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Gender</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label class="capitalize"><b><?php echo $getROW['gender'];?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Date of Birth</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo $getROW['birthdate'];?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Present Address</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['address'])));?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Permanent Address</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo utf8_encode(ucwords(strtolower($getROW['peraddress'])));?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Contact Number</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo $getROW['contact_info'];?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Email Address</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo $getROW['email'];?></b></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row align-items-center mb-0">
                                                        <label class="col-md-3 text-right control-label col-form-label">Emergency Number</label>
                                                        <div class="col-md-9 border-left pb-2 pt-2">
                                                            <label><b><?php echo $getROW['emergency'];?></b></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="feed-item">
                                         <div class="feed-item-list">
                                             <h5 class="mb-1" style="color:#5b73e8">Benefits</h5>
                                             <div class="card-body">
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="col-md-3 text-right control-label col-form-label">PhilHealth</label>
                                                    <div class="col-md-9 border-left pb-2 pt-2">
                                                        <label><b><?php echo $getROW['philhealth'];?></b></label>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center mb-0">
                                                    <label class="col-md-3 text-right control-label col-form-label">SSS</label>
                                                    <div class="col-md-9 border-left pb-2 pt-2">
                                                       <label><b><?php echo $getROW['sss'];?></b></label>
                                                   </div>
                                               </div>                                    
                                               <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-3 text-right control-label col-form-label">Pagibig</label>
                                                <div class="col-md-9 border-left pb-2 pt-2">
                                                    <label><b><?php echo $getROW['pagibig'];?></b></label>
                                                </div>
                                            </div>
                                            <div class="form-group row align-items-center mb-0">
                                                <label class="col-md-3 text-right control-label col-form-label">TIN</label>
                                                <div class="col-md-9 border-left pb-2 pt-2">
                                                    <label><b><?php echo $getROW['tin'];?></b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="performance" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th width="40">Date</th>
                                        <th width="40">Employee Name</th>
                                        <th width="10">Rating</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <?php
                                    $res = $MySQLiconn->query("SELECT * FROM performance JOIN employees ON employees.id = performance.hr_perName WHERE id=".$_GET['view2']);
                                    while($row=$res->fetch_array()){                                       
                                        ?>
                                        <tr>
                                            <td width="40"><?php echo date('M-d-Y', strtotime($row['hr_perDate'])); ?></td>
                                            <td width="40"><?php echo utf8_encode(ucwords(strtolower($row['firstname']))); ?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row['lastname']))); ?>&nbsp;<?php echo utf8_encode(ucwords(strtolower($row['suffix']))); ?></td>
                                            <td width="10"><?php echo str_repeat('<i class="fas fa-star" style="color:orange".</i>', $row['hr_perRating']) ?></td>
                                                <td><?php echo utf8_encode(ucwords(strtolower($row['hr_perDesc']))); ?></td>
                                            </tr> 
                                            <?php
                                        } 
                                        ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<!-- jquery-bar-rating js -->
<script src="assets/libs/jquery-bar-rating/jquery.barrating.min.js"></script>   
<script src="../../assets/js/pages/rating-init.js"></script>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['emppro'] != on)
{
    header('location:error404');
    exit;
}
?>