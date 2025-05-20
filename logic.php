<?php
include ('config.php');


//ADICIONAR
if ($_SERVER['REQUEST_METHOD'] ==='POST' && isset($_POST['adicionar'])){
    if(!empty($_POST['nome'])
    && !empty ($_POST['quantidade'])
    && !empty($_POST['unidade'])
    && !empty($_POST['preco'])
    && !empty($_POST['categoria_id'])){
        $stmt = $pdo->prepare("INSERT INTO produto (nome, quantidade, unidade, preco, categoria_id) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$_POST['nome'], 
        $_POST['quantidade'], 
        $_POST['unidade'],
        $_POST['preco'],
        $_POST['categoria_id']]);
        header("Location: index.php");
        exit();
    }
}


//UPDATE
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
    $stmt = $pdo->prepare("UPDATE produto SET nome = ?, quantidade = ?, unidade = ?, preco = ?, categoria_id = ? WHERE id = ?");
    ($stmt->execute([$_POST[ 'nome'], $_POST ['quantidade'], $_POST ['unidade'], $_POST ['preco'], $_POST ['categoria_id'], $_POST ['id']]));
    header("Location: index.php");
    exit();
}
    

//DELETE
if (isset($_GET['delete'])){
    $stmt=$pdo->prepare("DELETE FROM produto WHERE id=?");
    $stmt->execute([$_GET['delete']]);
    header("Location: index.php");
    exit();    
}

//SELEÇÃO
$order = "product.nome ASC";
if(isset($_GET['filtro'])){
    switch ($_GET['filtro']){
        case 'crescente':
            $order = "product.nome ASC";
            break;
        case 'decrescente':
            $order = "product.nome DESC";
            break;
        case 'crescente_quantidade':
            $order = "product.quantidade ASC";
            break;
        case 'decrescente_quantidade':
            $order = "product.quantidade DESC";
            break;
        case 'id':
            $order = "product.id ASC";
            break;
    }
}

$produtos = $pdo->query("SELECT product.*, c.nome_categoria AS categoria FROM produto product JOIN categoria c ON product.categoria_id = c.id_categoria ORDER BY $order")->fetchAll(PDO::FETCH_ASSOC);
$categorias = $pdo->query("SELECT * FROM categoria")->fetchAll(PDO::FETCH_ASSOC);









?>