<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$sdate = $_POST['sdate'];
		$stitle = $_POST['stitle'];
		$sbranch = $_POST['sbranch'];


		$sql = "UPDATE employees_schedule SET sdate = '$sdate', stitle = '$stitle', sbranch = '$sbranch' WHERE id = '$id'";
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

	header('location: ../view/hr_scheduler');

?>