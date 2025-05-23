<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b>Add Deduction</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>        	
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/fl_deduction_add.php" class="form-horizontal needs-validation" novalidate>
          		  <div class="form-group">
                  	<label for="description" class="col-sm-3 control-label">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                  	<div class="col-sm-12">
                    	<input type="text" class="form-control" id="description" name="description" autocomplete="off" required>

                      <div class="invalid-feedback">
                        Please provide a title.
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
                <h5 class="modal-title"><b>Edit Deduction</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>             	
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/fl_deduction_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" class="decid" name="id">
                <div class="form-group">
                    <label for="edit_description" class="col-sm-3 control-label">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" id="edit_description" name="description" autocomplete="off" required>

                      <div class="invalid-feedback">
                        Please provide a title.
                      </div>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                </div>
                <div class="form-group mt-2">
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
                <h5 class="modal-title"><b>Deleting...</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>        	
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/fl_deduction_delete.php">
            		<input type="hidden" class="decid" name="id">
            		<div class="text-center">
	                	<p>DELETE DEDUCTION</p>
	                	<h2 id="del_deduction" class="bold"></h2>
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


     