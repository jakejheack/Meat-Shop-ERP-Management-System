<?php include 'common/session.php'; ?>
<?php if($_SESSION['logs'] == on){?>
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

       <!-- Responsive Table css -->
       <link href="assets/libs/admin-resources/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-2">&ensp;Logs</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Logs</li>
                            </ol>
                        </div>
                    <?php if($_SESSION['roletitle'] == Developer){?>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li><a href="#addnew" data-bs-toggle="modal" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-cog-sync-outline mr-2"></i> Add Logs </a></li>&ensp;
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
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Date & Time</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th style="width:1%" title="Status">[S]</th>
                                                    <?php if($_SESSION['roletitle'] == Developer){?>
                                                        <th class="thStyle">Action</th>
                                                    <?php } ?>
                                                <!--
                                                <th class="thStyle">Action</th>
                                            -->
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM logs ORDER BY id DESC";
                                        $query = $conn->query($sql);
                                        while($row = $query->fetch_assoc()){                                      
                                            ?>
                                            <tr>
                                                <td style="width:20px"><?php echo date('M-d-Y', strtotime($row['logsDate'])); ?>&ensp;<?php echo date('h:i A', strtotime($row['logsTime'])); ?></td>
                                                <td><?php echo $row['logsTitle']; ?></td>
                                                <td><?php echo $row['logsDesc']; ?></td>
                                                <td width="0" class="<?php echo $row['logsStatus']; ?>" style="cursor:default;" title="<?php echo $row['logsStatus']; ?>">●</td>
                                            <?php if($_SESSION['roletitle'] == Developer){?>
                                                <td style="text-align:right">
                                                     <div class="action-btn">
                                                        <button class="text-info buttonPartial" title="edit"><i class="mdi mdi-pencil-box-outline edit" data-id="<?php echo $row['id']; ?>"></i></button>
                                                        
                                                        <button class="text-dark ml-2 buttonPartial" title="delete"><i class="mdi mdi-delete-variant delete" data-id="<?php echo $row['id']; ?>"></i></button>
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

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


<?php include 'common/footer.php'; ?>
<?php include 'ex_logs_modal.php'; ?>
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

<!-- Responsive Table js -->
<script src="assets/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
<!-- Init js -->
<script src="assets/js/pages/table-responsive.init.js"></script>
<script>
$(function(){
  $('.edit').click(function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.delete').click(function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: '../controller/ex_logs_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.id').val(response.id);
      $('#edit_logsDate').val(response.logsDate);
      $('#edit_logsTime').val(response.logsTime);
      $('#edit_logsTitle').val(response.logsTitle);
      $('#edit_logsFile').val(response.logsFile);
      $('#edit_logsDesc').val(response.logsDesc);
      $('#edit_logsStatus').val(response.logsStatus);
      $('#del_logs').html(response.logsTitle);
    }
  });
}
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['logs'] != on)
{
    header('location:error404');
    exit;
}
?>