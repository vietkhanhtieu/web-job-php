<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['jid_remove'])){
        $stmt = $dbCon->prepare('DELETE FROM favo WHERE JOB_ID=? and ACC_ID=?');
        $stmt->execute(array($_POST['jid_remove'],$_SESSION['login']));
    }
?>