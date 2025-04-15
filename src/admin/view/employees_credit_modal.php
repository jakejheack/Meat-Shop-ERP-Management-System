<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Add Record</b></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/employees_credit_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">    
                    <div class="col-lg-2" style="display: none;">
                        <div class="mt-2">
                           <label class="form-label" for="notes">ID&ensp;</label>
                           <input type="text" class="form-control" id="oxid" name="eid" autocomplete="off" style="text-transform: capitalize;" readonly>

                           <div class="invalid-feedback">
                            Please provide a notes.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="col-lg-8" style="display: none;">
                    <div class="mt-2">
                       <label class="form-label" for="notes">Customer Name&ensp;</label>
                       <input type="text" class="form-control" id="oxempname" name="empname" autocomplete="off" style="text-transform: uppercase;" readonly>

                       <div class="invalid-feedback">
                        Please provide a notes.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="mt-1">
                    <label class="form-label" for="empname">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <select style="text-transform:capitalize" class="form-control dropdownoxmenu" type="text" id="dropdownox" required>

                        <option value="">- SELECT -</option>
                        <?php $sql = "select employees.id as id, firstname as fname, lastname as lname, suffix as sname, sum(amountin) as paid,sum(amountout) as credit,sum(amountout)-sum(amountin) as balance from employees left join employees_credit on employees.id=employees_credit.eid where not firstname=' ' group by firstname order by firstname asc ;";
                        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                            <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['fname'] ?> <?php echo $prow['lname'] ?> <?php echo $prow['sname'] ?>"><?php echo ucwords(strtolower($prow['fname'])) ?> <?php echo ucwords(strtolower($prow['lname'])) ?> <?php echo ucwords(strtolower($prow['sname'])) ?> | ₱<?php echo number_format($prow['balance'],2) ?></option>
                        <?php } ?>
                    </select>

                    <div class="invalid-feedback">
                        Please select customers name.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>   
            <div class="col-lg-4">
                <div class="mt-1">
                    <label class="form-label" for="edate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <input type="date" class="form-control uppercase" id="edate" name="edate" autocomplete="off" required>

                    <div class="invalid-feedback">
                        Please provide a date.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div> 


            <div class="col-lg-4">
                <div class="mt-2">
                    <label class="form-label" for="amountin">Paid&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <div class="input-group">
                        <div class="input-group-text bg-soft-info">IN</div>
                        <input type="number" placeholder="₱" class="form-control" id="amountin" name="amountin" autocomplete="off" required>

                        <div class="invalid-feedback">
                            Please provide a amount IN.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
            </div>   

            <div class="col-lg-4">
                <div class="mt-2">
                    <label class="form-label" for="amountout">Credit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <div class="input-group">
                        <div class="input-group-text bg-soft-danger">OUT</div>
                        <input type="number" placeholder="₱" class="form-control" id="amountout" name="amountout" autocomplete="off" required>

                        <div class="invalid-feedback">
                            Please provide a amount OUT.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
            </div>   
            <div class="col-lg-2">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="branch">Branch</label>
                        <?php if($_SESSION['branch'] == All){?>
                            <select class="form-control capitalize" name="branch" id="branch" autocomplete="off" required>
                             <option value="">- SELECT -</option>
                             <option value="Daet">Daet</option>
                             <option value="Magsaysay">Magsaysay</option>
                             <option value="Yashano">Yashano</option>
                         </select>
                     <?php }elseif($_SESSION['branch'] == Daet){?>
                       <select class="form-control capitalize" name="branch" id="branch" autocomplete="off" required>
                         <option value="">- SELECT -</option>
                         <option value="Daet">Daet</option>
                     </select>
                 <?php }elseif($_SESSION['branch'] == Magsaysay){?>
                   <select class="form-control capitalize" name="branch" id="branch" autocomplete="off" required>
                     <option value="">- SELECT -</option>
                     <option value="Magsaysay">Magsaysay</option>
                 </select>
             <?php }elseif($_SESSION['branch'] == Yashano){?>
               <select class="form-control capitalize" name="branch" id="branch" autocomplete="off" required>
                 <option value="">- SELECT -</option>
                 <option value="Yashano">Yashano</option>
             </select>
         <?php } ?>

         <div class="invalid-feedback">
            Please select a branch.
        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
</div>
</div>
<div class="col-lg-2">
    <div class="mt-2">
        <div class="mb-3">
            <label class="form-label" for="estat">Status</label>
            <select class="form-control capitalize" name="estat" id="estat" autocomplete="off" required>
             <option value="">- SELECT -</option>
             <option value="Complete" class="Enabled">Complete</option>
             <option value="Hold" class="Disabled">Hold</option>
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
<div class="col-lg-4">
    <div class="mt-2">
       <label class="form-label" for="file">Upload</label>
       <input class="mt-2" type="file" name="file" id='photos' autocomplete="off" onChange='getFileNameWithExt(event)'>

       <div style="display: none;">
        <input name="filetext" id='outputfile' value="null" readonly/>
    </div>

    <div class="invalid-feedback">
        Please upload a file.
    </div>
    <div class="valid-feedback">
        Looks good!
    </div>
