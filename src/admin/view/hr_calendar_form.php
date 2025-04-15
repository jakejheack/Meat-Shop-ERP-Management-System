<?php include 'common/session.php' ?>
<?php if($_SESSION['calendar'] == on){?>
<?php include '../controller/hr_calendar.php'; ?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'common/title.php' ?> 
   <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
   <!-- Icons Css -->
   <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
   <!-- App Css-->
   <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert -->
   <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

   <!-- DataTables -->
   <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
   <!-- Responsive datatable examples -->
   <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
</head>

<?php include 'common/body.php' ?>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include 'common/header.php' ?>
        <?php include 'common/sidebar.php' ?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                   <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title-left">
                                    <h4 class="mb-2">&ensp;Event</h4>
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="dashboard1">&ensp;&nbsp;Home</a></li>
                                            <li class="breadcrumb-item active">Event</li>
                                        </ol>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->    

                        <!-- Sucess Status -->
                        
                        <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
                            <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
                            <script>
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: '<?php echo $_SESSION['success_message2']; ?>',
                                showConfirmButton: false,
                                timer: 2000
                                })
                            </script>
                        <?php unset($_SESSION['success_message']); } ?>
                        
                        <div class="row">
                            <div class="col-12">
                               <form method="post" class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        
                                                        <div class="row justify-content-center mt-5">
                                                                    <img src="assets/images/coming-soon-img.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                        <br>
                                                        <div id="external-events" class="m-t-20">
                                                            <br>
                                                            <div class="form-group">
                                                            <label for="formrow-firstname-input">Event Name&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr> </label>
                                                            <input type="text" name="calendarTitle" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calendarTitle'];?>" autocomplete="off" required>

                                                            <div class="invalid-feedback">
                                                            Please provide a title.
                                                            </div>
                                                        </div>


                                                        <div class="form-group mt-2">
                                                            <label for="formrow-firstname-input">Start Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr> </label>
                                                            <input type="datetime-local" name="calendarSdate" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calendarSdate'];?>" required>

                                                             <div class="invalid-feedback">
                                                            Please provide a start date.
                                                            </div>
                                                        </div>


                                                        <div class="form-group mt-2">
                                                            <label for="formrow-firstname-input">End Date&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                            <input type="datetime-local" name="calendarEdate" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['calendarEdate'];?>" required>

                                                            <div class="invalid-feedback">
                                                            Please provide a end date.
                                                            </div>
                                                        </div>


                                                        <div class="form-group mt-2">
                                                            <label for="formrow-firstname-input">Event Color&ensp;<abbr class="req" style="color:#FF5555" title="required">*</abbr></label>
                                                        <div>
                                                        <?php if(isset($_GET['edit'])) { ?>
                                                        <select class="form-control" name="calendarColor" style="text-transform: capitalize;" required>
                                                            <option value="<?php if(isset($_GET['edit'])) echo $getROW['calendarColor'];?>"><?php echo $getROW['calendarColor'];?></option>
                                                            <option value="" disabled select>- SELECT -</option>
                                                            <option value="bg-primary">Bg-Primary</option>
                                                            <option value="bg-success">Bg-Success</option>
                                                            <option value="bg-info">Bg-Info</option>
                                                            <option value="bg-warning">Bg-Warning</option>
                                                            <option value="bg-danger">Bg-Danger</option>
                                                        </select>
                                                        <?php } else { ?>
                                                        <select class="form-control" name="calendarColor" required>
                                                            <option value="">- SELECT -</option>
                                                            <option value="bg-primary">Bg-Primary</option>
                                                            <option value="bg-success">Bg-Success</option>
                                                            <option value="bg-info">Bg-Info</option>
                                                            <option value="bg-warning">Bg-Warning</option>
                                                            <option value="bg-danger">Bg-Danger</option>
                                                        </select>
                                                        <?php } ?>

                                                         <div class="invalid-feedback">
                                                            Please select a event color.
                                                        </div>
                                                        </div>
                                                        </div>
                                                            <br>
                                                            <?php if(isset($_GET['edit'])){?>
                                                                <button class="btn btn-success waves-effect waves-light" type="submit" name="update"><i class="mdi mdi-calendar-plus mr-2"></i>Update</button> &nbsp;
                                                                <a href="hr_calendar" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                                            <?php } else { ?>
                                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="save"><i class="mdi mdi-calendar-plus mr-2"></i>Save Event</button> &nbsp;
                                                                <a href="hr_calendar" class="btn btn-dark waves-effect waves-light"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
                                                            <?php } ?> 
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->
                                            

                                            <div class="col-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <table id="example" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Event Name</th>
                                                <th width="40">Start</th>
                                                <th width="40">End</th>

                                            <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <th width="40" style="text-align:center" id="btnPrint">Action</th>
                                            <?php } ?>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php
                                                $res = $MySQLiconn->query("SELECT * FROM calendar");
                                                while($row=$res->fetch_array()){                                       
                                            ?>
                                            <tr>
                                                <td style="text-transform: capitalize;"><?php echo $row['calendarTitle']; ?></td>
                                                <td><?php echo date('M-d-Y h:iA', strtotime($row['calendarSdate']));?></td>
                                                <td><?php echo date('M-d-Y h:iA', strtotime($row['calendarEdate'])); ?></td>

                                            <?php if($_SESSION['editbut'] == on || $_SESSION['deletebut'] == on){?>
                                                <td style="text-align:center" id="btnPrint">
                                                    <div class="action-btn">
                                                    <?php if($_SESSION['editbut'] == on){?>
                                                        <a href="hr_calendar_form?edit=<?php echo $row['calendarID']; ?>" class="text-info" title="edit"><i class="mdi mdi-pencil-box-outline" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION['deletebut'] == on){?>
                                                        <a href="?del=<?php echo $row['calendarID']; ?>" onclick="return confirm('sure to delete !'); " class="text-dark ml-2" title="delete"><i class="mdi mdi-delete-variant" style="font-size:17px"></i></a>
                                                    <?php } ?>
                                                    </div>
                                                </td>
                                            <?php } ?>
                                            </tr>
                                            <?php
                                                } 
                                            ?>
                                            </tbody>
                                        </table>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->

                                        </div>
                                   </form>
                                    <div style='clear:both'></div>
                           
                            </div>
                        </div>
                
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <?php include 'common/footer.php' ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <?php include 'common/theme.php' ?>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Time -->
    <script src="assets/js/time.js"></script>
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Session timeout js -->
    <script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
    <!-- Session timeout js -->
    <script src="assets/js/pages/session-timeout.init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>

    <!-- parsleyjs -->
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- plugin js -->
    <script src="assets/libs/moment/min/moment.min.js"></script>
    <script src="assets/libs/jquery-ui-dist/jquery-ui.min.js"></script>
    <script src="assets/libs/@fullcalendar/core/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/bootstrap/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/daygrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/timegrid/main.min.js"></script>
    <script src="assets/libs/@fullcalendar/interaction/main.min.js"></script>
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>

    <script>
        $(document).ready(function() {
           $('#example').DataTable( {
               "order": [[ 2, "desc" ]]
           } );
       } );
   </script>
</body>
</html>
<?php } ?>
<?php 
if($_SESSION['calendar'] != on)
{
    header('location:error404');
    exit;
}
?>