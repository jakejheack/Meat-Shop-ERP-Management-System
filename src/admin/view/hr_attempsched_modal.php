<!-- Edit -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title capitalize"><b><span class="employee_name"></span></b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form method="POST" action="../controller/hr_attempsched_edit.php" class="form-horizontal needs-validation" novalidate>
            		<input type="hidden" id="empid" name="id">
                <div class="form-group">
                    <label for="edit_schedule" class="col-sm-3 control-label">Schedule</label>

                    <div class="col-sm-12">
                      <select class="form-control" id="edit_schedule" name="schedule" required>
                        <option selected id="schedule_val"></option>
                        <?php
                          $sql = "SELECT * FROM schedules";
                          $query = $conn->query($sql);
                          while($srow = $query->fetch_assoc()){
                            echo "
                              <option value='".$srow['id']."'>".date('h:i A', strtotime($srow['time_in'])).' - '.date('h:i A', strtotime($srow['time_out']))."</option>
                            ";
                          }
                        ?>
                      </select>

                      <div class="invalid-feedback">
                        Please select a time schedule.
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