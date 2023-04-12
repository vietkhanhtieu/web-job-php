<?php 
        session_start();
        require_once('connection.php');
        if(isset($_POST["skill"])){
            $stmt = $dbCon->prepare('UPDATE cv SET CV_DES = ? Where ACC_ID=?');
            $stmt->execute(array($_POST["skill"],$_SESSION['login']));
            header('location:user.php');
        }
?>