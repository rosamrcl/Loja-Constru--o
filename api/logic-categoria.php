<?php
include("/laragon/www/Loja-Constru--o/api/config.php");

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


//Delete
if ($_SERVER['REQUEST_METHOD']==='GET'){
    $id_categoria=$_GET['id_categoria'];
}
$stmt=$pdo->prepare("DELETE FROM categoria WHERE id_categoria=:id_categoria");
$stmt->bindParam(":id_categoria",$id_categoria);

if ($stmt->execute()){
    header("Location: index.php");
    exit();
}


//update

if ($_SERVER['REQUEST_METHOD'] ==='GET'){
            $id_categoria=$_GET['id_categoria'];
    }elseif($_SERVER['REQUEST_METHOD'] ==='POST'){
        $nome_categoria=$_POST['nome_categoria'];
    }
        
$stmt = $pdo->prepare("UPDATE categoria  SET nome_categoria=:nome_categoria WHERE id_categoria=:id_categoria");


        if ($stmt->execute([$nome_categoria])){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}

$categorias = $pdo->query("SELECT * FROM categoria")->fetchAll(PDO::FETCH_ASSOC);
?>