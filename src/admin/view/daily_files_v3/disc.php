 <!-- 3rd DISC -->
 <?php if ($setdisc) { ?> 
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsediscName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Discount (Sr., PWD)</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setdiscin) { ?>
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsediscIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['discin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="discin" id="total_amount_discin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['discin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>

        <!-- Out -->
        <?php if ($setdiscout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsediscOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="discout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['discout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="discout" id="total_amount_discout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['discout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!--DISC IN -->
<div id="collapsediscIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_discin" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>&nbsp;Amount In&nbsp;</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbdisc1_v3 JOIN tb1_v3 ON tb1_v3.id = tbdisc1_v3.tb1_id WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['discin1']; ?></td>
                        <td><?php echo $row['discin2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['discin3']; ?></td>
                        <td><?php echo $row['discin4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_discin">
            <b>#IN</b>
            
            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbdisc1_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="discin1[]" placeholder="Title" value="<?php echo $row_product['discin1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="discin2[]" placeholder="Amount" class="form-control inst_amount_discin" value="<?php echo $row_product['discin2'];?>"/>
                            </td>
                            <td><input type="text" name="discin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['discin3'];?>"/></td>
                            <td>
                                <input type="number" name="discin4[]" placeholder="Amount" class="form-control inst_amount_discin" value="<?php echo $row_product['discin4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="discin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="discin1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="discin2[]" placeholder="Amount" class="form-control inst_amount_discin"/>
                                </td>
                                <td><input type="text" name="discin3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="discin4[]" placeholder="Amount" class="form-control inst_amount_discin"/>
                                </td>
                                <td><button type="button" name="add" id="discin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_discin">
                        <b>#IN</b>
                        <tr>
                            <td><input type="text" name="discin1[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="discin2[]" placeholder="Amount" class="form-control inst_amount_discin"/>
                            </td>
                            <td><input type="text" name="discin3[]" placeholder="Title" class="form-control"/></td>
                            <td>
                                <input type="number" name="discin4[]" placeholder="Amount" class="form-control inst_amount_discin"/>
                            </td>
                            <td><button type="button" name="add" id="discin" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>
    
    <!-- DISC OUT -->    
    <div id="collapsediscOut" class="collapse">
        <div class="container">
            <div class="table-responsive mt-2">
             <?php if(isset($_GET['view'])) { ?>

               <table class="table table-striped" id="dynamic_field_discout" style="width: 100%;text-align:center;">

                   <thead>
                       <tr>
                           <th>Description</th>
                           <th>Amount Out</th>

                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbdisc2_v3 JOIN tb1_v3 ON tb1_v3.id = tbdisc2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>

                        <td><?php echo $row['discout1']; ?></td>
                        <td><?php echo $row['discout2']; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $row['discout3']; ?></td>
                        <td><?php echo $row['discout4']; ?></td>

                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_discout">
            <b>#OUT</b>

            <?php

            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbdisc2_v3 WHERE  tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);

                if ($result_product->num_rows > 0) {
                    $i=1;
                    while($row_product = $result_product->fetch_assoc())
                    {

                        ?>     

                        <tr id="row<?php echo $i-1;?>">
                            <td><input type="text" name="discout1[]" placeholder="Title" value="<?php echo $row_product['discout1'];?>" class="form-control"/></td>
                            <td>
                                <input type="number" name="discout2[]" placeholder="Amount" class="form-control inst_amount_discout" value="<?php echo $row_product['discout2'];?>"/>
                            </td>
                            <td><input type="text" name="discout3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['discout3'];?>"/></td>
                            <td>
                                <input type="number" name="discout4[]" placeholder="Amount" class="form-control inst_amount_discout" value="<?php echo $row_product['discout4'];?>"/>
                            </td>
                            <?php if($i==1){?> 
                                <td><button type="button" name="add" id="discout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td> 
                            <?php } else {?> 
                                <td> <button type="button" name="remove" id="<?php echo $i-1;?>" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td>

                            <?php } ?>
                        </tr>

                        <?php $i++; } } } else { ?>
                            <tr>
                                <td><input type="text" name="discout1[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="discout2[]" placeholder="Amount" class="form-control inst_amount_discout"/>
                                </td>
                                <td><input type="text" name="discout3[]" placeholder="Title" class="form-control"/></td>
                                <td>
                                    <input type="number" name="discout4[]" placeholder="Amount" class="form-control inst_amount_discout"/>
                                </td>
                                <td><button type="button" name="add" id="discout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                            </tr>
                        <?php }?>
                    </table>    

                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_discout">
                        <b>#OUT</b>
                        <tr>
                            <td><input type="text" name="discout1[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="discout2[]" placeholder="Amount" class="form-control inst_amount_discout" />
                            </td>
                            <td><input type="text" name="discout3[]" placeholder="Title" class="form-control" /></td>
                            <td>
                                <input type="number" name="discout4[]" placeholder="Amount" class="form-control inst_amount_discout" />
                            </td>
                            <td><button type="button" name="add" id="discout" class="btn btn-success"><i class=" fa fa-plus-square"></i></button></td>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
        <br><br>
    </div>