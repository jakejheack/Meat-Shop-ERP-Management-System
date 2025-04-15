<!-- 12th CASH REMIT --> 
<?php if ($setcashremit) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapseremitName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Cash Remit</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setcashremitin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapseremitIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['remitin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="remitin" id="total_amount_remitin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['remitin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>     

        <!-- Out -->
        <?php if ($setcashremitout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapseremitOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="remitout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['remitout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="remitout" id="total_amount_remitout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['remitout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 
    </div>
<?php } else { ?>
<?php } ?> 

<!--REMIT IN -->
<div id="collapseremitIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_remitin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbremit1 JOIN tb1 ON tb1.id = tbremit1.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['remitin1']; ?></td>
                        <td><?php echo $row['remitin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['remitin3']; ?></td>
                        <td><?php echo $row['remitin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_remitin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbremit1 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="remitin1[]" placeholder="Title" value="<?php echo $row_product['remitin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="remitin2[]" placeholder="Amount" class="form-control inst_amount_remitin" value="<?php echo $row_product['remitin2'];?>"/>
                            </td>
                            <td><input type="text" name="remitin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['remitin3'];?>"/></td>
                            <td>
                                <input type="number" name="remitin4[]" placeholder="Amount" class="form-control inst_amount_remitin" value="<?php echo $row_product['remitin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="remitin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="remitin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="remitin2[]" placeholder="Amount" class="form-control inst_amount_remitin"/>
                                </td>
                                <td><input type="text" name="remitin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="remitin4[]" placeholder="Amount" class="form-control inst_amount_remitin"/>
                                </td>
                                <td><button type="button" name="add" id="remitin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_remitin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="remitin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="remitin2[]" placeholder="Amount" class="form-control inst_amount_remitin"/>
                            </td>
                            <td><input type="text" name="remitin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="remitin4[]" placeholder="Amount" class="form-control inst_amount_remitin"/>
                            </td>
                            <td><button type="button" name="add" id="remitin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- REMIT OUT -->    
    <div id="collapseremitOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_remitout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbremit2 JOIN tb1 ON tb1.id = tbremit2.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['remitout1']; ?></td>
                        <td><?php echo $row['remitout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['remitout3']; ?></td>
                        <td><?php echo $row['remitout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_remitout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbremit2 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="remitout1[]" placeholder="Title" value="<?php echo $row_product['remitout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="remitout2[]" placeholder="Amount" class="form-control inst_amount_remitout" value="<?php echo $row_product['remitout2'];?>"/>
                            </td>
                            <td><input type="text" name="remitout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['remitout3'];?>"/></td>
                            <td>
                                <input type="number" name="remitout4[]" placeholder="Amount" class="form-control inst_amount_remitout" value="<?php echo $row_product['remitout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="remitout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="remitout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="remitout2[]" placeholder="Amount" class="form-control inst_amount_remitout"/>
                                </td>
                                <td><input type="text" name="remitout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="remitout4[]" placeholder="Amount" class="form-control inst_amount_remitout"/>
                                </td>
                                <td><button type="button" name="add" id="remitout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>        

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_remitout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="remitout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="remitout2[]" placeholder="Amount" class="form-control inst_amount_remitout" />
                            </td>
                            <td><input type="text" name="remitout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="remitout4[]" placeholder="Amount" class="form-control inst_amount_remitout" />
                            </td>
                            <td><button type="button" name="add" id="remitout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 