<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Upload File</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../controller/hr_scheduler_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
          <div class="col-lg-12" style="zoom:95%;">
            <div class="row">                            

             <div class="col-lg-5">
              <div class="mt-1">
                <label class="form-label" for="schedDate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <input type="text" name="sdate" class="form-control" value="<?php $date = new DateTime("now", new DateTimeZone('Asia/Manila') ); echo $date->format('Y-m-d');?>" autocomplete="off" style="font-weight: 600;" readonly/>
              </div>
            </div> 
            <div class="col-lg-7">
              <div class="mt-1">
                <label class="form-label" for="title">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <input type="text" class="form-control" id="schedTitle" name="stitle" autocomplete="off" style="text-transform: capitalize;" required>
                <div class="invalid-feedback">
                  Please provide a title.
                </div>
              </div>
            </div>

            <div class="col-lg-5">
              <div class="mt-1">
                <label class="form-label" for="schedBranch">Store&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <select class="form-control" name="sbranch" id="schedBranch"  required>
                  <option value="" selected>- SELECT -</option>
                  <option value="All">All</option>
                  <option value="Magsaysay">Magsaysay</option>
                  <option value="Daet">Daet</option>
                  <option value="Yashano">Yashano</option>
                </select>
                <div class="invalid-feedback">
                  Please choose a store.
                </div>
              </div>
            </div>    



            <div class="col-lg-4">
              <div class="mt-2">
               <label class="form-label" for="photo">Upload&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
               <input type="file" name="photo" id='photos' autocomplete="off" required>
               <div class="invalid-feedback mt-2">
                  Please upload a file.
                </div>
             </div>
           </div>


         </div>
       </div>
       <!-- End Form Layout -->        

       <div class="modal-footer mt-3">
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
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Edit Schedule</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="../controller/hr_scheduler_edit.php" class="form-horizontal needs-validation" novalidate>
          <input type="hidden" class="id" name="id">
          <div class="col-lg-12" style="zoom:95%;">
           <div class="row">   
            <div class="col-lg-5">
              <div class="mt-1">
                <label class="form-label" for="edit_sdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <input type="text" class="form-control" id="edit_sdate" name="sdate" style="font-weight: 600;" autocomplete="off" readonly="">
              </div>
            </div> 
            <div class="col-lg-7">
              <div class="mt-1">
                <label class="form-label" for="edit_sbranch">Store&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <select class="form-control" name="sbranch" id="edit_sbranch"  required>
                  <option value="" disabled selected>- SELECT -</option>
                  <option value="All">All</option>
                  <option value="Magsaysay">Magsaysay</option>
                  <option value="Daet">Daet</option>
                  <option value="Yashano">Yashano</option>
                </select>
                <div class="invalid-feedback">
                  Please choose a store.
                </div>
              </div>
            </div>  

            <div class="col-lg-12">
              <div class="mt-1">
                <label class="form-label" for="edit_stitle">Title&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <input type="text" name="stitle" class="form-control" style="font-weight:600" id="edit_stitle" autocomplete="off" required>
                <div class="invalid-feedback">
                  Please provide a title.
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
        <form class="form-horizontal" method="POST" action="../controller/hr_scheduler_delete.php">
          <input type="hidden" class="id" name="id">
          <div class="text-center">
            <p>DELETE FILE</p>
            <h2 id="del_schedule" class="bold capitalize"></h2>
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

<!-- Update Photo -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="photo">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize"><b>Update File</span></b></h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="form-horizontal needs-validation" method="POST" action="../controller/hr_scheduler_editphoto.php" enctype="multipart/form-data" novalidate>
            <input type="hidden" class="id" name="id">
            <div class="form-group">
              <div class="col-sm-12">
                <input type="file" id="photo" name="photo" required>
                <div class="invalid-feedback mt-2">
                  Please upload a file.
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
