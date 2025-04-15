<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          	<div class="modal-header">
            	<h5 class="modal-title"><b>Add Inventory</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/pro_repinventory_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
          		  <div class="col-lg-12" style="zoom:95%;">
                        <div class="row">              
                            
                             <div class="col-lg-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="stock">Stock&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                         <input type="number" class="form-control uppercase" id="stock" name="stock" autocomplete="off" required>

                                        <div class="invalid-feedback">
                                            Please provide a stock.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>   
                               <div class="col-lg-10">
                                    <div class="mt-1">
                                        <label class="form-label" for="proname">Product Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                         <input type="text" class="form-control uppercase" id="proname" name="proname" autocomplete="off" required>

                                         <div class="invalid-feedback">
                                            Please provide a name.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="weight">Weight&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="number" class="form-control uppercase" id="weight" name="weight" autocomplete="off" required>

                                        <div class="invalid-feedback">
                                            Please provide a weight.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="unit">Unit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="unit" id="unit" autocomplete="off" required>
                                            <option value="" selected>- SELECT -</option>
                                            <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                                <option  style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                            <?php } ?>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a unit.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="price">Price&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="number" class="form-control uppercase" id="price" name="price" autocomplete="off" required>

                                        <div class="invalid-feedback">
                                            Please provide a price.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="ristatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="ristatus" id="ristatus" autocomplete="off" required>
                                            <option value="" selected>- SELECT -</option>
                                            <option value="Enabled">Enabled</option>
                                            <option value="Disabled">Disabled</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a status.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>  
                            </div>                                      
                            </div>
                        </div>
                        <!-- End Form Layout -->        
            
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Save </button>
           </div>
        </form>
        </div>
    </div>
</div>
</div>

<!-- Edit -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          	<div class="modal-header">
            	<h5 class="modal-title"><b>Edit Recipe Inventory</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/pro_repinventory_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" class="id" name="id">
          		  <div class="col-lg-12" style="zoom:95%;">
                       <div class="row">                         
                               <div class="col-lg-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_stock">Stock&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                         <input type="number" class="form-control uppercase" id="edit_stock" name="stock" autocomplete="off" required>

                                         <div class="invalid-feedback">
                                            Please provide a stock.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>   
                               <div class="col-lg-10">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_proname">Product Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                         <input type="text" class="form-control uppercase" id="edit_proname" name="proname" autocomplete="off" required>

                                         <div class="invalid-feedback">
                                            Please provide a name.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_weight">Weight&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="number" class="form-control uppercase" id="edit_weight" name="weight" autocomplete="off" required>

                                        <div class="invalid-feedback">
                                            Please provide a weight.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_unit">Unit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="unit" id="edit_unit" autocomplete="off" required>
                                            <option value="" disabled selected>- SELECT -</option>
                                             <?php $sql = "SELECT * FROM units WHERE ex_status='Enabled';";
                                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                                <option selected style="text-transform:uppercase"value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                            <?php } ?>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a unit.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_price">Price&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="number" class="form-control uppercase" id="edit_price" name="price" autocomplete="off" required>

                                        <div class="invalid-feedback">
                                            Please provide a price.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                            </div>
                            
                            <div class="col-lg-3 mt-2">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_ristatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="ristatus" id="edit_ristatus" autocomplete="off" required>
                                            <option value="" selected disabled>- SELECT -</option>
                                            <option value="Enabled">Enabled</option>
                                            <option value="Disabled">Disabled</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a status.
                                        </div>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>  
                            </div>                                      
                            </div>
                        </div>
                        <!-- End Form Layout -->        
            
            <div class="modal-footer">
            	<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="mdi mdi-database-refresh"></i> Update</button>            	
          	</div>
        </form>
        </div>
    </div>
</div>
</div>



     
<!-- Delete -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       	
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/pro_repinventory_delete.php">
            		<input type="hidden" class="id" name="id">
            		<div class="text-center">
	                	<p>DELETE PRODUCT</p>
                        <h3 id="del_proname" class="bold capitalize"></h3>
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
