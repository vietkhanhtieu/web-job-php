<?php 
    $host = 'localhost';
    $dbName = 'jh';
    $username = 'root';
    $password ='';
    $dbCon = new PDO("mysql:host=".$host.";dbname=".$dbName,$username,$password,array(PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>