<?php include 'common/session.php'; ?>
<?php if($_SESSION['payroll'] == on){?>
<?php
include '../../../timezone.php';
$range_to = date('m/d/Y');
$range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>
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

 <!-- plugin css -->
 <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
 <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
 <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
 <!-- DataTables -->
 <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <!-- Responsive datatable examples -->
 <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
 <!-- daterange picker -->
 <link rel="stylesheet" href="assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
 <!-- Bootstrap time Picker -->
 <link rel="stylesheet" href="assets/bower_components/timepicker/bootstrap-timepicker.min.css">
 <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">   
 <!-- plugin css -->
 <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
 <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
 <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">  
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
              <h4 class="mb-2">&ensp;Employee Payroll</h4>
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                <li class="breadcrumb-item active">Employee Payroll</li>
              </ol>
            </div>
            <form method="POST"  id="payForm">
              <div class="page-title-right">
                <ol class="breadcrumb m-0">

                  <div class="input-group-text"><i class="mdi mdi-calendar"></i></div>
                  <input type="text" style="width:240px;text-align:center;" class="form-control" id="reservation" name="date_range" value="<?php echo (isset($_GET['range'])) ? $_GET['range'] : $range_from.' - '.$range_to; ?>"><i style="padding-right:90px;"></i>

                  <li><button type="button" class="btn btn-success waves-effect waves-light" id="payroll"><i class="mdi mdi-printer mr-2"></i> Payroll </button></li>&ensp;&ensp;
                  <li><button type="button" class="btn btn-success waves-effect waves-light" id="payslip"><i class="mdi mdi-printer mr-2"></i> Payslip </button></li>&ensp;

                </ol>
              </div>
            </form>
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
                  <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr>
                        <th>Employee Name</th>
                        <th>Employee ID</th>
                        <th>Gross</th>
                        <th>Deductions</th>
                        <th>Cash Advance</th>
                        <th>Net Pay</th>
                      </tr>
                    </thead>


                    <tbody>
                      <?php
                      $sql = "SELECT *, SUM(amount) as total_amount FROM deductions";
                      $query = $conn->query($sql);
                      $drow = $query->fetch_assoc();
                      $deduction = $drow['total_amount'];


                      $to = date('Y-m-d');
                      $from = date('Y-m-d', strtotime('-30 day', strtotime($to)));

                      if(isset($_GET['range'])){
                        $range = $_GET['range'];
                        $ex = explode(' - ', $range);
                        $from = date('Y-m-d', strtotime($ex[0]));
                        $to = date('Y-m-d', strtotime($ex[1]));
                      }

                      $sql = "SELECT *, SUM(num_hr) AS total_hr, attendance.employee_id AS empid FROM attendance LEFT JOIN employees ON employees.id=attendance.employee_id LEFT JOIN position ON position.id=employees.position_id WHERE date BETWEEN '$from' AND '$to' GROUP BY attendance.employee_id ORDER BY employees.lastname ASC, employees.firstname ASC";

                      $query = $conn->query($sql);
                      $total = 0;
                      while($row = $query->fetch_assoc()){
                        $empid = $row['empid'];

                        $casql = "SELECT *, SUM(amount) AS cashamount FROM cashadvance WHERE employee_id='$empid' AND date_advance BETWEEN '$from' AND '$to'";

                        $caquery = $conn->query($casql);
                        $carow = $caquery->fetch_assoc();
                        $cashadvance = $carow['cashamount'];

                        $gross = $row['rate'] * $row['total_hr'];
                        $total_deduction = $deduction + $cashadvance;
                        $net = $gross - $total_deduction;

                        echo "
                        <tr>
                        <td class='capitalize'>".$row['lastname'].", ".$row['firstname'].", ".$row['suffix']."</td>
                        <td>".$row['employee_id']."</td>
                        <td>".number_format($gross, 2)."</td>
                        <td>".number_format($deduction, 2)."</td>
                        <td>".number_format($cashadvance, 2)."</td>
                        <td>".number_format($net, 2)."</td>
                        </tr>
                        ";
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
  <!-- plugins -->
  <script src="assets/libs/select2/js/select2.min.js"></script>
  <script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
  <script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
  <script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>
  <!-- init js -->
  <script src="assets/js/pages/form-advanced.init.js"></script>
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

  <!-- daterangepicker -->
  <script src="assets/bower_components/moment/min/moment.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap time picker -->
  <script src="assets/bower_components/timepicker/bootstrap-timepicker.min.js"></script>
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
  //Date picker
  $('#datepicker_add').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })
  $('#datepicker_edit').datepicker({
    autoclose: true,
    format: 'yyyy-mm-dd'
  })

  //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })

  //Date range picker
  $('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
  //Date range as a button
  $('#daterange-btn').daterangepicker(
  {
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  }
  )
  
});
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

    $("#reservation").on('change', function(){
      var range = encodeURI($(this).val());
      window.location = 'fl_payroll?range='+range;
    });

    $('#payroll').click(function(e){
      e.preventDefault();
      $('#payForm').attr('action', '../controller/fl_payroll_generate');
      $('#payForm').submit();
    });

    $('#payslip').click(function(e){
      e.preventDefault();
      $('#payForm').attr('action', '../controller/fl_payroll_payslip');
      $('#payForm').submit();
    });

  });

  function getRow(id){
    $.ajax({
      type: 'POST',
      url: '../controller/fl_position_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('#posid').val(response.id);
        $('#edit_title').val(response.description);
        $('#edit_rate').val(response.rate);
        $('#del_posid').val(response.id);
        $('#del_position').html(response.description);
      }
    });
  }

</script>
<script>
//Date range picker
$('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
  //Date range as a button
  $('#daterange-btn').daterangepicker(
  {
    ranges   : {
      'Today'       : [moment(), moment()],
      'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month'  : [moment().startOf('month'), moment().endOf('month')],
      'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate  : moment()
  },
  function (start, end) {
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  }
  )
  
});
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['payroll'] != on)
{
    header('location:error404');
    exit;
}
?>