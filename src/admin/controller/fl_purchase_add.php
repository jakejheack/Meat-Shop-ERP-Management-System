<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$supplierid = $_POST['supplierid'];
		$purdate = $_POST['purdate'];
		$category = $_POST['category'];
		$branch = $_POST['branch'];
		$supplier = $_POST['supplier'];
		$qty = $_POST['qty'];
		$unit = $_POST['unit'];
		$title = $_POST['title'];
		$unitprice = $_POST['unitprice'];
		$amount = $_POST['amount'];
		$stat = $_POST['stat'];
		$entry = $_POST['entry'];
		$imageText = $_POST['imageText'];
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../uploads/purchase/'.$filename);	
		}
		//transaction no
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$purchaseno = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 7);
		//

		$sql = "INSERT INTO purchase (supplierid, purchaseno, purdate, category, branch, supplier, qty, unit, title, unitprice, amount, stat, entry, imageText, photo, created_on) VALUES ('$supplierid', '$purchaseno', '$purdate', '$category', '$branch', '$supplier', '$qty', '$unit', '$title', '$unitprice', '$amount', '$stat', '$entry', '$imageText', '$filename', NOW())";
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

	header('location: ../view/fl_purchases');

?>