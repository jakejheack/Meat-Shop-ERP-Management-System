<!-- 2nd PS -->
<?php if ($setps) { ?> 
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsepsName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">PS</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setpsin) { ?> 
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsepsIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['psin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="psin" id="total_amount_psin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['psin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setpsout) { ?> 
            <div class="form-group col-lg-3">
                <a href="#collapsepsOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="psout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['psout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="psout" id="total_amount_psout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['psout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 
    </div>
<?php } else { ?>
<?php } ?> 

<!--PS IN -->
<div id="collapsepsIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_psin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbps1 JOIN tb1 ON tb1.id = tbps1.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['psin1']; ?></td>
                        <td><?php echo $row['psin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['psin3']; ?></td>
                        <td><?php echo $row['psin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_psin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbps1 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="psin1[]" placeholder="Title" value="<?php echo $row_product['psin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="psin2[]" placeholder="Amount" class="form-control inst_amount_psin" value="<?php echo $row_product['psin2'];?>"/>
                            </td>
                            <td><input type="text" name="psin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['psin3'];?>"/></td>
                            <td>
                                <input type="number" name="psin4[]" placeholder="Amount" class="form-control inst_amount_psin" value="<?php echo $row_product['psin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="psin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="psin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="psin2[]" placeholder="Amount" class="form-control inst_amount_psin"/>
                                </td>
                                <td><input type="text" name="psin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="psin4[]" placeholder="Amount" class="form-control inst_amount_psin"/>
                                </td>
                                <td><button type="button" name="add" id="psin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_psin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="psin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="psin2[]" placeholder="Amount" class="form-control inst_amount_psin"/>
                            </td>
                            <td><input type="text" name="psin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="psin4[]" placeholder="Amount" class="form-control inst_amount_psin"/>
                            </td>
                            <td><button type="button" name="add" id="psin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- PS OUT -->    
    <div id="collapsepsOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_psout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbps2 JOIN tb1 ON tb1.id = tbps2.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['psout1']; ?></td>
                        <td><?php echo $row['psout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['psout3']; ?></td>
                        <td><?php echo $row['psout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>
            
        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_psout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbps2 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);
                
                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="psout1[]" placeholder="Title" value="<?php echo $row_product['psout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="psout2[]" placeholder="Amount" class="form-control inst_amount_psout" value="<?php echo $row_product['psout2'];?>"/>
                            </td>
                            <td><input type="text" name="psout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['psout3'];?>"/></td>
                            <td>
                                <input type="number" name="psout4[]" placeholder="Amount" class="form-control inst_amount_psout" value="<?php echo $row_product['psout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="psout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="psout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="psout2[]" placeholder="Amount" class="form-control inst_amount_psout"/>
                                </td>
                                <td><input type="text" name="psout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="psout4[]" placeholder="Amount" class="form-control inst_amount_psout"/>
                                </td>
                                <td><button type="button" name="add" id="psout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_psout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="psout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="psout2[]" placeholder="Amount" class="form-control inst_amount_psout" />
                            </td>
                            <td><input type="text" name="psout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="psout4[]" placeholder="Amount" class="form-control inst_amount_psout" />
                            </td>
                            <td><button type="button" name="add" id="psout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 
    