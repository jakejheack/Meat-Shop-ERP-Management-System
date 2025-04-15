<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Add Profile</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
         </div>
             <div class="modal-body">
             <form method="POST" action="../controller/pro_distprofile_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">      
                   <div class="col-lg-8">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileName">Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize" name="sd_profileName" autocomplete="off" maxlength="250" required>

                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   
                <div class="col-lg-4">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileContacts">Contact</label>
                        <input type="number" class="form-control" name="sd_profileContacts" maxlength="50" autocomplete="off">

                        <div class="invalid-feedback">
                            Please provide a contact.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileAddress">Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize" name="sd_profileAddress" maxlength="250" autocomplete="off" required>

                        <div class="invalid-feedback">
                            Please provide a address.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileEmail">Email Addres</label>
                        <input type="email" class="form-control" maxlength="250" name="sd_profileEmail" autocomplete="off">

                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileCategory">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <select type="text" name="sd_profileCategory" class="form-control" autocomplete="off" required>
                            <option value="" selected>- SELECT -</option>
                            <?php
                            $sql = "SELECT * FROM supplydist_category ORDER BY ex_sdCategory ASC;";
                            $query = $conn->query($sql);
                            while($prow = $query->fetch_assoc()){
                                echo "
                                <option value='".$prow['ex_sdCategory']."'>".utf8_encode(ucwords(strtolower($prow['ex_sdCategory'])))."</option>
                                ";
                            }
                            ?>
                        </select>

                        <div class="invalid-feedback">
                            Please provide a category.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   

                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileType">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" name="sd_profileType" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <option value="Business">Business</option>
                                <option value="Personal">Personal</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a type.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" name="sd_profileStatus" autocomplete="off" required>
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
                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileBank">Bank Details</label>
                        <textarea type="text" class="form-control" name="sd_profileBank" autocomplete="off" maxlength="250"></textarea>

                        <div class="invalid-feedback">
                            Please provide a bank details.
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Edit Profile</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
         </div>
         <div class="modal-body">
             <form method="POST" action="../controller/pro_distprofile_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
               <div class="row">      
                   <div class="col-lg-8">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileName">Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize" id="edit_sd_profileName" name="sd_profileName" autocomplete="off" maxlength="250" required>

                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   
                <div class="col-lg-4">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileContacts">Contact</label>
                        <input type="number" class="form-control" id="edit_sd_profileContacts" name="sd_profileContacts" maxlength="50" autocomplete="off">

                        <div class="invalid-feedback">
                            Please provide a contact.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileAddress">Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize" id="edit_sd_profileAddress" name="sd_profileAddress" maxlength="250" autocomplete="off" required>

                        <div class="invalid-feedback">
                            Please provide a address.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileEmail">Email Addres</label>
                        <input type="email" class="form-control" maxlength="250" id="edit_sd_profileEmail" name="sd_profileEmail" autocomplete="off">

                        <div class="invalid-feedback">
                            Please provide a email.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileCategory">Category&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <select class="form-control capitalize" name="sd_profileCategory" id="edit_sd_profileCategory" autocomplete="off" required>
                            <option value="" selected>- SELECT -</option>
                            <?php
                            $sql = "SELECT * FROM supplydist_category ORDER BY ex_sdCategory ASC;";
                            $query = $conn->query($sql);
                            while($prow = $query->fetch_assoc()){
                                echo "
                                <option value='".$prow['ex_sdCategory']."'>".utf8_encode(ucwords(strtolower($prow['ex_sdCategory'])))."</option>
                                ";
                            }
                            ?>
                        </select>

                        <div class="invalid-feedback">
                            Please provide a category.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   

                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileType">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" id="edit_sd_profileType" name="sd_profileType" autocomplete="off" required>
                                <option value="" selected>- SELECT -</option>
                                <option value="Business">Business</option>
                                <option value="Personal">Personal</option>
                            </select>

                            <div class="invalid-feedback">
                                Please select a type.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <select class="form-control" id="edit_sd_profileStatus" name="sd_profileStatus" autocomplete="off" required>
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
                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileBank">Bank Details</label>
                        <textarea type="text" class="form-control" id="edit_sd_profileBank" name="sd_profileBank" autocomplete="off" maxlength="250"></textarea>

                        <div class="invalid-feedback">
                            Please provide a bank details.
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
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>        	
         </div>
         <div class="modal-body">
             <form class="form-horizontal" method="POST" action="../controller/pro_distprofile_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE PROFILE</p>
                  <h3 id="del_profile" class="bold capitalize"></h3>
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
             <h5 class="modal-title"><b>View Profile</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    
         </div>
         <div class="modal-body">
             <form class="form-horizontal">
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                  <div class="row">      
                   <div class="col-lg-8">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileName">Name</label>
                        <input type="text" class="form-control capitalize" id="view_sd_profileName" readonly>
                    </div>
                </div>   
                <div class="col-lg-4">
                    <div class="mt-1">
                        <label class="form-label" for="sd_profileContacts">Contact</label>
                        <input type="number" class="form-control" id="view_sd_profileContacts"  readonly>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileAddress">Address</label>
                        <input type="text" class="form-control capitalize" id="view_sd_profileAddress" readonly>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileEmail">Email Addres</label>
                        <input type="email" class="form-control" id="view_sd_profileEmail" readonly>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-2">
                        <label class="form-label" for="sd_profileCategory">Category</label>
                        <input type="email" class="form-control" id="view_sd_profileCategory" readonly>
                    </div>
                </div>   
                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileType">Type</label>
                            <input type="text" class="form-control" id="view_sd_profileType" readonly>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-3">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileStatus">Status</label>
                            <input type="text" class="form-control" id="view_sd_profileStatus" readonly>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-12">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="sd_profileBank">Bank Details</label>
                            <textarea type="text" class="form-control" id="view_sd_profileBank" readonly></textarea>
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
