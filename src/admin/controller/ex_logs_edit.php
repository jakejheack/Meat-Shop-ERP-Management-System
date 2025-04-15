<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$logsDate = $_POST['logsDate'];
		$logsTime= $_POST['logsTime'];
		$logsTitle = $_POST['logsTitle'];
		$logsFile = $_POST['logsFile'];
		$logsDesc = $_POST['logsDesc'];
		$logsStatus = $_POST['logsStatus'];
		
		$sql = "UPDATE logs SET logsDate = '$logsDate', logsTime = '$logsTime', logsTitle = '$logsTitle', logsFile = '$logsFile', logsDesc = '$logsDesc', logsStatus = '$logsStatus' WHERE id = '$id'";
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

	header('location: ../view/ex_logs');
?>