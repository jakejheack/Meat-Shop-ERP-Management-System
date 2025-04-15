<?php session_start(); ?>
<?php include 'system/connect.php';?>
<?php include 'system/drconnect.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600">
    <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
     <!-- DataTables -->
     <link href="src/admin/view/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
     <link href="src/admin/view/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
     <!-- Responsive datatable examples -->
     <link href="src/admin/view/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
    <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?>
        <link rel="shortcut icon" href="src/admin/uploads/website/<?php echo $row['logoOne']; ?>">
        <title><?php echo $row['storeName']; ?></title>
    <?php } ?> 
    <?php include 'src/admin/view/common/status2.php'; ?>
</head>
<body data-spy="scroll" data-target=".navbar">
    <div class="ts-page-wrapper" id="page-top">

        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header id="ts-hero" class="ts-full-screen ts-separate-bg-element">
            <!--NAVIGATION ******************************************************************************************-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top ts-separate-bg-element" data-bg-color="#141a3a">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">
                        <img src="src/admin/view/assets/images/logo_v2.png" alt="">
                    </a>
                    <!--end navbar-brand-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!--end navbar-toggler-->
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
                    <!--end navbar-nav-->
                </div>
                <!--end collapse-->
            </div>
            <!--end container-->
        </nav>
        <!--end navbar-->

        <!--HERO CONTENT ****************************************************************************************-->
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
                <!--end col-md-7-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
        <!--END HERO CONTENT ************************************************************************************-->

        <!--HERO BACKGROUND *************************************************************************************-->
        <div class="ts-background" data-bg-color="#141a3a" data-bg-parallax="scroll" data-bg-parallax-speed="3">
            <div class="ts-background-image ts-svg ts-z-index__1 ts-background-position-left d-none d-md-block" data-bg-image="assets/svg/shape-mask.svg" data-animate="ts-fadeInLeft"></div>
            <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
                <div class="ts-background-image ts-parallax-element" data-bg-image="src/admin/uploads/website/<?php echo $row['imageOne']; ?>" data-animate="ts-zoomOutIn"></div>
            <?php } ?>
        </div>
        <!--END HERO BACKGROUND *********************************************************************************-->

    </header>
    <!--end #hero-->

    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
    <main id="ts-content">

<hr>


<!--HAPPY CLIENTS ***************************************************************************************-->
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
                         <h5><?php echo ucwords(ucfirst($row['jobTitle'])); ?></h5>
                     </div><hr>
                     <p class="mb-0"><b>Experience</b><br><u><?php echo ucwords(ucfirst($row['jobExperience'])); ?></u></p>
                     <p class="mt-2"><b>Branch</b><br><u><?php echo ucwords(ucfirst($row['jobBranch'])); ?></u></p>
                     <p class="mt-2"><b>Address</b><br><u><?php echo ucwords(ucfirst($row['jobLocation'])); ?></u></p>
                     <div class="mt-4 mod-center">
                        <!-- Button trigger modal -->
                        <a href="apply" class="btn btn-dark btn-sm" >Details</a>
                    </div>
                </div>
                <!--end card-body-->
            </div>
        <?php } ?>
    </div>
</div>
<!--end container-->
</div>
<!--END HAPPY CLIENTS ***********************************************************************************-->

<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 0%;"></th>
                                                <th>Name</th>
                                                <th width="40">Contacts</th>
                                                <th>Address</th>
                                                <th>Category</th>
                                                    <th width="0" id="btnPrint"></th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                            $res = $MySQLiconn->query("SELECT * FROM sd_profile");
                                            while($row=$res->fetch_array()){                        
                                                ?>  
                                                <tr>
                                                    <td class="<?php echo $row['sd_profileStatus']; ?>" style="font-weight:600;">●</td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['sd_profileName']))); ?></td>
                                                    <td><?php echo $row['sd_profileContacts']; ?></td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['sd_profileAddress']))); ?></td>
                                                    <td><?php echo utf8_encode(ucwords(strtolower($row['sd_profileCategory']))); ?></td>

                                                    <td><button class="dropdown-item view" title="view" data-id="<?php echo $row['id']; ?>">View</button></td>
                                        </tr>
                                        <?php } ?>
                                 </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


</main>
<!--end #content-->

<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer id="ts-footer">
    <section id="contact" class="ts-separate-bg-element" data-bg-image="assets/img/bg-hand-mobile.jpg" data-bg-image-opacity=".1" data-bg-color="#12264f">
        <div class="container">
            
    <!--end ts-box-->
    <div class="text-center text-white py-4">
        <?php $res = $MySQLiconn->query("SELECT * FROM website where id='1' LIMIT 1"); while($row=$res->fetch_array()){?> 
            <small><?php echo $row['footer']; ?></small>
        <?php } ?>
    </div>
</div>
<!--end container-->
</section>
</footer>
<?php include 'apply_modal.php'; ?>
</div>
<!--end page-->

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
<!-- Required datatable js -->
<script src="src/admin/view/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="src/admin/view/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="src/admin/view/assets/libs/jszip/jszip.min.js"></script>
<script src="src/admin/view/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="src/admin/view/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>        
<!-- Responsive examples -->
<script src="src/admin/view/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="src/admin/view/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Datatable init js -->
<script src="src/admin/view/assets/js/pages/datatables.init.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "order": [[ 1, "asc" ]],
            dom: 
            "<'row'<'col-sm-12 col-md-7'B><'col-sm-12 col-md-2'l><'col-sm-12 col-md-2'f>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",


            buttons: [
            {
                extend: 'print',
                exportOptions: {
                    columns: [1, 2, 3, 4]
                }
            },

            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [1, 2, 3, 4]
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
        url: 'src/admin/controller/pro_distprofile_row.php',
        data: {id:id},
        dataType: 'json',
        success: function(response){
          console.log(response);
          $('.id').html(response.id);
          $('.id').val(response.id);
          $('#edit_sd_profileName').val(response.sd_profileName);
          $('#edit_sd_profileContacts').val(response.sd_profileContacts);
          $('#edit_sd_profileAddress').val(response.sd_profileAddress);
          $('#edit_sd_profileEmail').val(response.sd_profileEmail);
          $('#edit_sd_profileCategory').val(response.sd_profileCategory);
          $('#edit_sd_profileType').val(response.sd_profileType);
          $('#edit_sd_profileBank').val(response.sd_profileBank);
          $('#edit_sd_profileStatus').val(response.sd_profileStatus);
          $('#del_profile').html(response.sd_profileName);

          $('#view_sd_profileName').val(response.sd_profileName);
          $('#view_sd_profileContacts').val(response.sd_profileContacts);
          $('#view_sd_profileAddress').val(response.sd_profileAddress);
          $('#view_sd_profileEmail').val(response.sd_profileEmail);
          $('#view_sd_profileCategory').val(response.sd_profileCategory);
          $('#view_sd_profileType').val(response.sd_profileType);
          $('#view_sd_profileBank').val(response.sd_profileBank);
          $('#view_sd_profileStatus').val(response.sd_profileStatus);

      }
  });
  }
</script>
</body>
</html>
