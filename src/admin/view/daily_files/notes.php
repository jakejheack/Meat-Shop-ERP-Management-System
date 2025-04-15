<?php if ($setnotes) { ?>
<div class="row">
    <!-- Notes -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Notes</label>
    </div>
    <div class="form-group col-lg-8">
        <?php if(isset($_GET['view'])) { ?>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['notes'];?>" readonly/>
        <?php } elseif(isset($_GET['rid'])) { ?>

            <input class="form-control" name="notes" value="<?php if(isset($rnotes)) { echo ($rnotes); } ?>"/>

        <?php } else { ?>
            <input name="notes" class="form-control"  autocomplete="off"/>
        <?php } ?>
    </div>
</div> 
<?php } else { ?>    
<?php } ?>