<?php
	include '../../../system/conn.php';

	if(isset($_POST['add'])){
		$eid = $_POST['eid'];
		$empname = $_POST['empname'];
		$edate = $_POST['edate'];
		$amountin = $_POST['amountin'];
		$amountout = $_POST['amountout'];
		$branch = $_POST['branch'];
		$estat = $_POST['estat'];
		$notes = $_POST['notes'];
		$filetext = $_POST['filetext'];
        $filename = $_FILES['file']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['file']['tmp_name'], '../uploads/empcredit/'.$filename);	
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

		$sql = "INSERT INTO employees_credit (id, transno, eid, empname, edate, amountin, amountout, branch, estat, notes, filetext, file, created_on) VALUES ('$id', '$transno','$eid', '$empname', '$edate', '$amountin', '$amountout', '$branch', '$estat', '$notes', '$filetext', '$filename', NOW())";
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

	header('location: ../view/employees_credit');

?>