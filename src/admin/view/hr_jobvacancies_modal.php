<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b>Add Vacancies</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
        </div>
        <div class="modal-body">
            <form method="POST" action="../controller/hr_jobvacancies_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12">
                <div class="row">     
                    <div class="col-lg-6">
                        <div class="mt-1">
                            <label class="form-label" for="position">Position&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="position" name="position" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="noe">NoE&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="number" class="form-control" id="noe" name="noe" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a noe.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="branch">Branch&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select type="text"id="branch" name="branch" class="form-control mod-center-left" autocomplete="off" required>
                                <option value="">- SELECT -</option>
                                <option value="Daet">Daet</option>
                                <option value="Magsaysay">Magsaysay</option>
                                <option value="Yashano">Yashano</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a branch.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="priority">Priority&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control mod-center-left" id="priority" name="priority" autocomplete="off" required>
                                <option value="">- SELECT -</option>
                                <option value="Low">Low</option>
                                <option value="High">High</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a priority.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="experience">Experience&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="experience" name="experience" autocomplete="off">

                            <div class="invalid-feedback">
                                Please provide a experience.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="jobtype">Job Type&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control mod-center-left" id="jobtype" name="jobtype" autocomplete="off" required>
                                <option value="">- SELECT -</option>
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Freelancers">Freelancers</option>
                                <option value="Consultants">Consultants</option>
                                <option value="Contractors">Contractors</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a type.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="address">Address&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="address" name="address" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="details">Details&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <textarea type="text" class="form-control" id="details" name="details" autocomplete="off" rows="10"></textarea>

                            <div class="invalid-feedback">
                                Please provide a details.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->        

        <div class="modal-footer">
            <div class="col-lg-2">
                <input type="text" class="form-control mod-hide" id="stat" name="stat" value="Enabled" readonly>
            </div>
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
           <h5 class="modal-title"><b>Edit Vacancies</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/hr_jobvacancies_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">     
                    <div class="col-lg-6">
                        <div class="mt-1">
                            <label class="form-label" for="position">Position&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_position" name="position" autocomplete="off" maxlength="250" required>

                            <div class="invalid-feedback">
                                Please provide a name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="noe">NoE&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="number" class="form-control" id="edit_noe" name="noe" autocomplete="off" required>
                            
                            <div class="invalid-feedback">
                                Please provide a noe.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="branch">Branch&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select type="text"id="edit_branch" name="branch" class="form-control mod-center-left" autocomplete="off" required>
                                <option value=""selected>- SELECT -</option>
                                <option value="Daet">Daet</option>
                                <option value="Magsaysay">Magsaysay</option>
                                <option value="Yashano">Yashano</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a branch.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="priority">Priority&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control mod-center-left" id="edit_priority" name="priority" autocomplete="off" required>
                                <option value=""selected>- SELECT -</option>
                                <option value="Low">Low</option>
                                <option value="High">High</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a priority.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="experience">Experience&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_experience" name="experience" autocomplete="off">

                            <div class="invalid-feedback">
                                Please provide a experience.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="jobtype">Job Type&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control mod-center-left" id="edit_jobtype" name="jobtype" autocomplete="off" required>
                                <option value=""selected>- SELECT -</option>
                                <option value="Full-Time">Full-Time</option>
                                <option value="Part-Time">Part-Time</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Freelancers">Freelancers</option>
                                <option value="Consultants">Consultants</option>
                                <option value="Contractors">Contractors</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a type.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="address">Address&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_address" name="address" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="details">Details&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <textarea type="text" class="form-control" id="edit_details" name="details" autocomplete="off" rows="10"></textarea>

                            <div class="invalid-feedback">
                                Please provide a details.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="stat">Status&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select class="form-control mod-center-left" id="edit_stat" name="stat" autocomplete="off" required>
                                <option value=""selected>- SELECT -</option>
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
           <form class="form-horizontal" method="POST" action="../controller/hr_jobvacancies_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE VACANCIES</p>
                  <h3 id="del_position" class="bold capitalize"></h3>
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
           <h5 class="modal-title"><b>Job Vacancies</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    
       </div>
       <div class="modal-body">
           <form class="form-horizontal" method="POST" >
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">     
                    <div class="col-lg-6">
                        <div class="mt-1">
                            <label class="form-label" for="position">Position</label>
                            <input type="text" class="form-control" id="view_position" readonly>
                        </div>
                    </div>   
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="noe" title="number of employees">NoE</label>
                             <input type="text" class="form-control" id="view_noe" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="branch">Branch</label>
                             <input type="text" class="form-control" id="view_branch" readonly>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="priority">Priority</label>
                            <input type="text" class="form-control" id="view_priority" readonly>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="experience">Experience</label>
                            <input type="text" class="form-control" id="view_experience" readonly>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="jobtype">Job Type</label>
                            <input type="text" class="form-control" id="view_jobtype" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="address">Address</label>
                           <input type="text" class="form-control capitalize" id="view_address" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="details">Details</label>
                            <textarea type="text" class="form-control" id="view_details" name="details" autocomplete="off" rows="10" readonly></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="stat">Status</label>
                            <input type="text" class="form-control" id="view_stat" readonly>
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
