<?php include 'common/session.php'; ?>
<?php if($_SESSION['records2'] == on){?>
	<?php include 'common/query.php'; ?>
	<?php include '../controller/fl_dailyrecords_v2.php'; ?>
	<?php include '../controller/fl_dailyrecords_v2_submit.php'; ?>
	<?php
	$settabstat1 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat1='on';" ));
	$settab1accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab1access='All' AND id='1';"));
	$settab1accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab1access='Admin' AND id='1';"));
	$settab1accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab1access='Manager' AND id='1';"));
	$settab1accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab1access='Cashier' AND id='1';"));

	$settabstat2 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat2='on';" ));
	$settab2accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab2access='All' AND id='1';"));
	$settab2accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab2access='Admin' AND id='1';"));
	$settab2accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab2access='Manager' AND id='1';"));
	$settab2accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab2access='Cashier' AND id='1';"));

	$settabstat3 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat3='on';" ));
	$settab3accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab3access='All' AND id='1';"));
	$settab3accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab3access='Admin' AND id='1';"));
	$settab3accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab3access='Manager' AND id='1';"));
	$settab3accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab3access='Cashier' AND id='1';"));

	$settabstat4 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat4='on';" ));
	$settab4accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab4access='All' AND id='1';"));
	$settab4accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab4access='Admin' AND id='1';"));
	$settab4accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab4access='Manager' AND id='1';"));
	$settab4accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab4access='Cashier' AND id='1';"));

	$settabstat5 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat5='on';" ));
	$settab5accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab5access='All' AND id='1';"));
	$settab5accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab5access='Admin' AND id='1';"));
	$settab5accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab5access='Manager' AND id='1';"));
	$settab5accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab5access='Cashier' AND id='1';"));

	$settabstat6 = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE tabstat6='on';" ));
	$settab6accessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab6access='All' AND id='1';"));
	$settab6accessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab6access='Admin' AND id='1';"));
	$settab6accessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab6access='Manager' AND id='1';"));
	$settab6accesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE tab6access='Cashier' AND id='1';"));

	$setpk = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pk='on';" ));
	$setpkin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkin='on';" ));
	$setpkout = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkout='on';" ));
	$setpktab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='1' AND id='1';"));
	$setpktab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='2' AND id='1';"));
	$setpktab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='3' AND id='1';"));
	$setpktab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='4' AND id='1';"));
	$setpktab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='5' AND id='1';"));
	$setpktab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pktab='6' AND id='1';"));
	$setpkaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkaccess='All' AND id='1';"));
	$setpkaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkaccess='Admin' AND id='1';"));
	$setpkaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkaccess='Manager' AND id='1';"));
	$setpkaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pkaccess='Cashier' AND id='1';"));

	$setps = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE ps='on';" ) );
	$setpsin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE psin='on';" ) );
	$setpsout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE psout='on';" ) );
	$setpstab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='1' AND id='1';"));
	$setpstab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='2' AND id='1';"));
	$setpstab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='3' AND id='1';"));
	$setpstab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='4' AND id='1';"));
	$setpstab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='5' AND id='1';"));
	$setpstab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE pstab='6' AND id='1';"));
	$setpsaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE psaccess='All' AND id='1';"));
	$setpsaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE psaccess='Admin' AND id='1';"));
	$setpsaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE psaccess='Manager' AND id='1';"));
	$setpsaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE psaccess='Cashier' AND id='1';"));

	$setdisc = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE disc='on';" ) );
	$setdiscin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE discin='on';" ) );
	$setdiscout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE discout='on';" ) );
	$setdisctab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='1' AND id='1';"));
	$setdisctab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='2' AND id='1';"));
	$setdisctab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='3' AND id='1';"));
	$setdisctab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='4' AND id='1';"));
	$setdisctab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='5' AND id='1';"));
	$setdisctab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE disctab='6' AND id='1';"));
	$setdiscaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE discaccess='All' AND id='1';"));
	$setdiscaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE discaccess='Admin' AND id='1';"));
	$setdiscaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE discaccess='Manager' AND id='1';"));
	$setdiscaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE discaccess='Cashier' AND id='1';"));

	$setchick = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE chick='on';" ) );
	$setchickin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE chickin='on';" ) );
	$setchickout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE chickout='on';" ) );
	$setchicktab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='1' AND id='1';"));
	$setchicktab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='2' AND id='1';"));
	$setchicktab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='3' AND id='1';"));
	$setchicktab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='4' AND id='1';"));
	$setchicktab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='5' AND id='1';"));
	$setchicktab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chicktab='6' AND id='1';"));
	$setchickaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chickaccess='All' AND id='1';"));
	$setchickaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chickaccess='Admin' AND id='1';"));
	$setchickaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chickaccess='Manager' AND id='1';"));
	$setchickaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE chickaccess='Cashier' AND id='1';"));

	$setcuscredit = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cuscredit='on';" ) );
	$setcuscreditin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cuscreditin='on';" ) );
	$setcuscreditout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cuscreditout='on';" ) );
	$setcuscredittab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='1' AND id='1';"));
	$setcuscredittab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='2' AND id='1';"));
	$setcuscredittab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='3' AND id='1';"));
	$setcuscredittab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='4' AND id='1';"));
	$setcuscredittab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='5' AND id='1';"));
	$setcuscredittab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscredittab='6' AND id='1';"));
	$setcuscreditaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscreditaccess='All' AND id='1';"));
	$setcuscreditaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscreditaccess='Admin' AND id='1';"));
	$setcuscreditaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscreditaccess='Manager' AND id='1';"));
	$setcuscreditaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cuscreditaccess='Cashier' AND id='1';"));

	$setempcredit = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE empcredit='on';" ) );
	$setempcreditin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE empcreditin='on';" ) );
	$setempcreditout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE empcreditout='on';" ) );
	$setempcredittab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='1' AND id='1';"));
	$setempcredittab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='2' AND id='1';"));
	$setempcredittab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='3' AND id='1';"));
	$setempcredittab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='4' AND id='1';"));
	$setempcredittab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='5' AND id='1';"));
	$setempcredittab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcredittab='6' AND id='1';"));
	$setempcreditaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcreditaccess='All' AND id='1';"));
	$setempcreditaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcreditaccess='Admin' AND id='1';"));
	$setempcreditaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcreditaccess='Manager' AND id='1';"));
	$setempcreditaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE empcreditaccess='Cashier' AND id='1';"));

	$setlehcredit = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE lehcredit='on';" ) );
	$setlehcreditin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE lehcreditin='on';" ) );
	$setlehcreditout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE lehcreditout='on';" ) );
	$setlehcredittab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='1' AND id='1';"));
	$setlehcredittab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='2' AND id='1';"));
	$setlehcredittab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='3' AND id='1';"));
	$setlehcredittab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='4' AND id='1';"));
	$setlehcredittab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='5' AND id='1';"));
	$setlehcredittab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcredittab='6' AND id='1';"));
	$setlehcreditaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcreditaccess='All' AND id='1';"));
	$setlehcreditaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcreditaccess='Admin' AND id='1';"));
	$setlehcreditaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcreditaccess='Manager' AND id='1';"));
	$setlehcreditaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE lehcreditaccess='Cashier' AND id='1';"));

	$setcashremit = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashremit='on';" ) );
	$setcashremitin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashremitin='on';" ) );
	$setcashremitout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashremitout='on';" ) );
	$setcashremittab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='1' AND id='1';"));
	$setcashremittab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='2' AND id='1';"));
	$setcashremittab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='3' AND id='1';"));
	$setcashremittab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='4' AND id='1';"));
	$setcashremittab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='5' AND id='1';"));
	$setcashremittab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremittab='6' AND id='1';"));
	$setcashremitaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremitaccess='All' AND id='1';"));
	$setcashremitaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremitaccess='Admin' AND id='1';"));
	$setcashremitaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremitaccess='Manager' AND id='1';"));
	$setcashremitaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashremitaccess='Cashier' AND id='1';"));

	$setcashreturn = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashreturn='on';" ) );
	$setcashreturnin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashreturnin='on';" ) );
	$setcashreturnout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE cashreturnout='on';" ) );
	$setcashreturntab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='1' AND id='1';"));
	$setcashreturntab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='2' AND id='1';"));
	$setcashreturntab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='3' AND id='1';"));
	$setcashreturntab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='4' AND id='1';"));
	$setcashreturntab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='5' AND id='1';"));
	$setcashreturntab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturntab='6' AND id='1';"));
	$setcashreturnaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturnaccess='All' AND id='1';"));
	$setcashreturnaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturnaccess='Admin' AND id='1';"));
	$setcashreturnaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturnaccess='Manager' AND id='1';"));
	$setcashreturnaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashreturnaccess='Cashier' AND id='1';"));

	$setbankdepo = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE bankdepo='on';" ) );
	$setbankdepoin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE bankdepoin='on';" ) );
	$setbankdepoout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE bankdepoout='on';" ) );
	$setbankdepotab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='1' AND id='1';"));
	$setbankdepotab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='2' AND id='1';"));
	$setbankdepotab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='3' AND id='1';"));
	$setbankdepotab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='4' AND id='1';"));
	$setbankdepotab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='5' AND id='1';"));
	$setbankdepotab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepotab='6' AND id='1';"));
	$setbankdepoaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepoaccess='All' AND id='1';"));
	$setbankdepoaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepoaccess='Admin' AND id='1';"));
	$setbankdepoaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepoaccess='Manager' AND id='1';"));
	$setbankdepoaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE bankdepoaccess='Cashier' AND id='1';"));

	$setprifamily = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE prifamily='on';" ) );
	$setprifamilyin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE prifamilyin='on';" ) );
	$setprifamilyout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE prifamilyout='on';" ) );
	$setprifamilytab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='1' AND id='1';"));
	$setprifamilytab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='2' AND id='1';"));
	$setprifamilytab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='3' AND id='1';"));
	$setprifamilytab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='4' AND id='1';"));
	$setprifamilytab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='5' AND id='1';"));
	$setprifamilytab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilytab='6' AND id='1';"));
	$setprifamilyaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilyaccess='All' AND id='1';"));
	$setprifamilyaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilyaccess='Admin' AND id='1';"));
	$setprifamilyaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilyaccess='Manager' AND id='1';"));
	$setprifamilyaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE prifamilyaccess='Cashier' AND id='1';"));

	$setcrcard = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE crcard='on';" ) );
	$setcrcardin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE crcardin='on';" ) );
	$setcrcardout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE crcardout='on';" ) );
	$setcrcardtab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='1' AND id='1';"));
	$setcrcardtab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='2' AND id='1';"));
	$setcrcardtab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='3' AND id='1';"));
	$setcrcardtab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='4' AND id='1';"));
	$setcrcardtab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='5' AND id='1';"));
	$setcrcardtab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardtab='6' AND id='1';"));
	$setcrcardaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardaccess='All' AND id='1';"));
	$setcrcardaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardaccess='Admin' AND id='1';"));
	$setcrcardaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardaccess='Manager' AND id='1';"));
	$setcrcardaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE crcardaccess='Cashier' AND id='1';"));

	$setdecard = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE decard='on';" ) );
	$setdecardin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE decardin='on';" ) );
	$setdecardout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE decardout='on';" ) );
	$setdecardtab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='1' AND id='1';"));
	$setdecardtab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='2' AND id='1';"));
	$setdecardtab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='3' AND id='1';"));
	$setdecardtab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='4' AND id='1';"));
	$setdecardtab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='5' AND id='1';"));
	$setdecardtab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardtab='6' AND id='1';"));
	$setdecardaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardaccess='All' AND id='1';"));
	$setdecardaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardaccess='Admin' AND id='1';"));
	$setdecardaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardaccess='Manager' AND id='1';"));
	$setdecardaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE decardaccess='Cashier' AND id='1';"));

	$setchecks = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE checks='on';" ) );
	$setchecksin = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE checksin='on';" ) );
	$setchecksout = mysqli_num_rows( $MySQLiconn -> query( "SELECT * FROM settings_records WHERE checksout='on';" ) );
	$setcheckstab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='1' AND id='1';"));
	$setcheckstab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='2' AND id='1';"));
	$setcheckstab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='3' AND id='1';"));
	$setcheckstab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='4' AND id='1';"));
	$setcheckstab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='5' AND id='1';"));
	$setcheckstab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checkstab='6' AND id='1';"));
	$setchecksaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checksaccess='All' AND id='1';"));
	$setchecksaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checksaccess='Admin' AND id='1';"));
	$setchecksaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checksaccess='Manager' AND id='1';"));
	$setchecksaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE checksaccess='Cashier' AND id='1';"));

	$setcashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashier='on';" ));
	$setcashiertab1 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='1' AND id='1';"));
	$setcashiertab2 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='2' AND id='1';"));
	$setcashiertab3 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='3' AND id='1';"));
	$setcashiertab4 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='4' AND id='1';"));
	$setcashiertab5 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='5' AND id='1';"));
	$setcashiertab6 = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashiertab='6' AND id='1';"));
	$setcashieraccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashieraccess='All' AND id='1';"));
	$setcashieraccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashieraccess='Admin' AND id='1';"));
	$setcashieraccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashieraccess='Manager' AND id='1';"));
	$setcashieraccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashieraccess='Cashier' AND id='1';"));


	$settotalamount = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamount='on' AND id='1';" ));
	$settotalamountaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='All' AND id='1';"));
	$settotalamountaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='Admin' AND id='1';"));
	$settotalamountaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='Manager' AND id='1';"));
	$settotalamountaccesstotalamount = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='totalamount' AND id='1';"));
	$settotalamountaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='All' AND id='1';"));
	$settotalamountaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='Admin' AND id='1';"));
	$settotalamountaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='Manager' AND id='1';"));
	$settotalamountaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalamountaccess='Cashier' AND id='1';"));


	$setscale = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE scale='on' AND id='1';" ));
	$setscaleaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE scaleaccess='All' AND id='1';"));
	$setscaleaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE scaleaccess='Admin' AND id='1';"));
	$setscaleaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE scaleaccess='Manager' AND id='1';"));
	$setscaleaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE scaleaccess='Cashier' AND id='1';"));

	$setsobra = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE sobra='on' AND id='1';" ));
	$setsobraaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE sobraaccess='All' AND id='1';"));
	$setsobraaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE sobraaccess='Admin' AND id='1';"));
	$setsobraaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE sobraaccess='Manager' AND id='1';"));
	$setsobraaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE sobraaccess='Cashier' AND id='1';"));

	$settotal = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE total='on' AND id='1';" ));
	$settotalaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalaccess='All' AND id='1';"));
	$settotalaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalaccess='Admin' AND id='1';"));
	$settotalaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalaccess='Manager' AND id='1';"));
	$settotalaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalaccess='Cashier' AND id='1';"));

	$setdifference = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE difference='on' AND id='1';" ));
	$setdifferenceaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE differenceaccess='All' AND id='1';"));
	$setdifferenceaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE differenceaccess='Admin' AND id='1';"));
	$setdifferenceaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE differenceaccess='Manager' AND id='1';"));
	$setdifferenceaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE differenceaccess='Cashier' AND id='1';"));

	$settotalsale = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalsale='on' AND id='1';" ));
	$settotalsaleaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalsaleaccess='All' AND id='1';"));
	$settotalsaleaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalsaleaccess='Admin' AND id='1';"));
	$settotalsaleaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalsaleaccess='Manager' AND id='1';"));
	$settotalsaleaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE totalsaleaccess='Cashier' AND id='1';"));

	$setupload = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE upload='on' AND id='1';" ));
	$setuploadaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE uploadaccess='All' AND id='1';"));
	$setuploadaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE uploadaccess='Admin' AND id='1';"));
	$setuploadaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE uploadaccess='Manager' AND id='1';"));
	$setuploadaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE uploadaccess='Cashier' AND id='1';"));

	$setnotes = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE notes='on' AND id='1';" ));
	$setnotesaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE notesaccess='All' AND id='1';"));
	$setnotesaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE notesaccess='Admin' AND id='1';"));
	$setnotesaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE notesaccess='Manager' AND id='1';"));
	$setnotesaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE notesaccess='Cashier' AND id='1';"));

	$setcashierduty = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashierduty='on' AND id='1';" ));
	$setcashierdutyaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashierdutyaccess='All' AND id='1';"));
	$setcashierdutyaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashierdutyaccess='Admin' AND id='1';"));
	$setcashierdutyaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashierdutyaccess='Manager' AND id='1';"));
	$setcashierdutyaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE cashierdutyaccess='Cashier' AND id='1';"));

	$setrecordduty = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE recordduty='on' AND id='1';" ));
	$setrecorddutyaccessall = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE recorddutyaccess='All' AND id='1';"));
	$setrecorddutyaccessadmin = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE recorddutyaccess='Admin' AND id='1';"));
	$setrecorddutyaccessmanager = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE recorddutyaccess='Manager' AND id='1';"));
	$setrecorddutyaccesscashier = mysqli_num_rows( $MySQLiconn -> query("SELECT * FROM settings_records WHERE recorddutyaccess='Cashier' AND id='1';"));
	?>
	<!doctype html>
	<html lang="en">

	<head>
		<?php include 'common/title.php'; ?>
		<?php include 'common/print.php'; ?> 
		<!-- Bootstrap Css -->
		<link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		<!-- Icons Css -->
		<link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
		<!-- App Css-->
		<link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<!-- Sweet Alert -->
		<link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

		<!-- Responsive datatable examples -->
		<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


		<!-- plugin css -->
		<link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
		<link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
		<link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">
	</head>

	<?php include 'common/body.php'; ?>

	<!-- Begin page -->
	<div id="layout-wrapper">

		<?php include 'common/header.php'; ?>
		<?php include 'common/sidebar.php'; ?>



		<!-- ============================================================== -->
		<!-- Start right Content here -->
		<!-- ============================================================== -->
		<div class="main-content">

			<div class="page-content">
				<div class="container-fluid">

					<!-- start page title -->
					<div class="row">
						<div class="col-12">
							<div class="page-title-box d-flex align-items-center justify-content-between">
								<?php if(isset($_GET['view'])) { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;View Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
											<li class="breadcrumb-item active">View Daily Records</li>
										</ol>
									</div>
								<?php } elseif(isset($_GET['edit'])) { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;Edit Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
											<li class="breadcrumb-item active">Edit Daily Records</li>
										</ol>
									</div>
								<?php } else { ?>
									<div class="page-title-left">
										<h4 class="mb-2">&ensp;Daily Records</h4>
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php"> &ensp;&nbsp;Home</a></li>
											<li class="breadcrumb-item"><a href="dailyRecords_v2.php">Daily Records v2.3</a></li>
										</ol>
									</div>

									<?php if($_SESSION['access'] == Administrator){?>
										<div class="page-title-right">
											<a href="fl_dailyrecords_v2_settings?edit=1" style="font-size: 15px;" title="edit" class="btn btn-danger waves-effect waves-light mdi mdi mdi-progress-wrench"></a>&ensp;
										</div>
									<?php } ?>
								<?php } ?> 
							</div>
						</div>
					</div>
					<!-- end page title -->    

					<!-- Status -->
					<?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
						<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
						<script>
							Swal.fire({
								position: 'center',
								icon: 'success',
								title: '<?php echo $_SESSION['success_message2']; ?>',
								showConfirmButton: false,
								timer: 2000
							})
						</script>
						<?php unset($_SESSION['success_message']); } ?>

						<?php if (isset($_SESSION['warning_message']) && !empty($_SESSION['warning_message'])) { ?>
							<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
							<script>
								Swal.fire({
									position: 'center',
									icon: 'warning',
									title: '<?php echo $_SESSION['warning_message2']; ?>',
									showConfirmButton: false,
									timer: 2000
								})
							</script>
							<?php unset($_SESSION['warning_message']); } ?>
							<!-- End Status -->
							<!-- Start -->
							<form method="post" enctype="multipart/form-data" id="inst_form" class="needs-validation" novalidate>
								<div class="row">
									<div class="col-12" style="zoom:90%;">
										<div class="card">
											<div class="card-body">
												<div class="card-body">

													<!-- Date -->   
													<div class="row">
														<!-- Record Name -->
														<div class="form-group col-lg-4">
															<label>Date & Time</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo date('M-d-Y h:i a', strtotime($getROW['f1'] . ' + 8 hours')); ?>" readonly/>

															<?php } elseif(isset($_GET['rid'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php if(isset($rf1)) { echo (date('M-d-Y h:i a', strtotime($rf1 . ' + 8 hours'))); } ?>"  readonly/>

															<?php } else { ?>
																<input type="text" name="f1" class="form-control" value="<?php
																$date = new DateTime("now", new DateTimeZone('Asia/Manila') );
																echo $date->format('c');?>" autocomplete="off" style="font-weight: 600;" readonly/>

															<?php } ?>
														</div>
														<!-- Branch Record -->
														<div class="form-group col-lg-4">
															<label>Branch</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['f2'];?>" disabled/>

															<?php } elseif(isset($_GET['rid'])) { ?>
																<input class="form-control" name="f2" style="font-weight:600;text-transform:capitalize;" value="<?php if(isset($rf2)) { echo $rf2; } ?>" readonly/>

															<?php } else { ?>
																<select class="form-control custom-select" name="f2" required>
																	<option value="Yashano">Yashano</option>
																</select>
															<?php } ?>

															<div class="invalid-feedback">
																Please select a access.
															</div>
															<div class="valid-feedback">
																Looks good!
															</div>

														</div>
														<!-- Status -->
														<div  class="form-group col-lg-4">
															<label>Status</label>
															<?php if(isset($_GET['view'])) { ?>
																<input class="form-control" style="font-weight:600;text-transform:capitalize;" value="<?php echo $getROW['f3'];?>" disabled/>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																	<option value="ReCheck">ReCheck</option>
																	<option value="Complete">Complete</option>
																</select>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Manager)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																</select>
															<?php } elseif(isset($_GET['rid']) && ($_SESSION['access'] == Cashier || $_SESSION['access'] == Other)) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="<?php if(isset($rf3)) { echo $rf3; } ?>"><?php if(isset($rf3)) { echo $rf3; } ?></option>
																	<option value="" disabled select>- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																</select>

															<?php } elseif($_SESSION['access'] == Administrator || $_SESSION['access'] == BranchControl) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																	<option value="ReCheck">ReCheck</option>
																	<option value="Complete">Complete</option>
																</select>    
															<?php } elseif($_SESSION['access'] == Manager) { ?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																	<option value="Pending">Pending</option>
																</select>
															<?php } else {?>
																<select class="form-control custom-select" name="f3" required>
																	<option value="">- SELECT -</option>
																	<option value="Ongoing">Ongoing</option>
																</select>
															<?php } ?>

															<div class="invalid-feedback">
																Please select a status.
															</div>
															<div class="valid-feedback">
																Looks good!
															</div>

														</div>
													</div>

													<hr>


													<!-- First Heading -->
													<?php if ($settabstat1) { ?>
														<a href="#collapseOne" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">

															<div class="card-header" id="headingOne">
																<h6 class="m-0">
																	<?php
																	$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																	while($row=$res->fetch_array()){
																		?>
																		<span><?php echo $row['tab1']; ?></span>
																	<?php } ?>
																	<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
																</h6>
															</div>
														</a>
														<br>
													<?php } else { ?>
													<?php } ?> 



													<div id="collapseOne" class="collapse"
													aria-labelledby="headingOne" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab1 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab1 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab1 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab1 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab1 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab1 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab1 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab1 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab1 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab1 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab1 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab1 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab1 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab1 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab1 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div> 

												<!-- End First Heading -->

												<!-- Second Heading -->
												<?php if ($settabstat2) { ?>
													<a href="#collapseTwo" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
														<div class="card-header" id="headingTwo">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab2']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?> 
												<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab2 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab2 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab2 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab2 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab2 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab2 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab2 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab2 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab2 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab2 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab2 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab2 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab2 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab2 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab2 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Second Heading -->
												<!-- Third Heading -->
												<?php if ($settabstat3) { ?>
													<a href="#collapseThree" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
														<div class="card-header" id="headingThree">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab3']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>  
												<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab3 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab3 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab3 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab3 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab3 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab3 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab3 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab3 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab3 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab3 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab3 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab3 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab3 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab3 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab3 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Third Heading -->
												<!-- Fourth Heading -->
												<?php if ($settabstat4) { ?>
													<a href="#collapseFour" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
														<div class="card-header" id="headingFour">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab4']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
													<div class="card-body">   
														<?php if ($setpktab4 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab4 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab4 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab4 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab4 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab4 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab4 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab4 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab4 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab4 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab4 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab4 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab4 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab4 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab4 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Fourth Heading -->
												<!-- Fifth Heading -->
												<?php if ($settabstat5) { ?>
													<a href="#collapseFive" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseFive">

														<div class="card-header" id="headingFive">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab5']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab5 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab5 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab5 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab5 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab5 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab5 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab5 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab5 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab5 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab5 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab5 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab5 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab5 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab5 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab5 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Fifth Heading -->
												<!-- Sixth Heading -->
												<?php if ($settabstat6) { ?>
													<a href="#collapseSix" class="text-dark" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseSix">

														<div class="card-header" id="headingSix">
															<h6 class="m-0">
																<?php
																$res = $MySQLiconn->query("SELECT * FROM settings_records WHERE id=1");
																while($row=$res->fetch_array()){
																	?>
																	<span><?php echo $row['tab6']; ?></span>
																<?php } ?>
																<i class="mdi mdi-chevron-up float-right accor-down-icon"></i>
															</h6>
														</div>
													</a>
													<br>
												<?php } else { ?>
												<?php } ?>
												<div id="collapseSix" class="collapse" aria-labelledby="headingSix data-parent="#accordion">
													<div class="card-body">
														<?php if ($setpktab6 == '1') { ?> 
															<?php include 'daily_files/pk.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setpstab6 == '1') { ?> 
															<?php include 'daily_files/ps.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdisctab6 == '1') { ?> 
															<?php include 'daily_files/disc.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setchicktab6 == '1') { ?> 
															<?php include 'daily_files/chick_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcuscredittab6 == '1') { ?> 
															<?php include 'daily_files/cuscredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setempcredittab6 == '1') { ?> 
															<?php include 'daily_files/empcredit_yashano.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setlehcredittab6 == '1') { ?> 
															<?php include 'daily_files/lehcredit.php';?>
														<?php } else { ?>
														<?php } ?>  

														<?php if ($setcashremittab6 == '1') { ?> 
															<?php include 'daily_files/cashremit.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashreturntab6 == '1') { ?> 
															<?php include 'daily_files/cashreturn.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setbankdepotab6 == '1') { ?> 
															<?php include 'daily_files/bankdepo.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setprifamilytab6 == '1') { ?> 
															<?php include 'daily_files/prifamily.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcrcardtab6 == '1') { ?> 
															<?php include 'daily_files/crcard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setdecardtab6 == '1') { ?> 
															<?php include 'daily_files/decard.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcheckstab6 == '1') { ?> 
															<?php include 'daily_files/checks.php';?>
														<?php } else { ?>
														<?php } ?> 

														<?php if ($setcashiertab6 == '1') { ?> 
															<?php include 'daily_files/cashier.php';?>
														<?php } else { ?>
														<?php } ?> 
													</div>
												</div>
												<!-- End Sixth Heading -->

												<!-- total -->   
												<div class="row">
													<!-- Record Name -->
													<div  class="form-group col-lg-2">
													</div>

													<!-- In -->
													<div class="form-group col-lg-3">
													</div>

													<!-- Out -->
													<div class="form-group col-lg-3">
													</div>
												</div>

												<hr>


												<?php include 'daily_files/totalamount.php';?>



												<div class="row">

													<?php include 'daily_files/scale.php';?>
													<?php include 'daily_files/difference.php';?>

												</div>


												<div class="row">

													<?php include 'daily_files/sobra.php';?>
													<?php include 'daily_files/totalsale.php';?>

												</div> 

												<div class="row">
													<?php include 'daily_files/total.php';?>
												</div> 

												<br>
												<?php include 'daily_files/upload.php';?>
												<?php include 'daily_files/notes.php';?>


												<div class="row">
													<?php include 'daily_files/cashierduty.php';?>
													<?php include 'daily_files/recordduty.php';?>
												</div> 
											</div>
										</div>

										<!-- Button -->
										<div class="form-group mt-3" style="position:relative; text-align: right;padding-right: 30px;">
											<?php if(isset($_GET['view'])){?>
												<a href="fl_dailyrecords_v2.php" id="btnPrint" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
											<?php }elseif(isset($_GET['rid'])) { ?> 
												<button class="btn btn-warning waves-effect waves-light" type="submit" id="submit" name="submit" value="Save"><i class="mdi mdi-database mr-2"></i> Update </button>&nbsp;
												<a href="fl_dailyrecords_v2.php" class="btn btn-dark" style="color:white"><i class="mdi mdi-keyboard-backspace font-16 mr-1"></i> Back </a>
											<?php } else { ?>
												<button type="submit" id='submit' name="submit" value="Save" class="btn btn-primary waves-effect waves-light" title="save records"><i class="mdi mdi-book-check-outline mr-2"></i> Submit
												</button>&nbsp;
												<a href="fl_dailyrecords_v2.php" class="btn btn-dark waves-effect waves-light" style="color:white"><i class="mdi mdi-keyboard-backspace mr-2"></i> Back </a>
											<?php } ?> 
										</div>
										<div class="mt-4">
										</div>
										<!-- End Button -->


									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- end row --> 

				</div> <!-- container-fluid -->
			</div>
			<!-- End Page-content -->


			<?php include 'common/footer.php'; ?>
		</div>
		<!-- end main content-->

	</div>
	<!-- END layout-wrapper -->
	<?php include 'common/theme.php'; ?>

	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>
	<!-- Time -->
	<script src="assets/js/time.js"></script>
	<!-- JAVASCRIPT -->
	<script src="assets/libs/jquery/jquery.min.js"></script>
	<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="assets/libs/simplebar/simplebar.min.js"></script>
	<script src="assets/libs/node-waves/waves.min.js"></script>
	<script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

	<!-- parsleyjs -->
	<script src="assets/libs/parsleyjs/parsley.min.js"></script>
	<script src="assets/js/pages/form-validation.init.js"></script>
	<!-- Session timeout js -->
	<script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>
	<!-- Session timeout js -->
	<script src="assets/js/pages/session-timeout.init.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
	<!-- Sweet alert init js-->
	<script src="assets/js/pages/sweet-alerts.init.js"></script>

	<script>
		function getFileNameWithExt(event) {
			if (!event || !event.target || !event.target.files || event.target.files.length === 0) {
				return;
			}

			const name = event.target.files[0].name;
			const lastDot = name.lastIndexOf('.');

			const fileName = name.substring(0, lastDot) + name.substring(lastDot + .1);
			outputfile.value = fileName;

		}
	</script>


	<script>   
        //PK IN SUM
        function sumIt_pkin() {
        	var total = 0, val;
        	$('.inst_amount_pkin').each(function() {
        		val = $(this).val();
        		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
        		total += val;
        	});
        	$('#total_price_pkin').html((total).toFixed(2));
        	$('#total_amount_pkin').val((total).toFixed(2));                
        }            
        $(function() {
        	$(document).on('input', '.inst_amount_pkin', sumIt_pkin);
                sumIt_pkin() // run when loading
            });

         //PK OUT SUM
         function sumIt_pkout() {
         	var total = 0, val;
         	$('.inst_amount_pkout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_pkout').html((total).toFixed(2));
         	$('#total_amount_pkout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_pkout', sumIt_pkout);
                sumIt_pkout() // run when loading
            });

         //PS IN SUM
         function sumIt_psin() {
         	var total = 0, val;
         	$('.inst_amount_psin').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_psin').html((total).toFixed(2));
         	$('#total_amount_psin').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_psin', sumIt_psin);
                sumIt_psin() // run when loading
            });

           //PS OUT SUM
           function sumIt_psout() {
           	var total = 0, val;
           	$('.inst_amount_psout').each(function() {
           		val = $(this).val();
           		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
           		total += val;
           	});
           	$('#total_price_psout').html((total).toFixed(2));
           	$('#total_amount_psout').val((total).toFixed(2));                
           }            
           $(function() {
           	$(document).on('input', '.inst_amount_psout', sumIt_psout);
                sumIt_psout() // run when loading
            }); 

           //DISC IN SUM
           function sumIt_discin() {
           	var total = 0, val;
           	$('.inst_amount_discin').each(function() {
           		val = $(this).val();
           		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
           		total += val;
           	});
           	$('#total_price_discin').html((total).toFixed(2));
           	$('#total_amount_discin').val((total).toFixed(2));                
           }            
           $(function() {
           	$(document).on('input', '.inst_amount_discin', sumIt_discin);
                sumIt_discin() // run when loading
            }); 


         //DISC OUT SUM
         function sumIt_discout() {
         	var total = 0, val;
         	$('.inst_amount_discout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_discout').html((total).toFixed(2));
         	$('#total_amount_discout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_discout', sumIt_discout);
                sumIt_discout() // run when loading
            }); 

        //CHICK IN SUM
        function sumIt_chickin() {
        	var total = 0, val;
        	$('.inst_amount_chickin').each(function() {
        		val = $(this).val();
        		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
        		total += val;
        	});
        	$('#total_price_chickin').html((total).toFixed(2));
        	$('#total_amount_chickin').val((total).toFixed(2));                
        }            
        $(function() {
        	$(document).on('input', '.inst_amount_chickin', sumIt_chickin);
                sumIt_chickin() // run when loading
            }); 


         //CHICK OUT SUM
         function sumIt_chickout() {
         	var total = 0, val;
         	$('.inst_amount_chickout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_chickout').html((total).toFixed(2));
         	$('#total_amount_chickout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_chickout', sumIt_chickout);
                sumIt_chickout() // run when loading
            });



         //CUSTOMER CREDIT IN SUM
         function sumIt_cuscreditin() {
         	var total = 0, val;
         	$('.inst_amount_cuscreditin').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_cuscreditin').html((total).toFixed(2));
         	$('#total_amount_cuscreditin').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_cuscreditin', sumIt_cuscreditin);
                sumIt_cuscreditin() // run when loading
            });

         //CUSTOMER CREDIT OUT SUM
         function sumIt_cuscreditout() {
         	var total = 0, val;
         	$('.inst_amount_cuscreditout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_cuscreditout').html((total).toFixed(2));
         	$('#total_amount_cuscreditout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_cuscreditout', sumIt_cuscreditout);
                sumIt_cuscreditout() // run when loading
            });

         //EMPLOYEE CREDIT IN SUM
         function sumIt_epcreditin() {
         	var total = 0, val;
         	$('.inst_amount_epcreditin').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_epcreditin').html((total).toFixed(2));
         	$('#total_amount_epcreditin').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_epcreditin', sumIt_epcreditin);
                sumIt_epcreditin() // run when loading
            });

         //EMPLOYEE CREDIT OUT SUM
         function sumIt_epcreditout() {
         	var total = 0, val;
         	$('.inst_amount_epcreditout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_epcreditout').html((total).toFixed(2));
         	$('#total_amount_epcreditout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_epcreditout', sumIt_epcreditout);
                sumIt_epcreditout() // run when loading
            });

            //LEHMANN CREDIT IN SUM
            function sumIt_lehcreditin() {
            	var total = 0, val;
            	$('.inst_amount_lehcreditin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_lehcreditin').html((total).toFixed(2));
            	$('#total_amount_lehcreditin').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_lehcreditin', sumIt_lehcreditin);
                sumIt_lehcreditin() // run when loading
            });
            
         //LEHMANN CREDIT OUT SUM
         function sumIt_lehcreditout() {
         	var total = 0, val;
         	$('.inst_amount_lehcreditout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_lehcreditout').html((total).toFixed(2));
         	$('#total_amount_lehcreditout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_lehcreditout', sumIt_lehcreditout);
                sumIt_lehcreditout() // run when loading
            });

            //REMIT IN SUM
            function sumIt_remitin() {
            	var total = 0, val;
            	$('.inst_amount_remitin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_remitin').html((total).toFixed(2));
            	$('#total_amount_remitin').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_remitin', sumIt_remitin);
                sumIt_remitin() // run when loading
            });
            
         //REMIT OUT SUM
         function sumIt_remitout() {
         	var total = 0, val;
         	$('.inst_amount_remitout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_remitout').html((total).toFixed(2));
         	$('#total_amount_remitout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_remitout', sumIt_remitout);
                sumIt_remitout() // run when loading
            });

        //IN IN SUM
        function sumIt_cashin() {
        	var total = 0, val;
        	$('.inst_amount_cashin').each(function() {
        		val = $(this).val();
        		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
        		total += val;
        	});
        	$('#total_price_cashin').html((total).toFixed(2));
        	$('#total_amount_cashin').val((total).toFixed(2));                
        }            
        $(function() {
        	$(document).on('input', '.inst_amount_cashin', sumIt_cashin);
                sumIt_cashin() // run when loading
            });

         //IN OUT SUM
         function sumIt_cashout() {
         	var total = 0, val;
         	$('.inst_amount_cashout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_cashout').html((total).toFixed(2));
         	$('#total_amount_cashout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_cashout', sumIt_cashout);
                sumIt_cashout() // run when loading
            });

                   //BANK DEPOSIT IN SUM
                   function sumIt_bankdepoin() {
                   	var total = 0, val;
                   	$('.inst_amount_bankdepoin').each(function() {
                   		val = $(this).val();
                   		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
                   		total += val;
                   	});
                   	$('#total_price_bankdepoin').html((total).toFixed(2));
                   	$('#total_amount_bankdepoin').val((total).toFixed(2));                
                   }            
                   $(function() {
                   	$(document).on('input', '.inst_amount_bankdepoin', sumIt_bankdepoin);
                sumIt_bankdepoin() // run when loading
            });

         //BANK DEPOSIT OUT SUM
         function sumIt_bankdepoout() {
         	var total = 0, val;
         	$('.inst_amount_bankdepoout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_bankdepoout').html((total).toFixed(2));
         	$('#total_amount_bankdepoout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_bankdepoout', sumIt_bankdepoout);
                sumIt_bankdepoout() // run when loading
            });

             //PRIVATE FAMILY IN SUM
             function sumIt_prfamilyin() {
             	var total = 0, val;
             	$('.inst_amount_prfamilyin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});
             	$('#total_price_prfamilyin').html((total).toFixed(2));
             	$('#total_amount_prfamilyin').val((total).toFixed(2));                
             }            
             $(function() {
             	$(document).on('input', '.inst_amount_prfamilyin', sumIt_prfamilyin);
                sumIt_prfamilyin() // run when loading
            });

         //PRIVATE FAMILY OUT SUM
         function sumIt_prfamilyout() {
         	var total = 0, val;
         	$('.inst_amount_prfamilyout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_prfamilyout').html((total).toFixed(2));
         	$('#total_amount_prfamilyout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_prfamilyout', sumIt_prfamilyout);
                sumIt_prfamilyout() // run when loading
            });

         //CREDIT CARD  IN SUM
         function sumIt_crcardin() {
         	var total = 0, val;
         	$('.inst_amount_crcardin').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_crcardin').html((total).toFixed(2));
         	$('#total_amount_crcardin').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_crcardin', sumIt_crcardin);
                sumIt_crcardin() // run when loading
            });

         //CREDIT CARD  OUT SUM
         function sumIt_crcardout() {
         	var total = 0, val;
         	$('.inst_amount_crcardout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_crcardout').html((total).toFixed(2));
         	$('#total_amount_crcardout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_crcardout', sumIt_crcardout);
                sumIt_crcardout() // run when loading
            });

            //DEBIT CARD IN SUM
            function sumIt_dccardin() {
            	var total = 0, val;
            	$('.inst_amount_dccardin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_dccardin').html((total).toFixed(2));
            	$('#total_amount_dccardin').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_dccardin', sumIt_dccardin);
                sumIt_dccardin() // run when loading
            });
            
         //DEBIT CARD OUT SUM
         function sumIt_dccardout() {
         	var total = 0, val;
         	$('.inst_amount_dccardout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_dccardout').html((total).toFixed(2));
         	$('#total_amount_dccardout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_dccardout', sumIt_dccardout);
                sumIt_dccardout() // run when loading
            });

            //CHECKS IN SUM
            function sumIt_checksin() {
            	var total = 0, val;
            	$('.inst_amount_checksin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_checksin').html((total).toFixed(2));
            	$('#total_amount_checksin').val((total).toFixed(2));                  
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_checksin', sumIt_checksin);
                sumIt_checksin() // run when loading
            });
            
         //CHECKS OUT SUM
         function sumIt_checksout() {
         	var total = 0, val;
         	$('.inst_amount_checksout').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_checksout').html((total).toFixed(2));
         	$('#total_amount_checksout').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_amount_checksout', sumIt_checksout);
                sumIt_checksout() // run when loading
            });






        //PK IN DYNAMIC ADD    
        $(document).ready(function(){
        	var i=1;
        	$('#pkin').click(function(){
        		i++;
        		$('#dynamic_field_pkin').append('<tr id="row'+i+'"><td><input type="text" name="pkin1[]" placeholder="Title" class="form-control name_list" /></td><td><input type="number" name="pkin2[]" placeholder="Amount" class="form-control inst_amount_pkin" /></td><td><input type="text" name="pkin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="pkin4[]" placeholder="Amount" class="form-control inst_amount_pkin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
        	});


         //PK OUT DYNAMIC ADD    
         $('#pkout').click(function(){
         	i++;
         	$('#dynamic_field_pkout').append('<tr id="row'+i+'"><td><input type="text" name="pkout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="pkout2[]" placeholder="Amount" class="form-control inst_amount_pkout" /></td><td><input type="text" name="pkout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="pkout4[]" placeholder="Amount" class="form-control inst_amount_pkout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });

         //PS IN DYNAMIC ADD
         $('#psin').click(function(){
         	i++;
         	$('#dynamic_field_psin').append('<tr id="row'+i+'"><td><input type="text" name="psin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="psin2[]" placeholder="Amount" class="form-control inst_amount_psin" /></td><td><input type="text" name="psin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="psin4[]" placeholder="Amount" class="form-control inst_amount_psin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });


         //PS OUT DYNAMIC ADD    
         $('#psout').click(function(){
         	i++;
         	$('#dynamic_field_psout').append('<tr id="row'+i+'"><td><input type="text" name="psout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="psout2[]" placeholder="Amount" class="form-control inst_amount_psout" /></td><td><input type="text" name="psout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="psout4[]" placeholder="Amount" class="form-control inst_amount_psout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });

           //DISC IN DYNAMIC ADD
           $('#discin').click(function(){
           	i++;
           	$('#dynamic_field_discin').append('<tr id="row'+i+'"><td><input type="text" name="discin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="discin2[]" placeholder="Amount" class="form-control inst_amount_discin" /></td><td><input type="text" name="discin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="discin4[]" placeholder="Amount" class="form-control inst_amount_discin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
           });

           
         //DISC OUT DYNAMIC ADD    
         $('#discout').click(function(){
         	i++;
         	$('#dynamic_field_discout').append('<tr id="row'+i+'"><td><input type="text" name="discout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="discout2[]" placeholder="Amount" class="form-control inst_amount_discout" /></td><td><input type="text" name="discout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="discout4[]" placeholder="Amount" class="form-control inst_amount_discout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         }); 


            //CHICK IN DYNAMIC ADD
            $('#chickin').click(function(){
            	i++;
            	$('#dynamic_field_chickin').append('<tr id="row'+i+'"><td style="width:15%;"> <input type="date" name="chickin4[]" placeholder="Date" class="form-control" /> </td> <td style="width:15%;"> <input type="text" name="chickin1[]" placeholder="Purchase No." class="form-control" /> </td> <td> <input type="text" name="chickin5[]" placeholder="Supplier Name" class="form-control" /> </td> <td style="width:30%;"> <input type="text" name="chickin3[]" placeholder="Purchase Title" class="form-control" /> </td> <td> <input type="number" name="chickin2[]" placeholder="Amount" class="form-control inst_amount_chickin" /> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>'); });
         //CHICK OUT DYNAMIC ADD    
         $('#chickout').click(function(){
         	i++;
         	$('#dynamic_field_chickout').append('<tr id="row'+i+'"><td style="width:15%;"> <input type="date" name="chickout4[]" placeholder="Date" class="form-control" /> </td> <td style="width:15%;"> <input type="text" name="chickout1[]" placeholder="Purchase No." class="form-control" /> </td> <td > <input type="text" name="chickout5[]" placeholder="Purchase No." class="form-control" /> </td> <td style="width:30%;"> <input type="text" name="chickout3[]" placeholder="Purchase Title" class="form-control" /> </td> <td> <input type="number" name="chickout2[]" placeholder="Amount" class="form-control inst_amount_chickout" /> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>'); });
           //CUSTOMER CREDIT IN DYNAMIC ADD
           $('#cuscreditin').click(function(){
           	i++;
           	$('#dynamic_field_cuscreditin').append('<tr id="row'+i+'"><td style="width:5%"></td><td style="width:50%"><select style="text-transform:uppercase" class="form-control" type="text" name="cuscreditin1[]" ><option value=" ">- SELECT -</option><?php $sql = "SELECT * FROM customers_profile WHERE cpStatus='Enabled';"; $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?><option style="text-transform:uppercase"value="<?php echo $prow['cpName'] ?>"><?php echo $prow['cpName'] ?></option><?php } ?></select></td><td><input type="number" name="cuscreditin2[]" placeholder="Amount" class="form-control inst_amount_cuscreditin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
           });

         //CUSTOMER CREDIT OUT DYNAMIC ADD    
         $('#cuscreditout').click(function(){
         	i++;
         	$('#dynamic_field_cuscreditout').append('<tr id="row'+i+'"><td style="width:5%"></td><td style="width:50%"><select style="text-transform:uppercase" class="form-control" type="text" name="cuscreditout1[]" ><option value=" ">- SELECT -</option><?php $sql = "SELECT * FROM customers_profile WHERE cpStatus='Enabled';"; $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?><option style="text-transform:uppercase"value="<?php echo $prow['cpName'] ?>"><?php echo $prow['cpName'] ?></option><?php } ?></select></td><td><input type="number" name="cuscreditout2[]" placeholder="Amount" class="form-control inst_amount_cuscreditout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });

          //EMPLOYEE CREDIT IN DYNAMIC ADD
          $('#epcreditin').click(function(){
          	i++;
          	$('#dynamic_field_epcreditin').append('<tr id="row'+i+'"><td style="width:5%"></td><td style="width:50%"><select style="text-transform:uppercase" class="form-control" type="text" name="epcreditin1[]" ><option value=" ">- SELECT -</option><?php $sql = "SELECT * FROM employees WHERE stat='Active';"; $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?><option style="text-transform:uppercase"value="<?php echo utf8_encode($prow['firstname']) ?> <?php echo utf8_encode($prow['lastname']) ?>"><?php echo utf8_encode($prow['firstname']) ?> <?php echo utf8_encode($prow['lastname']) ?></option><?php } ?></select></td><td><input type="number" name="epcreditin2[]" placeholder="Amount" class="form-control inst_amount_epcreditin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
          });


         //EMPLOYEE CREDIT OUT DYNAMIC ADD    
         $('#epcreditout').click(function(){
         	i++;
         	$('#dynamic_field_epcreditout').append('<tr id="row'+i+'"><td style="width:5%"></td  style="width:50%"><td><select style="text-transform:uppercase" class="form-control" type="text" name="epcreditout1[]" ><option value=" ">- SELECT -</option><?php $sql = "SELECT * FROM employees WHERE stat='Active';"; $query = $conn->query($sql);while($prow = $query->fetch_assoc()){ ?><option style="text-transform:uppercase"value="<?php echo utf8_encode($prow['firstname']) ?> <?php echo utf8_encode($prow['lastname']) ?>"><?php echo utf8_encode($prow['firstname']) ?> <?php echo utf8_encode($prow['lastname']) ?></option><?php } ?></select></td><td><input type="number" name="epcreditout2[]" placeholder="Amount" class="form-control inst_amount_epcreditout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });    

           //LEHMANN CREDIT IN DYNAMIC ADD
           $('#lehcreditin').click(function(){
           	i++;
           	$('#dynamic_field_lehcreditin').append('<tr id="row'+i+'"><td><input type="text" name="lehcreditin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="lehcreditin2[]" placeholder="Amount" class="form-control inst_amount_lehcreditin" /></td><td><input type="text" name="lehcreditin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="lehcreditin4[]" placeholder="Amount" class="form-control inst_amount_lehcreditin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
           });

           
         //LEHMANN CREDIT OUT DYNAMIC ADD    
         $('#lehcreditout').click(function(){
         	i++;
         	$('#dynamic_field_lehcreditout').append('<tr id="row'+i+'"><td><input type="text" name="lehcreditout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="lehcreditout2[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" /></td><td><input type="text" name="lehcreditout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="lehcreditout4[]" placeholder="Amount" class="form-control inst_amount_lehcreditout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });    

         //REMIT IN DYNAMIC ADD
         $('#remitin').click(function(){
         	i++;
         	$('#dynamic_field_remitin').append('<tr id="row'+i+'"><td><input type="text" name="remitin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="remitin2[]" placeholder="Amount" class="form-control inst_amount_remitin" /></td><td><input type="text" name="remitin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="remitin4[]" placeholder="Amount" class="form-control inst_amount_remitin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });


         //REMIT OUT DYNAMIC ADD    
         $('#remitout').click(function(){
         	i++;
         	$('#dynamic_field_remitout').append('<tr id="row'+i+'"><td><input type="text" name="remitout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="remitout2[]" placeholder="Amount" class="form-control inst_amount_remitout" /></td><td><input type="text" name="remitout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="remitout4[]" placeholder="Amount" class="form-control inst_amount_remitout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });

       //IN IN DYNAMIC ADD
       $('#cashin').click(function(){
       	i++;
       	$('#dynamic_field_cashin').append('<tr id="row'+i+'"><td><input type="text" name="cashin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="cashin2[]" placeholder="Amount" class="form-control inst_amount_cashin" /></td><td><input type="text" name="cashin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="cashin4[]" placeholder="Amount" class="form-control inst_amount_cashin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
       });


         //IN OUT DYNAMIC ADD    
         $('#cashout').click(function(){
         	i++;
         	$('#dynamic_field_cashout').append('<tr id="row'+i+'"><td><input type="text" name="cashout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="cashout2[]" placeholder="Amount" class="form-control inst_amount_cashout" /></td><td><input type="text" name="cashout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="cashout4[]" placeholder="Amount" class="form-control inst_amount_cashout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });      

          //BANK DEPOSIT IN DYNAMIC ADD
          $('#bankdepoin').click(function(){
          	i++;
          	$('#dynamic_field_bankdepoin').append('<tr id="row'+i+'"><td><input type="text" name="bankdepoin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="bankdepoin2[]" placeholder="Amount" class="form-control inst_amount_bankdepoin" /></td><td><input type="text" name="bankdepoin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="bankdepoin4[]" placeholder="Amount" class="form-control inst_amount_bankdepoin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
          });


         //BANK DEPOSIT OUT DYNAMIC ADD    
         $('#bankdepoout').click(function(){
         	i++;
         	$('#dynamic_field_bankdepoout').append('<tr id="row'+i+'"><td><input type="text" name="bankdepoout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="bankdepoout2[]" placeholder="Amount" class="form-control inst_amount_bankdepoout" /></td><td><input type="text" name="bankdepoout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="bankdepoout4[]" placeholder="Amount" class="form-control inst_amount_bankdepoout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });   

         //PRIVATE FAMILY IN DYNAMIC ADD
         $('#prfamilyin').click(function(){
         	i++;
         	$('#dynamic_field_prfamilyin').append('<tr id="row'+i+'"><td><input type="text" name="prfamilyin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="prfamilyin2[]" placeholder="Amount" class="form-control inst_amount_prfamilyin" /></td><td><input type="text" name="prfamilyin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="prfamilyin4[]" placeholder="Amount" class="form-control inst_amount_prfamilyin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });


         //PRIVATE FAMILY OUT DYNAMIC ADD    
         $('#prfamilyout').click(function(){
         	i++;
         	$('#dynamic_field_prfamilyout').append('<tr id="row'+i+'"><td><input type="text" name="prfamilyout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="prfamilyout2[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" /></td><td><input type="text" name="prfamilyout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="prfamilyout4[]" placeholder="Amount" class="form-control inst_amount_prfamilyout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });  

          //CREDIT CARD  IN DYNAMIC ADD
          $('#crcardin').click(function(){
          	i++;
          	$('#dynamic_field_crcardin').append('<tr id="row'+i+'"><td><input type="text" name="crcardin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="crcardin2[]" placeholder="Amount" class="form-control inst_amount_crcardin" /></td><td><input type="text" name="crcardin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="crcardin4[]" placeholder="Amount" class="form-control inst_amount_crcardin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
          });


         //CREDIT CARD OUT DYNAMIC ADD    
         $('#crcardout').click(function(){
         	i++;
         	$('#dynamic_field_crcardout').append('<tr id="row'+i+'"><td><input type="text" name="crcardout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="crcardout2[]" placeholder="Amount" class="form-control inst_amount_crcardout" /></td><td><input type="text" name="crcardout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="crcardout4[]" placeholder="Amount" class="form-control inst_amount_crcardout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });    

            //DEBIT CARD IN DYNAMIC ADD
            $('#dccardin').click(function(){
            	i++;
            	$('#dynamic_field_dccardin').append('<tr id="row'+i+'"><td><input type="text" name="dccardin1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="dccardin2[]" placeholder="Amount" class="form-control inst_amount_dccardin" /></td><td><input type="text" name="dccardin3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="dccardin4[]" placeholder="Amount" class="form-control inst_amount_dccardin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
            });


         //DEBIT CARD OUT DYNAMIC ADD    
         $('#dccardout').click(function(){
         	i++;
         	$('#dynamic_field_dccardout').append('<tr id="row'+i+'"><td><input type="text" name="dccardout1[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="dccardout2[]" placeholder="Amount" class="form-control inst_amount_dccardout" /></td><td><input type="text" name="dccardout3[]" placeholder="Title" class="form-control" /></td><td><input type="number" name="dccardout4[]" placeholder="Amount" class="form-control inst_amount_dccardout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });    

          //CHECKS IN DYNAMIC ADD
          $('#checksin').click(function(){
          	i++;
          	$('#dynamic_field_checksin').append('<tr id="row'+i+'"><td><input type="text" name="checksin1[]" placeholder="Bank Details" class="form-control" /><td><input type="text" name="checksin2[]" placeholder="Check Number" class="form-control" /></td><td><input type="date" name="checksin3[]" placeholder="Date" class="form-control" /><td><input type="text" name="checksin4[]" placeholder="Name" class="form-control" /></td><td><input type="number" name="checksin5[]" placeholder="Amount" class="form-control inst_amount_checksin" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
          });


         //CHECKS OUT DYNAMIC ADD    
         $('#checksout').click(function(){
         	i++;
         	$('#dynamic_field_checksout').append('<tr id="row'+i+'"><td><input type="text" name="checksout1[]" placeholder="Bank Details" class="form-control" /></td><td><input type="text" name="checksout2[]" placeholder="Check Number" class="form-control" /></td><td><input type="date" name="checksout3[]" placeholder="date" class="form-control" /></td></td><td><input type="text" name="checksout4[]" placeholder="Name" class="form-control" /></td><td><input type="number" name="checksout5[]" placeholder="Amount" class="form-control inst_amount_checksout" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fa fa-trash"></i></button></td></tr>');
         });    

         $(document).on('click', '.btn_remove', function(){
         	var button_id = $(this).attr("id"); 
         	$('#row'+button_id+'').remove();
         });

     });


 //CASHIER 1ST MORNING 
 function sumIt_1stmorning() {
 	var total = 0, val;
 	$('.inst_1stmorning_1t').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_5h').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_2h').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_1h').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_50').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_20').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_10').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_05').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_01').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});

 	$('.inst_1stmorning_25').each(function() {
 		val = $(this).val();
 		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
 		total += val;
 	});
 	$('#total_price_checksout').html((total).toFixed(2));
 	$('#total_1st_morning').val((total).toFixed(2));                
 }            
 $(function() {
 	$(document).on('input', '.inst_1stmorning_1t', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_5h', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_2h', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_1h', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_50', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_20', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_10', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_05', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_01', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });

 $(function() {
 	$(document).on('input', '.inst_1stmorning_25', sumIt_1stmorning);
                sumIt_1stmorning() // run when loading
            });



            //CASHIER 1ST EVENING 
            function sumIt_1stevening() {
            	var total = 0, val;
            	$('.inst_1stevening_1t').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_5h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_2h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_1h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_50').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_20').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_10').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_05').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_01').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stevening_25').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_checksout').html((total).toFixed(2));
            	$('#total_1st_evening').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_1stevening_1t', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_5h', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_2h', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_1h', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_50', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_20', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_10', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_05', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_01', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stevening_25', sumIt_1stevening);
                sumIt_1stevening() // run when loading
            });


            //CASHIER 2ND MORNING 
            function sumIt_2ndmorning() {
            	var total = 0, val;
            	$('.inst_2ndmorning_1t').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_5h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_2h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_1h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_50').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_20').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_10').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_05').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_01').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_25').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_price_checksout').html((total).toFixed(2));
            	$('#total_2nd_morning').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_2ndmorning_1t', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_5h', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_2h', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_1h', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_50', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_20', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_10', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_05', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_01', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_25', sumIt_2ndmorning);
                sumIt_2ndmorning() // run when loading
            });



         //CASHIER 2ND EVENING 
         function sumIt_2ndevening() {
         	var total = 0, val;
         	$('.inst_2ndevening_1t').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_5h').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_2h').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_1h').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_50').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_20').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_10').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_05').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_01').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});

         	$('.inst_2ndevening_25').each(function() {
         		val = $(this).val();
         		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
         		total += val;
         	});
         	$('#total_price_checksout').html((total).toFixed(2));
         	$('#total_2nd_evening').val((total).toFixed(2));                
         }            
         $(function() {
         	$(document).on('input', '.inst_2ndevening_1t', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_5h', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_2h', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_1h', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_50', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_20', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_10', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_05', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_01', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });

         $(function() {
         	$(document).on('input', '.inst_2ndevening_25', sumIt_2ndevening);
                sumIt_2ndevening() // run when loading
            });



            //CASHIER TOTAL MORNING

            function sumIt_totalmorning() {
            	var total = 0, val;
            	$('.inst_1stmorning_1t').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_5h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_2h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_1h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_50').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_20').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_10').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_05').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_01').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_1stmorning_25').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_1t').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_5h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_2h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_1h').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_50').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_20').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_10').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_05').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_01').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_2ndmorning_25').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});
            	$('#total_cashiermorning').html((total).toFixed(2));
            	$('#total_cashier_morning').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_1stmorning_1t', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_5h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_2h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_1h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_50', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_20', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_10', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_05', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_01', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_1stmorning_25', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_1t', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_5h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_2h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_1h', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_50', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_20', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_10', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_05', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_01', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_2ndmorning_25', sumIt_totalmorning);
                sumIt_totalmorning() // run when loading
            });




             //CASHIER TOTAL EVENING

             function sumIt_totalevening() {
             	var total = 0, val;
             	$('.inst_1stevening_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stevening_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndevening_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});
             	$('#total_cashierevening').html((total).toFixed(2));
             	$('#total_cashier_evening').val((total).toFixed(2));                
             }            
             $(function() {
             	$(document).on('input', '.inst_1stevening_1t', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_5h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_2h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_1h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_50', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_20', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_10', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_05', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_01', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_25', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_1t', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_5h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_2h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_1h', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_50', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_20', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_10', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_05', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_01', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_25', sumIt_totalevening);
                sumIt_totalevening() // run when loading
            });


            //TOTAL AMOUNT IN SUM
            function sumIt_totalin() {
            	var total = 0, val;
            	$('.inst_amount_pkin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_psin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_discin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_chickin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;      
            	});

            	$('.inst_amount_cuscreditin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_epcreditin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_lehcreditin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_remitin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_cashin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_bankdepoin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	}); 

            	$('.inst_amount_prfamilyin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_crcardin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	}); 

            	$('.inst_amount_dccardin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_checksin').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('#total_price_totalin').html((total).toFixed(2));
            	$('#total_amount_totalin').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_pkin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_psin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_discin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_chickin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_cuscreditin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_epcreditin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_lehcreditin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_remitin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_cashin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_bankdepoin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_prfamilyin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_crcardin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_dccardin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_checksin', sumIt_totalin);
                sumIt_totalin() // run when loading
            });
            
            
            //TOTAL AMOUNT OUT SUM
            function sumIt_totalout() {
            	var total = 0, val;
            	$('.inst_amount_pkout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_psout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_discout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_chickout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_cuscreditout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_epcreditout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_lehcreditout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_remitout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_cashout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_bankdepoout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_prfamilyout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_crcardout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	}); 

            	$('.inst_amount_dccardout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('.inst_amount_checksout').each(function() {
            		val = $(this).val();
            		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
            		total += val;
            	});

            	$('#total_price_totalout').html((total).toFixed(2));
            	$('#total_amount_totalout').val((total).toFixed(2));                
            }            
            $(function() {
            	$(document).on('input', '.inst_amount_pkout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_psout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_discout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_chickout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_cuscreditout', sumIt_totalout);
                sumIt_totalout() // run when loading
            }); 
            
            $(function() {
            	$(document).on('input', '.inst_amount_epcreditout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_lehcreditout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_remitout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_cashout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_bankdepoout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_prfamilyout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_crcardout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_dccardout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });
            
            $(function() {
            	$(document).on('input', '.inst_amount_checksout', sumIt_totalout);
                sumIt_totalout() // run when loading
            });


             //TOTAL SALE 
             function sumIt_overview_totalsale() {
             	var total = 0, val;
             	$('.inst_amount_pkin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_psin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_discin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_chickin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;      
             	});

             	$('.inst_amount_cuscreditin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_epcreditin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_lehcreditin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_remitin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_cashin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_bankdepoin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	}); 

             	$('.inst_amount_prfamilyin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_crcardin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	}); 

             	$('.inst_amount_dccardin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_checksin').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_1stmorning_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_2ndmorning_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total += val;
             	});

             	$('.inst_amount_pkout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_psout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_discout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_chickout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_cuscreditout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_epcreditout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_lehcreditout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_remitout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_cashout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_bankdepoout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_prfamilyout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_crcardout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	}); 

             	$('.inst_amount_dccardout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_amount_checksout').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_1stevening_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_1t').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_5h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_2h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_1h').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_50').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_20').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_10').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_05').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_01').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});

             	$('.inst_2ndevening_25').each(function() {
             		val = $(this).val();
             		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
             		total -= val;
             	});


             	$('#total_sale').html((total).toFixed(2));
             	$('#overview_total_sale').val(Math.abs(total).toFixed(2));  

             }            
             $(function() {
             	$(document).on('input', '.inst_amount_pkin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_psin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_discin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_chickin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_cuscreditin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_epcreditin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_lehcreditin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_remitin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_cashin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_bankdepoin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_prfamilyin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_crcardin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_dccardin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_checksin', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_1t', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_5h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_2h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_1h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_50', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_20', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_10', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_05', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_01', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stmorning_25', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_1t', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_5h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_2h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_1h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_50', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_20', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_10', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_05', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_01', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndmorning_25', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_pkout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_psout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_discout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_chickout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_cuscreditout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            }); 

             $(function() {
             	$(document).on('input', '.inst_amount_epcreditout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_lehcreditout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_remitout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_cashout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_bankdepoout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_prfamilyout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_crcardout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_dccardout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_amount_checksout', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_1t', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_5h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_2h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_1h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_50', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_20', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_10', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_05', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_01', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_1stevening_25', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_1t', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_5h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_2h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_1h', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_50', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_20', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_10', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_05', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_01', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

             $(function() {
             	$(document).on('input', '.inst_2ndevening_25', sumIt_overview_totalsale);
                sumIt_overview_totalsale() // run when loading
            });

              //WEIGHT AND SCALE 
              function sumIt_weight_scale() {
              	var total = 0, val;
              	$('.inst_weight').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_sobra').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('#total_weightscale').html((total).toFixed(2));
              	$('#total_weight_scale').val(Math.abs(total).toFixed(2));     
                //$('#total_weight_scalexxx').val((total).toFixed(2));          
            }            
            $(function() {
            	$(document).on('input', '.inst_weight', sumIt_weight_scale);
                sumIt_weight_scale() // run when loading
            });

            $(function() {
            	$(document).on('input', '.inst_sobra', sumIt_weight_scale);
                sumIt_weight_scale() // run when loading
            });
            
              //DIFFERENCE
              function sumIt_difference() {
              	var total = 0, val;
              	$('.inst_amount_pkin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_psin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_discin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_chickin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;      
              	});

              	$('.inst_amount_cuscreditin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_epcreditin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_lehcreditin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_remitin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_cashin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_bankdepoin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	}); 

              	$('.inst_amount_prfamilyin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_crcardin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	}); 

              	$('.inst_amount_dccardin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_checksin').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_1t').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_5h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_2h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_1h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_50').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_20').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_10').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_05').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_01').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_1stmorning_25').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_1t').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_5h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_2h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_1h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_50').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_20').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_10').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_05').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_01').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_2ndmorning_25').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total += val;
              	});

              	$('.inst_amount_pkout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_psout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_discout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_chickout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_cuscreditout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_epcreditout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_lehcreditout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_remitout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_cashout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_bankdepoout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_prfamilyout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_crcardout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	}); 

              	$('.inst_amount_dccardout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_amount_checksout').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_1t').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_5h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_2h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_1h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_50').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_20').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_10').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_05').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_01').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_1stevening_25').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_1t').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_5h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_2h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_1h').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_50').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_20').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_10').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_05').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_01').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});

              	$('.inst_2ndevening_25').each(function() {
              		val = $(this).val();
              		val = isNaN(val) || $.trim(val) === "" ? 0 : parseFloat(val);
              		total -= val;
              	});


              	$('#total_difference').html((total).toFixed(2));
              	$('#overview_difference').val(((Math.abs(total) - +$("#total_weight_scale").val())).toFixed(2));



              }            
              $(function() {
              	$(document).on('input', '.inst_amount_pkin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_psin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_discin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_chickin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_cuscreditin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_epcreditin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_lehcreditin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_remitin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_cashin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_bankdepoin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_prfamilyin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_crcardin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_dccardin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_checksin', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_1t', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_5h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_2h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_1h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_50', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_20', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_10', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_05', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_01', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stmorning_25', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_1t', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_5h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_2h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_1h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_50', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_20', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_10', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_05', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_01', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndmorning_25', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_pkout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_psout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_discout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_chickout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_cuscreditout', sumIt_difference);
                sumIt_difference() // run when loading
            }); 

              $(function() {
              	$(document).on('input', '.inst_amount_epcreditout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_lehcreditout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_remitout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_cashout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_bankdepoout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_prfamilyout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_crcardout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_dccardout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_amount_checksout', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_1t', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_5h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_2h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_1h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_50', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_20', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_10', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_05', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_01', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_1stevening_25', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_1t', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_5h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_2h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_1h', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_50', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_20', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_10', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_05', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_01', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_2ndevening_25', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_weight', sumIt_difference);
                sumIt_difference() // run when loading
            });

              $(function() {
              	$(document).on('input', '.inst_sobra', sumIt_difference);
                sumIt_difference() // run when loading
            });


        </script>
    </body>
    </html>
<?php } ?>
<?php 
if($_SESSION['records2'] != on)
{
	header('location:error404');
	exit;
}
?>