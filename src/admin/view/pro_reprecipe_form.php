<?php include 'common/session.php'; ?>
<?php if($_SESSION['lehrec'] == on){?>
<?php include '../controller/pro_reprecipe.php'; ?>
<!doctype html>
<html lang="en">

<head>
 <?php include 'common/title.php'; ?> 
 <?php include 'common/query.php'; ?> 
 <!-- Bootstrap Css -->
 <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
 <!-- Icons Css -->
 <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
 <!-- App Css-->
 <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
 <!-- Sweet Alert -->
 <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

 <!-- Summernote css -->
 <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />  
 <!-- plugin css -->
 <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
 <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
 <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet"/>
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
                            <h4 class="mb-2">&ensp;Lehmann Recipe</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                <li class="breadcrumb-item active">Lehmann Recipe</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->    

            <!-- Status -->
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
                    <!-- End Status -->

                    <form method="post" class="needs-validation" novalidate>
                        <div id="btnPrint" class="row">
                         <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="accordion" class="custom-accordion">
                                        <div class="card mb-1 shadow-none">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="form-group col-lg-3">
                                                        <label>Date Created</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo date('M-d-Y', strtotime($getROW['pr_recDate']));?></b></label>
                                                        <?php } else { ?>
                                                            <input type="date" name="pr_recDate" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recDate'];?>" autocomplete="off" required/>

                                                            <div class="invalid-feedback">
                                                                Please provide a date.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <?php } ?> 
                                                    </div>

                                                    <div  class="form-group col-lg-3">
                                                        <label>Recipe Name</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo $getROW['pr_recName'];?></b></label>
                                                        <?php } else { ?>
                                                            <input type="text" name="pr_recName" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recName'];?>" autocomplete="off" required/>

                                                            <div class="invalid-feedback">
                                                                Please provide a name.
                                                            </div>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        <?php } ?> 
                                                    </div>

                                                    <div  class="form-group col-lg-3">
                                                        <label>Dish Type</label>
                                                        <?php if(isset($_GET['view'])) { ?>
                                                            <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b><?php echo $getROW['pr_recDish'];?></b></label>
                                                        <?php } elseif(isset($_GET['edit'])){?>
                                                            <select type="text" name="pr_recDish" class="form-control" autocomplete="off" required>
                                                                <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recDish'];?>"><?php if(isset($_GET['edit'])) echo $getROW['pr_recDish'];?></option> 
                                                                <option value="" disabled select>- SELECT -</option>
                                                                <?php while($row1 = mysqli_fetch_array($result11)):;?>
                                                                 <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                             <?php endwhile;?>
                                                         </select>
                                                     <?php } else { ?>
                                                         <select type="text" name="pr_recDish" class="form-control" autocomplete="off" required>
                                                             <option value="">- SELECT -</option>
                                                             <?php while($row1 = mysqli_fetch_array($result11)):;?>
                                                                 <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
                                                             <?php endwhile;?>
                                                         </select>
                                                     <?php } ?>

                                                    <div class="invalid-feedback">
                                                        Please select a dish.
                                                    </div>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                 </div>
                                                 <div  class="form-group col-lg-3">
                                                     <label>Total Cost</label>
                                                     <?php if(isset($_GET['view'])) { ?>
                                                         <label class="form-control" style="font-weight:600;text-transform:capitalize;"><b>₱ <?php echo number_format($getROW['pr_recTotal'],2);?></b></label>
                                                     <?php } else { ?>
                                                        <div class="input-group">
                                                            <div class="input-group-text">₱</div>
                                                            <input type="text" name="pr_recTotal" id="totalCost" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recTotal'];?>" placeholder="Auto Generate Total" class="form-control" readonly/>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br> 

                                        <div class="accordion" id="accordionExample">
                                          <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">

                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                + Ingredients
                                            </button>
                                        </h2>    

                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                         <!-- 1st -->   
                                         <div class="row mt-2">
                                             <div  class="form-group col-lg-1">
                                                 <label>Quantity</label>
                                                 <?php if(isset($_GET['view'])) { ?>
                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty1'];?>" disabled/>
                                                 <?php } else { ?>
                                                     <input type="text" id="q1" name="pr_recQty1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty1'];?>" autocomplete="off"/>
                                                 <?php } ?>
                                             </div>
                                             <div  class="form-group col-lg-2">
                                                 <label>Unit</label>
                                                 <?php if(isset($_GET['view'])) { ?>
                                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit1'];?>" disabled/>
                                                 <?php } else { ?>
                                                  <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit1">
                                                     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit1'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit1'];?> -</option>
                                                     <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                                                     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                                      <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                                  <?php } ?>
                                              </select>
                                          <?php } ?>
                                      </div>


                                      <div class="form-group col-lg-5">
                                         <label>Ingredients</label>
                                         <?php if(isset($_GET['view'])) { ?>
                                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng1'];?>" disabled/>
                                         <?php } else { ?>
                                             <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng1" >
                                                 <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng1'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng1'];?> -</option>
                                                 <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
                                                 $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

                                                     <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
                                                 <?php } ?>
                                             </select>
                                         <?php } ?>
                                     </div>
                                     <div  class="form-group col-lg-2">
                                         <label>Unit Price</label>
                                         <div class="input-group">
                                             <div class="input-group-text">₱</div>
                                             <?php if(isset($_GET['view'])) { ?>
                                                 <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit1'];?>" disabled/>
                                             <?php } else { ?>

                                                 <input type="text" id="u1" name="pr_recUnit1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit1'];?>" autocomplete="off"/>
                                             <?php } ?>
                                         </div>
                                     </div>


                                     <div class="form-group col-lg-2">
                                         <label>Unit Cost</label>
                                         <?php if(isset($_GET['view'])) { ?>
                                             <div class="input-group">
                                                 <div class="input-group-text">₱</div>
                                                 <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost1'];?>" disabled/>
                                             </div>
                                         <?php } else { ?>
                                             <div class="input-group">
                                                 <div class="input-group-text">₱</div>
                                                 <input type="number" id="c1" name="pr_recCost1" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost1'];?>" autocomplete="off"/>
                                             </div>
                                         <?php } ?>  
                                     </div>
                                 </div>

                                 <!-- 2nd -->   
                                 <div class="row mt-2">
                                     <div  class="form-group col-lg-1">
                                         <?php if(isset($_GET['view'])) { ?>
                                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty2'];?>" disabled/>
                                         <?php } else { ?>
                                             <input type="text" id="q2" name="pr_recQty2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty2'];?>" autocomplete="off"/>
                                         <?php } ?> 
                                     </div>
                                     <div  class="form-group col-lg-2">
                                         <?php if(isset($_GET['view'])) { ?>
                                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit2'];?>" disabled/>
                                         <?php } else { ?>
                                          <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit2">
                                             <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit2'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit2'];?> -</option>
                                             <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                                             $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                              <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                          <?php } ?>
                                      </select>
                                  <?php } ?>
                              </div>

                              <div class="form-group col-lg-5">
                                 <?php if(isset($_GET['view'])) { ?>
                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng2'];?>" disabled/>
                                 <?php } else { ?>
                                     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng2" >
                                         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng2'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng2'];?> -</option>
                                         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
                                         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

                                             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
                                         <?php } ?>
                                     </select>
                                 <?php } ?> 
                             </div>
                             <div  class="form-group col-lg-2">
                                 <div class="input-group">
                                     <div class="input-group-text">₱</div>
                                     <?php if(isset($_GET['view'])) { ?>
                                         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit2'];?>" disabled/>
                                     <?php } else { ?>
                                         <input type="text" id="u2" name="pr_recUnit2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit2'];?>" autocomplete="off"/>
                                     <?php } ?>
                                 </div>
                             </div>

                             <div class="form-group col-lg-2">
                                 <?php if(isset($_GET['view'])) { ?>
                                     <div class="input-group">
                                         <div class="input-group-text">₱</div>
                                         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost2'];?>" disabled/>
                                     </div>
                                 <?php } else { ?>
                                     <div class="input-group">
                                         <div class="input-group-text">₱</div>
                                         <input type="number" id="c2" name="pr_recCost2" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost2'];?>" autocomplete="off"/>
                                     </div>
                                 <?php } ?> 
                             </div>
                         </div>

                         <!-- 3rd -->   
                         <div class="row mt-2">
                             <div  class="form-group col-lg-1">
                                 <?php if(isset($_GET['view'])) { ?>
                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty3'];?>" disabled/>
                                 <?php } else { ?>
                                     <input type="text" id="q3" name="pr_recQty3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty3'];?>" autocomplete="off"/>
                                 <?php } ?>
                             </div>
                             <div  class="form-group col-lg-2">
                                 <?php if(isset($_GET['view'])) { ?>
                                     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit3'];?>" disabled/>
                                 <?php } else { ?>
                                  <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit3">
                                     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit3'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit3'];?> -</option>
                                     <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                                     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                      <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                  <?php } ?>
                              </select>
                          <?php } ?>
                      </div>

                      <div class="form-group col-lg-5">
                         <?php if(isset($_GET['view'])) { ?>
                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng3'];?>" disabled/>
                         <?php } else { ?>
                            <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng3" >
                             <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng3'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng3'];?> -</option>
                             <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
                             $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

                                 <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
                             <?php } ?>
                         </select>
                     <?php } ?>
                 </div>
                 <div class="form-group col-lg-2">
                     <?php if(isset($_GET['view'])) { ?>
                         <div class="input-group">
                             <div class="input-group-text">₱</div>
                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit3'];?>" disabled/>
                         </div>
                     <?php } else { ?>
                         <div class="input-group">
                             <div class="input-group-text">₱</div>
                             <input type="number" id="u3" name="pr_recUnit3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit3'];?>" autocomplete="off"/>
                         </div>
                     <?php } ?>
                 </div>

                 <div class="form-group col-lg-2">
                     <?php if(isset($_GET['view'])) { ?>
                         <div class="input-group">
                             <div class="input-group-text">₱</div>
                             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost3'];?>" disabled/>
                         </div>
                     <?php } else { ?>
                         <div class="input-group">
                             <div class="input-group-text">₱</div>
                             <input type="number" id="c3" name="pr_recCost3" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost3'];?>" autocomplete="off"/>
                         </div>
                     <?php } ?>
                 </div>
             </div>

             <!-- 4th -->   
             <div class="row mt-2">
                 <div  class="form-group col-lg-1">
                     <?php if(isset($_GET['view'])) { ?>
                         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty4'];?>" disabled/>
                     <?php } else { ?>
                         <input type="text" id="q4" name="pr_recQty4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty4'];?>" autocomplete="off"/>
                     <?php } ?>
                 </div>
                 <div  class="form-group col-lg-2">
                     <?php if(isset($_GET['view'])) { ?>
                         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit4'];?>" disabled/>
                     <?php } else { ?>
                      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit4">
                         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit4'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit4'];?> -</option>
                         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                      <?php } ?>
                  </select>
              <?php } ?>
          </div>

          <div class="form-group col-lg-5">
             <?php if(isset($_GET['view'])) { ?>
                 <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng4'];?>" disabled/>
             <?php } else { ?>
                <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng4" >
                 <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng4'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng4'];?> -</option>
                 <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
                 $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

                     <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
                 <?php } ?>
             </select>
         <?php } ?>
     </div>
     <div class="form-group col-lg-2    ">
         <?php if(isset($_GET['view'])) { ?>
             <div class="input-group">
                 <div class="input-group-text">₱</div>
                 <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit4'];?>" disabled/>
             </div>
         <?php } else { ?>
             <div class="input-group">
                 <div class="input-group-text">₱</div>
                 <input type="number" id="u4" name="pr_recUnit4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit4'];?>" autocomplete="off"/>
             </div>
         <?php } ?>
     </div>
     <div class="form-group col-lg-2">
         <?php if(isset($_GET['view'])) { ?>
             <div class="input-group">
                 <div class="input-group-text">₱</div>
                 <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost4'];?>" disabled/>
             </div>
         <?php } else { ?>
             <div class="input-group">
                 <div class="input-group-text">₱</div>
                 <input type="number" id="c4" name="pr_recCost4" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost4'];?>" autocomplete="off"/>
             </div>
         <?php } ?>
     </div>
 </div>

 <!-- 5th -->   
 <div class="row mt-2">
     <div  class="form-group col-lg-1">
         <?php if(isset($_GET['view'])) { ?>
             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty5'];?>" disabled/>
         <?php } else { ?>
             <input type="text" id="q5" name="pr_recQty5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty5'];?>" autocomplete="off"/>
         <?php } ?>
     </div>
     <div  class="form-group col-lg-2">
         <?php if(isset($_GET['view'])) { ?>
             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit5'];?>" disabled/>
         <?php } else { ?>
          <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit5">
             <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit5'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit5'];?> -</option>
             <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
             $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
              <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
          <?php } ?>
      </select>
  <?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng5'];?>" disabled/>
