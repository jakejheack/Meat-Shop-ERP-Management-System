<!-- Add -->
 <div class="modal fade bs-example-modal-center " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addnew">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          	<div class="modal-header">
            	<h5 class="modal-title"><b>Add Logs</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/ex_logs_add.php" enctype="multipart/form-data">
          		  <div class="col-lg-12" style="zoom:95%;">
                        <div class="row">                            
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="logsDate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="date" class="form-control uppercase" id="logsDate" name="logsDate" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="logsTime">Time&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="time" class="form-control uppercase" id="logsTime" name="logsTime" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-1">
                                        <label class="form-label" for="logsTitle">Title Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="logsTitle" name="logsTitle" autocomplete="off" required>
                                    </div>
                                </div>                           
                                <div class="col-lg-12">
                                    <div class="mt-2">
                                        <label class="form-label" for="logsFile">Web Url&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="logsFile" name="logsFile" autocomplete="off" required>
                                    </div>
                                    
                              </div>
                             <div class="col-lg-8">
                                    <div class="mt-2">
                                        <label class="form-label" for="logsDesc">Description&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="logsDesc" name="logsDesc" autocomplete="off" required>
                                    </div>
                                </div>                               
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="logsStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="logsStatus" id="logsStatus" autocomplete="off" required>
                                            <option value="" selected> -- SELECT -- </option>
                                            <option value="Complete">Complete</option>
                                            <option value="Ongoing">Ongoing</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
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
 <div class="modal fade bs-example-modal-center " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          	<div class="modal-header">
            	<h5 class="modal-title"><b>Edit Logs</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/ex_logs_edit.php">
            		<input type="hidden" class="id" name="id">
          		  <div class="col-lg-12" style="zoom:95%;">
                        <div class="row">                            
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_logsDate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="date" class="form-control uppercase" id="edit_logsDate" name="logsDate" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_logsTime">Time&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="time" class="form-control uppercase" id="edit_logsTime" name="logsTime" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_logsTitle">Title Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="edit_logsTitle" name="logsTitle" autocomplete="off" required>
                                    </div>
                                </div>                           
                                <div class="col-lg-12">
                                    <div class="mt-2">
                                        <label class="form-label" for="edit_logsFile">Web Url&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="edit_logsFile" name="logsFile" autocomplete="off" required>
                                    </div>
                                    
                              </div>
                             <div class="col-lg-8">
                                    <div class="mt-2">
                                        <label class="form-label" for="edit_logsDesc">Description&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control" id="edit_logsDesc" name="logsDesc" autocomplete="off" required>
                                    </div>
                                </div>                               
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_logsStatus">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="logsStatus" id="edit_logsStatus" autocomplete="off" required>
                                            <option value="" selected> -- SELECT -- </option>
                                            <option value="Complete">Complete</option>
                                            <option value="Ongoing">Ongoing</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
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
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          	<div class="modal-header">
                <h5 class="modal-title"><b>Deleting...</b></h5>
            	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>             	
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="../controller/ex_logs_delete.php">
            		<input type="hidden" class="id" name="id">
            		<div class="text-center">
	                	<p>DELETE LOGS</p>
	                	<h5 id="del_logs" class="bold"></h5>
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

