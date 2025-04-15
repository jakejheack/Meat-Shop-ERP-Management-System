<!-- Add -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Add Employee</b></h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/hr_employees_add.php" enctype="multipart/form-data" class="form-horizontal needs-validation" novalidate>
                  <div class="col-lg-12" style="zoom:95%;">
                         <h4 class="card-title" style="color:#778BEC">● Information</h4>
                         <hr>
                        <div class="row">                            
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="firstname">First Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="firstname" name="firstname" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="middlename">Middle Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="middlename" name="middlename" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="lastname">Last Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="lastname" name="lastname" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="suffix">Suffix&ensp;<i style="font-weight:400;">(Sr, Jr, I, II, III)</i></label>
                                        <input type="text" class="form-control uppercase" id="suffix" name="suffix" autocomplete="off">
                                    </div>
                                </div>                            
                                <div class="col-lg-12">
                                    <div class="mt-2">
                                        <label class="form-label" for="address">Present Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="address" name="address" autocomplete="off" required>
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label" for="peraddress">Permanent Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="peraddress" name="peraddress" autocomplete="off" required>
                                    </div>
                                </div>                        
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="datepicker_add">Birth of Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="date" class="form-control" id="datepicker_add" name="birthdate" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="gender">Gender&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="gender" id="gender" autocomplete="off" required>
                                            <option value="" selected>- SELECT -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="contact">Contact Number</label>
                                        <input type="number" class="form-control" id="contact" name="contact" autocomplete="off">
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-12">
                                <div class="mb-2">
                                        <label class="form-label" for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="emergency">Emergency Contact Number</label>
                                    <input type="number" class="form-control" id="emergency" name="emergency" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="photo">Upload <i style="font-weight:400;">(at least 2x2 Photo)</i></label>
                                    <div class="mt-1">
                                        <div class="col-sm-6">
                                            <input type="file" name="photo" id="photo" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Benefits ID</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="philhealth">PhilHealth</label>
                                        <input type="number" class="form-control" id="philhealth" name="philhealth" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="pagibig">Pagibig</label>
                                        <input type="number" class="form-control" id="pagibig" name="pagibig" autocomplete="off">
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="sss">SSS</label>
                                        <input type="number" class="form-control" id="sss" name="sss" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                    <label class="form-label" for="tin">TIN ID</label>
                                     <input type="number" class="form-control" id="tin" name="tin" autocomplete="off">
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Remarks</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="designation">Designation&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="designation" id="designation" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM designation WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_designation']."'>".$prow['ex_designation']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="department">Department&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="department" id="department" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM department WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_department']."'>".$prow['ex_department']."</option>
                                                ";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="position">Position&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="position" id="position" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM position";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['id']."'>".$prow['description']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="employment">Employment Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="employment" id="employment" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM employment_status WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_employmentStatus']."'>".$prow['ex_employmentStatus']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="schedule">Scheduled&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control" id="schedule" name="schedule" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                            <?php
                                                $sql = "SELECT * FROM schedules";
                                                $query = $conn->query($sql);
                                                while($srow = $query->fetch_assoc()){
                                                    echo "
                                                    <option value='".$srow['id']."'>".date('h:i A', strtotime($srow['time_in'])).' - '.date('h:i A', strtotime($srow['time_out']))."</option>
                                                     ";
                                                }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="stat">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="stat" id="stat" autocomplete="off" required>
                                        <option value="" selected>- SELECT -</option>
                                        <option value="Active">Active</option>
                                        <option value="Disable">Disable</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Dismissal</h4>
                                <hr>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="dismiss">Dismiss Date</label>
                                        <input type="date" class="form-control" id="dismiss" name="dismiss" autocomplete="off">
                                    </div>
                                </div>
                            </div> 
                            
                            </div>
                        </div>
                        <!-- End Form Layout -->        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="add"><i class=" mdi mdi-database-plus"></i> Save </button>
           </div>
        </form>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Edit Employee</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="../controller/hr_employees_edit.php" class="form-horizontal needs-validation" novalidate>
                <input type="hidden" class="empid" name="id">
                <div class="col-lg-12" style="zoom:95%;">
                         <h4 class="card-title" style="color:#778BEC">● Information</h4>
                         <hr>
                        <div class="row"> 
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_firstname">First Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="edit_firstname" name="firstname" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_middlename">Middle Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="edit_middlename" name="middlename" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_lastname">Last Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="edit_lastname" name="lastname" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="edit_suffix">Suffix&ensp;<i style="font-weight:400;">(Sr, Jr, I, II, III)</i></label>
                                        <input type="text" class="form-control uppercase" id="edit_suffix" name="suffix" autocomplete="off">
                                    </div>
                                </div>                            
                                <div class="col-lg-12">
                                    <div class="mt-2">
                                        <label class="form-label" for="edit_address">Present Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="edit_address" name="address" autocomplete="off" required>
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label" for="edit_peraddress">Permanent Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="edit_peraddress" name="peraddress" autocomplete="off" required>
                                    </div>
                                </div>                        
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="datepicker_edit">Birth of Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="date" class="form-control" id="datepicker_edit" name="birthdate" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_gender">Gender&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="gender" id="edit_gender" autocomplete="off" required>
                                            <option selected id="gender_val">- SELECT -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_contact">Contact Number</label>
                                        <input type="number" class="form-control" id="edit_contact" name="contact" autocomplete="off">
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-12">
                                <div class="mb-2">
                                        <label class="form-label" for="edit_email">Email Address</label>
                                        <input type="email" class="form-control" id="edit_email" name="email" autocomplete="off">
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_emergency">Emergency Contact Number</label>
                                    <input type="number" class="form-control" id="edit_emergency" name="emergency" autocomplete="off">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Benefits ID</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="edit_philhealth">PhilHealth</label>
                                        <input type="number" class="form-control" id="edit_philhealth" name="philhealth" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="edit_pagibig">Pagibig</label>
                                        <input type="number" class="form-control" id="edit_pagibig" name="pagibig" autocomplete="off">
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="edit_sss">SSS</label>
                                        <input type="number" class="form-control" id="edit_sss" name="sss" autocomplete="off">
                                    </div>
                                    <div class="mb-2">
                                    <label class="form-label" for="edit_tin">TIN ID</label>
                                     <input type="number" class="form-control" id="edit_tin" name="tin" autocomplete="off">
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Remarks</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_designation">Designation&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="designation" id="edit_designation" autocomplete="off" required>
                                        <option selected id="edit_designation">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM designation WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_designation']."'>".$prow['ex_designation']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_department">Department&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="department" id="edit_department" autocomplete="off" required>
                                        <option selected id="edit_department">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM department WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_department']."'>".$prow['ex_department']."</option>
                                                ";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_position">Position&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="position" id="edit_position" autocomplete="off" required>
                                        <option selected id="position_val">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM position";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['id']."'>".$prow['description']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_employment">Employment Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="employment" id="edit_employment" autocomplete="off" required>
                                        <option selected id="edit_employment">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM employment_status WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_employmentStatus']."'>".$prow['ex_employmentStatus']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_schedule">Scheduled&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control" id="edit_schedule" name="schedule" autocomplete="off" required>
                                        <option selected id="schedule_val">- SELECT -</option>
                                            <?php
                                                $sql = "SELECT * FROM schedules";
                                                $query = $conn->query($sql);
                                                while($srow = $query->fetch_assoc()){
                                                    echo "
                                                    <option value='".$srow['id']."'>".date('h:i A', strtotime($srow['time_in'])).' - '.date('h:i A', strtotime($srow['time_out']))."</option>
                                                     ";
                                                }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="edit_stat">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="stat" id="edit_stat" autocomplete="off" required>
                                        <option selected id="edit_stat">- SELECT -</option>
                                        <option value="Active">Active</option>
                                        <option value="Disable">Disable</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Dismissal</h4>
                                <hr>
                            </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="edit_dismiss">Dismiss Date</label>
                                        <input type="date" class="form-control" id="edit_dismiss" name="dismiss" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </div>
                        <!-- End Form Layout -->        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                <button type="submit" class="btn btn-success" name="edit"><i class="mdi mdi-database-refresh"></i> Update </button>
           </div>
         </form>
        </div>
    </div>
