<?php 
    session_start();
    require_once('connection.php');
    if(isset($_POST['app_id'])){
        $stmt = $dbCon->prepare('UPDATE apply SET APP_KQ=? WHERE APP_ID=?');
        $stmt->execute(array($_POST['status'],$_POST['app_id']));
    }
?>