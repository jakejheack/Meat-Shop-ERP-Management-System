<?php

include ('../../../system/connection.php');

if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT *, employees.id as empid FROM employees LEFT JOIN position ON position.id=employees.position_id WHERE employees.id=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

?>