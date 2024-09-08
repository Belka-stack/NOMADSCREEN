<?php

// Je me connecte à la BDD

$pdo = new PDO('mysql:host=localhost;dbname=nomadscreen', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// Je vérifie
// var_dump($pdo);

// J'ouvre la session 

session_start();

$content = '';

?>