<?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng5" >
     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng5'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng5'];?> -</option>
     <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit5'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u5" name="pr_recUnit5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit5'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost5'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c5" name="pr_recCost5" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost5'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div> 

<!-- 6th -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty6'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q6" name="pr_recQty6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty6'];?>" autocomplete="off"/>
     <?php } ?>
 </div>

 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit6'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit6">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit6'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit6'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng6'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng6" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng6'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng6'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit6'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u6" name="pr_recUnit6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit6'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost6'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c6" name="pr_recCost6" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost6'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 7th -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty7'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q7" name="pr_recQty7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty7'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit7'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit7">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit7'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit7'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng7'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng7" >
     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng7'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng7'];?> -</option>
     <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit7'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u7" name="pr_recUnit7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit7'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost7'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c7" name="pr_recCost7" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost7'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 8th -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty8'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q8" name="pr_recQty8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty8'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit8'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit8">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit8'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit8'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
    <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng8'];?>" disabled/>
<?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng8" >
     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng8'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng8'];?> -</option>
     <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit8'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u8" name="pr_recUnit8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit8'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost8'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c8" name="pr_recCost8" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost8'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 9th -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty9'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q9" name="pr_recQty9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty9'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit9'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit9">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit9'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit9'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng9'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng9" >
     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng9'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng9'];?> -</option>
     <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit9'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u9" name="pr_recUnit9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit9'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost9'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c9" name="pr_recCost9" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost9'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 10th -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty10'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q10" name="pr_recQty10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty10'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit10'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit10">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit10'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit10'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng10'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng10" >
      <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng10'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng10'];?> -</option>
      <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
      $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit10'];?>" disabled/>
     </div>
 <?php } else { ?>
    <div class="input-group">
     <div class="input-group-text">₱</div>
     <input type="number" id="u10" name="pr_recUnit10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit10'];?>" autocomplete="off"/>
 </div>
<?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost10'];?>" disabled/>
     </div>
 <?php } else { ?>
    <div class="input-group">
     <div class="input-group-text">₱</div>
     <input type="number" id="c10" name="pr_recCost10" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost10'];?>" autocomplete="off"/>
 </div>
<?php } ?>
</div>
</div>    

