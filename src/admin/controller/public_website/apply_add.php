<?php
	include '../../../../system/conn.php';

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
        $filename = $_FILES['photo_text']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo_text']['tmp_name'], '../../uploads/jobApplicant/'.$filename);	
		}

		$sql = "INSERT INTO job_apply (posid, posposition, posjobtype, posbranch, fullname, address, contact, posemail, photo, stat, schedule, photo_text, created_on) VALUES ('$posid', '$posposition', '$posjobtype', '$posbranch', '$fullname', '$address', '$contact', '$posemail', ' ', 'Pending', ' ', '$filename', NOW())";
		if($conn->query($sql)){
			session_start();
            $_SESSION['success_message'] = "Well Done!";
            $_SESSION['success_message2'] = "Successfully Send";
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

	header('location: ../../../../../../index#vacancies');

?>
