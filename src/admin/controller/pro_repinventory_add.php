<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$stock = $_POST['stock'];
		$proname = $_POST['proname'];
		$weight = $_POST['weight'];
		$unit = $_POST['unit'];
		$price = $_POST['price'];
		$ristatus = $_POST['ristatus'];

		$sql = "INSERT INTO recipe_inventory (stock, proname, weight, unit, price, ristatus) VALUES ('$stock', '$proname', '$weight', '$unit', '$price', '$ristatus')";
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

	header('location:../view/pro_repinventory');

?>