</div>
</div>
</div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
        aria-expanded="false" aria-controls="collapseTwo">
        + More Tables
    </button>
</h2>
<div id="collapseTwo" class="accordion-collapse collapse"
aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
<div class="accordion-body">
 <!-- 11t -->   
 <div class="row mt-2">
     <div  class="form-group col-lg-1">
         <label>Quantity</label>
         <?php if(isset($_GET['view'])) { ?>
             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty11'];?>" disabled/>
         <?php } else { ?>
             <input type="text" id="q11" name="pr_recQty11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty11'];?>" autocomplete="off"/>
         <?php } ?>
     </div>
     <div  class="form-group col-lg-2">
         <label>Unit</label>
         <?php if(isset($_GET['view'])) { ?>
             <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit11'];?>" disabled/>
         <?php } else { ?>
          <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit11">
             <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit11'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit11'];?> -</option>
             <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
             $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
              <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
          <?php } ?>
      </select>
  <?php } ?>
</div>

<div class="form-group col-lg-5">
 <label>Ingredients</label>
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng11'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng11" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng11'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng11'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <label>Unit Price</label>
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit11'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u11" name="pr_recUnit11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit11'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <label>Unit Cost</label>
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost11'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c11" name="pr_recCost11" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost11'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 12 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty12'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q12" name="pr_recQty12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty12'];?>" autocomplete="off"/>
     <?php } ?>
 </div>

 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit12'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit12">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit12'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit12'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng12'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng12" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng12'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng12'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit12'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u12" name="pr_recUnit12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit12'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost12'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c12" name="pr_recCost12" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost12'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 13 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty13'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q13" name="pr_recQty13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty13'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit13'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit13">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit13'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit13'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng13'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng13" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng13'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng13'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit13'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u13" name="pr_recUnit13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit13'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost13'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c13" name="pr_recCost13" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost13'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 14 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty14'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q14" name="pr_recQty14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty14'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit14'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit14">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit14'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit14'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng14'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng14" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng14'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng14'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit14'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u14" name="pr_recUnit14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit14'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost14'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c14" name="pr_recCost14" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost14'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 15 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty15'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q15" name="pr_recQty15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty15'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit15'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit15">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit15'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit15'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng15'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng15" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng15'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng15'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit15'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u15" name="pr_recUnit15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit15'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost15'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c15" name="pr_recCost15" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost15'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div> 

