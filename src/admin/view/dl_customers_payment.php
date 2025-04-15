 
<?php
if(isset($_GET['path']))
{
//Read the url
$url = $_GET['path'];

//Clear the cache
clearstatcache();

//Check the file path exists or not
if(file_exists($url)) {

//Define header information
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.basename($url).'"');
header('Content-Length: ' . filesize($url));
header('Pragma: public');

//Clear system output buffer
flush();

//Read the size of the file
readfile($url,true);

//Terminate from the script
die();
}
else{
  session_start();
       $_SESSION['warning_message'] = "Warning";
       $_SESSION['warning_message2'] = "File does not exist!";
    header("Location:../view/cus_customers_payment");
  exit();
}
}
else
  session_start();
       $_SESSION['warning_message'] = "Warning";
       $_SESSION['warning_message2'] = "Filename is not defined.";
    header("Location:../view/cus_customers_payment");
  exit();

?>