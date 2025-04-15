<?php if ($setdifference && $_SESSION['access'] == Administrator) { ?>
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Difference</label>
    </div>
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['difference'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>

           <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="overview_difference" name="difference" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($rdifference)) { echo ($rdifference); } ?>" autocomplete="off" readonly/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="overview_difference" name="difference" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" autocomplete="off" readonly/>
        </div>
    <?php } ?>
    </div>
<?php } else { ?> 
    <div  class="form-group col-lg-2" style="visibility: hidden;display: none;">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Difference</label>
    </div>
    <div class="form-group col-lg-3" style="visibility: hidden;display: none;">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['difference'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>

           <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="overview_difference" name="difference" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($rdifference)) { echo ($rdifference); } ?>" autocomplete="off" readonly/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="overview_difference" name="difference" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" autocomplete="off" readonly/>
        </div>
    <?php } ?>
    </div>
<?php } ?> 