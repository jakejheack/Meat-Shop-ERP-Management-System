<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM designation WHERE ex_designationID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_designationID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_designationID' ], strlen( $firstRow[ 'ex_designationID' ] ) - 4, strlen( $firstRow[ 'ex_designationID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_designation = $MySQLiconn->real_escape_string($_POST['ex_designation']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);
   
    $SQL = $MySQLiconn->prepare("INSERT INTO designation (ex_designationID,ex_designation,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_designation,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_designation");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM designation WHERE ex_designationID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_designation");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM designation WHERE ex_designationID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE designation SET ex_designation=?,ex_status=? WHERE ex_designationID=?");
    $SQL->bind_param("ssi",$_POST['ex_designation'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_designation");
    exit();
}
            


?>

