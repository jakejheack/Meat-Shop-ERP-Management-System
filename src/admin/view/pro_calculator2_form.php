<?php include 'common/session.php' ?>
<?php if($_SESSION['calc2'] == on){?>
<?php include 'common/query.php'; ?>
<?php include '../controller/pro_calculator2.php'; ?>
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
                                            <h4 class="mb-2">&ensp;View Calculator #2</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #2</li>
                                            <li class="breadcrumb-item active">View Calculator #2</li>
                                        </ol>
                                        <?php } elseif(isset($_GET['edit'])){?>
                                            <h4 class="mb-2">&ensp;Edit Calculator #2</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #2</li>
                                            <li class="breadcrumb-item active">Edit Calculator #2</li>
                                        </ol>
                                        <?php } else { ?>
                                            <h4 class="mb-2">&ensp;Add Calculator #2</h4>
                                            <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Calculator #2</li>
                                            <li class="breadcrumb-item active">Add Calculator #2</li>
                                        </ol>
                                        <?php } ?> 
                                    
                                    </div>
                                    
                                
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                                                             <!-- Start -->
                        <form method="post" class="needs-validation" novalidate>
                        <div class="row">
                           <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="accordion" class="custom-accordion">
                                            <div class="card mb-1 shadow-none">
                                                    <div class="card-body">
                                                    <div class="row">
                                                        <div  class="form-group col-lg-3">
                                                                <label>Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo date('M-d-Y', strtotime($getROW['calcdateCreate']));?></b></label>
                                                            <?php } else { ?>
                                                                <input type="date" name="calcdateCreate" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcdateCreate'];?>" autocomplete="off" required/>

                                                                <div class="invalid-feedback">
                                                                    Please provide a date.
                                                                </div>
                                                                <div class="valid-feedback">
                                                                    Looks good!
                                                                </div>
                                                            <?php } ?> 
                                                        </div>
                                                        <div  class="form-group col-lg-5">
                                                                <label>Title Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo $getROW['calcTitle'];?></b></label>
                                                            <?php } else { ?>
                                                            <input type="text" name="calcTitle" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcTitle'];?>" autocomplete="off" required/>

                                                            <div class="invalid-feedback">
                                                                Please provide a title.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                            <?php } ?> 
                                                        </div>
        
                                                        <div class="form-group col-lg-2">
                                                                <label>Weight&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo $getROW['calcWeight'];?></b></label>
                                                            <?php } else { ?>
                                                            <input id="weight" type="number" name="calcWeight" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcWeight'];?>" autocomplete="off" required/>

                                                            <div class="invalid-feedback">
                                                                Please provide a weight.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!.
                                                            </div>
                                                            <?php } ?> 
                                                        </div>


                                                        <div  class="form-group col-lg-2">
                                                                <label>Percentage</label>
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo $getROW['calcPercentage'];?></b></label>
                                                            <?php } elseif(isset($_GET['edit'])) { ?>
                                                            <div class="input-group">
                                                                    <input type="number" name="calcPercentage" id="percent" value="100" class="form-control" readonly/>
                                                                    <div class="input-group-text">%</div>
                                                                </div>
                                                            <?php } else { ?>
                                                                 <div class="input-group">
                                                                    <input type="number" name="calcPercentage" id="percent" value="100" class="form-control" readonly/>
                                                                    <div class="input-group-text">%</div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    </div>
                                               <hr>
        
                                                <div id="collapseOne" class="collapse show"
                                                        aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        
                                                    <!-- 1st -->   
                                                    <div class="row">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label>Name</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName1'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName1'];?>" autocomplete="off" placeholder="#1"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <label>Weight</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW1'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w1" type="number" name="calcW1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW1'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <label>Yield %</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC1'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP1" type="text" name="calcC1" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC1'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Retail Price</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR1'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r1" type="number" name="calcR1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR1'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Amount</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR1" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR1'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR1" name="calctotalCR1" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR1'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Canteen Price</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT1'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct1" type="number" name="calcCT1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT1'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <label>Amount</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT1'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT1" type="number" name="calctotalCT1" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT1'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 2nd -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName2'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName2'];?>" autocomplete="off" placeholder="#2"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW2'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w2" type="number" name="calcW2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW2'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC2'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP2" type="text" name="calcC2" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC2'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR2'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r2" type="number" name="calcR2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR2'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR2" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR2'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR2" name="calctotalCR2" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR2'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT2'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct2" type="number" name="calcCT2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT2'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT2'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT2" type="number" name="calctotalCT2" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT2'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 3rd -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName3'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName3'];?>" autocomplete="off" placeholder="#3"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW3'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w3" type="number" name="calcW3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW3'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC3'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP3" type="text" name="calcC3" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC3'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR3'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r3" type="number" name="calcR3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR3'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR3" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR3'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR3" name="calctotalCR3" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR3'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT3'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct3" type="number" name="calcCT3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT3'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT3'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT3" type="number" name="calctotalCT3" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT3'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 4th -->   
                                                   <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName4'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName4'];?>" autocomplete="off" placeholder="#4"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW4'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w4" type="number" name="calcW4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW4'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC4'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP4" type="text" name="calcC4" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC4'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR4'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r4" type="number" name="calcR4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR4'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR4" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR4'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR4" name="calctotalCR4" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR4'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT4'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct4" type="number" name="calcCT4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT4'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT4'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT4" type="number" name="calctotalCT4" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT4'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 5th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName5'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName5'];?>" autocomplete="off" placeholder="#5"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW5'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w5" type="number" name="calcW5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW5'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC5'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP5" type="text" name="calcC5" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC5'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR5'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r5" type="number" name="calcR5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR5'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR5" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR5'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR5" name="calctotalCR5" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR5'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT5'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct5" type="number" name="calcCT5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT5'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT5'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT5" type="number" name="calctotalCT5" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT5'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 6th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName6'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName6'];?>" autocomplete="off" placeholder="#6"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW6'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w6" type="number" name="calcW6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW6'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC6'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP6" type="text" name="calcC6" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC6'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR6'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r6" type="number" name="calcR6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR6'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR6" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR6'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR6" name="calctotalCR6" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR6'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT6'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct6" type="number" name="calcCT6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT6'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT6'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT6" type="number" name="calctotalCT6" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT6'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 7th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName7'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName7'];?>" autocomplete="off" placeholder="#7"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW7'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w7" type="number" name="calcW7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW7'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC7'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP7" type="text" name="calcC7" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC7'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR7'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r7" type="number" name="calcR7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR7'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR7" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR7'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR7" name="calctotalCR7" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR7'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT7'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct7" type="number" name="calcCT7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT7'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT7'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT7" type="number" name="calctotalCT7" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT7'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 8th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName8'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName8'];?>" autocomplete="off" placeholder="#8"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW8'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w8" type="number" name="calcW8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW8'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC8'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP8" type="text" name="calcC8" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC8'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR8'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r8" type="number" name="calcR8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR8'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR8" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR8'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR8" name="calctotalCR8" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR8'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT8'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct8" type="number" name="calcCT8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT8'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT8'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT8" type="number" name="calctotalCT8" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT8'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 9th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName9'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName9'];?>" autocomplete="off" placeholder="#9"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW9'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w9" type="number" name="calcW9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW9'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC9'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP9" type="text" name="calcC9" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC9'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR9'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r9" type="number" name="calcR9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR9'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR9" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR9'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR9" name="calctotalCR9" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR9'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT9'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct9" type="number" name="calcCT9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT9'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT9'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT9" type="number" name="calctotalCT9" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT9'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 10th -->   
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName10'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName10'];?>" autocomplete="off" placeholder="#10"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW10'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w10" type="number" name="calcW10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW10'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC10'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP10" type="text" name="calcC10" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC10'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR10'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r10" type="number" name="calcR10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR10'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR10" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR10'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR10" name="calctotalCR10" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR10'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT10'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct10" type="number" name="calcCT10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT10'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT10'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT10" type="number" name="calctotalCT10" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT10'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 11th -->
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName11'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName11'];?>" autocomplete="off" placeholder="#11"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW11'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w11" type="number" name="calcW11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW11'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC11'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP11" type="text" name="calcC11" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC11'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR11'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r11" type="number" name="calcR11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR11'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR11" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR11'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR11" name="calctotalCR11" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR11'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT11'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct11" type="number" name="calcCT11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT11'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT11'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT11" type="number" name="calctotalCT11" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT11'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 12th -->
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName12'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName12'];?>" autocomplete="off" placeholder="#12"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW12'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w12" type="number" name="calcW12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW12'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC12'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP12" type="text" name="calcC12" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC12'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR12'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r12" type="number" name="calcR12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR12'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR12" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR12'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR12" name="calctotalCR12" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR12'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT12'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct12" type="number" name="calcCT12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT12'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT12'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT12" type="number" name="calctotalCT12" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT12'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <!-- 13th -->
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName13'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName13'];?>" autocomplete="off" placeholder="#13"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW13'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w13" type="number" name="calcW13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW13'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC13'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP13" type="text" name="calcC13" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC13'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR13'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r13" type="number" name="calcR13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR13'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR13" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR13'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR13" name="calctotalCR13" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR13'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT13'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct13" type="number" name="calcCT13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT13'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT13'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT13" type="number" name="calctotalCT13" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT13'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                    
                                                    <!-- 14th -->
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName14'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName14'];?>" autocomplete="off" placeholder="#14"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW14'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w14" type="number" name="calcW14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW14'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC14'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP14" type="text" name="calcC14" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC14'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR14'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r14" type="number" name="calcR14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR14'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR14" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR14'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR14" name="calctotalCR14" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR14'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT14'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct14" type="number" name="calcCT14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT14'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT14'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT14" type="number" name="calctotalCT14" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT14'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                        
                                                    <!-- 15th -->
                                                    <div class="row mt-2">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcName15'];?>" disabled/>
                                                        <?php } else { ?>
                                                             <input type="text" name="calcName15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcName15'];?>" autocomplete="off" placeholder="#15"/>
                                                        <?php } ?>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcW15'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="w15" type="number" name="calcW15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcW15'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcC15'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="yieldP15" type="text" name="calcC15" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['calcC15'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcR15'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="r15" type="number" name="calcR15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcR15'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR15" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCR15'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCR15" name="calctotalCR15" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCR15'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calcCT15'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="ct15" type="number" name="calcCT15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calcCT15'];?>" autocomplete="off"/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['calctotalCT15'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalCT15" type="number" name="calctotalCT15" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calctotalCT15'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                    <hr>
                                                    <!-- Total Sum -->
                                                    <div class="row mt-4">
                                                    <!-- Name -->
                                                    <div  class="form-group col-lg-2">
                                                        <label style="font-weight:600;">Weight & Yield %</label>
                                                    </div>
                                                        <!-- Weight -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['totalAll1'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="totalAll1" type="text" name="totalAll1" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAll1'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Carcass -->
                                                    <div class="form-group col-lg-1">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['totalAll2'];?>" disabled/>
                                                        <?php } else { ?>
                                                            <input id="totalAll2" type="text" name="totalAll2" class="form-control" style="font-weight:600;color:#f46a6a;" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAll2'];?>" autocomplete="off" readonly/>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- Retail Price -->
                                                    <div class="form-group col-lg-2">
                                                        <label style="font-weight:600;">&ensp;&ensp;&ensp;&ensp;&ensp;Total Amount</label>
                                                    </div>
                                                    <!-- Total Amount 1 -->
                                                    <div class="form-group col-lg-2">
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalAll3" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['totalAll3'];?>" disabled/>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="input-group">
                                                                <div class="input-group-text">₱</div>
                                                                <input id="totalAll3" name="totalAll3" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAll3'];?>" autocomplete="off" readonly/>
                                                            </div>
                                                        <?php } ?>  
                                                    </div>
                                                    <!-- Canten -->
                                                    <div class="form-group col-lg-2">
                                                        <label style="font-weight:600;">&ensp;&ensp;&ensp;&ensp;&ensp;Total Amount</label>
                                                    </div>
                                                    <!-- Total Amount 2 -->
                                                    <div class="form-group col-lg-2">
                                                            <?php if(isset($_GET['view'])) { ?>
                                                                <div class="input-group">
                                                                    <div class="input-group-text">₱</div>
                                                                    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['totalAll4'];?>" disabled/>
                                                                </div>
                                                            <?php } else { ?>
                                                                <div class="input-group">
                                                                    <div class="input-group-text">₱</div>
                                                                    <input id="totalAll4" type="number" name="totalAll4" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAll4'];?>" autocomplete="off" readonly/>
                                                                </div>
                                                            <?php } ?>  
                                                    </div>
                                                    </div>
                                                        
                                                        
                                                    </div>
                                                    <!-- Button -->
                                        <div class="form-group mt-3 text-right" style="position:relative; text-align: right;">
                                            <?php if(isset($_GET['view'])){?>
                                                <button class="btn btn-success waves-effect waves-light" id="btnPrint" onclick="window.print();"><i class="mdi mdi-database-plus mr-2"></i> Print
                                                </button>&nbsp;
                                                <a href="pro_calculator2" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>&nbsp;&nbsp;&nbsp;
                                            <?php }elseif(isset($_GET['edit'])) { ?> 
                                                <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
                                                <a href="pro_calculator2" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>&nbsp;&nbsp;&nbsp;
                                            <?php } else { ?>
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
                                                </button>&nbsp;
                                                <a href="pro_calculator2" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>&nbsp;&nbsp;&nbsp;
                                            <?php } ?> 
                                        </div>
                                        <br>
                                        <!-- End Button -->
                                                </div>
                                            </div>
                                            
                                           
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    

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

    <script>
        $(function () 
        {
            $("#weight, #percent, #w1, #c1, #r1, #ct1, #w2, #c2, #r2, #ct2, #w3, #c3, #r3, #ct3 , #w4, #c4, #r4, #ct4, #w5, #c5, #r5, #ct5, #w6, #c6, #r6, #ct6, #w7, #c7, #r7, #ct7, #w8, #c8, #r8, #ct8, #w9, #c9, #r9, #ct9, #w10, #c10, #r10, #ct10, #w11, #c11, #r11, #ct11, #w12, #c12, #r12, #ct12, #w13, #c13, #r13, #ct13, #w14, #c14, #r14, #ct14, #w15, #c15").keyup(function () {

                $("#yieldP1").val(+$("#w1").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR1").val(+$("#yieldP1").val() * +$("#r1").val() );
                $("#totalCT1").val(+$("#ct1").val() * +$("#yieldP1").val() );

                $("#yieldP2").val(+$("#w2").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR2").val(+$("#yieldP2").val() * +$("#r2").val() );
                $("#totalCT2").val(+$("#ct2").val() * +$("#yieldP2").val() );

                $("#yieldP3").val(+$("#w3").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR3").val(+$("#yieldP3").val() * +$("#r3").val() );
                $("#totalCT3").val(+$("#ct3").val() * +$("#yieldP3").val() );

                $("#yieldP4").val(+$("#w4").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR4").val(+$("#yieldP4").val() * +$("#r4").val() );
                $("#totalCT4").val(+$("#ct4").val() * +$("#yieldP4").val() );

                $("#yieldP5").val(+$("#w5").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR5").val(+$("#yieldP5").val() * +$("#r5").val() );
                $("#totalCT5").val(+$("#ct5").val() * +$("#yieldP5").val() );

                $("#yieldP6").val(+$("#w6").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR6").val(+$("#yieldP6").val() * +$("#r6").val() );
                $("#totalCT6").val(+$("#ct6").val() * +$("#yieldP6").val() );

                $("#yieldP7").val(+$("#w7").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR7").val(+$("#yieldP7").val() * +$("#r7").val() );
                $("#totalCT7").val(+$("#ct7").val() * +$("#yieldP7").val() );

                $("#yieldP8").val(+$("#w8").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR8").val(+$("#yieldP8").val() * +$("#r8").val() );
                $("#totalCT8").val(+$("#ct8").val() * +$("#yieldP8").val() );

                $("#yieldP9").val(+$("#w9").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR9").val(+$("#yieldP9").val() * +$("#r9").val() );
                $("#totalCT9").val(+$("#ct9").val() * +$("#yieldP9").val() );

                $("#yieldP10").val(+$("#w10").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR10").val(+$("#yieldP10").val() * +$("#r10").val() );
                $("#totalCT10").val(+$("#ct10").val() * +$("#yieldP10").val() );

                $("#yieldP11").val(+$("#w11").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR11").val(+$("#yieldP11").val() * +$("#r11").val() );
                $("#totalCT11").val(+$("#ct11").val() * +$("#yieldP11").val() );

                $("#yieldP12").val(+$("#w12").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR12").val(+$("#yieldP12").val() * +$("#r12").val() );
                $("#totalCT12").val(+$("#ct12").val() * +$("#yieldP12").val() );

                $("#yieldP13").val(+$("#w13").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR13").val(+$("#yieldP13").val() * +$("#r13").val() );
                $("#totalCT13").val(+$("#ct13").val() * +$("#yieldP13").val() );

                $("#yieldP14").val(+$("#w14").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR14").val(+$("#yieldP14").val() * +$("#r14").val() );
                $("#totalCT14").val(+$("#ct14").val() * +$("#yieldP14").val() );

                $("#yieldP15").val(+$("#w15").val() / +$("#weight").val() * +$("#percent").val() );
                $("#totalCR15").val(+$("#yieldP15").val() * +$("#r15").val() );
                $("#totalCT15").val(+$("#ct15").val() * +$("#yieldP15").val() );


                $("#totalAll1").val(+$("#w1").val() + +$("#w2").val() + +$("#w3").val() + +$("#w4").val() + +$("#w5").val()+ +$("#w6").val() + +$("#w7").val() + +$("#w8").val() + +$("#w9").val() + +$("#w10").val() + +$("#w11").val() + +$("#w12").val() + +$("#w13").val() + +$("#w14").val() + +$("#w15").val() );

                $("#totalAll2").val(+$("#yieldP1").val() + +$("#yieldP2").val()+ +$("#yieldP3").val()+ +$("#yieldP4").val()+ +$("#yieldP5").val()+ +$("#yieldP6").val()+ +$("#yieldP7").val()+ +$("#yieldP8").val()+ +$("#yieldP9").val()+ +$("#yieldP10").val()+ +$("#yieldP11").val()+ +$("#yieldP12").val()+ +$("#yieldP13").val()+ +$("#yieldP14").val()+ +$("#yieldP15").val() );

                $("#totalAll3").val(+$("#totalCR1").val() + +$("#totalCR2").val()+ +$("#totalCR3").val()+ +$("#totalCR4").val()+ +$("#totalCR5").val()+ +$("#totalCR6").val()+ +$("#totalCR7").val()+ +$("#totalCR8").val()+ +$("#totalCR9").val()+ +$("#totalCR10").val()+ +$("#totalCR11").val()+ +$("#totalCR12").val()+ +$("#totalCR13").val()+ +$("#totalCR14").val()+ +$("#totalCR15").val() );       

                $("#totalAll4").val(+$("#totalCT1").val() + +$("#totalCT2").val()+ +$("#totalCT3").val()+ +$("#totalCT4").val()+ +$("#totalCT5").val()+ +$("#totalCT6").val()+ +$("#totalCT7").val()+ +$("#totalCT8").val()+ +$("#totalCT9").val()+ +$("#totalCT10").val()+ +$("#totalCT11").val()+ +$("#totalCT12").val()+ +$("#totalCT13").val()+ +$("#totalCT14").val()+ +$("#totalCT15").val() );             


            });
});
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['calc2'] != on)
{
    header('location:error404');
    exit;
}
?>