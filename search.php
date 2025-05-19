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
            <a href="index.php">Cadastro</a>
            <a href="index.php">Estoque</a>
            <a href="search.php">Buscar</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>
<section class="busca" id="busca">
    <div class="row">
        <div class="image">
            <img src="./ressources/img/banner2.png" alt="">
        </div>
        
        <form action="select.php" method="get">        
            <label for="filtragem">Escolha a filtragem:</label>
            <select class="box" id="filtragem">
            <option class="box" value="crescente">Crescente de nome</option>
            <option class="box" value="decrescente">Decrescente de nome</option>
            <option class="box" value="crescente_quantidade">Crescente de quantidade</option>
            <option class="box" value="decrescente_quantidade">Decrescente de quantidade</option>
            <option class="box" value="id">ID</option>
            </select>
            <input class="btn" type="submit" value="Buscar">
    </form>
    <div class="box">
                <?php                
                ?>
                
                <h2>Categoria</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        
                    </tr>
                    <?php foreach ($result as $product): ?>
                        <tr>
                            <td><?=$product['id'];?></td>
                            <td><?=$product['nome'];?></td>

                        </tr>
                        <?php endforeach; ?>
                </table>       
    
            </div>
    </div>
    
</section>

<footer class="footer" id="footer">
    <a target="_blank" href="https://github.com/RosaCL"><img src="./ressources/img/costureza.png" alt=""></a>
</footer>
</body>
</html>