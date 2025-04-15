<!-- 13th CASH RETURN --> 
<?php if ($setcashreturn) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsecashName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Cash Return</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setcashreturnin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsecashIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['cashin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="cashin" id="total_amount_cashin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cashin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 

        <!-- Out -->
        <?php if ($setcashreturnout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsecashOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="cashout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['cashout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="cashout" id="total_amount_cashout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cashout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!--IN IN -->
<div id="collapsecashIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_cashin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbcash1 JOIN tb1 ON tb1.id = tbcash1.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['cashin1']; ?></td>
                        <td><?php echo $row['cashin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['cashin3']; ?></td>
                        <td><?php echo $row['cashin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_cashin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbcash1 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="cashin1[]" placeholder="Title" value="<?php echo $row_product['cashin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="cashin2[]" placeholder="Amount" class="form-control inst_amount_cashin" value="<?php echo $row_product['cashin2'];?>"/>
                            </td>
                            <td><input type="text" name="cashin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['cashin3'];?>"/></td>
                            <td>
                                <input type="number" name="cashin4[]" placeholder="Amount" class="form-control inst_amount_cashin" value="<?php echo $row_product['cashin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="cashin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="cashin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="cashin2[]" placeholder="Amount" class="form-control inst_amount_cashin"/>
                                </td>
                                <td><input type="text" name="cashin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="cashin4[]" placeholder="Amount" class="form-control inst_amount_cashin"/>
                                </td>
                                <td><button type="button" name="add" id="cashin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_cashin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="cashin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="cashin2[]" placeholder="Amount" class="form-control inst_amount_cashin"/>
                            </td>
                            <td><input type="text" name="cashin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="cashin4[]" placeholder="Amount" class="form-control inst_amount_cashin"/>
                            </td>
                            <td><button type="button" name="add" id="cashin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- IN OUT -->    
    <div id="collapsecashOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_cashout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbcash2 JOIN tb1 ON tb1.id = tbcash2.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['cashout1']; ?></td>
                        <td><?php echo $row['cashout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['cashout3']; ?></td>
                        <td><?php echo $row['cashout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_cashout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbcash2 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="cashout1[]" placeholder="Title" value="<?php echo $row_product['cashout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="cashout2[]" placeholder="Amount" class="form-control inst_amount_cashout" value="<?php echo $row_product['cashout2'];?>"/>
                            </td>
                            <td><input type="text" name="cashout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['cashout3'];?>"/></td>
                            <td>
                                <input type="number" name="cashout4[]" placeholder="Amount" class="form-control inst_amount_cashout" value="<?php echo $row_product['cashout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="cashout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="cashout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="cashout2[]" placeholder="Amount" class="form-control inst_amount_cashout"/>
                                </td>
                                <td><input type="text" name="cashout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="cashout4[]" placeholder="Amount" class="form-control inst_amount_cashout"/>
                                </td>
                                <td><button type="button" name="add" id="cashout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>     

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_cashout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="cashout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="cashout2[]" placeholder="Amount" class="form-control inst_amount_cashout" />
                            </td>
                            <td><input type="text" name="cashout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="cashout4[]" placeholder="Amount" class="form-control inst_amount_cashout" />
                            </td>
                            <td><button type="button" name="add" id="cashout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 