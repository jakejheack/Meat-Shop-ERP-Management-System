<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header"><h5><b>Message</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/ex_webmessage_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">      
                    <div class="col-lg-2">
                        <div class="mt-1">
                            <label class="form-label" for="created_on">Date</label>
                            <input type="text" class="form-control uppercase" id="edit_created_on" name="created_on" autocomplete="off" readonly>
                        </div>
                    </div>                       
                    <div class="col-lg-5">
                        <div class="mt-1">
                            <label class="form-label" for="webmesName">Name</label>
                            <input type="text" class="form-control capitalize" id="edit_webmesName" name="webmesName" autocomplete="off" readonly>
                        </div>
                    </div>   
                    <div class="col-lg-5">
                        <div class="mt-1">
                            <label class="form-label" for="webmesEmail">Email</label>
                            <input type="text" class="form-control" id="edit_webmesEmail" name="webmesEmail" autocomplete="off" readonly>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <label class="form-label" for="webmesText">Message</label>
                            <textarea type="text" class="form-control" id="edit_webmesText" name="webmesText" rows="15" readonly></textarea> 
                        </div>
                    </div>
                </div>   
            </div>
        </div>       

        <div class="modal-footer">
            <div class="col-4">
                <input type="text" class="form-control mod-hide" value="Read" name="webmesStatus" readonly>
           </div>
           <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
           <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="mdi mdi-check"></i> Mark as Read</button>            	
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
           <form class="form-horizontal" method="POST" action="../controller/ex_webmessage_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE MESSAGE</p>
                  <h3 id="del_message" class="bold capitalize"></h3>
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