<!-- 16 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty16'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q16" name="pr_recQty16" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty16'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit16'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit16">
        <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit16'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit16'];?> -</option>
        <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng16'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng16" >
      <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng16'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng16'];?> -</option>
      <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
      $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit16'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u16" name="pr_recUnit16" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit16'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost16'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c16" name="pr_recCost16" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost16'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 17 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty17'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q17" name="pr_recQty17" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty17'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit17'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit17">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit17'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit17'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng17'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng17" >
     <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng17'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng17'];?> -</option>
     <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
     $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit17'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u17" name="pr_recUnit17" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit17'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost17'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c17" name="pr_recCost17" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost17'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 18 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty18'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q18" name="pr_recQty18" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty18'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit18'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit18">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit18'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit18'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng18'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng18" >
       <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng18'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng18'];?> -</option>
       <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
       $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit18'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u18" name="pr_recUnit18" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit18'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost18'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c18" name="pr_recCost18" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost18'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 19 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty19'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q19" name="pr_recQty19" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty19'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit19'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit19">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit19'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit19'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng19'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng19" >
      <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng19'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng19'];?> -</option>
      <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
      $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit19'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u19" name="pr_recUnit19" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit19'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost19'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c19" name="pr_recCost19" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost19'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 20 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty20'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q20" name="pr_recQty20" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty20'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit20'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit20">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit20'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit20'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng20'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng20" >
       <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng20'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng20'];?> -</option>
       <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
       $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit20'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u20" name="pr_recUnit20" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit20'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost20'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c20" name="pr_recCost20" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost20'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 21 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty21'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q21" name="pr_recQty21" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty21'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit21'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit21">
        <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit21'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit21'];?> -</option>
        <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng21'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng21" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng21'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng21'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit21'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u21" name="pr_recUnit21" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit21'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost21'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c21" name="pr_recCost21" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost21'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div> 

