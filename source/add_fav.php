<?php
    session_start();
    require_once('connection.php');
    if(isset($_POST['jid'])){
        $stm = $dbCon->prepare('SELECT * FROM favo WHERE ACC_ID=? and JOB_ID=?');
        $stm->execute(array($_SESSION['login'],$_POST['jid']));
        if($stm->rowCount() == 0){
            $stmt = $dbCon->prepare('INSERT INTO favo(ACC_ID,JOB_ID) values(?,?)');
            $stmt->execute(array($_SESSION['login'],$_POST['jid']));
        }
    }
?>