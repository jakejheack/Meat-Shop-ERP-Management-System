<?php include 'common/session.php'; ?>
<?php if($_SESSION['webmes'] == on){?>
    
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
                            <h4 class="mb-2">&ensp;Messages</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Website Messages</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">                           
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example" class="table table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="mod-fit">Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th width="40">Status</th>
                                        <?php if($_SESSION['viewbut'] == on || $_SESSION['deletebut'] == on){?>
                                            <th class="mod-fit" id="btnPrint"></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $res = $MySQLiconn->query("SELECT * FROM webmessage ORDER BY created_on DESC");
                                    while($row=$res->fetch_array()){                                       
                                        ?>
                                        <tr>
                                            <td><?php echo date('M-d-Y', strtotime($row['created_on'])); ?></td>
                                            <td><?php echo ucwords(ucfirst($row['webmesName'])); ?></td>
                                            <td><?php echo $row['webmesEmail']; ?></td>
                                            <td>
                                                <?php if($row['webmesStatus'] == Unread){ ?>
                                                    <span class="badge bg-danger">Unread</span>
                                                <?php }else{ ?>
                                                    <span class="badge bg-success">Read</span>
                                                <?php } ?>
                                            </td>

                                            <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td id="btnPrint">
                                                  <div class="dropdown show action-btn">
                                                    <a class="btn btn-sm btn-white dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      <i class="mdi mdi-arrow-down-drop-circle-outline"></i> 
                                                  </a>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <?php if($_SESSION['editbut'] == on){?>
                                                        <button class="dropdown-item edit" title="edit" data-id="<?php echo $row['id']; ?>">Read</button>
                                                    <?php } ?>
                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                        <button class="dropdown-item delete" title="delete"  data-id="<?php echo $row['id']; ?>">Delete</button>
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
<?php include 'ex_webmessage_modal.php'; ?>
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
  });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/ex_webmessage_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('#edit_created_on').val(response.created_on);
          $('#edit_webmesName').val(response.webmesName);
          $('#edit_webmesEmail').val(response.webmesEmail);
          $('#edit_webmesText').val(response.webmesText);
          $('#edit_webmesStatus').val(response.webmesStatus);
          $('#del_message').html(response.webmesName);
      }
  });
  }
</script>
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
                    columns: [ 0, 1, 2, 3 ]
                }
            },

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2, 3 ]
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
if($_SESSION['webmes'] != on)
{
    header('location:error404');
    exit;
}
?>