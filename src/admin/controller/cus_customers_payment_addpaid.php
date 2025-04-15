<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$cusid = $_POST['cusid'];
		$cusname = $_POST['cusname'];
		$cdate = $_POST['cdate'];
		$amountin = $_POST['amountin'];
		$amountout = $_POST['amountout'];
		$branch = $_POST['branch'];
		$cpstat = $_POST['cpstat'];
		$xstat = $_POST['xstat'];
		$notes = $_POST['notes'];
		$filetext = $_POST['filetext'];
        $filename = $_FILES['file']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/payment/'.$filename);	
		}

		//autogen transaction no.
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$transno = substr(str_shuffle($letters), 0, 4).substr(str_shuffle($numbers), 0, 7);
		//

		$sql = "INSERT INTO customers_status (id, transno, cusid, cusname, cdate, amountin, amountout, branch, cpstat, xstat, notes, filetext, file, created_on) VALUES ('$id', '$transno','$cusid', '$cusname', '$cdate', '$amountin', '0', '$branch', 'Paid', '$xstat', '$notes', '$filetext', '$filename', NOW())";
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

	header('location: ../view/cus_customers_payment');

?>