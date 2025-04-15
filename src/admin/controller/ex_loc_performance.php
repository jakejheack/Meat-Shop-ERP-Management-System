<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM performance_desc WHERE ex_perID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_perID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_perID' ], strlen( $firstRow[ 'ex_perID' ] ) - 4, strlen( $firstRow[ 'ex_perID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_perType = $MySQLiconn->real_escape_string($_POST['ex_perType']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);

    $SQL = $MySQLiconn->prepare("INSERT INTO performance_desc (ex_perID,ex_perType,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_perType,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_performance");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM performance_desc WHERE ex_perID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_performance");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM performance_desc WHERE ex_perID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE performance_desc SET ex_perType=?,ex_status=? WHERE ex_perID=?");
    $SQL->bind_param("ssi",$_POST['ex_perType'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_performance");
    exit();
}

?>

