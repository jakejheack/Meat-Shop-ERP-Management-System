<?php
	include '../../../system/conn.php'; 

	if(isset($_POST['add'])){
		$employee = $_POST['employee'];
		$date = $_POST['date'];
		$hours = $_POST['hours'] + ($_POST['mins']/60);
		$rate = $_POST['rate'];
		$sql = "SELECT * FROM employees WHERE employee_id = '$employee'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Employee not found';
		}
		else{
			$row = $query->fetch_assoc();
			$employee_id = $row['id'];
			$sql = "INSERT INTO overtime (employee_id, date_overtime, hours, rate) VALUES ('$employee_id', '$date', '$hours', '$rate')";
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
	}	
	else{
		session_start();
        $_SESSION['error_message'] = "Oops...";
        $_SESSION['error_message2'] = "Fill up add form first";
	}

	header('location: ../view/hr_attovertime');

?>