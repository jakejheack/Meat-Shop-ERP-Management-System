<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM product_category WHERE ex_categoryID LIKE '" . date( 'Y' ) . "%' ORDER BY ex_categoryID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'ex_categoryID' ], strlen( $firstRow[ 'ex_categoryID' ] ) - 4, strlen( $firstRow[ 'ex_categoryID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $ex_categoryName = $MySQLiconn->real_escape_string($_POST['ex_categoryName']);
    $ex_status = $MySQLiconn->real_escape_string($_POST['ex_status']);

    $SQL = $MySQLiconn->prepare("INSERT INTO product_category (ex_categoryID,ex_categoryName,ex_status) VALUES(?,?,?)");
    $SQL->bind_param("iss",intval( AutoGenID() ),$ex_categoryName,$ex_status);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_loc_procategory");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM product_category WHERE ex_categoryID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_loc_procategory");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM product_category WHERE ex_categoryID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE product_category SET ex_categoryName=?,ex_status=? WHERE ex_categoryID=?");
    $SQL->bind_param("ssi",$_POST['ex_categoryName'],$_POST['ex_status'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_loc_procategory");
    exit();
}

?>

