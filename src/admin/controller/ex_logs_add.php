<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$logsDate = $_POST['logsDate'];
		$logsTime = $_POST['logsTime'];
		$logsTitle = $_POST['logsTitle'];
		$logsFile = $_POST['logsFile'];
		$logsDesc = $_POST['logsDesc'];
		$logsStatus = $_POST['logsStatus'];

		$sql = "INSERT INTO logs (logsDate, logsTime, logsTitle, logsFile, logsDesc, logsStatus) VALUES ('$logsDate', '$logsTime', '$logsTitle', '$logsFile', '$logsDesc', '$logsStatus')";
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

	header('location: ../view/ex_logs');

?>