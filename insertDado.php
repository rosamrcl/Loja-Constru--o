<?php
include ('config.php');

$pdo = new PDO ($db, $user ,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] ==='POST'){

    try{
        $nome=$_POST['nome'];
        $quantidade=$_POST['quantidade'];
        $unidade=$_POST['unidade'];
        $preco=$_POST['preco'];
        $categoria=$_POST['categoria_id'];
        
        $stmt = $pdo->prepare("INSERT INTO produto (nome, quantidade, unidade, preco, categoria_id) VALUES (?, ?, ?, ?, ?)");


        if ($stmt->execute([$nome, $quantidade, $unidade, $preco, $categoria])){
            header("Location: index.php");
            exit();
        }
    }catch (PDOException $e) {
        die("Erro no banco de dados: " . $e->getMessage());
    }
}





?>