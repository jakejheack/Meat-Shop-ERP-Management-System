<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$suffix= $_POST['suffix'];
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
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/employee/'.$filename);	
		}
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$employee_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		$sql = "INSERT INTO employees (employee_id, firstname, middlename, lastname, suffix, address, peraddress, birthdate, gender, contact_info, email, emergency, philhealth, pagibig, sss, tin, designation, department, position_id, employment, schedule_id, stat, dismiss, photo, created_on) VALUES ('$employee_id', '$firstname', '$middlename', '$lastname', '$suffix', '$address', '$peraddress','$birthdate', '$gender', '$contact', '$email', '$emergency', '$philhealth', '$pagibig', '$sss', '$tin', '$designation', '$department', '$position', '$employment', '$schedule', '$stat', '$dismiss','$filename', NOW())";
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
        $_SESSION['error_message2'] = "Fill up add form first";
	}


	header('location: ../view/hr_employees');
?>