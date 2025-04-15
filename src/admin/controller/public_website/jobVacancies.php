<?php

if(isset($_GET['view']))
{
    $SQL = $MySQLiconn->query("SELECT * FROM job_vacancies WHERE jobID=".$_GET['view']);
    $getROW = $SQL->fetch_array();
}

?>
