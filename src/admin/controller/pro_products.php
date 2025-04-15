<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM product_inventory WHERE productID LIKE '" . date( 'Y' ) . "%' ORDER BY productID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'productID' ], strlen( $firstRow[ 'productID' ] ) - 4, strlen( $firstRow[ 'productID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $productName = $MySQLiconn->real_escape_string($_POST['productName']);
    $productSku = $MySQLiconn->real_escape_string($_POST['productSku']);
    $productStock = $MySQLiconn->real_escape_string($_POST['productStock']);
    $productPrice = $MySQLiconn->real_escape_string($_POST['productPrice']);
    $productRetail = $MySQLiconn->real_escape_string($_POST['productRetail']);
    $productCategory = $MySQLiconn->real_escape_string($_POST['productCategory']);
    $productStore = $MySQLiconn->real_escape_string($_POST['productStore']);
    $productStatus = $MySQLiconn->real_escape_string($_POST['productStatus']);
    
    $SQL = $MySQLiconn->prepare("INSERT INTO product_inventory (productID,productName,productSku,productStock,productPrice,productRetail,productCategory,productStore,productStatus) VALUES(?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("issssssss",intval( AutoGenID() ),$productName,$productSku,$productStock,$productPrice,$productRetail,$productCategory,$productStore,$productStatus);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "saved successfully";
    header("Location:../view/pro_products");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM product_inventory WHERE productID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_products");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM product_inventory JOIN product_category ON product_category.ex_categoryID = product_inventory.productCategory WHERE productID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM product_inventory JOIN product_category ON product_category.ex_categoryID = product_inventory.productCategory WHERE productID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE product_inventory SET productName=?,productSku=?,productStock=?,productPrice=?,productRetail=?,productCategory=?,productStore=?,productStatus=? WHERE productID=?");
    $SQL->bind_param("ssssssssi",$_POST['productName'],$_POST['productSku'],$_POST['productStock'],$_POST['productPrice'],$_POST['productRetail'],$_POST['productCategory'],$_POST['productStore'],$_POST['productStatus'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/pro_products");
    exit();

}

?>

