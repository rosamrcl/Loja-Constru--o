<?php
include ('config.php');


if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $nome=$_POST['nome'];
        $quantidade=$_POST['quantidade'];
        $unidade=$_POST['unidade'];
        $preco=$_POST['preco'];
        $categoria_id=$_POST['categoria_id'];
}
        
        $stmt = $pdo->prepare("UPDATE produto  SET (nome, quantidade, unidade, preco, categoria_id) VALUES (?, ?, ?, ?, ?)");


        if ($stmt->execute([$nome, $quantidade, $unidade, $preco, $categoria_id])){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}
    




?>