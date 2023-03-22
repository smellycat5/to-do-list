<?php

require_once ('xxx.php');
if(isset($_POST['new-task'])):
    $ta = $_POST['new-task'];
endif;
$sql = "INSERT INTO task(description) VALUES ('$ta')";
$stmt= $pdo->prepare($sql);
$stmt->execute();

header('location:index.php');
exit();