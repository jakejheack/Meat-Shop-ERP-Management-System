<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$position = $_POST['position'];
		$address = $_POST['address'];
		$experience = $_POST['experience'];
		$jobtype = $_POST['jobtype'];
		$noe = $_POST['noe'];
		$priority = $_POST['priority'];
		$branch = $_POST['branch'];
		$details = $_POST['details'];
		$stat = $_POST['stat'];
		
		$sql = "UPDATE  job_vacancies SET position = '$position', address = '$address', experience = '$experience', jobtype = '$jobtype', noe = '$noe', priority = '$priority', branch = '$branch', details = '$details', stat = '$stat' WHERE id = '$id'";
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

	header('location: ../view/hr_jobvacancies');
?>