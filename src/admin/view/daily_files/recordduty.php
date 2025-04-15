<?php if ($setrecordduty) { ?>
<!-- Record Duty -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Record Duty</label>
    </div>
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <input id="recordDuty" class="form-control" style="font-weight:600;text-transform:uppercase;" value="<?php echo $getROW['recordDuty'];?>" readonly/>
        <?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Manager || $_SESSION['access'] == BranchControl || $_SESSION['access'] == Administrator)) { ?>
            <input class="form-control" style="font-weight: 600; text-transform: uppercase;" name="recordDuty" value="<?php echo mb_strtoupper($_SESSION['accfname']); ?> <?php echo mb_strtoupper($_SESSION['acclname']); ?>" readonly/>
        <?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Cashier || $_SESSION['access'] == Other)) { ?>
            <input class="form-control" style="font-weight: 600; text-transform: uppercase;" name="recordDuty" value="<?php if(isset($rrecordDuty)) { echo ($rrecordDuty); } ?>" autocomplete="off" readonly/>
        <?php } elseif($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl || $_SESSION['access'] == Manager) { ?>
             <input id="recordDuty" style=" text-transform: uppercase;" name="recordDuty" style="font-weight:600" class="form-control" value="<?php echo mb_strtoupper($_SESSION['accfname']); ?> <?php echo mb_strtoupper($_SESSION['acclname']); ?>" autocomplete="off" readonly/>
        <?php } else { ?>
            <input id="recordDuty" style=" text-transform: uppercase;" name="recordDuty" style="font-weight:600" class="form-control" autocomplete="off" readonly/>
        <?php } ?>
    </div>
    <?php } else { ?>    
    <?php } ?> 