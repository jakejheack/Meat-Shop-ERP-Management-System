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
    $applyName = mysqli_real_escape_string($db, $_POST['applyName']);
    $applyAddress = mysqli_real_escape_string($db, $_POST['applyAddress']);
    $applyContact = mysqli_real_escape_string($db, $_POST['applyContact']);
    $applyEmail = mysqli_real_escape_string($db, $_POST['applyEmail']);
    $applyPosition = mysqli_real_escape_string($db, $_POST['applyPosition']);
    $applySched = mysqli_real_escape_string($db, $_POST['applySched']);
    $applyschedDate = mysqli_real_escape_string($db, $_POST['applyschedDate']);
    $applyStatus = mysqli_real_escape_string($db, $_POST['applyStatus']);
    
      // image file directory
    $target = "../uploads/jobApplicant/".basename($image);
      
    $sql = "INSERT INTO job_apply (image, imageText, applyName, applyAddress, applyContact, applyEmail, applyPosition, applySched, applyschedDate, applyStatus) VALUES ('$image', '$imageText', '$applyName', '$applyAddress', '$applyContact', '$applyEmail', '$applyPosition', '$applySched', '$applyschedDate', '$applyStatus')";
    // execute query
    mysqli_query($db, $sql);

    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Send";
    header("Location:../view/hr_jobapply");
    exit();
      
  }
  $result = mysqli_query($db, "SELECT * FROM job_apply");

if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM job_apply WHERE id=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_jobapply");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM job_apply WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM job_apply WHERE id=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    
    // Get image name
    $image = $_FILES['image']['name'];
    
    // image file directory
    $target = "../uploads/jobApplicant/".basename($image);
    
    $SQL = $MySQLiconn->prepare("UPDATE job_apply SET imageText=?,applyName=?,applyAddress=?,applyContact=?,applyEmail=?,applyPosition=?,applySched=?,applyschedDate=?,applyStatus=? WHERE id=?");
    $SQL->bind_param("sssssssssi",$_POST['imageText'],$_POST['applyName'],$_POST['applyAddress'],$_POST['applyContact'],$_POST['applyEmail'],$_POST['applyPosition'],$_POST['applySched'],$_POST['applyschedDate'],$_POST['applyStatus'],$_GET['edit']);
    $SQL ->execute();
    
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Update Successfully";
    header("Location:../view/hr_jobapply");
    exit();

}
 $job_pending = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE applyStatus='Pending';" ) );
 $job_interview = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE applyStatus='Interview';" ) );
 $job_hired = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM job_apply WHERE applyStatus='Hired';" ) );

?>

