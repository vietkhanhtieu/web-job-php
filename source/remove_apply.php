<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['jobid_remove'])){
        $stmt = $dbCon->prepare('DELETE FROM apply WHERE JOB_ID=? and ACC_ID=?');
        $stmt->execute(array($_POST['jobid_remove'],$_SESSION['login']));
    }
    
?>