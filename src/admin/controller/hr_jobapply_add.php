<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
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
		$photo_text = $_POST['photo_text'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/jobApplicant/'.$filename);	
		}

		$sql = "INSERT INTO job_apply (posid, posposition, posjobtype, posbranch, fullname, address, contact, posemail, stat, schedule, photo_text, photo, created_on) VALUES ('$posid', '$posposition', '$posjobtype', '$posbranch', '$fullname', '$address', '$contact', '$posemail', '$stat', '$schedule', '$photo_text', '$filename', NOW())";
		if($conn->query($sql)){
			session_start();
            $_SESSION['success_message'] = "Well Done!";
            $_SESSION['success_message2'] = "Successfully Saved";
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