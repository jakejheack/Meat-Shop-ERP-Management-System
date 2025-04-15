<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$stock = $_POST['stock'];
		$proname = $_POST['proname'];
		$weight = $_POST['weight'];
		$unit = $_POST['unit'];
		$price = $_POST['price'];
		$ristatus = $_POST['ristatus'];
		
		$sql = "UPDATE recipe_inventory SET stock = '$stock', proname = '$proname', weight = '$weight', unit = '$unit', price = '$price', ristatus = '$ristatus' WHERE id = '$id'";
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

	header('location:../view/pro_repinventory');
?>