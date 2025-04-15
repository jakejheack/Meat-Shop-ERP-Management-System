<?php include 'common/session.php'; ?>
<?php if($_SESSION['cusprof'] == on){?>
  <!doctype html>
  <html lang="en">
  <head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/status2.php'; ?> 
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
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
              <h4 class="mb-2">&ensp;Customers Profile</h4>
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                <li class="breadcrumb-item active">Customers Profile</li>
              </ol>
            </div>

            <?php if($_SESSION['addbut'] == on){?>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="mdi mdi-account-multiple-plus-outline mr-2 mr-2"></i> Add Profile </a></li>&ensp;
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
                  <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                      <tr>
                        <th class="mod-fit"></th>
                        <th class="mod-fit">#</th>
                        <th>Customer Name</th>
                        <th class="mod-fit">Contact Number</th>
                        <th class="mod-fit">Amount Limit</th>
                        <th class="mod-fit">Type</th>
                        <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                          <th class="mod-fit" id="btnPrint"></th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      $res = $MySQLiconn->query("SELECT * FROM customers_profile ORDER BY cpName ASC");
                      while($row=$res->fetch_array()){                                       
                        ?>
                        <tr>
                          <td width="0" class="<?php echo $row['cpStatus']; ?>" style="cursor:default;" title="<?php echo $row['cpStatus']; ?>">●</td>
                          <td style="width:1%;"><?php echo $i; $i++;?></td> 
                          <td style="text-transform:capitalize"><?php echo ucwords(strtolower($row['cpName'])); ?></td>
                          <td><?php echo ucwords(strtolower($row['cpContacts'])); ?></td>
                          <td>₱ <?php echo number_format($row['cplimitAmount'],2); ?></td>
                          <td>
                            <?php if($row['cpType'] == Business) { ?>
                              <span class="badge bg-success">Business</span>
                            <?php }else{ ?>
                              <span class="badge bg-warning">Personal</span>
                            <?php } ?>

                            <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                              <td style="text-align:right" id="btnPrint">

                                <div class="dropdown show action-btn">
                                  <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                  </a>

                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php if($_SESSION['viewbut'] == on){?>
                                      <button class="dropdown-item view" title="view" data-id="<?php echo $row['id']; ?>">View</button>
                                    <?php } ?>
                                    <?php if($_SESSION['editbut'] == on){?>
                                      <button class="dropdown-item edit" title="edit"  data-id="<?php echo $row['id']; ?>">Edit</button>
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
              </div>
            </div>

          </div>
        </div>

        <?php include 'common/footer.php'; ?>
        <?php include 'cus_customers_profile_modal.php'; ?>
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
              columns: [ 1, 2, 3, 4, 5, 6]
            }
          },

          {
            extend: 'excelHtml5',
            exportOptions: {
             columns: [ 1, 2, 3, 4, 5, 6]
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

        $(document).on('click', '.view', function(e) {
          e.preventDefault();
          $('#view').modal('show');
          var id = $(this).data('id');
          getRow(id);
        });
      });

      function getRow(id){
        $.ajax({
          type: 'POST',
          url: '../controller/cus_customers_profile_row.php',
          data: {id:id},
          dataType: 'json',
          success: function(response){
            $('.id').val(response.id);
            $('#edit_cpName').val(response.cpName);
            $('#edit_cpTin').val(response.cpTin);
            $('#edit_cpContacts').val(response.cpContacts);
            $('#edit_cpAddress').val(response.cpAddress);
            $('#edit_cpType').val(response.cpType);
            $('#edit_cpEmail').val(response.cpEmail);
            $('#edit_cplimitAmount').val(response.cplimitAmount);
            $('#edit_cpStatus').val(response.cpStatus);
            $('#del_customersProfile').html(response.cpName);
            $('#view_cpName').val(response.cpName);
            $('#view_cpTin').val(response.cpTin);
            $('#view_cpContacts').val(response.cpContacts);
            $('#view_cpAddress').val(response.cpAddress);
            $('#view_cpType').val(response.cpType);
            $('#view_cpEmail').val(response.cpEmail);
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
if($_SESSION['cusprof'] != on)
{
  header('location:error404');
  exit;
}
?>