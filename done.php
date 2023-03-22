<?php

    require_once ('xxx.php');

    if (isset($_GET['id'])){
        $task_id = $_GET['id'];
        $statement=$pdo->prepare("UPDATE task SET completed = 1 WHERE id = $task_id");
        $statement->execute();
        header("location: index.php");
    }