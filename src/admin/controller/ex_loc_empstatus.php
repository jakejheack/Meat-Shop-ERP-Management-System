<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM employment_status WHERE ex_employmentID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_employmentID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_employmentID' ], strlen( $firstRow[ 'ex_employmentID' ] ) - 4, strlen( $firstRow[ 'ex_employmentID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_employmentStatus = $MySQLiconn->real_escape_string($_POST['ex_employmentStatus']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);

    $SQL = $MySQLiconn->prepare("INSERT INTO employment_status (ex_employmentID,ex_employmentStatus,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_employmentStatus,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_empstatus");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM employment_status WHERE ex_employmentID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_empstatus");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM employment_status WHERE ex_employmentID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE employment_status SET ex_employmentStatus=?,ex_status=? WHERE ex_employmentID=?");
    $SQL->bind_param("ssi",$_POST['ex_employmentStatus'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_empstatus");
    exit();
}

?>

