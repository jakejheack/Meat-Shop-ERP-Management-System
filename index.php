<?php session_start(); ?>
<?php include 'system/conn.php';?>
<?php include 'system/config.php';?>
<?php include 'system/connect.php';?>
<?php include 'system/drconnect.php';?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ingra">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="src/admin/view/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?>
        <link rel="shortcut icon" href="src/admin/uploads/website/<?php echo $row['logoOne']; ?>">
        <title><?php echo $row['storeName']; ?></title>
    <?php } ?> 
    <?php include 'src/admin/view/common/status2.php'; ?>
</head>

<body data-spy="scroll" data-target=".navbar">
    <div class="ts-page-wrapper" id="page-top">
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#141a3a">
                <div class="container">
                    <a class="navbar-brand">
                        <img src="src/admin/view/assets/images/logo_v2.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active ts-scroll" href="#page-top">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link ts-scroll" href="#nav-price">Pricing</a>
                            <a class="nav-item nav-link ts-scroll" href="#about-us">About Us</a>
                            <a class="nav-item nav-link ts-scroll" href="#newsletter">Newsletter</a>
                            <a class="nav-item nav-link ts-scroll" href="#vacancies">Vacancies</a>
                            <a class="nav-item nav-link ts-scroll mr-2" href="#form-contact">Contact</a>
                            <a class="ts-scroll btn btn-primary btn-sm m-1 px-3 ts-width__auto" href="<?php echo $row['navHeading']; ?>"><?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?>
                                <?php echo $row['navHeading']; ?>
                            <?php } ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container align-self-center align-items-center">
            <div class="row">
                <div class="col-md-7">
                    <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                        <h1 data-animate="ts-fadeInUp"><?php echo $row['headingTwo']; ?></h1>
                        <div data-animate="ts-fadeInUp" data-delay=".1s">
                            <p class="w-75 text-white mb-5"><?php echo ucwords(ucfirst($row['headingOne'])); ?></p>
                        </div>
                        <a href="#nav-price" class="btn btn-danger btn-lg ts-scroll mr-4" data-animate="ts-fadeInUp" data-delay=".2s">
                            Learn More
                            <i class="fa fa-arrow-right small ml-3 ts-opacity__50"></i>
                        </a>
                    <?php } ?> 
                </div>
            </div>
        </div>

        <div class="ts-background" data-bg-color="#141a3a" data-bg-parallax="scroll" data-bg-parallax-speed="3">
            <div class="ts-background-image ts-svg ts-z-index__1 ts-background-position-left d-none d-md-block" data-bg-image="assets/svg/shape-mask.svg" data-animate="ts-fadeInLeft"></div>
            <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                <div class="ts-background-image ts-parallax-element" data-bg-image="src/admin/uploads/website/<?php echo $row['imageOne']; ?>" data-animate="ts-zoomOutIn"></div>
            <?php } ?>
        </div>
    </header>

    <main id="ts-content">
     <section id="nav-price" class="ts-block ts-separate-bg-element ts-background-repeat" data-bg-image-opacity=".1" data-bg-image="assets/img/bg-pattern-dot.png">
        <h3 class="mod-center">Product Pricing</h3>
        <div class="ts-time-line__horizontal">
            <ul class="pt-5 owl-carousel" data-owl-items="99" data-owl-auto-width="1">
             <?php $res = $MySQLiconn->query("SELECT * FROM today_price"); while($row=$res->fetch_array()){?>

                <li class="ts-time-line__item">
                    <div class="ts-box mod-center">
                        <br>
                        <div class="ts-circle__md" data-bg-color="#ebf1fe">
                            <img src="src/admin/uploads/pricing/<?php echo $row['photo']; ?>" alt="">
                        </div>
                        <h4><b>₱ <?php echo number_format($row['price'],2); ?> / <?php echo strtoupper(ucfirst($row['unit'])); ?></b><br><?php echo ucwords(ucfirst($row['title'])); ?></h4>
                    </div>
                    <figure>
                        <small>&nbsp;</small>
                        <h6>&nbsp;</h6>
                    </figure>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<hr>
<section id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="ts-block pr-3">
                    <div class="ts-title">
                        <h2>About Us</h2>
                    </div>

                    <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                        <p>
                            <?php echo $row['image_text']; ?>
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="ts-background d-none d-sm-block" data-bg-color="#fafafa" data-bg-parallax1="scroll" data-bg-parallax-speed="3">
        <div class="owl-carousel w-50 ts-push-left__100 h-100 ts-parallax-element1" data-owl-loop="1" data-owl-nav-container="#carousel-external-control">
            <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                <div class="ts-background-image" data-bg-image="src/admin/uploads/website/<?php echo $row['imagetwoTwo']; ?>">
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section id="numbers" class="ts-block ts-background-is-dark ts-separate-bg-element py-5 ts-xs-text-center" data-bg-image="assets/img/bg-mountain.jpg" data-bg-image-opacity=".1" data-bg-color="#0e1e3d" data-bg-parallax="scroll" data-bg-parallax-speed="3">
    <div class="container">
        <div class="ts-promo-numbers py-5">
            <div class="row mod-center">
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number">
                        <h2 class="ts-opacity__50">140+</h2>
                        <h5 class="mb-0">Employees</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number">
                        <h2 class="ts-opacity__50">280+</h2>
                        <h5 class="mb-0">Cases Done</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number">
                        <h2 class="ts-opacity__50">24+</h2>
                        <h5 class="mb-0">Years Experience</h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="ts-promo-number">
                        <h2 class="ts-opacity__50">18</h2>
                        <h5 class="mb-0">Branches</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="newsletter" class="ts-block ts-separate-bg-element ts-background-repeat py-5" data-bg-image="assets/img/pattern-topo.png" data-bg-image-opacity=".05" data-bg-color="#ecf2fe">
    <div class="container py-5">
        <div class="offset-lg-1 col-lg-10">
            <h3>Subscribe For The Latest News!</h3>
            <form method="post" class="ts-form ts-form-email" data-php-path="src/admin/controller/public_website/newsletter.php">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group mb-0">
                            <input type="email" class="form-control ts-border-radius__pill" id="email-subscribe" aria-describedby="subscribe" name="newsemail" placeholder="Email Address" autocomplete="off" maxlength="250" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="send" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
    <script src="src/admin/view/assets/libs/sweetalert2/sweetalert2.min.js"></script>
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
  <script src="src/admin/view/assets/libs/sweetalert2/sweetalert2.min.js"></script>
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

<div id="vacancies" class="ts-block">
    <div class="container">
        <div class="ts-title">
            <h2>Vacancies</h2>
        </div>
        <div class="card-columns ts-column-count-sm-2 ts-column-count-md-2 ts-column-count-lg-3 ts-column-count-xl-4">
            <?php 
            $res = $MySQLiconn->query("SELECT * FROM job_vacancies"); 
            while($row=$res->fetch_array()) {
                ?> 
                <div class="card" data-animate="ts-fadeInUp" data-delay=".2s">
                    <div class="card-body mod-center">
                        <div class="mod-center">
                            <h6><b><?php echo ucwords(ucfirst($row['position'])); ?></b></h6>
                        </div><hr>
                        <p class="mb-0"><b>Experience</b><br><?php echo ucwords(ucfirst($row['experience'])); ?></p>
                        <p class="mt-2"><b>Branch</b><br><?php echo ucwords(ucfirst($row['branch'])); ?></p>
                        <p class="mt-2"><b>Address</b><br><?php echo ucwords(ucfirst($row['address'])); ?></p> 

                        <div class="mod-center">
                            <!-- Button trigger modal -->
                            <button class="btn btn-primary btn-sm view" data-id="<?php echo $row['id']; ?>">Details</button>
                            &nbsp;
                            <button class="btn btn-dark btn-sm apply" data-id="<?php echo $row['id']; ?>">Apply</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</main>

<footer id="ts-footer">
    <div class="map ts-height__400px">
        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Lehmann%20Meatshop,%20butcher,%20Naga,%20Philippines+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
    </div>
    <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg" data-bg-image-opacity=".1" data-bg-color="#12264f">
        <div class="container">
            <div class="ts-box mb-0 p-5 ts-mt__n-10" data-animate="ts-fadeInUp">
                <div class="row">
                    <div class="col-md-4 mt-1">
                        <h3>Contact Us</h3>
                        <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                            <address>
                                <figure>
                                 <?php echo ucwords(ucfirst($row['pageaddress'])); ?>
                             </figure>
                             <?php if(!empty($row['pageemail'])) { ?>
                                <figure>
                                    <div class="font-weight-bold">Email:</div>
                                    <a href="#"><?php echo $row['pageemail']; ?></a>
                                </figure>
                            <?php }else{ ?>
                            <?php } ?>
                            <?php if(!empty($row['pagecontact'])) { ?>
                                <figure>
                                    <div class="font-weight-bold">Contact No.:</div>
                                    <?php echo $row['pagecontact']; ?>
                                </figure>
                            <?php }else{ ?>
                            <?php } ?>
                            <?php if((!empty($row['fbLink'])) || (!empty($row['tweetLink'])) || (!empty($row['instaLink']))) { ?>
                                <figure>
                                    <br>
                                    <div class="font-weight-bold">Follow Us:</div>
                                    <?php if(!empty($row['fbLink'])) { ?>
                                        <a href="<?php echo $row['fbLink']; ?>" title="Facebook" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>&ensp;
                                    <?php }else{ ?>
                                    <?php } ?>
                                    <?php if(!empty($row['tweetLink'])) { ?>
                                        <a href="<?php echo $row['tweetLink']; ?>" title="Twitter" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>&ensp;
                                    <?php }else{ ?>
                                    <?php } ?>
                                    <?php if(!empty($row['instaLink'])) { ?>
                                        <a href="<?php echo $row['instaLink']; ?>" title="Instagram" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                                    <?php }else{ ?>
                                    <?php } ?>
                                </figure>
                            <?php }else{ ?>
                            <?php } ?>
                        </address>
                    <?php } ?>
                </div>

                <div class="col-md-8">
                    <h3>Contact Form</h3>
                    <form id="form-contact" method="post" class="clearfix ts-form ts-form-email" data-php-path="src/admin/controller/public_website/websiteMessage.php">
                        <div class="row">
                          <div style="display: none">
                             <input type="text" class="form-control" name="webmesStatus" value="Unread">
                         </div>
                         <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="form-contact-name">Your Name *</label>
                                <input type="text" class="form-control" id="form-contact-name" name="webmesName" placeholder="Your Name" maxlength="250" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="form-contact-email">Your Email *</label>
                                <input type="email" class="form-control" id="form-contact-email" name="webmesEmail" placeholder="Your Email" maxlength="250" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form-contact-message">Your Message *</label>
                                <textarea class="form-control" id="form-contact-message" rows="5" name="webmesText" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group clearfix">
                        <button type="submit" name="send" class="btn btn-primary float-right" id="form-contact-submit">Send a Message</button>
                    </div>
                    <div class="form-contact-status"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="text-center text-white py-4">
        <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
            <small><?php echo $row['footer']; ?></small>
        <?php } ?>
    </div>
</div>
</section>
</footer>
<?php include 'index_modal.php'; ?>
</div>

<script>
</script>
<script src="assets/js/custom.hero.js"></script>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
<script src="assets/js/isInViewport.jquery.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scrolla.jquery.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="src/admin/view/assets/js/pages/sweet-alerts.init.js"></script>
<script>
    $(function(){
     $(document).on('click', '.edit', function(e) {
        e.preventDefault();
        $('#edit').modal('show');
        var id = $(this).data('id');
        getRow(id);
    });

     $(document).on('click', '.apply', function(e) {
        e.preventDefault();
        $('#apply').modal('show');
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
        url: 'src/admin/controller/public_website/vacancies_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          console.log(response);
          $('.id').html(response.id);
          $('.id').val(response.id);
          $('#view_id').val(response.id);
          $('#view_position').val(response.position);
          $('#view_jobtype').val(response.jobtype);
          $('#view_branch').val(response.branch);
          $('#view_details').val(response.details);

      }
  });
  }
</script>
</body>
</html>
