<!-- total -->   
<?php if ($settotalamount) { ?>
<div class="row">
    <!-- Record Name -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total Amount</label>
    </div>

    <!-- In -->
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total In</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalin'],2);?>" readonly/>
            </div>
        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total In</div>
                <input type="text" id="total_amount_totalin" name="totalin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalin'];?>" autocomplete="off" readonly/>
            </div>
        <?php } ?>
    </div>

    <!-- Out -->
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total Out</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalout'],2);?>" readonly/>
            </div>
        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total Out</div>
                <input id="total_amount_totalout" type="text" name="totalout" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalout'];?>" autocomplete="off" readonly/>
            </div>
        <?php } ?> 
    </div>
</div>
<?php } else { ?>
    <div class="row">
    <!-- Record Name -->
    <div  class="form-group col-lg-2" style="visibility: hidden;">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Total Amount</label>
    </div>

    <!-- In -->
    <div class="form-group col-lg-3" style="visibility: hidden;">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total In</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalin'],2);?>" readonly/>
            </div>
        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total In</div>
                <input type="text" id="total_amount_totalin" name="totalin" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalin'];?>" autocomplete="off" readonly/>
            </div>
        <?php } ?>
    </div>

    <!-- Out -->
    <div class="form-group col-lg-3" style="visibility: hidden;">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total Out</div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#f46a6a;" value="<?php echo round($getROW['totalout'],2);?>" readonly/>
            </div>
        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;">Total Out</div>
                <input id="total_amount_totalout" type="text" name="totalout" style="font-weight:600;color:#f46a6a;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalout'];?>" autocomplete="off" readonly/>
            </div>
        <?php } ?> 
    </div>
</div>
<?php } ?> 