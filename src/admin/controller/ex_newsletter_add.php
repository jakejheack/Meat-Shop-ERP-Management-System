<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$newsemail = $_POST['newsemail'];

		$sql = "INSERT INTO webnewsletter (newsemail, created_on) VALUES ('$newsemail', NOW())";
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

	header('location: ../view/ex_newsletter');
?>