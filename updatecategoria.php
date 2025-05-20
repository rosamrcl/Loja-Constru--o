<?php
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

?>