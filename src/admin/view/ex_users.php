<?php include 'common/session.php'; ?>
<?php if($_SESSION['usersacc'] == on){?>
    <?php include '../controller/ex_users.php'; ?>
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
                            <h4 class="mb-2">&ensp;Users Account</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Users Account</li>
                            </ol>
                        </div>

                        <?php if($_SESSION['addbut'] == on){?>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li><a href="ex_users_form" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-account-multiple-plus-outline mr-2"></i>&nbsp;&nbsp;Add User </a></li>&ensp;
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="mod-fit"></th>
                                                <th>Account Name</th>
                                                <th>Role Title</th>
                                                <th>Branch</th>
                                                <th>Username</th>
                                                <th class="mod-center mod-fit">Access</th>
                                                <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                    <th class="mod-fit" id="btnPrint"></th>
                                                <?php } ?>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            $company = $_SESSION['company'];
                                            if ($_SESSION['access'] == Administrator) {
                                                $res = $MySQLiconn->query("SELECT * FROM access");
                                            } else {
                                                $res = $MySQLiconn->query("SELECT * FROM access WHERE NOT access='Administrator';");
                                            }
                                            while($row=$res->fetch_array()){                                       
                                                ?>
                                                <tr>
                                                    <td class="<?php echo $row['accstatus']; ?>" style="font-weight:600;">●</td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['accfname']))); ?> <?php echo utf8_encode(ucwords(strtolower($row['acclname']))); ?></td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['roletitle']))); ?></td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['branch']))); ?></td>

                                                    <td><?php echo $row['username']; ?></td>
                                                    <td>
                                                    <?php if($row['access'] == Administrator) { ?>
                                                        <span class="badge bg-danger">Administrator</span>
                                                    <?php } elseif($row['access'] == BranchControl) { ?>
                                                        <span class="badge bg-primary">Branch Control</span>
                                                    <?php } elseif($row['access'] == Cashier) { ?>
                                                        <span class="badge bg-secondary">Cashier</span>
                                                    <?php } elseif($row['access'] == Manager) { ?>
                                                        <span class="badge bg-secondary">Manager</span>
                                                    <?php } elseif($row['access'] == Other) { ?>
                                                        <span class="badge bg-success">Other</span>
                                                    <?php } ?>
                                                    </td>
                                                    <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                        <td style="text-align:right" id="btnPrint">
                                                            <div class="dropdown show action-btn">
                                                                <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                                                </a>

                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                  <?php if($_SESSION['editbut'] == on){?>
                                                                    <a data-id="<?php echo $row['id']; ?>" class="dropdown-item edit" title="change password" data-id="<?php echo $row['id']; ?>">Password</a>
                                                                    <a href="ex_users_form?edit=<?php echo $row['id']; ?>" class="dropdown-item" title="edit">Edit</a>
                                                                <?php } ?>
                                                                <?php if($_SESSION['deletebut'] == on){?>
                                                                    <a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('sure to delete !');" class="dropdown-item" title="delete">Delete</a>
                                                                    <?php } ?>  
                                                                </div>
                                                            </div>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end col -->
                        </div> 
                    </div><!-- end row -->
                    
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <?php include 'common/footer.php'; ?>
            <?php include 'ex_users_modal.php'; ?>
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
    <!-- parsleyjs -->
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="assets/js/pages/form-validation.init.js"></script>
    <script>
        $(document).ready(function() {
           $('#example').DataTable( {
               "order": [[ 1, "asc" ]]
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


  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/ex_users_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('.account_name').html(response.accfname+' '+response.acclname);
      }
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