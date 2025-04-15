<!-- Change Password -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title capitalize"><b><span class="account_name"></span></b></h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
            </div>
            <div class="modal-body">
              <form method="POST" action="../controller/ex_users_change.php" class="form-horizontal needs-validation" novalidate>
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_amount" class="col-sm-5 control-label">Change Password&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>

                    <div class="col-sm-12">
                      <input type="text" class="form-control" name="password" autocomplete="off" required>

                      <div class="invalid-feedback">
                          Please provide a password.
                        </div>
                        <div class="valid-feedback">
                          Looks good!
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="update"><i class="mdi mdi-database-refresh"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>