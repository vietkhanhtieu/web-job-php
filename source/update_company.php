<?php  
        session_start();
        require_once('connection.php');
        if(isset($_POST["submit"])){
            $stmt = $dbCon->prepare('UPDATE company SET COM_NAME = ?, COM_DES=? WHERE ACC_ID=?');
            $stmt->execute(array($_POST["com-name"],$_POST["com-des"],$_SESSION['login']));
            header('location:company.php');
        }
?>