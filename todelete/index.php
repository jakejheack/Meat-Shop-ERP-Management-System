<?php session_start(); ?>
<?php include 'system/connect.php';?>
<?php include 'src/admin/controller/public_website/newsletter.php';?>
<?php include 'src/admin/controller/public_website/websiteMessage.php';?>
<?php include 'src/admin/controller/public_website/jobApply.php';?>
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
                            <script src="assets/assets/libs/sweetalert2/sweetalert2.min.js"></script>
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
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#feature" class="smoothScroll">Vacancies</a></li>
                         <li><a href="#about" class="smoothScroll">About us</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact Us</a></li>
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
     <?php
        $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
        while($row=$res->fetch_array()){                                       
     ?>
     <section id="home" data-stellar-background-ratio="0.5" style="background:url('src/admin/uploads/website/<?php echo $row['imageOne']; ?>')no-repeat;background-size: cover;">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                            
                              <h3><?php echo $row['headingOne']; ?></h3>
                              <h1><?php echo $row['headingTwo']; ?></h1>
                             <?php
                                } 
                             ?>
                              <form method="post" class="online-form">
                                   <input type="email" name="newsEmail" class="form-control" placeholder="Enter your email" required="">
                                   <button type="submit" name="save" class="form-control">Newsletter</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

 <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>Vacancies</h1>
                         </div>
                    </div>
                   
                   <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Vacant Position</a></li>
                            <li><a href="indexx.php">Apply Job</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                <table class="datatable table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="font-size:14px;">Job Title</th>
                                            <th style="font-size:14px;">Location</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                <tbody>
                                    <?php
                                        $res = $MySQLiconn->query("SELECT * FROM job_vacancies WHERE jobStatus='Enabled';");
                                        while($row=$res->fetch_array()){                                       
                                    ?>
                                    <tr class="gradeX">
                                        <td style="font-size:14px;"><?php echo $row['jobTitle']; ?>&ensp;(<?php echo $row['jobNo']; ?>)</td>
                                        <td style="font-size:14px;"><?php echo $row['jobLocation']; ?></td>
                                        <td width="40"><a href="indexxx.php?view=<?php echo $row['jobID']; ?>" class="text-primary" title="view"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                    </tr>
                                        <?php
                                            } 
                                        ?> 
                                </tbody>
                                  </table> 
                              </div>


                         </div>
                    </div>
 
                    <div class="col-md-6 col-sm-6" style="margin-top:-30px;">
                         <div class="feature-image">
                              <?php
                                $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
                                while($row=$res->fetch_array()){                                       
                              ?>
                              <img style="height:370px;width:800px;"  src="src/admin/uploads/website/<?php echo $row['imagetwoTwo']; ?>" class="img-responsive">      
                              <?php
                                } 
                              ?>               
                         </div>
                    </div>

               </div>
          </div>
     </section>


<br>

    

     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>About Us</h1>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                         <div class="team-thumb">
                              <div class="team-info team-thumb-down">
                                  <?php
                                    $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1");
                                    while($row=$res->fetch_array()){                                       
                                   ?>
                                        <blockquote><?php echo $row['image_text']; ?></blockquote>
                                  <?php
                                    } 
                                  ?>
                              </div>
                         </div>
                    </div>

                    
               </div>
          </div>
     </section>

    
     <!-- CONTACT -->
     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                         <form id="contact-form" method="post">
                              <div class="section-title">
                                   <h1>Say hello to us</h1>
                              </div>

                              <div id="hide-from-screen">
                                   <input type="text" class="form-control" name="webmesStatus" value="Unread">
                              </div><div class="col-md-4 col-sm-4">
                                   <input type="text" class="form-control" placeholder="Full name" name="webmesName" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="email" class="form-control" placeholder="Email address" name="webmesEmail" required="">
                              </div>
                              <div class="col-md-4 col-sm-4">
                                   <input type="submit" class="form-control" name="send" value="Send Message">
                              </div>
                              <div class="col-md-12 col-sm-12">
                                   <textarea class="form-control" rows="8" placeholder="Your message" name="webmesText" required=""></textarea>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
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