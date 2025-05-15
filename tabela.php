<?php
include('config.php');

$pdo->exec("CREATE TABLE IF NOT EXISTS produto (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (250) NOT NULL,
quantidade INT NOT NULL,
unidade INT NOT NULL,
preco INT NOT NULL,
)");

$pdo->exec("CREATE TABLE IF NOT EXISTS categoria(
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (250) NOT NULL,
categoria_id INT NOT NULL,
FOREIGN KEY (categoria_id) REFERENCES categoria(id)
)");

?>