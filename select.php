<?php
include('config.php');

if($_SERVER ['REQUEST_METHOD']==='GET'){
    $id=$_GET['id'];
    $nome=$_GET['nome'];
    $quantidade=$_GET['quantidade'];    
}

switch($filtro) {
        case 'crescente':
            $stmt = $conn->prepare("SELECT * FROM produto ORDER BY nome ASC");
            break;
        case 'decrescente':
            $stmt = $conn->prepare("SELECT * FROM produto ORDER BY nome DESC");
            break;
        case 'crescente_quantidade':
            $stmt = $conn->prepare("SELECT * FROM produto ORDER BY quantidade ASC");
            break;
        case 'decrescente_quantidade':
            $stmt = $conn->prepare("SELECT * FROM produto ORDER BY quantidade DESC");
            break;
        case 'id':
            $stmt = $conn->prepare("SELECT * FROM produto ORDER BY id ASC");
            break;
        default:
            $stmt = $conn->prepare("SELECT * FROM produto");
    }



if ($stmt->execute()){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}





?>