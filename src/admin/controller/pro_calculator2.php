<?php
function AutoGenID() {
    $SQL      = $GLOBALS['MySQLiconn'] -> query( "SELECT * FROM calculate WHERE calcID LIKE '" . date( 'Y' ) . "%' ORDER BY calcID DESC" );
    $firstRow = $SQL -> fetch_array();
    $len      = strlen( $enum = intval( substr( $firstRow[ 'calcID' ], strlen( $firstRow[ 'calcID' ] ) - 4, strlen( $firstRow[ 'calcID' ] ) ) ) );
    return date( "Ym" ) . substr( '0000', 0, 4 - $len ) . $enum + 1;
  }
if(isset($_POST['save']))
{   
    $calcdateCreate = $MySQLiconn->real_escape_string($_POST['calcdateCreate']);
    $calcTitle = $MySQLiconn->real_escape_string($_POST['calcTitle']);
    $calcWeight = $MySQLiconn->real_escape_string($_POST['calcWeight']);
    $calcPercentage = $MySQLiconn->real_escape_string($_POST['calcPercentage']);
    
    $calcName1 = $MySQLiconn->real_escape_string($_POST['calcName1']);
    $calcW1 = $MySQLiconn->real_escape_string($_POST['calcW1']);
    $calcC1 = $MySQLiconn->real_escape_string($_POST['calcC1']);
    $calcR1 = $MySQLiconn->real_escape_string($_POST['calcR1']);
    $calctotalCR1 = $MySQLiconn->real_escape_string($_POST['calctotalCR1']);
    $calcCT1 = $MySQLiconn->real_escape_string($_POST['calcCT1']);
    $calctotalCT1 = $MySQLiconn->real_escape_string($_POST['calctotalCT1']);
    
    $calcName2 = $MySQLiconn->real_escape_string($_POST['calcName2']);
    $calcW2 = $MySQLiconn->real_escape_string($_POST['calcW2']);
    $calcC2 = $MySQLiconn->real_escape_string($_POST['calcC2']);
    $calcR2 = $MySQLiconn->real_escape_string($_POST['calcR2']);
    $calctotalCR2 = $MySQLiconn->real_escape_string($_POST['calctotalCR2']);
    $calcCT2 = $MySQLiconn->real_escape_string($_POST['calcCT2']);
    $calctotalCT2 = $MySQLiconn->real_escape_string($_POST['calctotalCT2']);
    
    $calcName3 = $MySQLiconn->real_escape_string($_POST['calcName3']);
    $calcW3 = $MySQLiconn->real_escape_string($_POST['calcW3']);
    $calcC3 = $MySQLiconn->real_escape_string($_POST['calcC3']);
    $calcR3 = $MySQLiconn->real_escape_string($_POST['calcR3']);
    $calctotalCR3 = $MySQLiconn->real_escape_string($_POST['calctotalCR3']);
    $calcCT3 = $MySQLiconn->real_escape_string($_POST['calcCT3']);
    $calctotalCT3 = $MySQLiconn->real_escape_string($_POST['calctotalCT3']);
    
    $calcName4 = $MySQLiconn->real_escape_string($_POST['calcName4']);
    $calcW4 = $MySQLiconn->real_escape_string($_POST['calcW4']);
    $calcC4 = $MySQLiconn->real_escape_string($_POST['calcC4']);
    $calcR4 = $MySQLiconn->real_escape_string($_POST['calcR4']);
    $calctotalCR4 = $MySQLiconn->real_escape_string($_POST['calctotalCR4']);
    $calcCT4 = $MySQLiconn->real_escape_string($_POST['calcCT4']);
    $calctotalCT4 = $MySQLiconn->real_escape_string($_POST['calctotalCT4']);
    
    $calcName5 = $MySQLiconn->real_escape_string($_POST['calcName5']);
    $calcW5 = $MySQLiconn->real_escape_string($_POST['calcW5']);
    $calcC5 = $MySQLiconn->real_escape_string($_POST['calcC5']);
    $calcR5 = $MySQLiconn->real_escape_string($_POST['calcR5']);
    $calctotalCR5 = $MySQLiconn->real_escape_string($_POST['calctotalCR5']);
    $calcCT5 = $MySQLiconn->real_escape_string($_POST['calcCT5']);
    $calctotalCT5 = $MySQLiconn->real_escape_string($_POST['calctotalCT5']);
    
    $calcName6 = $MySQLiconn->real_escape_string($_POST['calcName6']);
    $calcW6 = $MySQLiconn->real_escape_string($_POST['calcW6']);
    $calcC6 = $MySQLiconn->real_escape_string($_POST['calcC6']);
    $calcR6 = $MySQLiconn->real_escape_string($_POST['calcR6']);
    $calctotalCR6 = $MySQLiconn->real_escape_string($_POST['calctotalCR6']);
    $calcCT6 = $MySQLiconn->real_escape_string($_POST['calcCT6']);
    $calctotalCT6 = $MySQLiconn->real_escape_string($_POST['calctotalCT6']);
    
    $calcName7 = $MySQLiconn->real_escape_string($_POST['calcName7']);
    $calcW7 = $MySQLiconn->real_escape_string($_POST['calcW7']);
    $calcC7 = $MySQLiconn->real_escape_string($_POST['calcC7']);
    $calcR7 = $MySQLiconn->real_escape_string($_POST['calcR7']);
    $calctotalCR7 = $MySQLiconn->real_escape_string($_POST['calctotalCR7']);
    $calcCT7 = $MySQLiconn->real_escape_string($_POST['calcCT7']);
    $calctotalCT7 = $MySQLiconn->real_escape_string($_POST['calctotalCT7']);
    
    $calcName8 = $MySQLiconn->real_escape_string($_POST['calcName8']);
    $calcW8 = $MySQLiconn->real_escape_string($_POST['calcW8']);
    $calcC8 = $MySQLiconn->real_escape_string($_POST['calcC8']);
    $calcR8 = $MySQLiconn->real_escape_string($_POST['calcR8']);
    $calctotalCR8 = $MySQLiconn->real_escape_string($_POST['calctotalCR8']);
    $calcCT8 = $MySQLiconn->real_escape_string($_POST['calcCT8']);
    $calctotalCT8 = $MySQLiconn->real_escape_string($_POST['calctotalCT8']);
    
    $calcName9 = $MySQLiconn->real_escape_string($_POST['calcName9']);
    $calcW9 = $MySQLiconn->real_escape_string($_POST['calcW9']);
    $calcC9 = $MySQLiconn->real_escape_string($_POST['calcC9']);
    $calcR9 = $MySQLiconn->real_escape_string($_POST['calcR9']);
    $calctotalCR9 = $MySQLiconn->real_escape_string($_POST['calctotalCR9']);
    $calcCT9 = $MySQLiconn->real_escape_string($_POST['calcCT9']);
    $calctotalCT9 = $MySQLiconn->real_escape_string($_POST['calctotalCT9']);
    
    $calcName10 = $MySQLiconn->real_escape_string($_POST['calcName10']);
    $calcW10 = $MySQLiconn->real_escape_string($_POST['calcW10']);
    $calcC10 = $MySQLiconn->real_escape_string($_POST['calcC10']);
    $calcR10 = $MySQLiconn->real_escape_string($_POST['calcR10']);
    $calctotalCR10 = $MySQLiconn->real_escape_string($_POST['calctotalCR10']);
    $calcCT10 = $MySQLiconn->real_escape_string($_POST['calcCT10']);
    $calctotalCT10 = $MySQLiconn->real_escape_string($_POST['calctotalCT10']);
    
    $calcName11 = $MySQLiconn->real_escape_string($_POST['calcName11']);
    $calcW11 = $MySQLiconn->real_escape_string($_POST['calcW11']);
    $calcC11 = $MySQLiconn->real_escape_string($_POST['calcC11']);
    $calcR11 = $MySQLiconn->real_escape_string($_POST['calcR11']);
    $calctotalCR11 = $MySQLiconn->real_escape_string($_POST['calctotalCR11']);
    $calcCT11 = $MySQLiconn->real_escape_string($_POST['calcCT11']);
    $calctotalCT11 = $MySQLiconn->real_escape_string($_POST['calctotalCT11']);
    
    $calcName12 = $MySQLiconn->real_escape_string($_POST['calcName12']);
    $calcW12 = $MySQLiconn->real_escape_string($_POST['calcW12']);
    $calcC12 = $MySQLiconn->real_escape_string($_POST['calcC12']);
    $calcR12 = $MySQLiconn->real_escape_string($_POST['calcR12']);
    $calctotalCR12 = $MySQLiconn->real_escape_string($_POST['calctotalCR12']);
    $calcCT12 = $MySQLiconn->real_escape_string($_POST['calcCT12']);
    $calctotalCT12 = $MySQLiconn->real_escape_string($_POST['calctotalCT12']);
    
    $calcName13 = $MySQLiconn->real_escape_string($_POST['calcName13']);
    $calcW13 = $MySQLiconn->real_escape_string($_POST['calcW13']);
    $calcC13 = $MySQLiconn->real_escape_string($_POST['calcC13']);
    $calcR13 = $MySQLiconn->real_escape_string($_POST['calcR13']);
    $calctotalCR13 = $MySQLiconn->real_escape_string($_POST['calctotalCR13']);
    $calcCT13 = $MySQLiconn->real_escape_string($_POST['calcCT13']);
    $calctotalCT13 = $MySQLiconn->real_escape_string($_POST['calctotalCT13']);
    
    $calcName14 = $MySQLiconn->real_escape_string($_POST['calcName14']);
    $calcW14 = $MySQLiconn->real_escape_string($_POST['calcW14']);
    $calcC14 = $MySQLiconn->real_escape_string($_POST['calcC14']);
    $calcR14 = $MySQLiconn->real_escape_string($_POST['calcR14']);
    $calctotalCR14 = $MySQLiconn->real_escape_string($_POST['calctotalCR14']);
    $calcCT14 = $MySQLiconn->real_escape_string($_POST['calcCT14']);
    $calctotalCT14 = $MySQLiconn->real_escape_string($_POST['calctotalCT14']);
    
    $calcName15 = $MySQLiconn->real_escape_string($_POST['calcName15']);
    $calcW15 = $MySQLiconn->real_escape_string($_POST['calcW15']);
    $calcC15 = $MySQLiconn->real_escape_string($_POST['calcC15']);
    $calcR15 = $MySQLiconn->real_escape_string($_POST['calcR15']);
    $calctotalCR15 = $MySQLiconn->real_escape_string($_POST['calctotalCR15']);
    $calcCT15 = $MySQLiconn->real_escape_string($_POST['calcCT15']);
    $calctotalCT15 = $MySQLiconn->real_escape_string($_POST['calctotalCT15']);
     
    $totalAll1 = $MySQLiconn->real_escape_string($_POST['totalAll1']);
    $totalAll2 = $MySQLiconn->real_escape_string($_POST['totalAll2']);
    $totalAll3 = $MySQLiconn->real_escape_string($_POST['totalAll3']);
    $totalAll4 = $MySQLiconn->real_escape_string($_POST['totalAll4']);
    
    
    $SQL = $MySQLiconn->prepare("INSERT INTO calculate (calcID,calcdateCreate,calcTitle,calcWeight,calcPercentage,calcName1,calcW1,calcC1,calcR1,calctotalCR1,calcCT1,calctotalCT1,calcName2,calcW2,calcC2,calcR2,calctotalCR2,calcCT2,calctotalCT2,calcName3,calcW3,calcC3,calcR3,calctotalCR3,calcCT3,calctotalCT3,calcName4,calcW4,calcC4,calcR4,calctotalCR4,calcCT4,calctotalCT4,calcName5,calcW5,calcC5,calcR5,calctotalCR5,calcCT5,calctotalCT5,calcName6,calcW6,calcC6,calcR6,calctotalCR6,calcCT6,calctotalCT6,calcName7,calcW7,calcC7,calcR7,calctotalCR7,calcCT7,calctotalCT7,calcName8,calcW8,calcC8,calcR8,calctotalCR8,calcCT8,calctotalCT8,calcName9,calcW9,calcC9,calcR9,calctotalCR9,calcCT9,calctotalCT9,calcName10,calcW10,calcC10,calcR10,calctotalCR10,calcCT10,calctotalCT10,calcName11,calcW11,calcC11,calcR11,calctotalCR11,calcCT11,calctotalCT11,calcName12,calcW12,calcC12,calcR12,calctotalCR12,calcCT12,calctotalCT12,calcName13,calcW13,calcC13,calcR13,calctotalCR13,calcCT13,calctotalCT13,calcName14,calcW14,calcC14,calcR14,calctotalCR14,calcCT14,calctotalCT14,calcName15,calcW15,calcC15,calcR15,calctotalCR15,calcCT15,calctotalCT15,totalAll1,totalAll2,totalAll3,totalAll4) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("isssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",intval( AutoGenID() ),$calcdateCreate,$calcTitle,$calcWeight,$calcPercentage,$calcName1,$calcW1,$calcC1,$calcR1,$calctotalCR1,$calcCT1,$calctotalCT1,$calcName2,$calcW2,$calcC2,$calcR2,$calctotalCR2,$calcCT2,$calctotalCT2,$calcName3,$calcW3,$calcC3,$calcR3,$calctotalCR3,$calcCT3,$calctotalCT3,$calcName4,$calcW4,$calcC4,$calcR4,$calctotalCR4,$calcCT4,$calctotalCT4,$calcName5,$calcW5,$calcC5,$calcR5,$calctotalCR5,$calcCT5,$calctotalCT5,$calcName6,$calcW6,$calcC6,$calcR6,$calctotalCR6,$calcCT6,$calctotalCT6,$calcName7,$calcW7,$calcC7,$calcR7,$calctotalCR7,$calcCT7,$calctotalCT7,$calcName8,$calcW8,$calcC8,$calcR8,$calctotalCR8,$calcCT8,$calctotalCT8,$calcName9,$calcW9,$calcC9,$calcR9,$calctotalCR9,$calcCT9,$calctotalCT9,$calcName10,$calcW10,$calcC10,$calcR10,$calctotalCR10,$calcCT10,$calctotalCT10,$calcName11,$calcW11,$calcC11,$calcR11,$calctotalCR11,$calcCT11,$calctotalCT11,$calcName12,$calcW12,$calcC12,$calcR12,$calctotalCR12,$calcCT12,$calctotalCT12,$calcName13,$calcW13,$calcC13,$calcR13,$calctotalCR13,$calcCT13,$calctotalCT13,$calcName14,$calcW14,$calcC14,$calcR14,$calctotalCR14,$calcCT14,$calctotalCT14,$calcName15,$calcW15,$calcC15,$calcR15,$calctotalCR15,$calcCT15,$calctotalCT15,$totalAll1,$totalAll2,$totalAll3,$totalAll4);
    $SQL->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/pro_calculator2");
    exit();


if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM calculate WHERE calcID=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/pro_calculator2");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM calculate WHERE calcID=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM calculate WHERE calcID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE calculate SET calcdateCreate=?,calcTitle=?,calcWeight=?,calcPercentage=?,calcName1=?,calcW1=?,calcC1=?,calcR1=?,calctotalCR1=?,calcCT1=?,calctotalCT1=?,calcName2=?,calcW2=?,calcC2=?,calcR2=?,calctotalCR2=?,calcCT2=?,calctotalCT2=?,calcName3=?,calcW3=?,calcC3=?,calcR3=?,calctotalCR3=?,calcCT3=?,calctotalCT3=?,calcName4=?,calcW4=?,calcC4=?,calcR4=?,calctotalCR4=?,calcCT4=?,calctotalCT4=?,calcName5=?,calcW5=?,calcC5=?,calcR5=?,calctotalCR5=?,calcCT5=?,calctotalCT5=?,calcName6=?,calcW6=?,calcC6=?,calcR6=?,calctotalCR6=?,calcCT6=?,calctotalCT6=?,calcName7=?,calcW7=?,calcC7=?,calcR7=?,calctotalCR7=?,calcCT7=?,calctotalCT7=?,calcName8=?,calcW8=?,calcC8=?,calcR8=?,calctotalCR8=?,calcCT8=?,calctotalCT8=?,calcName9=?,calcW9=?,calcC9=?,calcR9=?,calctotalCR9=?,calcCT9=?,calctotalCT9=?,calcName10=?,calcW10=?,calcC10=?,calcR10=?,calctotalCR10=?,calcCT10=?,calctotalCT10=?,calcName11=?,calcW11=?,calcC11=?,calcR11=?,calctotalCR11=?,calcCT11=?,calctotalCT11=?,calcName12=?,calcW12=?,calcC12=?,calcR12=?,calctotalCR12=?,calcCT12=?,calctotalCT12=?,calcName13=?,calcW13=?,calcC13=?,calcR13=?,calctotalCR13=?,calcCT13=?,calctotalCT13=?,calcName14=?,calcW14=?,calcC14=?,calcR14=?,calctotalCR14=?,calcCT14=?,calctotalCT14=?,calcName15=?,calcW15=?,calcC15=?,calcR15=?,calctotalCR15=?,calcCT15=?,calctotalCT15=?,totalAll1=?,totalAll2=?,totalAll3=?,totalAll4=? WHERE calcID=?");
    $SQL->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",$_POST['calcdateCreate'],$_POST['calcTitle'],$_POST['calcWeight'],$_POST['calcPercentage'],$_POST['calcName1'],$_POST['calcW1'],$_POST['calcC1'],$_POST['calcR1'],$_POST['calctotalCR1'],$_POST['calcCT1'],$_POST['calctotalCT1'],$_POST['calcName2'],$_POST['calcW2'],$_POST['calcC2'],$_POST['calcR2'],$_POST['calctotalCR2'],$_POST['calcCT2'],$_POST['calctotalCT2'],$_POST['calcName3'],$_POST['calcW3'],$_POST['calcC3'],$_POST['calcR3'],$_POST['calctotalCR3'],$_POST['calcCT3'],$_POST['calctotalCT3'],$_POST['calcName4'],$_POST['calcW4'],$_POST['calcC4'],$_POST['calcR4'],$_POST['calctotalCR4'],$_POST['calcCT4'],$_POST['calctotalCT4'],$_POST['calcName5'],$_POST['calcW5'],$_POST['calcC5'],$_POST['calcR5'],$_POST['calctotalCR5'],$_POST['calcCT5'],$_POST['calctotalCT5'],$_POST['calcName6'],$_POST['calcW6'],$_POST['calcC6'],$_POST['calcR6'],$_POST['calctotalCR6'],$_POST['calcCT6'],$_POST['calctotalCT6'],$_POST['calcName7'],$_POST['calcW7'],$_POST['calcC7'],$_POST['calcR7'],$_POST['calctotalCR7'],$_POST['calcCT7'],$_POST['calctotalCT7'],$_POST['calcName8'],$_POST['calcW8'],$_POST['calcC8'],$_POST['calcR8'],$_POST['calctotalCR8'],$_POST['calcCT8'],$_POST['calctotalCT8'],$_POST['calcName9'],$_POST['calcW9'],$_POST['calcC9'],$_POST['calcR9'],$_POST['calctotalCR9'],$_POST['calcCT9'],$_POST['calctotalCT9'],$_POST['calcName10'],$_POST['calcW10'],$_POST['calcC10'],$_POST['calcR10'],$_POST['calctotalCR10'],$_POST['calcCT10'],$_POST['calctotalCT10'],$_POST['calcName11'],$_POST['calcW11'],$_POST['calcC11'],$_POST['calcR11'],$_POST['calctotalCR11'],$_POST['calcCT11'],$_POST['calctotalCT11'],$_POST['calcName12'],$_POST['calcW12'],$_POST['calcC12'],$_POST['calcR12'],$_POST['calctotalCR12'],$_POST['calcCT12'],$_POST['calctotalCT12'],$_POST['calcName13'],$_POST['calcW13'],$_POST['calcC13'],$_POST['calcR13'],$_POST['calctotalCR13'],$_POST['calcCT13'],$_POST['calctotalCT13'],$_POST['calcName14'],$_POST['calcW14'],$_POST['calcC14'],$_POST['calcR14'],$_POST['calctotalCR14'],$_POST['calcCT14'],$_POST['calctotalCT14'],$_POST['calcName15'],$_POST['calcW15'],$_POST['calcC15'],$_POST['calcR15'],$_POST['calctotalCR15'],$_POST['calcCT15'],$_POST['calctotalCT15'],$_POST['totalAll1'],$_POST['totalAll2'],$_POST['totalAll3'],$_POST['totalAll4'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update!";
    header("Location:../view/pro_calculator2");
    exit();

}
?>

