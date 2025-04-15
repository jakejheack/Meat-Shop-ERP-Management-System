<?php include 'common/session.php'; ?>
<?php if($_SESSION['emppro'] == on){?>
<?php include 'common/query.php'; ?>
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
</head>

<?php include 'common/body.php' ?>

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
                            <h4 class="mb-2">&ensp;Employee Profiles</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="../dashboard/index.php"> &ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Employee Profiles</li>
                            </ol>
                        </div>

                    <?php if($_SESSION['addbut'] == on){?>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-account-multiple-plus-outline mr-2"></i>&nbsp;&nbsp;Add Employee </a></li>&ensp;
                            </ol>
                        </div>
                    <?php } ?>

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


                    <div class="row">
                        <?php                            
                        $res = $MySQLiconn->query("SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id order by firstname ASC");
                        while($row=$res->fetch_array()){   

                            $image = (!empty($row['photo'])) ? '../uploads/employee/'.$row['photo'] : '../uploads/employee/default_profile.jpg';                                     
                            ?>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                    <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                        <div class="dropdown float-end">
                                            <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                              <i class="uil uil-ellipsis-h"></i>
                                          </a>
                                          
                                          <div class="dropdown-menu dropdown-menu-end">
                                        <?php if($_SESSION['viewbut'] == on){?>
                                            <button class="dropdown-item view" data-id="<?php echo $row['empid']; ?>">View</button>
                                        <?php } ?>
                                        <?php if($_SESSION['editbut'] == on){?>
                                            <button class="dropdown-item edit" data-id="<?php echo $row['empid']; ?>">Edit</button>
                                            <button class="dropdown-item edit_photo" data-id="<?php echo $row['empid']; ?>">Edit Photo</button>
                                        <?php } ?>
                                        <?php if($_SESSION['deletebut'] == on){?>
                                            <button class="dropdown-item delete" data-id="<?php echo $row['empid']; ?>">Delete</button>
                                        <?php } ?>
                                           </div>
                                        </div>
                                    <?php } ?>
                                    <span class="<?php echo $row['stat']; ?>" style="float:left;cursor:default;" title="<?php echo $row['stat']; ?>">●</span>
                                    <div class="clearfix"></div>
                                    <div class="mb-4">
                                        <img src="<?php echo $image ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"><?php echo mb_strtoupper(utf8_encode($row['firstname'])); ?>&nbsp;<?php echo mb_strtoupper(utf8_encode($row['lastname'])); ?>&nbsp;<?php echo mb_strtoupper(utf8_encode($row['suffix'])); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo $row['description']; ?></p>
                                    <p class="text-muted mb-0"><?php echo $row['designation']; ?></p>

                                </div>

                                <div class="btn-group" role="group">
                                    <a href="hr_employees_profile?view2=<?php echo $row['empid']; ?>"  class="btn btn-outline-light text-truncate"><i class="uil uil-user me-1"></i> Profile</a>
                                    <a href="hr_employees_idmaker?view=<?php echo $row['empid']; ?>" class="btn btn-outline-light text-truncate"><i class="mdi mdi mdi-qrcode me-1"></i> ID Card</a>

                                </div>
                            </div>
                        </div>
                        <?php
                    } 
                    ?>
                </div>
                <!-- end row -->



            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'common/footer.php'; ?>
        <?php include 'hr_employees_modal.php'; ?>
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
    $(function(){
      $('.edit').click(function(e){
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

      $('.view').click(function(e){
        e.preventDefault();
        $('#view').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

      $('.delete').click(function(e){
        e.preventDefault();
        $('#delete').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

      $('.edit_photo').click(function(e){
        e.preventDefault();
        $('#edit_photo').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/hr_employees_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('.empid').val(response.empid);
          $('.employee_id').html(response.employee_id);
          $('.del_employee_name').html(response.firstname+' '+response.lastname+' '+response.suffix);
          $('#employee_name').html(response.firstname+' '+response.lastname+' '+response.suffix);
          $('#edit_firstname').val(response.firstname);
          $('#edit_middlename').val(response.middlename);
          $('#edit_lastname').val(response.lastname);
          $('#edit_suffix').val(response.suffix);
          $('#edit_address').val(response.address);
          $('#edit_peraddress').val(response.peraddress);
          $('#datepicker_edit').val(response.birthdate);
          $('#gender_val').val(response.gender).html(response.gender);
          $('#edit_contact').val(response.contact_info);
          $('#edit_email').val(response.email);
          $('#edit_emergency').val(response.emergency);
          $('#edit_philhealth').val(response.philhealth);
          $('#edit_pagibig').val(response.pagibig);
          $('#edit_sss').val(response.sss);
          $('#edit_tin').val(response.tin);      
          $('#edit_designation').val(response.designation);
          $('#edit_department').val(response.department);
          $('#position_val').val(response.position_id).html(response.description);
          $('#edit_employment').val(response.employment);
          $('#schedule_val').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
          $('#edit_stat').val(response.stat);
          $('#edit_dismiss').val(response.dismiss);

          $('#view_firstname').val(response.firstname);
          $('#view_middlename').val(response.middlename);
          $('#view_lastname').val(response.lastname);
          $('#view_suffix').val(response.suffix);
          $('#view_address').val(response.address);
          $('#view_peraddress').val(response.peraddress);
          $('#datepicker_view').val(response.birthdate);
          $('#gender_view').val(response.gender).html(response.gender);
          $('#view_contact').val(response.contact_info);
          $('#view_email').val(response.email);
          $('#view_emergency').val(response.emergency);
          $('#view_philhealth').val(response.philhealth);
          $('#view_pagibig').val(response.pagibig);
          $('#view_sss').val(response.sss);
          $('#view_tin').val(response.tin);      
          $('#view_designation').val(response.designation);
          $('#view_department').val(response.department);
          $('#position_view').val(response.position_id).html(response.description);
          $('#view_employment').val(response.employment);
          $('#schedule_view').val(response.schedule_id).html(response.time_in+' - '+response.time_out);
          $('#view_stat').val(response.stat);
          $('#view_dismiss').val(response.dismiss);
      }
  });
  }

</script>
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