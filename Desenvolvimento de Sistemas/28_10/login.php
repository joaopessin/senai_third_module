<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <div class="container">
        <div class="row align-middle">

        <h1 class="text-center verde">Formulário de Login</h1>

            <div class="p-3 border rounded-3 col-md-10 col-lg-5 mx-auto">
                <form action="./bd/validarLogin.php" method="post">
                    <label class="form-label verde" for="" >Login</label>
                    <input class="form-control" type="text" name="login" placeholder="usuario@mail.com">
                    <label class="form-label verde" for="">Senha</label>
                    <input class="form-control" type="password" name="senha" id="input-password" >

                    <input type="submit" class="w-100 btn btn-success" value="Entrar">
                    <a class="w-100 btn btn-light" href=".">Tela Inicial</a>
                </form>
            </div>
        </div>
    </div>
    
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
