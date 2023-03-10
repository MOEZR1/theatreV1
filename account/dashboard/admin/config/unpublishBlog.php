<?php

include '../../../auth/dbConfig.php';

$bid = $_GET['bid'];
$stmt = $conn->prepare('UPDATE users usr
    set
    usr.active = 0
    where id = '.$uid.' ');

$stmt->execute();
header("Location: ../../a/allUsers");
?>
