<!-- 11th LEHMANN CREDIT --> 
<?php if ($setlehcredit) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapselehcreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Lehmann Credit</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setlehcreditin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapselehcreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['lehcreditin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="lehcreditin" id="total_amount_lehcreditin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehcreditin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 

        <!-- Out -->
        <?php if ($setlehcreditout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapselehcreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="lehcreditout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['lehcreditout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="lehcreditout" id="total_amount_lehcreditout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['lehcreditout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 
    </div>
<?php } else { ?>
<?php } ?> 

<!--LEHMANN CREDIT IN -->
<div id="collapselehcreditIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_lehcreditin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tblehcredit1_v3 JOIN tb1_v3 ON tb1_v3.id = tblehcredit1_v3.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['lehcreditin1']; ?></td>
                        <td><?php echo $row['lehcreditin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['lehcreditin3']; ?></td>
                        <td><?php echo $row['lehcreditin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_lehcreditin">
            <b>#IN</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tblehcredit1_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="lehcreditin1[]" placeholder="Title" value="<?php echo $row_product['lehcreditin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="lehcreditin2[]" placeholder="Amount" class="form-control inst_amount_lehcreditin" value="<?php echo $row_product['lehcreditin2'];?>"/>
                            </td>
                            <td><input type="text" name="lehcreditin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['lehcreditin3'];?>"/></td>
                            <td>
                                <input type="number" name="lehcreditin4[]" placeholder="Amount" class="form-control inst_amount_lehcreditin" value="<?php echo $row_product['lehcreditin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="lehcreditin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="lehcreditin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="lehcreditin2[]" placeholder="Amount" class="form-control inst_amount_lehcreditin"/>
                                </td>
                                <td><input type="text" name="lehcreditin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="lehcreditin4[]" placeholder="Amount" class="form-control inst_amount_lehcreditin"/>
                                </td>
                                <td><button type="button" name="add" id="lehcreditin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>     

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_lehcreditin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="lehcreditin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="lehcreditin2[]" placeholder="Amount" class="form-control inst_amount_lehcreditin"/>
                            </td>
                            <td><input type="text" name="lehcreditin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="lehcreditin4[]" placeholder="Amount" class="form-control inst_amount_lehcreditin"/>
                            </td>
                            <td><button type="button" name="add" id="lehcreditin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>

    <!-- LEHMANN CREDIT OUT -->    
    <div id="collapselehcreditOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_lehcreditout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tblehcredit2_v3 JOIN tb1_v3 ON tb1_v3.id = tblehcredit2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['lehcreditout1']; ?></td>
                        <td><?php echo $row['lehcreditout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['lehcreditout3']; ?></td>
                        <td><?php echo $row['lehcreditout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_lehcreditout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tblehcredit2_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="lehcreditout1[]" placeholder="Title" value="<?php echo $row_product['lehcreditout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="lehcreditout2[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" value="<?php echo $row_product['lehcreditout2'];?>"/>
                            </td>
                            <td><input type="text" name="lehcreditout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['lehcreditout3'];?>"/></td>
                            <td>
                                <input type="number" name="lehcreditout4[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" value="<?php echo $row_product['lehcreditout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="lehcreditout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="lehcreditout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="lehcreditout2[]" placeholder="Amount" class="form-control inst_amount_lehcreditout"/>
                                </td>
                                <td><input type="text" name="lehcreditout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="lehcreditout4[]" placeholder="Amount" class="form-control inst_amount_lehcreditin"/>
                                </td>
                                <td><button type="button" name="add" id="lehcreditout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_lehcreditout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="lehcreditout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="lehcreditout2[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" />
                            </td>
                            <td><input type="text" name="lehcreditout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="lehcreditout4[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" />
                            </td>
                            <td><button type="button" name="add" id="lehcreditout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div> 