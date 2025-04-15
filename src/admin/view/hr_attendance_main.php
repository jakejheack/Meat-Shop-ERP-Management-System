<?php include '../../../system/connect.php';?>
<!doctype html>
<html lang="en">

<head>
  <?php include 'common/title.php';?>
  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <!-- Sweet Alert -->
  <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <!-- Time -->
 <link href="assets/attendance/css/time.css" rel="stylesheet" type="text/css" />
</head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<body style="background-color:#343A40">

  <div class="account-pages my-1 pt-sm-1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
      <br>
      <br>
      <div class="row align-items-center justify-content-center">
        <div style="width:38%;">
          <div class="card">

            <div class="card-body p-3"> 
              <div class="text-center mt-2">
                <h1 id="time" class="bold" style="font-size:45px;"></h1>
                <h5 id="date"></h5>

                <lottie-player src="assets/attendance/lottie/qrScan.json" background="transparent"  speed="0.4" style="width: 350px; height: 300px;padding:0px 46px 0px 75px;" loop autoplay></lottie-player>

              </div>
              <div class="p-1 mt-4">

                <form id="attendance">                                     

                  <div class="form-group" >
                    <input type="password" class="form-control" id="employee" name="employee" autocomplete="off"autofocus>
                  </div>
                  <div class="form-group mt-2">
                    <select class="form-control" name="status">
                      <option value="in">Time In</option>
                      <option value="out">Time Out</option>
                    </select>
                  </div>


                  <div class="mt-3 text-right" style="display:none;">
                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" name="signin">Login In</button>
                  </div>
                </form>
              </div>

              <div class="alert alert-success" role="alert" style="display:none;">
                <span class="result"><i class="uil uil-check me-2"></i><span class="message"></span></span>
              </div>

              <div class="alert alert-danger" role="alert" style="display:none;">
                <i class="uil uil-exclamation-octagon me-2"></i>
                <span class="result"><i class="icon fa fa-warning"></i> <span class="message"></span></span>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </div>

  <!-- Time -->
  <script src="assets/attendance/js/time.js"></script>
  <!-- JAVASCRIPT -->
  <script src="assets/libs/jquery/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/metismenu/metisMenu.min.js"></script>
  <script src="assets/libs/simplebar/simplebar.min.js"></script>
  <script src="assets/libs/node-waves/waves.min.js"></script>
  <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
  <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
  <!-- App js -->
  <script src="assets/js/app.js"></script>
  <!-- Sweet alert init js-->
  <script src="assets/js/pages/sweet-alerts.init.js"></script>
  <!-- Moment JS -->
  <script src="assets/attendance/bower_components/moment/moment.js"></script>
  <script type="text/javascript">
    $(function() {
      var interval = setInterval(function() {
        var momentNow = moment();
        $('#date').html(momentNow.format('dddd').toUpperCase() + ' - ' + momentNow.format('MMMM DD, YYYY').toUpperCase());  
        $('#time').html(momentNow.format('hh:mm:ss A'));
      }, 100);

      $('#attendance').submit(function(e){
        e.preventDefault();
        var attendance = $(this).serialize();
        e.target.reset();  
        $.ajax({
          type: 'POST',
          url: '../controller/hr_attendance_main.php',
          data: attendance,
          dataType: 'json',
          success: function(response){
            if(response.error){
              $('.alert').hide();
              $('.alert-danger').show();
              $('.message').html(response.message);
            }
            else{
              $('.alert').hide();
              $('.alert-success').show();
              $('.message').html(response.message);
              $('#employee').val('');
            }
          }
        });
      });

    });
  </script>

</body>
</html>