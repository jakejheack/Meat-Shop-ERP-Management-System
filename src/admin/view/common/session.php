<?php 
session_start();

if(!isset($_SESSION['id']))
{
    header('location:../../index?lmsg=true');
    exit;
}
 

require_once('../../../system/config.php');
require_once('../../../system/conn.php');
require_once('../../../system/connect.php');
require_once('../../../system/drconnect.php');
?>