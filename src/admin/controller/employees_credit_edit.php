<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$edate = $_POST['edate'];
		$amountin = $_POST['amountin'];
		$amountout = $_POST['amountout'];
		$branch = $_POST['branch'];
		$estat = $_POST['estat'];
		$notes = $_POST['notes'];
		
		$sql = "UPDATE employees_credit SET edate = '$edate', amountin = '$amountin', amountout = '$amountout', branch = '$branch', estat = '$estat', notes = '$notes' WHERE id = '$id'";
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

	header('location: ../view/employees_credit');
?>