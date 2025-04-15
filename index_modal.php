
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <textarea id="view_details" rows="15" style="width: 100%;white-space: pre-wrap;" disabled></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Apply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form method="POST" action="src/admin/controller/public_website/apply_add.php" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="modal-body">
          <div class="form-row form-group">
            <div class="col-3 mod-display-hide">
              <label for="posid">ID</label>
              <input type="text" class="form-control form-control-sm" id="view_id" name="posid" readonly>
            </div>

            <div class="col-8">
              <label for="posposition">Position</label>
              <input type="text" class="form-control capitalize form-control-sm" id="view_position" name="posposition" readonly>
            </div>

             <div class="col-6 mt-3 mod-display-hide">
              <label for="posjobtype">Job Type</label>
              <input type="text" class="form-control form-control-sm" id="view_jobtype" name="posjobtype" readonly>
            </div>

             <div class="col-4">
              <label for="posbranch">Branch</label>
              <input type="text" class="form-control form-control-sm" id="view_branch" name="posbranch" readonly>
            </div>

            <div class="col-12 mt-3">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control form-control-sm" name="fullname" autocomplete="off"  required>

              <div class="invalid-feedback">
                Please provide a full name.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-12 mt-2">
              <label for="address">Address</label>
              <input type="text" class="form-control form-control-sm" autocomplete="off" name="address" required >

              <div class="invalid-feedback">
                Please provide a address.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

             <div class="col-5 mt-2">
              <label for="contact">Contact No.</label>
              <input type="number" class="form-control form-control-sm" autocomplete="off" name="contact" required>

              <div class="invalid-feedback">
                Please provide a contact.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

             <div class="col-7 mt-2">
              <label for="posemail">Email Address</label>
              <input type="email" class="form-control form-control-sm" name="posemail" autocomplete="off" required>

              <div class="invalid-feedback">
                Please provide a email.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-12 mt-3">
              <label for="photo_text">Resume <i>(filename should be your name.)</i></label>
              <input type="file" class="form-control-file" name="photo_text" required>
            </div>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm" name="add">Submit form</button>
      </div>
    </form>
    </div>
  </div>
</div>