<!-- 1st PK -->
<?php if ($setpk) { ?> 
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            
            <a href="#collapsepkName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">PK</label>
            </a>
        </div>

        <?php if ($setpkin) { ?>   
            <!-- In -->
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsepkIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input id="pktotalIn" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['pkin'];?>" readonly/>
                        </div>
                    <?php } elseif(isset($_GET['edit_v2'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="pkin" id="total_amount_pkin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit_v2'])) echo $getROW['pkin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="pkin" id="total_amount_pkin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pkin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 

        <?php if ($setpkout) { ?>
            <!-- Out -->
            <div class="form-group col-lg-3">
                <a href="#collapsepkOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                           <div class="input-group-text" style="font-weight:600">OUT</div>
                           <input name="pkout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['pkout'];?>" readonly/>
                       </div>
                   <?php } else { ?>
                    <div class="input-group">
                        <div class="input-group-text" style="font-weight:600">OUT</div>
                        <input name="pkout" id="total_amount_pkout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['pkout'];?>" autocomplete="off" readonly/>
                    </div>
                <?php } ?> 
            </a>
        </div>
    <?php } else { ?>
    <?php } ?> 
</div>
<?php } else { ?>
<?php } ?> 


<!--PK IN -->
<div id="collapsepkIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_pkin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>
                       </tr>

                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbpk1_v3 JOIN tb1_v3 ON tb1_v3.id = tbpk1_v3.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['pkin1']; ?></td>
                        <td><?php echo $row['pkin2']; ?></td>
                    </tr>
                    <tr>   
                        <td><?php echo $row['pkin3']; ?></td>
                        <td><?php echo $row['pkin4']; ?></td>

                    </tr>
                <?php } ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_pkin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbpk1_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="pkin1[]" placeholder="Title" value="<?php echo $row_product['pkin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="pkin2[]" placeholder="Amount" class="form-control inst_amount_pkin" value="<?php echo $row_product['pkin2'];?>"/>
                            </td>
                            <td><input type="text" name="pkin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['pkin3'];?>"/></td>
                            <td>
                                <input type="number" name="pkin4[]" placeholder="Amount" class="form-control inst_amount_pkin" value="<?php echo $row_product['pkin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="pkin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="pkin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="pkin2[]" placeholder="Amount" class="form-control inst_amount_pkin"/>
                                </td>
                                <td><input type="text" name="pkin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="pkin4[]" placeholder="Amount" class="form-control inst_amount_pkin"/>
                                </td>
                                <td><button type="button" name="add" id="pkin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_pkin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="pkin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="pkin2[]" placeholder="Amount" class="form-control inst_amount_pkin"/>
                            </td>
                            <td><input type="text" name="pkin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="pkin4[]" placeholder="Amount" class="form-control inst_amount_pkin"/>
                            </td>
                            <td><button type="button" name="add" id="pkin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- PK OUT -->    
    <div id="collapsepkOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_pkout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbpk2_v3 JOIN tb1_v3 ON tb1_v3.id = tbpk2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['pkout1']; ?></td>
                        <td><?php echo $row['pkout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['pkout3']; ?></td>
                        <td><?php echo $row['pkout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_pkout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbpk2_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="pkout1[]" placeholder="Title" value="<?php echo $row_product['pkout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="pkout2[]" placeholder="Amount" class="form-control inst_amount_pkout" value="<?php echo $row_product['pkout2'];?>"/>
                            </td>
                            <td><input type="text" name="pkout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['pkout3'];?>"/></td>
                            <td>
                                <input type="number" name="pkout4[]" placeholder="Amount" class="form-control inst_amount_pkout" value="<?php echo $row_product['pkout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="pkout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="pkout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="pkout2[]" placeholder="Amount" class="form-control inst_amount_pkout"/>
                                </td>
                                <td><input type="text" name="pkout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="pkout4[]" placeholder="Amount" class="form-control inst_amount_pkout"/>
                                </td>
                                <td><button type="button" name="add" id="pkout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_pkout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="pkout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="pkout2[]" placeholder="Amount" class="form-control inst_amount_pkout" />
                            </td>
                            <td><input type="text" name="pkout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="pkout4[]" placeholder="Amount" class="form-control inst_amount_pkout" />
                            </td>
                            <td><button type="button" name="add" id="pkout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>