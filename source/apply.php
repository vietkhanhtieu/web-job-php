<?php 
    session_start();
    $kq = 'waiting';
    require_once('connection.php');
    if(isset($_POST['jobid'])){
        $stm = $dbCon-> prepare('SELECT * FROM apply WHERE ACC_ID=? AND JOB_ID=?');
        $stm->execute(array((int)$_SESSION['login'],(int)$_POST['jobid']));
        // $row = $stm->fetch(PDO::FETCH_ASSOC);
        if($stm->rowCount() == 0) {
            $stmt = $dbCon-> prepare('INSERT INTO apply(ACC_ID,JOB_ID,APP_KQ) values(?,?,?)');
            $stmt->execute(array((int)$_SESSION['login'],(int)$_POST['jobid'],$kq));
            header('location: client.php');
        } else {
            header('location: client.php');
        }   
    }

?> 