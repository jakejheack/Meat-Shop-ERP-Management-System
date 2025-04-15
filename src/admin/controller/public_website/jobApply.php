<?php
  // Create database connection
  $db = mysqli_connect("localhost", "u862287489_lehmann", "Securelink143", "u862287489_lehmanndb");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
    $imageText = mysqli_real_escape_string($db, $_POST['imageText']);
    $applyName = mysqli_real_escape_string($db, $_POST['applyName']);
    $applyAddress = mysqli_real_escape_string($db, $_POST['applyAddress']);
    $applyContact = mysqli_real_escape_string($db, $_POST['applyContact']);
    $applyEmail = mysqli_real_escape_string($db, $_POST['applyEmail']);
    $applyPosition = mysqli_real_escape_string($db, $_POST['applyPosition']);
    $applySched = mysqli_real_escape_string($db, $_POST['applySched']);
    $applyschedDate = mysqli_real_escape_string($db, $_POST['applyschedDate']);
    $applyStatus = mysqli_real_escape_string($db, $_POST['applyStatus']);
    
      // image file directory
  	$target = "src/admin/view/uploads/jobApplicant/".basename($image);
      
    $sql = "INSERT INTO job_apply (image, imageText, applyName, applyAddress, applyContact, applyEmail, applyPosition, applySched, applyschedDate, applyStatus) VALUES ('$image', '$imageText', '$applyName', '$applyAddress', '$applyContact', '$applyEmail', '$applyPosition', '$applySched', '$applyschedDate', '$applyStatus')";
  	// execute query
  	mysqli_query($db, $sql);

  	move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Send";
    header("Location:indexx.php");
    exit();
  		
  }
  $result = mysqli_query($db, "SELECT * FROM job_apply");
    


?>

