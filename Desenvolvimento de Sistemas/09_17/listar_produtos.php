<?php
  include('database/conexao.php');

  $consulta = $banco -> prepare(' SELECT nome, categoria, preco, quantidade FROM produto; ');

  $consulta -> execute();
  $produtos = $consulta -> fetchAll();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Lista de produtos</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style/listar_produtos.css">
  </head>

  <body>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Categoria</th>
          <th scope="col">Preço</th>
          <th scope="col">Quantidade</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach($produtos as $produto) {
            echo '<tr>';
            echo '<td>'.$produto['nome'].'</td>';
            echo '<td>'.$produto['categoria'].'</td>';
            echo '<td>'.$produto['preco'].'</td>';
            echo '<td>'.$produto['quantidade'].'</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
  </body>
</html>
