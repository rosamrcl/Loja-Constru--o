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
        <form action="insertDadoCategoria.php" method="POST">
            <label for="categoria">Categoria</label>
            <input class="box" type="text" name="nome_categoria" id="nome_categoria" placeholder="Categoria">
            <input class="btn" type="submit" value="Enviar">
        </form>

        <form  method="POST">            
            
            <label for="nome">Nome</label>
            <input class="box" type="text" name="nome" id="nome" placeholder="Nome" required>

            <label for="quantidade">Quantidade</label>
            <input class="box" type="number" name="quantidade" id="quantidade" placeholder="Quantidade" required>

            <label for="unidade">Unidade</label>
            <input class="box" type="number" name="unidade" id="unidade" placeholder="Unidade" required>

            <label for="preco">Preço</label>
            <input class="box" type="number" name="preco" id="preco" placeholder="Preço" step="0.010"  required maxlength="10" min="0" max="9999999999" required>

            <select class="box" name="categoria_id" required>
            <option class="box" value="<?= $categoria['id'] ?>">Categoria</option>
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?= $categoria['id_categoria'] ?>"><?= $categoria['nome_categoria'] ?></option>
            <?php endforeach; ?>
            </select>

            <input class="btn" name="adicionar" type="submit" value="Enviar">

        </form>

        <div class="image">
            <img src="./ressources/img/banner.png" alt="">
        </div>
    </div>

        
</section>
<section class="estoque" id="estoque">
        <div class="row">
            <form method="get">    
                <select class="box" id="filtragem" onchange="this.form.submit()">
                    <option class="box" value="">Escolha a filtragem: </option>
                    <option class="box" value="crescente">Crescente de nome (A-Z)</option>
                    <option class="box" value="decrescente">Decrescente de nome(z-A)</option>
                    <option class="box" value="crescente_quantidade">Crescente de quantidade(↑)</option>
                    <option class="box" value="decrescente_quantidade">Decrescente de quantidade (↓)</option>
                    <option class="box" value="id">ID</option>
                </select>
            </form>
        <div class="box">             
                <h2>Produtos Cadastrados</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Unidade</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                        <th>Ações</th>
                        
                    </tr>
                    <?php foreach ($produtos as $product): ?>
                        <tr class="<?= $product['quantidade'] <= 5 ? 'low-stock' : '' ?>">
                            <td><?=$product['id'];?></td>
                            <td><?=$product['nome'];?></td>
                            <td><?=$product['quantidade'];?></td>
                            <td><?=$product['unidade'];?></td>
                            <td><?=$product['categoria'];?></td>
                            <td>R$<?= number_format($product['preco'], 2, ',', '.') ?></td>
                            <td><a class="btn" href="update.php">Editar</a><a class="delete-btn" href="?delete=<?=$product['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir</a></td>  
                        </tr>
                        <?php endforeach; ?>
                </table>  

            </div>
        </div>

        
            

        </div>
    
        
</section>
<footer class="footer" id="footer">
    <a target="_blank" href="https://github.com/RosaCL"><img src="./ressources/img/costureza.png" alt=""></a>
</footer>
</body>
</html>