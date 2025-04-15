<!-- 16th CREDIT CARD -->
<?php if ($setcrcard) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsecrcardName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Credit Card</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setcrcardin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsecrcardIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['crcardin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="crcardin" id="total_amount_crcardin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crcardin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setcrcardout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsecrcardOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="crcardout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['crcardout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="crcardout" id="total_amount_crcardout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['crcardout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!--CREDIT CARD  IN -->
<div id="collapsecrcardIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_crcardin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>
                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbcrcard1_v3 JOIN tb1_v3 ON tb1_v3.id = tbcrcard1_v3.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['crcardin1']; ?></td>
                        <td><?php echo $row['crcardin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['crcardin3']; ?></td>
                        <td><?php echo $row['crcardin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_crcardin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbcrcard1_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="crcardin1[]" placeholder="Title" value="<?php echo $row_product['crcardin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="crcardin2[]" placeholder="Amount" class="form-control inst_amount_crcardin" value="<?php echo $row_product['crcardin2'];?>"/>
                            </td>
                            <td><input type="text" name="crcardin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['crcardin3'];?>"/></td>
                            <td>
                                <input type="number" name="crcardin4[]" placeholder="Amount" class="form-control inst_amount_crcardin" value="<?php echo $row_product['crcardin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="crcardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="crcardin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="crcardin2[]" placeholder="Amount" class="form-control inst_amount_crcardin"/>
                                </td>
                                <td><input type="text" name="crcardin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="crcardin4[]" placeholder="Amount" class="form-control inst_amount_crcardin"/>
                                </td>
                                <td><button type="button" name="add" id="crcardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_crcardin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="crcardin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="crcardin2[]" placeholder="Amount" class="form-control inst_amount_crcardin"/>
                            </td>
                            <td><input type="text" name="crcardin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="crcardin4[]" placeholder="Amount" class="form-control inst_amount_crcardin"/>
                            </td>
                            <td><button type="button" name="add" id="crcardin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- CREDIT CARD OUT -->    
    <div id="collapsecrcardOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_crcardout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbcrcard2_v3 JOIN tb1_v3 ON tb1_v3.id = tbcrcard2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['crcardout1']; ?></td>
                        <td><?php echo $row['crcardout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['crcardout3']; ?></td>
                        <td><?php echo $row['crcardout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_crcardout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbcrcard2_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="crcardout1[]" placeholder="Title" value="<?php echo $row_product['crcardout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="crcardout2[]" placeholder="Amount" class="form-control inst_amount_crcardout" value="<?php echo $row_product['crcardout2'];?>"/>
                            </td>
                            <td><input type="text" name="crcardout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['crcardout3'];?>"/></td>
                            <td>
                                <input type="number" name="crcardout4[]" placeholder="Amount" class="form-control inst_amount_crcardout" value="<?php echo $row_product['crcardout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="crcardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="crcardout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="crcardout2[]" placeholder="Amount" class="form-control inst_amount_crcardout"/>
                                </td>
                                <td><input type="text" name="crcardout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="crcardout4[]" placeholder="Amount" class="form-control inst_amount_crcardout"/>
                                </td>
                                <td><button type="button" name="add" id="crcardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>     

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_crcardout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="crcardout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="crcardout2[]" placeholder="Amount" class="form-control inst_amount_crcardout" />
                            </td>
                            <td><input type="text" name="crcardout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="crcardout4[]" placeholder="Amount" class="form-control inst_amount_crcardout" />
                            </td>
                            <td><button type="button" name="add" id="crcardout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 