<?php if ($settotal) { ?>
<div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total</label>
    </div>
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input id="wsTotal" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['ssTotal'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>

         <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="total_weight_scale" name="ssTotal" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($rssTotal)) { echo ($rssTotal); } ?>" autocomplete="off" readonly/>
        </div>



    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="total_weight_scale" name="ssTotal" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit_v2'])) echo $getROW['ssTotal'];?>" autocomplete="off" readonly/>
        </div>
    <?php } ?>
</div>
<?php } else { ?>
    <div  class="form-group col-lg-2" style="visibility: hidden;">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total</label>
    </div>
    <div class="form-group col-lg-3" style="visibility: hidden;">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input id="wsTotal" class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo $getROW['ssTotal'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>

         <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="total_weight_scale" name="ssTotal" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($rssTotal)) { echo ($rssTotal); } ?>" autocomplete="off" readonly/>
        </div>



    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text" style="font-weight:600;">₱</div>
            <input id="total_weight_scale" name="ssTotal" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit_v2'])) echo $getROW['ssTotal'];?>" autocomplete="off" readonly/>
        </div>
    <?php } ?>
</div>
<?php } ?> 