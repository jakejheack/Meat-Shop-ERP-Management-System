<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM recipe WHERE pr_recId LIKE '" . date( 'Y' ) . "%' ORDER BY pr_recId DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'pr_recId' ], strlen( $firstRow[ 'pr_recId' ] ) - 4, strlen( $firstRow[ 'pr_recId' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $pr_recDate = $MySQLiconn->real_escape_string($_POST['pr_recDate']);
    $pr_recName = $MySQLiconn->real_escape_string($_POST['pr_recName']);
    $pr_recDish = $MySQLiconn->real_escape_string($_POST['pr_recDish']);
    $pr_recTotal = $MySQLiconn->real_escape_string($_POST['pr_recTotal']);
    $pr_recDesc = $MySQLiconn->real_escape_string($_POST['pr_recDesc']);
    
    $pr_recQty1 = $MySQLiconn->real_escape_string($_POST['pr_recQty1']);
    $pr_recWunit1 = $MySQLiconn->real_escape_string($_POST['pr_recWunit1']);
    $pr_recIng1 = $MySQLiconn->real_escape_string($_POST['pr_recIng1']);
    $pr_recUnit1 = $MySQLiconn->real_escape_string($_POST['pr_recUnit1']);
    $pr_recCost1 = $MySQLiconn->real_escape_string($_POST['pr_recCost1']);
    
    $pr_recQty2 = $MySQLiconn->real_escape_string($_POST['pr_recQty2']);
    $pr_recWunit2 = $MySQLiconn->real_escape_string($_POST['pr_recWunit2']);
    $pr_recIng2 = $MySQLiconn->real_escape_string($_POST['pr_recIng2']);
    $pr_recUnit2 = $MySQLiconn->real_escape_string($_POST['pr_recUnit2']);
    $pr_recCost2 = $MySQLiconn->real_escape_string($_POST['pr_recCost2']);
    
    $pr_recQty3 = $MySQLiconn->real_escape_string($_POST['pr_recQty3']);
    $pr_recWunit3 = $MySQLiconn->real_escape_string($_POST['pr_recWunit3']);
    $pr_recIng3 = $MySQLiconn->real_escape_string($_POST['pr_recIng3']);
    $pr_recUnit3 = $MySQLiconn->real_escape_string($_POST['pr_recUnit3']);
    $pr_recCost3 = $MySQLiconn->real_escape_string($_POST['pr_recCost3']);
    
    $pr_recQty4 = $MySQLiconn->real_escape_string($_POST['pr_recQty4']);
    $pr_recWunit4 = $MySQLiconn->real_escape_string($_POST['pr_recWunit4']);
    $pr_recIng4 = $MySQLiconn->real_escape_string($_POST['pr_recIng4']);
    $pr_recUnit4 = $MySQLiconn->real_escape_string($_POST['pr_recUnit4']);
    $pr_recCost4 = $MySQLiconn->real_escape_string($_POST['pr_recCost4']);
    
    $pr_recQty5 = $MySQLiconn->real_escape_string($_POST['pr_recQty5']);
    $pr_recWunit5 = $MySQLiconn->real_escape_string($_POST['pr_recWunit5']);
    $pr_recIng5 = $MySQLiconn->real_escape_string($_POST['pr_recIng5']);
    $pr_recUnit5 = $MySQLiconn->real_escape_string($_POST['pr_recUnit5']);
    $pr_recCost5 = $MySQLiconn->real_escape_string($_POST['pr_recCost5']);
    
    $pr_recQty6 = $MySQLiconn->real_escape_string($_POST['pr_recQty6']);
    $pr_recWunit6 = $MySQLiconn->real_escape_string($_POST['pr_recWunit6']);
    $pr_recIng6 = $MySQLiconn->real_escape_string($_POST['pr_recIng6']);
    $pr_recUnit6 = $MySQLiconn->real_escape_string($_POST['pr_recUnit6']);
    $pr_recCost6 = $MySQLiconn->real_escape_string($_POST['pr_recCost6']);
    
    $pr_recQty7 = $MySQLiconn->real_escape_string($_POST['pr_recQty7']);
    $pr_recWunit7 = $MySQLiconn->real_escape_string($_POST['pr_recWunit7']);
    $pr_recIng7 = $MySQLiconn->real_escape_string($_POST['pr_recIng7']);
    $pr_recUnit7 = $MySQLiconn->real_escape_string($_POST['pr_recUnit7']);
    $pr_recCost7 = $MySQLiconn->real_escape_string($_POST['pr_recCost7']);
    
    $pr_recQty8 = $MySQLiconn->real_escape_string($_POST['pr_recQty8']);
    $pr_recWunit8 = $MySQLiconn->real_escape_string($_POST['pr_recWunit8']);
    $pr_recIng8 = $MySQLiconn->real_escape_string($_POST['pr_recIng8']);
    $pr_recUnit8 = $MySQLiconn->real_escape_string($_POST['pr_recUnit8']);
    $pr_recCost8 = $MySQLiconn->real_escape_string($_POST['pr_recCost8']);
    
    $pr_recQty9 = $MySQLiconn->real_escape_string($_POST['pr_recQty9']);
    $pr_recWunit9 = $MySQLiconn->real_escape_string($_POST['pr_recWunit9']);
    $pr_recIng9 = $MySQLiconn->real_escape_string($_POST['pr_recIng9']);
    $pr_recUnit9 = $MySQLiconn->real_escape_string($_POST['pr_recUnit9']);
    $pr_recCost9 = $MySQLiconn->real_escape_string($_POST['pr_recCost9']);
    
    $pr_recQty10 = $MySQLiconn->real_escape_string($_POST['pr_recQty10']);
    $pr_recWunit10 = $MySQLiconn->real_escape_string($_POST['pr_recWunit10']);
    $pr_recIng10 = $MySQLiconn->real_escape_string($_POST['pr_recIng10']);
    $pr_recUnit10 = $MySQLiconn->real_escape_string($_POST['pr_recUnit10']);
    $pr_recCost10 = $MySQLiconn->real_escape_string($_POST['pr_recCost10']);
    
    $pr_recQty11 = $MySQLiconn->real_escape_string($_POST['pr_recQty11']);
    $pr_recWunit11 = $MySQLiconn->real_escape_string($_POST['pr_recWunit11']);
    $pr_recIng11 = $MySQLiconn->real_escape_string($_POST['pr_recIng11']);
    $pr_recUnit11 = $MySQLiconn->real_escape_string($_POST['pr_recUnit11']);
    $pr_recCost11 = $MySQLiconn->real_escape_string($_POST['pr_recCost11']);
    
    $pr_recQty12 = $MySQLiconn->real_escape_string($_POST['pr_recQty12']);
    $pr_recWunit12 = $MySQLiconn->real_escape_string($_POST['pr_recWunit12']);
    $pr_recIng12 = $MySQLiconn->real_escape_string($_POST['pr_recIng12']);
    $pr_recUnit12 = $MySQLiconn->real_escape_string($_POST['pr_recUnit12']);
    $pr_recCost12 = $MySQLiconn->real_escape_string($_POST['pr_recCost12']);
    
    $pr_recQty13 = $MySQLiconn->real_escape_string($_POST['pr_recQty13']);
    $pr_recWunit13 = $MySQLiconn->real_escape_string($_POST['pr_recWunit13']);
    $pr_recIng13 = $MySQLiconn->real_escape_string($_POST['pr_recIng13']);
    $pr_recUnit13 = $MySQLiconn->real_escape_string($_POST['pr_recUnit13']);
    $pr_recCost13 = $MySQLiconn->real_escape_string($_POST['pr_recCost13']);
    
    $pr_recQty14 = $MySQLiconn->real_escape_string($_POST['pr_recQty14']);
    $pr_recWunit14 = $MySQLiconn->real_escape_string($_POST['pr_recWunit14']);
    $pr_recIng14 = $MySQLiconn->real_escape_string($_POST['pr_recIng14']);
    $pr_recUnit14 = $MySQLiconn->real_escape_string($_POST['pr_recUnit14']);
    $pr_recCost14 = $MySQLiconn->real_escape_string($_POST['pr_recCost14']);
    
    $pr_recQty15 = $MySQLiconn->real_escape_string($_POST['pr_recQty15']);
    $pr_recWunit15 = $MySQLiconn->real_escape_string($_POST['pr_recWunit15']);
    $pr_recIng15 = $MySQLiconn->real_escape_string($_POST['pr_recIng15']);
    $pr_recUnit15 = $MySQLiconn->real_escape_string($_POST['pr_recUnit15']);
    $pr_recCost15 = $MySQLiconn->real_escape_string($_POST['pr_recCost15']);
    
    $pr_recQty16 = $MySQLiconn->real_escape_string($_POST['pr_recQty16']);
    $pr_recWunit16 = $MySQLiconn->real_escape_string($_POST['pr_recWunit16']);
    $pr_recIng16 = $MySQLiconn->real_escape_string($_POST['pr_recIng16']);
    $pr_recUnit16 = $MySQLiconn->real_escape_string($_POST['pr_recUnit16']);
    $pr_recCost16 = $MySQLiconn->real_escape_string($_POST['pr_recCost16']);
    
    $pr_recQty17 = $MySQLiconn->real_escape_string($_POST['pr_recQty17']);
    $pr_recWunit17 = $MySQLiconn->real_escape_string($_POST['pr_recWunit17']);
    $pr_recIng17 = $MySQLiconn->real_escape_string($_POST['pr_recIng17']);
    $pr_recUnit17 = $MySQLiconn->real_escape_string($_POST['pr_recUnit17']);
    $pr_recCost17 = $MySQLiconn->real_escape_string($_POST['pr_recCost17']);
    
    $pr_recQty18 = $MySQLiconn->real_escape_string($_POST['pr_recQty18']);
    $pr_recWunit18 = $MySQLiconn->real_escape_string($_POST['pr_recWunit18']);
    $pr_recIng18 = $MySQLiconn->real_escape_string($_POST['pr_recIng18']);
    $pr_recUnit18 = $MySQLiconn->real_escape_string($_POST['pr_recUnit18']);
    $pr_recCost18 = $MySQLiconn->real_escape_string($_POST['pr_recCost18']);
    
    $pr_recQty19 = $MySQLiconn->real_escape_string($_POST['pr_recQty19']);
    $pr_recWunit19 = $MySQLiconn->real_escape_string($_POST['pr_recWunit19']);
    $pr_recIng19 = $MySQLiconn->real_escape_string($_POST['pr_recIng19']);
    $pr_recUnit19 = $MySQLiconn->real_escape_string($_POST['pr_recUnit19']);
    $pr_recCost19 = $MySQLiconn->real_escape_string($_POST['pr_recCost19']);
    
    $pr_recQty20 = $MySQLiconn->real_escape_string($_POST['pr_recQty20']);
    $pr_recWunit20 = $MySQLiconn->real_escape_string($_POST['pr_recWunit20']);
    $pr_recIng20 = $MySQLiconn->real_escape_string($_POST['pr_recIng20']);
    $pr_recUnit20 = $MySQLiconn->real_escape_string($_POST['pr_recUnit20']);
    $pr_recCost20 = $MySQLiconn->real_escape_string($_POST['pr_recCost20']);
    
    $pr_recQty21 = $MySQLiconn->real_escape_string($_POST['pr_recQty21']);
    $pr_recWunit21 = $MySQLiconn->real_escape_string($_POST['pr_recWunit21']);
    $pr_recIng21 = $MySQLiconn->real_escape_string($_POST['pr_recIng21']);
    $pr_recUnit21 = $MySQLiconn->real_escape_string($_POST['pr_recUnit21']);
    $pr_recCost21 = $MySQLiconn->real_escape_string($_POST['pr_recCost21']);
    
    $pr_recQty22 = $MySQLiconn->real_escape_string($_POST['pr_recQty22']);
    $pr_recWunit22 = $MySQLiconn->real_escape_string($_POST['pr_recWunit22']);
    $pr_recIng22 = $MySQLiconn->real_escape_string($_POST['pr_recIng22']);
    $pr_recUnit22 = $MySQLiconn->real_escape_string($_POST['pr_recUnit22']);
    $pr_recCost22 = $MySQLiconn->real_escape_string($_POST['pr_recCost22']);
    
    $pr_recQty23 = $MySQLiconn->real_escape_string($_POST['pr_recQty23']);
    $pr_recWunit23 = $MySQLiconn->real_escape_string($_POST['pr_recWunit23']);
    $pr_recIng23 = $MySQLiconn->real_escape_string($_POST['pr_recIng23']);
    $pr_recUnit23 = $MySQLiconn->real_escape_string($_POST['pr_recUnit23']);
    $pr_recCost23 = $MySQLiconn->real_escape_string($_POST['pr_recCost23']);
    
    $pr_recQty24 = $MySQLiconn->real_escape_string($_POST['pr_recQty24']);
    $pr_recWunit24 = $MySQLiconn->real_escape_string($_POST['pr_recWunit24']);
    $pr_recIng24 = $MySQLiconn->real_escape_string($_POST['pr_recIng24']);
    $pr_recUnit24 = $MySQLiconn->real_escape_string($_POST['pr_recUnit24']);
    $pr_recCost24 = $MySQLiconn->real_escape_string($_POST['pr_recCost24']);
    
    $pr_recQty25 = $MySQLiconn->real_escape_string($_POST['pr_recQty25']);
    $pr_recWunit25 = $MySQLiconn->real_escape_string($_POST['pr_recWunit25']);
    $pr_recIng25 = $MySQLiconn->real_escape_string($_POST['pr_recIng25']);
    $pr_recUnit25 = $MySQLiconn->real_escape_string($_POST['pr_recUnit25']);
    $pr_recCost25 = $MySQLiconn->real_escape_string($_POST['pr_recCost25']);

    
    $SQL = $MySQLiconn->prepare("INSERT INTO recipe (pr_recId,pr_recDate,pr_recName,pr_recDish,pr_recTotal,pr_recDesc,pr_recQty1,pr_recWunit1,pr_recIng1,pr_recUnit1,pr_recCost1,pr_recQty2,pr_recWunit2,pr_recIng2,pr_recUnit2,pr_recCost2,pr_recQty3,pr_recWunit3,pr_recIng3,pr_recUnit3,pr_recCost3,pr_recQty4,pr_recWunit4,pr_recIng4,pr_recUnit4,pr_recCost4,pr_recQty5,pr_recWunit5,pr_recIng5,pr_recUnit5,pr_recCost5,pr_recQty6,pr_recWunit6,pr_recIng6,pr_recUnit6,pr_recCost6,pr_recQty7,pr_recWunit7,pr_recIng7,pr_recUnit7,pr_recCost7,pr_recQty8,pr_recWunit8,pr_recIng8,pr_recUnit8,pr_recCost8,pr_recQty9,pr_recWunit9,pr_recIng9,pr_recUnit9,pr_recCost9,pr_recQty10,pr_recWunit10,pr_recIng10,pr_recUnit10,pr_recCost10,pr_recQty11,pr_recWunit11,pr_recIng11,pr_recUnit11,pr_recCost11,pr_recQty12,pr_recWunit12,pr_recIng12,pr_recUnit12,pr_recCost12,pr_recQty13,pr_recWunit13,pr_recIng13,pr_recUnit13,pr_recCost13,pr_recQty14,pr_recWunit14,pr_recIng14,pr_recUnit14,pr_recCost14,pr_recQty15,pr_recWunit15,pr_recIng15,pr_recUnit15,pr_recCost15,pr_recQty16,pr_recWunit16,pr_recIng16,pr_recUnit16,pr_recCost16,pr_recQty17,pr_recWunit17,pr_recIng17,pr_recUnit17,pr_recCost17,pr_recQty18,pr_recWunit18,pr_recIng18,pr_recUnit18,pr_recCost18,pr_recQty19,pr_recWunit19,pr_recIng19,pr_recUnit19,pr_recCost19,pr_recQty20,pr_recWunit20,pr_recIng20,pr_recUnit20,pr_recCost20,pr_recQty21,pr_recWunit21,pr_recIng21,pr_recUnit21,pr_recCost21,pr_recQty22,pr_recWunit22,pr_recIng22,pr_recUnit22,pr_recCost22,pr_recQty23,pr_recWunit23,pr_recIng23,pr_recUnit23,pr_recCost23,pr_recQty24,pr_recWunit24,pr_recIng24,pr_recUnit24,pr_recCost24,pr_recQty25,pr_recWunit25,pr_recIng25,pr_recUnit25,pr_recCost25) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("issssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",intval( AutoGenID() ),$pr_recDate,$pr_recName,$pr_recDish,$pr_recTotal,$pr_recDesc,$pr_recQty1,$pr_recWunit1,$pr_recIng1,$pr_recUnit1,$pr_recCost1,$pr_recQty2,$pr_recWunit2,$pr_recIng2,$pr_recUnit2,$pr_recCost2,$pr_recQty3,$pr_recWunit3,$pr_recIng3,$pr_recUnit3,$pr_recCost3,$pr_recQty4,$pr_recWunit4,$pr_recIng4,$pr_recUnit4,$pr_recCost4,$pr_recQty5,$pr_recWunit5,$pr_recIng5,$pr_recUnit5,$pr_recCost5,$pr_recQty6,$pr_recWunit6,$pr_recIng6,$pr_recUnit6,$pr_recCost6,$pr_recQty7,$pr_recWunit7,$pr_recIng7,$pr_recUnit7,$pr_recCost7,$pr_recQty8,$pr_recWunit8,$pr_recIng8,$pr_recUnit8,$pr_recCost8,$pr_recQty9,$pr_recWunit9,$pr_recIng9,$pr_recUnit9,$pr_recCost9,$pr_recQty10,$pr_recWunit10,$pr_recIng10,$pr_recUnit10,$pr_recCost10,$pr_recQty11,$pr_recWunit11,$pr_recIng11,$pr_recUnit11,$pr_recCost11,$pr_recQty12,$pr_recWunit12,$pr_recIng12,$pr_recUnit12,$pr_recCost12,$pr_recQty13,$pr_recWunit13,$pr_recIng13,$pr_recUnit13,$pr_recCost13,$pr_recQty14,$pr_recWunit14,$pr_recIng14,$pr_recUnit14,$pr_recCost14,$pr_recQty15,$pr_recWunit15,$pr_recIng15,$pr_recUnit15,$pr_recCost15,$pr_recQty16,$pr_recWunit16,$pr_recIng16,$pr_recUnit16,$pr_recCost16,$pr_recQty17,$pr_recWunit17,$pr_recIng17,$pr_recUnit17,$pr_recCost17,$pr_recQty18,$pr_recWunit18,$pr_recIng18,$pr_recUnit18,$pr_recCost18,$pr_recQty19,$pr_recWunit19,$pr_recIng19,$pr_recUnit19,$pr_recCost19,$pr_recQty20,$pr_recWunit20,$pr_recIng20,$pr_recUnit20,$pr_recCost20,$pr_recQty21,$pr_recWunit21,$pr_recIng21,$pr_recUnit21,$pr_recCost21,$pr_recQty22,$pr_recWunit22,$pr_recIng22,$pr_recUnit22,$pr_recCost22,$pr_recQty23,$pr_recWunit23,$pr_recIng23,$pr_recUnit23,$pr_recCost23,$pr_recQty24,$pr_recWunit24,$pr_recIng24,$pr_recUnit24,$pr_recCost24,$pr_recQty25,$pr_recWunit25,$pr_recIng25,$pr_recUnit25,$pr_recCost25);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Ssuccessfully Saved";
    header("Location:../view/pro_reprecipe");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM recipe WHERE pr_recId=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_reprecipe");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM recipe WHERE pr_recId=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM recipe WHERE pr_recId=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE recipe SET pr_recDate=?,pr_recName=?,pr_recDish=?,pr_recTotal=?,pr_recDesc=?,pr_recQty1=?,pr_recWunit1=?,pr_recIng1=?,pr_recUnit1=?,pr_recCost1=?,pr_recQty2=?,pr_recWunit2=?,pr_recIng2=?,pr_recUnit2=?,pr_recCost2=?,pr_recQty3=?,pr_recWunit3=?,pr_recIng3=?,pr_recUnit3=?,pr_recCost3=?,pr_recQty4=?,pr_recWunit4=?,pr_recIng4=?,pr_recUnit4=?,pr_recCost4=?,pr_recQty5=?,pr_recWunit5=?,pr_recIng5=?,pr_recUnit5=?,pr_recCost5=?,pr_recQty6=?,pr_recWunit6=?,pr_recIng6=?,pr_recUnit6=?,pr_recCost6=?,pr_recQty7=?,pr_recWunit7=?,pr_recIng7=?,pr_recUnit7=?,pr_recCost7=?,pr_recQty8=?,pr_recWunit8=?,pr_recIng8=?,pr_recUnit8=?,pr_recCost8=?,pr_recQty9=?,pr_recWunit9=?,pr_recIng9=?,pr_recUnit9=?,pr_recCost9=?,pr_recQty10=?,pr_recWunit10=?,pr_recIng10=?,pr_recUnit10=?,pr_recCost10=?,pr_recQty11=?,pr_recWunit11=?,pr_recIng11=?,pr_recUnit11=?,pr_recCost11=?,pr_recQty12=?,pr_recWunit12=?,pr_recIng12=?,pr_recUnit12=?,pr_recCost12=?,pr_recQty13=?,pr_recWunit13=?,pr_recIng13=?,pr_recUnit13=?,pr_recCost13=?,pr_recQty14=?,pr_recWunit14=?,pr_recIng14=?,pr_recUnit14=?,pr_recCost14=?,pr_recQty15=?,pr_recWunit15=?,pr_recIng15=?,pr_recUnit15=?,pr_recCost15=?,pr_recQty16=?,pr_recWunit16=?,pr_recIng16=?,pr_recUnit16=?,pr_recCost16=?,pr_recQty17=?,pr_recWunit17=?,pr_recIng17=?,pr_recUnit17=?,pr_recCost17=?,pr_recQty18=?,pr_recWunit18=?,pr_recIng18=?,pr_recUnit18=?,pr_recCost18=?,pr_recQty19=?,pr_recWunit19=?,pr_recIng19=?,pr_recUnit19=?,pr_recCost19=?,pr_recQty20=?,pr_recWunit20=?,pr_recIng20=?,pr_recUnit20=?,pr_recCost20=?,pr_recQty21=?,pr_recWunit21=?,pr_recIng21=?,pr_recUnit21=?,pr_recCost21=?,pr_recQty22=?,pr_recWunit22=?,pr_recIng22=?,pr_recUnit22=?,pr_recCost22=?,pr_recQty23=?,pr_recWunit23=?,pr_recIng23=?,pr_recUnit23=?,pr_recCost23=?,pr_recQty24=?,pr_recWunit24=?,pr_recIng24=?,pr_recUnit24=?,pr_recCost24=?,pr_recQty25=?,pr_recWunit25=?,pr_recIng25=?,pr_recUnit25=?,pr_recCost25=? WHERE pr_recId=?");
    $SQL->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",$_POST['pr_recDate'],$_POST['pr_recName'],$_POST['pr_recDish'],$_POST['pr_recTotal'],$_POST['pr_recDesc'],$_POST['pr_recQty1'],$_POST['pr_recWunit1'],$_POST['pr_recIng1'],$_POST['pr_recUnit1'],$_POST['pr_recCost1'],$_POST['pr_recQty2'],$_POST['pr_recWunit2'],$_POST['pr_recIng2'],$_POST['pr_recUnit2'],$_POST['pr_recCost2'],$_POST['pr_recQty3'],$_POST['pr_recWunit3'],$_POST['pr_recIng3'],$_POST['pr_recUnit3'],$_POST['pr_recCost3'],$_POST['pr_recQty4'],$_POST['pr_recWunit4'],$_POST['pr_recIng4'],$_POST['pr_recUnit4'],$_POST['pr_recCost4'],$_POST['pr_recQty5'],$_POST['pr_recWunit5'],$_POST['pr_recIng5'],$_POST['pr_recUnit5'],$_POST['pr_recCost5'],$_POST['pr_recQty6'],$_POST['pr_recWunit6'],$_POST['pr_recIng6'],$_POST['pr_recUnit6'],$_POST['pr_recCost6'],$_POST['pr_recQty7'],$_POST['pr_recWunit7'],$_POST['pr_recIng7'],$_POST['pr_recUnit7'],$_POST['pr_recCost7'],$_POST['pr_recQty8'],$_POST['pr_recWunit8'],$_POST['pr_recIng8'],$_POST['pr_recUnit8'],$_POST['pr_recCost8'],$_POST['pr_recQty9'],$_POST['pr_recWunit9'],$_POST['pr_recIng9'],$_POST['pr_recUnit9'],$_POST['pr_recCost9'],$_POST['pr_recQty10'],$_POST['pr_recWunit10'],$_POST['pr_recIng10'],$_POST['pr_recUnit10'],$_POST['pr_recCost10'],$_POST['pr_recQty11'],$_POST['pr_recWunit11'],$_POST['pr_recIng11'],$_POST['pr_recUnit11'],$_POST['pr_recCost11'],$_POST['pr_recQty12'],$_POST['pr_recWunit12'],$_POST['pr_recIng12'],$_POST['pr_recUnit12'],$_POST['pr_recCost12'],$_POST['pr_recQty13'],$_POST['pr_recWunit13'],$_POST['pr_recIng13'],$_POST['pr_recUnit13'],$_POST['pr_recCost13'],$_POST['pr_recQty14'],$_POST['pr_recWunit14'],$_POST['pr_recIng14'],$_POST['pr_recUnit14'],$_POST['pr_recCost14'],$_POST['pr_recQty15'],$_POST['pr_recWunit15'],$_POST['pr_recIng15'],$_POST['pr_recUnit15'],$_POST['pr_recCost15'],$_POST['pr_recQty16'],$_POST['pr_recWunit16'],$_POST['pr_recIng16'],$_POST['pr_recUnit16'],$_POST['pr_recCost16'],$_POST['pr_recQty17'],$_POST['pr_recWunit17'],$_POST['pr_recIng17'],$_POST['pr_recUnit17'],$_POST['pr_recCost17'],$_POST['pr_recQty18'],$_POST['pr_recWunit18'],$_POST['pr_recIng18'],$_POST['pr_recUnit18'],$_POST['pr_recCost18'],$_POST['pr_recQty19'],$_POST['pr_recWunit19'],$_POST['pr_recIng19'],$_POST['pr_recUnit19'],$_POST['pr_recCost19'],$_POST['pr_recQty20'],$_POST['pr_recWunit20'],$_POST['pr_recIng20'],$_POST['pr_recUnit20'],$_POST['pr_recCost20'],$_POST['pr_recQty21'],$_POST['pr_recWunit21'],$_POST['pr_recIng21'],$_POST['pr_recUnit21'],$_POST['pr_recCost21'],$_POST['pr_recQty22'],$_POST['pr_recWunit22'],$_POST['pr_recIng22'],$_POST['pr_recUnit22'],$_POST['pr_recCost22'],$_POST['pr_recQty23'],$_POST['pr_recWunit23'],$_POST['pr_recIng23'],$_POST['pr_recUnit23'],$_POST['pr_recCost23'],$_POST['pr_recQty24'],$_POST['pr_recWunit24'],$_POST['pr_recIng24'],$_POST['pr_recUnit24'],$_POST['pr_recCost24'],$_POST['pr_recQty25'],$_POST['pr_recWunit25'],$_POST['pr_recIng25'],$_POST['pr_recUnit25'],$_POST['pr_recCost25'],$_GET['edit']);
    $SQL ->execute();
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/pro_reprecipe");
    exit();

}
?>

