<?php if ($setupload) { ?>
<div class="row">
    <!-- Upload -->
    <div  class="form-group col-lg-2">
        <label class="form-control" style="font-weight:600;text-transform:capitalize;">Upload Documents</label>
    </div>
    <?php if(isset($_GET['view'])) { ?>
        <div class="form-group col-lg-8">
            <a href="../view/dl_dr2?path=../admin/view/uploads/dailyRecords/<?php echo $getROW['imageText'];?>" target="_blank"><label style="margin-top:7px;margin-left:px;"><i class="mdi mdi-cloud-download-outline"></i>&ensp;Download File</label></a>
        </div>

    <?php } elseif(isset($_GET['rid'])) { ?>
        <div class="form-group col-lg-8">
            <input style="margin-top:5px;" type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>

            <div id="hide-from-screen">
                <input name="imageText" id='outputfile' value="<?php if(isset($rimageText)) { echo ($rimageText); } ?>" readonly/>
            </div>
        </div>

    <?php } else { ?>
        <div class="form-group col-lg-8">
            <input style="margin-top:5px;" type="file" name="image" id='inputfile' onChange='getFileNameWithExt(event)'>

            <div id="hide-from-screen">
                <input name="imageText" id='outputfile' value="null" readonly/>
            </div>
        </div>
    <?php } ?>
</div>
<?php } else { ?>
<?php } ?> 