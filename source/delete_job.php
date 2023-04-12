<?php 
    require_once('connection.php');
    $stmt = $dbCon->prepare('DELETE FROM job WHERE JOB_ID = ?');
    $stmt->execute(array((int)$_POST['jid']));
?>