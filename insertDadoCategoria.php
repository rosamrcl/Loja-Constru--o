<?php
include ('config.php');


if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome_categoria = $_POST['nome_categoria'];
}


$stmt = $pdo->prepare("INSERT INTO categoria (nome_categoria)  VALUES (?)");


if ($stmt->execute([$nome_categoria])){
    header("Location: index.php");
    exit();
}else{
    echo "Erro ao cadastrar!";
}

?>