</div>
</div>

<div class="col-lg-8">
    <div class="mt-2">
       <label class="form-label" for="notes">Notes&ensp;</label>
       <input type="text" class="form-control" id="notes" name="notes" maxlength="250" autocomplete="off" style="text-transform: capitalize;">

       <div class="invalid-feedback">
        Please provide a notes.
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
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title"><b>Edit Record:</b> <code id="edit_transno"></code></h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
       </div>
       <div class="modal-body">
           <form method="POST" action="../controller/employees_credit_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">                            
                     <div class="col-lg-8">
                        <div class="mt-1">
                            <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control uppercase" id="edit_empname"autocomplete="off" readonly>

                            <div class="invalid-feedback">
                                Please select customers name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-4">
                        <div class="mt-1">
                            <label class="form-label" for="edate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="date" class="form-control uppercase" id="edit_edate" name="edate" autocomplete="off" required>

                            <div class="invalid-feedback">
                                Please provide a date.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div> 


                    <div class="col-lg-4">
                        <div class="mt-2">
                            <label class="form-label" for="amountin">Paid&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-info">IN</div>
                                <input type="number" placeholder="₱" class="form-control" id="edit_amountin" name="amountin" autocomplete="off" required>

                                <div class="invalid-feedback">
                                    Please provide a amount IN.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-4">
                        <div class="mt-2">
                            <label class="form-label" for="amountout">Credit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-danger">OUT</div>
                                <input type="number" placeholder="₱" class="form-control" id="edit_amountout" name="amountout" autocomplete="off" required>

                                <div class="invalid-feedback">
                                    Please provide a amount OUT.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-2">
                        <div class="mt-2">
                            <div class="mb-3">
                                <label class="form-label" for="branch">Branch</label>
                                <select class="form-control capitalize" name="branch" id="edit_branch" autocomplete="off" required>
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
                </div>
                <div class="col-lg-2">
                    <div class="mt-2">
                        <div class="mb-3">
                            <label class="form-label" for="estat">Status</label>
                            <select class="form-control capitalize" name="estat" id="edit_estat" autocomplete="off" required>
                             <option value="">- SELECT -</option>
                             <option value="Complete" class="Enabled">Complete</option>
                             <option value="Hold" class="Disabled">Hold</option>
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
                   <label class="form-label" for="notes">Notes&ensp;</label>
                   <input type="text" class="form-control" id="edit_notes" name="notes" autocomplete="off" style="text-transform: capitalize;" maxlength="250">

                   <div class="invalid-feedback">
                    Please provide a notes.
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
           <form class="form-horizontal" method="POST" action="../controller/employees_credit_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE RECORD</p>
                  <h3 id="del_empname" class="bold capitalize"></h3>
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
            <h5 class="modal-title"><b>View Record</b></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    
        </div>
        <div class="modal-body">
           <form class="form-horizontal">
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
                 <div class="row">                  
                     <div class="col-lg-8">
                        <div class="mt-1">
                            <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="text" class="form-control uppercase" id="view_empname" autocomplete="off" readonly>
                        </div>
                    </div> 
                    <div class="col-lg-4">
                        <div class="mt-1">
                            <label class="form-label" for="edate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <input type="date" class="form-control uppercase" id="view_edate" autocomplete="off" readonly>
                        </div>
                    </div> 


                    <div class="col-lg-4">
                        <div class="mt-2">
                            <label class="form-label" for="amountin">Paid&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-info">IN</div>
                                <input type="number" placeholder="₱" class="form-control" id="view_amountin" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-4">
                        <div class="mt-2">
                            <label class="form-label" for="amountout">Credit&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                            <div class="input-group">
                                <div class="input-group-text bg-soft-danger">OUT</div>
                                <input type="number" placeholder="₱" class="form-control" id="view_amountout" autocomplete="off" readonly>
                            </div>
                        </div>
                    </div>   
                    <div class="col-lg-2">
                        <div class="mt-2">
                            <div class="mb-3">
                                <label class="form-label" for="branch">Branch</label>
                                <input type="text" class="form-control capitalize" id="view_branch" autocomplete="off" readonly>

                                <div class="invalid-feedback">
                                    Please select a branch.
                                </div>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-2">
                        <div class="mt-2">
                            <div class="mb-3">
                                <label class="form-label" for="estat">Status</label>
                                <select class="form-control capitalize" name="estat" id="view_estat" autocomplete="off" required>
                                 <option value="">- SELECT -</option>
                                 <option value="Complete" class="Enabled">Complete</option>
                                 <option value="Hold" class="Disabled">Hold</option>
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
                       <label class="form-label" for="notes">Notes&ensp;</label>
                       <input type="text" class="form-control capitalize" id="view_notes" autocomplete="off" readonly>
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

<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="photo">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize"><b>Update File</span></b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form class="form-horizontal needs-validation" method="POST" action="../controller/employees_credit_editfile.php" enctype="multipart/form-data" novalidate>
        <input type="hidden" class="id" name="id">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="file" name="filetext" required>

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