<!-- 22 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty22'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q22" name="pr_recQty22" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty22'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit22'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit22">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit22'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit22'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng22'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng22" >
       <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng22'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng22'];?> -</option>
       <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
       $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit22'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u22" name="pr_recUnit22" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit22'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost22'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c22" name="pr_recCost22" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost22'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>

<!-- 23 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty23'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q23" name="pr_recQty23" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty23'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit23'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit23">
        <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit23'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit23'];?> -</option>
        <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng23'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng23" >
      <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng23'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng23'];?> -</option>
      <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
      $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit23'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u23" name="pr_recUnit23" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit23'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost23'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c23" name="pr_recCost23" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost23'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div> 
<!-- 24 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty24'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q24" name="pr_recQty24" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty24'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit24'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit24">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit24'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit24'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng24'];?>" disabled/>
 <?php } else { ?>
    <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng24" >
      <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng24'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng24'];?> -</option>
      <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
      $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

         <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
     <?php } ?>
 </select>
<?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit24'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u24" name="pr_recUnit24" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit24'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost24'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c24" name="pr_recCost24" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost24'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>
<!-- 25 -->   
<div class="row mt-2">
 <div  class="form-group col-lg-1">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recQty25'];?>" disabled/>
     <?php } else { ?>
         <input type="text" id="q25" name="pr_recQty25" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recQty25'];?>" autocomplete="off"/>
     <?php } ?>
 </div>
 <div  class="form-group col-lg-2">
     <?php if(isset($_GET['view'])) { ?>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recWunit25'];?>" disabled/>
     <?php } else { ?>
      <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recWunit25">
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit25'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recWunit25'];?> -</option>
         <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
          <option style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
      <?php } ?>
  </select>
