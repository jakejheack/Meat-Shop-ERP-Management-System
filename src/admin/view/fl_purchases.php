<?php include 'common/session.php'; ?>
<?php if($_SESSION['purchases'] == on){?>
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
                            <h4 class="mb-2">&ensp;Purchases</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Purchases</li>
                            </ol>
                        </div>

                        <?php if($_SESSION['addbut'] == on){?>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-cart-outline mr-2"></i>&nbsp;&nbsp;Add Purchase</a></li>&ensp;
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
                        timer: 10000
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
                            timer: 10000
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
                                                <th style="width:0%;"></th> 
                                                <th style="width:1%;">#</th>
                                                <th style="width:1%;">Date</th>
                                                <th style="width:1%;">Branch</th>
                                                <th style="width:1%;">Purchase No.</th>
                                                <th style="width:1%;">Qty</th>
                                                <th style="width:15%;">Supplier Name</th>
                                                <th style="width:15%;">Title</th>
                                                <th style="width:1%;">Amount</th>  
                                                <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['filebut'] == on || $_SESSION['deletebut'] == on){?>
                                                    <th style="width:1%;display:none;" class="thStyle"></th>
                                                <?php } ?>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            $i = 1;
                                            $format = "M d Y";
                                            if ($_SESSION['branch'] == All){
                                                $sql = "SELECT * FROM purchase ORDER BY id;";
                                            } elseif ($_SESSION['branch'] == Daet) {
                                                $sql = "SELECT * FROM purchase WHERE branch='Daet' AND stat = 'Awaiting' ORDER BY id;";
                                            } elseif ($_SESSION['branch'] == Magsaysay) {
                                                $sql = "SELECT * FROM purchase WHERE branch='Magsaysay'  AND stat = 'Awaiting' ORDER BY id;";
                                            } elseif ($_SESSION['branch'] == Yashano) {
                                                $sql = "SELECT * FROM purchase WHERE branch='Yashano'  AND stat = 'Awaiting' ORDER BY id;";
                                            } else {
                                                $sql = "SELECT * FROM purchase WHERE branch='None' ORDER BY id;";
                                            }   

                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){                                       
                                                ?>
                                                <tr>
                                                    <td class="<?php echo $row['stat']; ?>">●</td>
                                                    <td style="width:1%;"><?php echo $i; $i++;?></td>                                  
                                                    <td style="width:5%;"><?php echo date_format(date_create($row['created_on']), $format); ?></td>
                                                    <td><?php echo ucwords(strtolower($row['branch'])); ?></td>
                                                    <td><?php echo ucwords(strtoupper($row['purchaseno'])); ?></td>
                                                    <td><?php echo ucwords(strtolower($row['qty'])); ?> <?php echo mb_strtoupper(strtolower($row['unit'])); ?></td>
                                                    <td><?php echo ucwords(strtolower($row['supplier'])); ?></td>
                                                    <td><?php echo ucwords(strtolower($row['title'])); ?></td>
                                                    <td>₱ <?php echo number_format($row['amount'],2); ?></td>

                                                    <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['filebut'] == on || $_SESSION['deletebut'] == on){?>    
                                                        <td style="text-align:right;width:1%;">

                                                            <div class="dropdown show action-btn">
                                                                <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                                                </a>

                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                    <?php if($_SESSION['viewbut'] == on){?>
                                                                        <button class="dropdown-item view" title="view" data-id="<?php echo $row['id']; ?>">View</button>
                                                                        <a href="../controller/fl_purchase_dl.php?path=../uploads/purchase/<?php echo $row['imageText'];?>" class="dropdown-item">Download File</a>
                                                                    <?php } ?>
                                                                    <?php if($_SESSION['editbut'] == on){?>
                                                                        <button class="dropdown-item edit" title="edit"  data-id="<?php echo $row['id']; ?>">Edit</button>
                                                                    <?php } ?>
                                                                    <?php if($_SESSION['filebut'] == on){?>
                                                                        <a class="dropdown-item photo" href="#edit_photo" data-toggle='modal' data-id="<?php echo $row['id']; ?>">Edit Upload</a>
                                                                    <?php } ?>
                                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                                        <button class="dropdown-item delete" title="delete"  data-id="<?php echo $row['id']; ?>">Delete</button>
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
            <?php include 'fl_purchases_modal.php'; ?>
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
        $(function () {
            $("#sumqty, #sumunitprice, #sumamount").keyup(function () {
                $("#sumamount").val(+$("#sumunitprice").val() * +$("#sumqty").val());
            });

            $("#sum_qty, #sum_unitprice, #sum_amount").keyup(function () {
                $("#sum_amount").val(+$("#sum_unitprice").val() * +$("#sum_qty").val());
            });

        });            
    </script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "order": [[ 1, "desc" ]],
                dom: 
                "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5, 6 , 7]
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
                        columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
                    }
                },
                ]
            } );
        } );
    </script>
    <script>
        $(".dropdownppmenu").change(function() {
          var location = $(this).val().split('{}');
          $("#ppid").val(location[0]);
          $("#ppsupplier").val(location[1]);
      });
  </script>
  <script>
    $(function(){
      $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

      $(document).on('click', '.view', function(e) {
        e.preventDefault();
        $('#view').modal('show');
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
        $('#edit_photo').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });
  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/fl_purchase_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('.purid').val(response.purid);
          $('.id').html(response.id);
          $('.del_purchase').html(response.qty+''+response.unit+' - '+response.title);
          $('#del_purid').val(response.id);
          $('#edit_purchaseno').val(response.purchaseno);
          $('#edit_purdate').val(response.purdate);
          $('#edit_category').val(response.category);
          $('#edit_branch').val(response.branch);
          $('#edit_supplier').val(response.supplier);
          $('#edit_unit').val(response.unit);
          $('#edit_title').val(response.title); 
          $('#edit_stat').val(response.stat);
          $('#edit_entry').val(response.entry);
          $('#sum_qty').val(response.qty);
          $('#sum_unitprice').val(response.unitprice);
          $('#sum_amount').val(response.amount);

          $('#view_purchaseno').val(response.purchaseno);
          $('#view_purdate').val(response.purdate);
          $('#view_category').val(response.category);
          $('#view_branch').val(response.branch);
          $('#view_supplier').val(response.supplier);
          $('#view_qty').val(response.qty);
          $('#view_unit').val(response.unit);
          $('#view_title').val(response.title);
          $('#view_unitprice').val(response.unitprice);
          $('#view_amount').val(response.amount);
          $('#view_stat').val(response.stat);
          $('#view_entry').val(response.entry);
      }
  });
  }
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['purchases'] != on)
{
    header('location:error404');
    exit;
}
?>