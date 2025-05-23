<?php include 'common/session.php'; ?>
<?php if($_SESSION['overtime'] == on){?>
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
   <!-- Responsive datatable examples -->
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
   <!-- plugin css -->
   <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
   <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
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
                                    <h4 class="mb-2">&ensp;Overtime</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Overtime</li>
                                        </ol>
                                    </div>
                                    
                                  <?php if($_SESSION['addbut'] == on){?>
                                   <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-progress-clock mr-2"></i> Add Overtime </a></li>&ensp;
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
                        <!-- End Status -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th class="hidden"></th>
                                                <th>Date</th>
                                                <th>Employee ID</th>
                                                <th>Name</th>
                                                <th>No. of Hours</th>
                                                <th>Rate</th>
                                              <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th style="width:1%;">Action</th>
                                              <?php } ?>

                                            </tr>
                                            </thead>
        
                                              
                                            <tbody>
                                            <?php
                                                $sql = "SELECT *, overtime.id AS otid, employees.employee_id AS empid FROM overtime LEFT JOIN employees ON employees.id=overtime.employee_id ORDER BY date_overtime DESC";
                                                $query = $conn->query($sql);
                                                while($row = $query->fetch_assoc()){                                       
                                            ?>
                                            <tr>
                                                <td class='hidden'></td>
                                                <td><?php echo date('M d, Y', strtotime($row['date_overtime'])); ?></td>
                                                <td><?php echo $row['empid']; ?></td>
                                                <td class="capitalize"><?php echo utf8_encode(strtoupper(strtolower($row['firstname']))).' '.utf8_encode(strtoupper(strtolower($row['lastname']))).' '.utf8_encode(strtoupper(strtolower($row['suffix']))); ?></td>
                                                <td><?php echo $row['hours']; ?></td>
                                                <td><?php echo $row['rate']; ?></td>

                                              <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td style="text-align:center">
                                                    <div class="action-btn">
                                                      <?php if($_SESSION['editbut'] == on){?>
                                                        <a data-id="<?php echo $row['otid']; ?>" class="text-info ml-2 edit" title="edit"><i class="mdi mdi-pencil-box-outline" style="font-size:17px"></i></a>
                                                      <?php } ?>
                                                      <?php if($_SESSION['deletebut'] == on){?>
                                                        <a data-id="<?php echo $row['otid']; ?>" class="text-dark ml-2 delete" title="delete"><i class="mdi mdi-delete-variant" style="font-size:17px"></i></a>
                                                      <?php } ?>

                                                    </div>
                                                </td>
                                              <?php } ?>
                                            </tr> 
                                            <?php
                                            } 
                                            ?>
                                            </tbody>
                                            
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php' ?>
           <?php include 'hr_attovertime_modal.php' ?>
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
    <!-- Required datatable js -->  
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script>
        $(function(){
          $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

          $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });
      });

        function getRow(id){
          $.ajax({
            type: 'POST',
            url: '../controller/hr_attovertime_row.php',
            data: {id:id},
            dataType: 'json',
            success: function(response){
              var time = response.hours;
              var split = time.split('.');
              var hour = split[0];
              var min = '.'+split[1];
              min = min * 60;
              console.log(min);
              $('.employee_name').html(response.firstname+' '+response.lastname+' '+response.suffix);
              $('.otid').val(response.otid);
              $('#datepicker_edit').val(response.date_overtime);
              $('#overtime_date').html(response.date_overtime);
              $('#hours_edit').val(hour);
              $('#mins_edit').val(min);
              $('#rate_edit').val(response.rate);
          }
      });
      }
  </script>
  <script>
    $(document).ready(function() {
      $("#employee").select2({
        dropdownParent: $("#staticBackdrop")
    });
  });
</script>
<script>
        $(document).ready(function() {
           $('#example').DataTable( {
               "order": [[ 0, "desc" ]]
           } );
       } );
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['overtime'] != on)
{
    header('location:error404');
    exit;
}
?>