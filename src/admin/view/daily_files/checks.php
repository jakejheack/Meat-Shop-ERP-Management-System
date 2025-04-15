 <!-- 18th CHECKS --> 
 <?php if ($setchecks) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsechecksName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Checks</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setchecksin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsechecksIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['checksin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="checksin" id="total_amount_checksin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checksin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setchecksout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsechecksOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="checksout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['checksout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="checksout" id="total_amount_checksout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['checksout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!--CHECKS IN -->
<div id="collapsechecksIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_checksin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th width="10%;">Bank Detail</th>
                           <th width="20%;">Check Number</th>
                           <th width="10%;">Date</th>
                           <th width="30%;">Name</th>
                           <th width="20%;">&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbchecks1 JOIN tb1 ON tb1.id = tbchecks1.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['checksin1']; ?></td>
                        <td><?php echo $row['checksin2']; ?></td>
                        <td><?php echo $row['checksin3']; ?></td>
                        <td><?php echo $row['checksin4']; ?></td>
                        <td><?php echo $row['checksin5']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_checksin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbchecks1 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="checksin1[]" placeholder="Title" value="<?php echo $row_product['checksin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="text" name="checksin2[]" placeholder="Check Number" class="form-control" value="<?php echo $row_product['checksin2'];?>"/>
                            </td>
                            <td><input type="date" name="checksin3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['checksin3'];?>"/></td>
                            <td>
                                <input type="text" name="checksin4[]" placeholder="Name" class="form-control" value="<?php echo $row_product['checksin4'];?>"/>
                            </td>
                            <td>
                                <input type="number" name="checksin5[]" placeholder="Amount" class="form-control inst_amount_checksin" value="<?php echo $row_product['checksin5'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="checksin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="checksin1[]" placeholder="Bank Detail" class="form-control"/></td>
                                <td><input type="text" name="checksin2[]" placeholder="Check Number" class="form-control"/></td>
                                <td><input type="date" name="checksin3[]" placeholder="Date" class="form-control"/></td>
                                <td><input type="text" name="checksin4[]" placeholder="Name" class="form-control"/></td>
                                <td>
                                    <input type="number" name="checksin5[]" placeholder="Amount" class="form-control inst_amount_checksin"/>
                                </td>
                                <td><button type="button" name="add" id="checksin" class="btn btn-success">Add</button></td>
                            </tr>
                        <?php }?>
                    </table>      

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_checksin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="checksin1[]" placeholder="Bank Detail" class="form-control"/></td>
                            <td><input type="text" name="checksin2[]" placeholder="Check Number" class="form-control"/></td>
                            <td><input type="date" name="checksin3[]" placeholder="Date" class="form-control"/></td>
                            <td><input type="text" name="checksin4[]" placeholder="Name" class="form-control"/></td>
                            <td>
                                <input type="number" name="checksin5[]" placeholder="Amount" class="form-control inst_amount_checksin"/>
                            </td>
                            <td><button type="button" name="add" id="checksin" class="btn btn-success">Add</button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- CHECKS OUT -->    
    <div id="collapsechecksOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_checksout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th width="10%;">Bank Detail</th>
                           <th width="20%;">Check Number</th>
                           <th width="10%;">Date</th>
                           <th width="30%;">Name</th>
                           <th width="20%;">Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbchecks2 JOIN tb1 ON tb1.id = tbchecks2.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['checksout1']; ?></td>
                        <td><?php echo $row['checksout2']; ?></td>
                        <td><?php echo $row['checksout3']; ?></td>
                        <td><?php echo $row['checksout4']; ?></td>
                        <td><?php echo $row['checksout5']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_checksout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbchecks2 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="checksout1[]" placeholder="Title" value="<?php echo $row_product['checksout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="text" name="checksout2[]" placeholder="Check Number" class="form-control" value="<?php echo $row_product['checksout2'];?>"/>
                            </td>
                            <td><input type="date" name="checksout3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['checksout3'];?>"/></td>
                            <td>
                                <input type="text" name="checksout4[]" placeholder="Name" class="form-control" value="<?php echo $row_product['checksout4'];?>"/>
                            </td>
                            <td>
                                <input type="number" name="checksout5[]" placeholder="Amount" class="form-control inst_amount_checksout" value="<?php echo $row_product['checksout5'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="checksout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="checksout1[]" placeholder="Bank Detail" class="form-control"/></td>
                                <td><input type="text" name="checksout2[]" placeholder="Check Number" class="form-control"/></td>
                                <td><input type="date" name="checksout3[]" placeholder="Date" class="form-control"/></td>
                                <td><input type="text" name="checksout4[]" placeholder="Name" class="form-control"/></td>
                                <td>
                                    <input type="number" name="checksout5[]" placeholder="Amount" class="form-control inst_amount_checksout"/>
                                </td>
                                <td><button type="button" name="add" id="checksout" class="btn btn-success">Add</button></td>
                            </tr>
                        <?php }?>
                    </table>     

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_checksout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="checksout1[]" placeholder="Bank Detail" class="form-control"/></td>
                            <td><input type="text" name="checksout2[]" placeholder="Check Number" class="form-control"/></td>
                            <td><input type="date" name="checksout3[]" placeholder="Date" class="form-control"/></td>
                            <td><input type="text" name="checksout4[]" placeholder="Name" class="form-control"/></td>
                            <td>
                                <input type="number" name="checksout5[]" placeholder="Amount" class="form-control inst_amount_checksout"/>
                            </td>
                            <td><button type="button" name="add" id="checksout" class="btn btn-success">Add</button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 