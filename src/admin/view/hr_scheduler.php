<?php include 'common/session.php' ?>
<?php if($_SESSION['sched'] == on){?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?> 
   <?php include 'common/status2.php' ?>
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
                                    <h4 class="mb-2">&ensp;Employee Schedule</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Employee Schedule</li>
                                        </ol>
                                    </div>
                                    
                                <?php if($_SESSION['addbut'] == on){?>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>Upload </a></li>&ensp;

                                            <li><a href="gantt/gantt.php" class="btn btn-primary waves-effect waves-light" target="_blank"><i class="mdi mdi-plus mr-2"></i>Add Entry</a></li>&ensp;
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Store</th>
                                                <th>File</th>
                                            <?php if($_SESSION['filebut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th class="thStyle" width="1">Action</th>
                                            <?php } ?>
                                            </tr>
                                            </thead>
        
                                              
                                            <tbody>
                                             <?php
                                                 $sql = "SELECT * FROM employees_schedule";
                                                 $query = $conn->query($sql);
                                                    while($row = $query->fetch_assoc()){                                      
                                            ?>
                                            <tr>
                                                <td width="10%"><?php echo date('M-d-Y', strtotime($row['sdate'])); ?></td>
                                                <td><?php echo utf8_encode(ucwords(strtolower($row['stitle']))); ?></td>
                                                <td><?php echo $row['sbranch']; ?></td>
                                                <td style="width:5%;"><a href="../controller/hr_scheduler_dl.php?path=../uploads/schedules/<?php echo $row['photo'];?>">DOWNLOAD</a></td>

                                            <?php if($_SESSION['filebut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td style="text-align:right" width="1">
                                                    <div class="action-btn">
                                                    <?php if($_SESSION['filebut'] == on){?>
                                                        <a data-id="<?php echo $row['id']; ?>" class="text-info ml-2 photo" title="photo"><i class="mdi mdi mdi-file-image-outline" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['editbut'] == on){?>
                                                        <a data-id="<?php echo $row['id']; ?>" class="text-info ml-2 edit" title="edit"><i class="mdi mdi-pencil-box-outline" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                        <a data-id="<?php echo $row['id']; ?>" class="text-dark ml-2 delete" title="delete"><i class="mdi mdi-delete-variant" style="font-size:17px"></i></a>
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
           <?php include 'hr_scheduler_modal.php'; ?>
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
    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/form-advanced.init.js"></script>
    <script>
        $(document).ready(function() {
           $('#example').DataTable( {
               "order": [[ 0, "desc" ]]
           } );
       } );
   </script>
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

      $(document).on('click', '.photo', function(e) {
        e.preventDefault();
        $('#photo').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/hr_scheduler_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          console.log(response);
          $('.id').val(response.id);
          $('#edit_sdate').val(response.sdate);
          $('#edit_stitle').val(response.stitle);
          $('#edit_sbranch').val(response.sbranch);
          $('#del_schedule').html(response.stitle);
      }
  });
  }
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['sched'] != on)
{
    header('location:error404');
    exit;
}
?>