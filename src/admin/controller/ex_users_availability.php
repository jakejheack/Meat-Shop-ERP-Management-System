<?php
# create database connection
$connect = mysqli_connect("localhost","u862287489_lehmann","Securelink143","u862287489_lehmanndb");

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM access WHERE username='" . $_POST["username"] . "'";
  $result = mysqli_query($connect,$query);
  $count = mysqli_num_rows($result);
  if($count>0) {
    echo "<span style='color:red'> Sorry User already exists .</span>";
    echo "<script>$('#submit').prop('disabled',true);</script>";
  }else{
    echo "<span style='color:green'> User available for Registration .</span>";
    echo "<script>$('#submit').prop('disabled',false);</script>";
  }
}
?>