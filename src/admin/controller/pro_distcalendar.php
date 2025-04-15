<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM sd_calendar WHERE sd_calendarID LIKE '" . date( 'Y' ) . "%' ORDER BY sd_calendarID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'sd_calendarID' ], strlen( $firstRow[ 'sd_calendarID' ] ) - 4, strlen( $firstRow[ 'sd_calendarID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $sd_calendarTitle = $MySQLiconn->real_escape_string($_POST['sd_calendarTitle']);
    $sd_calendarSdate = $MySQLiconn->real_escape_string($_POST['sd_calendarSdate']);
    $sd_calendarEdate = $MySQLiconn->real_escape_string($_POST['sd_calendarEdate']);
    $sd_calendarColor = $MySQLiconn->real_escape_string($_POST['sd_calendarColor']);
    
    $SQL = $MySQLiconn->prepare("INSERT INTO sd_calendar (sd_calendarID,sd_calendarTitle,sd_calendarSdate,sd_calendarEdate,sd_calendarColor) VALUES(?,?,?,?,?)");
    $SQL->bind_param("issss",intval( AutoGenID() ),$sd_calendarTitle,$sd_calendarSdate,$sd_calendarEdate,$sd_calendarColor);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Ssuccessfully Saved!";
    header("Location:../view/pro_distcalendar");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM sd_calendar WHERE sd_calendarID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_distcalendar");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM sd_calendar WHERE sd_calendarID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}


if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE sd_calendar SET sd_calendarTitle=?,sd_calendarSdate=?,sd_calendarEdate=?,sd_calendarColor=? WHERE sd_calendarID=?");
    $SQL->bind_param("ssssi",$_POST['sd_calendarTitle'],$_POST['sd_calendarSdate'],$_POST['sd_calendarEdate'],$_POST['sd_calendarColor'],$_GET['edit']);
    $SQL ->execute();
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update!";
    header("Location:../view/pro_distcalendar");
    exit();

}
?>

