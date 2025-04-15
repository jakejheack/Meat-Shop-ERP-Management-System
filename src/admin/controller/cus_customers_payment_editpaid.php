<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cdate = $_POST['cdate'];
		$amountin = $_POST['amountin'];
		$branch = $_POST['branch'];
		$notes = $_POST['notes'];
		
		$sql = "UPDATE customers_status SET cdate = '$cdate', amountin = '$amountin', branch = '$branch', notes = '$notes' WHERE id = '$id'";
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

	header('location: ../view/cus_customers_payment');
?>