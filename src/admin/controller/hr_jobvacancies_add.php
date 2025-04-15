<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$position = $_POST['position'];
		$address = $_POST['address'];
		$experience = $_POST['experience'];
		$jobtype = $_POST['jobtype'];
		$noe = $_POST['noe'];
		$priority = $_POST['priority'];
		$branch = $_POST['branch'];
		$details = $_POST['details'];
		$stat = $_POST['stat'];

		$sql = "INSERT INTO job_vacancies (position, address, experience, jobtype, noe, priority, branch, details, stat, created_on) VALUES ('$position', '$address', '$experience', '$jobtype', '$noe', '$priority', '$branch', '$details', '$stat', NOW())";
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

	header('location: ../view/hr_jobvacancies');

?>