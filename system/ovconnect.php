<?php
    $url='localhost';
	$username='u862287489_lehmann';
	$password='Securelink143';
	$conn=mysqli_connect($url,$username,$password,"u862287489_lehmanndb");
	if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
	}
?>