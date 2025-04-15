<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$sdate= $_POST['sdate'];
		$stitle = $_POST['stitle'];
		$sbranch = $_POST['sbranch'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/schedules/'.$filename);	
	
		}
		$sql = "INSERT INTO employees_schedule (id, sdate, stitle, sbranch, photo, created_on) VALUES ('$id', '$sdate', '$stitle', '$sbranch', '$filename', NOW())";
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


	header('location: ../view/hr_scheduler');
?>