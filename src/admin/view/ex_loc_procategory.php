<?php include 'common/session.php'; ?>
<?php if($_SESSION['local'] == on){?>
<?php include '../controller/ex_loc_procategory.php'; ?>
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
                                    <h4 class="mb-2">&ensp;Product Category</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item"><a href="ex_localization">Localization</a></li>
                                            <li class="breadcrumb-item active">Product Category</li>
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
                    
                    <?php if($_SESSION['addbut'] == on || $_SESSION['editbut'] == on){?>
                    <form method="post" class="needs-validation" novalidate>
                    <div class="card card-body">
                        <div class="row" style="text-align:right">
                               
                                <div class="col-md-7">     
                                        <input type="text" name="ex_categoryName" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['ex_categoryName'];?>" placeholder="Add Product Category" autocomplete="off" required >
                                </div>
                           
                                <div class="col-md-3">     
                                        <select class="custom-select form-control required" id="ex_status" name="ex_status" required>
                                            <?php if(isset($_GET['edit'])) { ?>
                                            <option value="<?php if(isset($_GET['edit'])) echo $getROW['ex_status'];?>"><?php if(isset($_GET['edit'])) echo $getROW['ex_status'];?></option>
                                            <option value="" disabled select>- SELECT -</option>
                                            <option value="Enabled">Enabled</option>
                                            <option value="Disabled">Disabled</option>
                                            <?php } else { ?>
                                            <option value="">- SELECT -</option>
                                            <option value="Enabled">Enabled</option>
                                            <option value="Disabled">Disabled</option>
                                            <?php } ?> 
                                        </select> 
                                </div>
                                <div class="col-md-2">
                                        <?php if(isset($_GET['edit'])) { ?> 
                                            <button class="btn btn-warning" type="submit" name="update"><i class="mdi mdi-database font-16 mr-1"></i> Update Data </button>
                                            <?php } else { ?>
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="save">
                                               <i class="mdi mdi-check mr-2"></i>&nbsp;&nbsp;&nbsp;Save Info
                                            </button>
                                        <?php } ?> 
                               </div>
                          </div>
                    </div>
                    </form>
                    <?php } ?>

                    <div class="row">                           
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <div>
                                            </div>
                                        </div>
                                        <br>
                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th width="90%">Product Category</th>
                                                <th>Status</th>
                                            <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th width="40" style="text-align:center" id="btnPrint">Action</th>
                                            <?php } ?>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $res = $MySQLiconn->query("SELECT * FROM product_category");
                                                    while($row=$res->fetch_array()) { ?>
                                            <tr>
                                                <td><?php echo utf8_encode(ucwords(strtolower($row['ex_categoryName']))); ?></td>
                                                <td class="<?php echo $row['ex_status']; ?>"><b><?php echo $row['ex_status']; ?></b></td>

                                            <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td>
                                                    <div class="action-btn" style="text-align: center;">
                                                    <?php if($_SESSION['editbut'] == on){?>
                                                        <a href="?edit=<?php echo $row['ex_categoryID']; ?>" class="text-info" title="edit"><i class="mdi mdi-pencil-box-outline" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                        <a href="?del=<?php echo $row['ex_categoryID']; ?>" onclick="return confirm('sure to delete !'); " class="text-dark ml-2" title="delete"><i class="mdi mdi-delete-variant" style="font-size:17px"></i></a>
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
                            </div> <!-- end col -->
                        </div> 
                        </div><!-- end row -->
                    

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

    <script>
        $(document).ready(function() {
           $('#example').DataTable( {
               "order": [[ 0, "asc" ]]
           } );
       } );
   </script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['local'] != on)
{
    header('location:error404');
    exit;
}
?>