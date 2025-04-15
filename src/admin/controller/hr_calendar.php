<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM calendar WHERE calendarID LIKE '" . date( 'Y' ) . "%' ORDER BY calendarID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'calendarID' ], strlen( $firstRow[ 'calendarID' ] ) - 4, strlen( $firstRow[ 'calendarID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $calendarTitle = $MySQLiconn->real_escape_string($_POST['calendarTitle']);
    $calendarSdate = $MySQLiconn->real_escape_string($_POST['calendarSdate']);
    $calendarEdate = $MySQLiconn->real_escape_string($_POST['calendarEdate']);
    $calendarColor = $MySQLiconn->real_escape_string($_POST['calendarColor']);
    
    $SQL = $MySQLiconn->prepare("INSERT INTO calendar (calendarID,calendarTitle,calendarSdate,calendarEdate,calendarColor) VALUES(?,?,?,?,?)");
    $SQL->bind_param("issss",intval( AutoGenID() ),$calendarTitle,$calendarSdate,$calendarEdate,$calendarColor);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Ssuccessfully Saved!";
    header("Location:../view/hr_calendar_form.php");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM calendar WHERE calendarID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_calendar_form.php");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM calendar WHERE calendarID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}


if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE calendar SET calendarTitle=?,calendarSdate=?,calendarEdate=?,calendarColor=? WHERE calendarID=?");
    $SQL->bind_param("ssssi",$_POST['calendarTitle'],$_POST['calendarSdate'],$_POST['calendarEdate'],$_POST['calendarColor'],$_GET['edit']);
    $SQL ->execute();
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update!";
    header("Location:../view/hr_calendar_form.php");
    exit();

}
?>

