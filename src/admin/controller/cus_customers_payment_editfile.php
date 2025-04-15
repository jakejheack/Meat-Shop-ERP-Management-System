<?php
	include '../../../system/conn.php';

	if(isset($_POST['upload'])){
		$empid = $_POST['id'];
		$filename = $_FILES['filetext']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['filetext']['tmp_name'], '../uploads/payment/'.$filename);	
		}
		
		$sql = "UPDATE customers_status SET filetext = '$filename' WHERE id = '$empid'";
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


	header('location: ../view/cus_customers_payment');
?>