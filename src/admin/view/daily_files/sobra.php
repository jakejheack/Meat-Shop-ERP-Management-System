 <?php if ($setsobra) { ?>
    <!-- Sobra -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Sobra</label>
    </div>
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input id="sobra" class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['sobra'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input type="number" class="form-control inst_sobra" style="font-weight:600;text-transform:capitalize;" name="sobra" value="<?php if(isset($rsobra)) { echo $rsobra; } ?>" required/>
            </div>  

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="font-weight:600;">₱</div>
                <input type="number" name="sobra" style="font-weight:600" class="form-control inst_sobra" value="<?php if(isset($_GET['edit_v2'])) echo $getROW['sobra'];?>" autocomplete="off required" required/>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>    
<?php } ?> 