<?php include 'common/session.php'; ?>
<?php if($_SESSION['proinv'] == on){?>
<?php include '../controller/pro_products.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/status2.php'; ?> 
   <?php include 'common/print.php'; ?>
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
                                    <h4 class="mb-2">&ensp;Daet Products</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Daet Products</li>
                                        </ol>
                                    </div>
                                    
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                        <?php if($_SESSION['usersacc'] == on){?>
                                            <li><a href="pro_products_form" type="button" class="btn btn-primary waves-effect waves-light"><i class="uil uil-cube mr-2"></i>&nbsp;&nbsp;Add Product</a></li>&ensp;
                                        <?php } ?>

                                             <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Branch <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="pro_products">All</a>
                                                        <a class="dropdown-item" href="pro_products_daet">Daet</a>
                                                        <a class="dropdown-item" href="pro_products_magsaysay">Magsaysay</a>
                                                        <a class="dropdown-item" href="pro_products_yashano">Yashano</a>
                                                    </div>
                                                </div>
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
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th style="width:1%;display:none;"></th> 
                                                <th width="1">SKU</th>
                                                <th>Product Name</th>
                                                <th width="1">Stock</th>
                                                <th width="1">Retail</th>
                                                <th width="1">Price</th>
                                                <th width="1">Category</th> 
                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th style="width:1%;display:none;" class="thStyle"></th>
                                            <?php } ?>
                                            </tr>
                                            </thead>
        
                                              
                                            <tbody>
                                            <?php
                                                $res = $MySQLiconn->query("SELECT * FROM product_inventory JOIN product_category ON product_category.ex_categoryID = product_inventory.productCategory WHERE productStore='Daet'; ");
                                                while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td class="<?php echo $row['productStatus']; ?>">●</td>      
                                                <td><?php echo $row['productSku']; ?></td>
                                                <td><?php echo utf8_encode(ucwords(strtolower($row['productName']))); ?></td>
                                                <td><?php echo $row['productPrice']; ?></td>
                                                <td><?php echo $row['productStock']; ?></td>
                                                <td><?php echo $row['productRetail']; ?></td>
                                                <td><?php echo utf8_encode(ucwords(strtolower($row['ex_categoryName']))); ?></td>

                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td style="text-align:right;width:1%;">

                                                <div class="dropdown show action-btn">
                                                <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                                </a>

                                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <?php if($_SESSION['viewbut'] == on){?>
                                                    <a href="pro_products_form?view=<?php echo $row['productID']; ?>" class="dropdown-item" title="view">View</a>
                                                <?php } ?>
                                                <?php if($_SESSION['editbut'] == on){?>
                                                    <a href="pro_products_form?edit=<?php echo $row['productID']; ?>" class="dropdown-item" title="edit">Edit</a>
                                                <?php } ?>
                                                <?php if($_SESSION['deletebut'] == on){?>    
                                                    <a href="?del=<?php echo $row['productID']; ?>" onclick="return confirm('sure to delete !'); " class="dropdown-item" title="delete">Delete</a>
                                                <?php } ?>
                                                </div>
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
                "order": [[ 2, "asc" ]],
                dom: 
                "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",


                buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    }
                },

                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6]
                    }
                },

                ]

            } );
        } );
    </script>

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['proinv'] != on)
{
    header('location:error404');
    exit;
}
?>