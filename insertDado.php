<?php
include ('config.php');

$pdo = new PDO ($db, $user ,$pass);

$pdo->exec("INSERT INTO categoria (nome) VALUES (?)");

$pdo->exec("INSERT INTO produto (nome, quantidade, valor, categoria_id) VALUES (?, ?, ?, ?)");


?>