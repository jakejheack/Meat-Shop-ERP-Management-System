<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$title = $_POST['title'];
		$price = $_POST['price'];
		$unit = $_POST['unit'];
		$stat = $_POST['stat'];
        $filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/pricing/'.$filename);	
		}

		$sql = "INSERT INTO today_price (title, price, unit, stat, photo, created_on) VALUES ('$title', '$price', '$unit', '$stat', '$filename', NOW())";
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

	header('location: ../view/today_price');
?>