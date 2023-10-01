<?php
    include('conexao.php');

    $query = $dbh -> prepare('SELECT * FROM produtos');
    $query -> execute();
    $produtos = $query -> fetchAll();

    /*
    echo '<pre>';
    print_r($produtos);
    echo('</pre>');
    */
?>

<!DOCTYPE html>
<html lang='pt-BR'>
    <head>
        <title>Tabela de Produtos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <style>
            table { text-align: left; }
            tr:nth-child(even) { background-color: yellow; }
            a { color: red; }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Quantidade</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($produtos as $produto) {
                        echo '<tr>';
                        echo '<td>'.$produto['id'].'</td>';
                        echo '<td>'.$produto['nome'].'</td>';
                        echo '<td>'.$produto['valor'].'</td>';
                        echo '<td>'.$produto['quantidade'].'</td>';
                        echo '<td><a href="cadastro.html?idProduto='.$produto['id'].'">Editar</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
