<?php
    require_once('connection.php');
    
    $query = $dbCon -> prepare('INSERT INTO contact(CT_NAME, CT_EMAIL, CT_MSG) VALUES(?, ?,?)');
    $query -> execute(array( $_POST['contact-name'],$_POST['contact-email'], $_POST['contact-message']));
    header('location: index.php#contact');
?>