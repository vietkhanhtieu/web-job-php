<?php 
    session_start();
    if(isset($_POST['sumitLogout'])){
        session_destroy();
        header('location: index.php');
    }
?>