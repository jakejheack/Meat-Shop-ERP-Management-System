<?php
    include '../../../../system/conn.php';

    if(isset($_POST['send'])){
        $newsemail = $_POST['newsemail'];
        $sql = "INSERT INTO webnewsletter (newsemail, created_on) VALUES ('$newsemail', NOW())";
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
