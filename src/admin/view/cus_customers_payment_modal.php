<!-- CREDIT -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Add Credit</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body mod-overflow">
             <form method="POST" action="../controller/cus_customers_payment_addcredit.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12">
                <div class="row">    
                    <div class="col-lg-2" style="display: none;">
                        <div class="mt-2">
                         <label class="form-label" for="notes">ID&ensp;</label>
                         <input type="text" class="form-control" id="oxid" name="cusid" autocomplete="off" style="text-transform: capitalize;" readonly>

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
                     <input type="text" class="form-control" id="oxcusname" name="cusname" autocomplete="off" readonly>

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
                    <label class="form-label" for="caName">Customer Name&ensp;<abbr class="mod-required" title="required">*</abbr></label>
                    <select class="form-control dropdownoxmenu mod-center-left" type="text" id="dropdownox" required>
                        <option value="">- SELECT -</option>
                        <?php $sql = "select customers_profile.id as id, cpName as cname,sum(amountin) as paid,sum(amountout) as credit,sum(amountout)-sum(amountin) as balance from customers_profile left join customers_status on customers_profile.id=customers_status.cusid where not cpName=' ' group by cpName order by cpName asc ;";
                        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                            <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['cname'] ?>"><?php echo ucwords(strtolower($prow['cname'])) ?> | ₱<?php echo number_format($prow['balance'],2) ?></option>
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
                    <label class="form-label" for="cdate">Date&ensp;<abbr class="mod-required" title="required">*</abbr></label>
                    <input type="text" class="form-control uppercase" id="cdate" name="cdate" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" readonly>

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
                    <div class="mb-3">
                        <label class="form-label" for="branch">Branch&ensp;<abbr class="mod-required" title="required">*</abbr></label>
                        <?php if($_SESSION['branch'] == All){?>
                            <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                               <option value="">- SELECT -</option>
                               <option value="Daet">Daet</option>
                               <option value="Magsaysay">Magsaysay</option>
                               <option value="Yashano">Yashano</option>
                           </select>
                       <?php }elseif($_SESSION['branch'] == Daet){?>
                         <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                           <option value="">- SELECT -</option>
                           <option value="Daet">Daet</option>
                       </select>
                   <?php }elseif($_SESSION['branch'] == Magsaysay){?>
                     <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                       <option value="">- SELECT -</option>
                       <option value="Magsaysay">Magsaysay</option>
                   </select>
               <?php }elseif($_SESSION['branch'] == Yashano){?>
                 <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
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

<div class="col-lg-4">
    <div class="mt-2">
        <label class="form-label" for="amountout">Credit&ensp;<abbr class="mod-required" title="required">*</abbr></label>
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

<div class="col-lg-12">
    <div class="mt-2">
     <label class="form-label" for="notes">Notes&ensp;</label>
     <input type="text" class="form-control" id="notes" name="notes" maxlength="250" autocomplete="off">

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
</div>       

<div class="modal-footer">
    <div class="col-2 hidedisplay">
        <input type="text" class="form-control" name="xstat" value="Incomplete">
    </div>
    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
    <button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Save </button>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- PAID -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Add Paid</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body mod-overflow">
             <form method="POST" action="../controller/cus_customers_payment_addpaid.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
              <div class="col-lg-12" style="zoom:95%;">
                <div class="row">    
                    <div class="col-lg-2" style="display: none;">
                        <div class="mt-2">
                         <label class="form-label" for="notes">ID&ensp;</label>
                         <input type="text" class="form-control" id="oxid11" name="cusid" autocomplete="off" style="text-transform: capitalize;" readonly>

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
                     <input type="text" class="form-control" id="oxcusname11" name="cusname" autocomplete="off" readonly>

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
                    <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <select class="form-control dropdownoxmenu11 mod-center-left" type="text" id="dropdownox" required>
                        <option value="">- SELECT -</option>
                        <?php $sql = "select customers_profile.id as id, cpName as cname,sum(amountin) as paid,sum(amountout) as credit,sum(amountout)-sum(amountin) as balance from customers_profile left join customers_status on customers_profile.id=customers_status.cusid where not cpName=' ' group by cpName order by cpName asc ;";
                        $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                            <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['cname'] ?>"><?php echo ucwords(strtolower($prow['cname'])) ?> | ₱<?php echo number_format($prow['balance'],2) ?></option>
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
                    <label class="form-label" for="cdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                    <input type="text" class="form-control uppercase" id="cdate" name="cdate" autocomplete="off" value="<?php echo date('Y-m-d'); ?>" readonly>

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
                    <div class="mb-3">
                        <label class="form-label" for="branch">Branch</label>
                        <?php if($_SESSION['branch'] == All){?>
                            <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                               <option value="">- SELECT -</option>
                               <option value="Daet">Daet</option>
                               <option value="Magsaysay">Magsaysay</option>
                               <option value="Yashano">Yashano</option>
                           </select>
                       <?php }elseif($_SESSION['branch'] == Daet){?>
                         <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                           <option value="">- SELECT -</option>
                           <option value="Daet">Daet</option>
                       </select>
                   <?php }elseif($_SESSION['branch'] == Magsaysay){?>
                     <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
                       <option value="">- SELECT -</option>
                       <option value="Magsaysay">Magsaysay</option>
                   </select>
               <?php }elseif($_SESSION['branch'] == Yashano){?>
                 <select class="form-control capitalize mod-center-left" name="branch" id="branch" autocomplete="off" required>
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

<div class="col-lg-12">
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
</div>
<div class="modal-footer">
   <div class="col-2 hidedisplay">
    <input type="text" class="form-control" name="xstat" value="Complete">
</div>
<button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
<button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Save </button>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- EDIT CREDIT -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="editcredit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Edit Transaction</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
         </div>
         <div class="modal-body">
             <form method="POST" action="../controller/cus_customers_payment_editcredit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12">
               <div class="row">   
                <div class="col-lg-4">
                    <div class="mt-1">
                        <label class="form-label" for="transno">Transaction Number</label>
                        <input type="text" class="form-control capitalize mod-center" id="edit_transno" autocomplete="off" readonly>

                        <div class="invalid-feedback">
                            Please provide transaction number.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>                            
                   <div class="col-lg-8">
                    <div class="mt-1">
                        <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize mod-center" id="edit_cusname"autocomplete="off" readonly>

                        <div class="invalid-feedback">
                            Please select customers name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3">
                    <div class="mt-2">
                        <label class="form-label" for="cdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="date" class="form-control uppercase" id="edit_cdate" name="cdate" autocomplete="off" required>

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
                        <div class="mb-3">
                            <label class="form-label" for="branch">Branch</label>
                            <select class="form-control capitalize mod-center-left" name="branch" id="edit_branch" autocomplete="off" required>
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

            <div class="col-lg-3">
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

            <div class="col-lg-3">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="cpstat">Type</label>
                        <input type="text" class="form-control capitalize mod-center" id="edit_cpstat" name="notes" readonly>

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
                 <input type="text" class="form-control capitalize" id="edit_notes" name="notes" autocomplete="off" maxlength="250">

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


<!-- EDIT PAID -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="editpaid">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Edit Transaction</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
         </div>
         <div class="modal-body">
             <form method="POST" action="../controller/cus_customers_payment_editpaid.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12">
               <div class="row">   
               <div class="col-lg-4">
                    <div class="mt-1">
                        <label class="form-label" for="caName">Transaction Number</label>
                        <input type="text" class="form-control capitalize mod-center" id="edit_transno2"autocomplete="off" readonly>

                        <div class="invalid-feedback">
                            Please provide a transaction number.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>                            
                   <div class="col-lg-8">
                    <div class="mt-1">
                        <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="text" class="form-control capitalize mod-center" id="edit_cusname2"autocomplete="off" readonly>

                        <div class="invalid-feedback">
                            Please select customers name.
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3">
                    <div class="mt-2">
                        <label class="form-label" for="cdate">Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                        <input type="date" class="form-control uppercase" id="edit_cdate2" name="cdate" autocomplete="off" required>

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
                        <div class="mb-3">
                            <label class="form-label" for="branch">Branch</label>
                            <select class="form-control capitalize mod-center-left" name="branch" id="edit_branch2" autocomplete="off" required>
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

            <div class="col-lg-3">
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

            <div class="col-lg-3">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="cpstat">Status</label>
                        <input type="text" class="form-control mod-center" id="edit_cpstat2" name="notes" readonly>

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
                 <input type="text" class="form-control capitalize" id="edit_notes2" name="notes" autocomplete="off"  maxlength="250">

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
             <form class="form-horizontal" method="POST" action="../controller/cus_customers_payment_delete.php">
              <input type="hidden" class="id" name="id">
              <div class="text-center">
                  <p>DELETE RECORD</p>
                  <h3 id="del_cusname" class="bold capitalize"></h3>
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

<!-- VIEW CREDIT -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="viewcredit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title"><b>View Transaction</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    
        </div>
        <div class="modal-body">
         <form class="form-horizontal">
          <input type="hidden" class="id" name="id">
          <div class="col-lg-12">
           <div class="row">    
           <div class="col-lg-4">
                <div class="mt-1">
                    <label class="form-label" for="tansno">Transaction Number</label>
                    <input type="text" class="form-control uppercase mod-center" id="view_transno" readonly>
                </div>
            </div>                          
            <div class="col-lg-8">
                <div class="mt-1">
                    <label class="form-label" for="caName">Customer Name</label>
                    <input type="text" class="form-control capitalize mod-center" id="view_cusname" readonly>
                </div>
            </div>   
            <div class="col-lg-3">
                <div class="mt-1">
                    <label class="form-label" for="cdate">Date</label>
                    <input type="text" class="form-control capitalize mod-center" id="view_cdate" readonly>
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="branch">Branch</label>
                        <input type="text" class="form-control capitalize mod-center" id="view_branch" readonly>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-2">
                    <label class="form-label" for="amountout">Credit</label>
                    <div class="input-group">
                        <div class="input-group-text bg-soft-danger">OUT</div>
                        <input type="text" class="form-control capitalize" id="view_amountout" readonly>
                    </div>
                </div>
            </div>   

            <div class="col-lg-2">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="cpstat">Type</label>
                        <input type="text" class="form-control capitalize mod-center" id="view_cpstat" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mt-2">
                 <label class="form-label" for="notes">Notes&ensp;</label>
                 <input type="text" class="form-control capitalize" id="view_notes" readonly>
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

<!-- VIEW PAID -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="viewpaid">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
            <h5 class="modal-title"><b>View Transaction</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>    
        </div>
        <div class="modal-body">
         <form class="form-horizontal">
          <input type="hidden" class="id" name="id">
          <div class="col-lg-12">
           <div class="row">    
           <div class="col-lg-4">
                <div class="mt-1">
                    <label class="form-label" for="tansno">Transaction Number</label>
                    <input type="text" class="form-control uppercase mod-center" id="view_transno2" readonly>
                </div>
            </div>                          
            <div class="col-lg-8">
                <div class="mt-1">
                    <label class="form-label" for="caName">Customer Name</label>
                    <input type="text" class="form-control capitalize mod-center" id="view_cusname2" readonly>
                </div>
            </div>   
            <div class="col-lg-3">
                <div class="mt-1">
                    <label class="form-label" for="cdate">Date</label>
                    <input type="text" class="form-control capitalize mod-center" id="view_cdate2" readonly>
                </div>
            </div> 
            <div class="col-lg-3">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="branch">Branch</label>
                        <input type="text" class="form-control capitalize mod-center" id="view_branch2" readonly>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="mt-2">
                    <label class="form-label" for="amountout">PAID</label>
                    <div class="input-group">
                        <div class="input-group-text bg-soft-info">IN</div>
                        <input type="text" class="form-control capitalize" id="view_amountin" readonly>
                    </div>
                </div>
            </div>   

            <div class="col-lg-2">
                <div class="mt-2">
                    <div class="mb-3">
                        <label class="form-label" for="cpstat">Type</label>
                        <input type="text" class="form-control capitalize mod-center" id="view_cpstat2" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mt-2">
                 <label class="form-label" for="notes">Notes&ensp;</label>
                 <input type="text" class="form-control capitalize" id="view_notes2" readonly>
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
      <form class="form-horizontal needs-validation" method="POST" action="../controller/cus_customers_payment_editfile.php" enctype="multipart/form-data" novalidate>
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



<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="filter">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title"><b>Sort Records</b></h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  
         </div>
         <div class="modal-body">
             <form method="POST" action="../controller/cus_customers_sort_edit.php" class="form-horizontal needs-validation" novalidate>
              <input type="hidden" class="id" name="id">
              <div class="col-lg-12" style="zoom:95%;">
               <div class="row">    
                <div class="col-lg-3">
                    <div class="mt-2">
                     <label class="form-label" for="notes">ID&ensp;</label>
                     <input type="text" class="form-control" id="oxid2" name="sortid" autocomplete="off" style="text-transform: capitalize;" readonly>

                     <div class="invalid-feedback">
                        Please provide a notes.
                    </div>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>

            <div class="col-lg-9" >
                <div class="mt-2">
                 <label class="form-label" for="notes">Customer Name&ensp;</label>
                 <input type="text" class="form-control" id="oxcusname2" name="sortname" autocomplete="off" readonly>

                 <div class="invalid-feedback">
                    Please provide a notes.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="mt-3">
                <label class="form-label" for="caName">Customer Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                <select class="form-control dropdownoxmenu2 mod-center-left" type="text" id="dropdownox" required>
                    <option value="">- SELECT -</option>
                    <?php $sql = "select customers_profile.id as id, cpName as cname from customers_profile left join customers_status on customers_profile.id=customers_status.cusid where not cpName=' ' group by cpName order by cpName asc ;";
                    $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?>
                        <option value="<?php echo $prow['id'] ?>{}<?php echo $prow['cname'] ?>"><?php echo ucwords(strtolower($prow['cname'])) ?></option>
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
    </div>
</div>      

<div class="modal-footer">
   <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
   <button type="submit" class="btn btn-primary btn-flat" name="search"><i class="mdi mdi-magnify"></i> Search</button>                
</div>
</form>
</div>
</div>
</div>
</div>