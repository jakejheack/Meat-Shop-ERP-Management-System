   <?php if ($setscale) { ?>
    <!-- W.S -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Weighing Scale</label>
    </div>
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input id="scale" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['scale'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input type="number" class="form-control inst_weight" style="font-weight:600;text-transform:capitalize;" name="scale" value="<?php if(isset($rscale)) { echo $rscale; } ?>" required/>
            </div>                                                       
        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input type="number" name="scale" style="font-weight:600" class="form-control inst_weight" value="<?php if(isset($_GET['edit_v2'])) echo $getROW['scale'];?>" autocomplete="off" required/>
            </div>
        <?php } ?>
    </div>
    <?php } else { ?>    
    <?php } ?> 