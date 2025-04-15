<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$sd_profileName = $_POST['sd_profileName'];
		$sd_profileContacts = $_POST['sd_profileContacts'];
		$sd_profileAddress = $_POST['sd_profileAddress'];
		$sd_profileEmail = $_POST['sd_profileEmail'];
		$sd_profileCategory = $_POST['sd_profileCategory'];
		$sd_profileType = $_POST['sd_profileType'];
		$sd_profileBank = $_POST['sd_profileBank'];
		$sd_profileStatus = $_POST['sd_profileStatus'];

		$sql = "INSERT INTO sd_profile (sd_profileName, sd_profileContacts, sd_profileAddress, sd_profileEmail, sd_profileCategory, sd_profileType, sd_profileBank, sd_profileStatus, created_on) VALUES ('$sd_profileName', '$sd_profileContacts', '$sd_profileAddress', '$sd_profileEmail', '$sd_profileCategory', '$sd_profileType', '$sd_profileBank', '$sd_profileStatus', NOW())";
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

	header('location: ../view/pro_distprofile');

?>