<!-- 10th EMPLOYEE CREDIT -->  
<?php if ($setempcredit) { ?>
    <div class="row">
        <div class="col-lg-2"></div>
        <!-- Record Name -->
        <div  class="form-group col-lg-2">
            <a href="#collapseepcreditName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                <label class="form-control" style="font-weight:600;text-transform:capitalize;">Employee Credit</label>
            </a>
        </div>

        <!-- In -->
        <?php if ($setempcreditin) { ?>    
            <div class="form-group col-lg-3" id="inst_form">
                <a href="#collapseepcreditIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['epcreditin'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                            <input name="epcreditin" id="total_amount_epcreditin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['epcreditin'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?> 

        <!-- Out -->
        <?php if ($setempcreditout) { ?>
            <div class="form-group col-lg-3">
                <a href="#collapseepcreditOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
                    <?php if(isset($_GET['view'])) { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['epcreditout'];?>" readonly/>
                        </div>
                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="font-weight:600">OUT</div>
                            <input name="epcreditout" id="total_amount_epcreditout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['epcreditout'];?>" autocomplete="off" readonly/>
                        </div>
                    <?php } ?> 
                </a>
            </div>
        <?php } else { ?>
        <?php } ?>
    </div>
<?php } else { ?>
<?php } ?>

<!-- EMPLOYEE CREDIT IN -->    
<div id="collapseepcreditIn" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
         <?php if(isset($_GET['view'])) { ?>
           <table class="table table-striped" id="dynamic_field_epcreditin" style="width: 100%;text-align:center;">
             <thead>
                 <tr>
                     <th class="col-2">Date</th>
                     <th class="col-2">Trans No.</th>
                     <th class="col-6">Employee Name</th>
                     <th class="col-3">Amount In</th>
                 </tr>
             </thead>
             <?php
             $res = $MySQLiconn->query("SELECT * FROM tbepcredit1_v3 WHERE tb1_id=".$_GET['view']);
             while($row=$res->fetch_array()){                                       
                 ?>
                 <tr>
                    <td><?php echo $row['epcreditin3']; ?></td>
                    <td><?php echo $row['epcreditin4']; ?></td>
                    <td><?php echo ucwords(strtolower($row['epcreditin1'])); ?></td>
                    <td><?php echo number_format($row['epcreditin2'],2); ?></td>
                </tr>
                <?php
            } 
            ?>
        </table>

    <?php } elseif (isset($_GET['rid'])) { ?>
      <table class="table table-bordered" id="dynamic_field_epcreditin">
       <b>#IN</b>&nbsp;<i>(This function was done in <a href="employees_credit" target="_blank">EMPLOYEE'S PAYMENT</a> and auto-generated here.)</i>
       <br><br>
       <tr style="text-align: center;">
        <td>Date</td>
        <td>Trans No.</td>
        <td style="display: none;">ID</td>
        <td>Employee Name</td>
        <td>Amount In</td>
        <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
            <td><i class="mdi mdi-progress-question" title="Override"></i></td>
        <?php } ?>
    </tr>
    <?php
    if($_GET['rid'] !=""){
        $product = "SELECT * FROM tbepcredit1_v3 WHERE NOT epcreditin1=' ' and NOT epcreditin2=' ' and NOT epcreditin4=' ' and tb1_id='".$_GET['rid']."'";
        $result_product = mysqli_query($conn, $product);

        if ($result_product->num_rows > 0) {
            $i=1;
            while($row_product = $result_product->fetch_assoc())
            {
                ?>     
                <tr>
                 <td class="col-2">
                  <input type="text" name="epcreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['epcreditin3'];?>" readonly/>
              </td>
              <td class="col-2">
                  <input type="text" name="epcreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row_product['epcreditin4'];?>" readonly/>
              </td>
              <td class="col-1" style="display: none;">
                  <input type="text" name="epcreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row_product['epcreditin5'];?>" readonly/>
              </td>
              <td class="col-5">
                <input type="text" name="epcreditin1[]" placeholder="Employee Name" class="form-control" value="<?php echo ucwords(strtolower($row_product['epcreditin1']));?>" readonly/>
            </td>
            <td class="col-3">
                <input type="number" name="epcreditin2[]" placeholder="Amount" class="form-control inst_amount_epcreditin" value="<?php echo $row_product['epcreditin2'];?>" readonly/>
            </td>
            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
            <?php } ?>
        </tr>
        <?php $i++; } } } else { ?>
        <?php }?>
        <?php
        $res = $MySQLiconn->query("select eid as id,transno as tno,created_on as co,empname as ename,amountin as paid from employees_credit where transno not in (select epcreditin4 from tbepcredit1_v3) and not amountin='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;");
        while($row=$res->fetch_array()){                                       
            ?>
            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                <tr class="bg-soft-success">
                    <td class="col-2">
                        <input type="date" name="epcreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                    </td>
                    <td class="col-2">
                        <input type="text" name="epcreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                    </td>
                    <td class="col-1" style="display: none;">
                        <input type="text" name="epcreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                    </td>
                    <td class="col-5">
                        <input type="text" name="epcreditin1[]" placeholder="Employee Name" class="form-control" value="<?php echo ucwords(strtolower($row['ename'])); ?>" readonly/>
                    </td>
                    <td class="col-3">
                        <input type="number" name="epcreditin2[]" placeholder="Amount" class="form-control inst_amount_epcreditin" value="<?php echo $row['paid']; ?>" readonly/>
                    </td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>       

    <!-- Add New -->
<?php } else { ?>
    <table class="table table-bordered" id="dynamic_field_epcreditin">
        <b>#IN</b>&nbsp;<i>(This function was done in <a href="employees_credit" target="_blank">EMPLOYEE'S CREDIT</a> and auto-generated here.)</i>
        <br><br>
        <tr style="text-align: center;">
            <td>Date</td>
            <td>Trans No.</td>
            <td style="display: none;">ID</td>
            <td>Employee Name</td>
            <td>Amount In</td>
            <tr>
                <?php
                $paidin = mysqli_num_rows( $MySQLiconn -> query("select eid as id,transno as tno,created_on as co,empname as ename,amountin as paid from employees_credit where transno not in (select epcreditin4 from tbepcredit1_v3) and not amountin='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;"));
                if($paidin == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
                   <tr>
                    <td class="col-1">
                        <input type="date" name="epcreditin3[]" placeholder="Date" class="form-control" readonly/>
                    </td>
                    <td class="col-3">
                        <input type="text" name="epcreditin4[]" placeholder="Trans No." class="form-control" readonly/>
                    </td>
                    <td class="col-1" style="display: none;">
                        <input type="text" name="epcreditin5[]" placeholder="ID" class="form-control" readonly/>
                    </td>
                    <td class="col-5">
                        <input type="text" name="epcreditin1[]" placeholder="Employee Name" class="form-control" readonly/>
                    </td>
                    <td class="col-3">
                        <input type="number" name="epcreditin2[]" placeholder="Amount" class="form-control" readonly/>
                    </td>
                </tr>
            <?php }else{ ?>
                <?php
                $res = $MySQLiconn->query("select eid as id,transno as tno,created_on as co,empname as ename,amountin as paid from employees_credit where transno not in (select epcreditin4 from tbepcredit1_v3) and not amountin='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;");
                while($row=$res->fetch_array()){                                       
                    ?>
                    <tr>
                        <td class="col-1">
                            <input type="date" name="epcreditin3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                        </td>
                        <td class="col-3">
                            <input type="text" name="epcreditin4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                        </td>
                        <td class="col-1" style="display: none;">
                            <input type="text" name="epcreditin5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                        </td>
                        <td class="col-5">
                            <input type="text" name="epcreditin1[]" placeholder="Employee Name" class="form-control" value="<?php echo ucwords(strtolower($row['ename'])); ?>" readonly/>
                        </td>
                        <td class="col-3">
                            <input type="number" name="epcreditin2[]" placeholder="Amount" class="form-control inst_amount_epcreditin" value="<?php echo $row['paid']; ?>" readonly/>
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

<!-- EMPLOYEE CREDIT OUT -->    
<div id="collapseepcreditOut" class="collapse">
    <div class="container">
        <div class="table-responsive mt-2">
         <?php if(isset($_GET['view'])) { ?>
            <table class="table table-striped" id="dynamic_field_epcreditout" style="width: 100%;text-align:center;">
               <thead>
                   <tr>
                      <th class="col-2">Date</th>
                      <th class="col-2">Trans No.</th>
                      <th class="col-6">Employee Name</th>
                      <th class="col-3">Amount Out</th>
                  </tr>
              </thead>
              <?php
              $res = $MySQLiconn->query("SELECT * FROM tbepcredit2_v3 WHERE tb1_id=".$_GET['view']);
              while($row=$res->fetch_array()){                                       
               ?>
               <tr>
                <td><?php echo $row['epcreditout3']; ?></td>
                <td><?php echo $row['epcreditout4']; ?></td>
                <td><?php echo ucwords(strtolower($row['epcreditout1'])); ?></td>
                <td><?php echo number_format($row['epcreditout2'],2); ?></td>
            </tr>
            <?php
        } 
        ?>
    </table>

<?php } elseif (isset($_GET['rid'])) { ?>
  <table class="table table-bordered" id="dynamic_field_epcreditout">
    <b>#OUT</b>&nbsp;<i>(This function was done in <a href="employees_credit" target="_blank">EMPLOYEE'S CREDIT</a> and auto-generated here.)</i>
    <br><br>
    <tr style="text-align: center;">
        <td>Date</td>
        <td>Trans No.</td>
        <td style="display: none;">ID</td>
        <td>Employee Name</td>
        <td>Amount Out</td>
        <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
            <td><i class="mdi mdi-progress-question" title="Override"></i></td>
        <?php } ?>
    </tr>
    <?php
    if($_GET['rid'] !=""){
        $product = "SELECT * FROM tbepcredit2_v3 WHERE NOT epcreditout1=' ' and NOT epcreditout2=' ' and NOT epcreditout4=' ' and tb1_id='".$_GET['rid']."'";
        $result_product = mysqli_query($conn, $product);
        if ($result_product->num_rows > 0) {
            $xy=1;
            while($row_product = $result_product->fetch_assoc())
            {
                ?>     
                <tr>
                   <td class="col-2">
                      <input type="text" name="epcreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row_product['epcreditout3'];?>" readonly/>
                  </td>
                  <td class="col-2">
                      <input type="text" name="epcreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row_product['epcreditout4'];?>" readonly/>
                  </td>
                  <td class="col-1" style="display: none;">
                      <input type="text" name="epcreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row_product['epcreditout5'];?>" readonly/>
                  </td>
                  <td class="col-5">
                    <input type="text" name="epcreditout1[]" placeholder="Employee Name" class="form-control" value="<?php echo ucwords(strtolower($row_product['epcreditout1']));?>" readonly/>
                </td>
                <td class="col-3">
                    <input type="number" name="epcreditout2[]" placeholder="Amount" class="form-control inst_amount_epcreditout" value="<?php echo $row_product['epcreditout2'];?>" readonly/>
                </td>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                    <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
                <?php } ?>
            </tr> 
            <?php $i++; } } } else { ?>
            <?php }?>
            <?php
            $res = $MySQLiconn->query("select eid as id,transno as tno,created_on as co,empname as ename,amountout as credit from employees_credit where transno not in (select epcreditout4 from tbepcredit2_v3) and not amountout='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;");
            while($row=$res->fetch_array()){
                ?>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                    <tr class="bg-soft-success">
                        <td class="col-2">
                            <input type="date" name="epcreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                        </td>
                        <td class="col-2">
                            <input type="text" name="epcreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                        </td>
                        <td class="col-1" style="display: none;">
                            <input type="text" name="epcreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                        </td>
                        <td class="col-5">
                            <input type="text" name="epcreditout1[]" placeholder="Amount" class="form-control" value="<?php echo ucwords(strtolower($row['ename'])); ?>" readonly/>
                        </td>
                        <td class="col-3">
                            <input type="number" name="epcreditout2[]" placeholder="Amount" class="form-control inst_amount_epcreditout" value="<?php echo $row['credit']; ?>" readonly/>
                        </td>
                    </tr>
                <?php } ?>  
            <?php } ?>
        </table>        
        <!-- Add New-->
    <?php } else { ?>
        <table class="table table-bordered" id="dynamic_field_epcreditout">
            <b>#OUT</b>&nbsp;<i>(This function was done in <a href="employees_credit" target="_blank">EMPLOYEE'S CREDIT</a> and auto-generated here.)</i>
            <br><br>
            <tr style="text-align: center;">
                <td>Date</td>
                <td>Trans No.</td>
                <td style="display: none;">ID</td>
                <td>Employee Name</td>
                <td>Amount Out</td>
                <tr>
                    <?php
                    $creditout = mysqli_num_rows( $MySQLiconn -> query("select eid as id,transno as tno,created_on as co,empname as ename,amountout as credit from employees_credit where transno not in (select epcreditout4 from tbepcredit2_v3) and not amountout='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;"));
                    if($creditout == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
                       <tr>
                        <td class="col-1">
                            <input type="date" name="epcreditout3[]" placeholder="Date" class="form-control" readonly/>
                        </td>
                        <td class="col-3">
                            <input type="text" name="epcreditout4[]" placeholder="Trans No." class="form-control" readonly/>
                        </td>
                        <td class="col-1" style="display: none;">
                            <input type="text" name="epcreditout5[]" placeholder="ID" class="form-control" readonly/>
                        </td>
                        <td class="col-5">
                            <input type="text" name="epcreditout1[]" placeholder="Amount" class="form-control" readonly/>
                        </td>
                        <td class="col-3">
                            <input type="number" name="epcreditout2[]" placeholder="Amount" class="form-control"  readonly/>
                        </td>
                    </tr>
                <?php }else{ ?>
                    <?php
                    $res = $MySQLiconn->query("select eid as id,transno as tno,created_on as co,empname as ename,amountout as credit from employees_credit where transno not in (select epcreditout4 from tbepcredit2_v3) and not amountout='0' and branch='Magsaysay' and edate = CURDATE() and estat='Complete' order by edate desc;");
                    while($row=$res->fetch_array()){                                       
                        ?>
                        <tr>
                            <td class="col-1">
                                <input type="date" name="epcreditout3[]" placeholder="Date" class="form-control" value="<?php echo $row['co']; ?>" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="text" name="epcreditout4[]" placeholder="Trans No." class="form-control" value="<?php echo $row['tno']; ?>" readonly/>
                            </td>
                            <td class="col-1" style="display: none;">
                                <input type="text" name="epcreditout5[]" placeholder="ID" class="form-control" value="<?php echo $row['id']; ?>" readonly/>
                            </td>
                            <td class="col-5">
                                <input type="text" name="epcreditout1[]" placeholder="Employee Name" class="form-control" value="<?php echo ucwords(strtolower($row['ename'])); ?>" readonly/>
                            </td>
                            <td class="col-3">
                                <input type="number" name="epcreditout2[]" placeholder="Amount" class="form-control inst_amount_epcreditout" value="<?php echo $row['credit']; ?>" readonly/>
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