<?php
	include '../../../system/conn.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$purdate = $_POST['purdate'];
		$category = $_POST['category'];
		$branch = $_POST['branch'];
		$qty = $_POST['qty'];
		$unit = $_POST['unit'];
		$title = $_POST['title'];
		$unitprice = $_POST['unitprice'];
		$amount = $_POST['amount'];
		$stat = $_POST['stat'];
		$entry = $_POST['entry'];

		$sql = "UPDATE purchase SET purdate = '$purdate', category = '$category', branch = '$branch', qty = '$qty', unit = '$unit', title = '$title', unitprice = '$unitprice', amount = '$amount', stat = '$stat', entry = '$entry' WHERE id = '$id'";
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

	header('location:../view/fl_purchases');

?>	