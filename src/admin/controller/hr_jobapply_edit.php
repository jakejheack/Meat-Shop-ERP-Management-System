<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$posid = $_POST['posid'];
		$posposition = $_POST['posposition'];
		$posjobtype = $_POST['posjobtype'];
		$posbranch = $_POST['posbranch'];
		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$posemail = $_POST['posemail'];
		$stat = $_POST['stat'];
		$schedule = $_POST['schedule'];
		
		$sql = "UPDATE job_apply SET posid = '$posid', posposition = '$posposition', posjobtype = '$posjobtype', posbranch = '$posbranch', fullname = '$fullname', fullname = '$fullname', address = '$address', contact = '$contact', posemail = '$posemail', stat = '$stat', schedule = '$schedule' WHERE id = '$id'";
		if($conn->query($sql)){
			 session_start();
             $_SESSION['success_message'] = "Well Done!";
             $_SESSION['success_message2'] = "Successfully Update";
		}
		else{
			session_start();
            $_SESSION['error_message'] = "Oops...";
            $_SESSION['error_message2'] = "Something went wrong!";
		}

	}
	else{
        session_start();
        $_SESSION['error_message'] = "Oops...";
        $_SESSION['error_message2'] = "Something went wrong!";
	}

	header('location: ../view/hr_jobapply');
?>