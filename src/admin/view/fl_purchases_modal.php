<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Add Purchase</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/fl_purchase_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">                            
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="purdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control uppercase" id="purdate" name="purdate" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" autocomplete="off" style="font-weight: 600;" readonly>

                            <div class="invalid-feedback">
                                Please select a date.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-2">
                            <label class="form-label" for="supplier">Supplier Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control dropdownppmenu" type="text" required>

                                <option value="">- SELECT -</option>
                                <?php $sql = "SELECT * FROM sd_profile ORDER BY sd_profileName ASC;";
                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                    <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['sd_profileName'] ?>"><?php echo ucwords(strtolower($prow['sd_profileName'])) ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a supplier.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="branch">Branch&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <?php if($_SESSION['branch'] == All){?>
                                <select class="form-control" name="branch" id="branch" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Daet">Daet</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="Yashano">Yashano</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Daet){?>
                                <select class="form-control" name="branch" id="branch" autocomplete="off" required>
                                    <option value="Daet">Daet</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Magsaysay){?>
                                <select class="form-control" name="branch" id="branch" autocomplete="off" required>
                                    <option value="Magsaysay">Magsaysay</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Yashano){?>
                                <select class="form-control" name="branch" id="branch" autocomplete="off" required>
                                    <option value="Yashano">Yashano</option>
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

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="category">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" name="category" id="category" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <option value="Agri">Agri</option>
                                <option value="Chicken">Chicken</option>
                                <option value="Cow">Cow</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Pig">Pig</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a category.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>    

                    
                    <div class="col-lg-9  mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="title">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control capitalize" id="title" name="title" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a title.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="qty">Qty&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="number" class="form-control uppercase" id="sumqty" name="qty" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a quantity.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unit">Unit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control uppercase" name="unit" id="unit" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <?php
                                $sql = "SELECT * FROM units";
                                $query = $conn->query($sql);
                                while($prow = $query->fetch_assoc()){
                                    echo "
                                    <option value='".$prow['ex_units']."'>".$prow['ex_units']."</option>
                                    ";
                                }
                                ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a unit.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unitprice">Unit Price&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                            <input type="number" class="form-control" id="sumunitprice" name="unitprice" autocomplete="off" required>
                        </div>

                            <div class="invalid-feedback">
                                Please provide a unit price.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="amount">Total Amount&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                            <input type="text" class="form-control uppercase" id="sumamount" name="amount" style="font-weight:600;" autocomplete="off" readonly>
                        </div>

                            <div class="invalid-feedback">
                             auto generate amount.
                         </div>
                         <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>  
                <div class="col-lg-3 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="stat">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                        <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl){?>
                            <select class="form-control" name="stat" id="stat" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <option value="Awaiting" style="color:orange">Awaiting</option>
                                <option value="Approved" style="color:limegreen">Approved</option>
                            </select>
                        <?php } else {?>
                            <select class="form-control" name="stat" id="stat" autocomplete="off" required>
                                <option value="Awaiting" style="color:orange">Awaiting</option>
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
                <div class="col-lg-3 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="entry">Entry&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <select class="form-control" name="entry" id="entry" autocomplete="off" required>
                            <option value="">- SELECT -</option>
                            <option value="IN">IN</option>
                            <option value="OUT">OUT</option>
                        </select>

                        <div class="invalid-feedback">
                            Please select a entry.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <div class="mt-1">
                        <label class="form-label" for="photo">Upload Docs</label>
                        <div class="mt-2">
                            <div class="col-sm-6">
                                <input type="file" name="photo" id='inputfile' onChange='getFileNameWithExt(event)'>

                                <div class="invalid-feedback">
                                    Please upload a file.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div id="hide-from-screen">
                                <input name="imageText" id='outputfile' value="null" readonly/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2" style="display: none;">
                    <div class="mt-2">
                        <label class="form-label" for="supplierid">Supplier ID</label>
                        <input type="text" id="ppid" class="form-control" name="supplierid" readonly>
                    </div>
                </div>  
                <div class="col-lg-6 mt-2" style="display: none;">
                    <div class="mt-2">
                        <label class="form-label" for="supplier">Supplier Name</label>
                        <input type="text" id="ppsupplier" class="form-control" name="supplier" readonly>
                    </div>
                </div>       

            </div>
        </div>
        <!-- End Form Layout -->        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
        <button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Submit </button>
    </div>
</form>
</div>
</div>
</div>

<!-- Edit -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Edit Purchase</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/fl_purchase_edit.php" class="form-horizontal needs-validation" novalidate>
            <input type="hidden" class="id" name="id">
            <div class="col-lg-12" style="zoom:95%;">
                <div class="row">    
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="purdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="date" class="form-control" id="edit_purdate" name="purdate" required>

                            <div class="invalid-feedback">
                                Please provide a date.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="purdate">Purchase No.&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_purchaseno" name="purchaseno" readonly>

                            <div class="invalid-feedback">
                                Please provide a purchase no.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-2">
                            <label class="form-label" for="supplier">Supplier Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control capitalize" id="edit_supplier" readonly>

                            <div class="invalid-feedback">
                                Please provide a supplier name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="branch">Branch&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <?php if($_SESSION['branch'] == All){?>
                                <select class="form-control" name="branch" id="edit_branch" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Daet">Daet</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                    <option value="Yashano">Yashano</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Daet){?>
                                <select class="form-control" name="branch" id="edit_branch" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Daet">Daet</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Magsaysay){?>
                                <select class="form-control" name="branch" id="edit_branch" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Magsaysay">Magsaysay</option>
                                </select>
                            <?php } elseif($_SESSION['branch'] == Yashano){?>
                                <select class="form-control" name="branch" id="edit_branch" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Yashano">Yashano</option>
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

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="category">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" name="category" id="edit_category" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <option value="Agri">Agri</option>
                                <option value="Chicken">Chicken</option>
                                <option value="Cow">Cow</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Pig">Pig</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a category.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>    


                    <div class="col-lg-6  mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="title">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control capitalize" id="edit_title" name="title" required>

                            <div class="invalid-feedback">
                                Please provide a title.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="qty">Qty&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="sum_qty" name="qty" required>

                            <div class="invalid-feedback">
                                Please provide a qty.
                            </div>
                            <div class="valid-feedback">
                                Look good!
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unit">Unit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control uppercase" name="unit" id="edit_unit" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <?php
                                $sql = "SELECT * FROM units ORDER BY ex_units ASC;";
                                $query = $conn->query($sql);
                                while($prow = $query->fetch_assoc()){
                                    echo "
                                    <option value='".$prow['ex_units']."'>".$prow['ex_units']."</option>
                                    ";
                                }
                                ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a unit.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unitprice">Unit Price&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                                <input type="text" class="form-control" id="sum_unitprice" placeholder="₱" name="unitprice" required>

                                <div class="invalid-feedback">
                                    Please provide a unit price.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="amount">Total Amount</label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                                <input type="text" class="form-control" name="amount" id="sum_amount" placeholder="₱" readonly>

                                <div class="invalid-feedback">
                                    Please provide a amount.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-3 mt-2">
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="stat">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl){?>
                                <select class="form-control" name="stat" id="edit_stat" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Awaiting" style="color:orange">Awaiting</option>
                                    <option value="Approved" style="color:limegreen">Approved</option>
                                </select>
                            <?php } else {?>
                                <select class="form-control" name="stat" id="edit_stat" autocomplete="off" required>
                                    <option value="" selected>- SELECT -</option>
                                    <option value="Awaiting" style="color:orange">Awaiting</option>
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
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="entry">Entry&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" name="entry" id="edit_entry" autocomplete="off" required>
                                <option value="">- SELECT -</option>
                                <option value="IN">IN</option>
                                <option value="OUT">OUT</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a entry.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>     
                </div>
            </div>
            <!-- End Form Layout -->        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
            <button type="submit" class="btn btn-success" name="edit"><i class="mdi mdi-database-refresh"></i> Update </button>
        </div>
    </form>
</div>
</div>
</div>

<!-- view -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="view">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>View Purchase</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <form class="form-horizontal">
            <input type="hidden" class="empid" name="id">
            <div class="col-lg-12" style="zoom:95%;">
                <div class="row">    
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="purdate">Date</label>
                            <input type="text" class="form-control" id="view_purdate" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mt-2">
                            <label class="form-label" for="purdate">Purchase No.</label>
                            <input type="text" class="form-control" id="view_purchaseno" readonly>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-2">
                            <label class="form-label" for="supplier">Supplier Name</label>
                            <input type="text" class="form-control capitalize" id="view_supplier" readonly>
                        </div>
                    </div>


                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="branch">Branch</label>
                            <input type="text" class="form-control" id="view_branch" readonly>
                        </div>
                    </div>       

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="category">Category</label>
                            <input type="text" class="form-control" id="view_category" readonly>
                        </div>
                    </div>    


                    <div class="col-lg-6  mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control capitalize" id="view_title" readonly>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="qty">Qty</label>
                            <input type="text" class="form-control" id="view_qty" readonly>
                        </div>
                    </div>  
                    <div class="col-lg-2 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unit">Unit</label>
                            <input type="text" class="form-control" id="view_unit" readonly>
                        </div>
                    </div>   
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="unitprice">Unit Price</label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                                <input type="text" class="form-control" id="view_unitprice" placeholder="₱" readonly>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="amount">Total Amount</label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-dark">₱</div>
                                <input type="text" class="form-control" id="view_amount" placeholder="₱" readonly>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-3 mt-2">
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="stat">Status</label>
                            <input type="text" class="form-control" id="view_stat" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="entry">Entry</label>
                            <input type="text" class="form-control" id="view_entry" readonly>
                        </div>
                    </div>     

                </div>
            </div>
            <!-- End Form Layout -->        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
        </div>
    </form>
</div>
</div>
</div>

<!-- Delete -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Deleting...</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>             
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="../controller/fl_purchase_delete.php">
                    <input type="hidden" id="del_purid" name="id">
                    <div class="text-center">
                        <p>DELETE PURCHASE</p>
                        <h2 class="bold del_purchase uppercase"></h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                    <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Update Photo -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit_photo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title capitalize"><b><span class="del_employee_name"></span></b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/fl_purchase_editphoto.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-12 control-label">Update Docs</label>

                    <div class="col-sm-12">
                      <input type="file" id="photo" name="imageText" required>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="mdi mdi-database-refresh"></i> Update</button>
          </form>
      </div>
  </div>
</div>
</div>    