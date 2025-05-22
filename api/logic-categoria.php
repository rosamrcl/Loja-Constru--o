<?php
include("/laragon/www/Loja-Constru--o/api/config.php");

//Adicionar
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['adicionar_categoria'])){
    if(!empty($_POST['nome_categoria'])){
        $stmt = $pdo->prepare("INSERT INTO categoria (nome_categoria) VALUES (?)");
        $stmt->execute([$_POST['nome_categoria']]);
        header("Location: index.php");
        exit();
    }
}


//Delete
if (isset($_GET['delete_categoria'])){
    $stmt=$pdo->prepare("DELETE FROM categoria WHERE id_categoria=?");
    $stmt->execute([$_GET['delete_categoria']]);
    header("Location: index.php");
    exit();    
}


//update

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_categoria'])){
    $stmt = $pdo->prepare("UPDATE categoria SET nome_categoria = ? WHERE id_categoria = ?");
    ($stmt->execute([$_POST[ 'nome_categoria'], $_POST ['id_categoria']]));
    header("Location: index.php");
    exit();
}

$categorias = $pdo->query("SELECT * FROM categoria")->fetchAll(PDO::FETCH_ASSOC);
?>