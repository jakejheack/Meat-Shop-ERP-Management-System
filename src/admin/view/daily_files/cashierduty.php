  <?php if ($setcashierduty) { ?>
 <!-- Cashier Duty -->
 
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Cashier Duty</label>
    </div>
 
    <div class="form-group col-lg-3">

        <?php if(isset($_GET['view'])) { ?>
            <input id="cashierDuty" class="form-control" style="font-weight:600;text-transform:uppercase;" value="<?php echo $getROW['cashierDuty'];?>" readonly/>
        <?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl || $_SESSION['access'] == Manager)) { ?>
            <input class="form-control" style="font-weight: 600; text-transform: uppercase;" name="cashierDuty" value="<?php if(isset($rcashierDuty)) { echo ($rcashierDuty); } ?>" readonly/>
        <?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Cashier || $_SESSION['access'] == Other)) { ?>
            <input class="form-control" style="font-weight: 600; text-transform: uppercase;" name="cashierDuty" value="<?php echo mb_strtoupper($_SESSION['accfname']); ?> <?php echo mb_strtoupper($_SESSION['acclname']); ?>" readonly/>
        <?php } elseif($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl || $_SESSION['access'] == Manager) { ?>
            <input style=" text-transform: uppercase;" id="cashierDuty" name="cashierDuty" style="font-weight:600" class="form-control" autocomplete="off" readonly/>
        <?php } else { ?>
            <input style=" text-transform: uppercase;" id="cashierDuty" name="cashierDuty" style="font-weight:600" class="form-control" value="<?php echo mb_strtoupper($_SESSION['accfname']); ?> <?php echo mb_strtoupper($_SESSION['acclname']); ?>" autocomplete="off" readonly/>
        <?php } ?>
    </div>
    <?php } else { ?>    
        <?php } ?>