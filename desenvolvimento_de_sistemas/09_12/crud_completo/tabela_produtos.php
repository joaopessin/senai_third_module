<?php
    include('conexao.php');
    $query = $dbh->prepare('SELECT id, nome, valor, quantidade, categoria 
    FROM produtos INNER JOIN categoria on produtos.cat = categoria.cod;');
    
    $query->execute();

    $produtos = $query->fetchAll();

    // echo '<pre>';
    // print_r($produtos);
    // echo '<pre>';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tabela produtos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <style>
            table{
                text-align:left;
            }
            tr:nth-child(even){
                background-color: pink;
                color:white;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Editar Produto</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    foreach($produtos as $produto){
                        echo '<tr>';
                        echo '<td>'.$produto['id'].'</td>';
                        echo '<td>'.$produto['nome'].'</td>';
                        echo '<td>'.$produto['valor'].'</td>';
                        echo '<td>'.$produto['quantidade'].'</td>';
                        echo '<td>'.$produto['categoria'].'</td>';
                        echo '<td><a href="edit_produto.php?idProduto='.$produto['id'].'">Editar</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>