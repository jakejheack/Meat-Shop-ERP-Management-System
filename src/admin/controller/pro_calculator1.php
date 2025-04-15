<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM calculator_one WHERE calcOID LIKE '" . date( 'Y' ) . "%' ORDER BY calcOID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'calcOID' ], strlen( $firstRow[ 'calcOID' ] ) - 4, strlen( $firstRow[ 'calcOID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $calcODate = $MySQLiconn->real_escape_string($_POST['calcODate']);
    $calcOTitle = $MySQLiconn->real_escape_string($_POST['calcOTitle']);
    $calcRPercent = $MySQLiconn->real_escape_string($_POST['calcRPercent']);
    $calcRLive = $MySQLiconn->real_escape_string($_POST['calcRLive']);
    $calcRCarcass = $MySQLiconn->real_escape_string($_POST['calcRCarcass']);  
    $calcRTotal = $MySQLiconn->real_escape_string($_POST['calcRTotal']);
    
    $calcLCarcass = $MySQLiconn->real_escape_string($_POST['calcLCarcass']);    
    $calcLPercent = $MySQLiconn->real_escape_string($_POST['calcLPercent']);    
    $calcLRecovery = $MySQLiconn->real_escape_string($_POST['calcLRecovery']);    
    $calcLTotal = $MySQLiconn->real_escape_string($_POST['calcLTotal']);  
    
    $calcCWeight = $MySQLiconn->real_escape_string($_POST['calcCWeight']);   
    $calcCPercent = $MySQLiconn->real_escape_string($_POST['calcCPercent']);   
    $calcCRecovery = $MySQLiconn->real_escape_string($_POST['calcCRecovery']);   
    $calcCTotal = $MySQLiconn->real_escape_string($_POST['calcCTotal']);   
    
 
    $SQL = $MySQLiconn->prepare("INSERT INTO calculator_one (calcOID,calcODate,calcOTitle,calcRPercent,calcRLive,calcRCarcass,calcRTotal,calcLCarcass,calcLPercent,calcLRecovery,calcLTotal,calcCWeight,calcCPercent,calcCRecovery,calcCTotal) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("issssssssssssss",intval( AutoGenID() ),$calcODate,$calcOTitle,$calcRPercent,$calcRLive,$calcRCarcass,$calcRTotal,$calcLCarcass,$calcLPercent,$calcLRecovery,$calcLTotal,$calcCWeight,$calcCPercent,$calcCRecovery,$calcCTotal);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/pro_calculator1");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM calculator_one WHERE calcOID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_calculator1");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM calculator_one WHERE calcOID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM calculator_one WHERE calcOID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE calculator_one SET calcODate=?,calcOTitle=?,calcRPercent=?,calcRLive=?,calcRCarcass=?,calcRTotal=?,calcLCarcass=?,calcLPercent=?,calcLRecovery=?,calcLTotal=?,calcCWeight=?,calcCPercent=?,calcCRecovery=?,calcCTotal=? WHERE calcOID=?");
    $SQL->bind_param("ssssssssssssssi",$_POST['calcODate'],$_POST['calcOTitle'],$_POST['calcRPercent'],$_POST['calcRLive'],$_POST['calcRCarcass'],$_POST['calcRTotal'],$_POST['calcLCarcass'],$_POST['calcLPercent'],$_POST['calcLRecovery'],$_POST['calcLTotal'],$_POST['calcCWeight'],$_POST['calcCPercent'],$_POST['calcCRecovery'],$_POST['calcCTotal'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/pro_calculator1");
    exit();

}
?>

