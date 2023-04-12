<?php
    session_start();
    require_once('connection.php');
    $img = 'images/'.rand(1,3).'.jpg';
    $stmt = $dbCon->prepare('INSERT INTO job(JOB_NAME,JOB_DES,JOB_IMG,JOB_TYPE,JOB_LOC,COM_ID) values(?,?,?,?,?,?)');
    $stmt->execute(array($_POST['job-title'],$_POST['job-desc'],$img,$_POST['major'],$_POST['location'],$_SESSION['cid']));
    header('location: company.php');
?>