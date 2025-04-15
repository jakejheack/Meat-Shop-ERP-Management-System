<?php include 'common/session.php'; ?>
<?php if($_SESSION['cusstat'] == on){?>


  <!doctype html>
  <html lang="en">
  <head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/status2.php'; ?> 
   <?php include 'common/query.php'; ?> 
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"/>
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 </head>

 <?php include 'common/body.php'; ?>


 <div id="layout-wrapper">
  <?php include 'common/header.php'; ?>
  <?php include 'common/sidebar.php'; ?>
  <div class="main-content">

    <div class="page-content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-12">
          <div class="page-title-box d-flex align-items-center justify-content-between">
            <div class="page-title-left">
              <h4 class="mb-2">&ensp;Customerrs Credit</h4>
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                <li class="breadcrumb-item"><a href="cus_customers_status">Credit</a></li>
                <li class="breadcrumb-item active"><a href="cus_customers_payment">Search</a></li>
              </ol>
            </div>

            <?php if($_SESSION['addbut'] == on){?>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li><a href="cus_customers_payment" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Records</a></li>
                </ol>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

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

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                <div class="col-lg-1">
                </div>
                <br>
                <div class="col-lg-2 mod-right">
                  <label class="form-label">
                    Customer Name
                  </label>
                </div>

                <div class="col-lg-6">
                  <select class="form-control dropdownoxmenu2 mod-center-left" type="text" id="dropdownox" required>
                    <option value="">- SELECT -</option>
                    <?php $sql = "select customers_profile.id as id, cpName as cname from customers_profile left join customers_status on customers_profile.id=customers_status.cusid where not cpName=' ' group by cpName order by cpName asc ;";
                    $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                      <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['cname'] ?>"><?php echo ucwords(strtolower($prow['cname'])) ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="col-lg-3">
                  <button type="submit" class="btn btn-primary">Search</button>
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-3">
                  <input type="text" class="form-control" name="sortid" value="" id="oxid2" placeholder="sortid" readonly>
                </div>
                <div class="col-lg-5">
                  <input type="text" class="form-control" name="sortname" value="" id="oxcusname2"  placeholder="sortname" readonly>
                </div>
              </form>

            </div>
          </div>
        </div> 
      </div>

    </div> 
  </div>

  <?php include 'common/footer.php'; ?>
  <?php include 'cus_customers_payment_modal.php'; ?>
</div>

</div>

<?php include 'common/theme.php'; ?>
<div class="rightbar-overlay"></div>
<script src="assets/js/time.js"></script>
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
<script src="assets/js/pages/session-timeout.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/pages/sweet-alerts.init.js"></script>
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="assets/js/pages/datatables.init.js"></script>
<script>
  $(document).ready(function() {  
    $('#example').DataTable( {
      "order": [[ 0, "desc" ]],
      dom: 
      "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",


      buttons: [
      {
        extend: 'print',
        exportOptions: {
          columns: [ 0, 1, 2, 3, 4, 5, 6]
        }
      },

      {
        extend: 'excelHtml5',
        exportOptions: {
         columns: [ 0, 1, 2, 3, 4, 5, 6]
       }
     },
     {
      extend: 'pdfHtml5',
      exportOptions: {
       columns: [ 1, 2, 3, 4, 5, 6]
     }
   },

   ]

 } );
  } );
</script>
<script>
  $(function(){
    $(document).on('click', '.editcredit', function(e) {
      e.preventDefault();
      $('#editcredit').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.editpaid', function(e) {
      e.preventDefault();
      $('#editpaid').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.delete', function(e) {
      e.preventDefault();
      $('#delete').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.viewcredit', function(e) {
      e.preventDefault();
      $('#viewcredit').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.viewpaid', function(e) {
      e.preventDefault();
      $('#viewpaid').modal('show');
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
      url: '../controller/cus_customers_payment_row.php',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        $('.id').val(response.id);
        $('#edit_transno').val(response.transno);
        $('#edit_transno2').val(response.transno);
        $('#edit_cusname').val(response.cusname);
        $('#edit_cusname2').val(response.cusname);
        $('#edit_cdate').val(response.cdate);
        $('#edit_cdate2').val(response.cdate);
        $('#edit_branch').val(response.branch);
        $('#edit_branch2').val(response.branch);
        $('#edit_cpstat').val(response.cpstat);
        $('#edit_cpstat2').val(response.cpstat);
        $('#edit_notes').val(response.notes);
        $('#edit_notes2').val(response.notes);
        $('#edit_amountin').val(response.amountin);
        $('#edit_amountout').val(response.amountout);  
        $('#edit_filetext').val(response.filetext);
        $('#del_cusname').html(response.cusname);

        $('#view_transno').val(response.transno);
        $('#view_transno2').val(response.transno);  
        $('#view_cusname').val(response.cusname);
        $('#view_cusname2').val(response.cusname);
        $('#view_cdate').val(response.cdate);
        $('#view_cdate2').val(response.cdate);
        $('#view_branch').val(response.branch);
        $('#view_branch2').val(response.branch);
        $('#view_amountin').val(response.amountin);
        $('#view_amountout').val(response.amountout);
        $('#view_cpstat').val(response.cpstat);
        $('#view_cpstat2').val(response.cpstat);
        $('#view_notes').val(response.notes);
        $('#view_notes2').val(response.notes);
      }
    });
  }
</script>

<script>
  $(".dropdownoxmenu").change(function() {
    var location = $(this).val().split('{}');
    $("#oxid").val(location[0]);
    $("#oxcusname").val(location[1]);
  });

  $(".dropdownoxmenu11").change(function() {
    var location = $(this).val().split('{}');
    $("#oxid11").val(location[0]);
    $("#oxcusname11").val(location[1]);
  });

  $(".dropdownoxmenu2").change(function() {
    var location = $(this).val().split('{}');
    $("#oxid2").val(location[0]);
    $("#oxcusname2").val(location[1]);
  });
</script>
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