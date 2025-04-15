<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$cpName = $_POST['cpName'];
		$cpTin = $_POST['cpTin'];
		$cpContacts = $_POST['cpContacts'];
		$cpAddress = $_POST['cpAddress'];
		$cpType = $_POST['cpType'];
		$cpEmail = $_POST['cpEmail'];
		$cplimitAmount = $_POST['cplimitAmount'];
		$cpStatus = $_POST['cpStatus'];

		$sql = "INSERT INTO customers_profile (cpName, cpTin, cpContacts, cpAddress, cpType, cpEmail, cplimitAmount, cpStatus, created_on) VALUES ('$cpName', '$cpTin', '$cpContacts', '$cpAddress', '$cpType', '$cpEmail', '$cplimitAmount', '$cpStatus', NOW())";
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

	header('location: ../view/cus_customers_profile');

?>