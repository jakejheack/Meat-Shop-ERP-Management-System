<?php
	include '../../../system/conn.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['imageText']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['imageText']['tmp_name'], '../uploads/purchase/'.$filename);	
		}
		
		$sql = "UPDATE purchase SET imageText = '$filename' WHERE id = '$id'";
		if($conn->query($sql)){
			session_start();
             $_SESSION['success_message'] = "Well Done!";
             $_SESSION['success_message2'] = "Successfully Update!";
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
        $_SESSION['error_message2'] = "Upload not accepted!";
	}


	header('location: ../view/fl_purchases');
?>