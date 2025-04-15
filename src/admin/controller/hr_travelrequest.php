<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM travel_request WHERE hr_travelID LIKE '" . date( 'Y' ) . "%' ORDER BY hr_travelID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'hr_travelID' ], strlen( $firstRow[ 'hr_travelID' ] ) - 4, strlen( $firstRow[ 'hr_travelID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $hr_travelTitle = $MySQLiconn->real_escape_string($_POST['hr_travelTitle']);
    $hr_travelName = $MySQLiconn->real_escape_string($_POST['hr_travelName']);
    $hr_travelToday = $MySQLiconn->real_escape_string($_POST['hr_travelToday']);
    $hr_travelDepart = $MySQLiconn->real_escape_string($_POST['hr_travelDepart']);
    $hr_travelReturn = $MySQLiconn->real_escape_string($_POST['hr_travelReturn']);
    $hr_travelDes = $MySQLiconn->real_escape_string($_POST['hr_travelDes']);
    $hr_travelPaytype = $MySQLiconn->real_escape_string($_POST['hr_travelPaytype']);
    $hr_travelExp = $MySQLiconn->real_escape_string($_POST['hr_travelExp']);
    $hr_travelNotes = $MySQLiconn->real_escape_string($_POST['hr_travelNotes']);
    
    $SQL = $MySQLiconn->prepare("INSERT INTO travel_request (hr_travelID,hr_travelTitle,hr_travelName,hr_travelToday,hr_travelDepart,hr_travelReturn,hr_travelDes,hr_travelPaytype,hr_travelExp,hr_travelNotes) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("isssssssss",intval( AutoGenID() ),$hr_travelTitle,$hr_travelName,$hr_travelToday,$hr_travelDepart,$hr_travelReturn,$hr_travelDes,$hr_travelPaytype,$hr_travelExp,$hr_travelNotes);
    $SQL->execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/hr_travelrequest");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM travel_request WHERE hr_travelID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_travelrequest");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM travel_request WHERE hr_travelID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM travel_request WHERE hr_travelID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE travel_request SET hr_travelName=?,hr_travelTitle=?,hr_travelToday=?,hr_travelDepart=?,hr_travelReturn=?,hr_travelDes=?,hr_travelPaytype=?,hr_travelExp=?,hr_travelNotes=? WHERE hr_travelID=?");
    $SQL->bind_param("sssssssssi",$_POST['hr_travelName'],$_POST['hr_travelTitle'],$_POST['hr_travelToday'],$_POST['hr_travelDepart'],$_POST['hr_travelReturn'],$_POST['hr_travelDes'],$_POST['hr_travelPaytype'],$_POST['hr_travelExp'],$_POST['hr_travelNotes'],$_GET['edit']);
    $SQL ->execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/hr_travelrequest");
    exit();

}

?>

