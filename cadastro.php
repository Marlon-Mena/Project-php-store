<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/cadastro.css"> <!-- o caminho do css -->
    <title>Store</title>
  </head>
  <body>
<!--cadastro de usuário-->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro!</h1>
                <form action="cadastro_scripts.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required> 
                    </div>
                    <div class="form-group">
                        <label for="nome">Endereço</label>
                        <input type="text" class="form-control" name="endereco"> 
                    </div>
                    <div class="form-group">
                        <label for="nome">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="nome">E-mail</label>
                        <input type="email" class="form-control" name="email"> 
                    </div>
                    <div class="form-group">
                        <label for="nome">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-voltar" value="Enviar">
                    </div>
                    <div class="form-group">
                        <a href="login.php" class="btn-login">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

  </body>
</html>