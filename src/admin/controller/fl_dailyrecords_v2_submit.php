    
<?php

if(isset($_POST['submit']))
{

    if($_GET['rid']!="") {

        $image = "../uploads/dailyRecords/".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image);

        $query = "UPDATE tb1 set image='".$_FILES['image']['name']."',imageText='".$_POST['imageText']."',f2='".$_POST['f2']."',f3='".$_POST['f3']."',pkin='".$_POST['pkin']."',pkout='".$_POST['pkout']."',m1t='".$_POST['m1t']."',e1t='".$_POST['e1t']."',psin='".$_POST['psin']."',psout='".$_POST['psout']."',m5h='".$_POST['m5h']."',e5h='".$_POST['e5h']."',m2h='".$_POST['m2h']."',e2h='".$_POST['e2h']."',discin='".$_POST['discin']."',discout='".$_POST['discout']."',m1h='".$_POST['m1h']."',e1h='".$_POST['e1h']."',chickin='".$_POST['chickin']."',chickout='".$_POST['chickout']."',m50='".$_POST['m50']."',e50='".$_POST['e50']."',m20='".$_POST['m20']."',e20='".$_POST['e20']."',m10='".$_POST['m10']."',e10='".$_POST['e10']."',m05='".$_POST['m05']."',e05='".$_POST['e05']."',m01='".$_POST['m01']."',e01='".$_POST['e01']."',cuscreditin='".$_POST['cuscreditin']."',cuscreditout='".$_POST['cuscreditout']."',m025='".$_POST['m025']."',e025='".$_POST['e025']."',epcreditin='".$_POST['epcreditin']."',epcreditout='".$_POST['epcreditout']."',mta1='".$_POST['mta1']."',eta1='".$_POST['eta1']."',lehcreditin='".$_POST['lehcreditin']."',lehcreditout='".$_POST['lehcreditout']."',nm1t='".$_POST['nm1t']."',ne1t='".$_POST['ne1t']."',remitin='".$_POST['remitin']."',remitout='".$_POST['remitout']."',nm5h='".$_POST['nm5h']."',ne5h='".$_POST['ne5h']."',nm2h='".$_POST['nm2h']."',ne2h='".$_POST['ne2h']."',cashin='".$_POST['cashin']."',cashout='".$_POST['cashout']."',nm1h='".$_POST['nm1h']."',ne1h='".$_POST['ne1h']."',bankdepoin='".$_POST['bankdepoin']."',bankdepoout='".$_POST['bankdepoout']."',nm50='".$_POST['nm50']."',ne50='".$_POST['ne50']."',prfamilyin='".$_POST['prfamilyin']."',prfamilyout='".$_POST['prfamilyout']."',nm20='".$_POST['nm20']."',ne20='".$_POST['ne20']."',crcardin='".$_POST['crcardin']."',crcardout='".$_POST['crcardout']."',nm10='".$_POST['nm10']."',ne10='".$_POST['ne10']."',dccardin='".$_POST['dccardin']."',dccardout='".$_POST['dccardout']."',nm05='".$_POST['nm05']."',ne05='".$_POST['ne05']."',checksin='".$_POST['checksin']."',checksout='".$_POST['checksout']."',totalin='".$_POST['totalin']."',totalout='".$_POST['totalout']."',nm01='".$_POST['nm01']."',ne01='".$_POST['ne01']."',nm025='".$_POST['nm025']."',ne025='".$_POST['ne025']."',totalsecMorning='".$_POST['totalsecMorning']."',totalsecEvening='".$_POST['totalsecEvening']."',totalAllMorning='".$_POST['totalAllMorning']."',totalAllEvening='".$_POST['totalAllEvening']."',scale='".$_POST['scale']."',sobra='".$_POST['sobra']."',ssTotal='".$_POST['ssTotal']."',difference='".$_POST['difference']."',totalSale='".$_POST['totalSale']."',notes='".$_POST['notes']."',cashierDuty='".$_POST['cashierDuty']."',recordDuty='".$_POST['recordDuty']."' where id='".$_GET['rid']."'";
        mysqli_query($conn,$query);



                        // delete the records 
                        //PK
                        # IN...
        $qys = "DELETE FROM `tbpk1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['pkin1'] as $key=>$value) {

            $query1="INSERT INTO tbpk1(tb1_id,pkin1,pkin2,pkin3,pkin4)VALUES ('".$_GET['rid']."','".$_POST['pkin1'][$key]."','".$_POST['pkin2'][$key]."','".$_POST['pkin3'][$key]."','".$_POST['pkin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbpk2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['pkout1'] as $key=>$value) {

            $query1="INSERT INTO tbpk2(tb1_id,pkout1,pkout2,pkout3,pkout4)VALUES ('".$_GET['rid']."','".$_POST['pkout1'][$key]."','".$_POST['pkout2'][$key]."','".$_POST['pkout3'][$key]."','".$_POST['pkout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //PS
                        # IN...
        $qys = "DELETE FROM `tbps1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['psin1'] as $key=>$value) {

            $query1="INSERT INTO tbps1(tb1_id,psin1,psin2,psin3,psin4)VALUES ('".$_GET['rid']."','".$_POST['psin1'][$key]."','".$_POST['psin2'][$key]."','".$_POST['psin3'][$key]."','".$_POST['psin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbps2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['psout1'] as $key=>$value) {

            $query1="INSERT INTO tbps2(tb1_id,psout1,psout2,psout3,psout4)VALUES ('".$_GET['rid']."','".$_POST['psout1'][$key]."','".$_POST['psout2'][$key]."','".$_POST['psout3'][$key]."','".$_POST['psout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //DISCOUNT
                        # IN...
        $qys = "DELETE FROM `tbdisc1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['discin1'] as $key=>$value) {

            $query1="INSERT INTO tbdisc1(tb1_id,discin1,discin2,discin3,discin4)VALUES ('".$_GET['rid']."','".$_POST['discin1'][$key]."','".$_POST['discin2'][$key]."','".$_POST['discin3'][$key]."','".$_POST['discin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbdisc2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['discout2'] as $key=>$value) {

            $query1="INSERT INTO tbdisc2(tb1_id,discout1,discout2,discout3,discout4)VALUES ('".$_GET['rid']."','".$_POST['discout1'][$key]."','".$_POST['discout2'][$key]."','".$_POST['discout3'][$key]."','".$_POST['discout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //PURCHASES
        $qys = "DELETE FROM `tbchick1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['chickin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbchick1(tb1_id,chickin1,chickin2,chickin3,chickin4,chickin5,chickin6)VALUES ('".$_GET['rid']."','".$_POST['chickin1'][$key]."','".$_POST['chickin2'][$key]."','".$_POST['chickin3'][$key]."','".$_POST['chickin4'][$key]."','".$_POST['chickin5'][$key]."','".$_POST['chickin6'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbchick2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['chickout2'] as $key=>$value) {

            $query1="INSERT INTO tbchick2(tb1_id,chickout1,chickout2,chickout3,chickout4,chickout5,chickout6)VALUES ('".$_GET['rid']."','".$_POST['chickout1'][$key]."','".$_POST['chickout2'][$key]."','".$_POST['chickout3'][$key]."','".$_POST['chickout4'][$key]."','".$_POST['chickout5'][$key]."','".$_POST['chickout6'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //CUSTOMERS CREDIT
        $qys = "DELETE FROM `tbcuscredit1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['cuscreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbcuscredit1(tb1_id,cuscreditin1,cuscreditin2,cuscreditin3,cuscreditin4,cuscreditin5)VALUES ('".$_GET['rid']."','".$_POST['cuscreditin1'][$key]."','".$_POST['cuscreditin2'][$key]."','".$_POST['cuscreditin3'][$key]."','".$_POST['cuscreditin4'][$key]."','".$_POST['cuscreditin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbcuscredit2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['cuscreditout2'] as $key=>$value) {

            $query1="INSERT INTO tbcuscredit2(tb1_id,cuscreditout1,cuscreditout2,cuscreditout3,cuscreditout4,cuscreditout5)VALUES ('".$_GET['rid']."','".$_POST['cuscreditout1'][$key]."','".$_POST['cuscreditout2'][$key]."','".$_POST['cuscreditout3'][$key]."','".$_POST['cuscreditout4'][$key]."','".$_POST['cuscreditout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //EMPLOYEES CREDIT
        $qys = "DELETE FROM `tbepcredit1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['epcreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbepcredit1(tb1_id,epcreditin1,epcreditin2,epcreditin3,epcreditin4,epcreditin5)VALUES ('".$_GET['rid']."','".$_POST['epcreditin1'][$key]."','".$_POST['epcreditin2'][$key]."','".$_POST['epcreditin3'][$key]."','".$_POST['epcreditin4'][$key]."','".$_POST['epcreditin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbepcredit2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['epcreditout2'] as $key=>$value) {

            $query1="INSERT INTO tbepcredit2(tb1_id,epcreditout1,epcreditout2,epcreditout3,epcreditout4,epcreditout5)VALUES ('".$_GET['rid']."','".$_POST['epcreditout1'][$key]."','".$_POST['epcreditout2'][$key]."','".$_POST['epcreditout3'][$key]."','".$_POST['epcreditout4'][$key]."','".$_POST['epcreditout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //LEHMANN CREDIT
        $qys = "DELETE FROM `tblehcredit1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['lehcreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tblehcredit1(tb1_id,lehcreditin1,lehcreditin2,lehcreditin3,lehcreditin4)VALUES ('".$_GET['rid']."','".$_POST['lehcreditin1'][$key]."','".$_POST['lehcreditin2'][$key]."','".$_POST['lehcreditin3'][$key]."','".$_POST['lehcreditin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tblehcredit2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['lehcreditout2'] as $key=>$value) {

            $query1="INSERT INTO tblehcredit2(tb1_id,lehcreditout1,lehcreditout2,lehcreditout3,lehcreditout4)VALUES ('".$_GET['rid']."','".$_POST['lehcreditout1'][$key]."','".$_POST['lehcreditout2'][$key]."','".$_POST['lehcreditout3'][$key]."','".$_POST['lehcreditout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //REMIT
        $qys = "DELETE FROM `tbremit1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['remitin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbremit1(tb1_id,remitin1,remitin2,remitin3,remitin4)VALUES ('".$_GET['rid']."','".$_POST['remitin1'][$key]."','".$_POST['remitin2'][$key]."','".$_POST['remitin3'][$key]."','".$_POST['remitin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbremit2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['remitout2'] as $key=>$value) {

            $query1="INSERT INTO tbremit2(tb1_id,remitout1,remitout2,remitout3,remitout4)VALUES ('".$_GET['rid']."','".$_POST['remitout1'][$key]."','".$_POST['remitout2'][$key]."','".$_POST['remitout3'][$key]."','".$_POST['remitout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //CASH IN
                        # IN...
        $qys = "DELETE FROM `tbcash1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['cashin1'] as $key=>$value) {

            $query1="INSERT INTO tbcash1(tb1_id,cashin1,cashin2,cashin3,cashin4)VALUES ('".$_GET['rid']."','".$_POST['cashin1'][$key]."','".$_POST['cashin2'][$key]."','".$_POST['cashin3'][$key]."','".$_POST['cashin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbcash2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['cashout2'] as $key=>$value) {

            $query1="INSERT INTO tbcash2(tb1_id,cashout1,cashout2,cashout3,cashout4)VALUES ('".$_GET['rid']."','".$_POST['cashout1'][$key]."','".$_POST['cashout2'][$key]."','".$_POST['cashout3'][$key]."','".$_POST['cashout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //BANK DEPOSIT
                        # IN...
        $qys = "DELETE FROM `tbbankdepo1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['bankdepoin1'] as $key=>$value) {

            $query1="INSERT INTO tbbankdepo1(tb1_id,bankdepoin1,bankdepoin2,bankdepoin3,bankdepoin4)VALUES ('".$_GET['rid']."','".$_POST['bankdepoin1'][$key]."','".$_POST['bankdepoin2'][$key]."','".$_POST['bankdepoin3'][$key]."','".$_POST['bankdepoin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbbankdepo2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['bankdepoout2'] as $key=>$value) {

            $query1="INSERT INTO tbbankdepo2(tb1_id,bankdepoout1,bankdepoout2,bankdepoout3,bankdepoout4)VALUES ('".$_GET['rid']."','".$_POST['bankdepoout1'][$key]."','".$_POST['bankdepoout2'][$key]."','".$_POST['bankdepoout3'][$key]."','".$_POST['bankdepoout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //PRIVATE FAMILY
                        # IN...
        $qys = "DELETE FROM `tbprfamily1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['prfamilyin1'] as $key=>$value) {

            $query1="INSERT INTO tbprfamily1(tb1_id,prfamilyin1,prfamilyin2,prfamilyin3,prfamilyin4)VALUES ('".$_GET['rid']."','".$_POST['prfamilyin1'][$key]."','".$_POST['prfamilyin2'][$key]."','".$_POST['prfamilyin3'][$key]."','".$_POST['prfamilyin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }


                        # OUT...
        $qys = "DELETE FROM `tbprfamily2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['prfamilyout2'] as $key=>$value) {

            $query1="INSERT INTO tbprfamily2(tb1_id,prfamilyout1,prfamilyout2,prfamilyout3,prfamilyout4)VALUES ('".$_GET['rid']."','".$_POST['prfamilyout1'][$key]."','".$_POST['prfamilyout2'][$key]."','".$_POST['prfamilyout3'][$key]."','".$_POST['prfamilyout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //CREDIT CARD
                        # IN...
        $qys = "DELETE FROM `tbcrcard1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['crcardin1'] as $key=>$value) {

            $query1="INSERT INTO tbcrcard1(tb1_id,crcardin1,crcardin2,crcardin3,crcardin4)VALUES ('".$_GET['rid']."','".$_POST['crcardin1'][$key]."','".$_POST['crcardin2'][$key]."','".$_POST['crcardin3'][$key]."','".$_POST['crcardin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbcrcard2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['crcardout2'] as $key=>$value) {

            $query1="INSERT INTO tbcrcard2(tb1_id,crcardout1,crcardout2,crcardout3,crcardout4)VALUES ('".$_GET['rid']."','".$_POST['crcardout1'][$key]."','".$_POST['crcardout2'][$key]."','".$_POST['crcardout3'][$key]."','".$_POST['crcardout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //DEBIT CARD
                        # IN...
        $qys = "DELETE FROM `tbdccard1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['dccardin1'] as $key=>$value) {

            $query1="INSERT INTO tbdccard1(tb1_id,dccardin1,dccardin2,dccardin3,dccardin4)VALUES ('".$_GET['rid']."','".$_POST['dccardin1'][$key]."','".$_POST['dccardin2'][$key]."','".$_POST['dccardin3'][$key]."','".$_POST['dccardin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbdccard2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['dccardout2'] as $key=>$value) {

            $query1="INSERT INTO tbdccard2(tb1_id,dccardout1,dccardout2,dccardout3,dccardout4)VALUES ('".$_GET['rid']."','".$_POST['dccardout1'][$key]."','".$_POST['dccardout2'][$key]."','".$_POST['dccardout3'][$key]."','".$_POST['dccardout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //CHECKS
                        # IN...
        $qys = "DELETE FROM `tbchecks1` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['checksin1'] as $key=>$value) {

            $query1="INSERT INTO tbchecks1(tb1_id,checksin1,checksin2,checksin3,checksin4,checksin5)VALUES ('".$_GET['rid']."','".$_POST['checksin1'][$key]."','".$_POST['checksin2'][$key]."','".$_POST['checksin3'][$key]."','".$_POST['checksin4'][$key]."','".$_POST['checksin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        # OUT...
        $qys = "DELETE FROM `tbchecks2` where tb1_id='".$_GET['rid']."'";
        mysqli_query($conn,$qys);

        foreach ($_POST['checksout2'] as $key=>$value) {

            $query1="INSERT INTO tbchecks2(tb1_id,checksout1,checksout2,checksout3,checksout4,checksout5)VALUES ('".$_GET['rid']."','".$_POST['checksout1'][$key]."','".$_POST['checksout2'][$key]."','".$_POST['checksout3'][$key]."','".$_POST['checksout4'][$key]."','".$_POST['checksout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }
       session_start();
        $_SESSION['success_message'] = "Well Done!";
        $_SESSION['success_message2'] = "Successfully Update!";
        header("Location:../view/fl_dailyrecords_v2");
        exit();

    } else {

        $image = "../uploads/dailyRecords/".$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], $image);

        $query="INSERT INTO tb1(image,imageText,f1,f2,f3,pkin,pkout,m1t,e1t,psin,psout,m5h,e5h,m2h,e2h,discin,discout,m1h,e1h,chickin,chickout,m50,e50,m20,e20,m10,e10,m05,e05,m01,e01,cuscreditin,cuscreditout,m025,e025,epcreditin,epcreditout,mta1,eta1,lehcreditin,lehcreditout,nm1t,ne1t,remitin,remitout,nm5h,ne5h,nm2h,ne2h,cashin,cashout,nm1h,ne1h,bankdepoin,bankdepoout,nm50,ne50,prfamilyin,prfamilyout,nm20,ne20,crcardin,crcardout,nm10,ne10,dccardin,dccardout,nm05,ne05,checksin,checksout,totalin,totalout,nm01,ne01,nm025,ne025,totalsecMorning,totalsecEvening,totalAllMorning,totalAllEvening,scale,sobra,ssTotal,difference,totalSale,notes,cashierDuty,recordDuty,created_on)VALUES ('".$_FILES['image']['name']."','".$_POST['imageText']."','".$_POST['f1']."','".$_POST['f2']."','".$_POST['f3']."','".$_POST['pkin']."','".$_POST['pkout']."','".$_POST['m1t']."','".$_POST['e1t']."','".$_POST['psin']."','".$_POST['psout']."','".$_POST['m5h']."','".$_POST['e5h']."','".$_POST['m2h']."','".$_POST['e2h']."','".$_POST['discin']."','".$_POST['discout']."','".$_POST['m1h']."','".$_POST['e1h']."','".$_POST['chickin']."','".$_POST['chickout']."','".$_POST['m50']."','".$_POST['e50']."','".$_POST['m20']."','".$_POST['e20']."','".$_POST['m10']."','".$_POST['e10']."','".$_POST['m05']."','".$_POST['e05']."','".$_POST['m01']."','".$_POST['e01']."','".$_POST['cuscreditin']."','".$_POST['cuscreditout']."','".$_POST['m025']."','".$_POST['e025']."','".$_POST['epcreditin']."','".$_POST['epcreditout']."','".$_POST['mta1']."','".$_POST['eta1']."','".$_POST['lehcreditin']."','".$_POST['lehcreditout']."','".$_POST['nm1t']."','".$_POST['ne1t']."','".$_POST['remitin']."','".$_POST['remitout']."','".$_POST['nm5h']."','".$_POST['ne5h']."','".$_POST['nm2h']."','".$_POST['ne2h']."','".$_POST['cashin']."','".$_POST['cashout']."','".$_POST['nm1h']."','".$_POST['ne1h']."','".$_POST['bankdepoin']."','".$_POST['bankdepoout']."','".$_POST['nm50']."','".$_POST['ne50']."','".$_POST['prfamilyin']."','".$_POST['prfamilyout']."','".$_POST['nm20']."','".$_POST['ne20']."','".$_POST['crcardin']."','".$_POST['crcardout']."','".$_POST['nm10']."','".$_POST['ne10']."','".$_POST['dccardin']."','".$_POST['dccardout']."','".$_POST['nm05']."','".$_POST['ne05']."','".$_POST['checksin']."','".$_POST['checksout']."','".$_POST['totalin']."','".$_POST['totalout']."','".$_POST['nm01']."','".$_POST['ne01']."','".$_POST['nm025']."','".$_POST['ne025']."','".$_POST['totalsecMorning']."','".$_POST['totalsecEvening']."','".$_POST['totalAllMorning']."','".$_POST['totalAllEvening']."','".$_POST['scale']."','".$_POST['sobra']."','".$_POST['ssTotal']."','".$_POST['difference']."','".$_POST['totalSale']."','".$_POST['notes']."','".$_POST['cashierDuty']."','".$_POST['recordDuty']."',NOW())";

        $result=mysqli_query($conn,$query);
        $tb1_id = $conn->insert_id;

                        //PK
        foreach ($_POST['pkin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbpk1(tb1_id,pkin1,pkin2,pkin3,pkin4)VALUES ('".$tb1_id."','".$_POST['pkin1'][$key]."','".$_POST['pkin2'][$key]."','".$_POST['pkin3'][$key]."','".$_POST['pkin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['pkout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbpk2(tb1_id,pkout1,pkout2,pkout3,pkout4)VALUES ('".$tb1_id."','".$_POST['pkout1'][$key]."','".$_POST['pkout2'][$key]."','".$_POST['pkout3'][$key]."','".$_POST['pkout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //PS
        foreach ($_POST['psin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbps1(tb1_id,psin1,psin2,psin3,psin4)VALUES ('".$tb1_id."','".$_POST['psin1'][$key]."','".$_POST['psin2'][$key]."','".$_POST['psin3'][$key]."','".$_POST['psin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['psout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbps2(tb1_id,psout1,psout2,psout3,psout4)VALUES ('".$tb1_id."','".$_POST['psout1'][$key]."','".$_POST['psout2'][$key]."','".$_POST['psout3'][$key]."','".$_POST['psout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //DISCOUNT
        foreach ($_POST['discin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbdisc1(tb1_id,discin1,discin2,discin3,discin4)VALUES ('".$tb1_id."','".$_POST['discin1'][$key]."','".$_POST['discin2'][$key]."','".$_POST['discin3'][$key]."','".$_POST['discin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['discout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbdisc2(tb1_id,discout1,discout2,discout3,discout4)VALUES ('".$tb1_id."','".$_POST['discout1'][$key]."','".$_POST['discout2'][$key]."','".$_POST['discout3'][$key]."','".$_POST['discout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                        //PURCHASES
        foreach ($_POST['chickin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbchick1(tb1_id,chickin1,chickin2,chickin3,chickin4,chickin5,chickin6)VALUES ('".$tb1_id."','".$_POST['chickin1'][$key]."','".$_POST['chickin2'][$key]."','".$_POST['chickin3'][$key]."','".$_POST['chickin4'][$key]."','".$_POST['chickin5'][$key]."','".$_POST['chickin6'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['chickout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbchick2(tb1_id,chickout1,chickout2,chickout3,chickout4,chickout5,chickout6)VALUES ('".$tb1_id."','".$_POST['chickout1'][$key]."','".$_POST['chickout2'][$key]."','".$_POST['chickout3'][$key]."','".$_POST['chickout4'][$key]."','".$_POST['chickout5'][$key]."','".$_POST['chickout6'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //CUSTOMERS CREDIT
        foreach ($_POST['cuscreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbcuscredit1(tb1_id,cuscreditin1,cuscreditin2,cuscreditin3,cuscreditin4,cuscreditin5)VALUES ('".$tb1_id."','".$_POST['cuscreditin1'][$key]."','".$_POST['cuscreditin2'][$key]."','".$_POST['cuscreditin3'][$key]."','".$_POST['cuscreditin4'][$key]."','".$_POST['cuscreditin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['cuscreditout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbcuscredit2(tb1_id,cuscreditout1,cuscreditout2,cuscreditout3,cuscreditout4,cuscreditout5)VALUES ('".$tb1_id."','".$_POST['cuscreditout1'][$key]."','".$_POST['cuscreditout2'][$key]."','".$_POST['cuscreditout3'][$key]."','".$_POST['cuscreditout4'][$key]."','".$_POST['cuscreditout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //EMPLOYEES CREDIT
        foreach ($_POST['epcreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbepcredit1(tb1_id,epcreditin1,epcreditin2,epcreditin3,epcreditin4,epcreditin5)VALUES ('".$tb1_id."','".$_POST['epcreditin1'][$key]."','".$_POST['epcreditin2'][$key]."','".$_POST['epcreditin3'][$key]."','".$_POST['epcreditin4'][$key]."','".$_POST['epcreditin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['epcreditout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbepcredit2(tb1_id,epcreditout1,epcreditout2,epcreditout3,epcreditout4,epcreditout5)VALUES ('".$tb1_id."','".$_POST['epcreditout1'][$key]."','".$_POST['epcreditout2'][$key]."','".$_POST['epcreditout3'][$key]."','".$_POST['epcreditout4'][$key]."','".$_POST['epcreditout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //LEHMANN CREDIT
        foreach ($_POST['lehcreditin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tblehcredit1(tb1_id,lehcreditin1,lehcreditin2,lehcreditin3,lehcreditin4)VALUES ('".$tb1_id."','".$_POST['lehcreditin1'][$key]."','".$_POST['lehcreditin2'][$key]."','".$_POST['lehcreditin3'][$key]."','".$_POST['lehcreditin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['lehcreditout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tblehcredit2(tb1_id,lehcreditout1,lehcreditout2,lehcreditout3,lehcreditout4)VALUES ('".$tb1_id."','".$_POST['lehcreditout1'][$key]."','".$_POST['lehcreditout2'][$key]."','".$_POST['lehcreditout3'][$key]."','".$_POST['lehcreditout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //REMIT
        foreach ($_POST['remitin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbremit1(tb1_id,remitin1,remitin2,remitin3,remitin4)VALUES ('".$tb1_id."','".$_POST['remitin1'][$key]."','".$_POST['remitin2'][$key]."','".$_POST['remitin3'][$key]."','".$_POST['remitin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['remitout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbremit2(tb1_id,remitout1,remitout2,remitout3,remitout4)VALUES ('".$tb1_id."','".$_POST['remitout1'][$key]."','".$_POST['remitout2'][$key]."','".$_POST['remitout3'][$key]."','".$_POST['remitout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //CASH IN
        foreach ($_POST['cashin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbcash1(tb1_id,cashin1,cashin2,cashin3,cashin4)VALUES ('".$tb1_id."','".$_POST['cashin1'][$key]."','".$_POST['cashin2'][$key]."','".$_POST['cashin3'][$key]."','".$_POST['cashin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['cashout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbcash2(tb1_id,cashout1,cashout2,cashout3,cashout4)VALUES ('".$tb1_id."','".$_POST['cashout1'][$key]."','".$_POST['cashout2'][$key]."','".$_POST['cashout3'][$key]."','".$_POST['cashout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //BANK DEPOSIT
        foreach ($_POST['bankdepoin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbbankdepo1(tb1_id,bankdepoin1,bankdepoin2,bankdepoin3,bankdepoin4)VALUES ('".$tb1_id."','".$_POST['bankdepoin1'][$key]."','".$_POST['bankdepoin2'][$key]."','".$_POST['bankdepoin3'][$key]."','".$_POST['bankdepoin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['bankdepoout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbbankdepo2(tb1_id,bankdepoout1,bankdepoout2,bankdepoout3,bankdepoout4)VALUES ('".$tb1_id."','".$_POST['bankdepoout1'][$key]."','".$_POST['bankdepoout2'][$key]."','".$_POST['bankdepoout3'][$key]."','".$_POST['bankdepoout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //PRIVATE FAMILY
        foreach ($_POST['prfamilyin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbprfamily1(tb1_id,prfamilyin1,prfamilyin2,prfamilyin3,prfamilyin4)VALUES ('".$tb1_id."','".$_POST['prfamilyin1'][$key]."','".$_POST['prfamilyin2'][$key]."','".$_POST['prfamilyin3'][$key]."','".$_POST['prfamilyin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }


        foreach ($_POST['prfamilyout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbprfamily2(tb1_id,prfamilyout1,prfamilyout2,prfamilyout3,prfamilyout4)VALUES ('".$tb1_id."','".$_POST['prfamilyout1'][$key]."','".$_POST['prfamilyout2'][$key]."','".$_POST['prfamilyout3'][$key]."','".$_POST['prfamilyout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //CREDIT CARD
        foreach ($_POST['crcardin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbcrcard1(tb1_id,crcardin1,crcardin2,crcardin3,crcardin4)VALUES ('".$tb1_id."','".$_POST['crcardin1'][$key]."','".$_POST['crcardin2'][$key]."','".$_POST['crcardin3'][$key]."','".$_POST['crcardin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['crcardout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbcrcard2(tb1_id,crcardout1,crcardout2,crcardout3,crcardout4)VALUES ('".$tb1_id."','".$_POST['crcardout1'][$key]."','".$_POST['crcardout2'][$key]."','".$_POST['crcardout3'][$key]."','".$_POST['crcardout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //DEBIT CARD
        foreach ($_POST['dccardin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbdccard1(tb1_id,dccardin1,dccardin2,dccardin3,dccardin4)VALUES ('".$tb1_id."','".$_POST['dccardin1'][$key]."','".$_POST['dccardin2'][$key]."','".$_POST['dccardin3'][$key]."','".$_POST['dccardin4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

        foreach ($_POST['dccardout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbdccard2(tb1_id,dccardout1,dccardout2,dccardout3,dccardout4)VALUES ('".$tb1_id."','".$_POST['dccardout1'][$key]."','".$_POST['dccardout2'][$key]."','".$_POST['dccardout3'][$key]."','".$_POST['dccardout4'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }

                         //CHECKS
        foreach ($_POST['checksin1'] as $key=>$value) {
                        # IN...

            $query1="INSERT INTO tbchecks1(tb1_id,checksin1,checksin2,checksin3,checksin4,checksin5)VALUES ('".$tb1_id."','".$_POST['checksin1'][$key]."','".$_POST['checksin2'][$key]."','".$_POST['checksin3'][$key]."','".$_POST['checksin4'][$key]."','".$_POST['checksin5'][$key]."')";
            $result1=mysqli_query($conn,$query1);


        }

        foreach ($_POST['checksout2'] as $key=>$value) {
                        # OUT...

            $query1="INSERT INTO tbchecks2(tb1_id,checksout1,checksout2,checksout3,checksout4,checksout5)VALUES ('".$tb1_id."','".$_POST['checksout1'][$key]."','".$_POST['checksout2'][$key]."','".$_POST['checksout3'][$key]."','".$_POST['checksout4'][$key]."','".$_POST['checksout5'][$key]."')";
            $result1=mysqli_query($conn,$query1);

        }
        session_start();
        $_SESSION['success_message'] = "Well Done!";
        $_SESSION['success_message2'] = "Successfully Submitted";
        header("Location:../view/fl_dailyrecords_v2");
        exit();

    }
}

?>



<?php
if($_GET['rid'] !=""){
    $stu = "SELECT * FROM tb1 WHERE id='".$_GET['rid']."'";
    $result_stu = mysqli_query($conn, $stu);
    if ($result_stu->num_rows > 0) {
       $i=1;
       while($row_stu = $result_stu->fetch_assoc())
       {

        $rf1 = $row_stu['f1']; 
        $rf2 = $row_stu['f2'];
        $rf3 = $row_stu['f3'];
        $rpkin = $row_stu['pkin'];
        $rpkout = $row_stu['pkout'];
        $rm1t = $row_stu['m1t'];
        $re1t = $row_stu['e1t'];
        $rpsin = $row_stu['psin'];
        $rpsout = $row_stu['psout'];
        $rm5h = $row_stu['m5h'];
        $re5h = $row_stu['e5h'];
        $rm2h = $row_stu['m2h']; 
        $re2h = $row_stu['e2h'];
        $rdiscin = $row_stu['discin'];
        $rdiscout = $row_stu['discout'];
        $rm1h = $row_stu['m1h'];
        $re1h = $row_stu['e1h'];
        $rchickin = $row_stu['chickin'];
        $rchickout = $row_stu['chickout'];
        $rm50 = $row_stu['m50'];
        $re50 = $row_stu['e50'];
        $rm20 = $row_stu['m20'];
        $re20 = $row_stu['e20'];
        $rm10 = $row_stu['m10'];
        $re10 = $row_stu['e10'];
        $rm05 = $row_stu['m05'];
        $re05 = $row_stu['e05'];
        $rm01 = $row_stu['m01'];
        $re01 = $row_stu['e01'];
        $rcuscreditin = $row_stu['cuscreditin'];
        $rcuscreditout = $row_stu['cuscreditout'];
        $rm025 = $row_stu['m025'];
        $re025 = $row_stu['e025'];
        $repcreditin = $row_stu['epcreditin'];
        $repcreditout = $row_stu['epcreditout'];
        $rmta1 = $row_stu['mta1'];
        $reta1 = $row_stu['eta1'];
        $rlehcreditin = $row_stu['lehcreditin'];
        $rlehcreditout = $row_stu['lehcreditout'];
        $rnm1t = $row_stu['nm1t'];
        $rne1t = $row_stu['ne1t'];
        $rremitin = $row_stu['remitin'];
        $rremitout = $row_stu['remitout'];
        $rnm5h = $row_stu['nm5h'];
        $rne5h = $row_stu['ne5h'];
        $rnm2h = $row_stu['nm2h'];
        $rne2h = $row_stu['ne2h'];
        $rcashin = $row_stu['cashin'];
        $rcashout = $row_stu['cashout'];
        $rnm1h = $row_stu['nm1h'];
        $rne1h = $row_stu['ne1h'];
        $rbankdepoin = $row_stu['bankdepoin'];
        $rbankdepoout = $row_stu['bankdepoout'];
        $rnm50 = $row_stu['nm50'];
        $rne50 = $row_stu['ne50'];
        $rprfamilyin = $row_stu['prfamilyin'];
        $rprfamilyout = $row_stu['prfamilyout'];
        $rnm20 = $row_stu['nm20'];
        $rne20 = $row_stu['ne20'];
        $rcrcardin = $row_stu['crcardin'];
        $rcrcardout = $row_stu['crcardout'];
        $rnm10 = $row_stu['nm10'];
        $rne10 = $row_stu['ne10'];
        $rdccardin = $row_stu['dccardin'];
        $rdccardout = $row_stu['dccardout'];
        $rnm05 = $row_stu['nm05'];
        $rne05 = $row_stu['ne05'];
        $rchecksin = $row_stu['checksin'];
        $rchecksout = $row_stu['checksout'];
        $rtotalin = $row_stu['totalin'];
        $rtotalout = $row_stu['totalout'];
        $rnm01 = $row_stu['nm01'];
        $rne01 = $row_stu['ne01'];
        $rnm025 = $row_stu['nm025'];
        $rne025 = $row_stu['ne025'];
        $rtotalsecMorning = $row_stu['totalsecMorning'];
        $rtotalsecEvening = $row_stu['totalsecEvening'];
        $rtotalAllMorning = $row_stu['totalAllMorning'];
        $rtotalAllEvening = $row_stu['totalAllEvening'];
        $rscale = $row_stu['scale'];
        $rsobra = $row_stu['sobra'];
        $rssTotal = $row_stu['ssTotal'];
        $rdifference = $row_stu['difference'];
        $rtotalSale = $row_stu['totalSale'];
        $rimage = $row_stu['image'];
        $rimageText = $row_stu['imageText'];
        $rnotes = $row_stu['notes'];
        $rcashierDuty = $row_stu['cashierDuty'];
        $rrecordDuty = $row_stu['recordDuty'];

    }
}
}
?>