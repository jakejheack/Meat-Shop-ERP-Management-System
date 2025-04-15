
<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM performance WHERE hr_perID LIKE '" . date( 'Y' ) . "%' ORDER BY hr_perID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'hr_perID' ], strlen( $firstRow[ 'hr_perID' ] ) - 4, strlen( $firstRow[ 'hr_perID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $hr_perName = $MySQLiconn->real_escape_string($_POST['hr_perName']);
    $hr_perDesc = $MySQLiconn->real_escape_string($_POST['hr_perDesc']);
    $hr_perDate = $MySQLiconn->real_escape_string($_POST['hr_perDate']);
    $hr_perRating = $MySQLiconn->real_escape_string($_POST['hr_perRating']);
    $hr_perNotes = $MySQLiconn->real_escape_string($_POST['hr_perNotes']);
    $hr_perStatus = $MySQLiconn->real_escape_string($_POST['hr_perStatus']);
   
    
    $SQL = $MySQLiconn->prepare("INSERT INTO performance (hr_perID,hr_perName,hr_perDesc,hr_perDate,hr_perRating,hr_perNotes,hr_perStatus) VALUES(?,?,?,?,?,?,?)");
    $SQL->bind_param("issssss",intval( AutoGenID() ),$hr_perName,$hr_perDesc,$hr_perDate,$hr_perRating,$hr_perNotes,$hr_perStatus);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/hr_performance");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM performance WHERE hr_perID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/hr_performance");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM performance JOIN employees ON employees.id = performance.hr_perName  WHERE hr_perID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM performance JOIN employees ON employees.id = performance.hr_perName WHERE hr_perID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE performance SET hr_perDesc=?,hr_perDate=?,hr_perRating=?,hr_perNotes=?,hr_perStatus=? WHERE hr_perID=?");
    $SQL->bind_param("sssssi",$_POST['hr_perDesc'],$_POST['hr_perDate'],$_POST['hr_perRating'],$_POST['hr_perNotes'],$_POST['hr_perStatus'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Update Successfully";
    header("Location:../view/hr_performance");
    exit();

}


?>

