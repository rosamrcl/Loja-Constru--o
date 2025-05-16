<?php
include ('config.php');

$pdo = new PDO ($db, $user ,$pass);


if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $nome=$_POST['nome'];
        $quantidade=$_POST['quantidade'];
        $unidade=$_POST['unidade'];
        $preco=$_POST['preco'];
        $categoria_id=$_POST['categoria_id'];
}
        
        $stmt = $pdo->prepare("INSERT INTO produto (nome, quantidade, unidade, preco, categoria_id) VALUES (?, ?, ?, ?, ?)");


        if ($stmt->execute([$nome, $quantidade, $unidade, $preco, $categoria_id])){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}
    




?>