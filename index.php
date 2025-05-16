<?php
include('config.php');

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
<section class="busca" id="busca">
    <div class="row">
        <div class="image">
            <img src="./ressources/img/banner2.png" alt="">
        </div>
        <form action="select.php" method="get">        
            <input type="text" class="box">
            <input class="btn" type="submit" value="Buscar">
    </form>
    <div class="box">
                <?php                
                $stmt=$conn->prepare("SELECT * FROM categoria");
                $stmt->execute();
                $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                
                <h2>Categoria</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        
                    </tr>
                    <?php foreach ($result as $product): ?>
                        <tr>
                            <td><?=$product['id_categoria'];?></td>
                            <td><?=$product['nome_categoria'];?></td>

                        </tr>
                        <?php endforeach; ?>
                </table>       
    
            </div>
    </div>
    
</section>
<section class="cadastro" id="cadastro">
    <div class="row">
        <form action="insertDadoCategoria.php" method="POST">
            <label for="categoria">Categoria</label>
            <input class="box" type="text" name="nome_categoria" id="nome_categoria" placeholder="Categoria">
            <input class="btn" type="submit" value="Enviar">
        </form>

        <form action="insertDado.php" method="POST">
            
            <label for="nome">Nome</label>
            <input class="box" type="text" name="nome" id="nome" placeholder="Nome">

            <label for="quantidade">Quantidade</label>
            <input class="box" type="number" name="quantidade" id="quantidade" placeholder="Quantidade">

            <label for="unidade">Unidade</label>
            <input class="box" type="number" name="unidade" id="unidade" placeholder="Unidade">

            <label for="categoria_id">Categoria</label>
            <input class="box" type="text" name="categoria_id" id="categoria_id" placeholder="Categoria">

            <label for="preco">Preço</label>
            <input class="box" type="number" name="preco" id="preco" placeholder="Preço" step="0.010"  required maxlength="10" min="0" max="9999999999">
                        
            <input class="btn" type="submit" value="Enviar">

        </form>

        <div class="image">
            <img src="./ressources/img/banner.png" alt="">
        </div>
    </div>

        
</section>
<section class="estoque" id="estoque">
        <div class="row">
            
            <div class="box">
                <?php                
                $stmt=$conn->prepare("SELECT * FROM categoria");
                $stmt->execute();
                $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                
                <h2>Categoria</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        
                    </tr>
                    <?php foreach ($result as $product): ?>
                        <tr>
                            <td><?=$product['id_categoria'];?></td>
                            <td><?=$product['nome_categoria'];?></td>
                            
                            <td><a class="btn" href="updatecategoria.php?id_categoria=<?= $product['id_categoria'] ?>">Editar</a><a class="delete-btn" href="deletecategoria.php?id_categoria=<?=$product['id_categoria']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir</a></td>            
                            
                        </tr>
                        <?php endforeach; ?>
                </table>       
    
            </div>
            
            <div class="box">
                <?php
                $stmt=$conn->prepare("SELECT * FROM produto");                
                $stmt->execute();
                $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                
                ?>
                
                <h2>Produtos em estoque</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Unidade</th>
                        <th>Categoria</th>
                        <th>Preço</th>
                    </tr>
                    <?php foreach ($result as $product): ?>
                        <tr>
                            <td><?=$product['id'];?></td>
                            <td><?=$product['nome'];?></td>
                            <td><?=$product['quantidade'];?></td>
                            <td><?=$product['unidade'];?></td>
                            <td><?=$product['categoria_id'];?></td>
                            <td>R$<?=$product['preco'];?></td>
                            <td><a class="btn" href="update.php?id=<?= $product['id'] ?>">Editar</a><a class="delete-btn" href="delete.php?id=<?=$product['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir</a></td>            
                            
                        </tr>
                        <?php endforeach; ?>
                </table>       
    
            </div>
            

        </div>
    
        
</section>
</body>
</html>