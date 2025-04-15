<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b>Add Overtime</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/hr_attovertime_add.php" class="form-horizontal needs-validation" novalidate>
          		<div class="form-group">
                  	<label for="employee" class="col-sm-3 control-label">Employee</label>
                  	<div class="col-sm-12">
                    	<select style="width:100%;" class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ..." id="employee" name="employee" required>
                        <?php
                            $sql = "SELECT * FROM employees WHERE stat='Active';";
                            $query = $conn->query($sql);
                                while($prow = $query->fetch_assoc()){
                        ?>
                            <option value="<?php echo $prow['employee_id'] ?>"><?php echo utf8_encode(ucwords(strtolower($prow['firstname'])));?> <?php echo utf8_encode(ucwords(strtolower($prow['lastname'])));?> <?php echo utf8_encode(ucwords(strtolower($prow['suffix'])));?></option>
                        <?php } ?>                                                   
                        </select>

                        <div class="invalid-feedback">
                          Please select a employee.
                        </div>
                  	</div>
                </div>
                <div class="form-group mt-2">
                    <label for="datepicker_add" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-12"> 
                      <div class="date">
                        <input type="date" class="form-control" id="datepicker_add" name="date" autocomplete="off" required>

                        <div class="invalid-feedback">
                          Please select a date.
                        </div>
                      </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                  	<label for="hours" class="col-sm-3 control-label">No. of Hours</label>

                  	<div class="col-sm-12">
                    	<input type="number" class="form-control" id="hours" name="hours" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a hour.
                        </div>
                  	</div>
                </div>
                <div class="form-group mt-2">
                  	<label for="mins" class="col-sm-3 control-label">No. of Mins</label>

                  	<div class="col-sm-12">
                    	<input type="number" class="form-control" id="mins" name="mins" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a minute.
                        </div>
                  	</div>
                </div>
                 <div class="form-group mt-2">
                    <label for="rate" class="col-sm-3 control-label">Rate</label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="rate" name="rate" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a rate.
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
                <h5 class="modal-title capitalize"><b><span class="employee_name"></span></b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/hr_attovertime_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" class="otid" name="id">
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-12"> 
                      <div class="date">
                        <input type="date" class="form-control" id="datepicker_edit" name="date" autocomplete="off" required>

                        <div class="invalid-feedback">
                          Please provide a date.
                      </div>
                      </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="hours_edit" class="col-sm-3 control-label">No. of Hours</label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="hours_edit" name="hours" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a hours.
                      </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="mins_edit" class="col-sm-3 control-label">No. of Mins</label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="mins_edit" name="mins" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a minute.
                      </div>
                    </div>
                </div>
                 <div class="form-group mt-2">
                    <label for="rate_edit" class="col-sm-3 control-label">Rate</label>

                    <div class="col-sm-12">
                      <input type="number" class="form-control" id="rate_edit" name="rate" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a rate.
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
                <h5 class="modal-title"><b><span id="overtime_date"></span></b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/hr_attovertime_delete.php">
            		<input type="hidden" class="otid" name="id">
            		<div class="text-center">
	                	<p>DELETE OVERTIME</p>
	                	<h2 class="employee_name bold capitalize"></h2>
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


     