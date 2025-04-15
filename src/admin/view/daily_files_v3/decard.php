 <!-- 17th DEBIT CARD --> 
 <?php if ($setdecard) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsedccardName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Debit Card</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setdecardin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsedccardIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['dccardin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="dccardin" id="total_amount_dccardin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['dccardin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setdecardout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsedccardOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="dccardout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['dccardout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="dccardout" id="total_amount_dccardout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['dccardout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 
    </div>
<?php } else { ?>
<?php } ?>

<!--DEBIT CARD IN -->
<div id="collapsedccardIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_dccardin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbdccard1_v3 JOIN tb1_v3 ON tb1_v3.id = tbdccard1_v3.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['dccardin1']; ?></td>
                        <td><?php echo $row['dccardin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['dccardin3']; ?></td>
                        <td><?php echo $row['dccardin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_dccardin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbdccard1_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="dccardin1[]" placeholder="Title" value="<?php echo $row_product['dccardin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="dccardin2[]" placeholder="Amount" class="form-control inst_amount_dccardin" value="<?php echo $row_product['dccardin2'];?>"/>
                            </td>
                            <td><input type="text" name="dccardin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['dccardin3'];?>"/></td>
                            <td>
                                <input type="number" name="dccardin4[]" placeholder="Amount" class="form-control inst_amount_dccardin" value="<?php echo $row_product['dccardin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="dccardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="dccardin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="dccardin2[]" placeholder="Amount" class="form-control inst_amount_dccardin"/>
                                </td>
                                <td><input type="text" name="dccardin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="dccardin4[]" placeholder="Amount" class="form-control inst_amount_dccardin"/>
                                </td>
                                <td><button type="button" name="add" id="dccardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>     

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_dccardin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="dccardin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="dccardin2[]" placeholder="Amount" class="form-control inst_amount_dccardin"/>
                            </td>
                            <td><input type="text" name="dccardin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="dccardin4[]" placeholder="Amount" class="form-control inst_amount_dccardin"/>
                            </td>
                            <td><button type="button" name="add" id="dccardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- DEBIT CARD OUT -->    
    <div id="collapsedccardOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_dccardout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbdccard2_v3 JOIN tb1_v3 ON tb1_v3.id = tbdccard2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['dccardout1']; ?></td>
                        <td><?php echo $row['dccardout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['dccardout3']; ?></td>
                        <td><?php echo $row['dccardout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_dccardout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbdccard2_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="dccardout1[]" placeholder="Title" value="<?php echo $row_product['dccardout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="dccardout2[]" placeholder="Amount" class="form-control inst_amount_dccardout" value="<?php echo $row_product['dccardout2'];?>"/>
                            </td>
                            <td><input type="text" name="dccardout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['dccardout3'];?>"/></td>
                            <td>
                                <input type="number" name="dccardout4[]" placeholder="Amount" class="form-control inst_amount_dccardout" value="<?php echo $row_product['dccardout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="dccardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="dccardout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="dccardout2[]" placeholder="Amount" class="form-control inst_amount_dccardout"/>
                                </td>
                                <td><input type="text" name="dccardout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="dccardout4[]" placeholder="Amount" class="form-control inst_amount_dccardout"/>
                                </td>
                                <td><button type="button" name="add" id="dccardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_dccardout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="dccardout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="dccardout2[]" placeholder="Amount" class="form-control inst_amount_dccardout" />
                            </td>
                            <td><input type="text" name="dccardout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="dccardout4[]" placeholder="Amount" class="form-control inst_amount_dccardout" />
                            </td>
                            <td><button type="button" name="add" id="dccardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 
