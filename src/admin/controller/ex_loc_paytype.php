<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM payment_type WHERE ex_paymentID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_paymentID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_paymentID' ], strlen( $firstRow[ 'ex_paymentID' ] ) - 4, strlen( $firstRow[ 'ex_paymentID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_paymentType = $MySQLiconn->real_escape_string($_POST['ex_paymentType']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);

    $SQL = $MySQLiconn->prepare("INSERT INTO payment_type (ex_paymentID,ex_paymentType,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_paymentType,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_paytype");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM payment_type WHERE ex_paymentID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_paytype");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM payment_type WHERE ex_paymentID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE payment_type SET ex_paymentType=?,ex_status=? WHERE ex_paymentID=?");
    $SQL->bind_param("ssi",$_POST['ex_paymentType'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_paytype");
    exit();
}

?>

