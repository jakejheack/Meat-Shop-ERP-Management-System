<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title"><b>Add Application</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="../controller/hr_jobapply_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12">
                <div class="row">    
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posid">PosID</label>
                            <input type="text" class="form-control" id="jpid" name="posid" readonly>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-1">
                            <label class="form-label" for="posposition">Position</label>
                            <input type="text" class="form-control" id="jpposition" name="posposition"  maxlength="250" readonly>
                        </div>
                    </div>   

                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posjobtype">Job Type</label>
                            <input type="text" class="form-control" id="jpjobtype" name="posjobtype" readonly>
                        </div>
                    </div>   

                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posbranch">Branch</label>
                            <input type="text" class="form-control" id="jpbranch" name="posbranch"  readonly>
                        </div>
                    </div> 

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="fullname">Full Name&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-5">
                        <div class="mt-3">
                            <label class="form-label" for="position">Select Position&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control dropdownppmenu mod-center-left" type="text" required>
                                <option value="">- SELECT -</option>
                                <?php $sql = "SELECT * FROM job_vacancies ORDER BY position ASC;";
                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                    <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['position'] ?>{}<?php echo $prow['jobtype'] ?>{}<?php echo $prow['branch'] ?>"><?php echo ucwords(strtolower($prow['position'])) ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a position.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="address">Address&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="address" name="address" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-5">
                        <div class="mt-3">
                            <label class="form-label" for="contact">Contact&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="contact" name="contact" autocomplete="off" maxlength="50" required>

                            <div class="invalid-feedback">
                                Please provide a contact.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="posemail">Email Address</label>
                            <input type="email" class="form-control" id="posemail" name="posemail" autocomplete="off" maxlength="250">

                            <div class="invalid-feedback">
                                Please provide a email.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-5">
                        <div class="mt-3">
                            <label class="form-label" for="photo">Resume</label>
                            <div class="mt-2">
                                <div class="col-sm-6">
                                    <input type="file" name="photo" id="file" onChange='getFileNameWithExt(event)' accept=".pdf,.doc,.docx">

                                    <div class="mod-hide">
                                        <input name="photo_text" id='outputfile' value="null" readonly/>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please upload a file.
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-2">
                    <div class="mod-center">
                        <div class="row">
                            <div class="col-lg-2">
                            </div>
                            <div class="col-lg-5">
                                <div class="mt-2">
                                    <label class="form-label" for="schedule">Date Interview</label>
                                    <input type="datetime-local" class="form-control mod-center" id="schedule" name="schedule" autocomplete="off" maxlength="250">

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
                                    <label class="form-label" for="stat">Status&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                                    <select type="text" id="stat" name="stat" class="form-control mod-center-left" autocomplete="off" required>
                                        <option value="">- SELECT -</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Interview">Interview</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Hired">Hired</option>
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Edit Application</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form method="POST" action="../controller/hr_jobapply_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">    
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posid">PosID</label>
                            <input type="text" class="form-control" id="edit_posid" name="posid" readonly>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-1">
                            <label class="form-label" for="posposition">Position</label>
                            <input type="text" class="form-control capitalize" id="edit_posposition" name="posposition"  maxlength="250" readonly>
                        </div>
                    </div>   

                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posjobtype">Job Type</label>
                            <input type="text" class="form-control" id="edit_posjobtype" name="posjobtype" readonly>
                        </div>
                    </div>   

                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="posbranch">Branch</label>
                            <input type="text" class="form-control" id="edit_posbranch" name="posbranch"  readonly>
                        </div>
                    </div> 
                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="fullname">Full Name&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control capitalize" id="edit_fullname" name="fullname" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-5">
                        <div class="mt-3">
                            <label class="form-label" for="position">Change Position</label>
                            <select class="form-control dropdownppmenu2 mod-center-left" type="text">
                                <option value="">- SELECT -</option>
                                <?php $sql = "SELECT * FROM job_vacancies ORDER BY position ASC;";
                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                    <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['position'] ?>{}<?php echo $prow['jobtype'] ?>{}<?php echo $prow['branch'] ?>"><?php echo ucwords(strtolower($prow['position'])) ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a position.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="address">Address&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control capitalize" id="edit_address" name="address" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-5">
                        <div class="mt-3">
                            <label class="form-label" for="contact">Contact&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_contact" name="contact" autocomplete="off" maxlength="50" required>

                            <div class="invalid-feedback">
                                Please provide a contact.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-12">
                        <div class="mt-3">
                            <label class="form-label" for="posemail">Email Address</label>
                            <input type="email" class="form-control" id="edit_posemail" name="posemail" autocomplete="off" maxlength="250">

                            <div class="invalid-feedback">
                                Please provide a email.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <hr class="mt-4">
                    <div class="mod-center">
                        <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-3">
                                <div class="mt-2">
                                    <label class="form-label" for="schedule">Created Date</label>
                                    <input type="date" class="form-control mod-center" id="edit_created_on" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <label class="form-label" for="schedule">Date Interview</label>
                                    <input type="datetime-local" class="form-control mod-center" id="edit_schedule" name="schedule">

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
                                    <label class="form-label" for="stat">Status&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                                    <select type="text" id="edit_stat" name="stat" class="form-control mod-center-left" autocomplete="off" required>
                                        <option value=""selected>- SELECT -</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Interview">Interview</option>
                                        <option value="Rejected">Rejected</option>
                                        <option value="Hired">Hired</option>
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form class="form-horizontal" method="POST" action="../controller/hr_jobapply_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE APPLICATION</p>
                  <h3 id="del_fullname" class="bold capitalize"></h3>
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

