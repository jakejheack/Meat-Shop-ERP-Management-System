<?php include 'common/session.php'; ?>
<?php if($_SESSION['records2'] == on){?>
	<!doctype html>
	<html lang="en">

	<head>
		<?php include 'common/title.php'; ?>
		<?php include 'common/print.php'; ?> 
		<!-- Bootstrap Css -->
		<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		<!-- Icons Css -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- App Css-->
		<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<!-- Sweet Alert -->
		<link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

		<!-- Responsive datatable examples -->
		<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


		<!-- plugin css -->
		<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
		<link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
	</head>

	<?php include 'common/body.php'; ?>

	<!-- Begin page -->
	<div id="layout-wrapper">

		<?php include 'common/header.php'; ?>
		<?php include 'common/sidebar.php'; ?>



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
								<?php if(isset($_GET['view'])) { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;View Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
											<li class="breadcrumb-item active">View Daily Records</li>
										</ol>
									</div>
								<?php } elseif(isset($_GET['edit'])) { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;Edit Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
											<li class="breadcrumb-item active">Edit Daily Records</li>
										</ol>
									</div>
								<?php } else { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
										</ol>
									</div>

									<?php if($_SESSION['access'] == Administrator){?>
										<div class="page-title-right">
											<a href="fl_dailyrecords_v2_settings?edit=1" style="font-size: 15px;" title="edit" class="btn btn-danger waves-effect waves-light mdi mdi mdi-progress-wrench"></a>&ensp;
										</div>
									<?php } ?>
								<?php } ?> 
							</div>
						</div>
					</div>
					<!-- end page title -->    

					<!-- Status -->
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

						<?php if (isset($_SESSION['warning_message']) && !empty($_SESSION['warning_message'])) { ?>
							<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
							<script>
								Swal.fire({
									position: 'center',
									icon: 'warning',
									title: '<?php echo $_SESSION['warning_message2']; ?>',
									showConfirmButton: false,
									timer: 2000
								})
							</script>
							<?php unset($_SESSION['warning_message']); } ?>
							<!-- End Status -->
							<!-- Start -->
							<form method="post" enctype="multipart/form-data" id="inst_form" class="needs-validation" novalidate>
								<div class="row">
									<div class="col-12" style="zoom:90%;">
										<div class="card">
											<div class="card-body">
												<div class="card-body">

													<!-- Date -->   
													<div class="row">
														<!-- Record Name -->
														<div class="form-group col-lg-4">
															<label>Date & Time</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo date('M-d-Y h:i a', strtotime($getROW['f1'] . ' + 8 hours')); ?>" readonly/>

															<?php } elseif(isset($_GET['rid'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php if(isset($rf1)) { echo (date('M-d-Y h:i a', strtotime($rf1 . ' + 8 hours'))); } ?>"  readonly/>

															<?php } else { ?>
																<input type="text" name="f1" class="form-control" value="<?php
																$date = new DateTime("now", new DateTimeZone('Asia/Manila') );
																echo $date->format('c');?>" autocomplete="off" style="font-weight: 600;" readonly/>

															<?php } ?>
														</div>
														<!-- Branch Record -->
														<div  class="form-group col-lg-4">
															<label>Branch</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['f2'];?>" disabled/>

															<?php } elseif(isset($_GET['rid'])) { ?>
																<input class="form-control" name="f2" style="font-weight:600;text-transform:capitalize;" value="<?php if(isset($rf2)) { echo $rf2; } ?>" readonly/>

															<?php } elseif($_SESSION['branch'] == All) { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="">- SELECT -</option>
																	<option value="Daet">Daet</option>
																	<option value="Magsaysay">Magsaysay</option>
																	<option value="Yashano">Yashano</option>
																</select>

															<?php } elseif($_SESSION['branch'] == Daet) { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="Daet">Daet</option>
																</select>
															<?php } elseif($_SESSION['branch'] == Magsaysay) { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="Magsaysay">Magsaysay</option>
																</select>
															<?php } elseif($_SESSION['branch'] == Yashano) { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="Yashano">Yashano</option>
																</select>
															<?php } else { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="">- SELECT -</option>
																</select>
															<?php } ?>

															<div class="invalid-feedback">
																Please select a access.
															</div>
															<div class="valid-feedback">
																Looks good!
															</div>

														</div>
														<!-- Status -->
														<div  class="form-group col-lg-4">
															<label>Status</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['f3'];?>" disabled/>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																	<option value="ReCheck">ReCheck</option>
																	<option value="Complete">Complete</option>
																</select>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Manager)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																</select>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Cashier || $_SESSION['access'] == Other)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																</select>

															<?php } elseif($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																	<option value="ReCheck">ReCheck</option>
																	<option value="Complete">Complete</option>
																</select>    
															<?php } elseif($_SESSION['access'] == Manager) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																</select>
															<?php } else {?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																</select>
															<?php } ?>

															<div class="invalid-feedback">
																Please select a status.
															</div>
															<div class="valid-feedback">
																Looks good!
															</div>

														</div>
													</div>

													<hr>


													<!-- First Heading -->
													<?php if ($settabstat1) { ?>
														<a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">

															<div class="card-header" id="headingOne">
																<h6 class="m-0">
																	<?php
																	$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																	while($row=$res->fetch_array()){
																		?>
																		<span><?php echo $row['tab1']; ?></span>
																	<?php } ?>
																	<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
																</h6>
															</div>
														</a>
														<br>
													<?php } else { ?>
													<?php } ?> 



													<div id="collapseOne" class="collapse"
													aria-labelledby="headingOne" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab1 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab1 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab1 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab1 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab1 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab1 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab1 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab1 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab1 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab1 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab1 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab1 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab1 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab1 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab1 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div> 

												<!-- End First Heading -->

												<!-- Second Heading -->
												<?php if ($settabstat2) { ?>
													<a href="#collapseTwo" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
														<div class="card-header" id="headingTwo">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab2']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?> 
												<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab2 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab2 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab2 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab2 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab2 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab2 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab2 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab2 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab2 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab2 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab2 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab2 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab2 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab2 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab2 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Second Heading -->
												<!-- Third Heading -->
												<?php if ($settabstat3) { ?>
													<a href="#collapseThree" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
														<div class="card-header" id="headingThree">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab3']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>  
												<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab3 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab3 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab3 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab3 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab3 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab3 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab3 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab3 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab3 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab3 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab3 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab3 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab3 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab3 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab3 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Third Heading -->
												<!-- Fourth Heading -->
												<?php if ($settabstat4) { ?>
													<a href="#collapseFour" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
														<div class="card-header" id="headingFour">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab4']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
													<div class="card-body">   
														<?php if ($setpktab4 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab4 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab4 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab4 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab4 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab4 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab4 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab4 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab4 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab4 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab4 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab4 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab4 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab4 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab4 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Fourth Heading -->
												<!-- Fifth Heading -->
												<?php if ($settabstat5) { ?>
													<a href="#collapseFive" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFive">

														<div class="card-header" id="headingFive">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab5']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab5 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab5 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab5 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab5 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab5 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab5 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab5 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab5 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab5 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab5 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab5 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab5 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab5 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab5 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab5 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Fifth Heading -->
												<!-- Sixth Heading -->
												<?php if ($settabstat6) { ?>
													<a href="#collapseSix" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseSix">

														<div class="card-header" id="headingSix">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab6']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseSix" class="collapse" aria-labelledby="headingSix data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab6 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab6 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab6 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab6 == '1') { ?> 
															<?php include 'daily_files/chick.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab6 == '1') { ?> 
															<?php include 'daily_files/cuscredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab6 == '1') { ?> 
															<?php include 'daily_files/empcredit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab6 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab6 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab6 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab6 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab6 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab6 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab6 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab6 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab6 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Sixth Heading -->

												<!-- total -->   
												<div class="row">
													<!-- Record Name -->
													<div  class="form-group col-lg-2">
													</div>

													<!-- In -->
													<div class="form-group col-lg-3">
													</div>

													<!-- Out -->
													<div class="form-group col-lg-3">
													</div>
												</div>

												<hr>


												<?php include 'daily_files/totalamount.php';?>



												<div class="row">

													<?php include 'daily_files/scale.php';?>
													<?php include 'daily_files/difference.php';?>

												</div>


												<div class="row">

													<?php include 'daily_files/sobra.php';?>
													<?php include 'daily_files/totalsale.php';?>

												</div> 

												<div class="row">
													<?php include 'daily_files/total.php';?>
												</div> 

												<br>
												<?php include 'daily_files/upload.php';?>
												<?php include 'daily_files/notes.php';?>


												<div class="row">
													<?php include 'daily_files/cashierduty.php';?>
													<?php include 'daily_files/recordduty.php';?>
												</div> 
											</div>
										</div>

										<!-- Button -->
										<div class="form-group mt-3" style="position:relative; text-align: right;padding-right: 30px;">
											<?php if(isset($_GET['view'])){?>
												<a href="fl_dailyrecords_v2.php" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
											<?php }elseif(isset($_GET['rid'])) { ?> 
												<button class="btn btn-warning waves-effect waves-light" type="submit" id="submit" name="submit" value="Save"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
												<a href="fl_dailyrecords_v2.php" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
											<?php } else { ?>
												<button type="submit" id='submit' name="submit" value="Save" class="btn btn-primary waves-effect waves-light" title="save records"><i class="mdi mdi-book-check-outline mr-2"></i> Submit
												</button>&nbsp;
												<a href="fl_dailyrecords_v2.php" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
											<?php } ?> 
										</div>
										<div class="mt-4">
										</div>
										<!-- End Button -->


									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- end row --> 

				</div> <!-- container-fluid -->
			</div>
			<!-- End Page-content -->


			<?php include 'common/footer.php'; ?>
		</div>
		<!-- end main content-->

	</div>
	<!-- END layout-wrapper -->
	<?php include 'common/theme.php'; ?>

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

	<!-- parsleyjs -->
	<script src="assets/libs/parsleyjs/parsley.min.js"></script>
	<script src="assets/js/pages/form-validation.init.js"></script>
	<!-- Session timeout js -->
	<script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
	<!-- Session timeout js -->
	<script src="assets/js/pages/session-timeout.init.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<!-- Sweet alert init js-->
	<script src="assets/js/pages/sweet-alerts.init.js"></script>

	
    </body>
    </html>
<?php } ?>
<?php 
if($_SESSION['records2'] != on)
{
	header('location:error404');
	exit;
}
?>