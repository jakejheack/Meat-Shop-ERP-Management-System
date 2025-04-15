<?php include 'common/session.php'; ?>
<?php if($_SESSION['emppro'] == on){?>
<?php include '../controller/hr_employees_id.php'; ?>
<!doctype html>
<html lang="en">

<head>
 <?php include 'common/title.php'; ?> 
 <?php include 'common/print.php'; ?>
 <!-- Bootstrap Css -->
 <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
 <!-- Sweet Alert -->
 <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

 <link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
 <style>


    h3, h4, h5 {
      margin: 0;
  }

  h3 {
      font-size: 24px;
      color: #000000;
  }

  h4 {
      font-size: 15px;
      color: #000000;
  }

  h5 {
      font-size: 30px;
      color: #000000;
  }
  h6{
      font-size: 29px;
      color: #000000;

  }

  .ID-card {
      width: 639px;
      height: 1017px;
      margin: auto;
      position: relative;
      top: 80px;
      padding: 20px;
      border-radius: 10px;
      background-image: url("assets/images/id-bgg.png");
      border: 1px solid rgba(0, 0, 0, 0.15);
      box-shadow: 2px 5px 8px rgba(0, 0, 0, 0.35);
      z-index: 10;
      filter: opacity(100%);
      border-width: 0px;
      border-color: #EAEAEA;
      background-repeat: no-repeat;


  }

  .top-row {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding: 5px 0;
  }

  .flag {
      height: 30px;
      margin-right: 5px;
      padding-top: -1px;

  }

  .card-title, .card-title-en {
      line-height: 100%;
      font-size: 10px;
  }

  .name-en {
     font-size: 38px;
     padding: 500px 0px 0px 0px;
     text-align: center;
     text-transform: uppercase;
     font-weight: bold;

 }

 .name-ensub {
     font-size: 35px;
     padding: 1px 0px 0px 0px;
     text-align: center;
     text-transform: uppercase;

 }

 .name, .ID-number {
  font-weight: normal;

}

.card-title-en {
  margin-left: auto;
  font-size: 15px;
}

.middle-row {
  margin-top: 10px;
  text-align: center;   
}

.middle-rowback {
  text-align: left;
  text-transform: uppercase;
  padding: 210px 20px 0px 20px;
}

.bottom-rowqr {
  padding: 10px 0px 10px 330px;
}

.bottom-row {
  position: absolute;
  bottom: 150px;
  padding-left: 30px;
}
.bottom-rowback {
  text-align: left;
  padding: 10px 20px 0px 20px;
}

.bottom-reg{
 padding-top: 4px;
 text-transform: uppercase;
}

.ID-photo {
  display: block;
  width: 235px;
  height: 235px;
  background-repeat: no-repeat;
  background-position: -90px center;
  background-size: 250px;
  position: absolute;
  top: 308px;
  right: 202px;
  border-style: solid;
  border-color: #e11a24;
  border-width: 6px;
  border-radius: 15px;

}

.series-number {
  writing-mode: vertical-rl;
  transform: rotate(180deg);
  position: absolute;
  right: 20px;
  bottom: 100px;
  z-index: 10;
}

.signature-title {
  position: absolute;
  bottom: 20px;
  right: 20px;
}

.signature {
  font-family: "Liu Jian Mao Cao", cursive;
  font-weight: 100;
  position: absolute;
  right: 40px;
  bottom: 35px;
}

.ID-number {
  line-height: 100%;
  margin-top: 5px;
}

.title {
  text-align: center;
  margin: 16px;
  font-weight: normal;
  font-size: 16px;
  width: 100%;
  position: absolute;
  bottom: 20px;
  z-index: 10;
}   
.dot{
  color: #e11a24;    
}
.important{
  margin-top: 75px;
  text-align:center;
  margin-bottom: 20px;

}

</style>
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
                            <h4 class="mb-2">&ensp;Employee ID Card</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Employee ID Card</li>
                            </ol>
                        </div>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a id="btn-Convert-Html2Image" href="#" class="btn btn-primary waves-effect waves-light" type="submit" name="upload"><i class="mdi mdi-cloud-download-outline mr-2"></i> Front ID 
                                </a>&ensp;
                                <a id="btn-Convert-Html2Image2" href="#" class="btn btn-primary waves-effect waves-light" type="submit" name="upload"><i class="mdi mdi-cloud-download-outline mr-2"></i> Back ID 
                                </a>&ensp;
                                <a href="hr_employees" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>&ensp;
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->  

            <div class="row" style="text-align:center;">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                          <div id="previewImage" style="zoom:40%;"></div>

                      </div>
                  </div>
              </div> 


              <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                      <div id="previewImage2" style="zoom:40%;"></div>   

                  </div>
              </div> 
          </div>
      </div> 
      <!-- end row -->


      <div class="row"  style="opacity:0;position: absolute;">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div style="margin-top:-20px;">
                        <div class="ID-card" id="html-content-holder">                                    
                            <div class="top-row">
                                <br>
                            </div>

                            <div class="middle-row">
                                <img class="ID-photo" src="../uploads/employee/<?php echo $getROW['photo'];?>">
                                <h3 class="name-en"><b style="color:#e11a24;"><?php echo utf8_encode(strtoupper(strtolower($getROW['firstname'])));?></b>&nbsp;<?php echo utf8_encode(strtoupper(strtolower($getROW['lastname'])));?></h3>
                                <h4 class="name-ensub"><?php echo $getROW['description'];?></h4>
                            </div>

                            <div class="col-4">
                                <div class="bottom-rowqr">
                                    &ensp;<div id="qrcode"></div>
                                </div>
                            </div>

                            <div class="col-5">
                                <div class="bottom-row">

                                    <h5>ID NO:<br><?php echo $getROW['employee_id'];?></h5>
                                    <h5 class="bottom-reg">DATE REG:<br><?php echo date('M-d-Y', strtotime($getROW['created_on']));?></h5>
                                </div>
                            </div>

                        </div>

                        <br>    
                        <br>    
                        <br>    
                        <br>    
                        <br>    
                        <br>

                        <div style="display: none;">
                            <input id="text" type="text" value="<?php echo $getROW['employee_id'];?>" style="width:80%" />
                            <br>
                            <br>
                        </div> 
                    </div>

                </div>
            </div>
        </div> 


        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <div style="margin-top:-20px;">
                        <div class="ID-card" id="html-content-holder2">  

                            <div class="col-12">
                                <div class="middle-rowback">
                                    <br>
                                    <h6>DATE OF BIRTH:<br><?php echo date('M-d-Y', strtotime($getROW['birthdate']));?></h6>
                                    <h6>ADDRESS:<br><?php echo $getROW['peraddress'];?></h6><br>
                                    <h5>IN CASE OF EMERGENCY:<br><?php echo $getROW['emergency'];?></h5>
                                </div>
                            </div>

                            <h6 class="important">IMPORTANT</h6>

                            <div class="bottom-rowback">
                                <h6><b class="dot">●</b>&ensp;This card is non-transferable.</h6><br>
                                <h6><b class="dot">●</b>&ensp;Any visual tampering will invalidated<br>&ensp;&ensp;&nbsp;this card.</h6><br>
                                <h6><b class="dot">●</b>&ensp;In case of loss, kindly contact us<br>&ensp;&ensp;&nbsp;at lehmannstore.com</h6>
                            </div>

                        </div>
                        <br>    
                        <br>    
                        <br>    
                        <br>    
                        <br>    
                        <br>

                    </div>
                </div>
            </div> 
        </div>
    </div> 
    <!-- end row -->                    

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='common/qrcode.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

<script>
    var qrcode = new QRCode("qrcode");

    function makeCode () {
        var elText = document.getElementById("text");


        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }

        qrcode.makeCode(elText.value);
    }

    makeCode();

    $("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
    
</script>
<script>
    $(document).ready(function () {
            var element = $("#html-content-holder"); // global variable
            var getCanvas; // global variable


            html2canvas(element, {
                onrendered: function (canvas) {
                    $("#previewImage").append(canvas);
                    getCanvas = canvas;

                }
            });

            $("#btn-Convert-Html2Image").on('click', function () {
                var imgageData = getCanvas.toDataURL("image/png");
                // Now browser starts downloading it instead of just showing it
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                $("#btn-Convert-Html2Image").attr("download", "<?php echo $getROW['firstname'];?>_front.png").attr("href", newData);
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            var element = $("#html-content-holder2"); // global variable
            var getCanvas; // global variable

            html2canvas(element, {
                onrendered: function (canvas) {
                    $("#previewImage2").append(canvas);
                    getCanvas = canvas;
                }
            });

            $("#btn-Convert-Html2Image2").on('click', function () {

                var imgageData = getCanvas.toDataURL("image/png");
                // Now browser starts downloading it instead of just showing it
                var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                $("#btn-Convert-Html2Image2").attr("download", "<?php echo $getROW['firstname'];?>_back.png").attr("href", newData);
            });
        });
    </script>

</body>
</html>
<?php } ?>
<?php 
if($_SESSION['emppro'] != on)
{
    header('location:error404');
    exit;
}
?>