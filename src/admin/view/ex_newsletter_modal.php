<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header"><h5><b>Newsletter</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
     </div>
     <div class="modal-body">
       <form method="POST" action="../controller/ex_newsletter_add.php" class="form-horizontal needs-validation" novalidate>
        <div class="col-lg-12">
         <div class="row">          
          <div class="col-lg-12">
            <div class="mt-1">
              <label class="form-label" for="newsemail">Email</label>
              <input type="email" class="form-control" id="newsemail" name="newsemail" autocomplete="off" required>
              <div class="invalid-feedback">
                Please provide a email.
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
      <button type="submit" class="btn btn-primary" name="add"><i class="mdi mdi-database-plus"></i> Save </button>
    </div>
  </form>
</div>
</div>
</div>
</div>

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
  <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
     <div class="modal-header"><h5><b>Newsletter</b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
     </div>
     <div class="modal-body">
       <form method="POST" action="../controller/ex_newsletter_edit.php" class="form-horizontal needs-validation" novalidate>
        <input type="hidden" class="id" name="id">
        <div class="col-lg-12">
         <div class="row">      
          <div class="col-lg-12">
            <div class="mt-1">
              <label class="form-label" for="newsemail">Email</label>
              <input type="email" class="form-control" id="edit_newsemail" name="newsemail" autocomplete="off" required>
              <div class="invalid-feedback">
                Please provide a email.
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
      <div class="col-4">
        <input type="text" class="form-control mod-hide" value="Read" name="webmesStatus" readonly>
      </div>
      <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
      <button type="submit" class="btn btn-warning btn-flat" name="edit"><i class="mdi mdi-database-plus"></i> Update</button>            	
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
       <form class="form-horizontal" method="POST" action="../controller/ex_newsletter_delete.php">
        <input type="hidden" class="id" name="id">
        <div class="text-center">
          <p>DELETE EMAIL</p>
          <h3 id="del_newsemail" class="bold"></h3>
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

