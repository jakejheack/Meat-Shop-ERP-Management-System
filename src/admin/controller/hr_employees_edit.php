<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$empid = $_POST['id'];
		$firstname = $_POST['firstname'];
		$middlename= $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$suffix = $_POST['suffix'];
		$address = $_POST['address'];
		$peraddress = $_POST['peraddress'];
		$birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$emergency = $_POST['emergency'];
		$philhealth = $_POST['philhealth'];
		$pagibig = $_POST['pagibig'];
		$sss = $_POST['sss'];
		$tin = $_POST['tin'];
		$designation = $_POST['designation'];
		$department = $_POST['department'];		
		$position = $_POST['position'];
		$employment = $_POST['employment'];
		$schedule = $_POST['schedule'];
		$stat = $_POST['stat'];
		$dismiss = $_POST['dismiss'];
		
		$sql = "UPDATE employees SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', suffix = '$suffix', address = '$address', peraddress = '$peraddress', birthdate = '$birthdate', gender = '$gender', contact_info = '$contact', email = '$email', emergency = '$emergency', philhealth = '$philhealth', pagibig = '$pagibig', sss = '$sss', tin = '$tin', designation = '$designation', department = '$department', position_id = '$position', employment = '$employment', schedule_id = '$schedule', stat = '$stat', dismiss = '$dismiss' WHERE id = '$empid'";
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

	header('location: ../view/hr_employees');
?>