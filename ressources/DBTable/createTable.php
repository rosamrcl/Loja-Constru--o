<?php
include('config.php');

$pdo = new PDO ($db, $user ,$pass);

$pdo->exec("CREATE TABLE IF NOT EXISTS categoria(
id_categoria INT PRIMARY KEY AUTO_INCREMENT,
nome_categoria VARCHAR (250) NOT NULL);
");

$pdo->exec("CREATE TABLE IF NOT EXISTS produto (
id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR (250) NOT NULL,
quantidade INT NOT NULL,
unidade INT NOT NULL,
preco DECIMAL(10, 2) NOT NULL,
categoria_id INT NOT NULL,
FOREIGN KEY (categoria_id) REFERENCES categoria(id_categoria)
)
");


?>