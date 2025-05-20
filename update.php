<?php
include('config.php');
include('logic.php');



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
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

<section class="cadastro" id="cadastro">
    <div class="row">
        <div class="box">
            <form  method="POST">
                
                <input class="box" type="hidden" name="id" value="<?=$product['id']?>">

                <label for="nome">Nome</label>
                <input class="box" type="text" name="nome" id="nome" placeholder="Nome"  value="<?=$product['nome']?>">
    
                <label for="quantidade">Quantidade</label>
                <input class="box" type="number" name="quantidade" id="quantidade" placeholder="Quantidade"  value="<?=$product['quantidade']?>">
    
                <label for="unidade">Unidade</label>
                <input class="box" type="number" name="unidade" id="unidade" placeholder="Unidade" value="<?=$product['unidade']?>">
    
                <label for="preco">Preço</label>
                <input class="box" type="number" name="preco" id="preco" placeholder="Preço" step="0.010"   maxlength="10" min="0" max="9999999999"  value="<?=$product['preco']?>">
    
                <select class="box" name="categoria_id" required>
                <option class="box" value="<?= $categoria['id'] ?>">Categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome_categoria'] ?></option>
                <?php endforeach; ?>
                </select>
    
                        
            <input class="btn" name="update" type="submit" value="Atualizar">
            </form>
        </div>
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