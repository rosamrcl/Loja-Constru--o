<?php
include ('config.php');

$pdo = new PDO ($db, $user ,$pass);


if($_SERVER['REQUEST_METHOD']=='POST'){
    $categoria= $_POST['categoria'];
}


$stmt = $pdo->prepare("INSERT INTO categoria (nome) VALUES (?)");

if ($stmt->execute([$categoria])){
    header("Location: index.php");
    exit();
}else{
    echo "Erro aos cadastrar!";
}

?>