<!-- 15th PRIVATE FAMILY --> 
<?php if ($setprifamily) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapseprfamilyName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Private Family</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setprifamilyin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapseprfamilyIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['prfamilyin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="prfamilyin" id="total_amount_prfamilyin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prfamilyin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setprifamilyout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapseprfamilyOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="prfamilyout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['prfamilyout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="prfamilyout" id="total_amount_prfamilyout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['prfamilyout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!--PRIVATE FAMILY IN -->
<div id="collapseprfamilyIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_prfamilyin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbprfamily1 JOIN tb1 ON tb1.id = tbprfamily1.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['prfamilyin1']; ?></td>
                        <td><?php echo $row['prfamilyin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['prfamilyin3']; ?></td>
                        <td><?php echo $row['prfamilyin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_prfamilyin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbprfamily1 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="prfamilyin1[]" placeholder="Title" value="<?php echo $row_product['prfamilyin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="prfamilyin2[]" placeholder="Amount" class="form-control inst_amount_prfamilyin" value="<?php echo $row_product['prfamilyin2'];?>"/>
                            </td>
                            <td><input type="text" name="prfamilyin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['prfamilyin3'];?>"/></td>
                            <td>
                                <input type="number" name="prfamilyin4[]" placeholder="Amount" class="form-control inst_amount_prfamilyin" value="<?php echo $row_product['prfamilyin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="prfamilyin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="prfamilyin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="prfamilyin2[]" placeholder="Amount" class="form-control inst_amount_prfamilyin"/>
                                </td>
                                <td><input type="text" name="prfamilyin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="prfamilyin4[]" placeholder="Amount" class="form-control inst_amount_prfamilyin"/>
                                </td>
                                <td><button type="button" name="add" id="prfamilyin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>  

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_prfamilyin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="prfamilyin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="prfamilyin2[]" placeholder="Amount" class="form-control inst_amount_prfamilyin"/>
                            </td>
                            <td><input type="text" name="prfamilyin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="prfamilyin4[]" placeholder="Amount" class="form-control inst_amount_prfamilyin"/>
                            </td>
                            <td><button type="button" name="add" id="prfamilyin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- PRIVATE FAMILY OUT -->    
    <div id="collapseprfamilyOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_prfamilyout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbprfamily2 JOIN tb1 ON tb1.id = tbprfamily2.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['prfamilyout1']; ?></td>
                        <td><?php echo $row['prfamilyout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['prfamilyout3']; ?></td>
                        <td><?php echo $row['prfamilyout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_prfamilyout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbprfamily2 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="prfamilyout1[]" placeholder="Title" value="<?php echo $row_product['prfamilyout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="prfamilyout2[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" value="<?php echo $row_product['prfamilyout2'];?>"/>
                            </td>
                            <td><input type="text" name="prfamilyout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['prfamilyout3'];?>"/></td>
                            <td>
                                <input type="number" name="prfamilyout4[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" value="<?php echo $row_product['prfamilyout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="prfamilyout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="prfamilyout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="prfamilyout2[]" placeholder="Amount" class="form-control inst_amount_prfamilyout"/>
                                </td>
                                <td><input type="text" name="prfamilyout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="prfamilyout4[]" placeholder="Amount" class="form-control inst_amount_prfamilyout"/>
                                </td>
                                <td><button type="button" name="add" id="prfamilyout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_prfamilyout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="prfamilyout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="prfamilyout2[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" />
                            </td>
                            <td><input type="text" name="prfamilyout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="prfamilyout4[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" />
                            </td>
                            <td><button type="button" name="add" id="prfamilyout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>