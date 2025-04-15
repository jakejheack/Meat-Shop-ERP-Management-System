<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b>Add Schedule</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/hr_attsched_add.php" class="form-horizontal needs-validation" novalidate>
          		  <div class="form-group">
                  	<label for="time_in" class="col-sm-3 control-label">Time In</label>

                  	<div class="col-sm-12">
                      <div class="bootstrap-timepicker">
                    	 <input type="time" class="form-control timepicker" id="time_in" name="time_in" autocomplete="off" required>

                       <div class="invalid-feedback">
                        Please provide a time in.
                      </div>
                      </div>
                  	</div>
                </div>
                <div class="form-group mt-2">
                    <label for="time_out" class="col-sm-3 control-label">Time Out</label>

                    <div class="col-sm-12">
                      <div class="bootstrap-timepicker">
                        <input type="time" class="form-control timepicker" id="time_out" name="time_out" autocomplete="off" required>

                        <div class="invalid-feedback">
                          Please provide a time out.
                        </div>
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
                <h5 class="modal-title"><b>Edit Schedule</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/hr_attsched_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" id="timeid" name="id">
                <div class="form-group">
                    <label for="edit_time_in" class="col-sm-3 control-label">Time In</label>

                    <div class="col-sm-12">
                      <div class="bootstrap-timepicker">
                        <input type="time" class="form-control timepicker" id="edit_time_in" name="time_in" autocomplete="off" required>

                        <div class="invalid-feedback">
                          Please provide a time in.
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="edit_time_out" class="col-sm-3 control-label">Time out</label>

                    <div class="col-sm-12">
                      <div class="bootstrap-timepicker">
                        <input type="time" class="form-control timepicker" id="edit_time_out" name="time_out" autocomplete="off" required>

                        <div class="invalid-feedback">
                          Please provide a time out.
                        </div>
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
            	<form class="form-horizontal" method="POST" action="../controller/hr_attsched_delete.php">
            		<input type="hidden" id="del_timeid" name="id">
            		<div class="text-center">
	                	<p>DELETE SCHEDULE</p>
	                	<h2 id="del_schedule" class="bold"></h2>
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


     