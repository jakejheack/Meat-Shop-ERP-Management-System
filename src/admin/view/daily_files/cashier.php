<?php if ($setcashier) { ?>
   <!-- 1st 1T -->   
   <div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <label>#1 Morning</label>
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m1t'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_1t" name="m1t" value="<?php if(isset($rm1t)) { echo $rm1t; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_1t" name="m1t" value="<?php if(isset($_GET['edit'])) echo $getROW['m1t'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <label>#1 Evening</label>
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e1t'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_1t" name="e1t" value="<?php if(isset($re1t)) { echo $re1t; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_1t" name="e1t" value="<?php if(isset($_GET['edit'])) echo $getROW['e1t'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd 1T -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <label>#2 Morning</label>
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm1t'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
         <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_1t" name="nm1t" value="<?php if(isset($rnm1t)) { echo $rnm1t; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_1t" name="nm1t" value="<?php if(isset($_GET['edit'])) echo $getROW['nm1t'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <label>#2 Evening</label>
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne1t'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
     <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_1t" name="ne1t"value="<?php if(isset($rne1t)) { echo $rne1t; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">1T</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_1t" name="ne1t" value="<?php if(isset($_GET['edit'])) echo $getROW['ne1t'];?>" autocomplete="off"/>
    </div>
<?php } ?>
</div>
</div>

<!-- 1st 5H -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m5h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_5h" name="m5h" value="<?php if(isset($rm5h)) { echo $rm5h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_5h" name="m5h" value="<?php if(isset($_GET['edit'])) echo $getROW['m5h'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e5h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_5h" name="e5h" value="<?php if(isset($re5h)) { echo $re5h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_5h" name="e5h" value="<?php if(isset($_GET['edit'])) echo $getROW['e5h'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd 5H -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm5h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
         <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_5h" name="nm5h" value="<?php if(isset($rnm5h)) { echo $rnm5h; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_5h" name="nm5h" value="<?php if(isset($_GET['edit'])) echo $getROW['nm5h'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne5h'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
     <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_5h" name="ne5h" value="<?php if(isset($rne5h)) { echo $rne5h; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">5H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_5h" name="ne5h" value="<?php if(isset($_GET['edit'])) echo $getROW['ne5h'];?>" autocomplete="off"/>
    </div>
<?php } ?>
</div>
</div>

<!-- 1st 2H -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m2h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
          <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_2h" name="m2h" value="<?php if(isset($rm2h)) { echo $rm2h; } ?>"autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_2h" name="m2h" value="<?php if(isset($_GET['edit'])) echo $getROW['m2h'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['e2h'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
      <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_2h" name="e2h" value="<?php if(isset($re2h)) { echo $re2h; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_2h" name="e2h" value="<?php if(isset($_GET['edit'])) echo $getROW['e2h'];?>" autocomplete="off"/>
    </div>
<?php } ?>
</div>

<!-- 2nd 2H -->
<!-- Morning -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm2h'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
       <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_2h" name="nm2h" value="<?php if(isset($rnm2h)) { echo $rnm2h; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_2h" name="nm2h" value="<?php if(isset($_GET['edit'])) echo $getROW['nm2h'];?>" autocomplete="off"/>
    </div>
<?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['ne2h'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_2h" name="ne2h" value="<?php if(isset($rne2h)) { echo $rne2h; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">2H</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_2h" name="ne2h" value="<?php if(isset($_GET['edit'])) echo $getROW['ne2h'];?>" autocomplete="off"/>
        </div>
    <?php } ?>
</div>
</div>

<!-- 1st 1H -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m1h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_1h" name="m1h" value="<?php if(isset($rm1h)) { echo $rm1h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_1h" name="m1h" value="<?php if(isset($_GET['edit'])) echo $getROW['m1h'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e1h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_1h" name="e1h" value="<?php if(isset($re1h)) { echo $re1h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_1h" name="e1h" value="<?php if(isset($_GET['edit'])) echo $getROW['e1h'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd 1H -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm1h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_1h" name="nm1h" value="<?php if(isset($rnm1h)) { echo $rnm1h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_1h" name="nm1h" value="<?php if(isset($_GET['edit'])) echo $getROW['nm1h'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne1h'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_1h" name="ne1h" value="<?php if(isset($rne1h)) { echo $rne1h; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">1H</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_1h" name="ne1h" value="<?php if(isset($_GET['edit'])) echo $getROW['ne1h'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>
</div>



<!-- 1st 50 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">50</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m50'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
           <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_50" name="m50" value="<?php if(isset($rm50)) { echo $rm50; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_50" name="m50" value="<?php if(isset($_GET['edit'])) echo $getROW['m50'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e50'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_50" name="e50" value="<?php if(isset($re50)) { echo $re50; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_50" name="e50" value="<?php if(isset($_GET['edit'])) echo $getROW['e50'];?>" autocomplete="off"/>
        </div>
    <?php } ?>
</div>

<!-- 2nd 50 -->
<!-- Morning -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm50'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_50" name="nm50" value="<?php if(isset($rnm50)) { echo $rnm50; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_50" name="nm50" value="<?php if(isset($_GET['edit'])) echo $getROW['nm50'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne50'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_50" name="ne50" value="<?php if(isset($rne50)) { echo $rne50; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">50</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_50" name="ne50" value="<?php if(isset($_GET['edit'])) echo $getROW['ne50'];?>" autocomplete="off"/>
        </div>
    <?php } ?>
</div>
</div>

<!-- 1st 20 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">20</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m20'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">20</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_20" name="m20" value="<?php if(isset($rm20)) { echo $rm20; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">20</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_20" name="m20" value="<?php if(isset($_GET['edit'])) echo $getROW['m20'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">20</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e20'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
           <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">20</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_20" name="e20" value="<?php if(isset($re20)) { echo $re20; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">20</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_20" name="e20" value="<?php if(isset($_GET['edit'])) echo $getROW['e20'];?>" autocomplete="off"/>
        </div>
    <?php } ?>
</div>

<!-- 2nd 20 -->
<!-- Morning -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">20</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm20'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
      <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">20</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_20" name="nm20" value="<?php if(isset($rnm20)) { echo $rnm20; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">20</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_20" name="nm20" value="<?php if(isset($_GET['edit'])) echo $getROW['nm20'];?>" autocomplete="off"/>
    </div>
<?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">20</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne20'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
       <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">20</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_20" name="ne20" value="<?php if(isset($rne20)) { echo $rne20; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">20</b></div>
        <input  type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_20" name="ne20" value="<?php if(isset($_GET['edit'])) echo $getROW['ne20'];?>" autocomplete="off"/>
    </div>
<?php } ?>
</div>
</div>

<!-- 1st 10 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">10</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m10'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
           <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_10" name="m10" value="<?php if(isset($rm10)) { echo $rm10; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_10" name="m10" value="<?php if(isset($_GET['edit'])) echo $getROW['m10'];?>" autocomplete="off"/>
        </div>
    <?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e10'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
       <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">10</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_10" name="e10" value="<?php if(isset($re10)) { echo $re10; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">10</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_10" name="e10" value="<?php if(isset($_GET['edit'])) echo $getROW['e10'];?>" autocomplete="off"/>
    </div>
<?php } ?>
</div>

<!-- 2nd 10 -->
<!-- Morning -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm10'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
       <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">10</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_10" name="nm10" value="<?php if(isset($rnm10)) { echo $rnm10; } ?>" autocomplete="off"/>
    </div>

<?php } else { ?>
    <div class="input-group">
        <div class="input-group-text"><b style="font-weight:600;">10</b></div>
        <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_10" name="nm10" value="<?php if(isset($_GET['edit'])) echo $getROW['nm10'];?>" autocomplete="off"/>
    </div>
<?php } ?> 
</div>
<!-- Evening -->
<div class="form-group col-lg-2">
    <?php if(isset($_GET['view'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne10'];?>" disabled/>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_10" name="ne10" value="<?php if(isset($rne10)) { echo $rne10; } ?>" autocomplete="off"/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text"><b style="font-weight:600;">10</b></div>
            <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_10" name="ne10" value="<?php if(isset($_GET['edit'])) echo $getROW['ne10'];?>" autocomplete="off"/>
        </div>
    <?php } ?>
</div>
</div>

<!-- 1st 05 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m05'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_05" name="m05" value="<?php if(isset($rm05)) { echo $rm05; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_05" name="m05" value="<?php if(isset($_GET['edit'])) echo $getROW['m05'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e05'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_05" name="e05" value="<?php if(isset($re05)) { echo $re05; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_05" name="e05" value="<?php if(isset($_GET['edit'])) echo $getROW['e05'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd 05 -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm05'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_05" name="nm05" value="<?php if(isset($rnm05)) { echo $rnm05; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_05" name="nm05" value="<?php if(isset($_GET['edit'])) echo $getROW['nm05'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne05'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_05" name="ne05" value="<?php if(isset($rne05)) { echo $rne05; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">05</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_05" name="ne05" value="<?php if(isset($_GET['edit'])) echo $getROW['ne05'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>
</div>

<!-- 1st 01 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m01'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_01" name="m01" value="<?php if(isset($rm01)) { echo $rm01; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_01" name="m01" value="<?php if(isset($_GET['edit'])) echo $getROW['m01'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e01'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_01" name="e01" value="<?php if(isset($re01)) { echo $re01; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_01" name="e01" value="<?php if(isset($_GET['edit'])) echo $getROW['e01'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd 01 -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['nm01'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_01" name="nm01" value="<?php if(isset($rnm01)) { echo $rnm01; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_01" name="nm01" value="<?php if(isset($_GET['edit'])) echo $getROW['nm01'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['ne01'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_01" name="ne01" value="<?php if(isset($rne01)) { echo $rne01; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">01</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_01" name="ne01" value="<?php if(isset($_GET['edit'])) echo $getROW['ne01'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>
</div>

<!-- 1st .25 -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['m025'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_25" name="m025" value="<?php if(isset($rm025)) { echo $rm025; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stmorning_25" name="m025" value="<?php if(isset($_GET['edit'])) echo $getROW['m025'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['e025'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_25" name="e025" value="<?php if(isset($re025)) { echo $re025; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" style="font-weight:600;color:#5b73e8;" class="form-control inst_1stevening_25" name="e025" value="<?php if(isset($_GET['edit'])) echo $getROW['e025'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd .25 -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['nm025'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" name="nm025" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_25" value="<?php if(isset($rnm025)) { echo $rnm025; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input  type="number" name="nm025" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndmorning_25" value="<?php if(isset($_GET['edit'])) echo $getROW['nm025'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo $getROW['ne025'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" name="ne025" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_25" value="<?php if(isset($rne025)) { echo $rne025; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text"><b style="font-weight:600;">.25</b></div>
                <input type="number" name="ne025" style="font-weight:600;color:#5b73e8;" class="form-control inst_2ndevening_25" value="<?php if(isset($_GET['edit'])) echo $getROW['ne025'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>
</div>

<!-- 1st TA -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"  value="<?php echo $getROW['mta1'];?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_1st_morning" type="number" style="font-weight:600;color:#5b73e8;" class="form-control" name="mta1" value="<?php if(isset($rmta1)) { echo $rmta1; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_1st_morning" type="number" style="font-weight:600;color:#5b73e8;" class="form-control" name="mta1" value="<?php if(isset($_GET['edit'])) echo $getROW['mta1'];?>" autocomplete="off"/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;"   value="<?php echo $getROW['eta1'];?>" disabled/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_1st_evening" type="number" style="font-weight:600;color:#5b73e8;" class="form-control" name="eta1" value="<?php if(isset($reta1)) { echo $reta1; } ?>" autocomplete="off"/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_1st_evening" type="number" style="font-weight:600;color:#5b73e8;" class="form-control" name="eta1" value="<?php if(isset($_GET['edit'])) echo $getROW['eta1'];?>" autocomplete="off"/>
            </div>
        <?php } ?>
    </div>

    <!-- 2nd TA -->
    <!-- Morning -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalsecMorning'],2);?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_2nd_morning" type="number" name="totalsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($rtotalsecMorning)) { echo $rtotalsecMorning; } ?>" autocomplete="off" readonly/>
            </div>

        <?php } else { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input id="total_2nd_morning" type="number" name="totalsecMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalsecMorning'];?>" autocomplete="off" readonly/>
            </div>
        <?php } ?> 
    </div>
    <!-- Evening -->
    <div class="form-group col-lg-2">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
                <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalsecEvening'],2);?>" readonly/>
            </div>

        <?php } elseif(isset($_GET['rid'])) { ?>
         <div class="input-group">
            <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
            <input id="total_2nd_evening" type="number" name="totalsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($rtotalsecEvening)) { echo $rtotalsecEvening; } ?>" autocomplete="off" readonly/>
        </div>

    <?php } else { ?>
        <div class="input-group">
            <div class="input-group-text" style="background-color:#74788d;color:white;"><b style="font-weight:600;">TA</b></div>
            <input id="total_2nd_evening" type="number" name="totalsecEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalsecEvening'];?>" autocomplete="off" readonly/>
        </div>
    <?php } ?>
</div> 
</div>

<!-- OVERALL TA -->   
<div class="row mt-2">
    <div class="col-lg-2"></div>
    <!-- SPACE -->
    <div class="form-group col-lg-1"></div>
    <!-- TA MORNING -->
    <div class="form-group col-lg-3">
        <?php if(isset($_GET['view'])) { ?>
            <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Morning</b></div>
                    <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalAllMorning'],2);?>" readonly/>
                </div>

            <?php } elseif(isset($_GET['rid'])) { ?>
             <div class="input-group">
                <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Morning</b></div>
                    <input id="total_cashier_morning" type="number" name="totalAllMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($rtotalAllMorning)) { echo $rtotalAllMorning; } ?>" autocomplete="off" readonly/>
                </div>

            <?php } else { ?>
                <div class="input-group">
                    <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Morning</b></div>
                        <input id="total_cashier_morning" type="number" name="totalAllMorning" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAllMorning'];?>" autocomplete="off" readonly/>
                    </div>
                <?php } ?> 
            </div>

            <!-- TA EVENING -->
            <div class="form-group col-lg-3">
                <?php if(isset($_GET['view'])) { ?>
                    <div class="input-group">
                        <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Evening</b></div>
                            <input class="form-control" style="font-weight:600;text-transform:capitalize;color:#5b73e8;" value="<?php echo round($getROW['totalAllEvening'],2);?>" readonly/>
                        </div>

                    <?php } elseif(isset($_GET['rid'])) { ?>
                     <div class="input-group">
                        <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Evening</b></div>
                            <input id="total_cashier_evening" type="number" name="totalAllEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($rtotalAllEvening)) { echo $rtotalAllEvening; } ?>" autocomplete="off" readonly/>
                        </div>

                    <?php } else { ?>
                        <div class="input-group">
                            <div class="input-group-text" style="background-color:#34c38f;color:white;"><b style="font-weight:600;">TA Evening</b></div>
                                <input id="total_cashier_evening" type="number" name="totalAllEvening" style="font-weight:600;color:#5b73e8;" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['totalAllEvening'];?>" autocomplete="off" readonly/>
                            </div>
                        <?php } ?>
                    </div> 
                </div>
            <?php } else { ?>
            <?php } ?>
         <!-- END CASHIER --> 