<?php } ?>
</div>

<div class="form-group col-lg-5">
 <?php if(isset($_GET['view'])) { ?>
     <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recIng25'];?>" disabled/>
 <?php } else { ?>
     <select style="text-transform:uppercase" class="form-control" type="text" name="pr_recIng25" >
         <option value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recIng25'];?>">- <?php if(isset($_GET['edit'])) echo $getROW['pr_recIng25'];?> -</option>
         <?php $sql = "SELECT * FROM recipe_inventory WHERE ristatus='Enabled';";
         $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>

             <option  style="text-transform:uppercase"value="<?php echo $prow['proname'] ?>"><?php echo $prow['proname'] ?> | ₱ <?php echo $prow['price'] ?>/<?php echo $prow['unit'] ?></option>
         <?php } ?>
     </select>
 <?php } ?>
</div>

<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recUnit25'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="u25" name="pr_recUnit25" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recUnit25'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
<div class="form-group col-lg-2">
 <?php if(isset($_GET['view'])) { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['pr_recCost25'];?>" disabled/>
     </div>
 <?php } else { ?>
     <div class="input-group">
         <div class="input-group-text">₱</div>
         <input type="number" id="c25" name="pr_recCost25" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pr_recCost25'];?>" autocomplete="off"/>
     </div>
 <?php } ?>
</div>
</div>        

</div>
</div>
</div>
<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseThree"
        aria-expanded="false" aria-controls="collapseThree">
        + Description
    </button>
</h2>
<div id="collapseThree" class="accordion-collapse collapse"
aria-labelledby="headingThree" data-bs-parent="#accordionExample">
<div class="accordion-body">
 <div class="row">
     <div class="col-12">
         <?php if(isset($_GET['view'])) { ?>
             <div style="border:1px solid #CED4DA;border-radius: 9px;height:auto;">
                 <div style="margin-left:2%;margin-top:1%">
                     <p><?php echo $getROW['pr_recDesc'];?></p>
                 </div>
             </div>
         <?php } else { ?>
             <textarea name="pr_recDesc" id="elm1" class="summernote"><p><?php if(isset($_GET['edit'])) echo $getROW['pr_recDesc'];?></p></textarea>
         <?php } ?>
     </div> <!-- end col -->
 </div> <!-- end row -->
</div>
</div>
</div>
</div>
<br>
<!-- Button -->
<div class="form-group mt-2 text-right" style="position:relative; text-align: right;">
 <?php if(isset($_GET['view'])){?>
     <button class="btn btn-success waves-effect waves-light" id="btnPrint" onclick="window.print();"><i class="mdi mdi-printer mr-2"></i> Print
     </button>&nbsp;
     <a href="pro_reprecipe" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
 <?php }elseif(isset($_GET['edit'])) { ?> 
     <button class="btn btn-warning waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
     <a href="pro_reprecipe" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
 <?php } else { ?>
     <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-database-plus mr-2"></i> Save Data
     </button>&nbsp;
     <a href="pro_reprecipe" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
 <?php } ?> 
