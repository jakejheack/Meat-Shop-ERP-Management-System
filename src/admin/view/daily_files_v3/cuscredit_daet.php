<!-- 9th CUSTOMER CREDIT --> 
<?php if ($setcuscredit) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapsecuscreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Customer Credit</label>
            </a>
        </div>


        <!-- In -->
        <?php if ($setcuscreditin) { ?> 
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapsecuscreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['cuscreditin'];?>" readonly/>
                        </div>
                    <?php } elseif(isset($_GET['edit'])) { ?>
                        <input name="cuscreditin" id="total_amount_cuscreditin" style="font-weight:600;color:#f46a6a;" class="form-control" autocomplete="off" readonly/>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="cuscreditin" id="total_amount_cuscreditin" style="font-weight:600;color:#f46a6a;" class="form-control" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 

        <!-- Out -->
        <?php if ($setcuscreditout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapsecuscreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="cuscreditout" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['cuscreditout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="cuscreditout" id="total_amount_cuscreditout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['cuscreditout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 
    </div>
<?php } else { ?>
<?php } ?> 

<!--CUSTOMER CREDIT IN -->
<div id="collapsecuscreditIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
            <?php if(isset($_GET['view'])) { ?>
               <table class="table table-striped" id="dynamic_field_cuscreditin" style="width: 100%;text-align:center;">
                   <thead>
                       <tr>
                           <th class="col-2">Date</th>
                           <th class="col-2">Trans No.</th>
                           <th class="col-6">Customers Name</th>
                           <th class="col-3">Amount In</th>
                       </tr>
                   </thead>
                   <?php
                   $res = $MySQLiconn->query("SELECT * FROM tbcuscredit1_v3 WHERE tb1_id=".$_GET['view']);
                   while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['cuscreditin3']; ?></td>
                        <td><?php echo $row['cuscreditin4']; ?></td>
                        <td><?php echo ucwords(strtolower($row['cuscreditin1'])); ?></td>
                        <td><?php echo number_format($row['cuscreditin2'],2); ?></td>
                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_cuscreditin">
            <b>#IN</b>&nbsp;<i>(This function was done in <a href="cus_customers_payment" target="_blank">CUSTOMER'S CREDIT</a> and auto-generated here.)</i>
            <br><br>
            <tr style="text-align: center;">
                <td>Date</td>
                <td>Trans No.</td>
                <td style="display: none;">ID</td>
                <td>Customers Name</td>
                <td>Amount In</td>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                    <td><i class="mdi mdi-progress-question" title="Override"></i></td>
                <?php } ?>
                <tr>
                    <?php
                    if($_GET['rid'] !=""){
                        $product = "SELECT * FROM tbcuscredit1_v3 WHERE NOT cuscreditin1=' ' and NOT cuscreditin2=' ' and NOT cuscreditin4=' ' and tb1_id='".$_GET['rid']."'";
                        $result_product = mysqli_query($conn, $product);

                        if ($result_product->num_rows > 0) {
                            $i=1;
                            while($row_product = $result_product->fetch_assoc())
                            {
                                ?>     
                                <tr>
                                 <td class="col-2">
                                  <input type="text" name="cuscreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['cuscreditin3'];?>" readonly/>
                              </td>
                              <td class="col-2">
                                  <input type="text" name="cuscreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row_product['cuscreditin4'];?>" readonly/>
                              </td>
                              <td class="col-1" style="display: none;">
                                  <input type="text" name="cuscreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row_product['cuscreditin5'];?>" readonly/>
                              </td>
                              <td class="col-5">
                                <input type="text" name="cuscreditin1[]" placeholder="Customer Name" class="form-control" value="<?php echo ucwords(strtolower($row_product['cuscreditin1']));?>" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="number" name="cuscreditin2[]" placeholder="Amount" class="form-control inst_amount_cuscreditin" value="<?php echo $row_product['cuscreditin2'];?>" readonly/>
                            </td>
                            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                                <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
                            <?php } ?>
                        </tr> 
                        <?php $i++; } } } else { ?>
                        <?php }?>
                        <?php
                        $res = $MySQLiconn->query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountin as paid from customers_status where transno not in (select cuscreditin4 from tbcuscredit1_v3) and not amountin='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;");
                        while($row=$res->fetch_array()){                                       
                            ?>
                            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                                <tr class="bg-soft-success">
                                    <td class="col-2">
                                        <input type="date" name="cuscreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                                    </td>
                                    <td class="col-2">
                                        <input type="text" name="cuscreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                                    </td>
                                    <td class="col-1" style="display: none;">
                                        <input type="text" name="cuscreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                                    </td>
                                    <td class="col-5">
                                        <input type="text" name="cuscreditin1[]" placeholder="Amount" class="form-control" value="<?php echo ucwords(strtolower($row['cname'])); ?>" readonly/>
                                    </td>
                                    <td class="col-3">
                                        <input type="number" name="cuscreditin2[]" placeholder="Amount" class="form-control inst_amount_cuscreditin" value="<?php echo $row['paid']; ?>" readonly/>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>

                    </table>    

                    <!-- Add Payment -->
                <?php } else { ?>
                    <table class="table table-bordered" id="dynamic_field_cuscreditin">
                        <b>#IN</b>&nbsp;<i>(This function was done in <a href="cus_customers_payment" target="_blank">CUSTOMER'S CREDIT</a> and auto-generated here.)</i>
                        <br><br>
                        <tr style="text-align: center;">
                            <td>Date</td>
                            <td>Trans No.</td>
                            <td style="display: none;">ID</td>
                            <td>Customers Name</td>
                            <td>Amount In</td>
                            <tr>
                                <?php
                                $paidin = mysqli_num_rows( $MySQLiconn -> query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountin as paid from customers_status where transno not in (select cuscreditin4 from tbcuscredit1_v3) and not amountin='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;"));

                                if($paidin == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
                                 <tr>
                                    <td class="col-1">
                                        <input type="date" name="cuscreditin3[]" placeholder="Date" class="form-control" readonly/>
                                    </td>
                                    <td class="col-3">
                                        <input type="text" name="cuscreditin4[]" placeholder="Trans No." class="form-control" readonly/>
                                    </td>
                                    <td class="col-1" style="display: none;">
                                        <input type="text" name="cuscreditin5[]" placeholder="ID" class="form-control" readonly/>
                                    </td>
                                    <td class="col-5">
                                        <input type="text" name="cuscreditin1[]" placeholder="Amount" class="form-control" readonly/>
                                    </td>
                                    <td class="col-3">
                                        <input type="number" name="cuscreditin2[]" placeholder="Amount" class="form-control" readonly/>
                                    </td>
                                </tr>
                            <?php }else{ ?>
                                <?php
                                $res = $MySQLiconn->query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountin as paid from customers_status where transno not in (select cuscreditin4 from tbcuscredit1_v3) and not amountin='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;");
                                while($row=$res->fetch_array()){                                       
                                    ?>
                                    <tr>
                                        <td class="col-1">
                                            <input type="date" name="cuscreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                                        </td>
                                        <td class="col-3">
                                            <input type="text" name="cuscreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                                        </td>
                                        <td class="col-1" style="display: none;">
                                            <input type="text" name="cuscreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                                        </td>
                                        <td class="col-5">
                                            <input type="text" name="cuscreditin1[]" placeholder="Amount" class="form-control" value="<?php echo ucwords(strtolower($row['cname'])); ?>" readonly/>
                                        </td>
                                        <td class="col-3">
                                            <input type="number" name="cuscreditin2[]" placeholder="Amount" class="form-control inst_amount_cuscreditin" value="<?php echo $row['paid']; ?>" readonly/>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } ?>

                        </table>
                    <?php } ?>
                </div>
            </div>
            <br><br>
        </div>


        <!-- CUSTOMER CREDIT OUT -->    
        <div id="collapsecuscreditOut" class="collapse">
            <div class="container">
                <div class="table-responsive mt-2">
                 <?php if(isset($_GET['view'])) { ?>

                   <table class="table table-striped" id="dynamic_field_cuscreditout" style="width: 100%;text-align:center;">

                       <thead>
                           <tr>
                              <th class="col-2">Date</th>
                              <th class="col-2">Trans No.</th>
                              <th class="col-6">Customers Name</th>
                              <th class="col-3">Amount Out</th>
                          </tr>
                      </thead>
                      <?php
                      $res = $MySQLiconn->query("SELECT * FROM tbcuscredit2_v3 WHERE tb1_id=".$_GET['view']);
                      while($row=$res->fetch_array()){                                       
                       ?>
                       <tr>
                        <td><?php echo $row['cuscreditout3']; ?></td>
                        <td><?php echo $row['cuscreditout4']; ?></td>
                        <td><?php echo ucwords(strtolower($row['cuscreditout1'])); ?></td>
                        <td><?php echo number_format($row['cuscreditout2'],2); ?></td>
                    </tr>
                    <?php
                } 
                ?>
            </table>

        <?php } elseif (isset($_GET['rid'])) { ?>
          <table class="table table-bordered" id="dynamic_field_cuscreditout">
            <b>#OUT</b>&nbsp;<i>(This function was done in <a href="cus_customers_payment" target="_blank">CUSTOMER'S CREDIT</a> and auto-generated here.)</i>
            <br><br>
            <tr style="text-align: center;">
                <td>Date</td>
                <td>Trans No.</td>
                <td style="display: none;">ID</td>
                <td>Customers Name</td>
                <td>Amount Out</td>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                    <td><i class="mdi mdi-progress-question" title="Override"></i></td>
                <?php } ?>
            </tr>
            <?php
            if($_GET['rid'] !=""){
                $product = "SELECT * FROM tbcuscredit2_v3 WHERE NOT cuscreditout1=' ' and NOT cuscreditout2=' ' and NOT cuscreditout4=' ' and tb1_id='".$_GET['rid']."'";
                $result_product = mysqli_query($conn, $product);
                if ($result_product->num_rows > 0) {
                    $xy=1;
                    while($row_product = $result_product->fetch_assoc())
                    {
                        ?>     
                        <tr>
                         <td class="col-2">
                          <input type="text" name="cuscreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['cuscreditout3'];?>" readonly/>
                      </td>
                      <td class="col-2">
                          <input type="text" name="cuscreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row_product['cuscreditout4'];?>" readonly/>
                      </td>
                      <td class="col-1" style="display: none;">
                          <input type="text" name="cuscreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row_product['cuscreditout5'];?>" readonly/>
                      </td>
                      <td class="col-5">
                        <input type="text" name="cuscreditout1[]" placeholder="Customer Name" class="form-control" value="<?php echo ucwords(strtolower($row_product['cuscreditout1']));?>" readonly/>
                    </td>
                    <td class="col-3">
                        <input type="number" name="cuscreditout2[]" placeholder="Amount" class="form-control inst_amount_cuscreditout" value="<?php echo $row_product['cuscreditout2'];?>" readonly/>
                    </td>
                    <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                        <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
                    <?php } ?>
                </tr> 
                <?php $i++; } } } else { ?>
                <?php }?>
                <?php
                $res = $MySQLiconn->query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountout as credit from customers_status where transno not in (select cuscreditout4 from tbcuscredit2_v3) and not amountout='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;");
                while($row=$res->fetch_array()){
                    ?>
                    <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                        <tr class="bg-soft-success">
                            <td class="col-2">
                                <input type="date" name="cuscreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                            </td>
                            <td class="col-2">
                                <input type="text" name="cuscreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                            </td>
                            <td class="col-1" style="display: none;">
                                <input type="text" name="cuscreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                            </td>
                            <td class="col-5">
                                <input type="text" name="cuscreditout1[]" placeholder="Amount" class="form-control" value="<?php echo ucwords(strtolower($row['cname'])); ?>" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="number" name="cuscreditout2[]" placeholder="Amount" class="form-control inst_amount_cuscreditout" value="<?php echo $row['credit']; ?>" readonly/>
                            </td>
                        </tr>
                    <?php } ?>  
                <?php } ?>
            </table>        
            <!-- Add New-->
        <?php } else { ?>
            <table class="table table-bordered" id="dynamic_field_cuscreditout">
                <b>#OUT</b>&nbsp;<i>(This function was done in <a href="cus_customers_payment" target="_blank">CUSTOMER'S CREDIT</a> and auto-generated here.)</i>
                <br><br>
                <tr style="text-align: center;">
                    <td>Date</td>
                    <td>Trans No.</td>
                    <td style="display: none;">ID</td>
                    <td>Customers Name</td>
                    <td>Amount Out</td>
                    <tr>
                        <?php
                        $creditout = mysqli_num_rows( $MySQLiconn -> query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountout as credit from customers_status where transno not in (select cuscreditout4 from tbcuscredit2_v3) and not amountout='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;"));

                        if($creditout == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
                         <tr>
                            <td class="col-1">
                                <input type="date" name="cuscreditout3[]" placeholder="Date" class="form-control" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="text" name="cuscreditout4[]" placeholder="Trans No." class="form-control" readonly/>
                            </td>
                            <td class="col-1" style="display: none;">
                                <input type="text" name="cuscreditout5[]" placeholder="ID" class="form-control" readonly/>
                            </td>
                            <td class="col-5">
                                <input type="text" name="cuscreditout1[]" placeholder="Amount" class="form-control" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="number" name="cuscreditout2[]" placeholder="Amount" class="form-control"  readonly/>
                            </td>
                        </tr>
                    <?php }else{ ?>
                        <?php
                        $res = $MySQLiconn->query("select cusid as id,transno as tno,created_on as co,cusname as cname,amountout as credit from customers_status where transno not in (select cuscreditout4 from tbcuscredit2_v3) and not amountout='0' and branch='Daet' and cdate = CURDATE() and cpstat='Complete' order by cdate desc;");
                        while($row=$res->fetch_array()){                                       
                            ?>
                            <tr>
                                <td class="col-1">
                                    <input type="date" name="cuscreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                                </td>
                                <td class="col-3">
                                    <input type="text" name="cuscreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                                </td>
                                <td class="col-1" style="display: none;">
                                    <input type="text" name="cuscreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                                </td>
                                <td class="col-5">
                                    <input type="text" name="cuscreditout1[]" placeholder="Amount" class="form-control" value="<?php echo ucwords(strtolower($row['cname'])); ?>" readonly/>
                                </td>
                                <td class="col-3">
                                    <input type="number" name="cuscreditout2[]" placeholder="Amount" class="form-control inst_amount_cuscreditout" value="<?php echo $row['credit']; ?>" readonly/>
                                </td>
                            </tr>
                        <?php } ?>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
    </div>
    <br><br>
</div> 