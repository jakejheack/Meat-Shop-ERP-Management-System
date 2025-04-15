<?php

if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM webmessage WHERE webmesID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_webmessage");
    exit();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM webmessage WHERE webmesID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE website_message SET webmesStatus=? WHERE webmesID=?");
    $SQL->bind_param("si",$_POST['webmesStatus'],$_GET['view']);
    $SQL ->execute();
    
    session_start();
    header("Location:../view/ex_webmessage");
    exit();
}

?>

