<?php
include('config.php');

if($_SERVER ['REQUEST_METHOD']==='GET'){
    $id=$_GET['id'];
    $nome=$_GET['nome'];
    $quantidade=$_GET['quantidade'];    
}

$stmt=$conn->prepare("SELECT * FROM produto ORDER BY nome ASC");
$stmt=$conn->prepare("SELECT * FROM produto ORDER BY quantidade ASC");
$stmt=$conn->prepare("SELECT * FROM produto ORDER BY nome DESC");
$stmt=$conn->prepare("SELECT * FROM produto ORDER BY quantidade DESC");
$stmt=$conn->prepare("SELECT * FROM produto WHERE id=:id");


if ($stmt->execute()){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}

?>