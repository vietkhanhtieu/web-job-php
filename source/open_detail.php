<?php 
    session_start();
    require_once('connection.php');
    if(isset($_POST['jobId'])){
        $_SESSION['detail'] = $_POST['jobId'];
        header('location: detail_job_company.php');
    }
    else {
        header('location: detail_job_company.php');
    }
?>