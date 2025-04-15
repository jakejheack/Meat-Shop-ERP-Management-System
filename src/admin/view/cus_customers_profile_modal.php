<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Add Customer Info</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/cus_customers_profile_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">      
                    <div class="col-lg-9">
                        <div class="mt-1">
                            <label class="form-label" for="cpName">Customer Name&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="cpName" name="cpName" autocomplete="off" style="text-transform: capitalize;" maxlength="35" required>

                            <div class="invalid-feedback">
                                Please provide a name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-3">
                        <div class="mt-1">
                            <label class="form-label" for="cpTin">TIN #</label>
                            <input type="text" class="form-control" id="cpTin" name="cpTin" autocomplete="off">

                            <div class="invalid-feedback">
                                Please provide a tin.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="cpContacts">Contact Number&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="cpContacts" name="cpContacts" autocomplete="off" maxlength="25" required>

                            <div class="invalid-feedback">
                                Please provide a contact.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="cpEmail">Email Address</label>
                            <input type="email" class="form-control" id="cpEmail" name="cpEmail" autocomplete="off">

                            <div class="invalid-feedback">
                                Please provide a contact.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <div class="mb-3">
                                <label class="form-label" for="cpType">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                <select class="form-control mod-center-left" name="cpType" id="cpType" autocomplete="off" required>
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

                    <div class="col-lg-6 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="cpAddress">Address</label>
                            <input type="text" class="form-control" id="cpAddress" name="cpAddress" autocomplete="off">

                            <div class="invalid-feedback">
                                Please provide a address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <label class="form-label" for="cplimitAmount">Amount Limit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="number" class="form-control" id="cplimitAmount" name="cplimitAmount" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a amount.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 

                    <div class="col-lg-3 mt-2">
                        <div class="mt-2">
                            <div class="mb-3">
                                <label class="form-label" for="cpStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                <select class="form-control mod-center-left" name="cpStatus" id="cpStatus" autocomplete="off" required>
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
                </div>
            </div>      
            
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Save </button>
            </div>
        </form>
    </div>
</div>
</div>
</div>


<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Edit Customer Info</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
           <div class="modal-body">
               <form method="POST" action="../controller/cus_customers_profile_edit.php" class="form-horizontal needs-validation" novalidate>
                  <input type="hidden" class="id" name="id">
                  <div class="col-lg-12" style="zoom:95%;">
                     <div class="row">                            
                        <div class="col-lg-9">
                            <div class="mt-1">
                                <label class="form-label" for="edit_cpName">Customer Name&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                                <input type="text" class="form-control" id="edit_cpName" name="cpName" autocomplete="off" maxlength="35" required>

                                <div class="invalid-feedback">
                                    Please provide a name.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>   
                        <div class="col-lg-3">
                            <div class="mt-1">
                                <label class="form-label" for="edit_cpTin">TIN #</label>
                                <input type="text" class="form-control" id="edit_cpTin" name="cpTin" autocomplete="off">

                                <div class="invalid-feedback">
                                    Please provide a tin.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-2">
                            <div class="mt-2">
                                <label class="form-label" for="edit_cpContacts">Contact Number&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                                <input type="text" class="form-control" id="edit_cpContacts" name="cpContacts" autocomplete="off" maxlength="25" required>

                                <div class="invalid-feedback">
                                    Please provide a contact.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 mt-2">
                            <div class="mt-2">
                                <label class="form-label" for="edit_cpEmail">Email Address</label>
                                <input type="email" class="form-control" id="edit_cpEmail" name="cpEmail" autocomplete="off">

                                <div class="invalid-feedback">
                                    Please provide a contact.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-2">
                            <div class="mt-2">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_cpType">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control mod-center-left" name="cpType" id="edit_cpType" autocomplete="off" required>
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

                        <div class="col-lg-6 mt-2">
                            <div class="mt-2">
                                <label class="form-label" for="edit_cpAddress">Address</label>
                                <input type="text" class="form-control" id="edit_cpAddress" name="cpAddress" autocomplete="off">

                                <div class="invalid-feedback">
                                    Please provide a address.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mt-2">
                            <div class="mt-2">
                                <label class="form-label" for="edit_cplimitAmount">Amount Limit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                <input type="number" class="form-control" id="edit_cplimitAmount" name="cplimitAmount" autocomplete="off" required>

                                <div class="invalid-feedback">
                                    Please provide a amount.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-3 mt-2">
                            <div class="mt-2">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_cpStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control mod-center-left" name="cpStatus" id="edit_cpStatus" autocomplete="off" required>
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
                    </div>
                </div>    

                <div class="modal-footer">
                 <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                 <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="mdi mdi-database-refresh"></i> Update</button>            	
             </div>
         </form>
     </div>
 </div>
</div>
</div>

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>        	
       </div>
       <div class="modal-body">
           <form class="form-horizontal" method="POST" action="../controller/cus_customers_profile_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE CUSTOMER INFO</p>
                  <h3 id="del_customersProfile" class="bold capitalize"></h3>
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

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="view">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Customer Info</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <form class="form-horizontal" method="POST" >
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">                            
                   <div class="col-lg-9">
                    <div class="mt-1">
                        <label class="form-label" for="view_cpName">Customer Name&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize" id="view_cpName" readonly>

                        <div class="invalid-feedback">
                            Please provide a name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3">
                    <div class="mt-1">
                        <label class="form-label" for="view_cpTin">TIN #</label>
                        <input type="text" class="form-control" id="view_cpTin" readonly>

                        <div class="invalid-feedback">
                            Please provide a tin.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="view_cpContacts">Contact Number</label>
                        <input type="text" class="form-control" id="view_cpContacts" readonly>

                        <div class="invalid-feedback">
                            Please provide a contact.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="view_cpEmail">Email Address</label>
                        <input type="email" class="form-control" id="view_cpEmail" readonly>

                        <div class="invalid-feedback">
                            Please provide a contact.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-2">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="view_cpType">Type&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="email" class="form-control" id="view_cpType" readonly>

                            <div class="invalid-feedback">
                                Please select a type.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-6 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="view_cpAddress">Address</label>
                        <input type="text" class="form-control capitalize" id="view_cpAddress" readonly>

                        <div class="invalid-feedback">
                            Please provide a address.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mt-2">
                    <div class="mt-2">
                        <label class="form-label" for="view_cplimitAmount">Amount Limit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="number" class="form-control" id="view_cplimitAmount" readonly>

                        <div class="invalid-feedback">
                            Please provide a amount.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div> 

                <div class="col-lg-3 mt-2">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="view_cpStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="view_cpStatus" readonly>

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

        <div class="modal-footer">
         <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>         	
     </div>
 </form>
</div>
</div>
</div>
</div>