</div>

<!-- view -->
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="view">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>View Employee</b></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="employee_edit.php">
                <input type="hidden" class="empid" name="id">
                <div class="col-lg-12" style="zoom:95%;">
                         <h4 class="card-title" style="color:#778BEC">● Information</h4>
                         <hr>
                        <div class="row"> 
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="view_firstname">First Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="view_firstname" name=firstname disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="view_middlename">Middle Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="view_middlename" name="middlename" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="view_lastname">Last Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="view_lastname" name="lastname" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mt-1">
                                        <label class="form-label" for="view_suffix">Suffix&ensp;<i style="font-weight:400;">(Sr, Jr, I, II, III)</i></label>
                                        <input type="text" class="form-control uppercase" id="view_suffix" name="suffix" disabled>
                                    </div>
                                </div>                            
                                <div class="col-lg-12">
                                    <div class="mt-2">
                                        <label class="form-label" for="view_address">Present Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="view_address" name="address" disabled>
                                    </div>
                                    <div class="mt-2">
                                        <label class="form-label" for="view_peraddress">Permanent Address&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="text" class="form-control uppercase" id="view_peraddress" name="peraddress" disabled>
                                    </div>
                                </div>                        
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="datepicker_view">Birth of Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <input type="date" class="form-control" id="datepicker_view" name="birthdate" disabled>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="view_gender">Gender&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="gender" id="view_gender" disabled>
                                            <option selected id="gender_view">- SELECT -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-4">
                                <div class="mt-2">
                                    <div class="mb-3">
                                        <label class="form-label" for="view_contact">Contact Number</label>
                                        <input type="number" class="form-control" id="view_contact" name="contact" disabled>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-12">
                                <div class="mb-2">
                                        <label class="form-label" for="view_email">Email Address</label>
                                        <input type="email" class="form-control" id="view_email" name="email" disabled>
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="view_emergency">Emergency Contact Number</label>
                                    <input type="number" class="form-control" id="view_emergency" name="emergency" disabled>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Benefits ID</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="view_philhealth">PhilHealth</label>
                                        <input type="number" class="form-control" id="view_philhealth" name="philhealth" disabled>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="view_pagibig">Pagibig</label>
                                        <input type="number" class="form-control" id="view_pagibig" name="pagibig" disabled>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="view_sss">SSS</label>
                                        <input type="number" class="form-control" id="view_sss" name="sss" disabled>
                                    </div>
                                    <div class="mb-2">
                                    <label class="form-label" for="view_tin">TIN ID</label>
                                     <input type="number" class="form-control" id="view_tin" name="tin" disabled>
                                </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                            <div class="mt-4">
                                <h4 class="card-title" style="color:#778BEC">● Remarks</h4>
                                <hr>
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="view_designation">Designation&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="designation" id="view_designation" disabled>
                                        <option selected id="view_designation">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM designation WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_designation']."'>".$prow['ex_designation']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-3">
                                    <div class="mb-3">
                                        <label class="form-label" for="view_department">Department&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                        <select class="form-control uppercase" name="department" id="view_department" disabled>
                                        <option selected id="view_department">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM department WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_department']."'>".$prow['ex_department']."</option>
                                                ";
                                            }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="view_position">Position&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="position" id="view_position" disabled>
                                        <option selected id="position_view">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM position";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['id']."'>".$prow['description']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="view_employment">Employment Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="employment" id="view_employment" disabled>
                                        <option selected id="view_employment">- SELECT -</option>
                                        <?php
                                            $sql = "SELECT * FROM employment_status WHERE ex_status='Enabled';";
                                            $query = $conn->query($sql);
                                                while($prow = $query->fetch_assoc()){
                                                echo "
                                                <option value='".$prow['ex_employmentStatus']."'>".$prow['ex_employmentStatus']."</option>
                                                ";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="view_schedule">Scheduled&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control" id="view_schedule" name="schedule" disabled>
                                        <option selected id="schedule_view">- SELECT -</option>
                                            <?php
                                                $sql = "SELECT * FROM schedules";
                                                $query = $conn->query($sql);
                                                while($srow = $query->fetch_assoc()){
                                                    echo "
                                                    <option value='".$srow['id']."'>".$srow['time_in'].' - '.$srow['time_out']."</option>
                                                     ";
                                                }
                                            ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label" for="view_stat">Status&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                    <select class="form-control uppercase" name="stat" id="view_stat" disabled>
                                        <option selected id="view_stat">- SELECT -</option>
                                        <option value="Active">Active</option>
                                        <option value="Disable">Disable</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- End Form Layout -->        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
           </div>
         </form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="delete">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="../controller/hr_employees_delete.php">
                    <input type="hidden" class="empid" name="id">
                    <div class="text-center">
                        <p>DELETE EMPLOYEE</p>
                        <h2 class="bold del_employee_name capitalize"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit_photo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title uppercase"><b><span class="del_employee_name"></span></b></h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="../controller/hr_employees_edit_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="empid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-12 control-label">Upload <i style="font-weight:400;">(at least 2x2 Photo)</i></label>

                    <div class="col-sm-12">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="mdi mdi-close-thick"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="mdi mdi-database-refresh"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    