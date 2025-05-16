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
        <form action="insertDado.php" method="POST">
            
            <input class="box" type="text" name="nome" id="nome" placeholder="Nome">
            
            <input class="box" type="number" name="quantidade" id="quantidade" placeholder="Quantidade">

            <input class="box" type="number" name="quantidade" id="unidade" placeholder="Unidade">

            <input class="box" type="number" name="preco" id="preco" placeholder="Preço">
            
            
            <input class="btn" type="submit" value="Enviar">
        </form>
        <div class="image">
            <img src="./ressources/img/banner.png" alt="">
        </div>
    </div>

        
    </section>
    <section class="estoque" id="estoque">
        <div class="row">
            <div class="image">
                <img src="./ressources/img/banner2.png" alt="">
            </div>
            <div class="box">
                <h2>Produtos em estoque</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Unidade</th>
                        <th>Preço</th>
                    </tr>
                    <?php while ($product = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?=$product['id'];?></td>
                            <td><?=$product['nome'];?></td>
                            <td><?=$product['quantidade'];?></td>
                            <td><?=$product['unidade'];?></td>
                            <td><?=$product['preco'];?></td>
                            <td><a class="btn" href="update.php?id=<?= $product['id'] ?>">Editar</a><a class="delete-btn" href="excluir.php?id=<?=$product['id']; ?>" onclick="return confirm ('Tem certeza que deseja excluir?')">Excluir</a></td>            
                            
                        </tr>
                        <?php endwhile; ?>
                </table>       
    
            </div>
            

        </div>
    
        
    </section>
</body>
</html>