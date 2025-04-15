<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$cpName = $_POST['cpName'];
		$cpTin = $_POST['cpTin'];
		$cpContacts = $_POST['cpContacts'];
		$cpAddress = $_POST['cpAddress'];
		$cpType = $_POST['cpType'];
		$cpEmail = $_POST['cpEmail'];
		$cplimitAmount = $_POST['cplimitAmount'];
		$cpStatus = $_POST['cpStatus'];
		
		$sql = "UPDATE customers_profile SET cpName = '$cpName', cpTin = '$cpTin', cpContacts = '$cpContacts', cpAddress = '$cpAddress', cpType = '$cpType', cpEmail = '$cpEmail', cplimitAmount = '$cplimitAmount', cpStatus = '$cpStatus' WHERE id = '$id'";
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

	header('location: ../view/cus_customers_profile');
?>