<?php include 'common/session.php'; ?>
<?php if($_SESSION['cusstat'] == on){?>
    <!doctype html>
    <html lang="en">

    <head>
     <?php include 'common/title.php'; ?> 
     <?php include 'common/status2.php'; ?> 
     <?php include 'common/query.php'; ?> 
     <!-- Bootstrap Css -->
     <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
     <!-- Sweet Alert -->
     <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
     <!-- plugin css -->
     <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
     <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
     <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"/>
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
                            <h4 class="mb-2">&ensp;Employees Status</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item"><a href="cus_customers_payment">Employees Credit</a></li>
                                <li class="breadcrumb-item active">Balance</li>
                            </ol>
                        </div>

                        <div class="page-title-right">
                          <ol class="breadcrumb m-0">
                            <li><a href="employees_credit" class="btn btn-secondary waves-effect waves-light"><i class="uil uil-money-bill mr-2"></i> Credits</a></li>
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
                                            <th width="50">Customer Name</th>
                                            <th width="2%">Paid</th>
                                            <th width="2%">Credit</th>                                                
                                            <th width="2%">Balance</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $i = 1;
                                        $res = $MySQLiconn->query("select employees.id as id,firstname as firstname,lastname as lastname,suffix as suffix, sum(amountin) as paid, sum(amountout) as credit from employees left join employees_credit on employees.id=employees_credit.eid group by id order by firstname");

                                        while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td><?php echo ucwords(strtolower($row['firstname'])); ?> <?php echo ucwords(strtolower($row['lastname'])); ?> <?php echo ucwords(strtolower($row['suffix'])); ?></td>
                                                <td><?php echo number_format($row['paid'],2); ?></td>
                                                <td><?php echo number_format($row['credit'],2); ?></td>
                                                <td style="<?php $incredit = $row['paid']; $outcredit = $row['credit']; $balance =  $outcredit - $incredit; echo($balance < 1 ? 'color:green' : 'color:red'); ?>"><p style="font-weight:500"><?php $incredit = $row['paid']; $outcredit = $row['credit']; $balance =  $outcredit - $incredit; echo number_format($balance,2); ?></p></td> 
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
        <?php include 'cus_employees_credit_modal.php'; ?>
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
<!-- plugins -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>
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
            "order": [[ 0, "asc" ]],
            dom: 
            "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",


            buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [ 1, 2, 3, 4]
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
                    columns: [ 1, 2, 3, 4 ]
                }
            },

            ]

        } );
    } );
</script>
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

      $('.view').click(function(e){
        e.preventDefault();
        $('#view').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });
  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/cus_employees_credit_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('#edit_cusname').val(response.cusname);
          $('#edit_cdate').val(response.cdate);
          $('#edit_amountin').val(response.amountin);
          $('#edit_amountout').val(response.amountout);
          $('#edit_paytype').val(response.paytype);
          $('#edit_notes').val(response.notes);
          $('#del_cuslogs').html(response.id);
          $('#view_firstname').val(response.firstname);
          $('#view_cpTin').val(response.cpTin);
          $('#view_cpContacts').val(response.cpContacts);
          $('#view_cpAddress').val(response.cpAddress);
          $('#view_cpType').val(response.cpType);
          $('#view_cpjoinDate').val(response.cpjoinDate);
          $('#view_cpdueFrom').val(response.cpdueFrom);
          $('#view_cpdueTo').val(response.cpdueTo);
          $('#view_cplimitAmount').val(response.cplimitAmount);
          $('#view_cpStatus').val(response.cpStatus);
      }
  });
  }
</script>

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['cusstat'] != on)
{
    header('location:error404');
    exit;
}
?>