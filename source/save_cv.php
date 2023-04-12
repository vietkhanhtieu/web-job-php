<?php 
    session_start();
    require_once('connection.php');
    if(isset($_POST['skill'])){
        $stm = $dbCon -> prepare('SELECT * FROM cv WHERE ACC_ID=?');
        $stm->execute(array($_SESSION['login']));
        if($stm->rowCount() == 0){
            $stmt = $dbCon->prepare('INSERT INTO cv(CV_DES,ACC_ID) values(?,?)');
            $stmt->execute(array($_POST['skill'],$_SESSION['login']));
            header('location: client.php');
        } else {
            header('location: client.php');
        }
       
    }

?>