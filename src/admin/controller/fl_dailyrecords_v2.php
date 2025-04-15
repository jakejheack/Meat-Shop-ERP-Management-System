<?php


if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM tb1 WHERE id=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/fl_dailyrecords_v2");
    exit();
}
if(isset($_GET['edit_v2']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM tb1 WHERE id=".$_GET['edit_v2']);
    $getROW = $SQL->fetch_array();
    
    $SQL2 = $MySQLiconn->query("SELECT * FROM tbpk1 WHERE tb1_id=".$_GET['edit_v2']);
    $getROW2 = $SQL2->fetch_array();
}

if(isset($_GET['edit_v3']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM tbpk1 WHERE tb1_id=".$_GET['edit_v3']);
    $getROW = $SQL->fetch_array();
}

if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM tb1 WHERE id=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}


?>

