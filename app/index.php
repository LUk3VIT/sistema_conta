<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sistema Contas a Pagar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col mt-3">
                    <form action="login_cliente.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                            <input name="senha" type="password" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
                        <a class="btn btn-warning" href="cadastrar_cliente.php">Cadastre-se</a>
                    </form>
                </div>
            </div>
        </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>