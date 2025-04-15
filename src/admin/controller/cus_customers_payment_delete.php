<?php
	include '../../../system/conn.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM customers_status WHERE id = '$id'";
		if($conn->query($sql)){
			session_start();
            $_SESSION['success_message'] = "Well Done!";
            $_SESSION['success_message2'] = "Permanently Deleted";
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