<?php include 'system/connect.php';?>
<?php include 'src/admin/controller/public_website/jobApply.php';?>
<?php include 'src/admin/view/common/print.php';?>
<?php include 'src/admin/view/common/query.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css" media="print">
BODY {display:none;visibility:hidden;}
</style>
    <?php
        $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
        while($row=$res->fetch_array()){                                       
     ?>
  <title><?php echo $row['storeName']; ?></title>
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="src/admin/uploads/website/<?php echo $row['logoOne']; ?>">
    <?php
      } 
    ?>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="assets/public/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/public/css/owl.carousel.css">
     <link rel="stylesheet" href="assets/public/css/owl.theme.default.min.css">
     <link rel="stylesheet" href="assets/public/css/font-awesome.min.css">
     
    
     <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'><link rel="stylesheet" href="css/style.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/public/css/tooplate-style.css">
      <style>
        .modlogo{
            height:40px;
            margin-top:6px;
            margin-left:40px;
            float: left;
            }
                      
     </style>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>
                        <!-- Sucess Status -->
                        
                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                            <script src="src/admin/view/assets/libs/sweetalert2/sweetalert2.min.js"></script>
                            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                            <script>
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: '<?php echo $_SESSION['success_message2']; ?>',
                                showConfirmButton: false,
                                timer: 2500
                                })
                            </script>
                        <?php unset($_SESSION['success_message']); } ?>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                   <?php
                        $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
                        while($row=$res->fetch_array()){                                       
                    ?>
                   
                   <img src="src/admin/view/assets/images/public-logo.png" class="modlogo" alt=""/> <a class="navbar-brand" href="index.php"> </a>
                   
                   
               </div>
             
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">/</a></li>
                         <li><a href="indexx.php" class="smoothScroll">Application Form</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                         <li><a> <span><?php echo $row['navHeading']; ?></span></a></li>
                    </ul>
                   <?php
                    } 
                    ?>
               </div>

          </div>
     </section>


    
    <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5" >
          <div class="overlayMod"></div>
          <div class="container">
              <form method="post" enctype="multipart/form-data">
               <div class="row">
                   <br>
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Form</h1>
                         </div>
                    </div>
                   <div class="col-md-12 col-sm-12">
                   <div class="tab-pane active" id="tab01" role="tabpanel">
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="applyName" required>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="applyAddress" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Contact No.</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="applyContact" required>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="applyEmail" required>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Select Vacancies</label>
                    <div class="col-sm-10">
                        <select type="text" name="applyPosition" class="form-control" autocomplete="off" required >
                            <option>Select</option>
                             <?php while($row1 = mysqli_fetch_array($result13)):;?>
                            <option style="text-transform: capitalize;" value="<?php echo $row1[2];?> | <?php echo $row1[9];?>"><?php echo $row1[2];?>&ensp;(<?php echo $row1[7];?>)&ensp;-&ensp;<?php echo $row1[9];?></option>
                             <?php endwhile;?>
                        </select>
                    </div>
                    </div>
                    <div class="form-group row" id="hide-from-screen">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Schedule</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="applySched" value="<?php echo date("Y-m-d") ?>" readonly>
                    </div>
                    </div>
                    <div class="form-group row" id="hide-from-screen">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Interview Date</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="applyschedDate" value="<?php echo date("Y-m-d") ?>">
                    </div>
                    </div>
                    <div class="form-group row" id="hide-from-screen">
                        <label for="inputPassword3" class="col-sm-2 col-form-label" name="applyEmail">Status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="applyStatus" value="Pending" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Resume</label>
                    <div class="col-sm-10">
                            <input type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)' required>
                        <div id="hide-from-screen">
                            <input name="imageText" id='outputfile' value="<?php if(isset($_GET['edit'])) echo $getROW['imageText'];?>" readonly/>
                        </div>
                    </div>
                    </div><br>
                       <div style="text-align:right">
                       <button type="submit" name="upload" class="btn btn-primary">Submit</button>
                       </div>
                       
                    </div>
               </div>
              </div>
              </form>
          </div>
        </section>
    

        <br>
        <br>
       


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5"><br>
          <div class="container">
               <div class="row">
                   <?php
                        $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
                         while($row=$res->fetch_array()){                                       
                   ?>
                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                             <p><?php echo $row['footer']; ?></p>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <ul class="social-icon">&ensp;&ensp;&ensp;&ensp;
                                   <li><a href="<?php echo $row['fbLink']; ?>" target="_blank" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="<?php echo $row['tweetLink']; ?>" target="_blank" class="fa fa-twitter"></a></li>
                                   <li><a href="<?php echo $row['instaLink']; ?>" target="_blank" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                   <?php
                    } 
                   ?> 
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="assets/public/js/jquery.js"></script>
     <script src="assets/public/js/bootstrap.min.js"></script>
     <script src="assets/public/js/jquery.stellar.min.js"></script>
     <script src="assets/public/js/owl.carousel.min.js"></script>
     <script src="assets/public/js/smoothscroll.js"></script>
     <script src="assets/public/js/custom.js"></script>
    
    
     <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js'></script><script  src="assets/public/js/script.js"></script>
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