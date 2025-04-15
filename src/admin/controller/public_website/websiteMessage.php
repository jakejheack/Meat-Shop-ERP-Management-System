<?php
    include '../../../../system/conn.php';

    if(isset($_POST['send'])){
        $webmesName = $_POST['webmesName'];
        $webmesEmail = $_POST['webmesEmail'];
        $webmesText = $_POST['webmesText'];
        $webmesStatus = $_POST['webmesStatus'];

        $sql = "INSERT INTO webmessage (webmesName, webmesEmail, webmesText, webmesStatus, created_on) VALUES ('$webmesName', '$webmesEmail', '$webmesText', '$webmesStatus', NOW())";
        if($conn->query($sql)){
            session_start();
            echo '<div class="status-icon valid"><i class="fa fa-check"></i></div>';

        }
        else{
            session_start();
            echo '<div class="status-icon invalid"><i class="fa fa-times"></i></div>';
        }
    } 

?>
