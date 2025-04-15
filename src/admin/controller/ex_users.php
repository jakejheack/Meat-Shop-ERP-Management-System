<?php
if(isset($_POST['save']))
{   
    $id = $MySQLiconn->real_escape_string($_POST['id']);
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $imageText = $MySQLiconn->real_escape_string($_POST['imageText']);
    $accfname = $MySQLiconn->real_escape_string($_POST['accfname']);
    $acclname = $MySQLiconn->real_escape_string($_POST['acclname']);
    $roletitle = $MySQLiconn->real_escape_string($_POST['roletitle']);
    $branch = $MySQLiconn->real_escape_string($_POST['branch']);
    $access = $MySQLiconn->real_escape_string($_POST['access']);
    $username = $MySQLiconn->real_escape_string($_POST['username']);
    $password = md5($_POST['password']);
    $accstatus = $MySQLiconn->real_escape_string($_POST['accstatus']);
    $viewbut = $MySQLiconn->real_escape_string($_POST['viewbut']);
    $editbut = $MySQLiconn->real_escape_string($_POST['editbut']);
    $filebut = $MySQLiconn->real_escape_string($_POST['filebut']);
    $deletebut = $MySQLiconn->real_escape_string($_POST['deletebut']);
    $addbut = $MySQLiconn->real_escape_string($_POST['addbut']);
    $dash1 = $MySQLiconn->real_escape_string($_POST['dash1']);
    $dash2 = $MySQLiconn->real_escape_string($_POST['dash2']);
    $emppro = $MySQLiconn->real_escape_string($_POST['emppro']);
    $perfor = $MySQLiconn->real_escape_string($_POST['perfor']);
    $travelreq = $MySQLiconn->real_escape_string($_POST['travelreq']);
    $sched = $MySQLiconn->real_escape_string($_POST['sched']);
    $dashportal = $MySQLiconn->real_escape_string($_POST['dashportal']);
    $vacancies = $MySQLiconn->real_escape_string($_POST['vacancies']);
    $applicant = $MySQLiconn->real_escape_string($_POST['applicant']);
    $dashatt = $MySQLiconn->real_escape_string($_POST['dashatt']);
    $timeinout = $MySQLiconn->real_escape_string($_POST['timeinout']);
    $attlogs = $MySQLiconn->real_escape_string($_POST['attlogs']);
    $overtime = $MySQLiconn->real_escape_string($_POST['overtime']);
    $attsched = $MySQLiconn->real_escape_string($_POST['attsched']);
    $empshed = $MySQLiconn->real_escape_string($_POST['empshed']);
    $empleave = $MySQLiconn->real_escape_string($_POST['empleave']);
    $email = $MySQLiconn->real_escape_string($_POST['email']);
    $sms = $MySQLiconn->real_escape_string($_POST['sms']);
    $calendar = $MySQLiconn->real_escape_string($_POST['calendar']);
    $overrec = $MySQLiconn->real_escape_string($_POST['overrec']);
    $overall = $MySQLiconn->real_escape_string($_POST['overall']);
    $records1 = $MySQLiconn->real_escape_string($_POST['records1']);
    $records2 = $MySQLiconn->real_escape_string($_POST['records2']);
    $records3 = $MySQLiconn->real_escape_string($_POST['records3']);
    $purchases = $MySQLiconn->real_escape_string($_POST['purchases']);
    $cashadv = $MySQLiconn->real_escape_string($_POST['cashadv']);
    $deduc = $MySQLiconn->real_escape_string($_POST['deduc']);
    $possalary = $MySQLiconn->real_escape_string($_POST['possalary']);
    $payroll = $MySQLiconn->real_escape_string($_POST['payroll']);
    $epcredit = $MySQLiconn->real_escape_string($_POST['epcredit']);
    $cusprof = $MySQLiconn->real_escape_string($_POST['cusprof']);
    $cusstat = $MySQLiconn->real_escape_string($_POST['cusstat']);
    $dashinv = $MySQLiconn->real_escape_string($_POST['dashinv']);
    $proinv = $MySQLiconn->real_escape_string($_POST['proinv']);
    $calc1 = $MySQLiconn->real_escape_string($_POST['calc1']);
    $calc2 = $MySQLiconn->real_escape_string($_POST['calc2']);
    $lehtprice = $MySQLiconn->real_escape_string($_POST['lehtprice']);
    $lehinv = $MySQLiconn->real_escape_string($_POST['lehinv']);
    $lehrec = $MySQLiconn->real_escape_string($_POST['lehrec']);
    $suppro = $MySQLiconn->real_escape_string($_POST['suppro']);
    $orlist = $MySQLiconn->real_escape_string($_POST['orlist']);
    $supcalen = $MySQLiconn->real_escape_string($_POST['supcalen']);
    $web = $MySQLiconn->real_escape_string($_POST['web']);
    $webmes = $MySQLiconn->real_escape_string($_POST['webmes']);
    $newslet = $MySQLiconn->real_escape_string($_POST['newslet']);
    $fileman = $MySQLiconn->real_escape_string($_POST['fileman']);
    $usersacc = $MySQLiconn->real_escape_string($_POST['usersacc']);
    $local = $MySQLiconn->real_escape_string($_POST['local']);
    $logs = $MySQLiconn->real_escape_string($_POST['logs']);

     // image file directory
    $target = "../uploads/userprofile/".basename($image);


    $SQL = $MySQLiconn->prepare("INSERT INTO access (id,image,imageText,accfname,acclname,roletitle,branch,access,username,password,accstatus,viewbut,editbut,filebut,deletebut,addbut,dash1,dash2,emppro,perfor,travelreq,sched,dashportal,vacancies,applicant,dashatt,timeinout,attlogs,overtime,attsched,empshed,empleave,email,sms,calendar,overrec,overall,records1,records2,records3,purchases,cashadv,deduc,possalary,payroll,epcredit,cusprof,cusstat,dashinv,proinv,calc1,calc2,lehtprice,lehinv,lehrec,suppro,orlist,supcalen,web,webmes,newslet,fileman,usersacc,local,logs) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $SQL->bind_param("issssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",$id,$image,$imageText,$accfname,$acclname,$roletitle,$branch,$access,$username,$password,$accstatus,$viewbut,$editbut,$filebut,$deletebut,$addbut,$dash1,$dash2,$emppro,$perfor,$travelreq,$sched,$dashportal,$vacancies,$applicant,$dashatt,$timeinout,$attlogs,$overtime,$attsched,$empshed,$empleave,$email,$sms,$calendar,$overrec,$overall,$records1,$records2,$records3,$purchases,$cashadv,$deduc,$possalary,$payroll,$epcredit,$cusprof,$cusstat,$dashinv,$proinv,$calc1,$calc2,$lehtprice,$lehinv,$lehrec,$suppro,$orlist,$supcalen,$web,$webmes,$newslet,$fileman,$usersacc,$local,$logs);
    $SQL->execute();
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Saved";
    header("Location:../view/ex_users");
    exit();

if(!$SQL)
{
    echo$MySQLiconn->error;
}
}
if(isset($_GET['del']))
{
    $SQL = $MySQLiconn->prepare("DELETE FROM access WHERE id=".$_GET['del']);
    $SQL -> bind_param("i",$_GET['del']);
    $SQL -> execute();
    
    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Permanently Deleted";
    header("Location:../view/ex_users");
    exit();
}
if(isset($_GET['edit']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM access WHERE id=".$_GET['edit']);
    $getROW = $SQL->fetch_array();
}
if(isset($_POST['update']))
{
         // Get image name
    $image = $_FILES['image']['name'];
    
    // image file directory
    $target = "../uploads/userprofile/".basename($image);
    $SQL = $MySQLiconn->prepare("UPDATE access SET imageText=?,accfname=?,acclname=?,roletitle=?,branch=?,access=?,username=?,accstatus=?,viewbut=?,editbut=?,filebut=?,deletebut=?,addbut=?,dash1=?,dash2=?,emppro=?,perfor=?,travelreq=?,sched=?,dashportal=?,vacancies=?,applicant=?,dashatt=?,timeinout=?,attlogs=?,overtime=?,attsched=?,empshed=?,empleave=?,email=?,sms=?,calendar=?,overrec=?,overall=?,records1=?,records2=?,records3=?,purchases=?,cashadv=?,deduc=?,possalary=?,payroll=?,epcredit=?,cusprof=?,cusstat=?,dashinv=?,proinv=?,calc1=?,calc2=?,lehtprice=?,lehinv=?,lehrec=?,suppro=?,orlist=?,supcalen=?,web=?,webmes=?,newslet=?,fileman=?,usersacc=?,local=?,logs=? WHERE id=?");
    $SQL->bind_param("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssi",$_POST['imageText'],$_POST['accfname'],$_POST['acclname'],$_POST['roletitle'],$_POST['branch'],$_POST['access'],$_POST['username'],$_POST['accstatus'],$_POST['viewbut'],$_POST['editbut'],$_POST['filebut'],$_POST['deletebut'],$_POST['addbut'],$_POST['dash1'],$_POST['dash2'],$_POST['emppro'],$_POST['perfor'],$_POST['travelreq'],$_POST['sched'],$_POST['dashportal'],$_POST['vacancies'],$_POST['applicant'],$_POST['dashatt'],$_POST['timeinout'],$_POST['attlogs'],$_POST['overtime'],$_POST['attsched'],$_POST['empshed'],$_POST['empleave'],$_POST['email'],$_POST['sms'],$_POST['calendar'],$_POST['overrec'],$_POST['overall'],$_POST['records1'],$_POST['records2'],$_POST['records3'],$_POST['purchases'],$_POST['cashadv'],$_POST['deduc'],$_POST['possalary'],$_POST['payroll'],$_POST['epcredit'],$_POST['cusprof'],$_POST['cusstat'],$_POST['dashinv'],$_POST['proinv'],$_POST['calc1'],$_POST['calc2'],$_POST['lehtprice'],$_POST['lehinv'],$_POST['lehrec'],$_POST['suppro'],$_POST['orlist'],$_POST['supcalen'],$_POST['web'],$_POST['webmes'],$_POST['newslet'],$_POST['fileman'],$_POST['usersacc'],$_POST['local'],$_POST['logs'],$_GET['edit']);
    $SQL ->execute();
     move_uploaded_file($_FILES['image']['tmp_name'], $target);

    session_start();
    $_SESSION['success_message'] = "Well Done!";
    $_SESSION['success_message2'] = "Successfully Update";
    header("Location:../view/ex_users");
    exit();
}
            


?>

