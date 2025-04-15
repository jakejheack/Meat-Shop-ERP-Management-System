
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Add Product</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/today_price_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">   
                    <div class="col-lg-7">
                        <div class="mt-1">
                            <label class="form-label" for="title">Title&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="title" name="title" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a title.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-5">
                        <div class="mt-1">
                            <label class="form-label" for="price">Price&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text">₱</div>
                                <input type="number" class="form-control" id="price" name="price" autocomplete="off" required>

                                <div class="invalid-feedback">
                                    Please provide a price.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="unit">Unit&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select style="text-transform:capitalize" class="form-control" type="text" id="unit" name="unit" required>
                                <option value="">- SELECT -</option>
                                <?php $sql = "select * from units where ex_status='Enabled' order by ex_units asc ;";
                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                    <option value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a units.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  

                    <div class="col-lg-5">
                        <div class="mt-3">
                            <div class="mb-3">
                                <label class="form-label" for="stat">Status</label>
                                <select class="form-control" name="stat" id="stat" autocomplete="off" required>
                                 <option value="">- SELECT -</option>
                                 <option value="Enabled" class="Enabled">Enabled</option>
                                 <option value="Disabled" class="Disabled">Disabled</option>
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
                <div class="col-lg-6">
                    <div class="mt-2">
                       <label class="form-label" for="photo">Upload <i>( 91 X 91 )</i>&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                       <input class="mt-2" type="file" name="photo" id='photo' autocomplete="off" required>

                       <div class="invalid-feedback">
                        Please upload a image.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
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
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Edit Product</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
            <form method="POST" action="../controller/today_price_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">   
                    <div class="col-lg-7">
                        <div class="mt-1">
                            <label class="form-label" for="edit_title">Title&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <input type="text" class="form-control" id="edit_title" name="title" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a title.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-5">
                        <div class="mt-1">
                            <label class="form-label" for="edit_price">Price&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text">₱</div>
                                <input type="number" class="form-control" id="edit_price" name="price" autocomplete="off" required>

                                <div class="invalid-feedback">
                                    Please provide a price.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-7">
                        <div class="mt-3">
                            <label class="form-label" for="edit_unit">Unit&ensp;<abbr class="req mod-required" title="required">*</abbr></label>
                            <select style="text-transform:capitalize" class="form-control" type="text" id="edit_unit" name="unit" required>
                                <option value="" selected>- SELECT -</option>
                                <?php $sql = "select * from units where ex_status='Enabled' order by ex_units asc ;";
                                $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                                    <option value="<?php echo $prow['ex_units'] ?>"><?php echo $prow['ex_units'] ?></option>
                                <?php } ?>
                            </select>

                            <div class="invalid-feedback">
                                Please select a units.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>  

                    <div class="col-lg-5">
                        <div class="mt-3">
                            <div class="mb-3">
                                <label class="form-label" for="edit_stat">Status</label>
                                <select class="form-control" name="stat" id="edit_stat" autocomplete="off" required>
                                 <option value=""selected>- SELECT -</option>
                                 <option value="Enabled" class="Enabled">Enabled</option>
                                 <option value="Disabled" class="Disabled">Disabled</option>
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
           <form class="form-horizontal" method="POST" action="../controller/today_price_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE PRODUCT</p>
                  <h3 id="del_product" class="bold capitalize"></h3>
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

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="editphoto">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize"><b>Update Image</span></b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form class="form-horizontal needs-validation" method="POST" action="../controller/today_price_editphoto.php" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="id" name="id">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="file" name="photo" required>

            <div class="invalid-feedback mt-2">
              Please upload a image.
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