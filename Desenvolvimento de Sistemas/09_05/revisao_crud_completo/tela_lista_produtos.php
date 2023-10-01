<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produto</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <link rel="stylesheet" href="style/estilo_cadastro.php"/>
    </head>
    <body>
        <form action="content/funcao_cadastrar.php" method="post">
            <h3>Listar produtos</h3>
            <label for="">Nome:</label>
            <input type="text" name="nome" id=""><br>
            <label for="">Quantidade:</label>
            <input type="text" name="quantidade" id=""/><br>
            <label for="">Preco:</label>
            <input type="text" name="preco" id=""/><br>
            <input class="submit" type="submit" value="Cadastrar"/>
        </form>
    </body>
</html>
