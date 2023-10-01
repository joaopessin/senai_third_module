<?php
    include('conexao.php');

    $query = $dbh->prepare('SELECT * FROM produtos');
    $query->execute();

    $produtos = $query->fetchAll();

    //echo '<pre>';
    //print_r($produtos);
    //echo '</pre>';
?>
<!DOCTYPE html>
<html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <style>
        table{
           text align: left;
        }
        tr:nth-child(even){
            background-color: gray;
            color:white;
        }
        
    </style>
    </head>

    <body>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Preco</th>
                    <th>Atualizar</th>
                </tr>        
            </thead>
            <tbody>
                <?php
                foreach($produtos as $linha){
                    echo '<tr>';
                    echo '<td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['quantidade'].'</td>';
                    echo '<td>'.$linha['preco'].'</td>';
                    echo '<td><a href="atualizarProduto.php?idProd='.$linha['id'].'">Atualizar</a></td>';
                    echo '<td><a href="deletar.php?idProd='.$linha['id'].'">Deletar</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
