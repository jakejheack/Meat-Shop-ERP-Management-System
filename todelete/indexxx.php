<?php session_start(); ?>
<?php include 'system/connect.php';?>
<?php include 'src/admin/controller/public_website/jobVacancies.php';?>
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
            height:30px;
            margin-top:10px;
            margin-left:30px;
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
                            <script src="src/view/assets/libs/sweetalert2/sweetalert2.min.js"></script>
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
                   
                   <img src="src/admin/uploads/website/<?php echo $row['logoOne']; ?>" class="modlogo" alt=""/> <a class="navbar-brand" href="index.php" >&nbsp;<?php echo $row['storeName']; ?></a>
                   
                   
               </div>
             
               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">/</a></li>
                         <li><a href="indexx.php">Application Form</a></li>
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
               <div class="row">
                   <br>
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Description</h1>
                         </div>
                    </div>
                   <div class="col-md-12 col-sm-12">
                   <div class="col-md-6 col-sm-6">
                   <div class="tab-pane active" id="tab01" role="tabpanel">
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Job Title:</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?php echo $getROW['jobTitle'];?>" readonly>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Location:</label>
                        <div class="col-sm-10">
                            <input class="form-control"  value="<?php echo $getROW['jobLocation'];?>" readonly>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Experience:</label>
                    <div class="col-sm-10">
                        <input class="form-control"  value="<?php echo $getROW['jobExperience'];?>" readonly>
                    </div>
                    </div>
                    </div>   
                     
                    <div class="col-md-6 col-sm-6">   
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">NoE:</label>
                    <div class="col-sm-10">
                        <input class="form-control"  value="<?php echo $getROW['jobNo'];?>" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Type:</label>
                    <div class="col-sm-10">
                        <input class="form-control"  value="<?php echo $getROW['jobType'];?>" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Salary:</label>
                    <div class="col-sm-10">
                        <input class="form-control"  value="<?php echo $getROW['jobSalary'];?>" readonly>
                    </div>
                    </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6"><br> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Overview:</label>
                    </div>
                       </div>
                    <div class="col-lg-12">
                        <div style="border:1px solid #CED4DA;border-radius: 9px;height:auto;width:100%;">
                            <div style="margin-left:2%;margin-top:1%">
                                <p><?php echo $getROW['jobDescription'];?></p>
                            </div>
                        </div>
                    </div>
                    </div>
                       
                    </div>
                   
                   

                    

               
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