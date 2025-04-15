<?php include 'common/session.php' ?>
<?php if($_SESSION['proinv'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/pro_products.php'; ?>
<!doctype html>
<html lang="en">

<head>
 <?php include 'common/title.php' ?> 
 <!-- Bootstrap Css -->
 <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
 <!-- Sweet Alert -->
 <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

 <!-- plugin css -->
 <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
 <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
 <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
</head>

<?php include 'common/body.php' ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'common/header.php' ?>
    <?php include 'common/sidebar.php' ?>



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
                            <?php if(isset($_GET['view'])){?>
                                <h4 class="mb-2">&ensp;View Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                    <li class="breadcrumb-item active">View Product</li>
                                </ol>
                            <?php } elseif(isset($_GET['edit'])){?>
                                <h4 class="mb-2">&ensp;Edit Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                    <li class="breadcrumb-item active">Edit Product</li>
                                </ol>
                            <?php } else { ?>
                                <h4 class="mb-2">&ensp;Add Product</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                    <li class="breadcrumb-item active">Add Product</li>
                                </ol>
                            <?php } ?> 

                        </div>


                    </div>
                </div>
            </div>
            <!-- end page title -->    


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label class="form-label" for="validate1">ID</label>
                                            <?php if(isset($_GET['view'])){?>
                                                <label id="btnPrint" class="form-control" required><?php echo $getROW['productID'];?></label>
                                            <?php } elseif(isset($_GET['edit'])){?>
                                                <input class="form-control" type="text" name="hr_employeeID" value="<?php if(isset($_GET['edit'])) echo $getROW['productID'];?>" autocomplete="off" style="font-weight:600;" disabled>
                                            <?php } else { ?>
                                                <label type="text" class="form-control" type="text" name="productID" value="<?php if(isset($_GET['edit'])) echo $getROW['productID'];?>" autocomplete="off" style="font-weight:600;" required><b><?php echo AutoGenID() ?></b></label>
                                            <?php } ?>

                                            <div class="invalid-feedback">
                                                Please provide a id no.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label" for="validate2">SKU</label>
                                            <?php if(isset($_GET['view'])){?>
                                                <label class="form-control" required><?php echo $getROW['productSku'];?></label>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="productSku" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['productSku'];?>" autocomplete="off" required>
                                            <?php } ?>

                                            <div class="invalid-feedback">
                                                Please provide a sku.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="mb-3">
                                            <label class="form-label" for="validate3">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                            <?php if(isset($_GET['view'])){?>
                                               <label class="form-control" required><?php echo utf8_encode(ucwords(strtolower($getROW['productName'])));?></label>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="productName" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['productName'];?>" autocomplete="off" required >
                                            <?php } ?>

                                            <div class="invalid-feedback">
                                                Please provide a title.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="validate4">Stock&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                            <?php if(isset($_GET['view'])){?>
                                                <label class="form-control" required><?php echo $getROW['productStock'];?></label>
                                            <?php } else { ?>
                                                <input class="form-control" type="text" name="productStock" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['productStock'];?>" autocomplete="off" required >
                                            <?php } ?>
                                            <div class="invalid-feedback">
                                                Please provide a stock.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label" for="validate5">Retail&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                            <div class="input-group">
                                                <div class="input-group-text">₱</div>
                                                <?php if(isset($_GET['view'])){?>
                                                  <input class="form-control" value="<?php echo number_format($getROW['productRetail'],2);?>" readonly>
                                              <?php } else { ?>
                                                <input class="form-control" type="number" name="productRetail" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['productRetail'];?>" autocomplete="off" required >
                                            <?php } ?>

                                            <div class="invalid-feedback">
                                                Please provide a retail.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validate6">Price&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <div class="input-group">
                                            <div class="input-group-text">₱</div>
                                            <?php if(isset($_GET['view'])){?>
                                                <input class="form-control" value="<?php echo number_format($getROW['productPrice']);?>" readonly>
                                            <?php } else { ?>
                                                <input class="form-control" type="number" name="productPrice" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['productPrice'];?>" autocomplete="off" required >
                                            <?php } ?>

                                            <div class="invalid-feedback">
                                                Please provide a price.
                                            </div>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validate7">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <?php if(isset($_GET['view'])){?>
                                         <label class="form-control" required><?php echo utf8_encode(ucwords(strtolower($getROW['ex_categoryName'])));?></label>
                                     <?php } elseif(isset($_GET['edit'])){?>
                                         <select type="text" name="productCategory" class="form-control" autocomplete="off" required >
                                            <option value="<?php if(isset($_GET['edit'])) echo $getROW['productCategory'];?>"><?php if(isset($_GET['edit'])) echo utf8_encode(ucwords(strtolower($getROW['ex_categoryName'])));?></option><option value="" disabled select>- SELECT -</option>
                                            <?php while($row1 = mysqli_fetch_array($result9)):;?>
                                                <option value="<?php echo $row1[0];?>"><?php echo utf8_encode(ucwords(strtolower($row1[1])));?></option>
                                            <?php endwhile;?>
                                        </select>
                                    <?php } else { ?>
                                        <select type="text" name="productCategory" class="form-control" autocomplete="off" required>
                                            <option value="">- SELECT -</option>
                                            <?php while($row1 = mysqli_fetch_array($result9)):;?>
                                                <option value="<?php echo $row1[0];?>"><?php echo utf8_encode(ucwords(strtolower($row1[1])));?></option>
                                            <?php endwhile;?>
                                        </select>
                                    <?php } ?>  


                                    <div class="invalid-feedback">
                                        Please select a category.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="validate8">Branch&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <?php if(isset($_GET['view'])){?>
                                       <label class="form-control" required><?php echo $getROW['productStore'];?></label>
                                   <?php } elseif(isset($_GET['edit'])){?>
                                     <select class="form-control" name="productStore" autocomplete="off" required>
                                        <option value="<?php if(isset($_GET['edit'])) echo $getROW['productStore'];?>"><?php echo $getROW['productStore'];?></option>
                                        <option value="" disabled select>- SELECT -</option>
                                        <option value="Yashano">Yashano</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Daet">Daet</option>
                                    </select>
                                <?php } else { ?>
                                    <select class="form-control" name="productStore" autocomplete="off" required>
                                        <option value="">- SELECT -</option>
                                        <option value="Yashano">Yashano</option>
                                        <option value="Magsaysay">Magsaysay</option>
                                        <option value="Daet">Daet</option>
                                    </select>
                                <?php } ?> 

                                <div class="invalid-feedback">
                                    Please select a branch.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>                                                  

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label" for="validate9">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                <?php if(isset($_GET['view'])){?>
                                   <label class="form-control" required><?php echo $getROW['productStatus'];?></label>
                               <?php } elseif(isset($_GET['edit'])){?>
                                 <select class="form-control" name="productStatus" autocomplete="off" required>
                                    <option value="<?php if(isset($_GET['edit'])) echo $getROW['productStatus'];?>"><?php echo $getROW['productStatus'];?></option>
                                    <option value="" disabled select>- SELECT -</option>
                                    <option value="Enabled">Enabled</option>
                                    <option value="Disabled">Disabled</option>
                                </select>
                            <?php } else { ?>
                                <select class="form-control" name="productStatus" autocomplete="off" required>
                                    <option value="">- SELECT -</option>
                                    <option value="Enabled">Enabled</option>
                                    <option value="Disabled">Disabled</option>
                                </select>                                              
                            <?php } ?>

                            <div class="invalid-feedback">
                                Please select a status.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Button -->
                <div class="form-group mb-0 text-right" style="position:relative; text-align: right;">
                    <?php if(isset($_GET['view'])){?>
                        <a href="pro_products" id="btnPrint" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                    <?php }elseif(isset($_GET['edit'])) { ?> 
                        <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                        <a href="pro_products" class="btn btn-dark"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
                    <?php } else { ?>
                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                        </button>&nbsp;
                        <a href="pro_products" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                    <?php } ?> 
                </div>
                                    <!-- End Button -->
                                </form>
                            </div>
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?php include 'common/footer.php' ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->
<?php include 'common/theme.php' ?>

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

<!-- parsleyjs -->
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<!-- plugins -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['proinv'] != on)
{
    header('location:error404');
    exit;
}
?>