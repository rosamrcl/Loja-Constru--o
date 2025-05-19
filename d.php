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