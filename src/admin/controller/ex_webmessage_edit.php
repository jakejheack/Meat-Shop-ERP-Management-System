<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$webmesName = $_POST['webmesName'];
		$webmesEmail = $_POST['webmesEmail'];
		$webmesText = $_POST['webmesText'];
		$webmesStatus = $_POST['webmesStatus'];
		
		$sql = "UPDATE webmessage SET webmesName = '$webmesName', webmesEmail = '$webmesEmail', webmesText = '$webmesText', webmesStatus = '$webmesStatus' WHERE id = '$id'";
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

	header('location: ../view/ex_webmessage');
?>