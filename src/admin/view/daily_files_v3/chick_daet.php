  <!-- 4th PURCHASE --> 
  <?php if ($setchick) { ?>
    <div class="row">
      <div class="col-lg-2"></div>
      <!-- Record Name -->
      <div  class="form-group col-lg-2">
        <a href="#collapsechickName" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
          <label class="form-control" style="font-weight:600;text-transform:capitalize;">Purchase</label>
        </a>
      </div>

      <!-- In -->
      <?php if ($setchickin) { ?> 
        <div class="form-group col-lg-3" id="inst_form">
          <a href="#collapsechickIn" class="text-dark" data-bs-toggle="collapse" aria-expanded="false">
            <?php if(isset($_GET['view'])) { ?>
              <div class="input-group">
                <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['chickin'];?>" readonly/>
              </div>
            <?php } else { ?>
              <div class="input-group">
                <div class="input-group-text" style="font-weight:600">&nbsp;IN&nbsp;</div>
                <input name="chickin" id="total_amount_chickin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chickin'];?>" autocomplete="off" readonly/>
              </div>
            <?php } ?> 
          </a>
        </div>
      <?php } else { ?>
      <?php } ?> 

      <!-- Out -->
      <?php if ($setchickout) { ?>
        <div class="form-group col-lg-3">
          <a href="#collapsechickOut" class="text-dark" data-bs-toggle="collapse" aria-expanded="true">
            <?php if(isset($_GET['view'])) { ?>
              <div class="input-group">
                <div class="input-group-text" style="font-weight:600">OUT</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['chickout'];?>" readonly/>
              </div>
            <?php } else { ?>
              <div class="input-group">
                <div class="input-group-text" style="font-weight:600">OUT</div>
                <input name="chickout" id="total_amount_chickout" type="text" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['chickout'];?>" autocomplete="off" readonly/>
              </div>
            <?php } ?> 
          </a>
        </div>
      <?php } else { ?>
      <?php } ?> 
    </div>
  <?php } else { ?>
  <?php } ?> 

  <!--PURCHASE IN -->
  <div id="collapsechickIn" class="collapse">
    <div class="container">
      <div class="table-responsive mt-2">
        <?php if(isset($_GET['view'])) { ?>

         <table class="table table-striped" id="dynamic_field_chickin" style="width: 100%;text-align:center;">

           <thead>
             <tr>
               <th>Date</th>
               <th>Purchase No.</th>
               <th style="display: none;">SID</th>
               <th>Supplier Name</th>
               <th>Purchase Title</th>
               <th>&nbsp;Amount In&nbsp;</th>

             </tr>
           </thead>
           <?php
           $res = $MySQLiconn->query("SELECT * FROM tbchick1_v3 WHERE tb1_id=".$_GET['view']);
           while($row=$res->fetch_array()){                                       
             ?>
             <tr>
               <td><?php echo $row['chickin4']; ?></td>
               <td><?php echo $row['chickin1']; ?></td>
               <td><?php echo utf8_encode(ucwords(strtolower($row['chickin5']))); ?></td>
               <td><?php echo utf8_encode(ucwords(strtolower($row['chickin3']))); ?></td>
               <td><?php echo $row['chickin2']; ?></td>

             </tr>
             <?php
           } 
           ?>
         </table>

       <?php } elseif (isset($_GET['rid'])) { ?>
        <table class="table table-bordered" id="dynamic_field_chickin">
          <b>#IN</b>&nbsp;<i>(This function was done in <a href="fl_purchases" target="_blank">PURCHASES</a> and auto-generated here.)</i>
          <br><br>
          <tr style="text-align: center;">
            <td>Date</td>
            <td>Purchase No.</td>
            <td style="display: none;">SID</td>
            <td>Supplier Name</td>
            <td>Purchase Name</td>
            <td>Amount</td>
            <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
              <td><i class="mdi mdi-progress-question" title="Override"></i></td>
            <?php } ?>
          </tr>
          <?php
          if($_GET['rid'] !=""){
            $product = "SELECT * FROM tbchick1_v3 WHERE tb1_id='".$_GET['rid']."'";
            $result_product = mysqli_query($conn, $product);

            if ($result_product->num_rows > 0) {
              $i=1;
              while($row_product = $result_product->fetch_assoc())
              {
                ?>    
                <tr>
                 <td style="width:15%;">
                  <input type="text" name="chickin4[]" placeholder="Date" class="form-control" value="<?php echo $row_product['chickin4'];?>" readonly/>
                </td>
                <td style="width:15%;">
                  <input type="text" name="chickin1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row_product['chickin1'];?>" readonly/>
                </td>
                <td style="display: none;">
                  <input type="text" name="chickin6[]" placeholder="SID" class="form-control" value="<?php echo $row_product['chickin6'];?>" readonly/>
                </td>
                <td>
                  <input type="text" name="chickin5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row_product['chickin5'])));?>" readonly/>
                </td>

                <td style="width:30%;">
                  <input type="text" name="chickin3[]" placeholder="Title" class="form-control" value="<?php echo $row_product['chickin3'];?>" readonly/>
                </td>
                <td>
                  <input type="number" name="chickin2[]" placeholder="Amount" class="form-control inst_amount_chickin" value="<?php echo $row_product['chickin2'];?>" readonly/>
                </td>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                  <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
                <?php } ?>
              </tr> 
              <?php $i++; } } } else { ?>
              <?php }?>
              <?php
              $res = $MySQLiconn->query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickin1 from tbchick1_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='IN' order by purdate desc;");
              while($row=$res->fetch_array()){
                ?>
                <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                  <tr class="bg-soft-success">
                   <td style="width:15%;">
                    <input type="date" name="chickin4[]" placeholder="Date" class="form-control" value="<?php echo $row['pdate']; ?>" readonly/>
                  </td>
                  <td style="width:15%;">
                    <input type="text" name="chickin1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row['pno']; ?>" readonly/>
                  </td>
                  <td style="display: none;">
                    <input type="text" name="chickin6[]" placeholder="Supplier ID" class="form-control" value="<?php echo $row['sid']; ?>" readonly/>
                  </td>
                  <td>
                    <input type="text" name="chickin5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row['sname']))); ?>" readonly/>
                  </td>

                  <td style="width:30%;">
                    <input type="text" name="chickin3[]" placeholder="Title" class="form-control" value="<?php echo $row['title']; ?>" readonly/>
                  </td>
                  <td>
                    <input type="number" name="chickin2[]" placeholder="Amount" class="form-control inst_amount_chickin" value="<?php echo $row['amount']; ?>" readonly/>
                  </td>
                </tr>
              <?php } ?>  
            <?php } ?>
          </table>    

          <!-- Add New -->
        <?php } else {?> 
          <table class="table table-bordered" id="dynamic_field_chickin">
            <b>#IN</b>&nbsp;<i>(This function was done in <a href="fl_purchases" target="_blank">PURCHASES</a> and auto-generated here.)</i>
            <tr style="text-align: center;">
              <td>Date</td>
              <td>Purchase No.</td>
              <td style="display: none;">SID</td>
              <td>Supplier Name</td>
              <td>Purchase Name</td>
              <td>Amount</td>
            </tr>
            <?php
            $purchasein = mysqli_num_rows( $MySQLiconn -> query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickin1 from tbchick1_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='IN' order by purdate desc;"));
            if($purchasein == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
             <tr>
               <td style="width:15%;">
                <input type="text" name="chickin4[]" placeholder="Date" class="form-control" readonly/>
              </td>
              <td style="width:15%;">
                <input type="text" name="chickin1[]" placeholder="Purchase No." class="form-control"readonly/>
              </td>
              <td style="display: none;">
                <input type="text" name="chickin6[]" placeholder="SID" class="form-control" readonly/>
              </td>
              <td>
                <input type="text" name="chickin5[]" placeholder="Supplier" class="form-control" readonly/>
              </td>

              <td style="width:30%;">
                <input type="text" name="chickin3[]" placeholder="Title" class="form-control" readonly/>
              </td>
              <td>
                <input type="number" name="chickin2[]" placeholder="Amount" class="form-control inst_amount_chickin" readonly/>
              </td>
            </tr>
          <?php }else{ ?>
            <?php
            $res = $MySQLiconn->query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickin1 from tbchick1_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='IN' order by purdate desc;");
            while($row=$res->fetch_array()){                                       
              ?>
              <tr>
               <td style="width:15%;">
                <input type="date" name="chickin4[]" placeholder="Date" class="form-control" value="<?php echo $row['pdate']; ?>" readonly/>
              </td>
              <td style="width:15%;">
                <input type="text" name="chickin1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row['pno']; ?>" readonly/>
              </td>
              <td style="display: none;">
                <input type="text" name="chickin6[]" placeholder="Supplier ID" class="form-control" value="<?php echo $row['sid']; ?>" readonly/>
              </td>
              <td>
                <input type="text" name="chickin5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row['sname']))); ?>" readonly/>
              </td>

              <td style="width:30%;">
                <input type="text" name="chickin3[]" placeholder="Title" class="form-control" value="<?php echo $row['title']; ?>" readonly/>
              </td>
              <td>
                <input type="number" name="chickin2[]" placeholder="Amount" class="form-control inst_amount_chickin" value="<?php echo $row['amount']; ?>" readonly/>
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

<!-- PURCHASE OUT -->    
<div id="collapsechickOut" class="collapse">
  <div class="container">
    <div class="table-responsive mt-2">
     <?php if(isset($_GET['view'])) { ?>

       <table class="table table-striped" id="dynamic_field_chickout" style="width: 100%;text-align:center;">

         <thead>
           <tr>
             <th>Date</th>
             <th>Purchase No.</th>
             <th>Supplier Name</th>
             <th>Purchase Title</th>
             <th>Amount Out</th>
           </tr>
         </thead>
         <?php
         $res = $MySQLiconn->query("SELECT * FROM tbchick2_v3 JOIN tb1_v3 ON tb1_v3.id = tbchick2_v3.tb1_id WHERE  tb1_id=".$_GET['view']);
         while($row=$res->fetch_array()){                                       
           ?>
           <tr>
            <td><?php echo $row['chickout4']; ?></td>
            <td><?php echo $row['chickout1']; ?></td>
            <td><?php echo utf8_encode(ucwords(strtolower($row['chickout5']))); ?></td>
            <td><?php echo utf8_encode(ucwords(strtolower($row['chickout3']))); ?></td>
            <td><?php echo $row['chickout2']; ?></td>

          </tr>
          <?php
        } 
        ?>
      </table>

    <?php } elseif (isset($_GET['rid'])) { ?>
      <table class="table table-bordered" id="dynamic_field_chickout">
        <b>#OUT</b>&nbsp;<i>(This function was done in <a href="fl_purchases" target="_blank">PURCHASES</a> and auto-generated here.)</i>
        <br><br>
        <tr style="text-align: center;">
          <td>Date</td>
          <td>Purchase No.</td>
          <td style="display: none;">SID</td>
          <td>Supplier Name</td>
          <td>Purchase Name</td>
          <td>Amount</td>
          <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
            <td><i class="mdi mdi-progress-question" title="Override"></i></td>
          <?php } ?>
        </tr>
        <?php
        if($_GET['rid'] !=""){
          $product = "SELECT * FROM tbchick2_v3 WHERE tb1_id='".$_GET['rid']."'";
          $result_product = mysqli_query($conn, $product);

          if ($result_product->num_rows > 0) {
            $i=1;
            while($row_product = $result_product->fetch_assoc())
            {
              ?>    
              <tr>
               <td style="width:15%;">
                <input type="text" name="chickout4[]" placeholder="Date" class="form-control" value="<?php echo $row_product['chickout4'];?>" readonly/>
              </td>
              <td style="width:15%;">
                <input type="text" name="chickout1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row_product['chickout1'];?>" readonly/>
              </td>
              <td style="display: none;">
                <input type="text" name="chickout6[]" placeholder="SID" class="form-control" value="<?php echo $row_product['chickout6'];?>" readonly/>
              </td>
              <td>
                <input type="text" name="chickout5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row_product['chickout5'])));?>" readonly/>
              </td>

              <td style="width:30%;">
                <input type="text" name="chickout3[]" placeholder="Title" class="form-control" value="<?php echo ucwords(ucfirst($row_product['chickout3']));?>" readonly/>
              </td>
              <td>
                <input type="number" name="chickout2[]" placeholder="Amount" class="form-control inst_amount_chickout" value="<?php echo $row_product['chickout2'];?>" readonly/>
              </td>
              <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
                <td><input class="form-check-input makeReadOnly" type="checkbox"></td>
              <?php } ?>
            </tr> 
            <?php $i++; } } } else { ?>
            <?php }?>
            <?php
            $res = $MySQLiconn->query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickout1 from tbchick2_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='OUT' order by purdate desc;");
            while($row=$res->fetch_array()){
              ?>
              <?php if($_SESSION['access'] == Administrator || $_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl) { ?>
                <tr class="bg-soft-success">
                 <td style="width:15%;">
                  <input type="date" name="chickout4[]" placeholder="Date" class="form-control" value="<?php echo $row['pdate']; ?>" readonly/>
                </td>
                <td style="width:15%;">
                  <input type="text" name="chickout1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row['pno']; ?>" readonly/>
                </td>
                <td style="display: none;">
                  <input type="text" name="chickout6[]" placeholder="Supplier ID" class="form-control" value="<?php echo $row['sid']; ?>" readonly/>
                </td>
                <td>
                  <input type="text" name="chickout5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row['sname']))); ?>" readonly/>
                </td>

                <td style="width:30%;">
                  <input type="text" name="chickout3[]" placeholder="Title" class="form-control" value="<?php echo ucwords(ucfirst($row['title'])); ?>" readonly/>
                </td>
                <td>
                  <input type="number" name="chickout2[]" placeholder="Amount" class="form-control inst_amount_chickout" value="<?php echo $row['amount']; ?>" readonly/>
                </td>
              </tr>
            <?php } ?>  
          <?php } ?>
        </table>    

        <!-- Add New-->
      <?php } else { ?>
       <table class="table table-bordered" id="dynamic_field_chickout">
        <b>#OUT</b>&nbsp;<i>(This function was done in <a href="fl_purchases" target="_blank">PURCHASES</a> and auto-generated here.)</i>
        <tr style="text-align: center;">
          <td>Date</td>
          <td>Purchase No.</td>
          <td style="display: none;">SID</td>
          <td>Supplier Name</td>
          <td>Purchase Name</td>
          <td>Amount</td>
        </tr>
        <?php
        $purchaseout = mysqli_num_rows( $MySQLiconn -> query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickout1 from tbchick2_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='OUT' order by purdate desc;"));
        if($purchaseout == 0 || $_SESSION['access'] == Cashier || $_SESSION['access'] == Other) { ?>
         <tr>
           <td style="width:15%;">
            <input type="text" name="chickout4[]" placeholder="Date" class="form-control" readonly/>
          </td>
          <td style="width:15%;">
            <input type="text" name="chickout1[]" placeholder="Purchase No." class="form-control"readonly/>
          </td>
          <td style="display: none;">
            <input type="text" name="chickout6[]" placeholder="SID" class="form-control" readonly/>
          </td>
          <td>
            <input type="text" name="chickout5[]" placeholder="Supplier" class="form-control" readonly/>
          </td>

          <td style="width:30%;">
            <input type="text" name="chickout3[]" placeholder="Title" class="form-control" readonly/>
          </td>
          <td>
            <input type="number" name="chickout2[]" placeholder="Amount" class="form-control inst_amount_chickout" readonly/>
          </td>
        </tr>
      <?php }else{ ?>
        <?php
        $res = $MySQLiconn->query("select created_on as pdate,purchaseno as pno,supplierid as sid,supplier as sname,title as title,amount as amount from purchase where purchaseno not in (select chickout1 from tbchick2_v3) and not amount='0' and branch='Daet' and purdate = CURDATE() and stat='Approved' and entry='OUT' order by purdate desc;");
        while($row=$res->fetch_array()){                                       
          ?>
          <tr>
           <td style="width:15%;">
            <input type="date" name="chickout4[]" placeholder="Date" class="form-control" value="<?php echo $row['pdate']; ?>" readonly/>
          </td>
          <td style="width:15%;">
            <input type="text" name="chickout1[]" placeholder="Purchase No." class="form-control" value="<?php echo $row['pno']; ?>" readonly/>
          </td>
          <td style="display: none;">
            <input type="text" name="chickout6[]" placeholder="Supplier ID" class="form-control" value="<?php echo $row['sid']; ?>" readonly/>
          </td>
          <td>
            <input type="text" name="chickout5[]" placeholder="Supplier" class="form-control" value="<?php echo utf8_encode(ucwords(strtolower($row['sname']))); ?>" readonly/>
          </td>

          <td style="width:30%;">
            <input type="text" name="chickout3[]" placeholder="Title" class="form-control" value="<?php echo $row['title']; ?>" readonly/>
          </td>
          <td>
            <input type="number" name="chickout2[]" placeholder="Amount" class="form-control inst_amount_chickout" value="<?php echo $row['amount']; ?>" readonly/>
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