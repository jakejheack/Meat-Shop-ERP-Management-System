<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM supplydist_category WHERE ex_sdID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_sdID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_sdID' ], strlen( $firstRow[ 'ex_sdID' ] ) - 4, strlen( $firstRow[ 'ex_sdID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_sdCategory = $MySQLiconn->real_escape_string($_POST['ex_sdCategory']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);

    $SQL = $MySQLiconn->prepare("INSERT INTO supplydist_category (ex_sdID,ex_sdCategory,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_sdCategory,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_supplydis");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM supplydist_category WHERE ex_sdID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_supplydis");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM supplydist_category WHERE ex_sdID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE supplydist_category SET ex_sdCategory=?,ex_status=? WHERE ex_sdID=?");
    $SQL->bind_param("ssi",$_POST['ex_sdCategory'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_supplydis");
    exit();
}

?>

