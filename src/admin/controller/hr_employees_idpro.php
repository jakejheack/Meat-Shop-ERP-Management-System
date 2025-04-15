<?php

include ('../../../system/connection.php');

if(isset($_GET['view2']))
{
    $SQL = $MySQLiconn->query("SELECT *, employees.id as empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id  WHERE employees.id=".$_GET['view2']);
    $getROW = $SQL->fetch_array();
}

?>
