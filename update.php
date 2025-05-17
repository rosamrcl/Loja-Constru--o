<?php
include ('config.php');


if ($_SERVER['REQUEST_METHOD'] ==='POST'){
        $nome=$_POST['nome'];
        $quantidade=$_POST['quantidade'];
        $unidade=$_POST['unidade'];
        $preco=$_POST['preco'];
        $categoria_id=$_POST['categoria_id'];
}
        
        $stmt = $pdo->prepare("UPDATE produto SET nome = ?, quantidade = ?, unidade = ?, preco = ?, categoria_id = ? WHERE id = ?");


        if ($stmt->execute([$nome, $quantidade, $unidade, $preco, $categoria_id, $id])){
            header("Location: index.php");
            exit();
        }else{
    echo "Erro ao cadastrar!";
}
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambrósio - Loja de Construção</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./ressources/css/style.css">
</head>
<body>
    <header class="header"  id="header">
        <a href="#" class="logo"><img src="./ressources/img/logo.png" alt=""></a>
        <nav class="navbar">
            <a href="#cadastro">Cadastro</a>
            <a href="#estoque">Estoque</a>
            <a href="#busca">Buscar</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

<section class="cadastro" id="cadastro">
    <div class="row">


        <form  method="POST">
            
            <label for="nome">Nome</label>
            <input class="box" type="text" name="nome" id="nome" placeholder="Nome">

            <label for="quantidade">Quantidade</label>
            <input class="box" type="number" name="quantidade" id="quantidade" placeholder="Quantidade">

            <label for="unidade">Unidade</label>
            <input class="box" type="number" name="unidade" id="unidade" placeholder="Unidade">

            <label for="categoria_id">Categoria</label>
            <input class="box" type="number" name="categoria_id" id="categoria_id" placeholder="Categoria">

            <label for="preco">Preço</label>
            <input class="box" type="number" name="preco" id="preco" placeholder="Preço" step="0.010"  required maxlength="10" min="0" max="9999999999">
                        
            <input class="btn" type="submit" value="Enviar">

        </form>

        <div class="image">
            <img src="./ressources/img/banner.png" alt="">
        </div>
    </div>

        
</section>

<footer class="footer" id="footer">
    <a target="_blank" href="https://github.com/RosaCL"><img src="./ressources/img/costureza.png" alt=""></a>
</footer>
</body>
</html>