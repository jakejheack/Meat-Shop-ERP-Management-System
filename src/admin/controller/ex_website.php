<?php
  // Create database connection
$db = mysqli_connect("localhost", "u862287489_lehmann", "Securelink143", "u862287489_lehmanndb");

  // Initialize message variable
$msg = "";

  // If upload button is clicked ...
if (isset($_POST['upload'])) {
  	// Get image name
 $image = $_FILES['image']['name'];
 $imageTwo = $_FILES['imageTwo']['name'];
  	// Get text
 $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
 $headingOne = mysqli_real_escape_string($db, $_POST['headingOne']);
 $headingTwo = mysqli_real_escape_string($db, $_POST['headingTwo']);
 $pageaddress = mysqli_real_escape_string($db, $_POST['pageaddress']);
 $pageemail = mysqli_real_escape_string($db, $_POST['pageemail']);
 $pagecontact = mysqli_real_escape_string($db, $_POST['pagecontact']);
 $fbLink = mysqli_real_escape_string($db, $_POST['fbLink']);
 $tweetLink = mysqli_real_escape_string($db, $_POST['tweetLink']);
 $instaLink = mysqli_real_escape_string($db, $_POST['instaLink']);
 $footer = mysqli_real_escape_string($db, $_POST['footer']);

  	// image file directory
 $target = "images/".basename($image);
 $target2 = "images/".basename($imageTwo);

 $sql = "INSERT INTO website (image, imageTwo, image_text, headingOne, headingTwo, pageaddress, pageemail, pagecontact, fbLink, tweetLink, instaLink, footer) VALUES ('$image', '$imageTwo', '$image_text', '$headingOne', '$headingTwo', '$pageaddress', '$pageemail', '$pagecontact', '$fbLink', '$tweetLink', '$instaLink', '$footer')";
  	// execute query
 mysqli_query($db, $sql);

 move_uploaded_file($_FILES['image']['tmp_name'], $target);
 move_uploaded_file($_FILES['imageTwo']['tmp_name'], $target2);
 
 session_start();
 $_SESSION['success_message'] = "Well Done!";
 $_SESSION['success_message2'] = "Successfully Saved";
 header("Location:../view/ex_website");
 exit();
 
}
$result = mysqli_query($db, "SELECT * FROM website");


if(isset($_GET['edit']))
{
  $SQL = $MySQLiconn->query("SELECT * FROM website WHERE id=".$_GET['edit']);
  $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    // Get image name
 $image = $_FILES['image']['name'];
 $imageTwo = $_FILES['imageTwo']['name'];
 $logo = $_FILES['logo']['name'];
 
    // image file directory
 $target = "../uploads/website/".basename($image);
 $target2 = "../uploads/website/".basename($imageTwo);
 $target3 = "../uploads/website/".basename($logo);
 
 $SQL = $MySQLiconn->prepare("UPDATE website SET storeName=?,logoOne=?,navHeading=?,headingOne=?,headingTwo=?,pageaddress=?,pageemail=?,pagecontact=?,imageOne=?,imagetwoTwo=?,image_text=?,fbLink=?,tweetLink=?,instaLink=?,footer=? WHERE id=?");
 
 $SQL->bind_param("sssssssssssssssi",$_POST['storeName'],$_POST['logoOne'],$_POST['navHeading'],$_POST['headingOne'],$_POST['headingTwo'],$_POST['pageaddress'],$_POST['pageemail'],$_POST['pagecontact'],$_POST['imageOne'],$_POST['imagetwoTwo'],$_POST['image_text'],$_POST['fbLink'],$_POST['tweetLink'],$_POST['instaLink'],$_POST['footer'],$_GET['edit']);
 $SQL ->execute();

 move_uploaded_file($_FILES['image']['tmp_name'], $target);
 move_uploaded_file($_FILES['imageTwo']['tmp_name'], $target2);
 move_uploaded_file($_FILES['logo']['tmp_name'], $target3);
 
 session_start();
 $_SESSION['success_message'] = "Well Done!";
 $_SESSION['success_message2'] = "Successfully Update";
 header("Location:../view/ex_website");
 exit();
}

?>
