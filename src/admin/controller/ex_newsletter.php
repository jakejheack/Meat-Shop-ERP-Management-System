<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM newsletter WHERE newsID LIKE '" . date( 'Y' ) . "%' ORDER BY newsID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'newsID' ], strlen( $firstRow[ 'newsID' ] ) - 4, strlen( $firstRow[ 'newsID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $newsEmail = $MySQLiconn->real_escape_string($_POST['newsEmail']);

    $SQL = $MySQLiconn->prepare("INSERT INTO newsletter (newsID,newsEmail) VALUES(?,?)");
    $SQL->bind_param("is",intval( AutoGenID() ),$newsEmail);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_newsletter");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM newsletter WHERE newsID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted!";
    header("Location:../view/ex_newsletter");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM newsletter WHERE newsID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE newsletter SET newsEmail=? WHERE newsID=?");
    $SQL->bind_param("si",$_POST['newsEmail'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_newsletter");
    exit();
}

?>

