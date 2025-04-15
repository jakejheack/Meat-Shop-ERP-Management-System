<?php


if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
    $SQL = $MySQLiconn->prepare("UPDATE settings_records SET tab1=?,tabstat1=?,tab2=?,tabstat2=?,tab3=?,tabstat3=?,tab4=?,tabstat4=?,tab5=?,tabstat5=?,tab6=?,tabstat6=?,pk=?,pkin=?,pkout=?,ps=?,psin=?,psout=?,disc=?,discin=?,discout=?,chick=?,chickin=?,chickout=?,cuscredit=?,cuscreditin=?,cuscreditout=?,empcredit=?,empcreditin=?,empcreditout=?,lehcredit=?,lehcreditin=?,lehcreditout=?,cashremit=?,cashremitin=?,cashremitout=?,cashreturn=?,cashreturnin=?,cashreturnout=?,bankdepo=?,bankdepoin=?,bankdepoout=?,prifamily=?,prifamilyin=?,prifamilyout=?,crcard=?,crcardin=?,crcardout=?,decard=?,decardin=?,decardout=?,checks=?,checksin=?,checksout=?,cashier=?,totalamount=?,scale=?,sobra=?,total=?,difference=?,totalsale=?,upload=?,notes=?,cashierduty=?,recordduty=?,pktab=?,pstab=?,disctab=?,chicktab=?,cuscredittab=?,empcredittab=?,lehcredittab=?,cashremittab=?,cashreturntab=?,bankdepotab=?,prifamilytab=?,crcardtab=?,decardtab=?,checkstab=?,cashiertab=?,pkaccess=?,psaccess=?,discaccess=?,chickaccess=?,cuscreditaccess=?,empcreditaccess=?,lehcreditaccess=?,cashremitaccess=?,cashreturnaccess=?,bankdepoaccess=?,prifamilyaccess=?,crcardaccess=?,decardaccess=?,checksaccess=?,cashieraccess=?,totalamountaccess=?,scaleaccess=?,sobraaccess=?,totalaccess=?,differenceaccess=?,totalsaleaccess=?,uploadaccess=?,notesaccess=?,cashierdutyaccess=?,recorddutyaccess=?,tab1access=?,tab2access=?,tab3access=?,tab4access=?,tab5access=?,tab6access=? WHERE id=?");
    $SQL->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",$_POST['tab1'],$_POST['tabstat1'],$_POST['tab2'],$_POST['tabstat2'],$_POST['tab3'],$_POST['tabstat3'],$_POST['tab4'],$_POST['tabstat4'],$_POST['tab5'],$_POST['tabstat5'],$_POST['tab6'],$_POST['tabstat6'],$_POST['pk'],$_POST['pkin'],$_POST['pkout'],$_POST['ps'],$_POST['psin'],$_POST['psout'],$_POST['disc'],$_POST['discin'],$_POST['discout'],$_POST['chick'],$_POST['chickin'],$_POST['chickout'],$_POST['cuscredit'],$_POST['cuscreditin'],$_POST['cuscreditout'],$_POST['empcredit'],$_POST['empcreditin'],$_POST['empcreditout'],$_POST['lehcredit'],$_POST['lehcreditin'],$_POST['lehcreditout'],$_POST['cashremit'],$_POST['cashremitin'],$_POST['cashremitout'],$_POST['cashreturn'],$_POST['cashreturnin'],$_POST['cashreturnout'],$_POST['bankdepo'],$_POST['bankdepoin'],$_POST['bankdepoout'],$_POST['prifamily'],$_POST['prifamilyin'],$_POST['prifamilyout'],$_POST['crcard'],$_POST['crcardin'],$_POST['crcardout'],$_POST['decard'],$_POST['decardin'],$_POST['decardout'],$_POST['checks'],$_POST['checksin'],$_POST['checksout'],$_POST['cashier'],$_POST['totalamount'],$_POST['scale'],$_POST['sobra'],$_POST['total'],$_POST['difference'],$_POST['totalsale'],$_POST['upload'],$_POST['notes'],$_POST['cashierduty'],$_POST['recordduty'],$_POST['pktab'],$_POST['pstab'],$_POST['disctab'],$_POST['chicktab'],$_POST['cuscredittab'],$_POST['empcredittab'],$_POST['lehcredittab'],$_POST['cashremittab'],$_POST['cashreturntab'],$_POST['bankdepotab'],$_POST['prifamilytab'],$_POST['crcardtab'],$_POST['decardtab'],$_POST['checkstab'],$_POST['cashiertab'],$_POST['pkaccess'],$_POST['psaccess'],$_POST['discaccess'],$_POST['chickaccess'],$_POST['cuscreditaccess'],$_POST['empcreditaccess'],$_POST['lehcreditaccess'],$_POST['cashremitaccess'],$_POST['cashreturnaccess'],$_POST['bankdepoaccess'],$_POST['prifamilyaccess'],$_POST['crcardaccess'],$_POST['decardaccess'],$_POST['checksaccess'],$_POST['cashieraccess'],$_POST['totalamountaccess'],$_POST['scaleaccess'],$_POST['sobraaccess'],$_POST['totalaccess'],$_POST['differenceaccess'],$_POST['totalsaleaccess'],$_POST['uploadaccess'],$_POST['notesaccess'],$_POST['cashierdutyaccess'],$_POST['recorddutyaccess'],$_POST['tab1access'],$_POST['tab2access'],$_POST['tab3access'],$_POST['tab4access'],$_POST['tab5access'],$_POST['tab6access'],$_GET['edit']);
    $SQL ->execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update!";
    header("Location:../view/fl_dailyrecords_v3_form");
    exit();

}


?>

