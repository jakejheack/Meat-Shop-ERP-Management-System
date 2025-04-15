<?php
# create database connection
include '../../../system/connection.php';

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM access WHERE username='" . $_POST["username"] . "'";
  $result = mysqli_query($db,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:#f46a6a'> sorry username already exist.</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:#34c38f'> username available for registration.</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>
<a href="../../../system/connection.php">