<!-- View -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="view">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>View Application</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form class="form-horizontal" method="POST" >
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
               <div class="row">    
                <div class="col-lg-6">
                    <div class="mt-1">
                        <label class="form-label" for="posposition">Position</label>
                        <input type="text" class="form-control capitalize" id="view_posposition" readonly>
                    </div>
                </div>   

                <div class="col-lg-3">
                    <div class="mt-1">
                        <label class="form-label" for="posjobtype">Job Type</label>
                        <input type="text" class="form-control capitalize" id="view_posjobtype" readonly>
                    </div>
                </div>   

                <div class="col-lg-3">
                    <div class="mt-1">
                        <label class="form-label" for="posbranch">Branch</label>
                        <input type="text" class="form-control capitalize" id="view_posbranch"  readonly>
                    </div>
                </div>   

                <div class="col-lg-12">
                    <div class="mt-3">
                        <label class="form-label" for="fullname">Full Name</label>
                        <input type="text" class="form-control capitalize" id="view_fullname" readonly>
                    </div>
                </div> 

                <div class="col-lg-7">
                    <div class="mt-3">
                        <label class="form-label" for="address">Address</label>
                        <input type="text" class="form-control capitalize" id="view_address" readonly>
                    </div>
                </div> 

                <div class="col-lg-5">
                    <div class="mt-3">
                        <label class="form-label" for="contact">Contact</label>
                        <input type="text" class="form-control" id="view_contact" readonly>
                    </div>
                </div> 

                <div class="col-lg-12">
                    <div class="mt-3">
                        <label class="form-label" for="posemail">Email Address</label>
                        <input type="text" class="form-control" id="view_posemail" readonly>
                    </div>
                </div> 

                <hr class="mt-4">
                <div class="mod-center">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-3">
                            <div class="mt-2">
                                <label class="form-label" for="schedule">Created Date</label>
                                <input type="date" class="form-control mod-center" id="view_created_on" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-2">
                                <label class="form-label" for="schedule">Date Interview</label>
                                <input type="datetime-local" class="form-control mod-center" id="view_schedule" readonly>
                            </div>
                        </div> 
                        <div class="col-lg-3">
                            <div class="mt-2">
                                <label class="form-label" for="stat">Status</label>
                                <input type="text" class="form-control mod-center" id="view_stat" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Layout -->        

    <div class="modal-footer">
       <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>         	
   </div>
</form>
</div>
</div>
</div>
</div>

<!-- Update Photo -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="photo">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize"><b>Update Resume</span></b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form class="form-horizontal needs-validation" method="POST" action="../controller/hr_jobapply_editphoto.php" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="id" name="id">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="file" name="photo_text" accept=".pdf,.doc,.docx" required>
            <div class="invalid-feedback mt-2">
              Please upload a file.
          </div>
          <div class="valid-feedback">
              Looks good!
          </div>
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
