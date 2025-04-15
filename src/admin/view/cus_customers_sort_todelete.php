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
              <h4 class="mb-2">&ensp;Filter Searches</h4>
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                <li class="breadcrumb-item"><a href="cus_customers_status">Credit Overview</a></li>
                <li class="breadcrumb-item"><a href="cus_customers_payment">Records</a></li>
                <li class="breadcrumb-item active">Filter</li>
              </ol>
            </div>

            <?php if($_SESSION['addbut'] == on){?>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li><a href="cus_customers_sort?edit=1" class="btn btn-primary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample"><i class="mdi mdi-magnify mr-2"></i> Search</a>
                  </button></li>&ensp;
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

          <div class="collapse" id="collapseExample">
            <div class="col-12">
              <div class="card card-body mb-0">
               <form class="row row-cols-lg-auto gx-3 gy-2 align-items-center">
                <div class="col-lg-1">
                </div>
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
          </div><br>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th width="1%">#</th>
                      <th class="mod-fit">Transaction No</th>
                      <th width="50">Customer Name & Branch</th>
                      <th width="2%">Paid</th>
                      <th width="2%">Credit</th>
                      <th width="1%">Type</th>
                      <th width="1%">Status</th>
                      <th width="1%"></th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    $i = 1;
                    if ($_SESSION['branch'] == All) {
                      $res = $MySQLiconn->query("select * from customers_status");
                    }elseif ($_SESSION['branch'] == Daet) {
                      $res = $MySQLiconn->query("select * from customers_status where branch='Daet' and cdate = CURDATE();");
                    }elseif ($_SESSION['branch'] == Magsaysay) {
                      $res = $MySQLiconn->query("select * from customers_status where branch='Magsaysay' and cdate = CURDATE();");
                    }elseif ($_SESSION['branch'] == Yashano) {
                      $res = $MySQLiconn->query("select * from customers_status where branch='Yashano' and cdate = CURDATE();");
                    }
                    while($row=$res->fetch_array()){                                       
                      ?>
                      <tr>
                        <td class="mod-fit mod-vm mod-center"><?php echo $i; $i++; ?></td> 
                        <td class="mod-center"><?php echo date('M-d-Y', strtotime($row['cdate'])); ?><br><b><?php echo $row['transno']; ?></b></td>
                        <td><?php echo ucwords(strtolower($row['cusname'])); ?><br><?php echo ucwords(strtolower($row['branch'])); ?></td>
                        <td class="mod-vm"><?php echo number_format($row['amountin'],2); ?></td>
                        <td class="mod-vm"><?php echo number_format($row['amountout'],2); ?></td>

                        <td class="mod-vm">
                          <?php if($row['cpstat'] == Credit) { ?>
                            <span class="badge bg-danger">Credit</span>
                          <?php }elseif($row['cpstat'] == Paid) { ?>
                            <span class="badge bg-info">Paid</span>
                          <?php }else{ ?>   
                          <?php } ?>                             
                        </td>

                        <td class="mod-vm">
                          <?php if($row['xstat'] == Incomplete) { ?>
                            <span class="badge bg-danger">Incomplete</span>
                          <?php }elseif($row['xstat'] == Complete) { ?>
                            <span class="badge bg-success">Complete</span>
                          <?php }else{ ?>   
                          <?php } ?>                             
                        </td>
                        <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                          <td class="mod-vm" id="btnPrint">
                            <div class="dropdown show action-btn">
                              <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                              </a>

                              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php if($_SESSION['viewbut'] == on){?>
                                  <?php if($row['amountin'] == '0') {?>
                                   <button class="dropdown-item viewcredit" title="view" data-id="<?php echo $row['id']; ?>">View</button>
                                 <?php }elseif($row['amountin'] != '0') { ?>
                                  <button class="dropdown-item viewpaid" title="view" data-id="<?php echo $row['id']; ?>">View</button>
                                <?php }else{ ?>
                                <?php } ?>

                                <a href="dl_customers_payment?path=../uploads/payment/<?php echo $row['filetext'];?>" class="dropdown-item" title="download">Download</a>
                              <?php } ?>
                              <?php if($_SESSION['editbut'] == on){?>
                                <?php if($row['amountin'] == '0') {?>
                                  <button class="dropdown-item editcredit" title="edit" data-id="<?php echo $row['id']; ?>">Edit</button>
                                <?php }elseif($row['amountin'] != '0') { ?>
                                  <button class="dropdown-item editpaid" title="edit" data-id="<?php echo $row['id']; ?>">Edit</button>
                                <?php }else{ ?>
                                <?php } ?>

                                <button class="dropdown-item photo" title="edit file" data-id="<?php echo $row['id']; ?>">Edit File</button>
                              <?php } ?>
                              <?php if($_SESSION['deletebut'] == on){?>
                                <button class="dropdown-item delete" title="delete" data-id="<?php echo $row['id']; ?>">Delete</button>
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