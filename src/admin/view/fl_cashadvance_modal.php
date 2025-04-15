<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b>Add Cash Advance</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>           	
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/fl_cashadvance_add.php" class="form-horizontal needs-validation" novalidate>
          		  <div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                  	<div class="col-sm-12">
                    	<select style="width:100%;" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." id="employee" name="employee" required>
                        <?php
                            $sql = "SELECT * FROM employees WHERE stat='Active' ORDER BY firstname ASC;";
                            $query = $conn->query($sql);
                                while($prow = $query->fetch_assoc()){
                        ?>
                            <option value="<?php echo $prow['employee_id'] ?>"><?php echo utf8_encode(ucwords(strtolower($prow['firstname'])));?> <?php echo utf8_encode(ucwords(strtolower($prow['lastname'])));?></option>
                        <?php } ?>                                                   
                        </select>

                        <div class="invalid-feedback">
                          Please select a employee.
                        </div>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                  	</div>
                </div>
                <div class="form-group mt-2">
                    <label for="amount" class="col-sm-3 control-label">Amount&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="amount" name="amount" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a amount.
                        </div>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="mdi mdi-database-plus"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title capitalize"><b><span class="date"></span> | <span class="employee_name"></span></b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/fl_cashadvance_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" class="caid" name="id">
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-3 control-label">Amount&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="edit_amount" name="amount" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a amount.
                        </div>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="mdi mdi-database-refresh"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b><span class="date"></span> | <span class="employee_name bold capitalize"></span></b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            	
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/fl_cashadvance_delete.php">
            		<input type="hidden" class="caid" name="id">
            		<div class="text-center">
	                	<p>DELETE CASH ADVANCE</p>
	                	<h2 class="totalAmount"></h2>                        
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


     