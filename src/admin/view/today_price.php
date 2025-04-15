<?php include 'common/session.php'; ?>
<?php if($_SESSION['lehtprice'] == on){?>

  <!doctype html>
  <html lang="en">
  <head>
   <?php include 'common/title.php'; ?> 
   <?php include 'common/status2.php'; ?> 
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
   <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"/>
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
              <h4 class="mb-2">&ensp;Today Price</h4>
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                <li class="breadcrumb-item active">Today Price</li>
              </ol>
            </div>

            <?php if($_SESSION['addbut'] == on){?>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li><a type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="uil uil-weight mr-2 mr-2"></i> Add Pricing </a></li>&ensp;
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
            <?php                            
            $res = $MySQLiconn->query("SELECT * FROM today_price order by title ASC");
            while($row=$res->fetch_array()){   
              $image = (!empty($row['photo'])) ? '../uploads/pricing/'.$row['photo'] : '../uploads/pricing/default_profile.jpg';                                     
              ?>
              <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                  <div class="card-body">
                    <?php if($_SESSION['viewbut'] == on || $_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                      <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                          <i class="uil uil-ellipsis-h"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                          <?php if($_SESSION['editbut'] == on){?>
                            <button class="dropdown-item edit" data-id="<?php echo $row['id']; ?>">Edit</button>
                            <button class="dropdown-item editphoto" data-id="<?php echo $row['id']; ?>">Edit File</button>
                          <?php } ?>
                          <?php if($_SESSION['deletebut'] == on){?>
                            <button class="dropdown-item delete" data-id="<?php echo $row['id']; ?>">Delete</button>
                          <?php } ?>
                        </div>
                      </div>
                    <?php } ?>
                    <span class="<?php echo $row['stat']; ?>" style="float:left;cursor:default;" title="<?php echo $row['stat']; ?>">●</span>
                    <div class="clearfix"></div>
                    <div class="mb-4">
                      <img src="<?php echo $image ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                    </div>
                    <h5 class="font-size-18 mb-1"><a href="#" class="text-dark">₱ <?php echo $row['price']; ?> / <?php echo mb_strtoupper(utf8_encode($row['unit'])); ?></a></h5>
                    <p class="text-muted mb-0"><?php echo mb_strtoupper(utf8_encode($row['title'])); ?></p>

                  </div>
                </div>
              </div>
              <?php } ?> 
            </div>
        </div> 
      </div>

      <?php include 'common/footer.php'; ?>
      <?php include 'today_price_modal.php'; ?>
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

      $(document).on('click', '.editphoto', function(e) {
        e.preventDefault();
        $('#editphoto').modal('show');
        var id = $(this).data('id');
        getRow(id);
      });
    });

    function getRow(id){
      $.ajax({
        type: 'POST',
        url: '../controller/today_price_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          $('.id').val(response.id);
          $('#edit_title').val(response.title);
          $('#edit_price').val(response.price);
          $('#edit_unit').val(response.unit);
          $('#edit_stat').val(response.stat);
          $('#del_product').html(response.title);
        }
      });
    }
  </script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['lehtprice'] != on)
{
  header('location:error404');
  exit;
}
?>