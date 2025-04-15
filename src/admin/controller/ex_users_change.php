<?php
	include '../../../system/conn.php';

	if(isset($_POST['update'])){
		$id = $_POST['id'];
		$password = md5($_POST['password']);

		$sql = "UPDATE access SET password = '$password' WHERE id = '$id'";
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

	header('location:../view/ex_users');

?>	