<?php
try{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=mydb1', 'root','');
} catch(PDOException $e){
    die('failed');
}

require_once 'index1.php';
