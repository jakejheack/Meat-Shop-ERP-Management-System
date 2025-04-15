<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM sd_profile WHERE sd_profileID LIKE '" . date( 'Y' ) . "%' ORDER BY sd_profileID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'sd_profileID' ], strlen( $firstRow[ 'sd_profileID' ] ) - 4, strlen( $firstRow[ 'sd_profileID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $sd_profileName = $MySQLiconn->real_escape_string($_POST['sd_profileName']);
    $sd_profileContacts = $MySQLiconn->real_escape_string($_POST['sd_profileContacts']);
    $sd_profileAddress = $MySQLiconn->real_escape_string($_POST['sd_profileAddress']);
    $sd_profileCategory = $MySQLiconn->real_escape_string($_POST['sd_profileCategory']);
    $sd_profileType = $MySQLiconn->real_escape_string($_POST['sd_profileType']);
    $sd_profileStatus = $MySQLiconn->real_escape_string($_POST['sd_profileStatus']);
   
    
    $SQL = $MySQLiconn->prepare("INSERT INTO sd_profile (sd_profileID,sd_profileName,sd_profileContacts,sd_profileAddress,sd_profileCategory,sd_profileType,sd_profileStatus) VALUES(?,?,?,?,?,?,?)");
    $SQL->bind_param("issssss",intval( AutoGenID() ),$sd_profileName,$sd_profileContacts,$sd_profileAddress,$sd_profileCategory,$sd_profileType,$sd_profileStatus);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/pro_distprofile");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM sd_profile WHERE sd_profileID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_distprofile");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM sd_profile JOIN supplydist_category ON supplydist_category.ex_sdID = sd_profile.sd_profileCategory WHERE sd_profileID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM sd_profile JOIN supplydist_category ON supplydist_category.ex_sdID = sd_profile.sd_profileCategory WHERE sd_profileID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE sd_profile SET sd_profileName=?,sd_profileContacts=?,sd_profileAddress=?,sd_profileCategory=?,sd_profileType=?,sd_profileStatus=? WHERE sd_profileID=?");
    $SQL->bind_param("ssssssi",$_POST['sd_profileName'],$_POST['sd_profileContacts'],$_POST['sd_profileAddress'],$_POST['sd_profileCategory'],$_POST['sd_profileType'],$_POST['sd_profileStatus'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Update Successfully";
    header("Location:../view/pro_distprofile");
    exit();

}


?>