</div>
<!-- End Button -->

</div>

</div>
</div>
</div>
</div>
</form>
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

<!-- parsleyjs -->
<script src="assets/libs/parsleyjs/parsley.min.js"></script>
<script src="assets/js/pages/form-validation.init.js"></script>
<!-- plugins -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-advanced.init.js"></script>
<!--tinymce js-->
<script src="assets/libs/tinymce/tinymce.min.js"></script>
<!-- init js -->
<script src="assets/js/pages/form-editor.init.js"></script>

<script>
    $(function () {
        $("#q1, #q2, #q3, #q4, #q5, #q6, #q7, #q8, #q9, #q10, #q11, #q12, #q13, #q14, #q15, #q16, #q17, #q18, #q19, #q20, #q21, #q22, #q23, #q24, #q25, #u1, #u2, #u3, #u4, #u5, #u6, #u7, #u8, #u9, #u10, #u11, #u12, #u13, #u14, #u15, #u16, #u17, #u18, #u19, #u20, #u21, #u22, #u23, #u24, #u25, #c1, #c2, #c3, #c4, #c5, #c6, #c7, #c8, #c9, #c10, #c11, #c12, #c13, #c14, #c15, #c16, #c17, #c18, #c19, #c20, #c21, #c22, #c23, #c24, #c25, #totalCost").keyup(function () {

            $("#c1").val(+$("#q1").val() * +$("#u1").val());
            $("#c2").val(+$("#q2").val() * +$("#u2").val());
            $("#c3").val(+$("#q3").val() * +$("#u3").val());
            $("#c4").val(+$("#q4").val() * +$("#u4").val());
            $("#c5").val(+$("#q5").val() * +$("#u5").val());
            $("#c6").val(+$("#q6").val() * +$("#u6").val());
            $("#c7").val(+$("#q7").val() * +$("#u7").val());
            $("#c8").val(+$("#q8").val() * +$("#u8").val());
            $("#c9").val(+$("#q9").val() * +$("#u9").val());
            $("#c10").val(+$("#q10").val() * +$("#u10").val());
            $("#c11").val(+$("#q11").val() * +$("#u11").val());
            $("#c12").val(+$("#q12").val() * +$("#u12").val());
            $("#c13").val(+$("#q13").val() * +$("#u13").val());
            $("#c14").val(+$("#q14").val() * +$("#u14").val());
            $("#c15").val(+$("#q15").val() * +$("#u15").val());
            $("#c16").val(+$("#q16").val() * +$("#u16").val());
            $("#c17").val(+$("#q17").val() * +$("#u17").val());
            $("#c18").val(+$("#q18").val() * +$("#u18").val());
            $("#c19").val(+$("#q19").val() * +$("#u19").val());
            $("#c20").val(+$("#q20").val() * +$("#u20").val());
            $("#c21").val(+$("#q21").val() * +$("#u21").val());
            $("#c22").val(+$("#q22").val() * +$("#u22").val());
            $("#c23").val(+$("#q23").val() * +$("#u23").val());
            $("#c24").val(+$("#q24").val() * +$("#u24").val());
            $("#c25").val(+$("#q25").val() * +$("#u25").val());


            $("#totalCost").val(+$("#c1").val() + +$("#c2").val() + +$("#c3").val() + +$("#c4").val() + +$("#c5").val() + +$("#c6").val() + +$("#c7").val() + +$("#c8").val() + +$("#c9").val() + +$("#c10").val() + +$("#c11").val() + +$("#c12").val() + +$("#c13").val() + +$("#c14").val() + +$("#c15").val() + +$("#c16").val() + +$("#c17").val() + +$("#c18").val() + +$("#c19").val() + +$("#c20").val() + +$("#c21").val() + +$("#c22").val() + +$("#c23").val() + +$("#c24").val() + +$("#c25").val() );
        });
    });
</script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['lehrec'] != on)
{
    header('location:error404');
    exit;
}
?>