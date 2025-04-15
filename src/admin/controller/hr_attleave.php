<?php

  include '../../../system/connection.php';
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$imageText = mysqli_real_escape_string($db, $_POST['imageText']);
    $leaveDate = mysqli_real_escape_string($db, $_POST['leaveDate']);
    $leaveName = mysqli_real_escape_string($db, $_POST['leaveName']);
    $leaveFrom = mysqli_real_escape_string($db, $_POST['leaveFrom']);
    $leaveTo = mysqli_real_escape_string($db, $_POST['leaveTo']);
    $leaveDes = mysqli_real_escape_string($db, $_POST['leaveDes']);
    
    // image file directory
  	$target = "../uploads/leaves/".basename($image);

  	$sql = "INSERT INTO leaves (image, imageText, leaveDate, leaveName, leaveFrom, leaveTo, leaveDes) VALUES ('$image','$imageText','$leaveDate','$leaveName','$leaveFrom','$leaveTo','$leaveDes')";
  	// execute query
  	mysqli_query($db, $sql);

  	move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/hr_attleave");
    exit();
  		
  }
  $result = mysqli_query($db, "SELECT * FROM leaves");

if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM leaves WHERE id=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_attleave");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM leaves WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    
    // Get image name
  	$image = $_FILES['image']['name'];
    
    // image file directory
  	$target = "../uploads/leaves/".basename($image);
    
    $SQL = $MySQLiconn->prepare("UPDATE leaves SET imageText=?,leaveDate=?,leaveFrom=?,leaveTo=?,leaveDes=? WHERE id=?");
    $SQL->bind_param("sssssi",$_POST['imageText'],$_POST['leaveDate'],$_POST['leaveFrom'],$_POST['leaveTo'],$_POST['leaveDes'],$_GET['edit']);
    $SQL ->execute();
    
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Update Successfully";
    header("Location:../view/hr_attleave");
    exit();

}
 
?>

