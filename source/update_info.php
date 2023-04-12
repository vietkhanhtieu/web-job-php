<?php 
        session_start();
        require_once('connection.php');
        if(isset($_POST["submit"])){
            $stmt = $dbCon->prepare('UPDATE client SET USER_NAME = ?, USER_AGE=?,USER_GENDER=?,USER_PHONE=?,USER_EDU=?,USER_CER=?,USER_ACH=? where ACC_ID=?');
            $stmt->execute(array($_POST["user-name"],$_POST["user-age"],$_POST["user-gender"],$_POST["user-phone"],$_POST["user-edu"],$_POST["user-cer"],$_POST["user-ach"],$_SESSION['login']));
            header('location:user.php');
        }
      ?>